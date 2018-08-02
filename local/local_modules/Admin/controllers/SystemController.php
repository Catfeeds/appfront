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
// 系统管理控制器
class SystemController extends PublicsController
{

    public function init()
    {
        parent::init();
        // 加载模板页面
        Yii::$service->page->theme->layoutFile = 'admin.php';
    }
//=========================平台信息管理===============================
    //平台信息
    public function actionIndex()
    {

        // 获取数据的总条数 
        $totArr = Yii::$app->db->createCommand("select count(*) tot from banner")->queryOne();
        $tot = $totArr['tot'];

        //实例化分页对象
        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $tot,
        ]);

        $res = Yii::$app->db->createCommand("select * from banner order by sort desc limit $pagination->offset,$pagination->limit")->queryAll();

        // 数据格式化
        $data["data"] = $res;
        $data["pagination"] = $pagination;
        $data["num"] = $tot;
        $data["page"] = $pagination->limit;

        return $this->render($this->action->id, $data);
    }

    // banner的添加页面

    public function actionBanneradd()
    {

        return $this->render($this->action->id);

    }

    // banner的修改页面

    public function actionBannerfind()
    {

        // 获取数据
        $request = Yii::$app->request;
        $id = $request->get("id");

        // 查询数据

        $row = Yii::$app->db->createCommand("select * from banner where id=$id")->queryOne();

        $data['data'] = $row;
        return $this->render($this->action->id, $data);

    }

    // banner的修改排序

    public function actionBannersort()
    {
        // 获取数据
        $request = Yii::$app->request;
        $data = $request->get();

        Yii::$app->db->createCommand("update banner set sort=$data[sort] where id=$data[id]")->execute();

    }

    // banner的删除页面

    public function actionBannerdel()
    {

        // 获取数据
        $request = Yii::$app->request;
        $id = $request->get('id');

        // 删除数据

        $data = Yii::$app->db->createCommand("select * from banner where id = $id")->queryOne();

        // 发送sql语句

        if (Yii::$app->db->createCommand()->delete("banner", "id=$id")->execute()) {

            // 如果删除成功，删除对应图片
            if ($data['img'] && file_exists("../../appimage/common/media/" . $data['img'])) {
                unlink("../../appimage/common/media/" . $data['img']);
            }
            return $this->redirect($_SERVER['HTTP_REFERER']);
        } else {
            return $this->redirect($_SERVER['HTTP_REFERER']);
        }


    }

    // banner的数据插入

    public function actionBannerinsert()
    {

        // 获取表单提交数据
        $request = Yii::$app->request;
        $data = $request->post();

        // 上传Banner图片

        //文件上传存放的目录  

        $folder = '../../appimage/common/media/';

        $file = $_FILES['img'];

        // 接收文件名
        $name = $file['name'];

        // 接收临时目录
        $tmp_name = $file['tmp_name'];

        // 错误编码

        $error = $file['error'];

        if ($error == 0) {

            // 检测文件是否来自于表单
            if (is_uploaded_file($tmp_name)) {
                # code...
                // 新的文件名
                $ext = substr($name, strrpos($name, '.'));

                $newName = time() . rand() . $ext;

                // 进行上传

                if (move_uploaded_file($tmp_name, $folder . $newName)) {

                }
            }
        }

        // 格式化数据

        $arr = [
            "title" => $data['name'],
            "url" => $data['url'],
            "sort" => $data['sort'],
            "type" => $data['type'],
            "img" => $newName,
            "create_time" => time(),
        ];

        // 执行插入数据
        $res = Yii::$app->db->createCommand()->insert('banner', $arr)->execute();

        // 判断是否添加成功

        if ($res) {
            // 添加成功
            return $this->redirect(['/admin/system/index']);

        } else {
            // 添加失败
            return $this->redirect($_SERVER['HTTP_REFERER']);
        }


    }

    // banner的数据修改
    public function actionBannersave()
    {
        // 获取表单提交数据
        $request = Yii::$app->request;
        $data = $request->post();

        // 上传分类图片

        if ($_FILES['img']['name']) {

            //文件上传存放的目录  

            $folder = '../../appimage/common/media/';

            $file = $_FILES['img'];

            // 获取用户上传的数量

            $size = count($file['name']);

            // 接收文件名
            $name = $file['name'];

            // 接收临时目录
            $tmp_name = $file['tmp_name'];

            // 错误编码

            $error = $file['error'];

            if ($error == 0) {

                // 检测文件是否来自于表单
                if (is_uploaded_file($tmp_name)) {
                    # code...
                    // 新的文件名
                    $ext = substr($name, strrpos($name, '.'));

                    $newName = time() . rand() . $ext;

                    // 进行上传

                    if (move_uploaded_file($tmp_name, $folder . $newName)) {

                    }
                }
            }
        }


        $newName = $newName ? $newName : $data['oldImg'];


        // 格式化数据

        $time = time();
        // 执行插入数据
        $res = Yii::$app->db->createCommand("update banner set title='$data[name]',url='$data[url]',sort='$data[sort]',type='$data[type]',img='$newName',update_time='$time' where id=$data[id]")->execute();

        if ($res) {

            // 如果删除成功，删除对应图片
            if ($data['oldImg'] != $newName && $data['oldImg'] && file_exists("../../appimage/common/media/" . $data['oldImg'])) {
                unlink("../../appimage/common/media/" . $data['oldImg']);
            }
            return $this->redirect(['/admin/system/index']);

        } else {
            return $this->redirect($_SERVER['HTTP_REFERER']);

        }

    }


//=========================VIP规则管理===============================

    //VIP规则
    public function actionVipruler()
    {
        $ruler = Yii::$app->db->createCommand("select * from privilege")->queryAll();
        $data['ruler'] = $ruler;
        $member = Yii::$app->db->createCommand("select * from member_rule")->queryAll();
        foreach ($member as $key => $value) {
            $member[$key]['rule'] = json_decode($value['rule'],true);
        }
        $data['member'] = $member;
        return $this->render($this->action->id, $data);
    }

    //VIP规则添加页面
    public function actionAddruler()
    {
        return $this->render($this->action->id);
    }
    //VIP规则添加方法
    public function actionAddruleraction()
    {
        $res = Yii::$app->request;
        $data = $res->post();
        //文件上传存放的目录
        $folder ='../../appimage/common/images/';

        $file=$_FILES['file'];
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

                // 检测文件是否来自于表单
                if (is_uploaded_file($tmp_name)) {
                    # code...
                    // 新的文件名
                    $newName = $name;
                    // 进行上传

                    if (move_uploaded_file($tmp_name,$folder.$newName)) {

                        $img = $newName;

                    }
                }
            }
        }
        $sql ="insert into privilege (name,info,img) values ('{$data['name']}','{$data['info']}','{$img}')";
        $res = Yii::$app->db->createCommand($sql)->execute();
        if($res){
            return $this->redirect("/admin/system/vipruler");
        }
    }
    //VIP规则修改编辑页面
    public function actionEditruler(){
        //获取数据
        $request = Yii::$app->request;
        $id = $request->get("id");
        //获取规则数据
        $data=[];
        $data['ruler']=Yii::$app->db->createCommand("select * from privilege where id={$id}")->queryOne();
        return $this->render($this->action->id,$data);
    }
    function actionSave(){
        $req = Yii::$app->request;
        $data = $req->post();
        //文件上传存放的目录
        $folder ='../../appimage/common/images/';

        $file=$_FILES['file'];
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

                // 检测文件是否来自于表单
                if (is_uploaded_file($tmp_name)) {
                    # code...
                    // 新的文件名
                    $newName = $name;
                    // 进行上传

                    if (move_uploaded_file($tmp_name,$folder.$newName)) {

                        $img = $newName;

                    }
                }
            }
        }
        $sql ="update privilege set name = '{$data['name']}',info = '{$data['info']}',img = '{$img}',sort = '{$data['sort']}' where id = {$data['id']}";
        $res = Yii::$app->db->createCommand($sql)->execute();
        if($res){
            return $this->redirect("/admin/system/vipruler");
        }
    }
    //VIP规则删除方法
    public function actionDelruler()
    {
        $res = Yii::$app->request;
        $id = $res->get('id');
        
        $sql ="delete from privilege where id = $id";
        $res = Yii::$app->db->createCommand($sql)->execute();
        if($res){
            echo 1;
        }else{
            echo 2;
        }
    }
    public function actionAddmember(){
        $res = Yii::$app->request;
        $data = $res->get(); 
        foreach ($data as $key => $value) {
            $pid = json_encode($value['pid']);
            $value = json_encode($value['value']);
            $sql = "update member_rule set recharge = '$value[money]',pid = '$pid','value'=>'$value' where id = $key";
            $res = Yii::$app->db->createCommand($sql)->execute();
        }
    }

//=========================充值设置管理===============================

    //充值设置
    public function actionRecharge()
    {
        $coin = Yii::$app->db->createCommand("select * from coin_set")->queryAll();
        $coin1 = Yii::$app->db->createCommand("select * from recharge")->queryAll();

        $datas["coin"] = $coin;
        $datas['recharge'] = $coin1;


        return $this->render($this->action->id, $datas);
    }

//插入金币规则
    function actionSavecoin()
    {
        $arr = [
            "create_id" => $_SESSION["message_uid"],
            "create_time" => time()
        ];
        $res = Yii::$app->db->createCommand()->insert("coin_set", $arr)->execute();

        $id = Yii::$app->db->getLastInsertID();

        echo $id;
        exit;
    }

    function actionSavecoin1()
    {

        $req = Yii::$app->request;
        $get = $req->get();
        $sql = "update coin_set set `condition`='{$get["condition"]}' where id={$get["id"]}";

        $res = Yii::$app->db->createCommand($sql)->execute();

        if ($res == 1) {
            echo "ok";
        } else {
            echo "error";
        }
    }

    function actionSavecoin2()
    {

        $req = Yii::$app->request;
        $get = $req->get();

        $res = Yii::$app->db->createCommand("update coin_set set coin_num={$get["coin_num"]} where id={$get["id"]}")->execute();

        if ($res == 1) {
            echo "ok";
        } else {
            echo "error";
        }
    }

    //充值设置
    function actionMoney()
    {
        $arr = [
            "create_id" => $_SESSION["message_uid"],
            "create_time" => time()
        ];
        $res = Yii::$app->db->createCommand()->insert("recharge", $arr)->execute();

        $id = Yii::$app->db->getLastInsertID();

        echo $id;
        exit;
    }

    function actionSaverecharge1()
    {
        $req = Yii::$app->request;
        $get = $req->get();
        $res = Yii::$app->db->createCommand("update recharge set actual_payment={$get["actual_payment"]} where id={$get["id"]}")->execute();

    }

    function actionSaverecharge2()
    {
        $req = Yii::$app->request;
        $get = $req->get();
        $res = Yii::$app->db->createCommand("update recharge set price={$get["price"]} where id={$get["id"]}")->execute();
    }

    function actionDelcoin()
    {
        $req = Yii::$app->request;
        $get = $req->get();
        $res = Yii::$app->db->createCommand("delete from coin_set where id={$get["id"]}")->execute();
        echo 1;
    }

    function actionDelrecharge()
    {
        $req = Yii::$app->request;
        $get = $req->get();
        $res = Yii::$app->db->createCommand("delete from recharge where id={$get["id"]}")->execute();
        echo 1;
    }

}