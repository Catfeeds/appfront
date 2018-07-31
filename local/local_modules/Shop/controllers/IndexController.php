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
use yii\data\Pagination;

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

    public function actionIndex()
    {

        $req = Yii::$app->request;

        $get = $req->get();

        // 获取shop_id

        $shop_id = $_SESSION['shop_id'];


        // 获取商品信息

        $sql = "select * from
 shop where shop_id = $shop_id";

        $shop = Yii::$app->db->createCommand($sql)->queryOne();

        //获取的销售信息
        $dateStr = date('Y-m-d', time());
        $timestamp0 = strtotime($dateStr);
        $timestamp24 = strtotime($dateStr) + 86400;


        $todayDatas = Yii::$app->db->createCommand("select * from sales_flat_order where paypal_order_datetime>$timestamp0 and paypal_order_datetime<$timestamp24")->queryAll();

        $timestamp0 = strtotime($dateStr) - 24 * 60 * 60;
        $timestamp24 = strtotime($dateStr) + 86400;

        $yesterdayDatas = Yii::$app->db->createCommand("select * from sales_flat_order where paypal_order_datetime>$timestamp0 and paypal_order_datetime<=$timestamp24")->queryAll();

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

        //点击量
        $clicks = 0;
        $clicks1 = 0;

        //待处理订单
        $res = Yii::$app->db->createCommand("select count(*) tot from sales_flat_order where order_status in(1,5)")->queryAll();
        $wait_handle = $res[0][tot];

        //退货订单
        $res = Yii::$app->db->createCommand("select count(*) tot from sales_flat_order where order_status=6")->queryAll();
        $returnAll = $res[0][tot];
        foreach ($todayDatas as $key => $v) {

            if ($v[order_status] > 0 && $v[order_status]) {
                $volume++;
                $turnover = $turnover * 1 + $v["subtotal"] - $v["subtotal_with_discount"];
            }
            $single++;
            if ($v[order_status] == 5 || $v[order_status] == 6) {
                $return++;
            }

        }

        foreach ($yesterdayDatas as $key => $v) {

            if ($v[order_status] > 0 && $v[order_status]) {
                $volume1++;
                $turnover1 = $turnover1 * 1 + $v["subtotal"] - $v["subtotal_with_discount"];
            }
            $single1++;
            if ($v[order_status] == 5 || $v[order_status] == 6) {
                $return1++;
            }

        }

        /*
         *
         * 获取本周销量商品销量
         *
         * */
        //当前日期
        $sdefaultDate = date("Y-m-d");
        //$first =1 表示每周星期一为开始日期 0表示每周日为开始日期
        $first = 1;
        //获取当前周的第几天 周日是 0 周一到周六是 1 - 6
        $w = date('w', strtotime($sdefaultDate));
        //获取本周开始日期，如果$w是0，则表示周日，减去 6 天
        $week_start = date('Y-m-d', strtotime("$sdefaultDate -" . ($w ? $w - $first : 6) . ' days'));
        //本周结束日期
        $week_end = date('Y-m-d', strtotime("$week_start +6 days"));
        $week_start = strtotime($week_start);
        $week_end = strtotime($week_end);

        $count = Yii::$app->db->createCommand("select count(*) tot from sales_flat_order_item where created_at>$week_start and created_at<=$week_end group by sku")->queryAll();

        $tot = count($count);
        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $tot
        ]);

        if($get["sort_rule"]=="prices"){
            $sort_rule = "prices";
        }else{
            $sort_rule = "nums";
        }

        $statistics = Yii::$app->db->createCommand("select sum(price) prices,count(item_id) nums,name,sku from sales_flat_order_item where created_at>$week_start and created_at<=$week_end group by sku order by $sort_rule limit $pagination->offset,$pagination->limit")->queryAll();


        //获取最近一周的销售信息
        $sales_infor = Yii::$app->db->createCommand("select created_at,paypal_order_datetime from sales_flat_order where created_at>$week_start and created_at<=$week_end")->queryAll();


        /*
         *
         * 数据格式化
         *
         * */

        $data['shop'] = $shop;
        $data["turnover"] = $turnover;
        $data["turnover1"] = $turnover1;
        $data["return"] = $return;
        $data["return1"] = $return1;
        $data["single"] = $single;
        $data["single1"] = $single1;
        $data["volume"] = $volume;
        $data["volume1"] = $volume1;
        $data["clicks"] = $clicks;
        $data["wait_handle"] = $wait_handle;
        $data["returnAll"] = $returnAll;
        $data["statistics"] = $statistics;
        $data["count"] = $tot;
        $data["pagination"] = $pagination;
        $data["sort_rule"] = $sort_rule;
        $data["flag"] = $get["flag"];
        $data["sales_infor"] = $sales_infor;

        $_SESSION['shop_name'] = $shop['shop_name'];
        $_SESSION['shop_logo'] = $shop['shop_logo'];

        return $this->render($this->action->id, $data);

    }

}