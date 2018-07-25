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
class IndexController extends AppfrontController
{

    public function init()
    {
        parent::init();
        // 加载模板页面
        Yii::$service->page->theme->layoutFile = 'admin.php';
    }
//=========================用户管理===============================
    //管理员管理
    public function actionIndex(){
        $res = Yii::$app->db->createCommand("select * from admin_user")->queryAll();

        // 查询数据总条数
        $tot = 0;
        foreach ($res as $k=>$v){
            $tot++;
        }

        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $tot,
        ]);
        // 进行数据查询
        $sql =  " select * from admin_user";
        $arr = Yii::$app->db->createCommand($sql)->queryAll();

//        var_dump($res);
        $data["res"] = $res;
        $data["arr"] = $arr;
        $data["pagination"] = $pagination;

        return $this->render($this->action->id,$data);
    }

    //会员管理
    public function actionMember(){
        $res = Yii::$app->db->createCommand("select * from member")->queryAll();

        // 查询数据总条数
        $tot = 0;
        foreach ($res as $k=>$v){
            $tot++;
        }

        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $tot,
        ]);
        // 进行数据查询
        $sql =  " select * from member";
        $arr = Yii::$app->db->createCommand($sql)->queryAll();

//        var_dump($res);
        $data["res"] = $res;
        $data["arr"] = $arr;
        $data["pagination"] = $pagination;
        return $this->render($this->action->id,$data);

    }
    //店铺管理
    public function actionShop(){
        return $this->render($this->action->id);
    }
}