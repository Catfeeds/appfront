<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace appfront\local\local_modules\water\controllers;

use appfront\local\local_modules\shop\controllers\PublicsController;
use fecshop\app\appfront\modules\AppfrontController;
use Yii;
use yii\web\Response;
use yii\mongodb\Query;


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
    public function actionIndex(){

        return $this->render($this->action->id);

    }

    //返回商品订单页面
    public function actionShop(){

        return $this->render($this->action->id);

    }

    //返回纠纷列表页面
    public function actionDispute(){

        return $this->render($this->action->id);

    }

    //返回缺货列表页面
    public function actionLack(){

        return $this->render($this->action->id);

    }
}