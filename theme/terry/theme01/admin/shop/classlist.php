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

        <div class="el-table__body-wrapper is-scrolling-left">
            <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                   style="width: 1012px;">
                <colgroup>
                    <col name="el-table_2_column_6" width="120">
                    <col name="el-table_2_column_7" width="150">
                    <col name="el-table_2_column_8" width="150">
                    <col name="el-table_2_column_9" width="150">
                    <col name="el-table_2_column_10" width="150">
                    <col name="el-table_2_column_11" width="400">
                </colgroup>
                <thead class="has-gutter">
                <tr style="font-size: 14px;color: #B1DBFE;text-align: left;height: 50px;">
                    <th
                            class="el-table_2_column_11     is-leaf">
                        <div class="cell">ID</div>
                    </th>
                    <th
                            class="el-table_2_column_12     is-leaf">
                        <div class="cell">名称</div>
                    </th>
                    <th
                            class="el-table_2_column_13     is-leaf">
                        <div class="cell">排序</div>
                    </th>
                    <th colspan="1" rowspan="1"
                        class="el-table_2_column_14     is-leaf">
                        <div class="cell">描述</div>
                    </th>
                    <th colspan="1" rowspan="1"
                        class="el-table_2_column_14     is-leaf">
                        <div class="cell">关键字</div>
                    </th>
                    <th
                            class="el-table_2_column_15     is-leaf">
                        <div class="cell">类型</div>
                    </th>
                    <th
                            class="el-table_2_column_15     is-leaf">
                        <div class="cell">照片</div>
                    </th>
                    <th
                            class="el-table_2_column_15     is-leaf">
                        <div class="cell">状态</div>
                    </th>
                    <th
                            class="el-table_2_column_15     is-leaf">
                        <div class="cell">操作</div>
                    </th>
                    <th class="gutter" style="width: 0px; display: none;"></th>
                </tr>
                </thead>
            </table>
        </div>
        <div class="el-table__body-wrapper is-scrolling-left">
            <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                   style="width: 1012px;">
                <colgroup>
                    <col name="el-table_2_column_6" width="120">
                    <col name="el-table_2_column_7" width="150">
                    <col name="el-table_2_column_8" width="150">
                    <col name="el-table_2_column_9" width="150">
                    <col name="el-table_2_column_10" width="150">
                    <col name="el-table_2_column_11" width="400">
                </colgroup>
                <tbody style="font-size: 12px;color:#82898e">
                <?php
                foreach ($class as $key => $value) {
                    ?>
                    <tr class="el-table__row" style="height:36px;font-size: 14px;">
                        <td class="el-table_2_column_11  ">
                            <div class="cell el-tooltip" ?>">
                                <?=$value[_id]?>
                            </div>
                        </td>
                        <td class="el-table_2_column_12">
                            <div class="cell el-tooltip">
                                <?php
                                // if(!$_GET['id']){
                                ?>
                                <!-- <a style="color:#67bcff;" href="<?= Yii::$service->url->getUrl('admin/shop/classlist', array('id' => $value['_id'])) ?>"><?=$value[name][name_zh]?></a> -->
                                <?php
                                // }else{
                                echo $value[name][name_zh];
                                // }
                                ?>
                            </div>
                        </td>

                        <td class="el-table_2_column_14">
                            <div class="cell el-tooltip" title="<?= $v["payment_method"] ?>">
                                <input onchange="sort(this,'<?=$value[_id]?>')" style="width:50px;height:30px;text-align:center;" type="sort" value="<?=$value['sort']?>">
                            </div>
                        </td>
                        <td class="el-table_2_column_13">
                            <div class="cell el-tooltip">
                                <?=$value[description][description_zh]?>
                            </div>
                        </td>
                        <td class="el-table_2_column_14">
                            <div class="cell el-tooltip" title="<?= $v["payment_method"] ?>">
                                <?=$value[meta_keywords][meta_keywords_zh]?>
                            </div>
                        </td>
                        <td class="el-table_2_column_14">
                            <div class="cell el-tooltip" title="<?= $v["payment_method"] ?>">
                                <?php
                                if ($value['type']==1) {
                                    echo "<span>商家分类</span>";
                                }else{
                                    echo "<span>水司分类</span>";
                                }
                                ?>
                            </div>
                        </td>
                        <td class="el-table_2_column_14">
                            <div class="cell el-tooltip" title="<?= $v["payment_method"] ?>">
                                <img style="width:90px;margin:5px;" src="http://img.uekuek.com/media/catalog/<?=$value[img]?>" alt="">
                            </div>
                        </td>
                        <td class="el-table_2_column_14">
                            <div class="cell el-tooltip" title="<?= $v["payment_method"] ?>">
                                <img style="width:90px;margin:5px;" src="http://img.uekuek.com/media/catalog/<?=$value[img]?>" alt="">
                            </div>
                        </td>
                        <td class="el-table_2_column_18">
                            <a style="color: #41b2fc" href="<?= Yii::$service->url->getUrl('admin/index/wmember',array('id'=>$v['id']))?>">查看</a>
                            &nbsp;<label>|</label>&nbsp;
                            <a style="color: #41b2fc" href="<?= Yii::$service->url->getUrl('admin/index/delmember',array('id'=>$v['id']))?>">删除</a>
                            &nbsp;<label>|</label>&nbsp;
                            <a style="color: #ff5932" href="javascript:0">移入黑名单</a>
                            &nbsp;<label>|</label>&nbsp;
                            <a style="color: #41b2fc" href="javascript:0">冻结账号</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
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
                        <td class="el-table_2_column_18">
                            <a style="color: #41b2fc" href="<?= Yii::$service->url->getUrl('admin/shop/classlist', array('id' => $value['_id'],'name'=>$value[name][name_zh])) ?>">查看</a>
                            &nbsp;<label>|</label>&nbsp;
                            <a style="color: #41b2fc" href="<?= Yii::$service->url->getUrl('admin/shop/classadd', array('id' => $value['_id'],'level'=>2,'name'=>$value[name][name_zh],'type'=>$value['type'])) ?>">添加</a>
                            &nbsp;<label>|</label>&nbsp;
                            <a style="color: #ff5932" href="<?= Yii::$service->url->getUrl('admin/shop/classfind', array('id' => $value['_id'])) ?>">修改</a>
                            &nbsp;<label>|</label>&nbsp;
                            <a style="color: #41b2fc" href="<?= Yii::$service->url->getUrl('admin/shop/classdel', array('id' => $value['_id'])) ?>">删除</a>
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