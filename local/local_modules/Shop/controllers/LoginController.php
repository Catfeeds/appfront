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

        Yii::$service->page->theme->layoutFile = 'login.php';
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

        $sql = "select customer.* from customer where customer.firstname='$firstname' and customer.usctomer_type=1";
        $res = Yii::$app->db->createCommand($sql)->queryOne();
        if(password_verify($password_hash,$res["password_hash"])){
            // 保存用户基本信息
            $_SESSION["login"] = "yes";
            $_SESSION["uid"] = $res["id"];
            $_SESSION["admin_name"] = $firstname;
            $_SESSION["time"] = time();
            $sql = "select s.*,u.* from shop s  left join userinfo u on u.relevancy=s.uid where s.uid=$res[id]";

            $res2 = Yii::$app->db->createCommand($sql)->queryOne();


            if ($res2) {
                // 商家

                $_SESSION["shop_id"] = $res2['shop_id'];
                $_SESSION["shop_type"] = $res2['shop_type'];
                $_SESSION["shop_state"] = $res2['shop_state'];

                if ($res2[shop_type]==2) {
                    # code...
                    $arr = ["userNum"=>$res2["userNum"],"userId"=>$res2[userId],"userName"=>$res2[userName]];
                    $cookies = Yii::$app->response->cookies;

                    $cookies->add(new \yii\web\Cookie([
                        'name' => 'user',
                        'value' => json_encode($arr),
                    ]));
                    return $this->redirect(["/shop/index/index"]);
                // 水司
                }else if($res2[shop_type]==1){
                    $arr = ["userNum"=>$res2["userNum"],"userId"=>$res2[userId],"userName"=>$res2[userName]];
                    $cookies = Yii::$app->response->cookies;

                    $cookies->add(new \yii\web\Cookie([
                        'name' => 'user',
                        'value' => json_encode($arr),
                    ]));
                    return $this->redirect(["/water/index/index"]);

                }else{
                    return $this->redirect(["/apply/apply/index"]);

                }
            }else{
                return $this->redirect(["/apply/apply/index"]);
            }
        }else{
            return $this->redirect(["login/index"]);
        }
    }


    //账号注册
    public  function actionReg(){
        //获取数据
        $req = Yii::$app->request;
        if(!empty($req->post())){
            $password_hash = password_hash($req->post(password_hash),PASSWORD_DEFAULT);
            $firstname = $req->post(firstname);
            $code = $req->post(code);
            $password = $req->post(password_hash);
            $repassword = $req->post(repassword);
            if(($code!=$_SESSION['dxyzm']) || ($firstname!=$_SESSION['tel'])){
                $msgSuc['err']=0;
                $msgSuc['info']='验证码不正确';
                echo json_encode($msgSuc);
                return false;   
            }
            // 判断密码是否一致
            if ($password==$repassword && $repassword) {
                //判断用户名是否存在
                $arr = Yii::$app->db->createCommand("select count(*) as num from customer where firstname='$firstname'")->queryOne();
                if($req->post(password_hash)==""||$firstname==""){
                    $msgSuc['err']=0;
                    $msgSuc['info']='手机号或者密码不能为空';
                    echo json_encode($msgSuc);
                    return false; 
                    // return $this->redirect(["login/regedit"]);
                } else if($arr["num"] != 0){
                    $msgSuc['err']=0;
                    $msgSuc['info']='该手机号已注册';
                    echo json_encode($msgSuc);
                    return false; 
                    // return $this->redirect(["login/regedit"]);
                }else{
                    $time = time();
                    $res = Yii::$app->db->createCommand("insert into customer (password_hash,firstname,created_at,tel) values ('$password_hash','$firstname','$time','$firstname')")->execute();
                    if($res == 1){
                        $msgSuc['err']=1;
                        $msgSuc['info']='注册成功';
                        echo json_encode($msgSuc);
                        return false; 
                        // return $this->redirect(["login/index"]);
                    }else{
                        $msgSuc['err']=0;
                        $msgSuc['info']='注册失败';
                        echo json_encode($msgSuc);
                        return false;
                        // return $this->redirect(["login/regedit"]);
                    }
                }
            }else{
                $msgSuc['err']=0;
                $msgSuc['info']='两次输入密码不一致';
                echo json_encode($msgSuc);
                // return $this->redirect(["login/regedit"]);
            }
        }else{
            return $this->redirect(["login/regedit"]);
        }
    }

    //退出登陆
    public function actionOut(){

        unset($_SESSION["login"]);
        unset($_SESSION["uid"]);
        unset($_SESSION["shop_id"]);
        unset($_SESSION["admin_name"]);
        unset($_SESSION["time"]);
        return $this->redirect("/shop/login/index");
    }

    // 发送验证码
    public function actionFasong(){

        $req = Yii::$app->request;
        $firstname = $req->get('mobile');
        //判断用户名是否存在
        $arr = Yii::$app->db->createCommand("select count(*) as num from customer where firstname='$firstname'")->queryOne();
        if($arr['num']!=0){
            $msgSuc['err']=0;
            $msgSuc['info']='该手机号已注册';
            echo json_encode($msgSuc);
            return false;
        }
        //初始化必填
        $options['accountsid']='442c51c4d2a95aededa6f12a23b26fe4'; //填写自己的
        $options['token']='887b72f88fc33eacb1b3ad92daa2fd4f'; //填写自己的
        //初始化 $options必填
        $ucpass =new \Ucpaas($options);
       
        //随机生成6位验证码
        srand((double)microtime()*1000000);//create a random number feed.
        // $ychar="0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z";
        $ychar="0,1,2,3,4,5,6,7,8,9";
        $list=explode(",",$ychar);
        for($i=0;$i<6;$i++){
            $randnum=rand(0,9); // 10+26;
            $authnum.=$list[$randnum];
        }
        //短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
        $appId = "e771411626af47b381a704c419e23b16";  //填写自己的
        $_POST['to']=$firstname;
        $to = $_POST['to'];
        $templateId = "191761";
        $param=$authnum;

        

        //错误信息收集
        $msgSuc=array(
            'err'=>0,
            'info'=>''
        );

     
        
        $arr=$ucpass->templateSMS($appId,$to,$templateId,$param);
        if (substr($arr,21,6) == 000000) {
            $_SESSION['dxyzm']=$param;
            $_SESSION['tel']=$to;
            $msgSuc['err']=1;
            $msgSuc['info']='短信验证码已发送成功，请注意查收短信';
        }else{
            $msgSuc['err']=0;
            $msgSuc['info']='短信验证码发送失败，请联系客服';
        }

                // echo "<pre>";
                // print_r($msgSuc);
                // echo "</pre>";
            
        echo json_encode($msgSuc);
                
    }
    
}