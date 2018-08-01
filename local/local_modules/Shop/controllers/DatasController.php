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
//数据统计控制器
class DatasController extends PublicsController
{


    public function init()
    {
        parent::init();
        Yii::$service->page->theme->layoutFile = 'uek.php';
    }

// ==============================订单统计=================================
    // 数据统计首页
    public function actionIndex()
    {

        $datas = [];





        return $this->render($this->action->id, $datas);

    }

    //数量统计
    function actionCount(){

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

        echo json_encode($res);
        exit();
    }


// ==============================销售统计=================================
    // 销售统计
    public function actionSale()
    {
        return $this->render($this->action->id);
    }


}