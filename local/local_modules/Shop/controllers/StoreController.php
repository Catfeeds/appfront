<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace appfront\local\local_modules\shop\controllers;

use fecshop\app\appfront\modules\AppfrontController;
use Yii;
use yii\web\Response;
use yii\mongodb\Query;
use yii\data\Pagination;
/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */

// 商铺管理控制器
class StoreController extends PublicsController
{

    public function init()
    {
        parent::init();
        Yii::$service->page->theme->layoutFile = 'uek.php';
    }
    
    /*商铺管理首页*/
    public function actionIndex(){


        //return $this->render($this->action->id, $data);
        $uid = $_SESSION["uid"];
        $res = Yii::$app->db->createCommand("select * from shop where uid=$uid")->queryOne();
        $addressInfo = parent::getAddressInfo();
        $datas["res"] = $res;
        $datas["province"] = $addressInfo["province"];
        $datas["city"] = $addressInfo["city"];
        $datas["district"] = $addressInfo["district"];
        return $this->render($this->action->id,$datas);
    }

    //编辑信息
    public function actionEditinfo(){

        $req = Yii::$app->request;

        $datas = $req->post();

        $sql = "update shop set shop_keywords='{$datas['shop_keywords']}',shop_banner='{$datas['shop_banner']}',shop_phone='{$datas['shop_phone']}',province_id='{$datas['province_id']}',city_id='{$datas['city_id']}',shop_address='{$datas['shop_address']}',shop_description='{$datas['shop_description']}'  where uid={$datas['uid']}";

        $res = Yii::$app->db->createCommand($sql)->execute();

        return $this->redirect("/shop/store/index");

        //文件上传存放的目录

        //$folder ='../../appimage/appfront/images/';



        //$file=$_FILES['file'];

        // 获取用户上传的数量

        //$size=count($file['name']);

        //$img=[];
        // 文件处理

        // 接收文件名
        //$name=$file['name'];

        // 接收临时目录
        //$tmp_name=$file['tmp_name'];

        // 错误编码

        //$error=$file['error'];

//        if ($error==0) {
//
//            // 检测文件是否来自于表单
//            if (is_uploaded_file($tmp_name)) {
//                # code...
//                // 新的文件名
//                $ext=substr($name,strrpos($name,'.'));
//
//                $newName=time().rand().$ext;
//
//                // 进行上传
//
//                if (move_uploaded_file($tmp_name,$folder.$newName)) {
//                    $img = $newName;
//
//                    $sql = "update ns_shop_apply set shop_name='{$datas['shop_name']}',  where uid={$datas['uid']}";
//                }
//            }
//        }

    }

    //返回设置店铺图片页面
    public function actionSetimg(){

        $uid = $_SESSION["uid"];
        $res = Yii::$app->db->createCommand("select shop.shop_logo,shop.shop_avatar from shop where uid=$uid")->queryOne();

        $datas["res"] = $res;
        $datas["imgUrl"] = Yii::$app->params["img"];


        return $this->render($this->action->id,$datas);

    }

    //编辑店铺页面信息
    public function actionSetpic(){

        $res = Yii::$app->request;
        $post = $res->post();

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
                    if($i == 0){
                        $arr = explode("/",$post["shop_logo"]);
                        $newName = $arr[count($arr)-1];
                    }
                    if($i == 1){
                        $arr = explode("/",$post["shop_avatar"]);
                        $newName = $arr[count($arr)-1];
                    }
                    // 进行上传

                    if (move_uploaded_file($tmp_name,$folder.$newName)) {

                        $res = Yii::$app->db->createCommand("update shop set shop_logo='{$post['shop_logo']}',shop_avatar='{$post['shop_avatar']}' where uid={$_SESSION['uid']}")->execute();

                    }
                }
            }
        }
        return $this->redirect("/shop/store/setimg");

    }

    //返回优惠卷管理首页
    public function actionCouponindex(){

        $count = Yii::$app->db->createCommand("select count(*) num from sales_coupon where created_person=2")->queryAll();

        //实例化分页对象
        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 1,
            'totalCount' => $count[0]['num'],
        ]);
        $res = Yii::$app->db->createCommand("select * from sales_coupon where created_person=2 limit $pagination->offset,$pagination->limit")->queryAll();
        $datas["res"] = $res;
        $datas["pagination"] = $pagination;
        $datas["num"] = $count[0]['num'];
        $datas["page"] = $pagination->limit;
        return $this->render($this->action->id,$datas);
    }

    //返回添加优惠券页面
    public function actionAddcoupon(){


        return $this->render($this->action->id);
    }
}