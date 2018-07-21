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
use yii\data\Pagination;



/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */
// 订单管理控制器
class OrdersController extends PublicsController
{

    public function init()
    {
        parent::init();
        Yii::$service->page->theme->layoutFile = 'uek.php';
    }

    // 订单管理首页
    public function actionIndex()
    {

        //查询订单表数量
        $countArr = Yii::$app->db->createCommand(" select count(*) tot from sales_flat_order")->queryOne();


        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $countArr['tot'],
        ]);


        // 进行数据查询
//        $rows=$query->from('product_flat')
//            ->orderBy("updated_at desc")
//            ->offset($pagination->offset)
//            ->limit($pagination->limit)->all();
        //查询订单产品表
        $arr = Yii::$app->db->createCommand(" select * from sales_flat_order limit $pagination->offset , $pagination->limit")->queryAll();

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
//        var_dump($arr);
//        exit();
        $datas["orders"] = $arr;
        $datas["pagination"] = $pagination;
        return $this->render($this->action->id, $datas);
    }

    //查看订单详情
    function actionSee()
    {

        // 获取数据
        $request = Yii::$app->request;
        $order_id = $request->get('order_id');
        //按order_id查询订单详情
        $res = Yii::$app->db->createCommand("select * from sales_flat_order where order_id=$order_id")->queryOne();
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

    //修改收货人信息
    function actionEditinfo()
    {

        // 获取数据
        $request = Yii::$app->request;
        $customer_firstname = $request->post('customer_firstname');
        $customer_telephone = $request->post('customer_telephone');
        $customer_address_country = explode("|", $request->post('customer_address_country'))[1];
        $customer_address_state = explode("|", $request->post('customer_address_state'))[1];
        $customer_address_city = $request->post('customer_address_city');
        $customer_address_zip = $request->post('customer_address_zip');
        $customer_address_street1 = $request->post("customer_address_street1");
        $customer_email = $request->post('customer_email');
        $order_id = $request->post('order_id');

        $sql = "update sales_flat_order set customer_firstname='$customer_firstname',customer_telephone='$customer_telephone',customer_address_country='$customer_address_country',customer_address_state='$customer_address_state',customer_address_city='$customer_address_city',customer_address_zip='$customer_address_zip',customer_email='$customer_email',customer_address_street1='$customer_address_street1' where order_id=$order_id";
        $res = Yii::$app->db->createCommand($sql)->execute();


        return $this->redirect(['orders/see?order_id=' . $order_id]);
    }
    public function actionAa(){

        echo "aa";
    }
    public function actionBb(){
        echo "bb";
    }
}