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
class MoneyController extends PublicsController
{

    public function init()
    {
        parent::init();
        // 加载模板页面
        Yii::$service->page->theme->layoutFile = 'admin.php';
    }
//=========================财务管理===============================
    //平台财务
    public function actionIndex(){
        $_SESSION['pagess']="index";

    	$beginThismonth=mktime(0,0,0,date('m'),1,date('Y'));
    	$endThismonth=mktime(23,59,59,date('m'),date('t'),date('Y'));
    	$sql="SELECT A.shop_name, sum(B.items_count) as items, sum(B.grand_total) as grand
    			FROM shop as A
    		    LEFT JOIN sales_flat_order as B on A.shop_id=B.shop_id
    		   WHERE order_status in(1,3,4,5) AND B.updated_at>{$beginThismonth} AND B.updated_at<{$endThismonth} 
    		   GROUP BY B.shop_id ";
    	//AND B.updated_at>{$beginThismonth} AND B.updated_at<{$endThismonth}
    		$sql.=" ORDER BY items LIMIT 0,10";
    	//     	return $sql;
    	$data['list'] = Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render($this->action->id,$data);
    }
    //查看商家数据
    public function actionWwater(){
        
        $req = Yii::$app->request;
        $id = $req->get(id);
        $_SESSION['id'] = $id;
        $res = Yii::$app->db->createCommand("SELECT * FROM shop WHERE shop_id=$id")->queryOne();
        $data["res"] = $res;
//        var_dump($res);
//        exit();
        return $this->render($this->action->id,$data);
    }
    //查看商家数据
    public function actionWshop(){
        $req = Yii::$app->request;
        $id = $req->get(id);
        $_SESSION['id'] = $id;
        $res = Yii::$app->db->createCommand("SELECT * FROM shop WHERE shop_id=$id")->queryOne();
        $data["res"] = $res;
        return $this->render($this->action->id,$data);
    }
    //商家财务2
    public function actionShop(){
        $_SESSION['pagess']="shop";

    	// 查询数据总条数
    	$res = Yii::$app->db->createCommand("SELECT * FROM shop WHERE shop_state in (0,1,2) AND shop_type=2")->queryAll();
    	$query = new Query;
    	$tot = 0;
    	foreach ($res as $k=>$v){
    		$tot++;
    	}
    	// 实例化分页对象
    	$pagination = new Pagination([
    			'defaultPageSize' =>10,
    			'totalCount' => $tot,
    			]);
    	$where="";
    	$data['shop_name']=$_GET['shop_name'];
    	$data['shop_state']=$_GET['shop_state'];
    	if($data['shop_state']>0){
    		$shop_state=$_GET['shop_state'];
    		if($data['shop_state']==3){
    			$shop_state=0;
    		}
    		$where.=" AND A.shop_state=$shop_state";
    	}
    	
    	if($data['shop_name']){
    		$where .=" AND A.shop_name like '%{$data['shop_name']}%'";
    	}
    	$beginThismonth=mktime(0,0,0,date('m'),1,date('Y'));
    	$endThismonth=mktime(23,59,59,date('m'),date('t'),date('Y'));
    	
    	$sql="SELECT A.shop_name,C.total,B.total_B,A.shop_id ,A.shop_state,D.district_name 
				 FROM shop as A
				 LEFT JOIN (SELECT SUM(grand_total) as total_B,shop_id FROM sales_flat_order 
							WHERE shop_id in(SELECT shop_id FROM shop WHERE shop_type=2 AND shop_state in(0,1,2)) AND updated_at>$beginThismonth AND updated_at<$endThismonth  
							GROUP BY shop_id) as B ON A.shop_id=B.shop_id
				 LEFT JOIN (SELECT SUM(grand_total) as total,shop_id FROM sales_flat_order 
							 WHERE shop_id in(SELECT shop_id FROM shop WHERE shop_type=2 AND shop_state in(0,1,2)) 
							 GROUP BY shop_id) as C ON A.shop_id=C.shop_id
				 LEFT JOIN sys_district as D ON A.district_id=D.district_id 
				WHERE A.shop_type=2 AND A.shop_state in(0,1,2) $where
    			LIMIT $pagination->offset,$pagination->limit ";
    	$data["pagination"] = $pagination;
    	$data['list'] = Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render($this->action->id,$data);
    }
    //水司财务
    public function actionWater(){

        $_SESSION['pagess']="water";

    	// 查询数据总条数
    	$res = Yii::$app->db->createCommand("SELECT * FROM shop WHERE shop_state in (0,1,2) AND shop_type=1")->queryAll();
    	$query = new Query;
    	$tot = 0;
    	foreach ($res as $k=>$v){
    		$tot++;
    	}
    	// 实例化分页对象
    	$pagination = new Pagination([
    			'defaultPageSize' =>10,
    			'totalCount' => $tot,
    			]);
    	
    	$where;
    	$data['shop_name']=$_GET['shop_name'];
    	$data['shop_state']=$_GET['shop_state'];
    	if($data['shop_state']>0){
    		$shop_state=$_GET['shop_state'];
    		if($data['shop_state']==3){
    			$shop_state=0;
    		}
    		$where.=" AND A.shop_state=$shop_state";
    	}
    	if($data['shop_name']){
    		$where .=" AND A.shop_name like '%{$data['shop_name']}%'";
    	}
    	$beginThismonth=mktime(0,0,0,date('m'),1,date('Y'));
    	$endThismonth=mktime(23,59,59,date('m'),date('t'),date('Y'));
    	$sql="SELECT A.shop_name,C.total,B.total_B,A.shop_id ,A.shop_state,D.district_name 
				FROM shop as A
				LEFT JOIN (SELECT SUM(grand_total) as total_B,shop_id FROM sales_flat_order 
						   WHERE shop_id in(SELECT shop_id FROM shop WHERE shop_type=1 AND shop_state in(0,1,2)) AND updated_at>$beginThismonth AND updated_at<$endThismonth  
						   GROUP BY shop_id) as B ON A.shop_id=B.shop_id
				LEFT JOIN (SELECT SUM(grand_total) as total,shop_id FROM sales_flat_order 
						   WHERE shop_id in(SELECT shop_id FROM shop WHERE shop_type=1 AND shop_state in(0,1,2)) 
						   GROUP BY shop_id) as C ON A.shop_id=C.shop_id
				LEFT JOIN sys_district as D ON A.district_id=D.district_id 
			   WHERE A.shop_type=1 AND A.shop_state in(0,1,2) $where
    		   LIMIT $pagination->offset,$pagination->limit ";
    	$data["pagination"] = $pagination;
    	$data['list'] = Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render($this->action->id,$data);
    }
    public function actionFrozen(){
    	$id=$_GET['id'];
    	$sql="UPDATE shop SET shop_state=2 WHERE shop_id=".$id;
    	$arr = Yii::$app->db->createCommand($sql)->execute();
    	return $arr;
    }
    public function actionOpen(){
    	$id=$_GET['id'];
    	$sql="UPDATE shop SET shop_state=1 WHERE shop_id=".$id;
    	$arr = Yii::$app->db->createCommand($sql)->execute();
    	return $arr;
    }
    /*
     * 返回最近小时的时间和成交额
    * 参数1：hours int 最近的前几个小时
    */
    public function actionHours(){
    	$hours=$_GET['hours'];
    	$day=60*60;
    	for($i=$hours;$i>0;$i--){
    		$date['dat'][]=date("Y-m-d H:i",time()-60*60*$i);
    	}
    	$date['dat'][]=date("Y-m-d H:i",time());
    	foreach ($date['dat'] as $k=>$v){
    		$min=strtotime($v);
    		$max=$min+$day;
    		$num = Yii::$app->db->createCommand("SELECT sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max} AND order_status in(1,3,4,5)")->queryOne();
    		$date['num'][$k]=$num['num'];
    	}
    	//     	echo "<pre>";
    	//     	print_r($date);die;
    	return json_encode($date);
    }
    /*
    * 查询商家水司财务的数据
   */
    public function actionSearchhours(){
        $shop_id = $_SESSION['id'];
        $startime=$_GET['sta'];
        $endtime=$_GET['end'];
        $day=60*60*24;
        //开始时间
        $start=strtotime($startime);
        $end=strtotime($endtime);

        $data=[];
        //成交量 成交金额
        $num = Yii::$app->db->createCommand("SELECT count(*) as number,sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$start} AND updated_at<{$end} AND order_status !=0 AND order_status !=6 AND shop_id={$shop_id}")->queryOne();
        //下单量
        $sumnum = Yii::$app->db->createCommand("SELECT count(*) as sumnum FROM sales_flat_order WHERE updated_at>{$start} AND updated_at<{$end} AND shop_id={$shop_id}")->queryOne();
        //退货量
        $backnum = Yii::$app->db->createCommand("SELECT count(*) as backnum FROM sales_flat_order WHERE updated_at>{$start} AND updated_at<{$end} AND order_status in (5,6)  AND shop_id={$shop_id}")->queryOne();
        if($num['num']==null){
            $data['num']=0;
            $data['number']=$num['number'];
            $data['sumnum']=$sumnum['sumnum'];
            $data['backnum']=$backnum ['backnum'];
        }else{
            $data['num']=$num['num'];
            $data['number']=$num['number'];
            $data['sumnum']=$sumnum['sumnum'];
            $data['backnum']=$backnum ['backnum'];
        }
        return json_encode($data);
    }
    /*
    * 查询平台财务的数据
   *
   */
    public function actionSearchindex(){
        $shop_id = $_SESSION['id'];
        $startime=$_GET['sta'];
        $endtime=$_GET['end'];
        $day=60*60*24;
        //开始时间
        $start=strtotime($startime);
        $end=strtotime($endtime);

        $data=[];
        //成交量 成交金额
        $num = Yii::$app->db->createCommand("SELECT count(*) as number,sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$start} AND updated_at<{$end} AND order_status !=0 AND order_status !=6 AND shop_id={$shop_id}")->queryOne();
        $sumorder = Yii::$app->db->createCommand("SELECT count(*) as sumordernum,sum(grand_total) as sumorder FROM sales_flat_order WHERE updated_at>{$start} AND updated_at<{$end} AND order_status =0 AND shop_id={$shop_id}")->queryOne();
        //待支付
        $daizhifu = Yii::$app->db->createCommand("SELECT count(*) as daizhifunum,sum(grand_total) as daizhifu FROM sales_flat_order WHERE updated_at>{$start} AND updated_at<{$end} AND order_status =0 AND shop_id={$shop_id}")->queryOne();
        //已发货
        $yifahuo = Yii::$app->db->createCommand("SELECT count(*) as yifahuonum,sum(grand_total) as yifahuo FROM sales_flat_order WHERE updated_at>{$start} AND updated_at<{$end} AND order_status in (2,3) AND shop_id={$shop_id}")->queryOne();
        //已收货
        $yishouhuo = Yii::$app->db->createCommand("SELECT count(*) as yishouhuonum,sum(grand_total) as yishouhuo FROM sales_flat_order WHERE updated_at>{$start} AND updated_at<{$end} AND order_status=4 AND shop_id={$shop_id}")->queryOne();
        //下单量
        $sumnum = Yii::$app->db->createCommand("SELECT count(*) as sumnum FROM sales_flat_order WHERE updated_at>{$start} AND updated_at<{$end} AND shop_id={$shop_id}")->queryOne();
        //退货量
        $backnum = Yii::$app->db->createCommand("SELECT count(*) as backnum FROM sales_flat_order WHERE updated_at>{$start} AND updated_at<{$end} AND order_status in (5,6)  AND shop_id={$shop_id}")->queryOne();
        if($num['num']==null){
            $data['num']=0;
            $data['number']=$num['number'];
            $data['sumnum']=$sumnum['sumnum'];
            $data['backnum']=$backnum ['backnum'];
            $data['sumorder']=$sumorder ['sumorder'];
            if($daizhifu ['daizhifu']==null){
                $data['daizhifu']=0;
            }else{
                $data['daizhifu']=$daizhifu ['daizhifu'];
            }

        }else{
            $data['num']=$num['num'];
            $data['number']=$num['number'];
            $data['sumnum']=$sumnum['sumnum'];
            $data['backnum']=$backnum ['backnum'];
            $data['sumorder']=$backnum ['sumorder'];
            if($daizhifu ['daizhifu']==null){
                $data['daizhifu']=0;
            }else{
                $data['daizhifu']=$daizhifu ['daizhifu'];
            }
        }
        return json_encode($data);
    }
    /*
     * 返回最近七天的时间和成交额
    */
    public function actionWeek(){
        $shop_id = $_SESSION['id'];
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
    		if($shop_id!=null){
                $num = Yii::$app->db->createCommand("SELECT sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max}  AND order_status in(1,3,4,5) AND shop_id={$shop_id}")->queryOne();
            }else{
                $num = Yii::$app->db->createCommand("SELECT sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max}  AND order_status in(1,3,4,5)")->queryOne();
            }
    		if($num['num']==null){
                $date['num'][$k]=0;
            }else{
                $date['num'][$k]=$num['num'];
            }
    	}
    	return json_encode($date);
    }
    /*
     * 返回最近一个月的时间和成交额
    */
    public function actionMonth(){
        $shop_id = $_SESSION['id'];
    	$day=60*60*24;
    	for($i=31;$i>0;$i--){
    		$n="-".$i." day";
    		$date['dat'][]=date("Y-m-d",strtotime($n));
    	}
    	$date['dat'][]=date("Y-m-d",time());
    	foreach ($date['dat'] as $k=>$v){
    		$min=strtotime($v);
    		$max=$min+$day;
            if($shop_id!=null){
                $num = Yii::$app->db->createCommand("SELECT sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max}  AND order_status in(1,3,4,5) AND shop_id={$shop_id}")->queryOne();
            }else{
                $num = Yii::$app->db->createCommand("SELECT sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max}  AND order_status in(1,3,4,5)")->queryOne();
            }
            if($num['num']==null){
                $date['num'][$k]=0;
            }else{
                $date['num'][$k]=$num['num'];
            }
    	}
    	//     	echo "<pre>";
    	//     	print_r($date);
    	return json_encode($date);
    }
    /*
     * 返回最近一个季度的时间和成交额
    */
    public function actionQuarter(){
        $shop_id = $_SESSION['id'];
    	$day=60*60*24;
    	for($i=91;$i>0;$i--){
    		$n="-".$i." day";
    		$date['dat'][]=date("Y-m-d",strtotime($n));
    	}
    	$date['dat'][]=date("Y-m-d",time());
    	foreach ($date['dat'] as $k=>$v){
    		$min=strtotime($v);
    		$max=$min+$day;
            if($shop_id!=null){
                $num = Yii::$app->db->createCommand("SELECT sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max}  AND order_status in(1,3,4,5) AND shop_id={$shop_id}")->queryOne();
            }else{
                $num = Yii::$app->db->createCommand("SELECT sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max}  AND order_status in(1,3,4,5)")->queryOne();
            }
            if($num['num']==null){
                $date['num'][$k]=0;
            }else{
                $date['num'][$k]=$num['num'];
            }
    	}
    	//     	    	echo "<pre>";
    	//     	    	print_r($date);
    	return json_encode($date);
    }
    /*
     * 返回最近一年的时间和成交额
    */
    public function actionYear(){
        $shop_id = $_SESSION['id'];
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
            if($shop_id!=null){
                $num = Yii::$app->db->createCommand("SELECT sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max}  AND order_status in(1,3,4,5) AND shop_id={$shop_id}")->queryOne();
            }else{
                $num = Yii::$app->db->createCommand("SELECT sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max}  AND order_status in(1,3,4,5)")->queryOne();
            }
            if($num['num']==null){
                $date['num'][$k]=0;
            }else{
                $date['num'][$k]=$num['num'];
            }
    	}
    	//     	echo "<pre>";
    	//     	print_r($date);
    	return json_encode($date);
    }
    /*
     * 返回随便两个日期的时间和成交额
    */
    public function actionSearchdate(){
        $shop_id = $_SESSION['id'];
    	$startime=$_GET['sta'];
    	$endtime=$_GET['end'];
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
            if($shop_id!=null){
                $num = Yii::$app->db->createCommand("SELECT sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max}  AND order_status in(1,3,4,5) AND shop_id={$shop_id}")->queryOne();
            }else{
                $num = Yii::$app->db->createCommand("SELECT sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max}  AND order_status in(1,3,4,5)")->queryOne();
            }
            if($num['num']==null){
                $date['num'][$k]=0;
            }else{
                $date['num'][$k]=$num['num'];
            }
    	}
    	//     	    	echo "<pre>";
    	//     	    	print_r($date);
    	return json_encode($date);
    }
    //当月销售排行前十
    public function actionRank(){
    	$beginThismonth=mktime(0,0,0,date('m'),1,date('Y'));
    	$endThismonth=mktime(23,59,59,date('m'),date('t'),date('Y'));
    	$type=$_GET['type'];
    	$sql="SELECT A.shop_name, sum(B.items_count) as items, sum(B.grand_total) as grand 
    			FROM shop as A
    		    LEFT JOIN sales_flat_order as B on A.shop_id=B.shop_id
    		   WHERE order_status in(1,3,4,5) AND B.updated_at>{$beginThismonth} AND B.updated_at<{$endThismonth} 
    		   GROUP BY B.shop_id ";
    	//AND B.updated_at>{$beginThismonth} AND B.updated_at<{$endThismonth}
    	if($type==1){
    		$sql.=" ORDER BY items LIMIT 0,10";
    	}else if($type==2){
    		$sql.=" ORDER BY grand LIMIT 0,10";
    	}
//     	return $sql;
    	$arr = Yii::$app->db->createCommand($sql)->queryAll();
    	return json_encode($arr);
     }
    
    /* 导出当月排行 */
    public function actionExport(){
    	header('Content-Type: text/xls');
    	header ( "Content-type:application/vnd.ms-excel;charset=utf-8" );
    	header('Content-Disposition: attachment;filename=" 数据导出.xls"');
    	header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
    	header('Expires:0');
    	header('Pragma:public');
    	//利用表格导出到excel文件
    	$table = '<table border="1"><tr>
        <th colspan="5">本月营业排行TOP10</th>
        </tr><tr>';
    	$th = array(
    			'排行','店铺名称','销售量（件）','销售额（元）','均价（元）'
    	);
    	$beginThismonth=mktime(0,0,0,date('m'),1,date('Y'));
    	$endThismonth=mktime(23,59,59,date('m'),date('t'),date('Y'));
    	$sql="SELECT A.shop_name, sum(B.items_count) as items, sum(B.grand_total) as grand 
    			FROM shop as A
    		    LEFT JOIN sales_flat_order as B on A.shop_id=B.shop_id
    		   WHERE order_status in(1,3,4,5) AND B.updated_at>{$beginThismonth} AND B.updated_at<{$endThismonth} 
    		   GROUP BY B.shop_id ";
    	//AND B.updated_at>{$beginThismonth} AND B.updated_at<{$endThismonth}
    		$sql.=" ORDER BY items LIMIT 0,10";
    	$data = Yii::$app->db->createCommand($sql)->queryAll();
    	//循环表头数组到excel里
    	foreach($th as $i){
    		$table.="<th>".$i."</th>";
    	}
    	$table.='</tr>';
    	//将数据以表格形式循环到excel，这里根据实际数组不同表格可以自行拼接调整
    	foreach ($data as $k=>$v){
    		$table .= '<tr>';
    		$table .= '<td>' . ($k+1). '</td>';
    		$table .= '<td>' . $v['shop_name']. '</td>';
    		$table .= '<td>' . $v['items']. '</td>';
    		$table .= '<td>' . $v['grand']. '</td>';
    		$table .= '<td>' . ($v['grand']/$v['items']). '</td>';
    		$table .= '</tr>';
    	}
    	$table .='</table>';
    	echo $table;
    	
    	 
    }
    /* 导出商家财务 */
    public function actionShopexport(){
        header('Content-Type: text/xls');
        header ( "Content-type:application/vnd.ms-excel;charset=utf-8" );
        header('Content-Disposition: attachment;filename=" 数据导出.xls"');
        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
        header('Expires:0');
        header('Pragma:public');
        //利用表格导出到excel文件
        $table = '<table border="1"><tr>
        <th colspan="6">商家财务</th>
        </tr><tr>';
        $th = array(
            'ID','商家名称','销售总额','月销售额','地区','状态'
        );
        $beginThismonth=mktime(0,0,0,date('m'),1,date('Y'));
        $endThismonth=mktime(23,59,59,date('m'),date('t'),date('Y'));
        $sql="SELECT A.shop_name,C.total,B.total_B,A.shop_id ,A.shop_state,D.district_name 
				FROM shop as A
				LEFT JOIN (SELECT SUM(grand_total) as total_B,shop_id FROM sales_flat_order 
						   WHERE shop_id in(SELECT shop_id FROM shop WHERE shop_type=1 AND shop_state in(0,1,2)) AND updated_at>$beginThismonth AND updated_at<$endThismonth  
						   GROUP BY shop_id) as B ON A.shop_id=B.shop_id
				LEFT JOIN (SELECT SUM(grand_total) as total,shop_id FROM sales_flat_order 
						   WHERE shop_id in(SELECT shop_id FROM shop WHERE shop_type=1 AND shop_state in(0,1,2)) 
						   GROUP BY shop_id) as C ON A.shop_id=C.shop_id
				LEFT JOIN sys_district as D ON A.district_id=D.district_id 
			   WHERE A.shop_type=2 AND A.shop_state in(0,1,2)";
        $data = Yii::$app->db->createCommand($sql)->queryAll();
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
            $table .= '<td>' . $v['total']. '</td>';
            $table .= '<td>' . $v['total_B']. '</td>';
            $table .= '<td>' . $v['district_name']. '</td>';
            if($v['shop_state']==0){
                $table .= '<td>' ."关闭". '</td>';
            }else if($v['shop_state']==1){
                $table .= '<td>'."开启". '</td>';
            }else if($v['shop_state']==2){
                $table .= '<td>' ."冻结". '</td>';
            }

            $table .= '</tr>';
        }
        $table .='</table>';
        echo $table;


    }
    /* 导出水司财务 */
    public function actionWaterexport(){
        header('Content-Type: text/xls');
        header ( "Content-type:application/vnd.ms-excel;charset=utf-8" );
        header('Content-Disposition: attachment;filename=" 数据导出.xls"');
        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
        header('Expires:0');
        header('Pragma:public');
        //利用表格导出到excel文件
        $table = '<table border="1"><tr>
        <th colspan="6">商家财务</th>
        </tr><tr>';
        $th = array(
            'ID','商家名称','销售总额','月销售额','地区','状态'
        );
        $beginThismonth=mktime(0,0,0,date('m'),1,date('Y'));
        $endThismonth=mktime(23,59,59,date('m'),date('t'),date('Y'));
        $sql="SELECT A.shop_name,C.total,B.total_B,A.shop_id ,A.shop_state,D.district_name 
				FROM shop as A
				LEFT JOIN (SELECT SUM(grand_total) as total_B,shop_id FROM sales_flat_order 
						   WHERE shop_id in(SELECT shop_id FROM shop WHERE shop_type=1 AND shop_state in(0,1,2)) AND updated_at>$beginThismonth AND updated_at<$endThismonth  
						   GROUP BY shop_id) as B ON A.shop_id=B.shop_id
				LEFT JOIN (SELECT SUM(grand_total) as total,shop_id FROM sales_flat_order 
						   WHERE shop_id in(SELECT shop_id FROM shop WHERE shop_type=1 AND shop_state in(0,1,2)) 
						   GROUP BY shop_id) as C ON A.shop_id=C.shop_id
				LEFT JOIN sys_district as D ON A.district_id=D.district_id 
			   WHERE A.shop_type=1 AND A.shop_state in(0,1,2)";
        $data = Yii::$app->db->createCommand($sql)->queryAll();
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
            $table .= '<td>' . $v['total']. '</td>';
            $table .= '<td>' . $v['total_B']. '</td>';
            $table .= '<td>' . $v['district_name']. '</td>';
            if($v['shop_state']==0){
                $table .= '<td>' ."关闭". '</td>';
            }else if($v['shop_state']==1){
                $table .= '<td>'."开启". '</td>';
            }else if($v['shop_state']==2){
                $table .= '<td>' ."冻结". '</td>';
            }
            $table .= '</tr>';
        }
        $table .='</table>';
        echo $table;


    }


    /*----------------------------返款------------------------------*/

    /*
    * 返回最近七天的时间和返款额
   */
    public function actionBackweek(){
        $shop_id = $_SESSION['id'];
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
            $num = Yii::$app->db->createCommand("SELECT sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max}  AND order_status in(1,3,4,5) AND shop_id={$shop_id}")->queryOne();
            if($num['num']==null){
                $date['num'][$k]=0;
            }else{
                $date['num'][$k]=$num['num'];
            }
        }
        return json_encode($date);
    }
    /*
     * 返回最近一个月的时间和返款额
    */
    public function actionBackmonth(){
        $shop_id = $_SESSION['id'];
        $day=60*60*24;
        for($i=31;$i>0;$i--){
            $n="-".$i." day";
            $date['dat'][]=date("Y-m-d",strtotime($n));
        }
        $date['dat'][]=date("Y-m-d",time());
        foreach ($date['dat'] as $k=>$v){
            $min=strtotime($v);
            $max=$min+$day;
            $num = Yii::$app->db->createCommand("SELECT sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max}  AND order_status in(1,3,4,5) AND shop_id={$shop_id}")->queryOne();
            if($num['num']==null){
                $date['num'][$k]=0;
            }else{
                $date['num'][$k]=$num['num'];
            }
        }
        //     	echo "<pre>";
        //     	print_r($date);
        return json_encode($date);
    }
    /*
     * 返回最近一个季度的时间和返款额
    */
    public function actionBackquarter(){
        $shop_id = $_SESSION['id'];
        $day=60*60*24;
        for($i=91;$i>0;$i--){
            $n="-".$i." day";
            $date['dat'][]=date("Y-m-d",strtotime($n));
        }
        $date['dat'][]=date("Y-m-d",time());
        foreach ($date['dat'] as $k=>$v){
            $min=strtotime($v);
            $max=$min+$day;
            $num = Yii::$app->db->createCommand("SELECT sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max}  AND order_status in(1,3,4,5) AND shop_id={$shop_id}")->queryOne();
            if($num['num']==null){
                $date['num'][$k]=0;
            }else{
                $date['num'][$k]=$num['num'];
            }
        }
        //     	    	echo "<pre>";
        //     	    	print_r($date);
        return json_encode($date);
    }
    /*
     * 返回最近一年的时间和返款额
    */
    public function actionBackyear(){
        $shop_id = $_SESSION['id'];
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
            $num = Yii::$app->db->createCommand("SELECT sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max} AND order_status =6 AND shop_id={$shop_id}")->queryOne();
            if($num['num']==null){
                $date['num'][$k]=0;
            }else{
                $date['num'][$k]=$num['num'];
            }
        }
        //     	echo "<pre>";
        //     	print_r($date);
        return json_encode($date);
    }
    /*
     * 返回随便两个日期的时间和返款额
    */
    public function actionBacksearchdate(){
        $shop_id = $_SESSION['id'];
        $startime=$_GET['sta'];
        $endtime=$_GET['end'];
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
            $num = Yii::$app->db->createCommand("SELECT sum(grand_total) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max} AND order_status =6 AND shop_id={$shop_id}")->queryOne();
            if($num['num']==null){
                $date['num'][$k]=0;
            }else{
                $date['num'][$k]=$num['num'];
            }
        }
        //     	    	echo "<pre>";
        //     	    	print_r($date);
        return json_encode($date);
    }
    /*------------------------订单数量--------------------------*/
    /*
   * 返回最近七天的时间和订单量
  */
    public function actionNumweek(){
        $shop_id = $_SESSION['id'];
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
            $num = Yii::$app->db->createCommand("SELECT count(*) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max} AND shop_id={$shop_id}")->queryOne();
            if($num['num']==null){
                $date['num'][$k]=0;
            }else{
                $date['num'][$k]=$num['num'];
            }
        }
        return json_encode($date);
    }
    /*
     * 返回最近一个月的时间和订单量
    */
    public function actionNummonth(){
        $shop_id = $_SESSION['id'];
        $day=60*60*24;
        for($i=31;$i>0;$i--){
            $n="-".$i." day";
            $date['dat'][]=date("Y-m-d",strtotime($n));
        }
        $date['dat'][]=date("Y-m-d",time());
        foreach ($date['dat'] as $k=>$v){
            $min=strtotime($v);
            $max=$min+$day;
            $num = Yii::$app->db->createCommand("SELECT count(*) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max} AND shop_id={$shop_id}")->queryOne();
            if($num['num']==null){
                $date['num'][$k]=0;
            }else{
                $date['num'][$k]=$num['num'];
            }
        }
        //     	echo "<pre>";
        //     	print_r($date);
        return json_encode($date);
    }
    /*
     * 返回最近一个季度的时间和订单量
    */
    public function actionNumquarter(){
        $shop_id = $_SESSION['id'];
        $day=60*60*24;
        for($i=91;$i>0;$i--){
            $n="-".$i." day";
            $date['dat'][]=date("Y-m-d",strtotime($n));
        }
        $date['dat'][]=date("Y-m-d",time());
        foreach ($date['dat'] as $k=>$v){
            $min=strtotime($v);
            $max=$min+$day;
            $num = Yii::$app->db->createCommand("SELECT count(*) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max} AND shop_id={$shop_id}")->queryOne();
            if($num['num']==null){
                $date['num'][$k]=0;
            }else{
                $date['num'][$k]=$num['num'];
            }
        }
        //     	    	echo "<pre>";
        //     	    	print_r($date);
        return json_encode($date);
    }
    /*
     * 返回最近一年的时间和订单量
    */
    public function actionNumyear(){
        $shop_id = $_SESSION['id'];
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
            $num = Yii::$app->db->createCommand("SELECT count(*) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max}  AND shop_id={$shop_id}")->queryOne();
            if($num['num']==null){
                $date['num'][$k]=0;
            }else{
                $date['num'][$k]=$num['num'];
            }
        }
        //     	echo "<pre>";
        //     	print_r($date);
        return json_encode($date);
    }
    /*
     * 返回随便两个日期的时间和订单量
    */
    public function actionNumsearchdate(){
        $shop_id = $_SESSION['id'];
        $startime=$_GET['sta'];
        $endtime=$_GET['end'];
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
            $num = Yii::$app->db->createCommand("SELECT count(*) as num FROM sales_flat_order WHERE updated_at>{$min} AND updated_at<{$max} AND shop_id={$shop_id}")->queryOne();
            if($num['num']==null){
                $date['num'][$k]=0;
            }else{
                $date['num'][$k]=$num['num'];
            }
        }
        //     	    	echo "<pre>";
        //     	    	print_r($date);
        return json_encode($date);
    }
}











