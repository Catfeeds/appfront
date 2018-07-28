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
class IndexController extends AppfrontController
{

    public function init()
    {
        parent::init();
        // 加载模板页面
        Yii::$service->page->theme->layoutFile = 'admin.php';
    }
//=========================用户管理、管理员管理===============================
    //管理员管理
    public function actionAindex()
    {
        $req = Yii::$app->request;
        $person = $req->get(person);
        $ID = $req->get(ID);


        $res = Yii::$app->db->createCommand("select * from admin_user")->queryAll();
        $query = new Query;
        // 查询数据总条数
        $tot = 0;
        foreach ($res as $k => $v) {
            $tot++;
        }
        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $tot,
        ]);
        // 进行数据查询
        $rows = $query->from('admin_user')
            ->offset($pagination->offset)
            ->limit($pagination->limit)->all();

        //判断是否搜索
        if ($person != null) {
            $rows = $query->select('*')
                ->from('admin_user')
                ->where([
                    'person' => $person
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        } else if ($ID != null) {
            $rows = $query->select('*')
                ->from('admin_user')
                ->where([
                    'id' => $ID
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        } else if ($person != null && $ID != null) {
            $rows = $query->select('*')
                ->from('admin_user')
                ->where([
                    'person' => $person,
                    'id' => $ID
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        }
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

    //移入黑名单status改为2
    public function actionBlacklist()
    {
        $req = Yii::$app->request;
        $id = $req->get(id);
        $sql = "update admin_user set status=2 where id='$id'";
        $res = Yii::$app->db->createCommand($sql)->execute();
        return $this->redirect(["/admin/index/aindex"]);
    }

    //冻结账号status改为3
    public function actionFreeze()
    {
        $req = Yii::$app->request;
        $id = $req->get(id);
        $sql = "update admin_user set status=3 where id='$id'";
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
    //会员管理增加了一个字段
    public function actionMember()
    {
        $req = Yii::$app->request;
        $level = $req->get(level);
        $firstname = $req->get(firstname);
        $id = $req->get(id);

        $res = Yii::$app->db->createCommand("select * from customer")->queryAll();
        $query = new Query;
        // 查询数据总条数
        $tot = 0;
        foreach ($res as $v) {
            $tot++;
        }
        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $tot,
        ]);
        // 进行数据查询

        //判定搜索
        if ($firstname != null) {
            $rows = $query->select('*')
                ->from('customer')
                ->where([
                    'firstname' => $firstname
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        } else if ($id != null) {
            $rows = $query->select('*')
                ->from('customer')
                ->where([
                    'id' => $id
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        } else if ($level != null) {
            $rows = $query->select('*')
                ->from('customer')
                ->where([
                    'level' => $level
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        } else if ($firstname != null && $id != null) {
            $rows = $query->select('*')
                ->from('customer')
                ->where([
                    'firstname' => $firstname,
                    'id' => $id
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        } else if ($firstname != null && $level != null) {
            $rows = $query->select('*')
                ->from('customer')
                ->where([
                    'firstname' => $firstname,
                    'level' => $level
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        } else if ($id != null && $level != null) {
            $rows = $query->select('*')
                ->from('customer')
                ->where([
                    'id' => $id,
                    'level' => $level
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        } else if ($firstname != null && $level != null && $id != null) {
            $rows = $query->select('*')
                ->from('customer')
                ->where([
                    'firstname' => $firstname,
                    'level' => $level,
                    'id' => $id
                ])->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        } else {
            $rows = $query->from('customer')
                ->offset($pagination->offset)
                ->limit($pagination->limit)->all();
        }

        $data["pagination"] = $pagination;
        $data["rows"] = $rows;
        $data["firstname"] = $firstname;
        $data['id'] = $id;
        $data['level'] = $level;

        return $this->render($this->action->id, $data);

    }

    //查看会员
    public function actionWmember()
    {
        $req = Yii::$app->request;
        $id = $req->get(id);
        $res = Yii::$app->db->createCommand("select * from customer where id='$id'")->queryOne();
        $data['res'] = $res;
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
    //移入黑名单status改为2
    public function actionMblacklist()
    {
        $req = Yii::$app->request;
        $id = $req->get(id);
        $sql = "update admin_user set status=2 where id='$id'";
        $res = Yii::$app->db->createCommand($sql)->execute();
        return $this->redirect(["/admin/index/index"]);
    }

    //冻结账号status改为3
    public function actionMfreeze()
    {
        $req = Yii::$app->request;
        $id = $req->get(id);
        $sql = "update admin_user set status=3 where id='$id'";
        $res = Yii::$app->db->createCommand($sql)->execute();
        return $this->redirect(["/admin/index/index"]);
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
        $req = Yii::$app->request;
        $province = Yii::$app->db->createCommand('select * from sys_province')->queryAll();
        $province_id = $req->get(province_id);
        $city_id = $req->get(city_id);
        $district_id = $req->get(district_id);
        $res = Yii::$app->db->createCommand('select * from shop')->queryAll();
        $shop_name = $req->get(shop_name);

        $query = new Query;
        // 查询数据总条数
        $tot = 0;
        foreach ($res as $k => $v) {
            $tot++;
        }
        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 1,
            'totalCount' => $tot,
        ]);
        // 进行数据查询
        // 进行数据查询
        $where=" WHERE shop_type=2";
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
        $sql="SELECT * FROM shop $where  LIMIT $pagination->offset,$pagination->limit";
        $rows=Yii::$app->db->createCommand($sql)->queryAll();
        //获取数据
        $data['province'] = $province;
        $data['pagination'] = $pagination;
        $data['res'] = $res;
        $data['rows'] = $rows;
        return $this->render($this->action->id, $data);
    }

    //店铺
    public function actionWater()
    {
        $province = Yii::$app->db->createCommand('select * from sys_province')->queryAll();
        $data['province'] = $province;
        return $this->render($this->action->id, $data);
    }
}