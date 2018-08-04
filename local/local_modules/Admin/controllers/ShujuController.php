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
class ShujuController extends PublicsController
{

    public function init()
    {
        parent::init();
        // 加载模板页面
        Yii::$service->page->theme->layoutFile = 'admin.php';
    }
//=========================数据中心===============================
    //平台数据
    public function actionIndex(){
    	$now=date("Y-m-d",time());
    	$sta=strtotime($now);
    	$end=$sta+60*60*24;
    	$data['huiyuannew']=$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM customer WHERE created_at>{$sta} AND created_at<{$end}")->queryOne();
    	$data['huiyuanall']=$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM customer")->queryOne();
    	$data['shuisinew']=$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM shop WHERE created_at>{$sta} AND created_at<{$end} AND shop_type=1 AND shop_state in(0,1,2)")->queryOne();
    	$data['shuisiall']=$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM shop WHERE shop_type=1 AND shop_state in(0,1,2)")->queryOne();
    	$data['shangjianew']=$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM shop WHERE created_at>{$sta} AND created_at<{$end} AND shop_type=2 AND shop_state in(0,1,2)")->queryOne();
    	$data['shangjiaall']=$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM shop WHERE shop_type=2 AND shop_state in(0,1,2)")->queryOne();
//     	echo "<pre>";
//     	print_r($data);;die;
        return $this->render($this->action->id,$data);
    }
    //商家数据
    public function actionShop(){
        $res = Yii::$app->db->createCommand('select * from shop')->queryAll();
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => 2,
        ]);
        $data['res'] = $res;
        $data['pagination'] = $pagination;

        return $this->render($this->action->id,$data);
    }
    //查看商家数据
    public function actionWshop(){
        $req = Yii::$app->request;
//        $id = $req->get(id);
//        $data["id"] = $id;

        return $this->render($this->action->id);
    }

    public function actionCount(){
        $req = Yii::$app->request;
        $get = $req->get();

        //点击量统计
        $clicks = 0;

        //下单量
        $single = 0;

        //成交量
        $volume = 0;

        //退货量
        $returns = 0;

        //好评率
        $praises = 0;

        $created_at1 = strtotime($get["t1"]);
        $created_at2 = strtotime($get["t2"]);

        $t1 = date("Y-m-d H:i:s",$created_at1);
        $t2 = date("Y-m-d H:i:s",$created_at2);

        $res = Yii::$app->db->createCommand("select count(order_id) as 'nums'from sales_flat_order
where order_status>=0 and created_at>=$created_at1 and created_at<$created_at2
union all
select count(order_id) as '成交量'
from sales_flat_order
where order_status>0 and paypal_order_datetime>='$t1' and paypal_order_datetime<'$t2'
union all
select count(order_id) as '退货量'
from sales_flat_order
where order_status>=5 and refund_at=$created_at1 and refund_at")->queryAll();

        $query = new Query();

        $condition['shop_id'] =$_SESSION["shop_id"];

        $res1 = $query->from("review")->where($condition)->all();


        $res[3] = $res1;

        var_dump($res);

        exit();
        echo json_encode($res);
        exit();
    }

    public function actionEvalute(){
        $create_t1=strtotime($_GET["t1"]);
        $create_t2=strtotime($_GET["t2"]);
        $query=new Query;
        $arr1=$query->from("review")
            ->where(['rate_star'=>['$gte'=>'4'],'review_date'=>['$gte'=>$create_t1]])
            ->all();
        $arr2=$query->from("review")
            ->where(['rate_star'=>'3','review_date'=>['$gte'=>$create_t1]])
            ->all();
        $arr3=$query->from("review")
            ->where(['rate_star'=>['$lte'=>'2'],'review_date'=>['$gte'=>$create_t1]])
            ->all();
        $arr=[];
        $arr[0]=$arr1;
        $arr[1]=$arr2;
        $arr[2]=$arr3;
        echo json_encode($arr);
        exit();
    }



    //水司数据
    public function actionWater(){
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => 2,
        ]);
        $data['pagination'] = $pagination;
        return $this->render($this->action->id,$data);
    }
    /*
     * 返回最近小时的时间和新增量
     * 参数1：hours int 最近的前几个小时
    */
    public function actionHours(){
    	$type=$_GET['type'];
    	$name="customer";
    	$where=" ";
    	if($type==1){
    		$name="shop";
    		$where=" AND shop_type=1 AND shop_state in(0,1,2)";
    	}else if($type==2){
    		$name="shop";
    		$where=" AND shop_type=2 AND shop_state in(0,1,2)";
    	}else if($type==3){
    		$name="customer";
    		$where=" ";
    	}
    	$hours=$_GET['hours'];
    	$day=60*60;
    	for($i=$hours;$i>0;$i--){
    		$date['dat'][]=date("Y-m-d H:i",time()-60*60*$i);
    	}
    	$date['dat'][]=date("Y-m-d H:i",time());
    	foreach ($date['dat'] as $k=>$v){
    		$min=strtotime($v);
    		$max=$min+$day;
    		$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM {$name} WHERE created_at>{$min} AND created_at<{$max} {$where}")->queryOne();
    		$date['num'][$k]=$num['num'];
    	}
//     	echo "<pre>";
//     	print_r($date);die;
    	return json_encode($date);
    }
    /* 
     * 返回最近七天的时间和新增量
     */
    public function actionWeek(){
    	$type=$_GET['type'];
    	$name="customer";
    	$where=" ";
    	if($type==1){
    		$name="shop";
    		$where=" AND shop_type=1 AND shop_state in(0,1,2)";
    	}else if($type==2){
    		$name="shop";
    		$where=" AND shop_type=2 AND shop_state in(0,1,2)";
    	}else if($type==3){
    		$name="customer";
    		$where=" ";
    	}
    	$day=60*60*24;
    	$date['dat'][]=date("Y-m-d",strtotime("-6 day"));
    	$date['dat'][]=date("Y-m-d",strtotime("-5 day"));
    	$date['dat'][]=date("Y-m-d",strtotime("-4 day"));
    	$date['dat'][]=date("Y-m-d",strtotime("-3 day"));
    	$date['dat'][]=date("Y-m-d",strtotime("-2 day"));
    	$date['dat'][]=date("Y-m-d",strtotime("-1 day"));
    	$date['dat'][]=date("Y-m-d",time());
    	foreach ($date['dat'] as $k=>$v){
    		$min=strtotime($v);
    		$max=$min+$day;
    		$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM {$name} WHERE created_at>{$min} AND created_at<{$max} {$where}")->queryOne();
    		$date['num'][$k]=$num['num'];
    	}
    	return json_encode($date);
    }
    /*
     * 返回最近一个月的时间和新增量
    */
    public function actionMonth(){
    	$type=$_GET['type'];
    	$name="customer";
    	$where=" ";
    	if($type==1){
    		$name="shop";
    		$where=" AND shop_type=1 AND shop_state in(0,1,2)";
    	}else if($type==2){
    		$name="shop";
    		$where=" AND shop_type=2 AND shop_state in(0,1,2)";
    	}else if($type==3){
    		$name="customer";
    		$where=" ";
    	}
    	$day=60*60*24;
    	for($i=31;$i>0;$i--){
    		$n="-".$i." day";
    		$date['dat'][]=date("Y-m-d",strtotime($n));
    	}
    	$date['dat'][]=date("Y-m-d",time());
    	foreach ($date['dat'] as $k=>$v){
    		$min=strtotime($v);
    		$max=$min+$day;
    		$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM {$name} WHERE created_at>{$min} AND created_at<{$max} {$where}")->queryOne();
    		$date['num'][$k]=$num['num'];
    	}
//     	echo "<pre>";
//     	print_r($date);
    	return json_encode($date);
    }
    /*
     * 返回最近一个季度的时间和新增量
    */
    public function actionQuarter(){
    	$type=$_GET['type'];
    	$name="customer";
    	$where=" ";
    	if($type==1){
    		$name="shop";
    		$where=" AND shop_type=1 AND shop_state in(0,1,2)";
    	}else if($type==2){
    		$name="shop";
    		$where=" AND shop_type=2 AND shop_state in(0,1,2)";
    	}else if($type==3){
    		$name="customer";
    		$where=" ";
    	}
    	$day=60*60*24;
    	for($i=91;$i>0;$i--){
    		$n="-".$i." day";
    		$date['dat'][]=date("Y-m-d",strtotime($n));
    	}
    	$date['dat'][]=date("Y-m-d",time());
    	foreach ($date['dat'] as $k=>$v){
    		$min=strtotime($v);
    	    $max=$min+$day;
    		$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM {$name} WHERE created_at>{$min} AND created_at<{$max} {$where}")->queryOne();
    		$date['num'][$k]=$num['num'];
    	}
//     	    	echo "<pre>";
//     	    	print_r($date);
    	return json_encode($date);
    }
    /*
     * 返回最近一年的时间和新增量
     */
    public function actionYear(){
    	$type=$_GET['type'];
    	$name="customer";
    	$where=" ";
    	if($type==1){
    		$name="shop";
    		$where=" AND shop_type=1 AND shop_state in(0,1,2)";
    	}else if($type==2){
    		$name="shop";
    		$where=" AND shop_type=2 AND shop_state in(0,1,2)";
    	}else if($type==3){
    		$name="customer";
    		$where=" ";
    	}
    	$day=60*60*24*30;
    	$date['dat'][]=date("Y-m",strtotime("-12 month"));
    	$date['dat'][]=date("Y-m",strtotime("-11 month"));
    	$date['dat'][]=date("Y-m",strtotime("-10 month"));
    	$date['dat'][]=date("Y-m",strtotime("-9 month"));
    	$date['dat'][]=date("Y-m",strtotime("-8 month"));
    	$date['dat'][]=date("Y-m",strtotime("-7 month"));
    	$date['dat'][]=date("Y-m",strtotime("-6 month"));
    	$date['dat'][]=date("Y-m",strtotime("-5 month"));
    	$date['dat'][]=date("Y-m",strtotime("-4 month"));
    	$date['dat'][]=date("Y-m",strtotime("-3 month"));
    	$date['dat'][]=date("Y-m",strtotime("-2 month"));
    	$date['dat'][]=date("Y-m",strtotime("-1 month"));
    	$date['dat'][]=date("Y-m",time());
    	foreach ($date['dat'] as $k=>$v){
    	$min=strtotime($v);
    	$max=$min+$day;
    	$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM {$name} WHERE created_at>{$min} AND created_at<{$max} {$where}")->queryOne();
    	$date['num'][$k]=$num['num'];
    	}
//     	echo "<pre>";
//     	print_r($date);
    	return json_encode($date);
    }
    /*
     * 返回随便两个日期的时间和新增量
     */
    public function actionSearchdate(){
    	
    	$startime=$_GET['sta'];
    	$endtime=$_GET['end'];
    	$type=$_GET['type'];
    	$name="customer";
    	$where=" ";
    	if($type==1){
    		$name="shop";
    		$where=" AND shop_type=1 AND shop_state in(0,1,2)";
    	}else if($type==2){
    		$name="shop";
    		$where=" AND shop_type=2 AND shop_state in(0,1,2)";
    	}else if($type==3){
    		$name="customer";
    		$where=" ";
    	}
    	$day=60*60*24;
    	//开始时间
    	$start=strtotime($startime);
    	$end=strtotime($endtime);
    	$now=time();
    	//当前时间到开始时间差
    	$ca=floor(($now-$start)/(60*60*24));
    	$numday=floor(($end-$start)/(60*60*24));
    	$date['dat'][]=date("Y-m-d",$start);
    	
    	for($i=1;$i<=$numday;$i++){
    		$m=$i-$ca;
    		$n="+".$m." day";
    		$date['dat'][]=date("Y-m-d",strtotime($n));
    	}
    	$date['dat'][]=date("Y-m-d",$end);
    	foreach ($date['dat'] as $k=>$v){
    		$min=strtotime($v);
    		$max=$min+$day;
    		$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM {$name} WHERE created_at>{$min} AND created_at<{$max} {$where}")->queryOne();
    		$date['num'][$k]=$num['num'];
    	}
//     	    	echo "<pre>";
//     	    	print_r($date);
    	return json_encode($date);
    }
}