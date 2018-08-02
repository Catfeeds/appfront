<?php

use yii\widgets\LinkPager;

?>

<div data-v-4ce00a5c="" class="main-content">
    <div data-v-4ce00a5c="" style="width: 1012px; margin: 0px auto;">
        <div data-v-345ba354="" data-v-4ce00a5c="">
            <div data-v-345ba354="" class="content">
                <div data-v-345ba354="" class="biaoti">
                    <div data-v-345ba354="" aria-label="Breadcrumb" role="navigation" class="el-breadcrumb"><span
                                data-v-345ba354="" class="el-breadcrumb__item"><span role="link"
                                                                                     class="el-breadcrumb__inner is-link">店铺管理</span><span
                                    role="presentation" class="el-breadcrumb__separator">·</span></span> <span
                                data-v-345ba354="" class="el-breadcrumb__item" aria-current="page"><span role="link"
                                                                                                         class="el-breadcrumb__inner"><span
                                        data-v-345ba354=""
                                        style="color: rgb(48, 211, 102); font-weight: bolder;">优惠券管理</span></span><span
                                    role="presentation" class="el-breadcrumb__separator">·</span></span></div>
                </div>

                    <div class="adminmannager-search" style="margin-top:0">
                        <div class="xiala">
                            <select name="class" id="" class="el-select xiala" style="margin-left:0px;width: 250px">
                                <option value="0" style="display: none">请选择优惠券状态</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                            </select>
                            <div class="xialaimg1"></div>
                        </div>
                        <!--<span class="search-ID">收货人</span>-->
                        <input type="text" onkeydown="sel(event)" autocomplete="off" placeholder="请输入优惠券名称"
                               class="el-input__inner like" style="font-size: 14px">
                        <div class="ShopMannagersearch-img">
                            <button type="button" class="shop_btn" onclick="sel(event)">
                            </button>
                        </div>
                    </div>

                <div data-v-345ba354="" class="item">
                    <div data-v-345ba354=""
                         class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition"
                         style="width: 100%;">
                        <div class="hidden-columns">
                            <div data-v-345ba354=""></div>
                            <div data-v-345ba354=""></div>
                            <div data-v-345ba354=""></div>
                            <div data-v-345ba354=""></div>
                            <div data-v-345ba354=""></div>
                            <div data-v-345ba354=""></div>
                            <div data-v-345ba354=""></div>
                            <div data-v-345ba354=""></div>
                        </div>
                        <div class="el-table__header-wrapper">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                   style="width: 100%;">
                                <colgroup>
                                    <col name="el-table_5_column_29" width="52">
                                    <col name="el-table_5_column_30" width="130">
                                    <col name="el-table_5_column_31" width="130">
                                    <col name="el-table_5_column_32" width="130">
                                    <col name="el-table_5_column_33" width="155">
                                    <col name="el-table_5_column_34" width="155">
                                    <col name="el-table_5_column_35" width="130">
                                    <col name="el-table_5_column_36" width="130">
                                    <col name="gutter" width="0">
                                </colgroup>
                                <thead class="has-gutter">
                                <tr style="font-size: 14px;color: #B1DBFE;">
                                    <th colspan="1" rowspan="1"
                                        class="el-table_5_column_29   el-table-column--selection  is-leaf">
                                        <div class="cell"><label role="checkbox" class="el-checkbox"><span
                                                        aria-checked="mixed" class="el-checkbox__input"><span
                                                            class="el-checkbox__inner"></span><input type="checkbox"
                                                                                                     aria-hidden="true"
                                                                                                     class="el-checkbox__original"
                                                                                                     value=""></span>
                                                <!----></label></div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_30     is-leaf">
                                        <div class="cell">优惠券名称</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_31     is-leaf">
                                        <div class="cell">优惠金额</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_32     is-leaf">
                                        <div class="cell">消费金额</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_33     is-leaf">
                                        <div class="cell">开始时间</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_34     is-leaf">
                                        <div class="cell">结束时间</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_35     is-leaf">
                                        <div class="cell">优惠券状态</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_5_column_36     is-leaf">
                                        <div class="cell">操作</div>
                                    </th>
                                    <th class="gutter" style="width: 0px; display: none;"></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="el-table__body-wrapper is-scrolling-none">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                                   style="width: 1012px;">
                                <colgroup>
                                    <col name="el-table_5_column_29" width="52">
                                    <col name="el-table_5_column_30" width="130">
                                    <col name="el-table_5_column_31" width="130">
                                    <col name="el-table_5_column_32" width="130">
                                    <col name="el-table_5_column_33" width="155">
                                    <col name="el-table_5_column_34" width="155">
                                    <col name="el-table_5_column_35" width="130">
                                    <col name="el-table_5_column_36" width="130">
                                </colgroup>
                                <tbody style="font-size: 12px;color:#82898e;">
                                <?php foreach ($res as $v) { ?>
                                    <tr class="el-table__row">
                                        <td class="el-table_5_column_29  el-table-column--selection">
                                            <div class="cell">
                                                <label role="checkbox" class="el-checkbox">
                                                <span aria-checked="mixed" class="el-checkbox__input">
                                                    <span class="el-checkbox__inner"></span>
                                                    <input type="checkbox" aria-hidden="true"
                                                           class="el-checkbox__original" value="">
                                                </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="el-table_5_column_30  ">
                                            <div class="cell el-tooltip"><?= $v["coupon_name"] ?></div>
                                        </td>
                                        <td class="el-table_5_column_31  ">
                                            <div class="cell el-tooltip"><?= $v["discount"] ?></div>
                                        </td>
                                        <td class="el-table_5_column_32  ">
                                            <div class="cell el-tooltip"><?= $v["conditions"] ?></div>
                                        </td>
                                        <td class="el-table_5_column_33  ">
                                            <div class="cell el-tooltip"
                                                 title="<?= date("Y-m-d H:i:s", $v["start_date"]) ?>"><?= date("Y-m-d H:i:s", $v["start_date"]) ?></div>
                                        </td>
                                        <td class="el-table_5_column_34  ">
                                            <div class="cell el-tooltip"
                                                 title="<?= date("Y-m-d H:i:s", $v["expiration_date"]) ?>"><?= date("Y-m-d H:i:s", $v["expiration_date"]) ?></div>
                                        </td>
                                        <td class="el-table_5_column_35  ">
                                            <div class="cell">
                                                <?php if ($v["status"] == 0) { ?>
                                                    <span data-v-345ba354="" style="color: #ff4949;">
                                                    未审核
                                                </span>
                                                <?php } else if ($v["status"] == 2) { ?>
                                                    <span data-v-345ba354="" style="color: #ff4949;">
                                                    审核失败
                                                </span>
                                                <?php } else if ($v["expiration_date"] > time()) { ?>
                                                    <span data-v-345ba354="" style="color: rgb(54, 221, 124);">
                                                    有效
                                                </span>
                                                <?php } else { ?>
                                                    <span data-v-345ba354="" style="color: #ff4949;">
                                                    无效
                                                </span>
                                                <?php } ?>
                                            </div>
                                        </td>
                                        <td class="el-table_5_column_36  ">
                                            <div class="cell el-tooltip" style="width: 134px;">
                                                <a href="<?= Yii::$service->url->geturl("admin/shop/seecoupon?id={$v["coupon_id"]}") ?>">
                                                    <button data-v-345ba354="" type="button"
                                                            class="el-button el-button--text el-button--small">
                                                        <span>查看</span>
                                                    </button>
                                                </a>
                                                <?php if ($v["expiration_date"] > time() && $v["status"] == 1) { ?>
                                                    <span data-v-345ba354="" style="color: rgb(234, 235, 236);">|</span>
                                                    <a href="<?= Yii::$service->url->geturl("/shop/store/delcou?id={$v['coupon_id']}") ?>">
                                                        <button data-v-345ba354="" type="button"
                                                                class="el-button el-button--text el-button--small">
                                                            <span><i data-v-345ba354=""
                                                                     class="el-icon-delete"></i></span>
                                                        </button>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="el-table__column-resize-proxy" style="display: none;"></div>
                    </div>
                    <div data-v-345ba354="" style="position: relative;">
                        <div data-v-345ba354=""
                             style="width: 180px; position: absolute; right: 0px; bottom: 50px; display: flex; justify-content: space-between;">
                            <div data-v-345ba354="" style="display: flex;">
                                <div data-v-345ba354="" class="dian"></div>
                                总计<span data-v-345ba354=""
                                        style="color: rgb(61, 176, 255); font-weight: bolder;"><?= $num ?></span>记录
                            </div>
                            <div data-v-345ba354="" style="display: flex;">
                                <div data-v-345ba354="" class="dian" style="background: rgb(41, 201, 154);"></div>
                                分<span data-v-345ba354=""
                                       style="font-weight: bolder; color: rgb(41, 201, 154);"><?= $page ?></span>页
                            </div>
                        </div>
                        <div data-v-345ba354="" style="margin-top: 40px;">
                            <button data-v-345ba354="" type="button" class="el-button el-button--default">
                                <span>全选</span>
                            </button>
                            <button data-v-345ba354="" type="button" class="el-button red el-button--danger is-round">
                                <span>批量删除</span></button>
                        </div>
                    </div>
                    <div data-v-345ba354="" style="width: 100%; position: relative;">
                        <div data-v-345ba354=""
                             style="font-size: 12px; position: absolute; bottom: 0px; right: 0px; display: flex; justify-content: space-between;">
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
        </div>
    </div>
</div>
<script>
    var like = document.querySelectorAll(".like");

    function sel(e) {
        if (e.keyCode != 13 && e.type == "keydown") {
            return;
        }
        var status = like[0].value;
        var name = like[1].value;
        location.href = "<?= Yii::$service->url->geturl("/shop/store/couponindex?") ?>" + `status=${status}&name=${name}`;
    }
</script>
