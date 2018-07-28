<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace appfront\local\local_modules\shop\controllers;

use fecshop\app\appfront\modules\AppfrontController;
use Yii;
use yii\web\Response;
use yii\mongodb\Query;
use yii\data\Pagination;
/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */

// 商铺管理控制器
class StoreController extends PublicsController
{

    public function init()
    {
        parent::init();
        Yii::$service->page->theme->layoutFile = 'uek.php';
    }
    
    /*商铺管理首页*/
    public function actionIndex(){


        //return $this->render($this->action->id, $data);
        $uid = $_SESSION["uid"];
        $res = Yii::$app->db->createCommand("select * from shop where uid=$uid")->queryOne();
        $addressInfo = parent::getAddressInfo();
        $datas["res"] = $res;
        $datas["province"] = $addressInfo["province"];
        $datas["city"] = $addressInfo["city"];
        $datas["district"] = $addressInfo["district"];
        return $this->render($this->action->id,$datas);
    }

    //编辑信息
    public function actionEditinfo(){

        $req = Yii::$app->request;

        $datas = $req->post();

        $sql = "update shop set shop_keywords='{$datas['shop_keywords']}',shop_banner='{$datas['shop_banner']}',shop_phone='{$datas['shop_phone']}',province_id='{$datas['province_id']}',city_id='{$datas['city_id']}',shop_address='{$datas['shop_address']}',shop_description='{$datas['shop_description']}'  where uid={$datas['uid']}";

        $res = Yii::$app->db->createCommand($sql)->execute();

        return $this->redirect("/shop/store/index");

        //文件上传存放的目录

        //$folder ='../../appimage/appfront/images/';



        //$file=$_FILES['file'];

        // 获取用户上传的数量

        //$size=count($file['name']);

        //$img=[];
        // 文件处理

        // 接收文件名
        //$name=$file['name'];

        // 接收临时目录
        //$tmp_name=$file['tmp_name'];

        // 错误编码

        //$error=$file['error'];

//        if ($error==0) {
//
//            // 检测文件是否来自于表单
//            if (is_uploaded_file($tmp_name)) {
//                # code...
//                // 新的文件名
//                $ext=substr($name,strrpos($name,'.'));
//
//                $newName=time().rand().$ext;
//
//                // 进行上传
//
//                if (move_uploaded_file($tmp_name,$folder.$newName)) {
//                    $img = $newName;
//
//                    $sql = "update shop_apply set shop_name='{$datas['shop_name']}',  where uid={$datas['uid']}";
//                }
//            }
//        }

    }

    //返回设置店铺图片页面
    public function actionSetimg(){

        $uid = $_SESSION["uid"];
        $res = Yii::$app->db->createCommand("select shop.shop_logo,shop.shop_avatar from shop where uid=$uid")->queryOne();

        $datas["res"] = $res;
        $datas["imgUrl"] = Yii::$app->params["img"];


        return $this->render($this->action->id,$datas);

    }

    //编辑店铺页面信息
    public function actionSetpic(){

        $res = Yii::$app->request;
        $post = $res->post();

        //文件上传存放的目录

        $folder ='../../appimage/common/images/';

        $file=$_FILES['file'];

        // 获取用户上传的数量

        $size=count($file['name']);

        $img=[];
        // 文件处理

        for ($i=0; $i < $size; $i++) {

            // 接收文件名
            $name=$file['name'][$i];

            // 接收临时目录
            $tmp_name=$file['tmp_name'][$i];

            // 错误编码

            $error=$file['error'][$i];

            if ($error==0) {

                // 检测文件是否来自于表单
                if (is_uploaded_file($tmp_name)) {
                    # code...
                    // 新的文件名
                    if($i == 0){
                        $arr = explode("/",$post["shop_logo"]);
                        $newName = $arr[count($arr)-1];
                    }
                    if($i == 1){
                        $arr = explode("/",$post["shop_avatar"]);
                        $newName = $arr[count($arr)-1];
                    }
                    // 进行上传

                    if (move_uploaded_file($tmp_name,$folder.$newName)) {

                        $shop_logo = explode("images/",$post['shop_logo'])[1];
                        $shop_avatar = explode("images/",$post['shop_avatar'])[1];

                        $res = Yii::$app->db->createCommand("update shop set shop_logo='{$shop_logo}',shop_avatar='{$shop_avatar}' where uid={$_SESSION['uid']}")->execute();

                    }
                }
            }
        }
        return $this->redirect("/shop/store/setimg");

    }

    //返回优惠卷管理首页
    public function actionCouponindex(){



        $count = Yii::$app->db->createCommand("select count(*) num from sales_coupon where uid={$_SESSION["uid"]}")->queryAll();


        //实例化分页对象
        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $count[0]['num'],
        ]);
        $res = Yii::$app->db->createCommand("select * from sales_coupon where uid={$_SESSION["uid"]} limit $pagination->offset,$pagination->limit")->queryAll();
        $datas["res"] = $res;
        $datas["pagination"] = $pagination;
        $datas["num"] = $count[0]['num'];
        $datas["page"] = $pagination->limit;
        return $this->render($this->action->id,$datas);
    }

    //返回添加优惠券页面
    public function actionAddcoupon(){

        // 查看所有分类数据
        $query = new Query;

        // 进行数据查询
        $class=$query->from('category')
            ->where(['level'=>1,"parent_id"=>"0"])
            ->all();
        $datas["class"] = $class;
        return $this->render($this->action->id,$datas);
    }

    //得到商品信息
    public function actionGetgoods(){

        $res = Yii::$app->request;
        $category = json_decode($res->get("category"));
        $query = new Query();
        $res = [];
        foreach ($category as $v){

            $where[category][0]=$v;
            $res1 = $query->from("product_flat")->where($where)->all();
            foreach ($res1 as $v1){
                $res[]=$v1;
            }
        }
        echo json_encode($res);
        exit();
    }
    public function actionGetgoods1(){
        $res = Yii::$app->request;
        $category = json_decode($res->get("category"));
        $query = new Query();
        $res = [];
        foreach ($category as $v){

            $where[_id]=$v;
            $res1 = $query->from("product_flat")->where($where)->one();
            $res[]=$res1;
        }
        echo json_encode($res);
        exit();
    }
    //添加优惠卷
    public function actionAddcou(){

        $res = Yii::$app->request;

        $post = $res->post();

        var_dump($post);
        $goods = "";
        if($post["flag"]==1||count($post["goods1"])<=0||count($post["goods"])<=0){
            $goods = 0;
        }else{
            foreach ($post["goods"] as $v){
                $goods = $goods.$v."|";
            }
        }
        $goods = substr($goods,0,-1);
        $data = explode(" - ",$post["data"]);
        $start_date = strtotime($data[0]);
        $expiration_date = strtotime($data[1]);
        $coupon_code = "CO".time().$_SESSION["shop_id"];

        $res = Yii::$app->db->createCommand("insert into sales_coupon (uid,shop_id,start_date,coupon_name,coupon_code,expiration_date,users_per_customer,conditions,discount,goods,status) values ('{$_SESSION['uid']}','{$_SESSION["shop_id"]}','$start_date','{$post['coupon_name']}','$coupon_code','$expiration_date','1','{$post["conditions"]}','{$post["discount"]}','$goods',0)")->execute();

        return $this->redirect("/shop/store/couponindex");
    }

    //删除优惠卷
    public function actionDelcou(){

        $req = Yii::$app->request;

        $coupon_id = $req->get("id");

        $expiration_date = time()-1000;

        $res = Yii::$app->db->createCommand("update sales_coupon set expiration_date={$expiration_date} where coupon_id=$coupon_id")->execute();

        return $this->redirect("/shop/store/couponindex");

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