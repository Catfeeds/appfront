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

        $res = Yii::$app->db->createCommand("select count(order_id) as '下单量'from sales_flat_order
where order_status>=0 
union all
select count(order_id) as '成交量'
from sales_flat_order
where order_status>0
union all
select count(order_id) as '退货量'
from sales_flat_order
where order_status>=5")->queryAll();

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