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
class ShopController extends AppfrontController
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
        return $this->render($this->action->id);
    }


//=========================水司管理===============================

    //水司
    public function actionWater(){
        return $this->render($this->action->id);
    }

//=========================分类管理===============================

    // 分类管理

    public function actionClasslist(){

        // 查看所有分类数据
        $query = new Query;

        if ($_GET['id']) {
            # code...
            $where['parent_id']=$_GET['id'];
        }else{
            $where['parent_id']="0";

        }

        // 进行数据查询
        $class=$query->from('category')
                     ->orderBy("sort desc")
                     ->where($where)
                     ->all();

        $data['class']=$class;

              
        
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
                "name_en"=>"",
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
                "description_en"=>"",
                "description_fr"=>"",
                "description_de"=>"",
                "description_es"=>"",
                "description_ru"=>"",
                "description_pt"=>"",
                "description_zh"=>"$data[description]",
            ],
            "title"=>[
                "title_en"=>"",
                "title_fr"=>"",
                "title_de"=>"",
                "title_es"=>"",
                "title_ru"=>"",
                "title_pt"=>"",
                "title_zh"=>"$data[name]",
            ],

            "meta_description"=>[
                "meta_description_en"=>"",
                "meta_description_fr"=>"",
                "meta_description_de"=>"",
                "meta_description_es"=>"",
                "meta_description_ru"=>"",
                "meta_description_pt"=>"",
                "meta_description_zh"=>"$data[description]",
            ],
            "meta_keywords"=>[
                "meta_keywords_en"=>"",
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
            "menu_show"=>$data['menu_show'],
            "sort"=>$data['sort'],
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
        $arr["menu_show"]=$data['menu_show'];

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
        $data['class']=Yii::$app->mongodb->getCollection('category')->findOne(['_id'=>$id]);
        

        // 加载页面
        return $this->render($this->action->id,$data);
    }

    // 分类的修改功能

    public function actionClassedit(){

        // 获取数据
        $request = Yii::$app->request;
        $data = $request->post();

                echo "<pre>";
                print_r($data);
                echo "</pre>";
            
    }
}