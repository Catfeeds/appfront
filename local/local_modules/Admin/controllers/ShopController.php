<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace appfront\local\local_modules\admin\controllers;

use fecshop\app\appfront\modules\AppfrontController;
use Yii;
use yii\web\Response;
use yii\data\Pagination;
use yii\web\UploadedFile;

/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */

// 后台首页控制器
class ShopController extends AppfrontController
{

    public function init()
    {
        parent::init();
        // 加载模板页面
        Yii::$service->page->theme->layoutFile = 'admin.php';
    }
//=========================店铺管理===============================
    //商家
    public function actionIndex(){
        return $this->render($this->action->id);
    }


//=========================水司管理===============================

    //水司
    public function actionWater(){
        return $this->render($this->action->id);
    }

//=========================分类管理===============================

    // 分类管理

    public function actionClasslist(){
        return $this->render($this->action->id);

    }
}