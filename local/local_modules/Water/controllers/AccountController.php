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
        $_SESSION['pagess']='realname';

        return $this->render($this->action->id);
    }

//=================================资金列表=================================
    // 资金列表

    public function actionMoney(){
        $_SESSION['pagess']='money';

        return $this->render($this->action->id);
    }



//=================================账户解冻=================================
    // 账户解冻

    public function actionThawing(){
        $_SESSION['pagess']='thawing';

        return $this->render($this->action->id);
    }
    
}