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
class ReviewController extends PublicsController
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
    	$province_id=$req->post('province_id');
    	$city_id=$req->post('city_id');
    	$district_id=$req->post('district_id');
    	$data['shop_name']=$shop_name;
    	$data['shop_type']=$shop_type;
    	$data['province_id']=$province_id;
    	$data['city_id']=$city_id;
    	$data['district_id']=$district_id;
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
    	if($shop_type!="0" && $shop_type!=0 && $shop_type!=null){
    		$where .=" AND shop_type=$shop_type";
    	}
    	if($province_id!="0" && $province_id!=0 && $province_id!=null){
    		$where .=" AND province_id=$province_id";
    	}
    	if($city_id!="0" && $city_id!=0 && $city_id!=null){
    		$where .=" AND city_id=$city_id";
    	}
    	if($district_id!="0" && $district_id!=0 && $district_id!=null){
    		$where .=" AND district_id=$district_id";
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
    	$province_id=$req->post('province_id');
    	$city_id=$req->post('city_id');
    	$district_id=$req->post('district_id');
    	$data['shop_name']=$shop_name;
    	$data['shop_type']=$shop_type;
    	$data['province_id']=$province_id;
    	$data['city_id']=$city_id;
    	$data['district_id']=$district_id;
    	// 查询地区
    	$sys_province=Yii::$app->db->createCommand("SELECT * FROM sys_province")->queryAll();
    	$data['province']=$sys_province;
    	// 查询数据总条数
    	$res = Yii::$app->db->createCommand("SELECT * FROM shop WHERE shop_state in(0,1,2)")->queryAll();
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
    	$where=" WHERE shop_state in(0,1,2)";
    	if($shop_name!=null && $shop_name!=""){
    		$where .=" AND shop_name like '%$shop_name%'";
    	}
    	if($shop_type!="0" && $shop_type!=0 && $shop_type!=null){
    		$where .=" AND shop_type=$shop_type";
    	}
    	if($province_id!="0" && $province_id!=0 && $province_id!=null){
    		$where .=" AND province_id=$province_id";
    	}
    	if($city_id!="0" && $city_id!=0 && $city_id!=null){
    		$where .=" AND city_id=$city_id";
    	}
    	if($district_id!="0" && $district_id!=0 && $district_id!=null){
    		$where .=" AND district_id=$district_id";
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
    	$province_id=$req->post('province_id');
    	$city_id=$req->post('city_id');
    	$district_id=$req->post('district_id');
    	$data['shop_name']=$shop_name;
    	$data['shop_type']=$shop_type;
    	$data['province_id']=$province_id;
    	$data['city_id']=$city_id;
    	$data['district_id']=$district_id;
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
    	if($province_id!="0" && $province_id!=0 && $province_id!=null){
    		$where .=" AND province_id=$province_id";
    	}
    	if($city_id!="0" && $city_id!=0 && $city_id!=null){
    		$where .=" AND city_id=$city_id";
    	}
    	if($district_id!="0" && $district_id!=0 && $district_id!=null){
    		$where .=" AND district_id=$district_id";
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
    	return json_encode($city);//对json进行编码
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
    //审核管理
    public function actionWreview(){
    	$shop_id=$_GET['shop_id'];
    	$sql="SELECT * FROM shop WHERE shop_id=".$shop_id;
    	$row= Yii::$app->db->createCommand($sql)->queryOne();
    	$sys_province=Yii::$app->db->createCommand("SELECT province_name FROM sys_province WHERE province_id={$row['province_id']}")->queryOne();
    	$sys_city=Yii::$app->db->createCommand("SELECT city_name FROM sys_city WHERE city_id={$row['city_id']}")->queryOne();
    	$sys_district=Yii::$app->db->createCommand("SELECT district_name FROM sys_district WHERE district_id={$row['district_id']}")->queryOne();
    	$row['province_name']=$sys_province['province_name'];
    	$row['city_name']=$sys_city['city_name'];
    	$row['district_name']=$sys_district['district_name'];
    	$data['row']=$row;
        return $this->render($this->action->id,$data);
    }
    //审核
    public function actionExamine(){
    	$req = Yii::$app->request;
    	$shop_id=$req->post('shop_id');
    	$reason=$req->post('reason');
    	$notice=$req->post('notice');
    	$shop_state=$req->post('shop_state');
    	$sql="UPDATE shop SET reason='{$reason}',notice='{$notice}',shop_state='{$shop_state}' WHERE shop_id=".$shop_id;
    	$row= Yii::$app->db->createCommand($sql)->execute();
    	return $this->redirect("/admin/review/index");
    }
    //查看详情
    public function actionPasswreview(){
    	$shop_id=$_GET['shop_id'];
    	$sql="SELECT * FROM shop WHERE shop_id=".$shop_id;
    	$row= Yii::$app->db->createCommand($sql)->queryOne();
    	$sys_province=Yii::$app->db->createCommand("SELECT province_name FROM sys_province WHERE province_id={$row['province_id']}")->queryOne();
    	$sys_city=Yii::$app->db->createCommand("SELECT city_name FROM sys_city WHERE city_id={$row['city_id']}")->queryOne();
    	$sys_district=Yii::$app->db->createCommand("SELECT district_name FROM sys_district WHERE district_id={$row['district_id']}")->queryOne();
    	$row['province_name']=$sys_province['province_name'];
    	$row['city_name']=$sys_city['city_name'];
    	$row['district_name']=$sys_district['district_name'];
    	$data['row']=$row;
    	return $this->render($this->action->id,$data);
    }
    //查看详情
    public function actionNopasswreview(){
    	$shop_id=$_GET['shop_id'];
    	$sql="SELECT * FROM shop WHERE shop_id=".$shop_id;
    	$row= Yii::$app->db->createCommand($sql)->queryOne();
    	$sys_province=Yii::$app->db->createCommand("SELECT province_name FROM sys_province WHERE province_id={$row['province_id']}")->queryOne();
    	$sys_city=Yii::$app->db->createCommand("SELECT city_name FROM sys_city WHERE city_id={$row['city_id']}")->queryOne();
    	$sys_district=Yii::$app->db->createCommand("SELECT district_name FROM sys_district WHERE district_id={$row['district_id']}")->queryOne();
    	$row['province_name']=$sys_province['province_name'];
    	$row['city_name']=$sys_city['city_name'];
    	$row['district_name']=$sys_district['district_name'];
    	$data['row']=$row;
    	return $this->render($this->action->id,$data);
    }
    
}