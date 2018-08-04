<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace appfront\local\local_modules\water\controllers;

use appfront\local\local_modules\water\controllers\PublicsController;
use fecshop\app\appfront\modules\AppfrontController;
use Yii;
use yii\web\Response;
use yii\mongodb\Query;
use yii\data\Pagination;

/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */

// 水司首页控制器
class AccountController extends PublicsController
{

    public function init()
    {
        parent::init();
        // 加载模板页面
        Yii::$service->page->theme->layoutFile = 'water.php';
    }
//=================================账单列表=================================
    // 账单列表
    public function actionIndex(){
        $_SESSION['pagess']='index';

        //添加搜索条件
        $request = Yii::$app->request;
        $startdate = $request->get('startdate');
        $enddate = $request->get('enddate');

        $sql1="select count(*) tot from sales_flat_order where shop_id={$_SESSION['shop_id']} and order_status>0";

        if($startdate && $enddate){
            $sql1 .=" and created_at between $startdate and $enddate";
        }else if($startdate){
            $sql1 .=" and created_at>$startdate";
        }else if($enddate){
            $sql1 .=" and created_at<$enddate";
        }

        $count = Yii::$app->db->createCommand($sql1)->queryAll();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $count[0]['tot'],
        ]);

        $sql="select * from sales_flat_order where shop_id={$_SESSION['shop_id']} and order_status>0";

        if($startdate && $enddate){
            $sql .=" and created_at between  unix_timestamp('$startdate') and unix_timestamp('$enddate')";
        }else if($startdate){
            $sql .=" and created_at>unix_timestamp('$startdate')";
        }else if($enddate){
            $sql .=" and created_at<unix_timestamp('$enddate')";
        }

        $sql .=" limit $pagination->offset , $pagination->limit";

        $res = Yii::$app->db->createCommand($sql)->queryAll();

        $data["tot"] = $count[0]["tot"];
        $data["res"] = $res;
        $data["pagination"] = $pagination;
        return $this->render($this->action->id,$data);
    }

//=================================实名认证=================================

    // 实名认证

    public function actionRealname(){
        $res = Yii::$app->db->createCommand("select * from shop where uid='{$_SESSION[uid]}'")->queryOne();

        $datas["res"] = $res;
        $_SESSION['pagess']='realname';
        return $this->render($this->action->id,$datas);
    }

//=================================资金列表=================================
    // 资金列表

    public function actionMoney(){
        $data = [];
        $_SESSION['pagess']='money';

        return $this->render($this->action->id,$data);
    }



//=================================账户解冻=================================
    // 账户解冻

    public function actionThawing(){

        $datas = [];
        $shop_state = Yii::$app->db->createCommand("select shop_state from shop where shop_id={$_SESSION["shop_id"]}")->queryOne();
        $shop_state = $shop_state["shop_state"];
        if($shop_state == 2){

            $res = Yii::$app->db->createCommand("select thaw_info.*,shop.freezing_time,shop.freezing_cause from thaw_info,shop where thaw_info.uid=shop.uid and shop.uid={$_SESSION["uid"]} order by id desc")->queryOne();

            if($res["status"]!=1){

                $datas["res"] = $res;
            }else{
                $res = [];
                $res["status"] = 1;
                $datas["res"] = $res;
            }

        }
        $datas["shop_state"] = $shop_state;
        $_SESSION['pagess']='thawing';


        return $this->render($this->action->id,$datas);
    }

    //账户解冻申请
    public function actionApply(){

        $req = Yii::$app->request;

        $post = $req->post();

        $folder ='../../appimage/common/images/';

        $file=$_FILES['voucher'];

        $n = count($file["name"]);

        $img = [];

        for ($i = 0;$i<$n;$i++) {

            //接受文件名
            $name = $file["name"][$i];

            //接受临时目录
            $tmp_name = $file["tmp_name"][$i];

            //接受错误编码
            $error = $file["error"][$i];

            if ($error == 0) {
                // 检测文件是否来自于表单
                if (is_uploaded_file($tmp_name)) {
                    # code...
                    // 新的文件名
                    $ext = substr($name, strrpos($name, '.'));

                    $newName = time() . rand() . $ext;

                    // 进行上传

                    if (move_uploaded_file($tmp_name, $folder . $newName)) {
                        $img[] = "/images/" . $newName;


                    }
                }
            }

        }
        if($post["status"] == 2){
            $time = time();
            $voucher = $post["voucher"]."||".implode("||",$img);
            $sql = "update thaw_info set `desc`='{$post["desc"]}',voucher='$voucher',create_date='{$time}',status=0 where uid={$_SESSION["uid"]}";
        }else{
            $time = time();
            $voucher = implode("||",$img);
            $sql = "insert into thaw_info (`desc`,voucher,create_date,uid,status) values ('{$post["desc"]}','$voucher','{$time}','{$_SESSION['uid']}',0)";

        }
        $res = Yii::$app->db->createCommand($sql)->execute();


        return $this->redirect("/shop/account/thawing");
    }
    
}