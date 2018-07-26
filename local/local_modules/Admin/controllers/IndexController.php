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
use yii\db\Query;
use yii\web\Response;
use yii\data\Pagination;
use yii\web\UploadedFile;

/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */

// 后台首页控制器
class IndexController extends AppfrontController
{

    public function init()
    {
        parent::init();
        // 加载模板页面
        Yii::$service->page->theme->layoutFile = 'admin.php';
    }
//=========================用户管理、管理员管理===============================
    //管理员管理
    public function actionIndex(){
        $req = Yii::$app->request;
        $person = $req->get(person);
        $ID = $req->get(ID);


        $res = Yii::$app->db->createCommand("select * from admin_user")->queryAll();
        $query = new Query;
        // 查询数据总条数
        $tot = 0;
        foreach ($res as $k=>$v){
            $tot++;
        }
        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $tot,
        ]);
        // 进行数据查询
        $rows=$query->from('admin_user')
            ->offset($pagination->offset)
            ->limit($pagination->limit)->all();

        //判断是否搜索
        if($person!=null){
           $rows = $query->select('*')
               ->from('admin_user')
               ->where([
                 'person'=>$person
           ])->offset($pagination->offset)
               ->limit($pagination->limit)->all();
        }else if($ID!=null){
            $rows = $query->select('*')
                ->from('admin_user')
                ->where([
                    'id'=>$ID
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        }else if($person!=null&&$ID!=null){
            $rows = $query->select('*')
                ->from('admin_user')
                ->where([
                    'person'=>$person,
                    'id'=>$ID
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        }
        // 进行数据查询

        $data["pagination"] = $pagination;
        $data["rows"] = $rows;
        return $this->render($this->action->id,$data);
    }

    //跳转添加管理员
    public function actionAdd(){
        return $this->render($this->action->id);
    }
    //实现添加功能
    public function actionEditadmin(){

        $req = Yii::$app->request;
        //获取数据
        $username = $req->post(username);
        $password_hash = password_hash($req->post(password_hash),PASSWORD_DEFAULT);
        $email = $req->post(email);
        $person = $req->post(person);
        $status = 1;
        //判断提交是否正确
        $r = 1;
        //判断管理员是否存在
        $arr = Yii::$app->db->createCommand("select count(*) as num from admin_user where username='$username'")->queryOne();
        if($req->post(password_hash)==""||$username==""||$email==""||$person==""){
            return $this->redirect(["/admin/index/add"]);
        } else if($arr["num"] != 0){
            return $this->redirect(["/admin/index/add"]);
        }
        else
        {
            $data['r'] = $r;
            $res = Yii::$app->db->createCommand("insert into admin_user (username,password_hash,email,person,status) values ('$username','$password_hash','$email','$person','$status')")->execute();
            return $this->redirect(["/admin/index/index"]);
        }

    }
    //移入黑名单status改为2
    public function actionBlacklist(){
        $req = Yii::$app->request;
        $id = $req->get(id);
        $sql = "update admin_user set status=2 where id='$id'";
        $res = Yii::$app->db->createCommand($sql)->execute();
        return $this->redirect(["/admin/index/index"]);
    }
    //冻结账号status改为3
    public function actionFreeze(){
        $req = Yii::$app->request;
        $id = $req->get(id);
        $sql = "update admin_user set status=3 where id='$id'";
        $res = Yii::$app->db->createCommand($sql)->execute();
        return $this->redirect(["/admin/index/index"]);
    }
    //删除管理员账号
    public function actionDel(){
        $req = Yii::$app->request;
        $id = $req->get(id);
        $sql = "delete from admin_user where id = '$id'";
        $res = Yii::$app->db->createCommand($sql)->execute();
        return $this->redirect(["/admin/index/index"]);
    }
    //===========================用户管理、会员管理=======================================
    //会员管理增加了一个字段
    public function actionMember(){
        $req = Yii::$app->request;
        $level = $req->get(level);
        $firstname = $req->get(firstname);
        $id = $req->get(id);

        $res = Yii::$app->db->createCommand("select * from customer")->queryAll();
        $query = new Query;
        // 查询数据总条数
        $tot = 0;
        foreach ($res as $v){
            $tot++;
        }
        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $tot,
        ]);
        // 进行数据查询

        //判定搜索
        if($firstname!=null){
            $rows = $query->select('*')
                ->from('customer')
                ->where([
                    'firstname'=>$firstname
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        }else if($id!=null){
            $rows = $query->select('*')
                ->from('customer')
                ->where([
                    'id'=>$id
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        }else if($level != null){
            $rows = $query->select('*')
                ->from('customer')
                ->where([
                    'id'=>$id
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        }
        else if($firstname!=null&&$id!=null){
            $rows = $query->select('*')
                ->from('customer')
                ->where([
                    'firstname'=>$firstname,
                    'id'=>$id
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        }
        else if($firstname!=null&&$level!=null){
            $rows = $query->select('*')
                ->from('customer')
                ->where([
                    'firstname'=>$firstname,
                    'level'=>$level
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        }
        else if($id!=null&&$level!=null){
            $rows = $query->select('*')
                ->from('customer')
                ->where([
                    'id'=>$id,
                    'level'=>$level
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        }
        else if($firstname!=null&&$level!=null&&$id!=null){
            $rows = $query->select('*')
                ->from('customer')
                ->where([
                    'firstname'=>$firstname,
                    'level'=>$level,
                    'id'=>$id
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        }else{
            $rows=$query->from('customer')
                ->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        }

        $data["pagination"] = $pagination;
        $data["rows"] = $rows;

        return $this->render($this->action->id,$data);

    }
    //==============================用户管理、店铺管理====================================
    public function actionShop(){
        $req = Yii::$app->request;
        $province = Yii::$app->db->createCommand('select * from sys_province')->queryAll();
       /* var_dump($province);
        exit;*/
        $data['province'] = $province;
        return $this->render($this->action->id,$data);
    }
}