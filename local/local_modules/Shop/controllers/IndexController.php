<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace appfront\local\local_modules\shop\controllers;

use Yii;
use yii\web\Response;
use yii\mongodb\Query;


/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */

// 后台首页控制器
class IndexController extends PublicsController
{

    public function init()
    {
        parent::init();
        Yii::$service->page->theme->layoutFile = 'uek.php';
    }
    
    public function actionIndex(){
    	if (!$_SESSION['shop_id']) {
            return $this->redirect("/shop/login/index");
    	}

    	// 获取shop_id

    	$shop_id=$_SESSION['shop_id'];


    	// 获取商品信息

    	$sql = "select * from shop where shop_id = $shop_id";

    	$shop = Yii::$app->db->createCommand($sql)->queryOne();


    	// 数据格式化

    	$data['shop']=$shop;

    	$_SESSION['shop_name']=$shop['shop_name'];
    	$_SESSION['shop_logo']=$shop['shop_logo'];
    		

        return $this->render($this->action->id,$data);

    }
    
}