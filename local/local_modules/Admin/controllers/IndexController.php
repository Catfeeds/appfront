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

// 后台首页控制器
class IndexController extends AppfrontController
{

    public function init()
    {
        parent::init();
        // 加载模板页面
        Yii::$service->page->theme->layoutFile = 'admin.php';
    }
//=========================用户管理===============================
    //管理员管理
    public function actionIndex(){
        $res = Yii::$app->db->createCommand("select * from admin_user")->queryAll();

        // 查询数据总条数
        $tot = 0;
        foreach ($res as $k=>$v){
            $tot++;
        }

        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $tot,
        ]);
        // 进行数据查询
        $sql =  " select * from admin_user";
        $arr = Yii::$app->db->createCommand($sql)->queryAll();

//        var_dump($res);
        $data["res"] = $res;
        $data["arr"] = $arr;
        $data["pagination"] = $pagination;

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
        //判断管理员是否存在
        $arr = Yii::$app->db->createCommand("select * from admin_user where username='$username'")->queryOne();
        $data["name"] = $arr["username"];
        if($data["name"]){
            return $this->redirect(["/admin/index/add"],$data);
        }
        else
        {
            $res = Yii::$app->db->createCommand("insert into admin_user (username,password_hash,email,person) values ('$username','$password_hash','$email','$person')")->execute();
        }
        /*var_dump($arr);
        exit;*/
        //插入数据


        return $this->redirect(["/admin/index/index"]);
    }
    //会员管理
    public function actionMember(){
        $res = Yii::$app->db->createCommand("select * from member")->queryAll();

        // 查询数据总条数
        $tot = 0;
        foreach ($res as $k=>$v){
            $tot++;
        }

        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $tot,
        ]);
        // 进行数据查询
        $sql =  " select * from member";
        $arr = Yii::$app->db->createCommand($sql)->queryAll();

//        var_dump($res);
        $data["res"] = $res;
        $data["arr"] = $arr;
        $data["pagination"] = $pagination;
        return $this->render($this->action->id,$data);

    }
    //店铺管理
    public function actionShop(){
        return $this->render($this->action->id);
    }
}