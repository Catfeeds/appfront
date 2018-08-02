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
    .success a{
        display:inline-block;
        width:50px;
        height:30px;
        border-radius: 10px;
        font-weight: bold;
        cursor:pointer;
        line-height: 30px;
        color: #67bcff;
    }

    .warning a{
        display:inline-block;
        width:50px;
        height:30px;
        border-radius: 10px;
        color:#fff;
        font-weight: bold;
        cursor:pointer;
        line-height: 30px;
        color: #f66;
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
        <form action="<?= Yii::$service->url->getUrl('admin/shop/classlist') ?>" method="get">
            <span>分类名称</span>
            <input type="text" name="name">
            <div class="indexsearch ">
                <input type="submit" class="search-img" value="">
            </div>
        </form>
        <a class="addadmin" href="/admin/shop/classadd">添加顶级分类</a>
    </div>
    <!--管理员列表-->
    <div class="admin-table">
        <div class="admin-tablename">
            <div class="admin-tablenamebox"></div>
            <span class="admin-tablename1"><?php echo isset($_GET['name'])?$_GET['name']."分类":"分类";?></span><span class="admin-tablename2">列表</span>
        </div>
        <table border="0" cellpadding="0" cellspacing="0" class="admin-tablelist1 active el-table__header el-table">
            <thead class="has-gutter">
                <tr style="font-size: 14px;color: #B1DBFE;">
                    <th class="is-leaf">ID</th>
                    <th class="is-leaf">名称</th>
                    <th class="is-leaf">排序</th>
                    <th class="is-leaf">描述</th>
                    <th class="is-leaf">关键字</th>
                    <th class="is-leaf">类型</th>
                    <th class="is-leaf">照片</th>
                    <th class="is-leaf">显示</th>
                    <th class="is-leaf" style="width: 120px">操作</th>
                </tr>
            </thead>
            <tbody style="font-size: 12px;color: #82898e;">
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
                        <td><img style="width:70px;margin:5px;" src="http://img.uekuek.com/media/catalog/<?=$value[img]?>" alt=""></td>
                        <td>
                            <?php 
                                if ($value['menu_show']==1) {
                                    echo "<span class='success'><a href='".Yii::$service->url->getUrl('admin/shop/classeditshow', array('id' => $value[_id],'menu_show'=>2))."'>显示</a></span>";
                                }else{
                                    echo "<span class='warning'><a href='".Yii::$service->url->getUrl('admin/shop/classeditshow', array('id' => $value[_id],'menu_show'=>1))."'>隐藏</a></span>";
                                }
                            ?>

                        </td>
                        <td style="200px">
                            <a style="color: #41b2fc" href="<?= Yii::$service->url->getUrl('admin/shop/classlist', array('id' => $value['_id'],'name'=>$value[name][name_zh])) ?>">查看</a>

                            <a style="color: #41b2fc" href="<?= Yii::$service->url->getUrl('admin/shop/classadd', array('id' => $value['_id'],'level'=>2,'name'=>$value[name][name_zh],'type'=>$value['type'])) ?>">添加</a>

                            <a style="color:  #41b2fc" href="<?= Yii::$service->url->getUrl('admin/shop/classfind', array('id' => $value['_id'])) ?>">修改</a>

                            <a style="color: #ff5932" href="<?= Yii::$service->url->getUrl('admin/shop/classdel', array('id' => $value['_id'])) ?>">删除</a>
                        </td>
                    </tr>
                <?php
                }
             ?>
            </tbody>
        </table >
    </div>
    <div class="el-table__column-resize-proxy" style="display: none;"></div>

</div>
</div>
    <?php if(count($count)>0) { ?>
                    <div>
                        <div style="width: 180px; float: right; margin-top: 28px; display: flex; justify-content: space-between;">
                            <div style="display: flex;">
                                <div class="dian"></div>
                                总计
                                <span style="color: rgb(61, 176, 255); font-weight: bolder;"><?= $count ?></span>记录
                            </div>
                            <div style="display: flex;">
                                <div class="dian" style="background: rgb(41, 201, 154);"></div>
                                分
                                <span style="font-weight: bolder; color: rgb(41, 201, 154);"><?= ceil($count / $pagination->limit) ?></span>页
                            </div>
                        </div>
                        <button type="button" class="el-button green el-button--success is-round" style="padding:0;">
                            <span>导出表格</span></button>
                    </div>
                    <div>
                        <div style="width: 400px; font-size: 12px; float: right; display: flex; justify-content: space-between;">
                            <?php
                            echo LinkPager::widget([
                                'pagination' => $pagination,
                                'firstPageLabel' => '首页',
                                'lastPageLabel' => '尾页',

                                'nextPageLabel' => '>',
                                'prevPageLabel' => '<',
                            ]);
                            ?>
                        </div>
                    </div>
                <?php } ?>
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