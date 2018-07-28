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
use yii\mongodb\Query;
/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */

// 登录和注册控制器
class LoginController extends AppfrontController
{

    public function init()
    {
        parent::init();
        // Yii::$service->page->theme->layoutFile = 'category_view.php';

        Yii::$service->page->theme->layoutFile = 'login.php';
    }  

    // 登陆页面
    public function actionIndex(){
        
        return $this->render($this->action->id);
    }

    //检查登陆
    public  function actionCheck(){

        // 获取数据
        $req = Yii::$app->request;


        $password = $req->post('password');
        $username = $req->post('username');

        $sql = "select admin_user.* from admin_user where admin_user.username='$username'";
        $res = Yii::$app->db->createCommand($sql)->queryOne();
        if(password_verify($password,$res["password_hash"])){
            // 保存用户基本信息
            $_SESSION["message_login"] = "yes";
            $_SESSION["message_uid"] = $res["id"];
            $_SESSION["message_name"] = $username;

            return $this->redirect(["/admin/index/aindex"]);
        }else{
            return $this->redirect(["/admin/login/index"]);
        }
    }



    //退出登陆
    public function actionOut(){

        unset($_SESSION["message_login"]);
        unset($_SESSION["message_uid"]);
        unset($_SESSION["message_name"]);
        return $this->redirect("/admin/login/index");
    }
    
}