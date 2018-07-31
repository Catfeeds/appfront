<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace appfront\local\local_modules\water\controllers;

use appfront\local\local_modules\water\controllers\PublicsController;
use fecshop\app\appfront\modules\AppfrontController;
use Yii;
use yii\web\Response;
use yii\mongodb\Query;
use yii\data\Pagination;



/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */

// 水司首页控制器
class GoodsController extends PublicsController
{

    public function init()
    {
        parent::init();
        // 加载模板页面
        Yii::$service->page->theme->layoutFile = 'water.php';
    }

    //返回商品列表
    public function actionIndex(){

        $shop_id=$_SESSION['shop_id'];

        // 查询所有的分类

        $class=$this->actionGetclass();

        // 接受数据

        $request = Yii::$app->request;
        $category = $request->get('class');
        $status = $request->get('status');

        // 查询条件
        $where['shop_id'] =$shop_id;

        $query = new Query;
        if ($category) {
            $where['category'][1]=$category;
        }

        $tot2=$query->from('product_flat')->where($where)->count();
        if ($status) {
            $where['status']=(int)$status;
        }


        // 查询数据总条数
        $tot=$query->from('product_flat')->where($where)->count();



        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $tot,
        ]);


        // 进行数据查询
        $rows=$query->from('product_flat')
            ->orderBy("updated_at desc")
            ->where($where)
            ->offset($pagination->offset)
            ->limit($pagination->limit)->all();

        $data=[];


        foreach ($rows as $key => &$value) {



            // 查询产品的分类
            $arr=Yii::$app->mongodb->getCollection('category')->findOne(['_id'=>$value['category'][0]]);
            # code...
            $value['className']=$arr['name']['name_zh'];

            $arr=Yii::$app->mongodb->getCollection('category')->findOne(['_id'=>$value['category'][1]]);
            # code...
            $value['class2Name']=$arr['name']['name_zh'];

            // 查询商品库存
            $arr=Yii::$app->db->createCommand(" select * from product_flat_qty where product_id='$value[_id]' ")->queryOne();

            if ($arr) {
                # code...
                $value['kucun']=$arr['qty'];
            }else{
                $value['kucun']=0;
            }

            // 查询获取商品对的创建人

            $arr=Yii::$app->db->createCommand(" select username from admin_user where id='$value[created_user_id]' ")->queryOne();

            if ($arr) {
                # code...
                $value['username']=$arr['username'];
            }else{
                $value['username']=0;
            }


        }

        // 查询数据上架总条数
        $where['status']=1;

        $tot1=$query->from('product_flat')->where($where)->count();

        // 加载页面和数据分配
        $data['goods']=$rows;
        $data['pagination']=$pagination;
        $data['tot']=$tot2;
        $data['tot1']=$tot1;
        $data['pages']=ceil($tot/10);
        $data['class']=$class;

        return $this->render($this->action->id,$data);

    }


    // 商品添加页面一
    // 主要作用
    public function actionAddclass(){

        $query = new Query;

        // 查询数据总条数

        // 进行数据查询
        $data=[];
        $data['category']=$query
            ->from('category')
            ->where(['level'=>1,"parent_id"=>"0",'type'=>"2"])
            ->all();

        // 加载页面
        return $this->render($this->action->id,$data);

    }

    // 商品添加页面二
    // 添加商品的基本信息
    public function actionAddshopinfo(){

        // 获取地址栏传输数据
        $request = Yii::$app->request;
        $one = $request->get('one');
        $two = $request->get('tow');

        $data=[];

        // 获取一级分类

        $customer = Yii::$app->mongodb->getCollection('category')->findOne(['_id'=>$one]);

        $data['one']=$customer['name']['name_zh'];
        $data['oneId']=$one;
        // 获取二级分类

        $customer = Yii::$app->mongodb->getCollection('category')->findOne(['_id'=>$two]);
        $data['two']=$customer['name']['name_zh'];
        $data['twoId']=$two;

        return $this->render($this->action->id,$data);

    }

    // 商品添加获取二级分类

    public function actionAjaxclass(){

        // 获取数据
        $request = Yii::$app->request;
        $id = $request->get('id');

        // mongo中获取对应的二级分类

        $query = new Query;

        $data=$query
            ->from('category')
            ->where(['level'=>2,'parent_id'=>"$id"])
            ->all();


        return json_encode($data);

    }
    //获取分类
    public function actionGetclass(){
        // 查看所有分类数据
        $query = new Query;

        // 进行数据查询
        $class=$query->from('category')
            ->where(['level'=>1,"parent_id"=>"0",'type'=>"2"])
            ->all();

        foreach ($class as $key => &$value) {


            $value['zi']=$query->from('category')->where(['level'=>2,'parent_id'=>"$value[_id]"])->all();
        }

        return $class;
    }

//=================================用户评价==================================================
    //返回用户评价
    public function actionCommentlist(){

        // 读取数据

        $request = Yii::$app->request;
        $class = $request->get('class');
        $name = $request->get('name');

        $shop_id=$_SESSION['shop_id'];

        // 查询条件
        $where['shop_id']=$shop_id;
        if ($class) {
            $where['category'][1]=$class;
        }

        if ($name) {
            // $conditions['tel'] = ['$regex' => $conditions['tel']]; // ^$
            $where['name']=['$regex' => $name];
        }
        $query = new Query;

        // 查询数据总条数
        $tot=$query->from('review')->where($where)->count();

        // 实例化分页对象
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $tot,
        ]);


        // 进行数据查询
        $rows=$query->from('review')
            ->orderBy("review_date desc")
            ->offset($pagination->offset)
            ->where($where)
            ->limit($pagination->limit)
            ->all();

        $data=[];


        foreach ($rows as $key => &$value) {



            // 查询产品的分类
            $arr=Yii::$app->mongodb->getCollection('product_flat')->findOne(['_id'=>$value['product_id']]);

            $value['goodsname']=$arr['name']['name_zh'];


            // 查询获取商品对的创建人
            $arr=Yii::$app->db->createCommand("select firstname from customer where id='$value[user_id]' ")->queryOne();


            $value['username']=$arr['username'];


        }
        // 查询所有的分类

        $class=$this->actionGetclass();

        // 加载页面和数据分配


        $data['data']=$rows;
        $data['pagination']=$pagination;
        $data['tot']=$tot;
        $data['class']=$class;
        $data['pages']=ceil($tot/10);

        return $this->render($this->action->id,$data);

    }
    
}