<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="main-content">
    <div class="ShopMannager">
        <div class="ShopMannager-title">
            <span>水司数据</span>
        </div>
        <div class="ShopMannager-search">
            <div class="xiala">
                <span class="search-ID">地区</span>
                <select name="member-level" id="member-level">
                    <option value="">全部</option>
                </select>
                <div class="xialaimg1"></div>
            </div>
            <div class="search">
                <span>名称</span>
                <input type="text">
            </div>
            <div class="search">
                <span>ID</span>
                <input type="text">
            </div>
            <div class="xiala" style="margin-left:20px;">
                <span class="search-ID">地区</span>
                <select name="member-level" id="member-level">
                    <option value="">全部</option>
                </select>
                <div class="xialaimg1"></div>
            </div>
            <div class="ShopMannagersearch-img">
                <img src="/public/adminimg/search.png" alt="">
            </div>
            <button style="margin-right:16px;width: 100px;height: 32px;border:0;float: right;margin-top:8px;
background: #32d699;border-radius: 18px;text-align: center;line-height: 32px;color: #fff;">
                导出表格
            </button>
        </div>
        <!--管理员列表-->
        <div class="ProductorData">
            <div class="admin-table">
                <div class="el-table__body-wrapper is-scrolling-left">
                    <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                           style="width: 1012px;">
                        <colgroup>
                            <col name="el-table_2_column_6" width="120">
                            <col name="el-table_2_column_7" width="300">
                            <col name="el-table_2_column_8" width="180">
                            <col name="el-table_2_column_9" width="180">
                            <col name="el-table_2_column_10" width="180">
                            <col name="el-table_2_column_11" width="300">
                        </colgroup>
                        <thead class="has-gutter">
                        <tr style="font-size: 14px;color: #B1DBFE;text-align: left;height: 50px;">
                            <th
                                    class="el-table_2_column_11     is-leaf">
                                <div class="cell">ID</div>
                            </th>
                            <th
                                    class="el-table_2_column_12     is-leaf">
                                <div class="cell">商家名称</div>
                            </th>
                            <th
                                    class="el-table_2_column_13     is-leaf">
                                <div class="cell">地区</div>
                            </th>
                            <th colspan="1" rowspan="1"
                                class="el-table_2_column_14     is-leaf">
                                <div class="cell">好评率</div>
                            </th>
                            <th colspan="1" rowspan="1"
                                class="el-table_2_column_14     is-leaf">
                                <div class="cell">投诉率</div>
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
                            <col name="el-table_2_column_7" width="300">
                            <col name="el-table_2_column_8" width="180">
                            <col name="el-table_2_column_9" width="180">
                            <col name="el-table_2_column_10" width="180">
                            <col name="el-table_2_column_11" width="300">
                        </colgroup>
                        <tbody style="font-size: 12px;color:#82898e">

                        <tr class="el-table__row" style="height:36px;font-size: 14px;">
                            <td class="el-table_2_column_11  ">
                                <div class="cell el-tooltip" title="<?= $v["increment_id"] ?>">
                                    1
                                </div>
                            </td>
                            <td class="el-table_2_column_12">
                                <div class="cell el-tooltip">
                                    万荣县自来水厂
                                </div>
                            </td>

                            <td class="el-table_2_column_14">
                                <div class="cell el-tooltip" title="<?= $v["payment_method"] ?>">
                                    万荣县
                                </div>
                            </td>
                            <td class="el-table_2_column_14">
                                <div class="cell el-tooltip" title="<?= $v["payment_method"] ?>">
                                    98%
                                </div>
                            </td>
                            <td class="el-table_2_column_14">
                                <div class="cell el-tooltip" title="<?= $v["payment_method"] ?>">
                                    2%
                                </div>
                            </td>
                            <td class="el-table_2_column_18">
                                <a href="" style="color: #41b2fc;left:200px;">查看</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
<!--        分页-->
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