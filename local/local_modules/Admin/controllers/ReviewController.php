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
use yii\db\Query;
use yii\web\Response;
use yii\data\Pagination;
use yii\web\UploadedFile;

/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */

// 后台首页控制器
class ReviewController extends AppfrontController
{

    public function init()
    {
        parent::init();
        // 加载模板页面
        Yii::$service->page->theme->layoutFile = 'admin.php';
    }
//=========================审核管理===============================
    //待审核
    public function actionIndex(){
    	$req = Yii::$app->request;
    	$shop_name=$req->post('shop_name');
    	$shop_type=$req->post('shop_type');
    	$data['shop_name']=$shop_name;
    	$data['shop_type']=$shop_type;
    	// 查询地区
    	$sys_province=Yii::$app->db->createCommand("SELECT * FROM sys_province")->queryAll();
    	$data['province']=$sys_province;
    	// 查询数据总条数
    	$res = Yii::$app->db->createCommand("SELECT * FROM shop WHERE shop_state=3")->queryAll();
    	$query = new Query;
    	$tot = 0;
    	foreach ($res as $k=>$v){
    		$tot++;
    	}
    	// 实例化分页对象
    	$pagination = new Pagination([
    			'defaultPageSize' =>3,
    			'totalCount' => $tot,
    	]);
    	// 进行数据查询
    	$where=" WHERE shop_state=3";
    	if($shop_name!=null && $shop_name!=""){
    		$where .=" AND shop_name like '%$shop_name%'";
    	}
    	if($shop_type!="0" && $shop_type!=0){
    		$where .=" AND shop_type=$shop_type";
    	}
    	$sql="SELECT * FROM shop $where  LIMIT $pagination->offset,$pagination->limit";
    	$rows=Yii::$app->db->createCommand($sql)->queryAll();
    	$data["pagination"] = $pagination;
    	$data["list"] = $rows;
        return $this->render($this->action->id,$data);
    }

    //已通过
    public function actionPass(){
        $req = Yii::$app->request;
    	$shop_name=$req->post('shop_name');
    	$shop_type=$req->post('shop_type');
    	$data['shop_name']=$shop_name;
    	$data['shop_type']=$shop_type;
    	$res = Yii::$app->db->createCommand("SELECT * FROM shop WHERE shop_state in(0,1,2)")->queryAll();
    	$query = new Query;
    	// 查询数据总条数
    	$tot = 0;
    	foreach ($res as $k=>$v){
    		$tot++;
    	}
    	// 实例化分页对象
    	$pagination = new Pagination([
    			'defaultPageSize' =>3,
    			'totalCount' => $tot,
    	]);
    	// 进行数据查询
    	$where=" WHERE shop_state in(0,1,2)";
    	if($shop_name!=null && $shop_name!=""){
    		$where .=" AND shop_name like '%$shop_name%'";
    	}
    	if($shop_type!="0" && $shop_type!=0){
    		$where .=" AND shop_type=$shop_type";
    	}
    	$sql="SELECT * FROM shop $where  LIMIT $pagination->offset,$pagination->limit";
    	$rows=Yii::$app->db->createCommand($sql)->queryAll();
    	$data["pagination"] = $pagination;
    	$data["list"] = $rows;
        return $this->render($this->action->id,$data);
    }

    //未通过
    public function actionNopass(){
        $req = Yii::$app->request;
    	$shop_name=$req->post('shop_name');
    	$shop_type=$req->post('shop_type');
    	$data['shop_name']=$shop_name;
    	$data['shop_type']=$shop_type;
    	// 查询地区
    	$sys_province=Yii::$app->db->createCommand("SELECT * FROM sys_province")->queryAll();
    	$data['province']=$sys_province;
//     	echo "<Pre>";
//     	print_r($data);die;
    	// 查询数据总条数
    	$res = Yii::$app->db->createCommand("SELECT * FROM shop WHERE shop_state=4")->queryAll();
    	$query = new Query;
    	$tot = 0;
    	foreach ($res as $k=>$v){
    		$tot++;
    	}
    	// 实例化分页对象
    	$pagination = new Pagination([
    			'defaultPageSize' =>3,
    			'totalCount' => $tot,
    	]);
    	// 进行数据查询
    	$where=" WHERE shop_state=4";
    	if($shop_name!=null && $shop_name!=""){
    		$where .=" AND shop_name like '%$shop_name%'";
    	}
    	if($shop_type!="0" && $shop_type!=0 && $shop_type!=null){
    		$where .=" AND shop_type=$shop_type";
    	}
    	$sql="SELECT * FROM shop $where  LIMIT $pagination->offset,$pagination->limit";
    	$rows=Yii::$app->db->createCommand($sql)->queryAll();
    	$data["pagination"] = $pagination;
    	$data["list"] = $rows;
        return $this->render($this->action->id,$data);
    }
    /*
     *根据省份id获取城市
    */
    public function actionGetcity(){
    	$province_id=$_GET['province_id'];
    	$sql="SELECT * FROM sys_city WHERE province_id=".$province_id;
    	$city = Yii::$app->db->createCommand($sql)->queryAll();
    	return json_encode($city);
    }
    /*
     *根据省份id获取城市
    */
    public function actionGetdistrict(){
    	$city_id=$_GET['city_id'];
    	$sql="SELECT * FROM sys_district WHERE city_id=".$city_id;
    	$district= Yii::$app->db->createCommand($sql)->queryAll();
    	return json_encode($district);
    }
}