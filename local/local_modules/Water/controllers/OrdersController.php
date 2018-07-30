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
// 水司订单管理控制器
class OrdersController extends PublicsController
{

    public function init()
    {
        parent::init();
        // 加载模板页面
        Yii::$service->page->theme->layoutFile = 'water.php';
    }

    //返回维修服务订单页面
    public function actionIndex()
    {
        // 获取数据
        $request = Yii::$app->request;
        $get = $request->get();

        if ($get["flag"]) {
            $flag = $get['flag'] - 1;
            $sql = " select count(*) tot from sales_flat_order where shop_id={$_SESSION["shop_id"]} and order_status={$flag} and goods_type='2'";
        } else {
            $sql = " select count(*) tot from sales_flat_order where shop_id={$_SESSION["shop_id"]} and order_status<5 and goods_type='2'";
        }
        //查询订单表数量
        $countArr = Yii::$app->db->createCommand($sql)->queryOne();


        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $countArr['tot'],
        ]);
        //查询订单产品表
        if ($get["flag"]) {
            $flag = $get['flag'] - 1;
            $sql = " select sales_flat_order.* from sales_flat_order where sales_flat_order.shop_id={$_SESSION["shop_id"]} and sales_flat_order.order_status={$flag} and goods_type='2' limit $pagination->offset , $pagination->limit";
        } else {
            $sql = " select sales_flat_order.* from sales_flat_order where sales_flat_order.shop_id={$_SESSION["shop_id"]} and order_status<5 and goods_type='2' limit $pagination->offset , $pagination->limit";
        }

        $arr = Yii::$app->db->createCommand($sql)->queryAll();

        $sql = "select * from sales_coupon where coupon_id in(";

        foreach ($arr as $v) {

            if ($v[coupon_code]) {
                $sql = $sql . $v[coupon_code] . ",";
            }
        }
        $sql = $sql . "0)";

        $cou = Yii::$app->db->createCommand($sql)->queryAll();

        foreach ($arr as &$v) {
            foreach ($cou as $v1) {
                if ($v1['coupon_id'] == $v['coupon_code']) {
                    $v = array_merge($v, $v1);
                }
            }
        }
        $sql = "select * from sales_flat_order_item where order_id in (";
        foreach ($arr as $v) {
            $sql = $sql . $v["order_id"] . ",";
        };
        // $sql = substr($sql, 0, -1);
        $sql .= "0)";
        $arr1 = Yii::$app->db->createCommand($sql)->queryAll();
        foreach ($arr as $k => &$v) {
            $v["goodDatas"] = [];
            foreach ($arr1 as $k1 => &$v1) {
                if ($v1["order_id"] == $v["order_id"]) {
                    array_push($v["goodDatas"], $v1);
                }
            }
        };
        $all = Yii::$app->db->createCommand("select o.order_status from sales_flat_order o where shop_id='{$_SESSION["shop_id"]}' and order_status<5 and goods_type='2'")->queryAll();


        //查询所有的
        $datas["orders"] = $arr;
        $datas["pagination"] = $pagination;
        $datas["all"] = $all;
        $datas["flag"] = $get["flag"] ? $get["flag"] : 0;
        return $this->render($this->action->id, $datas);
    }

    //查看订单详情
    function actionSee()
    {

        // 获取数据
        $request = Yii::$app->request;
        $order_id = $request->get('order_id');
        //按order_id查询订单详情
        $res = Yii::$app->db->createCommand("select sales_flat_order.* from sales_flat_order where order_id=$order_id")->queryOne();
        if ($res["coupon_code"]) {
            $cou = Yii::$app->db->createCommand("select * from sales_coupon where coupon_id={$res["coupon_code"]}")->queryOne();

            if ($cou) {
                $res = array_merge($res, $cou);
            }
        }
        //按order_id查询订单产品详情
        $sql = "select sales_flat_order_item.*,product_flat_qty.qty as kc from sales_flat_order_item,product_flat_qty where sales_flat_order_item.order_id=$order_id and sales_flat_order_item.product_id=product_flat_qty.product_id";
        $res1 = Yii::$app->db->createCommand($sql)->queryAll();
        $res["goodDatas"] = $res1;
        $datas["res"] = $res;
        return $this->render($this->action->id, $datas);
    }

    //返回修改收货人信息页面
    function actionEditeceivernfo()
    {

        // 获取数据
        $request = Yii::$app->request;
        $order_id = $request->get('order_id');

        //按order_id查询订单详情
        $res = Yii::$app->db->createCommand("select * from sales_flat_order where order_id=$order_id")->queryOne();

        $province = Yii::$app->db->createCommand("select * from sys_province")->queryAll();
        $city = Yii::$app->db->createCommand("select * from sys_city")->queryAll();
        $county = Yii::$app->db->createCommand("select * from sys_district ")->queryAll();

        $datas["res"] = $res;
        $datas["province"] = $province;
        $datas["city"] = $city;
        $datas["county"] = $county;

        return $this->render($this->action->id, $datas);
    }

    //返回纠纷列表页面
    public function actionDispute()
    {

        $data = [];

        $count = Yii::$app->db->createCommand("select count(*) tot from sales_flat_order where order_status in(5,6)")->queryAll();

        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $count[0]['tot'],
        ]);

        $res = Yii::$app->db->createCommand("select * from sales_flat_order where order_status in(5,6)")->queryAll();

        $data["res"] = $res;
        $data["pagination"] = $pagination;
        $data["count"] = $count;


        return $this->render($this->action->id, $data);

    }

    //返回商品订单页面
    public function actionShop()
    {
        // 获取数据
        $request = Yii::$app->request;
        $get = $request->get();

        if ($get["flag"]) {
            $flag = $get['flag'] - 1;
            $sql = " select count(*) tot from sales_flat_order where shop_id={$_SESSION["shop_id"]} and order_status={$flag} and goods_type='1'";
        } else {
            $sql = " select count(*) tot from sales_flat_order where shop_id={$_SESSION["shop_id"]} and order_status<5 and goods_type='1'";
        }
        //查询订单表数量
        $countArr = Yii::$app->db->createCommand($sql)->queryOne();


        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $countArr['tot'],
        ]);
        //查询订单产品表
        if ($get["flag"]) {
            $flag = $get['flag'] - 1;
            $sql = " select sales_flat_order.* from sales_flat_order where sales_flat_order.shop_id={$_SESSION["shop_id"]} and sales_flat_order.order_status={$flag} and goods_type='1' limit $pagination->offset , $pagination->limit";
        } else {
            $sql = " select sales_flat_order.* from sales_flat_order where sales_flat_order.shop_id={$_SESSION["shop_id"]} and order_status<5 and goods_type='1' limit $pagination->offset , $pagination->limit";
        }

        $arr = Yii::$app->db->createCommand($sql)->queryAll();

        $sql = "select * from sales_coupon where coupon_id in(";

        foreach ($arr as $v) {

            if ($v[coupon_code]) {
                $sql = $sql . $v[coupon_code] . ",";
            }
        }
        $sql = $sql . "0)";

        $cou = Yii::$app->db->createCommand($sql)->queryAll();

        foreach ($arr as &$v) {
            foreach ($cou as $v1) {
                if ($v1['coupon_id'] == $v['coupon_code']) {
                    $v = array_merge($v, $v1);
                }
            }
        }
        $sql = "select * from sales_flat_order_item where order_id in (";
        foreach ($arr as $v) {
            $sql = $sql . $v["order_id"] . ",";
        };
        // $sql = substr($sql, 0, -1);
        $sql .= "0)";
        $arr1 = Yii::$app->db->createCommand($sql)->queryAll();
        foreach ($arr as $k => &$v) {
            $v["goodDatas"] = [];
            foreach ($arr1 as $k1 => &$v1) {
                if ($v1["order_id"] == $v["order_id"]) {
                    array_push($v["goodDatas"], $v1);
                }
            }
        };
        $all = Yii::$app->db->createCommand("select o.order_status from sales_flat_order o where shop_id='{$_SESSION["shop_id"]}' and order_status<5 and goods_type='2'")->queryAll();


        //查询所有的
        $datas["orders"] = $arr;
        $datas["pagination"] = $pagination;
        $datas["all"] = $all;
        $datas["flag"] = $get["flag"] ? $get["flag"] : 0;
        return $this->render($this->action->id, $datas);

    }


    //返回缺货列表页面
    public function actionLack()
    {

        return $this->render($this->action->id);

    }
}