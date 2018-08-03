<?php

use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="main-content">
    <div class="ShopMannager">
        <div class="ShopMannager-title">
            <span>商家列表</span>
        </div>
        <div class="ShopMannager-search">
            <form action="<?= Yii::$service->url->getUrl('admin/shop/index') ?>" method="get">
                <div class="xiala">
                    <span class="search-ID">地区</span>
                    <select name="member-level" id="member-level">
                        <option value="">全部</option>
                    </select>
                    <div class="xialaimg1"></div>
                </div>
                <div class="search">
                    <span>商家名称</span>
                    <input type="text" name="shop_name" value="<?= $shop_name ?>" placeholder="请输入商家名称">
                </div>
                <style>

                </style>
                <div class="ShopMannagersearch-img">
                    <button type="submit" class="shop_btn">
                    </button>
                </div>
            </form>
        </div>
        <!--管理员列表-->
        <div class="ShopMannager-table">
            <div class="el-table__body-wrapper is-scrolling-left">
                <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                       style="width: 1012px;">
                    <colgroup>
                        <col name="el-table_2_column_6" width="80">
                        <col name="el-table_2_column_7" width="120">
                        <col name="el-table_2_column_8" width="200">
                        <col name="el-table_2_column_9" width="120">
                        <col name="el-table_2_column_11" width="500">
                    </colgroup>
                    <thead class="has-gutter">
                    <tr style="font-size: 14px;color: #B1DBFE;text-align: left;height: 50px;">
                        <th class="el-table_2_column_11 is-leaf">
                            <div class="cell">ID</div>
                        </th>
                        <th class="el-table_2_column_12 is-leaf">
                            <div class="cell">商家名称</div>
                        </th>
                        <th class="el-table_2_column_13 is-leaf">
                            <div class="cell">地区</div>
                        </th>
                        <th colspan="1" rowspan="1" class="el-table_2_column_14 is-leaf">
                            <div class="cell">上次访问时间</div>
                        </th>
                        <th class="el-table_2_column_15 is-leaf">
                            <div class="cell">相关操作</div>
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
                        <col name="el-table_2_column_6" width="80">
                        <col name="el-table_2_column_7" width="120">
                        <col name="el-table_2_column_8" width="200">
                        <col name="el-table_2_column_9" width="120">
                        <col name="el-table_2_column_11" width="500">
                    </colgroup>
                    <?php if($count>0){ ?>
                        <tbody style="font-size: 12px;color:#82898e">
                            <?php foreach($shop as $v){?>
                                <tr class="el-table__row" style="height:36px;font-size: 14px;">
                                    <td class="el-table_2_column_11  ">
                                        <div class="cell el-tooltip" title="">
                                            <?= $v["shop_id"] ?>
                                        </div>
                                    </td>
                                    <td class="el-table_2_column_12">
                                        <div class="cell el-tooltip">
                                            <?= $v["shop_name"] ?>
                                        </div>
                                    </td>
                                    <td class="el-table_2_column_14">
                                        <div class="cell el-tooltip" title="">
                                            <?= $v["province_name"] ?>
                                            <?= $v["city_name"] ?>
                                            <?= $v["district_name"] ?>
                                        </div>
                                    </td>
                                    <td class="el-table_2_column_13">
                                        <div class="cell el-tooltip">
                                            2018.05.29
                                        </div>
                                    </td>
                                    <td class="el-table_2_column_18">
                                        <a href="<?= Yii::$service->url->getUrl('admin/shop/waterorder', array('id' => $v['shop_id'])) ?>" style="color: #41b2fc">订单管理</a>
                                        &nbsp;<label>|</label>&nbsp;
                                        <a style="color: #41b2fc" href="<?= Yii::$service->url->getUrl('admin/shop/waterfuwuorder', array('id' => $v['shop_id'])) ?>">维修服务管理</a>
                                        &nbsp;<label>|</label>&nbsp;
                                        <a style="color: #41b2fc" href="<?= Yii::$service->url->getUrl('admin/shop/goods', array('id' => $v['shop_id'])) ?>">商品管理</a>
                                        &nbsp;<label>|</label>&nbsp;
                                     <!--    <a style="color: #41b2fc" href="">分类管理</a>
                                        &nbsp;<label>|</label>&nbsp; -->
                                        <a href="<?= Yii::$service->url->getUrl('admin/shop/commentlist', array('id' => $v['shop_id'])) ?>" style="color: #41b2fc">评价管理</a>
                                        &nbsp;<label>|</label>&nbsp;
                                        <a style="color: #41b2fc" href="">咨询管理</a>
                                        &nbsp;<label>|</label>&nbsp;
                                        <a href="<?= Yii::$service->url->getUrl('admin/shop/couponindex', array('id' => $v['shop_id'])) ?>" style="color: #41b2fc" >优惠券管理</a>
                                      <!--   &nbsp;<label>|</label>&nbsp;
                                        <a style="color: #41b2fc" href="">活动管理</a> -->
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    <?php }else{ ?>
                        <div style="width: 300px;height: 100px;background: url('/public/empty.jpg') center center/100% auto no-repeat;margin: 0 auto">
                        </div>
                    <?php }?>
                </table>
            </div>
        </div>
        <?php if($count>0){ ?>
        <div class="adminpagination">
            <div class="pagination">
                <div class="block">
                    <div class="admincount">
                        <div class="admincountall">
                            <span style="color: #3db0ff">·</span>&nbsp;<span>总计</span><span><?= $count ?></span><span>记录</span>
                        </div>
                        <div class="admintotalpage">
                            <span style="color: #29c99a">·</span>&nbsp;<span>分</span><span style="color: #29c99a"><?= ceil($count / $pagination->limit) ?></span><span>页</span>
                        </div>
                        <!-- <div class="admintotalpage">
                            <span style="color: #29c99a">·</span>&nbsp;<span>每页</span>
                            <input type="text" style="display: inline-block;width: 40px;height: 20px;border-radius: 10px;
                            border: 1px solid #ebf6ff;background: #f3faff;outline: none;padding:0 5px;
                            box-sizing: border-box;text-align: center;color:#29c99a;line-height: 20px; "
                                   value="10" >
                        </div> -->
                    </div>
                    <div style="width: 100%; position: relative;margin-top: 40px;">
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
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>