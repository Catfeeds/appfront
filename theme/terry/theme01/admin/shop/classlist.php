<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<style>
    th{
        border-bottom: 1px solid #fff;
    }
    .admin-tablelist1 {
        font-size: 14px;
        padding-left: 17px;
        margin-bottom: 20px;
        width: 100%;

    }

    .admin-tablelist1 tr {
        width: 100%;
    }

    .admin-tablelist1 tr th {
        color: #67bcff;
        /*width: 300px;*/
        height: 40px;
        text-align: center;
        line-height: 40px;
    }
    .admin-tablelist1 tr td {
        /*width: 300px;*/
        height: 40px;
        text-align: center;
        line-height: 40px;
    }
    .addadmin{
        text-align: center;
        line-height: 32px;
        font-weight: bold;
    }
    .success{
        display:inline-block;
        width:50px;
        height:30px;
        background-color: #37DF73;
        border-radius: 10px;
        color:#fff;
        font-weight: bold;
        cursor:pointer;
        line-height: 30px;
    }

    .warning{
        display:inline-block;
        width:50px;
        height:30px;
        background-color: #F44444;
        border-radius: 10px;
        color:#fff;
        font-weight: bold;
        cursor:pointer;
        line-height: 30px;
    }
    .caozuo a{
        font-size: 25px;
        margin:0px 2px;
    }

</style>
<div class="main-content">
<div class="adminmannager">
    <!--用户管理-管理员管理-->
    <div class="adminmannager-title">
        <span>店铺管理</span>&nbsp;
        <span>·&nbsp;分类管理</span>
    </div>
    <div class="adminmannager-search">
        <span>分类名称</span>
        <input type="text">
        <div class="indexsearch ">
            <input type="submit" class="search-img" value="">
        </div>
        <a class="addadmin" href="/admin/shop/classadd">添加顶级分类</a>
    </div>
    <!--管理员列表-->
    <div class="admin-table">
        <div class="admin-tablename">
            <div class="admin-tablenamebox"></div>
            <span class="admin-tablename1"><?php echo isset($_GET['name'])?$_GET['name']."分类":"分类";?></span><span class="admin-tablename2">列表</span>
        </div>
        <table border="1" cellpadding="0" cellspacing="0" class="admin-tablelist1 active">
            <tr style="">
                <th>ID</th>
                <th>名称</th>
                <th>排序</th>
                <th>描述</th>
                <th>关键字</th>
                <th>类型</th>
                <th>照片</th>
                <th>显示</th>
                <th>操作</th>
            </tr>
            
            <?php 
                foreach ($class as $key => $value) {
                ?>
                    <tr>
                        <td ><div style="width:80px;overflow:hidden"><?=$value[_id]?></div></td>
                        <td>
                            <?php 
                                // if(!$_GET['id']){
                            ?>
                                <!-- <a style="color:#67bcff;" href="<?= Yii::$service->url->getUrl('admin/shop/classlist', array('id' => $value['_id'])) ?>"><?=$value[name][name_zh]?></a> -->
                            <?php
                                // }else{
                                    echo $value[name][name_zh];
                                // }
                             ?>
                        </td>
                        <td><input onchange="sort(this,'<?=$value[_id]?>')" style="width:50px;height:30px;text-align:center;" type="sort" value="<?=$value['sort']?>"></td>
                        <td><?=$value[description][description_zh]?></td>
                        <td><?=$value[meta_keywords][meta_keywords_zh]?></td>
                        <td>
                            <?php 
                                if ($value['type']==1) {
                                    echo "<span>商家分类</span>";
                                }else{
                                    echo "<span>水司分类</span>";
                                }
                            ?>
                        </td>
                        <td><img style="width:90px;margin:5px;" src="http://img.uekuek.com/media/catalog/<?=$value[img]?>" alt=""></td>
                        <td>
                            <?php 
                                if ($value['menu_show']==1) {
                                    echo "<span class='success'><a href='".Yii::$service->url->getUrl('admin/shop/classeditshow', array('id' => $value[_id],'menu_show',2))."'>显示</a></span>";
                                }else{
                                    echo "<span class='warning'><a href='".Yii::$service->url->getUrl('admin/shop/classeditshow', array('id' => $value[_id],'menu_show',1))."'>隐藏</a></span>";
                                }
                            ?>

                        </td>
                        <td class="caozuo">
                            <a title="查看子类" href="<?= Yii::$service->url->getUrl('admin/shop/classlist', array('id' => $value['_id'],'name'=>$value[name][name_zh])) ?>">☰</a>
                            <a title="添加子类" href="<?= Yii::$service->url->getUrl('admin/shop/classadd', array('id' => $value['_id'],'level'=>2,'name'=>$value[name][name_zh],'type'=>$value['type'])) ?>">✚</a>
                            <a title="修改分类" href="<?= Yii::$service->url->getUrl('admin/shop/classfind', array('id' => $value['_id'])) ?>">✎</a>
                            <a title="删除分类" href="<?= Yii::$service->url->getUrl('admin/shop/classdel', array('id' => $value['_id'])) ?>">×</a>
                        </td>
                    </tr>
                <?php
                }
             ?>
        </table >
    </div>

</div>
</div>
<script>
    function sort(obj,id){

        // 获取id

        let  val=$(obj).val();

        // 获取数据的ID
        $.get("<?= Yii::$service->url->getUrl('admin/shop/classeditsort') ?>",{id:id,sort:val},function(data){
            
            location.reload();
        
        });

    }
</script>
<style>
    .addadmin a{
        color: #fff;
    }
</style>