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
use yii\mongodb\Query;
/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */


class PublicsController extends AppfrontController
{

   
    public function init()
    {
        parent::init();

        // 如果未登录
        if(!($_SESSION["message_login"] == "yes")){
            
            return $this->redirect("/admin/login/index");
        }

    }
    
}