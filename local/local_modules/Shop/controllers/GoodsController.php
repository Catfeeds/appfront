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
use yii\web\UploadedFile;
/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */

// 商品管理控制器
class GoodsController extends PublicsController
{

    public function init()
    {
        parent::init();
        Yii::$service->page->theme->layoutFile = 'uek.php';
    }

// =======================================商品管理=========================================
    
    // 商品管理首页
    public function actionIndex(){

        $shop_id=$_SESSION['shop_id'];

        // 查询所有的分类

        $class=$this->actionGetclass();

        // 接受数据

        $request = Yii::$app->request;
        $category = $request->get('class');
        $status = $request->get('status');

        // 查询条件
        // $where['shop_id'] =$shop_id;
       
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
      
        $data=[];


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

            
        $data['pagination']=$pagination;
        $data['tot']=$tot2;
        $data['tot1']=$tot1;
        $data['pages']=ceil($tot/10);
        $data['class']=$class;
        return $this->render($this->action->id,$data);
    }


    // 商品添加页面一
    // 主要作用
    public function actionAddclass(){

        $query = new Query;

        // 查询数据总条数

        // 进行数据查询
        $data=[];
        $data['category']=$query
                        ->from('category')
                        ->where(['level'=>1,"parent_id"=>"0"])
                        ->all();

        // 加载页面
        return $this->render($this->action->id,$data);

    }

    // 商品添加页面二
    // 添加商品的基本信息
    public function actionAddshopinfo(){

        // 获取地址栏传输数据
        $request = Yii::$app->request;
        $one = $request->get('one');
        $two = $request->get('tow');

        $data=[];

        // 获取一级分类

        $customer = Yii::$app->mongodb->getCollection('category')->findOne(['_id'=>$one]);
        
        $data['one']=$customer['name']['name_zh'];
        $data['oneId']=$one;
        // 获取二级分类

        $customer = Yii::$app->mongodb->getCollection('category')->findOne(['_id'=>$two]);
        $data['two']=$customer['name']['name_zh'];
        $data['twoId']=$two;

        return $this->render($this->action->id,$data);

    }

    // 商品添加获取二级分类

    public function actionAjaxclass(){

        // 获取数据
        $request = Yii::$app->request;
        $id = $request->get('id');

        // mongo中获取对应的二级分类

        $query = new Query;

        $data=$query
            ->from('category')
            ->where(['level'=>2,'parent_id'=>"$id"])
            ->all();


       return json_encode($data);

    }

    // 插入数据

    public function actionAddgoods1(){

        // 接受数据
        $request = Yii::$app->request;
        $data = $request->post();

        $data['kucun']=$data['kucun']?1:2;

        //文件上传存放的目录  

        $folder ='../../appimage/common/media/catalog/product/';
        

         
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
                    $ext=substr($name,strrpos($name,'.'));

                    $newName=time().rand().$ext;

                    // 进行上传

                    if (move_uploaded_file($tmp_name,$folder.$newName)) {
                        $img[]=$newName;

                    }
                }
            }
        }

        $dataImg=[];
        foreach ($img as $key => $value) {
            if ($key>=1) {
                $dataImg[]=[
                    "image"=>"$newName",
                    "label"=>"",
                    "sort_order"=>""
                ];
            }
        }

        // 商品详情图

        //文件上传存放的目录  

        // $folder ='../../appimage/common/media/catalog/product/';
        

         
        // $file=$_FILES['asd'];

        // // 获取用户上传的数量

        // $size=count($file['name']);

        // $img=[];
        // // 文件处理

        // for ($i=0; $i < $size; $i++) { 
            
        //     // 接收文件名
        //     $name=$file['name'][$i];

        //     // 接收临时目录
        //     $tmp_name=$file['tmp_name'][$i];

        //     // 错误编码

        //     $error=$file['error'][$i];

        //     if ($error==0) {

        //         // 检测文件是否来自于表单
        //         if (is_uploaded_file($tmp_name)) {
        //             # code...
        //             // 新的文件名
        //             $ext=substr($name,strrpos($name,'.'));

        //             $newName=time().rand().$ext;

        //             // 进行上传

        //             if (move_uploaded_file($tmp_name,$folder.$newName)) {
        //                 $img[]=$newName;

        //             }
        //         }
        //     }
        // }

        // $dataImg1=[];
        // foreach ($img as $key => $value) {
        //     $dataImg1[]=[
        //         "image"=>"$newName",
        //         "label"=>"",
        //         "sort_order"=>""
        //     ];
        // }


        $arr=[];

        $arr=[
            "created_at"=>time(),
            "created_user_id"=>$_SESSION["uid"],
            'name'=>[
                "name_en"=>"",
                "name_fr"=>"",
                "name_de"=>"",
                "name_es"=>"",
                "name_ru"=>"",
                "name_pt"=>"",
                "name_zh"=>$data['name']
            ],

            "spu"=>"$data[sku]",
            "sku"=>"$data[sku]",

            "weight"=>0.3,  // 产品重量 
            "score"=>0, // 产品的评分，这个可以通过销量值填写进去
            "status"=>$data['status'], // 产品的状态，1代表激活，2代表下架
            "qty"=>0,  // 产品的库存，这个字段已经无效，库存在mysql中
            "min_sales_qty"=>1,  // 产品的最小销售个数
            "is_in_stock"=>$data['kucun'],  // 产品 的库存状态，1代表有库存，2代表无库存
            "category"=>[  // 产品的分类id。可以多个
                $data['one'],
                $data['tow'],
            ],
            "tier_price"=>[ // 产品批发价格
                [
                  "qty"=>0,
                  "price"=>0
                ]
            ],
            "price"=>$data['price'],  // 产品的销售价格
            "special_price"=>$data['special_price'],  // 产品的销售价格
            "meta_keywords"=> [ // 产品meta信息
               "meta_keywords_en"=>"",
               "meta_keywords_fr"=>"",
               "meta_keywords_de"=>"",
               "meta_keywords_es"=>"",
               "meta_keywords_ru"=>"",
               "meta_keywords_pt"=>"",
               "meta_keywords_zh"=>$data['keywords']
            ],

            "meta_description"=>[// 产品meta信息
                "meta_description_en"=>"",
                "meta_description_fr"=>"",
                "meta_description_de"=>"",
                "meta_description_es"=>"",
                "meta_description_ru"=>"",
                "meta_description_pt"=>"",
                "meta_description_zh"=>"description"
            ] ,
            "description"=>[// 产品meta信息
                "description_en"=>"",
                "description_fr"=>"",
                "description_de"=>"",
                "description_es"=>"",
                "description_ru"=>"",
                "description_pt"=>"",
                "description_zh"=>"$data[description_zh1]"
            ] ,
            "short_description"=>[// 产品meta信息
                "short_description_en"=>"",
                "short_description_fr"=>"",
                "short_description_de"=>"",
                "short_description_es"=>"",
                "short_description_ru"=>"",
                "short_description_pt"=>"",
                "short_description_zh"=>"$data[description_zh]"
            ] ,

            "image"=>[  // 产品的图片
                "main"=>[ // 产品主图
                   "image"=>$img[0],
                   "label"=>"",
                   "sort_order"=>"",
                   "is_thumbnails"=>"1",  // 产品详情页面：图片是否在橱窗图中显示，1代表显示
                   "is_detail"=>"1"         // 产品详情页面：图片是否在描述中显示，1代表显示
                ],  
                 "gallery"=>$dataImg
                  
                
            ],

            // "text"=>$dataImg1, 

            "attr_group"=>"test_group",  // 产品属性组
            "relation_sku"=>"",  // 产品相关产品
            "buy_also_buy_sku"=>"", // 产品买了还买
            "see_also_see_sku"=>"", // 产品看了还看
            "my_remark"=>"111",   // 下面是属性组中定义的属性，
            "my_email"=>"1111@22.com",
            "my_date"=>"2016-11-03",
            "style"=>"Cute",
            "dresses-length"=>"Mini",
            "pattern-type"=>"Animal",
            "sleeve-length"=>"Sleeveless",
            "collar"=>"Round Neck",
            "url_key"=>"",  // 产品urlkey
            "reviw_rate_star_average"=>5, // 产品平均评分
            "review_count"=>0, // 产品评论个数
            "reviw_rate_star_average_lang"=>[  // 产品在各个语言的评分
                "reviw_rate_star_average_lang_zh"=>5,
                "reviw_rate_star_average_lang_en"=>4
            ],
            "review_count_lang"=>[// 产品在各个语言的评论数
                "review_count_lang_zh"=>0,
                "review_count_lang_en"=>0
            ]


        ];



        $collection = Yii::$app->mongodb->getCollection('product_flat');

        if($collection->insert($arr)){
            return $this->redirect(['goods/index']);

        }else{
            return $this->redirect(['goods/addshopinfo']);

        }
        
        

    }



    // 商品修改页面

    public function actionEdit(){

        // 获取数据
        $request = Yii::$app->request;
        $data = $request->post();

        // 获取需要保留的图片
        $bao=explode(',', $data['bao']);
        array_shift($bao);

        // 获取需要删除的图片
        $arr=explode(',', $data['del']);
        array_shift($arr);

          

        //文件上传存放的目录  

        $folder ='../../appimage/common/media/catalog/product/';
        

         
        $file=$_FILES['file'];

        // 获取用户上传的数量

        $size=count($file['name']);

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
                    $ext=substr($name,strrpos($name,'.'));

                    $newName=time().rand().$ext;

                    // 进行上传

                    if (move_uploaded_file($tmp_name,$folder.$newName)) {
                        $bao[]=$newName;

                    }
                }
            }
        }

        $dataImg=[];
        foreach ($bao as $key => $value) {
            if ($key>=1) {
                $dataImg[]=[
                    "image"=>"$value",
                    "label"=>"",
                    "sort_order"=>""
                ];
            }
        }

            // 数组格式化

        $arr1=[
            "_id"=>$data['_id'],
            "updated_at"=>time(),
            "created_user_id"=>$_SESSION["uid"],
            'name'=>[
                "name_en"=>"",
                "name_fr"=>"",
                "name_de"=>"",
                "name_es"=>"",
                "name_ru"=>"",
                "name_pt"=>"",
                "name_zh"=>$data['name']
            ],
            "weight"=>0.3,  // 产品重量 
            "score"=>0, // 产品的评分，这个可以通过销量值填写进去
            "status"=>$data['status'], // 产品的状态，1代表激活，2代表下架
            "qty"=>0,  // 产品的库存，这个字段已经无效，库存在mysql中
            "min_sales_qty"=>1,  // 产品的最小销售个数
            "is_in_stock"=>$data['kucun'],  // 产品 的库存状态，1代表有库存，2代表无库存
            "category"=>[  // 产品的分类id。可以多个
                $data['classone'],
                $data['classtwo'],
            ],
            "tier_price"=>[ // 产品批发价格
                [
                  "qty"=>0,
                  "price"=>0
                ]
            ],
            "price"=>$data['price'],  // 产品的销售价格
            "special_price"=>$data['special_price'],  // 产品的销售价格
            "meta_keywords"=> [ // 产品meta信息
               "meta_keywords_en"=>"",
               "meta_keywords_fr"=>"",
               "meta_keywords_de"=>"",
               "meta_keywords_es"=>"",
               "meta_keywords_ru"=>"",
               "meta_keywords_pt"=>"",
               "meta_keywords_zh"=>$data['keywords']
            ],

            "meta_description"=>[// 产品meta信息
                "meta_description_en"=>"",
                "meta_description_fr"=>"",
                "meta_description_de"=>"",
                "meta_description_es"=>"",
                "meta_description_ru"=>"",
                "meta_description_pt"=>"",
                "meta_description_zh"=>"description"
            ] ,
            "description"=>[// 产品meta信息
                "description_en"=>"",
                "description_fr"=>"",
                "description_de"=>"",
                "description_es"=>"",
                "description_ru"=>"",
                "description_pt"=>"",
                "description_zh"=>"description"
            ] ,
            "short_description"=>[// 产品meta信息
                "short_description_en"=>"",
                "short_description_fr"=>"",
                "short_description_de"=>"",
                "short_description_es"=>"",
                "short_description_ru"=>"",
                "short_description_pt"=>"",
                "short_description_zh"=>"$data[short_description]"
            ],

            "image"=>[  // 产品的图片
                "main"=>[ // 产品主图
                   "image"=>$bao[0],
                   "label"=>"",
                   "sort_order"=>"",
                   "is_thumbnails"=>"1",  // 产品详情页面：图片是否在橱窗图中显示，1代表显示
                   "is_detail"=>"1"         // 产品详情页面：图片是否在描述中显示，1代表显示
                ],  
                 "gallery"=>$dataImg
                  
            ],
            "attr_group"=>"test_group",  // 产品属性组
            "relation_sku"=>"",  // 产品相关产品
            "buy_also_buy_sku"=>"", // 产品买了还买
            "see_also_see_sku"=>"", // 产品看了还看
            "my_remark"=>"111",   // 下面是属性组中定义的属性，
            "my_email"=>"1111@22.com",
            "my_date"=>"2016-11-03",
            "style"=>"Cute",
            "dresses-length"=>"Mini",
            "pattern-type"=>"Animal",
            "sleeve-length"=>"Sleeveless",
            "collar"=>"Round Neck",
            "url_key"=>"",  // 产品urlkey
            "reviw_rate_star_average"=>5, // 产品平均评分
            "review_count"=>0, // 产品评论个数
            "reviw_rate_star_average_lang"=>[  // 产品在各个语言的评分
                "reviw_rate_star_average_lang_zh"=>5,
                "reviw_rate_star_average_lang_en"=>4
            ],
            "review_count_lang"=>[// 产品在各个语言的评论数
                "review_count_lang_zh"=>0,
                "review_count_lang_en"=>0
            ]


        ];

            
        $res=Yii::$app->mongodb->getCollection('product_flat')->save($arr1);

        // 判断
        if ($res) {
            foreach ($arr as $key => $value) {


                if (file_exists("../../appimage/common/media/catalog/product/".$value)) {
                    unlink("../../appimage/common/media/catalog/product/".$value);
                }

            }
            return $this->redirect($_SERVER['HTTP_REFERER']);

            
        }else{
            return $this->redirect($_SERVER['HTTP_REFERER']);
        }

    }

    // 商品删除页面
    
    public function actionDel(){

        // 获取数据
        $request = Yii::$app->request;
        $id = $request->get('id');

        /*执行数据删除*/
        $data=Yii::$app->mongodb->getCollection('product_flat')->findOne(['_id'=>$id]);
        // 获取所有删除图片
        // 执行数据删除


        $a=Yii::$app->mongodb->getCollection('product_flat')->remove(['_id'=>$id]);

        // 判断是否删除成功
        if ($a) {


            // 如果删除成功，删除对应图片
            if ($data['image']['main']['image']&&file_exists("../../appimage/common/media/catalog/product/".$data['image']['main']['image'])) {
                unlink("../../appimage/common/media/catalog/product/".$data['image']['main']['image']);
            }
            
            if ($data['image']['gallery']) {
                foreach ($data['image']['gallery'] as $key => $value) {


                    if (file_exists("../../appimage/common/media/catalog/product/".$value['image'])) {
                        unlink("../../appimage/common/media/catalog/product/".$value['image']);
                    }

                }
            }

            return $this->redirect($_SERVER['HTTP_REFERER']);

            exit;
        }else{
            return $this->redirect($_SERVER['HTTP_REFERER']);
            exit;
        }
    }

    // 修改上下架

    public function actionStatus(){
        // 获取数据
        $request = Yii::$app->request;
        $id = $request->get('id');
        $status=$request->get('status');

        if ($status==1) {
            # code...
            $status=2;
        }else{
            $status=1;
        }

        // 修改商品的上下架

        $res=Yii::$app->mongodb->getCollection('product_flat')->update(['_id'=>$id],['$set'=>['status'=>$status]]);
        
        // 判断
        if ($res) {
            return $this->redirect($_SERVER['HTTP_REFERER']);
        }else{
            return $this->redirect($_SERVER['HTTP_REFERER']);
        }
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

    public function actionGetclass(){
        // 查看所有分类数据
        $query = new Query;

        // 进行数据查询
        $class=$query->from('category')
                        ->where(['level'=>1,"parent_id"=>"0"])
                        ->all();

        foreach ($class as $key => &$value) {


            $value['zi']=$query->from('category')->where(['level'=>2,'parent_id'=>"$value[_id]"])->all();
        }

        return $class;
    }

// =======================================用户评价=========================================

    public function actionCommentlist(){

        // 读取数据

        $request = Yii::$app->request;
        $class = $request->get('class');
        $name = $request->get('name');

        $shop_id=$_SESSION['shop_id'];

        // 查询条件
        // $where['shop_id']=$shop_id;
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

}