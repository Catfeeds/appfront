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
        //return $this->render($this->action->id, $data);
        return $this->render($this->action->id);
    }

//=================================实名认证=================================

    // 实名认证

    public function actionRealname(){
        return $this->render($this->action->id);
    }

//=================================资金列表=================================
    // 资金列表

    public function actionMoney(){
        return $this->render($this->action->id);
    }



//=================================账户解冻=================================
    // 账户解冻

    public function actionThawing(){
        return $this->render($this->action->id);
    }
    
}