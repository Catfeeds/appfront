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
use yii\mongodb\Query;

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
        $_SESSION['pagess']="index";

    	$now=date("Y-m-d",time());
    	$sta=strtotime($now);
    	$end=$sta+60*60*24;
    	$data['huiyuannew']=$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM customer WHERE created_at>{$sta} AND created_at<{$end}")->queryOne();
    	$data['huiyuanall']=$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM customer")->queryOne();
    	$data['shuisinew']=$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM shop WHERE created_at>{$sta} AND created_at<{$end} AND shop_type=1 AND shop_state in(0,1,2)")->queryOne();
    	$data['shuisiall']=$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM shop WHERE shop_type=1 AND shop_state in(0,1,2)")->queryOne();
    	$data['shangjianew']=$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM shop WHERE created_at>{$sta} AND created_at<{$end} AND shop_type=2 AND shop_state in(0,1,2)")->queryOne();
    	$data['shangjiaall']=$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM shop WHERE shop_type=2 AND shop_state in(0,1,2)")->queryOne();
//     	echo "<pre>";
//     	print_r($data);;die;
        return $this->render($this->action->id,$data);
    }
//=========================商家数据==================================
    //商家数据
    public function actionShop(){
        $_SESSION['pagess']="shop";
        $req = Yii::$app->request;
        $tot = 0;
        $province = Yii::$app->db->createCommand('select * from sys_province')->queryAll();
        $city = Yii::$app->db->createCommand('select * from sys_city')->queryAll();
        $district = Yii::$app->db->createCommand('select * from sys_district')->queryAll();


        $province_id = (int)$req->get(province_id);
        $city_id = (int)$req->get(city_id);
        $district_id = (int)$req->get(district_id);
        $shop_name = $req->get(shop_name);

        /*var_dump($province_id,$city_id,$district_id);
        exit;*/
        $where = "WHERE shop_type = 2";
        if($shop_name!=null && $shop_name!=""){
            $where .=" AND shop_name like '%$shop_name%'";
        }
        if($province_id!=0 && $province_id!=null){
            $where .=" AND province_id=$province_id";
        }
        if($city_id!=0 && $city_id!=null){
            $where .=" AND city_id=$city_id";
        }
        if($district_id!=0 && $district_id!=null){
            $where .=" AND district_id=$district_id";
        }
       /* var_dump($where);
        exit;*/
        $pages =  Yii::$app->db->createCommand("SELECT * FROM shop $where")->queryAll();
        /*var_dump($pages);
        exit;*/
        foreach ($pages as $k => $v) {
            $tot++;
        }
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $tot,
        ]);
        $sql = "SELECT * FROM shop $where  LIMIT $pagination->offset,$pagination->limit";
        $res = Yii::$app->db->createCommand($sql)->queryAll();
        $_SESSION['shopdata'] = $res;
        $query = new Query;
// 好评率
       /* $arr = array();*/
//加上where条件就可以了
       /* foreach ($res as $key=>$value){
            $condition['shop_id'] =$value["shop_id"];
            $review = $query->from("review")->all();
            $num = 0;
            $count = 0;
            foreach ($review as $k=>$v){
                $num++;
                $count += $v['rate_star'];
            }
            $arr[$key] = ceil($count/$num/5*100).'%';
            $num = 0;
            $count = 0;
        }
        $_SESSION["arr"] = $arr;*/
//投诉率

        $completenum = array();//每个商店的所有完成订单的情况
        $tousunum = array();
        foreach ($res as $k=>$v){
            $completenum[$k] = 0; //每个订单已完成的个数
            $shop_id = $v['shop_id'];
            //所有完成订单个数
            $tousu = Yii::$app->db->createCommand("SELECT * FROM sales_flat_order WHERE shop_id = $shop_id and order_status='4'")->queryAll();
            foreach ($tousu as $tk=>$tv){
                $completenum[$k] ++;
            }
            //评价投诉的个数$badreview
            $condition['shop_id'] = $v["shop_id"];
            $condition['status'] = 0;//评论状态为0时，则是投诉
            $badreview = $query->from("review")->where($condition)->all();
            //求出投诉率
            if ($badreview==null){
                $tousunum[$k] = 0;
            }else{
                $tousunum[$k] = $badreview[$k]/$completenum[$k];
            }
        }


        $data['res'] = $res;
        $data['pagination'] = $pagination;
        $data['tot'] = $tot;
        $data['province'] = $province;
        $data['city'] = $city;
        $data['district'] =$district ;
        $data['shop_name'] = $shop_name;
        $data['arr'] = $arr;
        $data['tousunum'] = $tousunum;
        return $this->render($this->action->id,$data);
    }
    //加载市区
    public function actionGetcity()
    {
        $province_id = $_GET['province_id'];
        $sql = 'select * from sys_city WHERE province_id=' . $province_id;
        $city = Yii::$app->db->createCommand($sql)->queryAll();
        return json_encode($city);
    }

    //加载县
    public function actionGetdistrict()
    {
        $city_id = $_GET['city_id'];
        $sql = 'select * from sys_district where city_id =' . $city_id;
        $district = Yii::$app->db->createCommand($sql)->queryAll();
        return json_encode($district);
    }
    //导出表格
    public function actionExport(){
        $data = $_SESSION['shopdata'];
        if ($data == null){
            exit("no datas!");
        }
        $shop_type = Yii::$app->request->get(shop_type);
        if ($shop_type == 2){
            $shop = "商家";
        }else if ($shop_type == 1){
            $shop = "水司";
        }
        $province = Yii::$app->db->createCommand('select * from sys_province')->queryAll();
        $city = Yii::$app->db->createCommand('select * from sys_city')->queryAll();
        $district = Yii::$app->db->createCommand('select * from sys_district')->queryAll();
        header('Content-Type: text/xls');
        header ( "Content-type:application/vnd.ms-excel;charset=utf-8" );
        header('Content-Disposition: attachment;filename=" 数据导出.xls"');
        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
        header('Expires:0');
        header('Pragma:public');

        //利用表格导出到excel文件
        $table = '<table border="1"><tr>
        <th colspan="4">
            商家数据
        </th>
        </tr><tr>';
        $arr = $_SESSION['arr'];
        $th = array(
            'ID','商家名称','地区','好评率'
        );


        $beginThismonth=mktime(0,0,0,date('m'),1,date('Y'));
        $endThismonth=mktime(23,59,59,date('m'),date('t'),date('Y'));
        /*$sql="SELECT *
    			FROM shop as A
    			WHERE A.shop_type = 2
    		  ";*/
        //AND B.updated_at>{$beginThismonth} AND B.updated_at<{$endThismonth}

        //循环表头数组到excel里
        foreach($th as $i){
            $table.="<th>".$i."</th>";
        }
        $table.='</tr>';
        //将数据以表格形式循环到excel，这里根据实际数组不同表格可以自行拼接调整
        foreach ($data as $k=>$v){
            $table .= '<tr>';
            $table .= '<td>' . $v['shop_id']. '</td>';
            $table .= '<td>' . $v['shop_name']. '</td>';
            $table .= '<td>' . $province[$v['province_id']-1]["province_name"] .$city[$v['city_id']-1]["city_name"].$district[$v['district_id']-1]["district_name"]. '</td>';
            $table .= '<td>' . $arr[$k]. '</td>';
            $table .= '</tr>';
        }
        $table .='</table>';
        echo $table;


    }

    //查看商家数据
    //查看商家数据
    public function actionWshop(){
        $req = Yii::$app->request;
        $id = $req->get(id);
        $_SESSION['id'] = $id;
        $query = new Query();
        $a = $_GET['a'];
        //商品销售
        $condition['created_user_id'] = (int)$id;//created_user_id和shop_id相对应
        $tot = $query->from("product_flat")->where($condition)->count();
        // 订单成交转换率
        $order = Yii::$app->db->createCommand("SELECT * FROM sales_flat_order WHERE order_status=4 AND shop_id='$id'")->queryAll();
        $orders = Yii::$app->db->createCommand("SELECT * FROM sales_flat_order WHERE shop_id='$id'")->queryAll();
        $zhall = count($orders);
        $zhdone = count($order);
        if($zhall == 0){
            $zh = 0;
        }else{
            $zh = $zhdone/$zhall;
        }
//        投诉率
        $complaint = Yii::$app->db->createCommand("SELECT *  FROM customer_complaint WHERE shop_id = '$id'")->queryAll();
        if($zhall == 0){
            $ts = 0;
        }else{
            $ts = count($complaint)/$zhall;
        }

        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $tot,
        ]);
        $sales = $query->from("product_flat")->where($condition)->offset($pagination->offset)->limit($pagination->limit)->all();

        $arr = array();
        if($a == 2){
            //根据总销售额排序由高到低
            for($i=0;$i<count($sales);$i++)
            {
                for($j=count($sales)-1;$j>$i;$j--){
                    $salescount1 = $sales[$j]['price']*$sales[$j]['score'];
                    $salescount2 = $sales[$j-1]['price']*$sales[$j-1]['score'];
                    if($salescount1<$salescount2){
                        $temp = $sales[$j];
                        $sales[$j] = $sales[$j-1];
                        $sales[$j-1] = $temp;
                    }
                }
            }

        }else if ($a == 1 || $a == null || $a ==""){
//            按销售量排行
            for($i=0;$i<count($sales);$i++)
            {
                for($j=count($sales)-1;$j>$i;$j--){
                    if($sales[$j]['score']<$sales[$j-1]['score']){
                        $temp = $sales[$j];
                        $sales[$j] = $sales[$j-1];
                        $sales[$j-1] = $temp;
                    }
                }
            }
        }
       $_SESSION['sales'] = $sales;

        $data['sales'] = $sales;
        $data['tot'] = $tot;
        $data['pagination'] = $pagination;
        $data['id'] = $id;
        $data['zh'] = $zh;
        $data['ts'] = $ts;
        $data['a'] = $a;
        return $this->render($this->action->id,$data);
    }
//导出商品排行
    public function actionExportp(){
        $data = $_SESSION['sales'];
        if ($data == null){
            exit("no datas!");
        }
        $shop_type = Yii::$app->request->get(shop_type);
        if ($shop_type == 2){
            $shop = "商家";
        }else if ($shop_type == 1){
            $shop = "水司";
        }
        $province = Yii::$app->db->createCommand('select * from sys_province')->queryAll();
        $city = Yii::$app->db->createCommand('select * from sys_city')->queryAll();
        $district = Yii::$app->db->createCommand('select * from sys_district')->queryAll();
        header('Content-Type: text/xls');
        header ( "Content-type:application/vnd.ms-excel;charset=utf-8" );
        header('Content-Disposition: attachment;filename=" 商品排行数据导出.xls"');
        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
        header('Expires:0');
        header('Pragma:public');

        //利用表格导出到excel文件
        $table = '<table border="1"><tr>
        <th colspan="4">
            商家数据
        </th>
        </tr><tr>';
        $arr = $_SESSION['arr'];
        $th = array(
            '排行','货号','商品名称','商品量/件','销售额/元','均价/元'
        );


        $beginThismonth=mktime(0,0,0,date('m'),1,date('Y'));
        $endThismonth=mktime(23,59,59,date('m'),date('t'),date('Y'));

        //循环表头数组到excel里
        foreach($th as $i){
            $table.="<th>".$i."</th>";
        }
        $table.='</tr>';
        //将数据以表格形式循环到excel，这里根据实际数组不同表格可以自行拼接调整
        foreach ($data as $k=>$v){
            $table .= '<tr>';
            $table .= '<td>' . ($k+1). '</td>';
            $table .= '<td>' . $v['spu']. '</td>';
            $table .= '<td>' .$v['name']['name_zh']. '</td>';
            $table .= '<td>' .$v['score']. '</td>';
            $table .= '<td>' . $v['score']*$v['price']. '</td>';
            $table .= '<td>' . $v['price']. '</td>';
            $table .= '</tr>';
        }
        $table .='</table>';
        echo $table;


    }
    //统计好评，投诉
    public function actionComplaint()
    {
        $create_t1=strtotime($_GET["t1"]);

        $create_t2=strtotime($_GET["t2"]);

        $shop_id = $_SESSION['shop_id'];
        $complaint = Yii::$app->db->createCommand("SELECT *  FROM customer_complaint WHERE shop_id = $shop_id and times>$create_t1 AND times<$create_t2")->queryAll();

        echo json_encode($complaint);
        exit();
    }

    public function actionEvalute(){
        $create_t1=strtotime($_GET["t1"]);
        $create_t2=strtotime($_GET["t2"]);
        $query=new Query;
        $arr1=$query->from("review")
            ->where(['rate_star'=>['$gte'=>'4'],'review_date'=>['$gte'=>$create_t1]])
            ->all();
        $arr2=$query->from("review")
            ->where(['rate_star'=>'3','review_date'=>['$gte'=>$create_t1]])
            ->all();
        $arr3=$query->from("review")
            ->where(['rate_star'=>['$lte'=>'2'],'review_date'=>['$gte'=>$create_t1]])
            ->all();
        $arr=[];
        $arr[0]=$arr1;
        $arr[1]=$arr2;
        $arr[2]=$arr3;
        echo json_encode($arr);
        exit();
    }



    //水司数据
    public function actionWater(){
        $_SESSION['pagess']="water";
        $req = Yii::$app->request;
        $tot = 0;
        $province = Yii::$app->db->createCommand('select * from sys_province')->queryAll();
        $city = Yii::$app->db->createCommand('select * from sys_city')->queryAll();
        $district = Yii::$app->db->createCommand('select * from sys_district')->queryAll();


        $province_id = $req->get(province_id);
        $city_id = $req->get(city_id);
        $district_id = $req->get(district_id);
        $shop_name = $req->get(shop_name);
        $where = "WHERE shop_type = 1";
        if($shop_name!=null && $shop_name!=""){
            $where .=" AND shop_name like '%$shop_name%'";
        }
        if($province_id!=0 && $province_id!=0){
            $where .=" AND province_id=$province_id";
        }
        if($city_id!=0 && $city_id!=0){
            $where .=" AND city_id=$city_id";
        }
        if($district_id!=0 && $district_id!=0){
            $where .=" AND district_id=$district_id";
        }
        $pages =  Yii::$app->db->createCommand("SELECT * FROM shop $where")->queryAll();
        foreach ($pages as $k => $v) {
            $tot++;
        }
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $tot,
        ]);
        $sql = "SELECT * FROM shop $where  LIMIT $pagination->offset,$pagination->limit";
        $res = Yii::$app->db->createCommand($sql)->queryAll();
        $_SESSION['waterdata'] = $res;
        $query = new Query;
// 好评率
        $arr = array();
//加上where条件就可以了
        foreach ($res as $key=>$value){
            $condition['shop_id'] =$value["shop_id"];
            $review = $query->from("review")->all();
            $num = 0;
            $count = 0;
            foreach ($review as $k=>$v){
                $num++;
                $count += $v['rate_star'];
            }
            $arr[$key] = ceil($count/$num/5*100).'%';
            $num = 0;
            $count = 0;
        }
        $_SESSION["arr"] = $arr;
//投诉率

        $completenum = array();//每个商店的所有完成订单的情况
        $tousunum = array();
        foreach ($res as $k=>$v){
            $completenum[$k] = 0; //每个订单已完成的个数
            $shop_id = $v['shop_id'];
            //所有完成订单个数
            $tousu = Yii::$app->db->createCommand("SELECT * FROM sales_flat_order WHERE shop_id = $shop_id and order_status='4'")->queryAll();
            foreach ($tousu as $tk=>$tv){
                $completenum[$k] ++;
            }
            //评价投诉的个数$badreview
            $condition['shop_id'] = $v["shop_id"];
            $condition['status'] = 0;//评论状态为0时，则是投诉
            $badreview = $query->from("review")->where($condition)->all();
            //求出投诉率
            if ($badreview==null){
                $tousunum[$k] = 0;
            }else{
                $tousunum[$k] = $badreview[$k]/$completenum[$k];
            }
        }


        $data['res'] = $res;
        $data['pagination'] = $pagination;
        $data['tot'] = $tot;
        $data['province'] = $province;
        $data['city'] = $city;
        $data['district'] =$district ;
        $data['shop_name'] = $shop_name;
        $data['arr'] = $arr;
        $data['tousunum'] = $tousunum;
        return $this->render($this->action->id,$data);
    }
    //导出表格
    public function actionExportw(){
        $data = $_SESSION['waterdata'];
        if ($data == null){
            exit("no datas!");
        }
        $shop_type = Yii::$app->request->get(shop_type);
        if ($shop_type == 2){
            $shop = "商家";
        }else if ($shop_type == 1){
            $shop = "水司";
        }
        $province = Yii::$app->db->createCommand('select * from sys_province')->queryAll();
        $city = Yii::$app->db->createCommand('select * from sys_city')->queryAll();
        $district = Yii::$app->db->createCommand('select * from sys_district')->queryAll();
        header('Content-Type: text/xls');
        header ( "Content-type:application/vnd.ms-excel;charset=utf-8" );
        header('Content-Disposition: attachment;filename=" 数据导出.xls"');
        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
        header('Expires:0');
        header('Pragma:public');

        //利用表格导出到excel文件
        $table = '<table border="1"><tr>
        <th colspan="4">
            商家数据
        </th>
        </tr><tr>';
        $arr = $_SESSION['arr'];
        $th = array(
            'ID','商家名称','地区','好评率'
        );


        $beginThismonth=mktime(0,0,0,date('m'),1,date('Y'));
        $endThismonth=mktime(23,59,59,date('m'),date('t'),date('Y'));
        /*$sql="SELECT *
    			FROM shop as A
    			WHERE A.shop_type = 2
    		  ";*/
        //AND B.updated_at>{$beginThismonth} AND B.updated_at<{$endThismonth}

        //循环表头数组到excel里
        foreach($th as $i){
            $table.="<th>".$i."</th>";
        }
        $table.='</tr>';
        //将数据以表格形式循环到excel，这里根据实际数组不同表格可以自行拼接调整
        foreach ($data as $k=>$v){
            $table .= '<tr>';
            $table .= '<td>' . $v['shop_id']. '</td>';
            $table .= '<td>' . $v['shop_name']. '</td>';
            $table .= '<td>' . $province[$v['province_id']-1]["province_name"] .$city[$v['city_id']-1]["city_name"].$district[$v['district_id']-1]["district_name"]. '</td>';
            $table .= '<td>' . $arr[$k]. '</td>';
            $table .= '</tr>';
        }
        $table .='</table>';
        echo $table;


    }
    //查看水司
    public function actionWwater(){
        $req = Yii::$app->request;
        $id = $req->get(id);
        $_SESSION['id'] = $id;
        $query = new Query();
        $a = $_GET['a'];
        //商品销售
        $condition['created_user_id'] = (int)$id;//created_user_id和shop_id相对应
        $tot = $query->from("product_flat")->where($condition)->count();
        // 订单成交转换率
        $order = Yii::$app->db->createCommand("SELECT * FROM sales_flat_order WHERE order_status=4 AND shop_id='$id'")->queryAll();
        $orders = Yii::$app->db->createCommand("SELECT * FROM sales_flat_order WHERE shop_id='$id'")->queryAll();
        $zhall = count($orders);
        $zhdone = count($order);
        if($zhall == 0){
            $zh = 0;
        }else{
            $zh = $zhdone/$zhall;
        }
//        投诉率
        $complaint = Yii::$app->db->createCommand("SELECT *  FROM customer_complaint WHERE shop_id = '$id'")->queryAll();
        if($zhall == 0){
            $ts = 0;
        }else{
            $ts = count($complaint)/$zhall;
        }

        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $tot,
        ]);
        $sales = $query->from("product_flat")->where($condition)->offset($pagination->offset)->limit($pagination->limit)->all();

        $arr = array();
        if($a == 2){
            //根据总销售额排序由高到低
            for($i=0;$i<count($sales);$i++)
            {
                for($j=count($sales)-1;$j>$i;$j--){
                    $salescount1 = $sales[$j]['price']*$sales[$j]['score'];
                    $salescount2 = $sales[$j-1]['price']*$sales[$j-1]['score'];
                    if($salescount1<$salescount2){
                        $temp = $sales[$j];
                        $sales[$j] = $sales[$j-1];
                        $sales[$j-1] = $temp;
                    }
                }
            }

        }else if ($a == 1 || $a == null || $a ==""){
//            按销售量排行
            for($i=0;$i<count($sales);$i++)
            {
                for($j=count($sales)-1;$j>$i;$j--){
                    if($sales[$j]['score']<$sales[$j-1]['score']){
                        $temp = $sales[$j];
                        $sales[$j] = $sales[$j-1];
                        $sales[$j-1] = $temp;
                    }
                }
            }
        }

        $_SESSION['sales'] = $sales;

        $data['sales'] = $sales;
        $data['tot'] = $tot;
        $data['pagination'] = $pagination;
        $data['id'] = $id;
        $data['zh'] = $zh;
        $data['ts'] = $ts;
        $data['a'] = $a;
        return $this->render($this->action->id,$data);
    }

    /*
     * 返回最近小时的时间和新增量
     * 参数1：hours int 最近的前几个小时
    */
    public function actionHours(){
    	$type=$_GET['type'];
    	$name="customer";
    	$where=" ";
    	if($type==1){
    		$name="shop";
    		$where=" AND shop_type=1 AND shop_state in(0,1,2)";
    	}else if($type==2){
    		$name="shop";
    		$where=" AND shop_type=2 AND shop_state in(0,1,2)";
    	}else if($type==3){
    		$name="customer";
    		$where=" ";
    	}
    	$hours=$_GET['hours'];
    	$day=60*60;
    	for($i=$hours;$i>0;$i--){
    		$date['dat'][]=date("Y-m-d H:i",time()-60*60*$i);
    	}
    	$date['dat'][]=date("Y-m-d H:i",time());
    	foreach ($date['dat'] as $k=>$v){
    		$min=strtotime($v);
    		$max=$min+$day;
    		$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM {$name} WHERE created_at>{$min} AND created_at<{$max} {$where}")->queryOne();
    		$date['num'][$k]=$num['num'];
    	}
//     	echo "<pre>";
//     	print_r($date);die;
    	return json_encode($date);
    }
    /* 
     * 返回最近七天的时间和新增量
     */
    public function actionWeek(){
    	$type=$_GET['type'];
    	$name="customer";
    	$where=" ";
    	if($type==1){
    		$name="shop";
    		$where=" AND shop_type=1 AND shop_state in(0,1,2)";
    	}else if($type==2){
    		$name="shop";
    		$where=" AND shop_type=2 AND shop_state in(0,1,2)";
    	}else if($type==3){
    		$name="customer";
    		$where=" ";
    	}
    	$day=60*60*24;
    	$date['dat'][]=date("Y-m-d",strtotime("-6 day"));
    	$date['dat'][]=date("Y-m-d",strtotime("-5 day"));
    	$date['dat'][]=date("Y-m-d",strtotime("-4 day"));
    	$date['dat'][]=date("Y-m-d",strtotime("-3 day"));
    	$date['dat'][]=date("Y-m-d",strtotime("-2 day"));
    	$date['dat'][]=date("Y-m-d",strtotime("-1 day"));
    	$date['dat'][]=date("Y-m-d",time());
    	foreach ($date['dat'] as $k=>$v){
    		$min=strtotime($v);
    		$max=$min+$day;
    		$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM {$name} WHERE created_at>{$min} AND created_at<{$max} {$where}")->queryOne();
    		$date['num'][$k]=$num['num'];
    	}
    	return json_encode($date);
    }
    /*
     * 返回最近一个月的时间和新增量
    */
    public function actionMonth(){
    	$type=$_GET['type'];
    	$name="customer";
    	$where=" ";
    	if($type==1){
    		$name="shop";
    		$where=" AND shop_type=1 AND shop_state in(0,1,2)";
    	}else if($type==2){
    		$name="shop";
    		$where=" AND shop_type=2 AND shop_state in(0,1,2)";
    	}else if($type==3){
    		$name="customer";
    		$where=" ";
    	}
    	$day=60*60*24;
    	for($i=31;$i>0;$i--){
    		$n="-".$i." day";
    		$date['dat'][]=date("Y-m-d",strtotime($n));
    	}
    	$date['dat'][]=date("Y-m-d",time());
    	foreach ($date['dat'] as $k=>$v){
    		$min=strtotime($v);
    		$max=$min+$day;
    		$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM {$name} WHERE created_at>{$min} AND created_at<{$max} {$where}")->queryOne();
    		$date['num'][$k]=$num['num'];
    	}
//     	echo "<pre>";
//     	print_r($date);
    	return json_encode($date);
    }
    /*
     * 返回最近一个季度的时间和新增量
    */
    public function actionQuarter(){
    	$type=$_GET['type'];
    	$name="customer";
    	$where=" ";
    	if($type==1){
    		$name="shop";
    		$where=" AND shop_type=1 AND shop_state in(0,1,2)";
    	}else if($type==2){
    		$name="shop";
    		$where=" AND shop_type=2 AND shop_state in(0,1,2)";
    	}else if($type==3){
    		$name="customer";
    		$where=" ";
    	}
    	$day=60*60*24;
    	for($i=91;$i>0;$i--){
    		$n="-".$i." day";
    		$date['dat'][]=date("Y-m-d",strtotime($n));
    	}
    	$date['dat'][]=date("Y-m-d",time());
    	foreach ($date['dat'] as $k=>$v){
    		$min=strtotime($v);
    	    $max=$min+$day;
    		$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM {$name} WHERE created_at>{$min} AND created_at<{$max} {$where}")->queryOne();
    		$date['num'][$k]=$num['num'];
    	}
    	return json_encode($date);
    }
    /*
     * 返回最近一年的时间和新增量
     */
    public function actionYear(){
    	$type=$_GET['type'];
    	$name="customer";
    	$where=" ";
    	if($type==1){
    		$name="shop";
    		$where=" AND shop_type=1 AND shop_state in(0,1,2)";
    	}else if($type==2){
    		$name="shop";
    		$where=" AND shop_type=2 AND shop_state in(0,1,2)";
    	}else if($type==3){
    		$name="customer";
    		$where=" ";
    	}
    	$day=60*60*24*30;
    	$date['dat'][]=date("Y-m",strtotime("-12 month"));
    	$date['dat'][]=date("Y-m",strtotime("-11 month"));
    	$date['dat'][]=date("Y-m",strtotime("-10 month"));
    	$date['dat'][]=date("Y-m",strtotime("-9 month"));
    	$date['dat'][]=date("Y-m",strtotime("-8 month"));
    	$date['dat'][]=date("Y-m",strtotime("-7 month"));
    	$date['dat'][]=date("Y-m",strtotime("-6 month"));
    	$date['dat'][]=date("Y-m",strtotime("-5 month"));
    	$date['dat'][]=date("Y-m",strtotime("-4 month"));
    	$date['dat'][]=date("Y-m",strtotime("-3 month"));
    	$date['dat'][]=date("Y-m",strtotime("-2 month"));
    	$date['dat'][]=date("Y-m",strtotime("-1 month"));
    	$date['dat'][]=date("Y-m",time());
    	foreach ($date['dat'] as $k=>$v){
    	$min=strtotime($v);
    	$max=$min+$day;
    	$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM {$name} WHERE created_at>{$min} AND created_at<{$max} {$where}")->queryOne();
    	$date['num'][$k]=$num['num'];
    	}
//     	echo "<pre>";
//     	print_r($date);
    	return json_encode($date);
    }
    /*
     * 返回随便两个日期的时间和新增量
     */
    public function actionSearchdate(){
    	
    	$startime=$_GET['sta'];
    	$endtime=$_GET['end'];
    	$type=$_GET['type'];
    	$name="customer";
    	$where=" ";
    	if($type==1){
    		$name="shop";
    		$where=" AND shop_type=1 AND shop_state in(0,1,2)";
    	}else if($type==2){
    		$name="shop";
    		$where=" AND shop_type=2 AND shop_state in(0,1,2)";
    	}else if($type==3){
    		$name="customer";
    		$where=" ";
    	}
    	$day=60*60*24;
    	//开始时间
    	$start=strtotime($startime);
    	$end=strtotime($endtime);
    	$now=time();
    	//当前时间到开始时间差
    	$ca=floor(($now-$start)/(60*60*24));
    	$numday=floor(($end-$start)/(60*60*24));
    	$date['dat'][]=date("Y-m-d",$start);
    	
    	for($i=1;$i<=$numday;$i++){
    		$m=$i-$ca;
    		$n="+".$m." day";
    		$date['dat'][]=date("Y-m-d",strtotime($n));
    	}
    	$date['dat'][]=date("Y-m-d",$end);
    	foreach ($date['dat'] as $k=>$v){
    		$min=strtotime($v);
    		$max=$min+$day;
    		$num = Yii::$app->db->createCommand("SELECT count(1) as num FROM {$name} WHERE created_at>{$min} AND created_at<{$max} {$where}")->queryOne();
    		$date['num'][$k]=$num['num'];
    	}
//     	    	echo "<pre>";
//     	    	print_r($date);
    	return json_encode($date);
    }
}