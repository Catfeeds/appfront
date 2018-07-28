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

/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */

// 系统管理控制器
class SystemController extends AppfrontController
{

    public function init()
    {
        parent::init();
        // 加载模板页面
        Yii::$service->page->theme->layoutFile = 'admin.php';
    }
//=========================平台信息管理===============================
    //平台信息
    public function actionIndex(){

        // 获取数据的总条数 
        $totArr=Yii::$app->db->createCommand("select count(*) tot from banner")->queryOne();
        $tot=$totArr['tot'];

        //实例化分页对象
        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $tot,
        ]);

        $res = Yii::$app->db->createCommand("select * from banner order by sort desc limit $pagination->offset,$pagination->limit")->queryAll();
        
        // 数据格式化
        $data["data"] = $res;
        $data["pagination"] = $pagination;
        $data["num"] = $tot;
        $data["page"] = $pagination->limit;

        return $this->render($this->action->id,$data);
    }

    // banner的添加页面

    public function actionBanneradd(){

        return $this->render($this->action->id);

    }

    // banner的修改页面

    public function actionBannerfind(){

        // 获取数据
        $request = Yii::$app->request;
        $id = $request->get("id");

        // 查询数据
        
        $row=Yii::$app->db->createCommand("select * from banner where id=$id")->queryOne();

        $data['data']=$row;
        return $this->render($this->action->id,$data);

    }

    // banner的修改排序

    public function actionBannersort(){
        // 获取数据
        $request = Yii::$app->request;
        $data = $request->get();

        Yii::$app->db->createCommand("update banner set sort=$data[sort] where id=$data[id]")->execute();   

    }

    // banner的删除页面

    public function actionBannerdel(){

        // 获取数据
        $request = Yii::$app->request;
        $id = $request->get('id');

        // 删除数据

        $data = Yii::$app->db->createCommand("select * from banner where id = $id")->queryOne();
            
        // 发送sql语句

        if(Yii::$app->db->createCommand()->delete("banner","id=$id")->execute()){

            // 如果删除成功，删除对应图片
            if ($data['img']&&file_exists("../../appimage/common/media/".$data['img'])) {
                unlink("../../appimage/common/media/".$data['img']);
            }
            return $this->redirect($_SERVER['HTTP_REFERER']);
        }else{
            return $this->redirect($_SERVER['HTTP_REFERER']);
        }


    }

    // banner的数据插入

    public function actionBannerinsert(){

        // 获取表单提交数据
        $request = Yii::$app->request;
        $data = $request->post();

        // 上传Banner图片

        //文件上传存放的目录  

        $folder ='../../appimage/common/media/';
         
        $file=$_FILES['img'];

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

        // 格式化数据

        $arr=[
            "title" => $data['name'],
            "url" => $data['url'],
            "sort" => $data['sort'],
            "type" => $data['type'],
            "img"=>$newName,
            "create_time"=>time(),
        ];

        // 执行插入数据
        $res=Yii::$app->db->createCommand()->insert('banner',$arr)->execute();

        // 判断是否添加成功

        if ($res) {
            // 添加成功
            return $this->redirect(['/admin/system/index']);

        }else{
            // 添加失败
            return $this->redirect($_SERVER['HTTP_REFERER']);
        }


    }

    // banner的数据修改
    public function actionBannersave(){
        // 获取表单提交数据
        $request = Yii::$app->request;
        $data = $request->post();

        // 上传分类图片

        if ($_FILES['img']['name']) {
            
            //文件上传存放的目录  

            $folder ='../../appimage/common/media/';
             
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

        

        $newName=$newName?$newName:$data['oldImg'];


        
            

        // 格式化数据

        $time=time();
        // 执行插入数据
        $res=Yii::$app->db->createCommand("update banner set title='$data[name]',url='$data[url]',sort='$data[sort]',type='$data[type]',img='$newName',update_time='$time' where id=$data[id]")->execute();

        if($res){

            // 如果删除成功，删除对应图片
            if ($data['oldImg']&&file_exists("../../appimage/common/media/".$data['oldImg'])) {
                unlink("../../appimage/common/media/".$data['oldImg']);
            }
             return $this->redirect(['/admin/system/index']);

        }else{
            return $this->redirect($_SERVER['HTTP_REFERER']);

        }
            
    }


//=========================VIP规则管理===============================

    //VIP规则
    public function actionVipruler(){
        return $this->render($this->action->id);
    }

//=========================充值设置管理===============================

    //充值设置
    public function actionRecharge(){
        return $this->render($this->action->id);
    }
}