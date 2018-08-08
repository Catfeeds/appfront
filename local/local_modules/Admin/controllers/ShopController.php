<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace appfront\local\local_modules\admin\controllers;

use fecshop\app\appfront\modules\AppfrontController;
use Yii;
use yii\web\Response;
use yii\data\Pagination;
use yii\web\UploadedFile;
use yii\mongodb\Query;

/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */

// 后台首页控制器
class ShopController extends PublicsController
{

    public function init()
    {
        parent::init();
        // 加载模板页面
        Yii::$service->page->theme->layoutFile = 'admin.php';
    }
//=========================店铺管理===============================
    //商家
    public function actionIndex(){

        $_SESSION['pagess']="index";
        // 获取数据
        $request = Yii::$app->request;
        $get = $request->get();
        $shop_name = $get['shop_name'];
        $sql = " select count(*) tot from shop where shop_type = 2";
        if(!empty($shop_name)){
            $sql .=" and shop_name like '%$shop_name%'";
        }
        //查询订单表数量
        $countArr = Yii::$app->db->createCommand($sql)->queryOne();


        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $countArr['tot'],
        ]);
        $sql = " select s.shop_id,s.shop_name,p.province_name,d.district_name,c.city_name from shop s ,sys_city c,sys_district d,sys_province p where s.province_id = p.province_id and s.city_id = c.city_id and s.district_id= d.district_id and shop_type = 2";
        if(!empty($shop_name)){
            $sql .=" and s.shop_name like '%$shop_name%'";
        }
        $sql .=" limit $pagination->offset , $pagination->limit";
        $arr = Yii::$app->db->createCommand($sql)->queryAll();

 
        //查询所有的
        $datas["count"] = $countArr['tot'];
        $datas["shop"] = $arr;
        $datas["shop_name"] = $shop_name;
        $datas["pagination"] = $pagination;
        return $this->render($this->action->id, $datas);
    }


//=========================水司管理===============================

    //水司
    public function actionWater(){
        $_SESSION['pagess']="water";

        // 获取数据
        $request = Yii::$app->request;
        $get = $request->get();
        $shop_name = $get['shop_name'];
        $sql = " select count(*) tot from shop where shop_type = 1";
        if(!empty($shop_name)){
            $sql .=" and shop_name like '%$shop_name%'";
        }
        //查询订单表数量
        $countArr = Yii::$app->db->createCommand($sql)->queryOne();


        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $countArr['tot'],
        ]);
        $sql = " select s.shop_id,s.shop_name,p.province_name,d.district_name,c.city_name from shop s ,sys_city c,sys_district d,sys_province p where s.province_id = p.province_id and s.city_id = c.city_id and s.district_id= d.district_id and shop_type = 1";
        if(!empty($shop_name)){
            $sql .=" and s.shop_name like '%$shop_name%'";
        }
        $sql .=" limit $pagination->offset , $pagination->limit";
        $arr = Yii::$app->db->createCommand($sql)->queryAll();

 
        //查询所有的
        $datas["count"] = $countArr['tot'];
        $datas["shop"] = $arr;
        $datas["shop_name"] = $shop_name;
        $datas["pagination"] = $pagination;
        return $this->render($this->action->id, $datas);
    }
    //水司订单管理
    public function actionWaterorder(){
        // 获取数据
        $request = Yii::$app->request;
        $shop_id = $request->get('id');

        //按shop_id查询店家详情
        $shop_name = Yii::$app->db->createCommand("select shop_name from shop where shop_id=$shop_id")->queryOne();
        $datas['shop_name'] = $shop_name['shop_name'];
        //按shop_id查询店家订单信息
        
        $get = $request->get();

        $increment_id = $get['increment_id'];
        $customer_firstname = $get['customer_firstname'];
        if($get["flag"]){
            $flag = $get['flag']-1;
            $sql = " select count(*) tot from sales_flat_order where shop_id=$shop_id and goods_type=1 and order_status={$flag}";
        }else{
            $sql = " select count(*) tot from sales_flat_order where shop_id=$shop_id and goods_type=1 and order_status<5";
        }
        if(!empty($increment_id)){
            $sql .= " and increment_id like '%$increment_id%'";
        }
        if(!empty($customer_firstname)){
            $sql .= " and customer_firstname like '%$customer_firstname%' ";
        }
        //查询订单表数量
        $countArr = Yii::$app->db->createCommand($sql)->queryOne();


        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $countArr['tot'],
        ]);
        //查询订单产品表
        if($get["flag"]){
            $flag = $get['flag']-1;
            $sql = " select sales_flat_order.* from sales_flat_order where sales_flat_order.shop_id=$shop_id and goods_type=1  and sales_flat_order.order_status={$flag}";
        }else {
            $sql = " select sales_flat_order.* from sales_flat_order where sales_flat_order.shop_id=$shop_id and goods_type=1  and order_status<5";
        }
        if(!empty($increment_id)){
            $sql .= " and increment_id like '%$increment_id%' ";
        }
        if(!empty($customer_firstname)){
            $sql .= " and customer_firstname like '%$customer_firstname%' ";
        }
        $sql .= " limit $pagination->offset , $pagination->limit";
        $arr = Yii::$app->db->createCommand($sql)->queryAll();

        $sql = "select * from sales_coupon where coupon_id in(";

        foreach ($arr as $v){

            if($v[coupon_code]){
                $sql = $sql.$v[coupon_code].",";
            }
        }
        $sql = $sql."0)";

        $cou = Yii::$app->db->createCommand($sql)->queryAll();

        foreach ($arr as &$v){
            foreach ($cou as $v1){
                if($v1['coupon_id'] == $v['coupon_code']){
                    $v = array_merge($v,$v1);
                }
            }
        }
        $sql = "select * from sales_flat_order_item where order_id in (";
        foreach ($arr as $v) {
            $sql = $sql . $v["order_id"] . ",";
        };
        // $sql = substr($sql, 0, -1);
        $sql .= "0)";

        $arr1 = Yii::$app->db->createCommand($sql)->queryAll();
        foreach ($arr as $k => &$v) {
            $v["goodDatas"] = [];
            foreach ($arr1 as $k1 => &$v1) {
                if ($v1["order_id"] == $v["order_id"]) {
                    array_push($v["goodDatas"], $v1);
                }
            }
        };
        $all = Yii::$app->db->createCommand("select o.order_status from sales_flat_order o where shop_id=$shop_id and order_status<5" )->queryAll();
            
            
        //查询所有的
        $datas['increment_id'] = $increment_id;
        $datas['customer_firstname'] = $customer_firstname;
        $datas["orders"] = $arr;
        $datas["shop_id"] = $shop_id;
        $datas["pagination"] = $pagination;
        $datas["all"] = $all;
        $datas["flag"] = $get["flag"]?$get["flag"]:0;       
        return $this->render($this->action->id,$datas);
    }
    //水司服务订单管理
    public function actionWaterfuwuorder(){
        // 获取数据
        $request = Yii::$app->request;
        $shop_id = $request->get('id');

        //按shop_id查询店家详情
        $shop_name = Yii::$app->db->createCommand("select shop_name from shop where shop_id=$shop_id")->queryOne();
        $datas['shop_name'] = $shop_name['shop_name'];
        //按shop_id查询店家订单信息
        
        $get = $request->get();

        $increment_id = $get['increment_id'];
        $customer_firstname = $get['customer_firstname'];
        if($get["flag"]){
            $flag = $get['flag']-1;
            $sql = " select count(*) tot from sales_flat_order where shop_id=$shop_id and goods_type=2 and order_status={$flag}";
        }else{
            $sql = " select count(*) tot from sales_flat_order where shop_id=$shop_id and goods_type=2 and order_status<5";
        }
        if(!empty($increment_id)){
            $sql .= " and increment_id like '%$increment_id%'";
        }
        if(!empty($customer_firstname)){
            $sql .= " and customer_firstname like '%$customer_firstname%' ";
        }
        //查询订单表数量
        $countArr = Yii::$app->db->createCommand($sql)->queryOne();


        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $countArr['tot'],
        ]);
        //查询订单产品表
        if($get["flag"]){
            $flag = $get['flag']-1;
            $sql = " select sales_flat_order.* from sales_flat_order where sales_flat_order.shop_id=$shop_id and goods_type=2  and sales_flat_order.order_status={$flag}";
        }else {
            $sql = " select sales_flat_order.* from sales_flat_order where sales_flat_order.shop_id=$shop_id and goods_type=2  and order_status<5";
        }
        if(!empty($increment_id)){
            $sql .= " and increment_id like '%$increment_id%' ";
        }
        if(!empty($customer_firstname)){
            $sql .= " and customer_firstname like '%$customer_firstname%' ";
        }
        $sql .= " limit $pagination->offset , $pagination->limit";
        $arr = Yii::$app->db->createCommand($sql)->queryAll();

        $sql = "select * from sales_coupon where coupon_id in(";

        foreach ($arr as $v){

            if($v[coupon_code]){
                $sql = $sql.$v[coupon_code].",";
            }
        }
        $sql = $sql."0)";

        $cou = Yii::$app->db->createCommand($sql)->queryAll();

        foreach ($arr as &$v){
            foreach ($cou as $v1){
                if($v1['coupon_id'] == $v['coupon_code']){
                    $v = array_merge($v,$v1);
                }
            }
        }
        $sql = "select * from sales_flat_order_item where order_id in (";
        foreach ($arr as $v) {
            $sql = $sql . $v["order_id"] . ",";
        };
        // $sql = substr($sql, 0, -1);
        $sql .= "0)";

        $arr1 = Yii::$app->db->createCommand($sql)->queryAll();
        foreach ($arr as $k => &$v) {
            $v["goodDatas"] = [];
            foreach ($arr1 as $k1 => &$v1) {
                if ($v1["order_id"] == $v["order_id"]) {
                    array_push($v["goodDatas"], $v1);
                }
            }
        };
        $all = Yii::$app->db->createCommand("select o.order_status from sales_flat_order o where shop_id=$shop_id and order_status<5" )->queryAll();
            
            
        //查询所有的
        $datas['increment_id'] = $increment_id;
        $datas['customer_firstname'] = $customer_firstname;
        $datas["orders"] = $arr;
        $datas["shop_id"] = $shop_id;
        $datas["pagination"] = $pagination;
        $datas["all"] = $all;
        $datas["flag"] = $get["flag"]?$get["flag"]:0;       
        return $this->render($this->action->id,$datas);
    }
//=========================分类管理===============================

    // 分类管理

    public function actionClasslist(){

        $_SESSION['pagess']="classlist";

        // 查看所有分类数据
        $query = new Query;

        $request = Yii::$app->request;

        if ($_GET['id']) {
            # code...
            $where['parent_id']=$_GET['id'];
        }else{
            $where['parent_id']="0";

        }
        if(!empty($_GET['name'])){
            $where['name']['name_zh'] = $_GET['name'];
        }
        $count = $query->from('category')->where($where)->count();

        //实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $count,
        ]);

        // 进行数据查询
        $class=$query->from('category')
                     ->orderBy("sort desc")
                     ->where($where)
                     ->offset($pagination->offset)
                     ->limit($pagination->limit)
                     ->all();
        $data['class']=$class;
        $data['count']=$count;
        $data["pagination"] = $pagination;

        return $this->render($this->action->id,$data);
    }

    // 分类添加页面

    public function actionClassadd(){

        // 添加分类
        return $this->render($this->action->id);

    }

    // 分类的添加操作
    public function actionClassinsert(){
        // 获取表单提交数据
        $request = Yii::$app->request;
        $data = $request->post();

        // 上传分类图片

        //文件上传存放的目录  

        $folder ='../../appimage/common/media/catalog/';
         
        $file=$_FILES['img'];

        // 获取用户上传的数量

        $size=count($file['name']);

        // 接收文件名
        $name=$file['name'];

        // 接收临时目录
        $tmp_name=$file['tmp_name'];

        // 错误编码

        $error=$file['error'];

        if ($error==0) {

            // 检测文件是否来自于表单
            if (is_uploaded_file($tmp_name)) {
                # code...
                // 新的文件名
                $ext=substr($name,strrpos($name,'.'));

                $newName=time().rand().$ext;

                // 进行上传

                if (move_uploaded_file($tmp_name,$folder.$newName)) {
                    
                }
            }
        }


        $arr=[
            "created_at"=>time(),
            "created_user_id"=>0,
            "updated_at"=>0,
            "type"=>$data['type'],
            "parent_id"=>$data['parent_id'],
            "name"=>[
                "name_en"=>$data['name'],
                "name_fr"=>"",
                "name_de"=>"",
                "name_es"=>"",
                "name_ru"=>"",
                "name_pt"=>"",
                "name_zh"=>$data['name'],

            ],
            "status"=>1,
            "url_key"=>"",
            "description"=>[
                "description_en"=>"$data[description]",
                "description_fr"=>"",
                "description_de"=>"",
                "description_es"=>"",
                "description_ru"=>"",
                "description_pt"=>"",
                "description_zh"=>"$data[description]",
            ],
            "title"=>[
                "title_en"=>"$data[name]",
                "title_fr"=>"",
                "title_de"=>"",
                "title_es"=>"",
                "title_ru"=>"",
                "title_pt"=>"",
                "title_zh"=>"$data[name]",
            ],

            "meta_description"=>[
                "meta_description_en"=>"$data[description]",
                "meta_description_fr"=>"",
                "meta_description_de"=>"",
                "meta_description_es"=>"",
                "meta_description_ru"=>"",
                "meta_description_pt"=>"",
                "meta_description_zh"=>"$data[description]",
            ],
            "meta_keywords"=>[
                "meta_keywords_en"=>"$data[meta_keywords]",
                "meta_keywords_fr"=>"",
                "meta_keywords_de"=>"",
                "meta_keywords_es"=>"",
                "meta_keywords_ru"=>"",
                "meta_keywords_pt"=>"",
                "meta_keywords_zh"=>"$data[meta_keywords]",
            ],

            "menu_custom"=>[
                "menu_custom_en"=>"",
                "menu_custom_fr"=>"",
                "menu_custom_de"=>"",
                "menu_custom_es"=>"",
                "menu_custom_ru"=>"",
                "menu_custom_pt"=>"",
                "menu_custom_zh"=>"",
            ],

            "level"=>(int)$data[level],
            "filter_product_attr_selected"=>"style,dresses-length,pattern-type,sleeve-length,collar,color",
            "filter_product_attr_unselected"=>0,
            "menu_show"=>(int)$data['menu_show'],
            "sort"=>(int)$data['sort'],
            "img"=>$newName,
        ];


            

        $collection = Yii::$app->mongodb->getCollection('category');

        if($a=$collection->insert($arr)){


             return $this->redirect(['shop/classlist']);

        }else{
            return $this->redirect($_SERVER['HTTP_REFERER']);

        }
            
    }

    // 分类的显示隐藏修改

    public function actionClasseditshow(){
        // 获取数据
        $request = Yii::$app->request;
        $data = $request->get();

        $arr["_id"]=$data['id'];
        $arr["menu_show"]=(int)$data['menu_show'];

        // 修改审核状态

        // 修改商品的上下架

        $res=Yii::$app->mongodb->getCollection('category')->save($arr);
        
        // 判断
        if ($res) {
            return $this->redirect($_SERVER['HTTP_REFERER']);
        }else{
            return $this->redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function actionClasseditsort(){
        // 获取数据
        $request = Yii::$app->request;
        $data = $request->get();

        $arr["_id"]=$data['id'];
        $arr["sort"]=$data['sort'];


        // 修改审核状态

        // 修改商品的上下架

        $res=Yii::$app->mongodb->getCollection('category')->save($arr);
        
    }

    // 分类删除操作

    public function actionClassdel(){
        // 获取数据
        $request = Yii::$app->request;
        $id = $request->get('id');
        // 获取被删除的数据
        $data=Yii::$app->mongodb->getCollection('category')->findOne(['_id'=>$id]);
        // 执行数据删除
        $res=Yii::$app->mongodb->getCollection('category')->remove(['_id'=>$id]);

        // 判断是否删除成功
        if ($res) {


            // 如果删除成功，删除对应图片
            if ($data['image']&&file_exists("../../appimage/common/media/catalog/".$data['image'])) {
                unlink("../../appimage/common/media/catalog/".$data['image']);
            }
            
            return $this->redirect($_SERVER['HTTP_REFERER']);

            exit;
        }else{
            return $this->redirect($_SERVER['HTTP_REFERER']);
            exit;
        }
    }

    // 查看分类的页面

    public function actionClassfind(){

        // 获取数据
        $request = Yii::$app->request;
        $id = $request->get('id');
        
        // 获取商品数据
        $data['class']=Yii::$app->mongodb->getCollection('category')->findOne(['_id'=>"$id"]);

        // 加载页面
        return $this->render($this->action->id,$data);
    }

    // 分类的修改功能

    public function actionClassedit(){

        // 获取数据
        $request = Yii::$app->request;
        $data = $request->post();

        // 上传分类图片

        if ($_FILES['img']['name']) {
            
            //文件上传存放的目录  

            $folder ='../../appimage/common/media/catalog/';
             
            $file=$_FILES['img'];

            // 获取用户上传的数量

            $size=count($file['name']);

            // 接收文件名
            $name=$file['name'];

            // 接收临时目录
            $tmp_name=$file['tmp_name'];

            // 错误编码

            $error=$file['error'];

            if ($error==0) {

                // 检测文件是否来自于表单
                if (is_uploaded_file($tmp_name)) {
                    # code...
                    // 新的文件名
                    $ext=substr($name,strrpos($name,'.'));

                    $newName=time().rand().$ext;

                    // 进行上传

                    if (move_uploaded_file($tmp_name,$folder.$newName)) {
                        
                    }
                }
            }
        }

        

        $newName=$newName?$newName:$data['oldimg'];


        $arr=[
            "_id"=>$data[_id],
            "created_at"=>time(),
            "created_user_id"=>0,
            "updated_at"=>0,
            "type"=>$data['type'],
            "parent_id"=>$data['parent_id'],
            "name"=>[
                "name_en"=>$data['name'],
                "name_fr"=>"",
                "name_de"=>"",
                "name_es"=>"",
                "name_ru"=>"",
                "name_pt"=>"",
                "name_zh"=>$data['name'],

            ],
            "status"=>1,
            "url_key"=>"",
            "description"=>[
                "description_en"=>"$data[description]",
                "description_fr"=>"",
                "description_de"=>"",
                "description_es"=>"",
                "description_ru"=>"",
                "description_pt"=>"",
                "description_zh"=>"$data[description]",
            ],
            "title"=>[
                "title_en"=>"$data[name]",
                "title_fr"=>"",
                "title_de"=>"",
                "title_es"=>"",
                "title_ru"=>"",
                "title_pt"=>"",
                "title_zh"=>"$data[name]",
            ],

            "meta_description"=>[
                "meta_description_en"=>"$data[description]",
                "meta_description_fr"=>"",
                "meta_description_de"=>"",
                "meta_description_es"=>"",
                "meta_description_ru"=>"",
                "meta_description_pt"=>"",
                "meta_description_zh"=>"$data[description]",
            ],
            "meta_keywords"=>[
                "meta_keywords_en"=>"$data[meta_keywords]",
                "meta_keywords_fr"=>"",
                "meta_keywords_de"=>"",
                "meta_keywords_es"=>"",
                "meta_keywords_ru"=>"",
                "meta_keywords_pt"=>"",
                "meta_keywords_zh"=>"$data[meta_keywords]",
            ],

            "menu_custom"=>[
                "menu_custom_en"=>"",
                "menu_custom_fr"=>"",
                "menu_custom_de"=>"",
                "menu_custom_es"=>"",
                "menu_custom_ru"=>"",
                "menu_custom_pt"=>"",
                "menu_custom_zh"=>"",
            ],

            "level"=>(int)$data[level],
            "filter_product_attr_selected"=>"style,dresses-length,pattern-type,sleeve-length,collar,color",
            "filter_product_attr_unselected"=>0,
            "menu_show"=>(int)$data['menu_show'],
            "sort"=>(int)$data['sort'],
            "img"=>$newName,
        ];


            

        $collection = Yii::$app->mongodb->getCollection('category');

        if($a=$collection->save($arr)){

            // 如果删除成功，删除对应图片
            if ($data['oldimg'] != $newName && $data['oldimg'] &&file_exists("../../appimage/common/media/catalog/".$data['oldimg'])) {
                unlink("../../appimage/common/media/catalog/".$data['oldimg']);
            }
            return $this->redirect(['shop/classlist']);

        }else{
            return $this->redirect($_SERVER['HTTP_REFERER']);

        }
    }
    //订单管理
    public function actionOrder(){
        // 获取数据
        $request = Yii::$app->request;
        $shop_id = $request->get('id');

        //按shop_id查询店家详情
        $shop_name = Yii::$app->db->createCommand("select shop_name from shop where shop_id=$shop_id")->queryOne();
        $datas['shop_name'] = $shop_name['shop_name'];
        //按shop_id查询店家订单信息
        
        $get = $request->get();

        $increment_id = $get['increment_id'];
        $customer_firstname = $get['customer_firstname'];
        if($get["flag"]){
            $flag = $get['flag']-1;
            $sql = " select count(*) tot from sales_flat_order where shop_id=$shop_id and order_status={$flag}";
        }else{
            $sql = " select count(*) tot from sales_flat_order where shop_id=$shop_id and order_status<5";
        }
        if(!empty($increment_id)){
            $sql .= " and increment_id like '%$increment_id%'";
        }
        if(!empty($customer_firstname)){
            $sql .= " and customer_firstname like '%$customer_firstname%' ";
        }
        //查询订单表数量
        $countArr = Yii::$app->db->createCommand($sql)->queryOne();


        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $countArr['tot'],
        ]);
        //查询订单产品表
        if($get["flag"]){
            $flag = $get['flag']-1;
            $sql = " select sales_flat_order.* from sales_flat_order where sales_flat_order.shop_id=$shop_id and sales_flat_order.order_status={$flag}";
        }else {
            $sql = " select sales_flat_order.* from sales_flat_order where sales_flat_order.shop_id=$shop_id and order_status<5";
        }
        if(!empty($increment_id)){
            $sql .= " and increment_id like '%$increment_id%' ";
        }
        if(!empty($customer_firstname)){
            $sql .= " and customer_firstname like '%$customer_firstname%' ";
        }
        $sql .= " limit $pagination->offset , $pagination->limit";
        $arr = Yii::$app->db->createCommand($sql)->queryAll();

        $sql = "select * from sales_coupon where coupon_id in(";

        foreach ($arr as $v){

            if($v[coupon_code]){
                $sql = $sql.$v[coupon_code].",";
            }
        }
        $sql = $sql."0)";

        $cou = Yii::$app->db->createCommand($sql)->queryAll();

        foreach ($arr as &$v){
            foreach ($cou as $v1){
                if($v1['coupon_id'] == $v['coupon_code']){
                    $v = array_merge($v,$v1);
                }
            }
        }
        $sql = "select * from sales_flat_order_item where order_id in (";
        foreach ($arr as $v) {
            $sql = $sql . $v["order_id"] . ",";
        };
        // $sql = substr($sql, 0, -1);
        $sql .= "0)";

        $arr1 = Yii::$app->db->createCommand($sql)->queryAll();
        foreach ($arr as $k => &$v) {
            $v["goodDatas"] = [];
            foreach ($arr1 as $k1 => &$v1) {
                if ($v1["order_id"] == $v["order_id"]) {
                    array_push($v["goodDatas"], $v1);
                }
            }
        };
        $all = Yii::$app->db->createCommand("select o.order_status from sales_flat_order o where shop_id=$shop_id and order_status<5" )->queryAll();
            
            
        //查询所有的
        $datas['increment_id'] = $increment_id;
        $datas['customer_firstname'] = $customer_firstname;
        $datas["orders"] = $arr;
        $datas["shop_id"] = $shop_id;
        $datas["pagination"] = $pagination;
        $datas["all"] = $all;
        $datas["flag"] = $get["flag"]?$get["flag"]:0;       
        return $this->render($this->action->id,$datas);
    }
    //查看订单详情
    public function actionSee()
    {

        // 获取数据
        $request = Yii::$app->request;
        $order_id = $request->get('order_id');
        //按order_id查询订单详情
        $res = Yii::$app->db->createCommand("select sales_flat_order.* from sales_flat_order where order_id=$order_id")->queryOne();
        if($res["coupon_code"]){
            $cou = Yii::$app->db->createCommand("select * from sales_coupon where coupon_id={$res["coupon_code"]}")->queryOne();

            if($cou){
                $res = array_merge($res,$cou);
                }
        }
        //按order_id查询订单产品详情
        $sql = "select sales_flat_order_item.*,product_flat_qty.qty as kc from sales_flat_order_item,product_flat_qty where sales_flat_order_item.order_id=$order_id and sales_flat_order_item.product_id=product_flat_qty.product_id";
        $res1 = Yii::$app->db->createCommand($sql)->queryAll();
        $res["goodDatas"] = $res1;
        $datas["res"] = $res;
        return $this->render($this->action->id, $datas);
    }
    //查看商品详情
    public function actionGoods(){
        // 获取数据
        $request = Yii::$app->request;
        $shop_id = $request->get('id');
        $data=[];

        //按shop_id查询店家详情
        $shop_name = Yii::$app->db->createCommand("select shop_name from shop where shop_id=$shop_id")->queryOne();
        $data['shop_name'] = $shop_name['shop_name'];

        // 查询所有的分类

        $class=$this->actionGetclass();

        // 接受数据

        $request = Yii::$app->request;
        $category = $request->get('class');
        $status = $request->get('status');

        // 查询条件
        $where['shop_id'] =$shop_id;
       
        $query = new Query;
        if ($category) {
            $where['category'][1]=$category;
        }

        $tot2=$query->from('product_flat')->where($where)->count();
        if ($status) {
            $where['status']=(int)$status;
        }
        

        // 查询数据总条数
        $tot=$query->from('product_flat')->where($where)->count();



        // 实例化分页对象
        $pagination = new Pagination([
                   'defaultPageSize' => 10,
                   'totalCount' => $tot,
               ]);


        // 进行数据查询
        $rows=$query->from('product_flat')
                ->orderBy("updated_at desc")
                ->where($where)
                ->offset($pagination->offset)
                ->limit($pagination->limit)->all();
      


        foreach ($rows as $key => &$value) {



            // 查询产品的分类
            $arr=Yii::$app->mongodb->getCollection('category')->findOne(['_id'=>$value['category'][0]]);
            # code...
            $value['className']=$arr['name']['name_zh'];  

            $arr=Yii::$app->mongodb->getCollection('category')->findOne(['_id'=>$value['category'][1]]);
            # code...
            $value['class2Name']=$arr['name']['name_zh'];  

            // 查询商品库存 
                $arr=Yii::$app->db->createCommand(" select * from product_flat_qty where product_id='$value[_id]' ")->queryOne();

            if ($arr) {
                # code...
                $value['kucun']=$arr['qty'];
            }else{
                $value['kucun']=0;
            }

            // 查询获取商品对的创建人

            $arr=Yii::$app->db->createCommand(" select username from admin_user where id='$value[created_user_id]' ")->queryOne();

            if ($arr) {
                # code...
                $value['username']=$arr['username'];
            }else{
                $value['username']=0;
            }


        }


        // 查询数据上架总条数
        $where['status']=1;

        $tot1=$query->from('product_flat')->where($where)->count();

        // 加载页面和数据分配
        $data['goods']=$rows;
        $data['shop_id']=$shop_id;
        $data['pagination']=$pagination;
        $data['tot']=$tot2;
        $data['tot1']=$tot1;
        $data['pages']=ceil($tot/10);
        $data['class']=$class;
        return $this->render($this->action->id,$data);
    }
    public function actionGetclass(){
        // 查看所有分类数据
        $query = new Query;

        // 进行数据查询
        $class=$query->from('category')
                        ->where(['level'=>1,"parent_id"=>"0","type"=>"1"])
                        ->all();

        foreach ($class as $key => &$value) {


            $value['zi']=$query->from('category')->where(['level'=>2,'parent_id'=>"$value[_id]"])->all();
        }

        return $class;
    }
    // 发现一条数据

    public function actionFind(){
        // 获取数据
        $request = Yii::$app->request;
        $id = $request->get('id');
        
        // 获取商品数据
        $data=[];
        $data['goods']=Yii::$app->mongodb->getCollection('product_flat')->findOne(['_id'=>$id]);
            
        $data['category']=$this->actionGetclass();

        // 加载页面
        return $this->render($this->action->id,$data);
        
    }
    // =======================================用户评价=========================================

    public function actionCommentlist(){

        // 读取数据

        $request = Yii::$app->request;
        $class = $request->get('class');
        $name = $request->get('name');

        $shop_id=$request->get('id');

        // 查询条件
       $where['shop_id']=$shop_id;
        if ($class) {
            $where['category'][1]=$class;
        }

        if ($name) {
            // $conditions['tel'] = ['$regex' => $conditions['tel']]; // ^$ 
            $where['name']=['$regex' => $name];
        }
        $query = new Query;

        // 查询数据总条数
        $tot=$query->from('review')->where($where)->count();

        // 实例化分页对象
        $pagination = new Pagination([
                   'defaultPageSize' => 10,
                   'totalCount' => $tot,
               ]);


        // 进行数据查询
        $rows=$query->from('review')
                ->orderBy("review_date desc")
                ->offset($pagination->offset)
                ->where($where)
                ->limit($pagination->limit)
                ->all();
        $data=[];


        foreach ($rows as $key => &$value) {



            // 查询产品的分类
            $arr=Yii::$app->mongodb->getCollection('product_flat')->findOne(['_id'=>$value['product_id']]);     

            $value['goodsname']=$arr['name']['name_zh'];


            // 查询获取商品对的创建人
            $arr=Yii::$app->db->createCommand("select firstname from customer where id='$value[user_id]' ")->queryOne();

  
            $value['username']=$arr['username'];

    
        }
        // 查询所有的分类

        $class=$this->actionGetclass();

        // 加载页面和数据分配


        $data['data']=$rows;
        $data['shop_id']=$shop_id;
        $data['pagination']=$pagination;
        $data['tot']=$tot;
        $data['class']=$class;
        $data['pages']=ceil($tot/10);
        return $this->render($this->action->id,$data);
    }

    // ajax 无刷新修改状态

    public function actionAjaxcommentstatus(){
        // 获取数据
        $request = Yii::$app->request;
        $data = $request->get();

        $arr["_id"]=$data['id'];
        $arr["status"]=$data['status'];

        // 修改审核状态

        // 修改商品的上下架

        $res=Yii::$app->mongodb->getCollection('review')->save($arr);
        
        // 判断
        if ($res) {
            
        }else{
            
        }
            
    }
    //返回优惠卷管理首页
    public function actionCouponindex(){
        // 读取数据

        $request = Yii::$app->request;

        $shop_id=$request->get('id');


        $count = Yii::$app->db->createCommand("select count(*) num from sales_coupon where shop_id=$shop_id")->queryAll();


        //实例化分页对象
        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $count[0]['num'],
        ]);
        $res = Yii::$app->db->createCommand("select * from sales_coupon where shop_id=$shop_id limit $pagination->offset,$pagination->limit")->queryAll();
        $datas["res"] = $res;
        $datas["pagination"] = $pagination;
        $datas["num"] = $count[0]['num'];
        $datas["page"] = $pagination->limit;
        return $this->render($this->action->id,$datas);
    }
    //返回优惠券详情页面
    public function actionSeecoupon(){

        $req = Yii::$app->request;
        $coupon_id = $req->get("id");

        $res = Yii::$app->db->createCommand("select * from sales_coupon where coupon_id=$coupon_id")->queryOne();

        $datas["res"] = $res;
        return $this->render($this->action->id,$datas);
    }
}