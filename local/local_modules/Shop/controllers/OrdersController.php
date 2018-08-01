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
        // 获取数据
        $request = Yii::$app->request;
        $get = $request->get();

        if($get["flag"]){
            $flag = $get['flag']-1;
            $sql = " select count(*) tot from sales_flat_order where shop_id={$_SESSION["shop_id"]} and order_status={$flag}";
        }else{
            $sql = " select count(*) tot from sales_flat_order where shop_id={$_SESSION["shop_id"]} and order_status<5";
        }
        //查询订单表数量
        $countArr = Yii::$app->db->createCommand($sql)->queryOne();


        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 1,
            'totalCount' => $countArr['tot'],
        ]);
        //查询订单产品表
        if($get["flag"]){
            $flag = $get['flag']-1;
            $sql = " select sales_flat_order.* from sales_flat_order where sales_flat_order.shop_id={$_SESSION["shop_id"]} and sales_flat_order.order_status={$flag} limit $pagination->offset , $pagination->limit";
        }else {
            $sql = " select sales_flat_order.* from sales_flat_order where sales_flat_order.shop_id={$_SESSION["shop_id"]} and order_status<5 limit $pagination->offset , $pagination->limit";
        }

        $arr = Yii::$app->db->createCommand($sql)->queryAll();

        $sql = "select * from sales_coupon where coupon_id in(";

        foreach ($arr as $v){

            if($v[coupon_code]){
                $sql = $sql.$v[coupon_code].",";
            }
        }
        $sql = $sql."0)";

        $cou = Yii::$app->db->createCommand($sql)->queryAll();

        foreach ($arr as &$v){
            foreach ($cou as $v1){
                if($v1['coupon_id'] == $v['coupon_code']){
                    $v = array_merge($v,$v1);
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
        $all = Yii::$app->db->createCommand("select o.order_status from sales_flat_order o where shop_id='{$_SESSION["shop_id"]}' and order_status<5" )->queryAll();

               
            
        //查询所有的
        $datas["orders"] = $arr;
        $datas["pagination"] = $pagination;
        $datas["all"] = $all;
        $datas["flag"] = $get["flag"]?$get["flag"]:0;
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
        if($res["coupon_code"]){
            $cou = Yii::$app->db->createCommand("select * from sales_coupon where coupon_id={$res["coupon_code"]}")->queryOne();

            if($cou){
                $res = array_merge($res,$cou);
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

        return $this->redirect(['orders/see?order_id='.$order_id]);
    }

    //接单
    public function actionReceipt(){

        $res = Yii::$app->request;
        $order_id = $res->get("order_id");


        $res = Yii::$app->db->createCommand("update sales_flat_order set order_status=2,receipt_at=".time()." where order_id={$order_id}")->execute();

        return $this->redirect("/shop/orders/index");

    }

    //纠纷列表
    public function actionDispute(){

        $data = [];

        $count = Yii::$app->db->createCommand("select count(*) tot from sales_flat_order where order_status in(5,6)")->queryAll();

        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $count[0]['tot'],
        ]);

        $res = Yii::$app->db->createCommand("select * from sales_flat_order where order_status in(5,6) limit $pagination->offset , $pagination->limit")->queryAll();

        $data["res"] = $res;
        $data["pagination"] = $pagination;
        $data["count"] = $count[0]['tot'];


        return $this->render($this->action->id,$data);

    }

    //添加订单

    public function actionAddorder(){

        $req = Yii::$app->request;

        $get = $req->get();

        $order = [

            "increment_id"=>$get["increment_id"],//订单编号
            "order_remark"=>$get["order_remark"],//备注
//            "payment_method"=>$get["payment_method"],//支付方式
            "created_at"=>time(),//提交时间
//            "paypal_order_datetime"=>$get["paypal_order_datetime"],
            "order_status"=>$get["order_status"],//订单状态
            "customer_firstname"=>$get["customer_firstname"],//客户姓名
            "customer_telephone"=>$get["customer_telephone"],//客户电话
            "customer_address_country"=>$get["customer_address_country"],//客户省
            "customer_address_state"=>$get["customer_address_state"],//市
            "customer_address_city"=>$get["customer_address_city"],//区
            "customer_address_street1"=>$get["customer_address_street1"],//详细地址
            "customer_address_zip"=>$get["customer_address_zip"],//邮编
            "customer_email"=>$get["customer_email"],//邮箱
            "subtotal"=>$get["subtotal"],//总额
            "discount_amount"=>$get["discount_amount"],//折扣金额
            "discount_rate"=>$get["discount_rate"],//折扣率
            "coin_num"=>$get["coin_num"],//金币数量
            "grand_total"=>$get["grand_total"],
            "subtotal_with_discount"=>$get["subtotal_with_discount"],//订单减少金额
            "coupon_code"=>$get["coupon_code"],
            "shop_id"=>$get["shop_id"]
        ];
        $goods = [
            "name"=>$get["name"],
            "sku"=>$get["sku"],
            "price"=>$get["price"],
            "qty"=>$get["qty"],
            "row_total"=>$get["row_total"]
        ];



        $res = Yii::$app->db->createCommand()->insert(sales_flat_order,$order)->execute();
        $goods["order_id"] = Yii::$app->db->getLastInsertID();


        $qty = [
            "product_id"=>Yii::$app->db->getLastInsertID(),
            "qty"=>10
        ];
        $goods["product_id"] = Yii::$app->db->getLastInsertID();

        Yii::$app->db->createCommand()->insert(product_flat_qty,$qty)->execute();

        $res = Yii::$app->db->createCommand()->insert(sales_flat_order_item,$goods)->execute();



    }

    //查看纠纷订单详情
    public function actionSeedispute(){

        $req = Yii::$app->request;

        $order_id = $req->get("order_id");

        $res = Yii::$app->db->createCommand("select * from sales_flat_order where order_id=$order_id")->queryOne();

        $goods = Yii::$app->db->createCommand("select * from sales_flat_order_item where order_id=$order_id")->queryAll();

        $res["goods"] = $goods;

        $data["res"] = $res;

        return $this->render($this->action->id,$data);

    }

    //处理纠纷订单
    public function actionChangejf(){

        $req = Yii::$app->request;

        $order_status = $req->get("order_status");

        $order_id = $req->get("order_id");

        if($order_status==7){

            $one = Yii::$app->db->createCommand("select * from sales_flat_order where order_id=$order_id")->queryOne();

            if($one[created_at]){

                $order_status = 0;

            }
            if($one[paypal_order_datetime]){

                $order_status = 1;

            }
            if($one[receipt_at]){

                $order_status = 2;

            }
            if($one[confirm_at]){

                $order_status = 3;

            }

            if($one[evaluate_at]){

                $order_status = 4;

            }
        }

        $operator = $_SESSION["admin_name"];
        $admin_name = time();


        $res = Yii::$app->db->createCommand("update sales_flat_order set order_status=$order_status,operator='$operator',refund_at='$admin_name' where order_id=$order_id")->execute();

        return $this->redirect("/shop/orders/dispute");
    }



}

//http://appfront.uekuek.com/shop/orders/addorder?increment_id=20180728&order_remark=ddd&order_status=0&customer_firstname=潘将兵&customer_telephone=13220289300&customer_address_country=山西&customer_address_state=太原市&customer_address_city=小店区&customer_address_street1=学府街&customer_address_zip=030500&customer_email=fecshop@123.com&subtotal=500.00&discount_amount=450&discount_rate=0.9&coin_num=0&grand_total=80&coupon_code=2&shop_id=3&name=衣服&sku=123456789&price=500.00&qty=1&kc=100&uid=5&row_total=500
?>
