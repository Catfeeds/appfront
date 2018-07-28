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

        Yii::$service->page->theme->layoutFile = 'apply.php';

        // 如果未登录
        if(!($_SESSION["login"] == "yes")){
            $_SESSION["uid"] = 0;
            $_SESSION["shop_id"] = 0;
            return $this->redirect("/shop/login/index");
        }
    }

    // 商家入驻的展示页面
    
    public function actionIndex(){
    	return $this->render($this->action->id);
    }
    // 入驻须知页面
    public function actionNotes(){
    	//公司信息页点击上一步时将公司信息和图片暂时存在session中
    	$_SESSION['companyinfo']['post']=$_POST;
    	$arr=self::actionUpload($_FILES);
    	$_SESSION['companyinfo']['img']=$arr;
    	if($_POST['img0']!=""){
    		$_SESSION['companyinfo']['imgc']['img0']=$_POST['img0'];
    	}
    	if($_POST['img1']){
    		$_SESSION['companyinfo']['imgc']['img1']=$_POST['img1'];
    	}
    	if($_POST['img2']){
    		$_SESSION['companyinfo']['imgc']['img2']=$_POST['img2'];
    	}
    	if($_POST['img3']!=""){
    		$_SESSION['companyinfo']['imgc']['img3']=$_POST['img3'];
    	}
    	if($_POST['img4']){
    		$_SESSION['companyinfo']['imgc']['img4']=$_POST['img4'];
    	}
    	if($_POST['img5']){
    		$_SESSION['companyinfo']['imgc']['img5']=$_POST['img5'];
    	}
    	if($_POST['img6']!=""){
    		$_SESSION['companyinfo']['imgc']['img6']=$_POST['img6'];
    	}
    	if($_POST['img7']!=""){
    		$_SESSION['companyinfo']['imgc']['img7']=$_POST['img7'];
    	}
    	
        return $this->render($this->action->id);
    }

    // 企业信息认证页面
    public function actionCompanyinfo(){
    	//店铺信息页点击上一步时将公司信息和图片暂时存在session中
    	$_SESSION['shopinfo']['post']=$_POST;
    	$arr=self::actionUpload($_FILES);
    	$_SESSION['shopinfo']['img']=$arr;
    	if($_POST['img0']!=""){
    		$_SESSION['shopinfo']['imgs']['img0']=$_POST['img0'];
    	}
    	if($_POST['img1']){
    		$_SESSION['shopinfo']['imgs']['img1']=$_POST['img1'];
    	}
    	if($_POST['img2']){
    		$_SESSION['shopinfo']['imgs']['img2']=$_POST['img2'];
    	}
    	
        $data['companyinfo']=$_SESSION['companyinfo'];
        return $this->render($this->action->id, $data);
    }

    // 店铺信息认证
    public function actionShopinfo(){
    	//公司信息页点击下一步时将公司信息和图片暂时存在session中
    	$_SESSION['companyinfo']['post']=$_POST;
    	$arr=self::actionUpload($_FILES);
    	$_SESSION['companyinfo']['img']=$arr;
    	if($_POST['img0']!=""){
    		$_SESSION['companyinfo']['imgc']['img0']=$_POST['img0'];
    	}
    	if($_POST['img1']){
    		$_SESSION['companyinfo']['imgc']['img1']=$_POST['img1'];
    	}
    	if($_POST['img2']){
    		$_SESSION['companyinfo']['imgc']['img2']=$_POST['img2'];
    	}
    	if($_POST['img3']!=""){
    		$_SESSION['companyinfo']['imgc']['img3']=$_POST['img3'];
    	}
    	if($_POST['img4']){
    		$_SESSION['companyinfo']['imgc']['img4']=$_POST['img4'];
    	}
    	if($_POST['img5']){
    		$_SESSION['companyinfo']['imgc']['img5']=$_POST['img5'];
    	}
    	if($_POST['img6']!=""){
    		$_SESSION['companyinfo']['imgc']['img6']=$_POST['img6'];
    	}
    	if($_POST['img7']!=""){
    		$_SESSION['companyinfo']['imgc']['img7']=$_POST['img7'];
    	}
    	
    	$sql="SELECT * FROM sys_province";
    	$data['province'] = Yii::$app->db->createCommand($sql)->queryAll();
    	$data['shopinfo'] = $_SESSION['shopinfo'];
    	return $this->render($this->action->id,$data);
    	
     }
     // 等待审核
     public function actionWaitaudit1(){
     	$arr1=$_SESSION['companyinfo']['post'];
     	$arr2=$_POST;
     	$arr3=array_merge($arr1,$arr2);
     	$companyfile=$_SESSION['companyinfo']['img'];
     	$shopfile=$_FILES;
     	//将第一次提交的图片赋给$arr
     	$arr3['business_licence_number_electronic']=$companyfile[0];
     	$arr3['contacts_card_electronic_1']=$companyfile[1];
     	$arr3['contacts_card_electronic_2']=$companyfile[2];
     	$arr3['contacts_card_electronic_3']=$companyfile[3];
     	$arr3['general_taxpayer']=$companyfile[4];
     	$arr3['organization_code_electronic']=$companyfile[5];
     	$arr3['bank_licence_electronic']=$companyfile[6];
     	$arr3['tax_registration_certificate_electronic']=$companyfile[7];
     	
     	$arr5=self::actionUpload($shopfile);
     	$arr3['shop_logo']=$arr5[0];
     	$arr3['shop_banner']=$arr5[1];
     	$arr3['shop_avatar']=$arr5[2];
     	$arr3['shop_state']=3;//店铺状态，0关闭，1开启，2冻结，3 待审核  4未通过
     	//用户登录之后才能进行商家入驻，uid为用户id
     	$arr3['uid']=$_SESSION['uid'];
     	unset($arr3['_csrf']);
     	unset($arr3['img0']);
     	unset($arr3['img1']);
     	unset($arr3['img2']);
     	unset($arr3['img3']);
     	unset($arr3['img4']);
     	unset($arr3['img5']);
     	unset($arr3['img6']);
     	unset($arr3['img7']);
     	Yii::$app->db->createCommand()->insert('shop',$arr3)->execute();
     	
        return $this->redirect("/apply/apply/waitaudit");

     }

     // 等待页面
     public function actionWaitaudit(){
        return $this->render($this->action->id);

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
    /* 商家入驻的列表页面
     * 默认返回所有商家列表
     * 参数1: shop_state  int  可选     筛选商家入驻状态
     * 参数2: shop_type  int  可选   筛选商家类型
     * return arr  json 所有满足条件的商家信息
     *  */
    public function actionList(){
    	$shop_state =$request->get("shop_state");
    	$shop_type =$request->get("shop_type");
    	$where ="1=1 ";
    	//通过店铺状态搜索
    	if($shop_state){
    		$where .= " AND A.shop_state=".$shop_state;
    	}
    	//通过商家类型搜索
    	if($shop_type){
    		$where .= " AND A.shop_type=".$shop_type;
    	}
    	$arr = Yii::$app->db->createCommand("
    			SELECT *,B.province_name,C.district_name,D.city_name FROM shop as A
    			  LEFT JOIN sys_province as B ON A.province_id = B.id
    			  LEFT JOIN sys_district as C ON A.district_id = C.id
    			  LEFT JOIN sys_city as D ON A.city_id = D.id
    			".$where)->queryAll();
    	if($arr){
    		return json_encode($arr);
    	}else{
    		return -1;
    	}
    }
    /* 商家入驻的详情页面
     * 默认返回指定商家的所有信息
     * 参数1: shop_id  int  必选    商家id
     * return arr json 商家的详细信息
     */
    public function actionDetails(){
    	$shop_id =$request->get("shop_id");
    	$arr = Yii::$app->db->createCommand("
    			SELECT *,B.province_name,C.district_name,D.city_name FROM shop as A
    			  LEFT JOIN sys_province as B ON A.province_id = B.id
    			  LEFT JOIN sys_district as C ON A.district_id = C.id
    			  LEFT JOIN sys_city as D ON A.city_id = D.id
    			 WHERE A.shop_id={$shop_id}
    			")->queryOne();
    	if($arr){
    		return json_encode($arr);
    	}else{
    		return -1;
    	}
    }
    /* 商家入驻审核
     * 默认返回指定商家的所有信息
     * 参数1: shop_id  int  必选    商家id
     * 参数2: shop_state  int  必选    商家入驻审核状态
     * 		 店铺状态，0关闭，1开启，2审核中，3 审核失败
     * return 1 int 操作成功
     *        -1 int 操作失败
     */
    public function actionExamine(){
    	$shop_id =$request->get("shop_id");
    	$shop_state =$request->get("shop_state");
    	$sql = "update shop set shop_state='$shop_state' where shop_id=$shop_id";
    	$res = Yii::$app->db->createCommand($sql)->execute();
    	if($res){
    		return 1;
    	}else{
    		return -1;
    	}
    }
    /* 查看入驻进度
     * 参数1: uid  int  必选    用户id
     * return $res['shop_state'] int 
     *  店铺状态，0关闭，1开启，2审核中，3 审核失败
     *        -1 int 当前用户没有申请商家入驻
     */
    public function actionEnter(){
    	$uid =$request->get("uid");
    	$res = Yii::$app->db->createCommand("select shop_state from shop where uid=$uid")->queryOne();
    	if($res){
    		return $res['shop_state'];
    	}else{
    		return -1;
    	}
    }
    /* 
     *多图片上传 
     */
    public function actionUpload($files){
    	//文件上传存放的目录
    	
    	$folder ='../../appimage/common/images/';
    	$file=$files['file'];
    	// 获取用户上传的数量
    	$size=count($file['name']);
    	$img=[];
    	// 文件处理
    	for ($i=0; $i < $size; $i++) {
    		// 接收文件名
    		$name=$file['name'][$i];
    		// 接收临时目录
    		$tmp_name=$file['tmp_name'][$i];
    		// 错误编码
    		$error=$file['error'][$i];
    		if ($error==0) {
    				# code...
    				// 新的文件名
    				$ext=substr($name,strrpos($name,'.'));
    				$newName=time().rand().rand().$ext;
    				// 进行上传
    				if (move_uploaded_file($tmp_name,$folder.$newName)) {
    					$img[]=$newName;
    				}
    		}else{
    			$img[]='';
    		}
    	}
    	return $img;
    }
  
    /* 
     * shop_id	int	11	0	0	-1	0	0	0		0	店铺索引id				-1	0
shop_type	int	11	0	0	0	0	0	0	0	0	店铺类型等级 1 代表水司 2 代表商家				0	0
uid	int	11	0	0	0	0	0	0	0	0	店铺管理员id				0	0
shop_state	tinyint	1	0	0	0	0	0	0	1	0	店铺状态，0关闭，1开启，2审核中，3 审核失败				0	0
shop_recommend	tinyint	1	0	0	0	0	0	0	0	0	推荐，0为否，1为是，默认为0				0	0
shop_credit	int	10	0	0	0	0	0	0	0	0	店铺信用				0	0
shop_desccredit	float	0	0	0	0	0	0	0	0	0	描述相符度分数				0	0
shop_servicecredit	float	0	0	0	0	0	0	0	0	0	服务态度分数				0	0
shop_deliverycredit	float	0	0	0	0	0	0	0	0	0	发货速度分数				0	0
shop_collect	int	10	0	0	0	-1	0	0	0	0	店铺收藏数量				0	0
shop_sales	decimal	10	2	0	0	0	0	0	0.00	0	店铺销售额（不计算退款）				0	0
shop_account	decimal	10	2	0	0	0	0	0	0.00	0	店铺账户余额				0	0
shop_cash	decimal	10	2	0	0	0	0	0	0.00	0	店铺可提现金额				0	0
live_store_name	varchar	255	0	0	0	0	0	0		0	商铺名称	utf8	utf8_general_ci		0	0
live_store_address	varchar	255	0	0	0	0	0	0		0	商家地址	utf8	utf8_general_ci		0	0
live_store_tel	varchar	255	0	0	0	0	0	0		0	商铺电话	utf8	utf8_general_ci		0	0
shop_create_time	int	11	0	0	0	0	0	0	0	0	店铺时间				0	0
shop_end_time	int	11	0	0	0	0	0	0	0	0	店铺关闭时间				0	0
shop_platform_commission_rate	decimal	10	2	0	0	0	0	0	0.00	0	平台抽取佣金比率				0	0


is_settlement_account	tinyint	1	0	0	0	0	0	0	1	0	开户行账号是否为结算账号 1-开户行就是结算账号 2-独立的计算账号				0	0

     *  */
    
}