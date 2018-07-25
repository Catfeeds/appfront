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

          Yii::$service->page->theme->layoutFile = 'main.php';
    }  

    // 登陆页面
    public function actionIndex(){
        
        return $this->render($this->action->id);
    }

    // 注册页面
    public function actionRegedit(){

        return $this->render($this->action->id);
    }

    //检查登陆
    public  function actionCheck(){

        // 获取数据
        $req = Yii::$app->request;


        $password_hash = $req->post(password_hash);
        $firstname = $req->post(firstname);

        $sql = "select customer.*,shop.shop_id from customer,shop where customer.firstname='$firstname' and customer.id=shop.uid";
        $res = Yii::$app->db->createCommand($sql)->queryOne();
        if(password_verify($password_hash,$res["password_hash"])){
            $_SESSION["login"] = "yes";
            $_SESSION["uid"] = $res["id"];
            $_SESSION["shop_id"] = $res["shop_id"];
            $_SESSION["admin_name"] = $firstname;
            $_SESSION["time"] = time();
            return $this->redirect(["index/index"]);
        }else{
            return $this->redirect(["login/index"]);
        }
    }

    //账号注册
    public  function actionReg(){

        //获取数据
        $req = Yii::$app->request;

        $password_hash = password_hash($req->post(password_hash),PASSWORD_DEFAULT);
        $firstname = $req->post(firstname);

        //判断用户名是否存在
        $arr = Yii::$app->db->createCommand("select count(*) as num from customer where firstname='$firstname'")->queryOne();
        if($req->post(password_hash)==""||$firstname==""){
            return $this->redirect(["login/regedit"]);
        } else if($arr["num"] != 0){
            return $this->redirect(["login/regedit"]);
        }else{
            $res = Yii::$app->db->createCommand("insert into customer (password_hash,firstname) values ('$password_hash','$firstname')")->execute();
            if($res == 1){
                return $this->redirect(["login/index"]);
            }else{
                return $this->redirect(["login/regedit"]);
            }
        }
    }

    //退出登陆
    public function actionOut(){

        unset($_SESSION["login"]);
        unset($_SESSION["uid"]);
        unset($_SESSION["shop_id"]);

        return $this->redirect("/shop/login/index");
    }
    
}