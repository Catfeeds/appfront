<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace appfront\local\local_modules\shop\controllers;

use Yii;
use yii\web\Response;
use yii\mongodb\Query;


/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */

// 后台首页控制器
class IndexController extends PublicsController
{

    public function init()
    {
        parent::init();
        Yii::$service->page->theme->layoutFile = 'uek.php';
    }
    
    public function actionIndex(){

    	// 获取shop_id

    	$shop_id=$_SESSION['shop_id'];


    	// 获取商品信息

    	$sql = "select * from
 shop where shop_id = $shop_id";

    	$shop = Yii::$app->db->createCommand($sql)->queryOne();

    	//获取的销售信息
        $dateStr = date('Y-m-d', time());
        $timestamp0 = strtotime($dateStr);
        $timestamp24 = strtotime($dateStr) + 86400;



        $todayDatas = Yii::$app->db->createCommand("select * from sales_flat_order where paypal_order_datetime>$timestamp0 and paypal_order_datetime<$timestamp24")->queryAll();

        $timestamp0 = strtotime($dateStr)-24*60*60;
        $timestamp24 = strtotime($dateStr) + 86400;

        $yesterdayDatas = Yii::$app->db->createCommand("select * from sales_flat_order where paypal_order_datetime>$timestamp0 and paypal_order_datetime<$timestamp24")->queryAll();

        //成交额
        $turnover = 0;
        $turnover1 = 0;

        //成交量
        $volume = 0;
        $volume1 = 0;

        //下单量
        $single = 0;
        $single1 = 0;

        //退货量
        $return = 0;
        $return1 = 0;

        foreach ($todayDatas as $key=>$v){

            if($v[order_status]>0&&$v[order_status]){
                $volume++;
                $turnover = $turnover*1+$v["subtotal"]-$v["subtotal_with_discount"];
            }
            $single++;
            if($v[order_status]==5||$v[order_status]==6){
                $return++;
            }

        }

        foreach ($yesterdayDatas as $key=>$v){

            if($v[order_status]>0&&$v[order_status]){
                $volume1++;
                $turnover1 = $turnover1*1+$v["subtotal"]-$v["subtotal_with_discount"];
            }
            $single1++;
            if($v[order_status]==5||$v[order_status]==6){
                $return1++;
            }

        }



    	// 数据格式化

    	$data['shop']=$shop;
        $data[""] = $turnover;
        $data[""] = $turnover1;
        $data[""] = $return;
        $data[""] = $return1;
        $data[""] = $single;
        $data[""] = $single1;
        $data[""] = $volume;
        $data[""] = $volume1;

        $_SESSION['shop_name']=$shop['shop_name'];
    	$_SESSION['shop_logo']=$shop['shop_logo'];
    		

        return $this->render($this->action->id,$data);

    }
    
}