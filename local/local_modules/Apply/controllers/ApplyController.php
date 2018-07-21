<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace appfront\local\local_modules\apply\controllers;

use fecshop\app\appfront\modules\AppfrontController;
use Yii;
use yii\web\Response;
use yii\mongodb\Query;
/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */

// 商家申请页面
class ApplyController extends AppfrontController
{

    public function init()
    {
        parent::init();
        // Yii::$service->page->theme->layoutFile = 'category_view.php';

        Yii::$service->page->theme->layoutFile = 'main2.php';
    }

    // 商家入驻的展示页面

    public function actionIndex(){
        return $this->render($this->action->id);
    }

    // 入驻须知页面
    public function actionNotes(){
        return $this->render($this->action->id);
    }

    // 企业信息认证页面
    public function actionCompanyinfo(){

        $data=array(
            "name"=>"张三",
            "age"=>"18",
            "sex"=>"男",

            );
        return $this->render($this->action->id, $data);
    }

    // 店铺信息认证
    public function actionShopinfo(){
        return $this->render($this->action->id);
    }

    // 等待审核
    public function actionWaitaudit(){
        return $this->render($this->action->id);
    }    
    
}