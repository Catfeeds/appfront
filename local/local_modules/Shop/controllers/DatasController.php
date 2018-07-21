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
    public function actionIndex(){
        return $this->render($this->action->id);
    }


// ==============================销售统计=================================
    // 销售统计
    public function actionSale(){
        return $this->render($this->action->id);
    }

    
}