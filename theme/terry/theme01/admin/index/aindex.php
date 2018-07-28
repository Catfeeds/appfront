<?php

use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;


?>

<div class="main-content">
<div class="adminmannager">
    <!--用户管理-管理员管理-->
    <div class="adminmannager-title">
        <span>管理员管理</span>&nbsp;
        <span>·&nbsp;管理员管理</span>
    </div>
    <div class="adminmannager-search">
        <form action="<?= Yii::$service->url->getUrl('/admin/index/index') ?>" method="get">
            <span>管理员名称</span>
            <input type="text" name="person">
            <span class="search-ID">ID</span>
            <input type="text" name="ID">
            <div class="indexsearch">
                <input class="search-img" type="submit" value="">
            </div>

        </form>

        <button class="addadmin">
            <a href="/admin/index/add">添加管理员</a>
        </button>
    </div>


    <!--管理员列表-->
    <div class="admin-table">
        <div class="admin-tablename">
            <div class="admin-tablenamebox"></div>
            <span class="admin-tablename1">管理员</span><span class="admin-tablename2">列表</span>
        </div>
        <table border="0" class="admin-tablelist active">
            <tr>
                <th>ID</th>
                <th>管理员名称</th>
                <th>账户状态</th>
                <th>上次访问时间</th>
                <th>操作</th>
            </tr>
            <?php foreach($rows as $k=>$v){?>

            <tr>
                <td><?= $v['id']?></td>
                <td><?= $v["person"]?></td>
                <td>
                    <?php if ($v["status"]==1){
                        echo "正常";
                    }else if($v["status"]==2){echo "黑名单";} else if($v["status"]==3){echo "冻结";}?>
                </td>
                <td>
                    <?php echo $v["updated_at_datetime"] ?>
                </td>
                <td>
                    <a style="color: #ff5932"
                       href="<?= Yii::$service->url->getUrl('admin/index/blacklist', array('id' => $v['id'])) ?>">
                        移入黑名单
                    </a>
                    &nbsp;<label>|</label>&nbsp;
                    <a style="color: #41b2fc"
                       href="<?= Yii::$service->url->getUrl('admin/index/freeze', array('id' => $v['id'])) ?>">
                        冻结账号
                    </a>
                    &nbsp;<label>|</label>&nbsp;
                    <a href="<?= Yii::$service->url->getUrl('admin/index/del', array('id' => $v['id'])) ?>"
                       class="delete"></a>
                </td>
            </tr>
            <?php }?>
        </table >
    </div>
    <div style="width: 100%; position: relative;height: 50px;">
        <div style="font-size: 12px; position: absolute; bottom: 0; right: 0; display: flex; justify-content: space-between;">
            <?php
            echo LinkPager::widget([
                'pagination' => $pagination,
                'firstPageLabel' => '首页',
                'lastPageLabel' => '尾页',

                'nextPageLabel' => '>',
                'prevPageLabel' => '<',
            ]);


            ?>
            <style>
                .pagination {
                    white-space: nowrap;
                    padding: 2px 5px;
                    color: #303133;
                    font-weight: 700;
                }

                .pagination li {
                    padding: 0 4px;
                    background: #fff;
                    font-size: 13px;
                    min-width: 35.5px;
                    height: 28px;
                    line-height: 28px;
                    box-sizing: border-box;
                    display: inline-block;
                }

                .pagination li.first {
                    width: 54px;
                    height: 20px;
                    background: #edf8ff;
                    border: 2px solid #e8f6ff;
                    border-radius: 10px;
                    color: #41b2fc;
                    line-height: 18px;
                    text-align: center;
                    margin-top: 8px;
                }

                .pagination li.last {
                    width: 54px;
                    height: 20px;
                    background: #51b7fc;
                    border: 2px solid #51b7fc;
                    border-radius: 10px;
                    color: #fff;
                    line-height: 18px;
                    text-align: center;
                    margin-top: 8px;
                }
                .pagination li.first a{
                    color: #51b7fc;
                }
                .pagination li.last a{
                    color: #fff;
                }
                .pagination li a {
                    color: #000;
                    font-weight: bold;
                }

                .pagination li.active a {
                    color: #409EFF;
                    cursor: default;
                }
            </style>
        </div>
    </div>
</div>
</div>
<style>
    .addadmin a{
        color: #fff;
    }
</style>