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
class ShujuController extends PublicsController
{

    public function init()
    {
        parent::init();
        // 加载模板页面
        Yii::$service->page->theme->layoutFile = 'admin.php';
    }
//=========================数据中心===============================
    //平台数据
    public function actionIndex(){

        return $this->render($this->action->id);
    }
    //商家数据
    public function actionShop(){
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => 2,
        ]);
        $data['pagination'] = $pagination;
        return $this->render($this->action->id,$data);
    }
    //水司数据
    public function actionWater(){
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => 2,
        ]);
        $data['pagination'] = $pagination;
        return $this->render($this->action->id,$data);
    }
}