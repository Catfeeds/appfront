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
        <div class="el-table__body-wrapper is-scrolling-left">
            <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                   style="width: 1012px;">
                <colgroup>
                    <col name="el-table_2_column_1" width="120">
                    <col name="el-table_2_column_2" width="200">
                    <col name="el-table_2_column_3" width="200">
                    <col name="el-table_2_column_4" width="250">
                    <col name="el-table_2_column_5" width="300">
                </colgroup>
                <thead class="has-gutter">
                <tr style="font-size: 14px;color: #B1DBFE;text-align: left;height: 50px;">
                    <th
                        class="el-table_2_column_11     is-leaf">
                        <div class="cell">ID</div>
                    </th>
                    <th
                        class="el-table_2_column_12     is-leaf">
                        <div class="cell">管理员名称</div>
                    </th>
                    <th
                        class="el-table_2_column_13     is-leaf">
                        <div class="cell">账户状态</div>
                    </th>
                    <th colspan="1" rowspan="1"
                        class="el-table_2_column_14     is-leaf">
                        <div class="cell">上次访问时间</div>
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
                    <col name="el-table_2_column_1" width="120">
                    <col name="el-table_2_column_2" width="200">
                    <col name="el-table_2_column_3" width="200">
                    <col name="el-table_2_column_4" width="250">
                    <col name="el-table_2_column_5" width="300">
                </colgroup>
                <tbody style="font-size: 12px;color:#82898e">
                <?php foreach($rows as $k=>$v){?>
                    <tr class="el-table__row" style="height:36px;font-size: 14px;">
                        <td class="el-table_2_column_11  ">
                            <div class="cell el-tooltip" title="<?= $v["increment_id"] ?>">
                                <?= $v["id"] ?>
                            </div>
                        </td>
                        <td class="el-table_2_column_12">
                            <div class="cell el-tooltip">
                                <?= $v["person"] ?>
                            </div>
                        </td>
                        <td class="el-table_2_column_13">
                            <div class="cell el-tooltip">
                                <?php if ($v["status"]==1){
                                    echo "正常";
                                }else if($v["status"]==2){echo "黑名单";} else if($v["status"]==3){echo "冻结";}?>
                            </div>
                        </td>
                        <td class="el-table_2_column_14">
                            <div class="cell el-tooltip" title="<?= $v["payment_method"] ?>">
                                <?php echo $v["updated_at_datetime"] ?>
                            </div>
                        </td>
                        <td class="el-table_2_column_18">
                            <div class="cell el-tooltip">
                                <a data-v-6045fa9c="" href="#/OrderListDetails" class="">
                                    <button data-v-6045fa9c="" type="button"
                                            class="el-button el-button--text el-button--small">
                                        <a href="<?= Yii::$service->url->getUrl('admin/index/blacklist',array('id'=>$v['id'])) ?>"
                                           style="color: #FC4C00;">移入黑名单</a></button>
                                </a>
                                <span data-v-6045fa9c=""
                                      style="color: rgb(234, 235, 236);">
                                    |
                                </span>
                                <a data-v-6045fa9c="" href="#/OrderListDetails" class="">
                                    <button data-v-6045fa9c="" type="button"
                                            class="el-button el-button--text el-button--small">
                                        <a href="<?= Yii::$service->url->getUrl('admin/index/freeze',array('id'=>$v['id'])) ?>"
                                           style="color: #41b2fc;">冻结账号</a></button>
                                </a>
                                <span data-v-6045fa9c=""
                                           style="color: rgb(234, 235, 236);">
                                    |
                                </span>
                                <a href="<?= Yii::$service->url->getUrl('admin/index/del',array('id'=>$v['id'])) ?>">
                                    <button data-v-6045fa9c="" type="button"  style="color:#FC4C00"
                                            class="el-button el-button--text el-button--small">
                                        <span><i data-v-6045fa9c="" class="el-icon-delete"></i></span>
                                    </button>
                                </a>

                            </div>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="admincount" style="justify-content: flex-end;margin-bottom: 0px;margin-top:30px;font-size: 14px;">
        <div class="admincountall">
            <span style="color: #3db0ff">·</span>&nbsp;<span>总计</span><span>206</span><span>记录</span>
        </div>
        <div class="admintotalpage">
            <span style="color: #29c99a">·</span>&nbsp;<span>分</span><span
                    style="color: #29c99a">82</span><span>页</span>
        </div>
        <div class="admintotalpage">
            <span style="color: #29c99a">·</span>&nbsp;<span>每页</span>
            <input type="text" style="display: inline-block;width: 40px;height: 20px;border-radius: 10px;
                            border: 1px solid #ebf6ff;background: #f3faff;outline: none;padding:0 5px;
                            box-sizing: border-box;text-align: center;color:#29c99a;line-height: 20px; "
                   value="10">
        </div>
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