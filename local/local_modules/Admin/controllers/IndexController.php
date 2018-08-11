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
use yii\data\Pagination;
use yii\db\Query;

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
        // 加载模板页面
        Yii::$service->page->theme->layoutFile = 'admin.php';
    }
//=========================用户管理、管理员管理===============================

    public function actionIndex()
    {
        return $this->redirect(["/admin/index/aindex"]);
    }
    //管理员管理
    public function actionAindex()
    {
        $_SESSION['pagess']="aindex";
        $req = Yii::$app->request;
        $username = $req->get(username);
        $ID = $req->get(ID);

        $query = new Query;
        // 查询数据总条数
        $tot = 0;



        //判断是否搜索
        $where = "where 1=1";
        if ($username != null) {
           $where .= " and username like '%$username%'";
           $data['username'] = $username;
        } else if ($ID != null) {
            $where .= " and ID = $ID";
        } else if ($username != null && $ID != null) {
            $where .= " and username like '%$username%' and ID = $ID";
            $data['username'] = $username;
        } else{
            $where = "";
        }
        $pages =  Yii::$app->db->createCommand("SELECT * FROM admin_user $where")->queryAll();
        foreach ($pages as $k => $v) {
            $tot++;
        }
        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $tot,
        ]);
        $rows = Yii::$app->db->createCommand("SELECT * FROM admin_user $where LIMIT $pagination->offset,$pagination->limit")->queryAll();


        // 进行数据查询

        $data["pagination"] = $pagination;
        $data["rows"] = $rows;
        $data['tot'] = $tot;
        return $this->render($this->action->id, $data);
    }

    //跳转添加管理员
    public function actionAdd()
    {
        return $this->render($this->action->id);
    }

    //实现添加功能
    public function actionEditadmin()
    {
        $session = \Yii::$app->session;
        $req = Yii::$app->request;
        //获取数据
        $username = $req->post(username);
        $password_hash = password_hash($req->post(password_hash), PASSWORD_DEFAULT);
        $email = $req->post(email);
        $person = $req->post(person);
        $status = 1;
        //判断提交是否正确
        $r = 1;
        //判断管理员是否存在
        $arr = Yii::$app->db->createCommand("select count(*) as num from admin_user where username='$username'")->queryOne();
        if ($req->post(password_hash) == "" || $username == "" || $email == "" || $person == "") {
            return $this->redirect(["/admin/index/add"]);
        } else if ($arr["num"] != 0) {
            return $this->redirect(["/admin/index/add"]);
        } else {
            $data['r'] = $r;
            $res = Yii::$app->db->createCommand("insert into admin_user (username,password_hash,email,person,status) values ('$username','$password_hash','$email','$person','$status')")->execute();
            return $this->redirect(["/admin/index/aindex"]);
        }

    }

    //移入黑名单，判断status并进行修改切换
    public function actionBlacklist()
    {
        $req = Yii::$app->request;
        $id = $req->get(id);
        $status = Yii::$app->db->createCommand("select status from admin_user where id = '$id'")->queryOne();
        foreach ($status as $v){
            $s = $v;
        }
//        echo $s;
        if ($s == 0){
            $sql = "update admin_user set status=1 where id='$id'";
        }else if ($s !=0){
            $sql = "update admin_user set status=0 where id='$id'";
        }
        $res = Yii::$app->db->createCommand($sql)->execute();
        return $this->redirect(["/admin/index/aindex"]);
    }

    //冻结账号status改为2
    public function actionFreeze()
    {
        $req = Yii::$app->request;
        $id = $req->get(id);
        $status = Yii::$app->db->createCommand("select status from admin_user where id = '$id'")->queryOne();
        foreach ($status as $v){
            $s = $v;
        }
        if ($s == 2){
            $sql = "update admin_user set status=1 where id='$id'";
        }else if ($s !=2){
            $sql = "update admin_user set status=2 where id='$id'";
        }
        $res = Yii::$app->db->createCommand($sql)->execute();
        return $this->redirect(["/admin/index/aindex"]);
    }

    //删除管理员账号
    public function actionDel()
    {
        $req = Yii::$app->request;
        $id = $req->get(id);
        $sql = "delete from admin_user where id = '$id'";
        $res = Yii::$app->db->createCommand($sql)->execute();
        return $this->redirect(["/admin/index/aindex"]);
    }
    //===========================用户管理、会员管理=======================================
    //会员首页
    public function actionMember()
    {
        $_SESSION['pagess']="member";

        $req = Yii::$app->request;
        $level = $req->get(level);

        $firstname = $req->get(firstname);
        $id = $req->get(id);
        $query = new Query;
        // 查询数据总条数
        $tot = 0;


        // 进行数据查询

        //判定搜索
        $where = "WHERE 1=1";
        if ($firstname != null && $id == null && $level==null) {
            $where .= " AND firstname like '%$firstname%'";
        } else if ($id != null && $firstname == null && $level==null) {
            $where .= " AND id = $id";
        } else if ($level != null && $firstname == null && $id==null) {
            $where .=" AND level = $level";
        } else if ($firstname != null && $id != null && $level==null) {
            $where .= " AND firstname like '%$firstname%' AND id = $id";
        } else if ($firstname != null && $level != null && $id==null) {
            $where .= " AND firstname like '%$firstname%' AND level = $level";
        } else if ($id != null && $level != null && $firstname==null) {
            $where .= " AND id = $id AND level = $level";
        } else if ($firstname != null && $level != null && $id != null) {
            $where .= " AND id = $id AND level = $level AND firstname like '%$firstname%'";
        } else {
           $where = "";
        }
        $pages =  Yii::$app->db->createCommand("SELECT * FROM customer $where")->queryAll();
        foreach ($pages as $k => $v) {
            $tot++;
        }
        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $tot,
        ]);
        $rows = Yii::$app->db->createCommand("SELECT * FROM customer $where LIMIT $pagination->offset,$pagination->limit")->queryAll();

        $data["pagination"] = $pagination;
        $data["rows"] = $rows;
        $data["firstname"] = $firstname;
        $data['id'] = $id;
        $data['level'] = $level;
        $data['tot'] = $tot;

        return $this->render($this->action->id, $data);

    }
    //会员信息修改保存
    public function actionEditwmember(){
        $req = Yii::$app->request;
        $arr = $_POST;
//        var_dump($arr);
        $sql = "update customer set `level` = '{$arr["level"]}',`tel` = '{$arr["tel"]}',email='{$arr["email"]}',status='{$arr['status']}' where id = '{$arr["id"]}'";
        $res = Yii::$app->db->createCommand($sql)->execute();
        return $this->redirect(["/admin/index/wmember?id=".$arr['id']]);

    }

    //查看会员
    public function actionWmember()
    {
        $req = Yii::$app->request;
        $id = $req->get(id);
        $res = Yii::$app->db->createCommand("select * from customer where id='$id'")->queryOne();
        $money = Yii::$app->db->createCommand("select * from money_record where uid='$id'")->queryAll();
        $address = Yii::$app->db->createCommand("select * from customer_address where customer_id='$id'")->queryAll();
        $data['res'] = $res;
        $data['money'] = $money;
        $data['address'] = $address;
        return $this->render($this->action->id, $data);
    }
    //删除会员
    public function actionDelmember(){
        $req = Yii::$app->request;
        $id = $req->get(id);
        $sql = "delete from customer where id='$id'";
        $res = Yii::$app->db->createCommand($sql)->execute();
        echo $id;
        return $this->redirect(["/admin/index/member"]);
    }
    //移入黑名单status改为0
    public function actionMblacklist()
    {
        $req = Yii::$app->request;
        $id = $req->get(id);
        $status = Yii::$app->db->createCommand("select status from customer where id = '$id'")->queryOne();
        foreach ($status as $v){
            $s = $v;
        }
        if ($s == 0){
            $sql = "update customer set status=1 where id='$id'";
        }else if ($s !=0){
            $sql = "update customer set status=0 where id='$id'";
        }
        $res = Yii::$app->db->createCommand($sql)->execute();
        return $this->redirect(["/admin/index/member"]);
    }

    //冻结账号status改为2
    public function actionMfreeze()
    {
        $req = Yii::$app->request;
        $id = $req->get(id);
        $sql = "update customer set status=2 where id='$id'";
        $res = Yii::$app->db->createCommand($sql)->execute();
        return $this->redirect(["/admin/index/member"]);
    }
    //账户余额查询
    public function actionWmoney(){
        $req = Yii::$app->request;
        $id = $req->get(id);
        $lm = Yii::$app->db->createCommand("select * from money_record where uid = '$id' and `type` = 0")->queryAll();
        //转时间格式
        foreach ($lm as $k=>$v){
            $lm[$k]['time'] = date("Y-m-d",$v['time']);
        }
        return json_encode($lm);
    }
    //金币余额查询
    public function actionWcoin(){
        $req = Yii::$app->request;
        $id = $req->get(id);
        $lc = Yii::$app->db->createCommand("select * from coin_record where uid = '$id' and `type` = 2")->queryAll();
        //转时间格式
        foreach ($lc as $k=>$v){
           $lc[$k]['time'] = date("Y-m-d",$v['time']);
        }
        return json_encode($lc);
    }

    //==============================用户管理、店铺管理====================================
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

    //商家
    public function actionShop()
    {
        $_SESSION['pagess']="shop";
        $req = Yii::$app->request;
        $province = Yii::$app->db->createCommand('select * from sys_province')->queryAll();
        $province_id = $req->get(province_id);
        $city_id = $req->get(city_id);
        $district_id = $req->get(district_id);
        $shop_name = $req->get(shop_name);

        $query = new Query;
        // 查询数据总条数
        $tot = 0;


        // 进行数据查询
        // 进行数据查询
        $where=" WHERE 1=1";
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
        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $tot,
        ]);
        $sql="SELECT * FROM shop $where  LIMIT $pagination->offset,$pagination->limit";
        $rows=Yii::$app->db->createCommand($sql)->queryAll();
        //获取数据
        $data['province'] = $province;
        $data['pagination'] = $pagination;
        $data['rows'] = $rows;
        $data['tot'] = $tot;
        $data['shop_name'] = $shop_name;
        return $this->render($this->action->id, $data);
    }

    //查看店铺
    public function actionWshop()
    {
        $req = Yii::$app->request;
        $id = $req->get(id);
        $rows = Yii::$app->db->createCommand("select * from shop where shop_id= '$id'")->queryOne();
        $data['rows'] = $rows;
        return $this->render($this->action->id,$data);
    }
    //删除店铺
    public function actionDelshop(){
        $req = Yii::$app->request;
        $id = $req->get(id);
        $sql = "delete from shop where shop_id='$id'";
        $res = Yii::$app->db->createCommand($sql)->execute();
        echo $id;
        return $this->redirect(["/admin/index/shop"]);
    }
    //移入黑名单status改为0
    public function actionSblacklist()
    {
        $req = Yii::$app->request;
        $id = $req->get(id);
        $status = Yii::$app->db->createCommand("select shop_state from shop where shop_id = '$id'")->queryOne();
        foreach ($status as $v){
            $s = $v;
        }
        if ($s == 0){
            $sql = "update shop set shop_state=1 where shop_id='$id'";
        }else if ($s !=0){
            $sql = "update shop set shop_state=0 where shop_id='$id'";
        }
        $res = Yii::$app->db->createCommand($sql)->execute();
        return $this->redirect(["/admin/index/shop"]);

    }

    //冻结账号status改为2
    public function actionSfreeze()
    {
        $req = Yii::$app->request;
        $id = $req->get(id);
        $status = Yii::$app->db->createCommand("select shop_state from shop where shop_id = '$id'")->queryOne();
        foreach ($status as $v){
            $s = $v;
        }
        if ($s == 2){
            $sql = "update shop set shop_state=1 where shop_id='$id'";
        }else if ($s !=2){
            $sql = "update shop set shop_state=2 where shop_id='$id'";
        }
        $res = Yii::$app->db->createCommand($sql)->execute();
        return $this->redirect(["/admin/index/shop"]);
    }
}