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

// 账户管理控制器
class AccountController extends PublicsController
{

    public function init()
    {
        parent::init();
        Yii::$service->page->theme->layoutFile = 'uek.php';
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