<?php

use yii\widgets\LinkPager;

?>
<style>
    .is-top > a {
        width: 120px;
        display: block;
        float: left;
    }

    div[role=tab] {
        width: 120px;
        text-align: center;
    }

    .content {
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        padding-top: 8px;
    }

    .content .biaoti {
        height: 52px;
        font-size: 12px;
        line-height: 52px;
        font-weight: bolder;
    }

    .el-tabs__item {
        padding: 0 !important;
        padding-right: 20px;
    }

    .content .shuaixuan {
        height: 46px;
        width: 650px;
        display: flex;
        justify-content: space-between;
        line-height: 46px;
    }

    .content .item {
        width: 100%;
        margin-top: 10px;
    }

    .item .picture {
        width: 56px;
        height: 56px;
        background: url("/public/img/sousuo.png") no-repeat center center/100% auto;
        border-radius: 3px;
        /*display: inline-block;*/
    }

    .item .contents {
        width: 108px;
        height: 40px;
        margin-left: 10px;
        margin-top: 7px;
        float: right;
        font-size: 14px;
        line-height: 20px;
    }

    .content .red {
        height: 35px;
        background: #FD5E4E;
        border: none;
        box-shadow: 0 0px 8px #FD5E4E;
    }
</style>
<div id="app">
    <div data-v-7dc5d9bc="">
        <div data-v-7dc5d9bc="" class="main-content">
            <div style="width: 1012px;margin: 0 auto">
                <div data-v-6045fa9c="" data-v-7dc5d9bc="">
                    <div data-v-6045fa9c="" class="content">
                        <div data-v-1ae89237="" class="adminmannager-title">
                            <span data-v-1ae89237="">
                                <a data-v-1ae89237="" href="<?= Yii::$service->url->geturl("/admin/shop/index") ?>"
                                   class="">商家</a>
                            </span>&nbsp;
                            <span data-v-1ae89237="">·&nbsp;
                                <a data-v-1ae89237=""
                                   href=""<?= Yii::$service->url->geturl("/admin/shop/order?id=$shop_id") ?>
                                "" class=""><?= $shop_name ?></a>
                            </span>
                            <span data-v-1ae89237="">·&nbsp;订单管理</span>
                        </div>
                        <form action="<?= Yii::$service->url->getUrl('admin/shop/order') ?>" method="get">
                            <input type="hidden" name="id" value="<?= $shop_id ?>">
                            <input type="hidden" name="flag" value="<?= $flag ?>">
                            <div class="adminmannager-search">
                                <span>收货人</span>
                                <input type="text" name="customer_firstname" value="<?= $customer_firstname ?>"
                                       autocomplete="off" placeholder="请输入收货人" class="el-input__inner">
                                <span class="search-ID">订单号</span>
                                <input type="text" name="increment_id" value="<?= $increment_id ?>" autocomplete="off"
                                       placeholder="请输入订单号" class="el-input__inner">
                                <div class="ShopMannagersearch-img">
                                    <button type="submit" class="shop_btn">
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div data-v-6045fa9c="" class="item">
                            <div data-v-6045fa9c="" class="el-tabs el-tabs--top">
                                <div class="el-tabs__header is-top">
                                    <div class="el-tabs__nav-wrap is-top">
                                        <div class="el-tabs__nav-scroll">
                                            <div role="tablist" class="el-tabs__nav is-top"
                                                 style="transform: translateX(0px);">
                                                <div class="el-tabs__active-bar is-top"
                                                     style="width: 120px; transform: translateX(<?= ($flag) * 120 ?>px);"></div>
                                                <a href="<?= Yii::$service->url->geturl("/admin/shop/order?id=$shop_id") ?>">
                                                    <div id="tab-first" aria-controls="pane-first" role="tab"
                                                         aria-selected="true" tabindex="0"
                                                         class="el-tabs__item is-top is-active">
                                                        全部订单(<?= count($all) ?>)
                                                    </div>
                                                </a>
                                                <a href=" <?= Yii::$service->url->geturl("/admin/shop/order?id=$shop_id&flag=1") ?>">
                                                    <div id="tab-second" aria-controls="pane-second" role="tab"
                                                         tabindex="-1"
                                                         class="el-tabs__item is-top">待支付（<?php
                                                        $arr = array_filter($all, function ($val) {
                                                            return $val["order_status"] == 0;
                                                        });
                                                        echo count($arr);
                                                        ?>）
                                                    </div>
                                                </a>
                                                <a href=" <?= Yii::$service->url->geturl("/admin/shop/order?id=$shop_id&flag=2") ?>">
                                                    <div id="tab-third" aria-controls="pane-third" role="tab"
                                                         tabindex="-1"
                                                         class="el-tabs__item is-top">待接单（<?php
                                                        $arr = array_filter($all, function ($val) {
                                                            return $val["order_status"] == 1;
                                                        });
                                                        echo count($arr);
                                                        ?>）
                                                    </div>
                                                </a>
                                                <a href=" <?= Yii::$service->url->geturl("/admin/shop/order?id=$shop_id&flag=3") ?>">
                                                    <div id="tab-fourth" aria-controls="pane-fourth" role="tab"
                                                         tabindex="-1"
                                                         class="el-tabs__item is-top">待确认（<?php
                                                        $arr = array_filter($all, function ($val) {
                                                            return $val["order_status"] == 2;
                                                        });
                                                        echo count($arr);
                                                        ?>）
                                                    </div>
                                                </a>
                                                <a href=" <?= Yii::$service->url->geturl("/admin/shop/order?id=$shop_id&flag=4") ?>">
                                                    <div id="tab-fifth" aria-controls="pane-fifth" role="tab"
                                                         tabindex="-1"
                                                         class="el-tabs__item is-top">待评价（<?php
                                                        $arr = array_filter($all, function ($val) {
                                                            return $val["order_status"] == 3;
                                                        });
                                                        echo count($arr);
                                                        ?>）
                                                    </div>
                                                </a>
                                                <a href=" <?= Yii::$service->url->geturl("/admin/shop/order?id=$shop_id&flag=5") ?>">
                                                    <div id="tab-fifth" aria-controls="pane-fifth" role="tab"
                                                         tabindex="-1"
                                                         class="el-tabs__item is-top">已完成（<?php
                                                        $arr = array_filter($all, function ($val) {
                                                            return $val["order_status"] == 4;
                                                        });
                                                        echo count($arr);
                                                        ?>）
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="el-tabs__content">
                                    <div data-v-6045fa9c="" role="tabpanel" id="pane-first" aria-labelledby="tab-first"
                                         class="el-tab-pane">
                                        <div data-v-6045fa9c=""
                                             class="el-table el-table--fit el-table--scrollable-x el-table--enable-row-hover el-table--enable-row-transition"
                                             style="width: 100%;">
                                            <div class="hidden-columns">
                                                <div data-v-6045fa9c=""></div>
                                                <div data-v-6045fa9c=""></div>
                                                <div data-v-6045fa9c=""></div>
                                                <div data-v-6045fa9c=""></div>
                                                <div data-v-6045fa9c=""></div>
                                                <div data-v-6045fa9c=""></div>
                                                <div data-v-6045fa9c=""></div>
                                                <div data-v-6045fa9c=""></div>
                                                <div data-v-6045fa9c=""></div>
                                                <div data-v-6045fa9c=""></div>
                                            </div>
                                            <div class="el-table__header-wrapper">
                                                <table cellspacing="0" cellpadding="0" border="0"
                                                       class="el-table__header"
                                                       style="width: 1012px;">
                                                    <colgroup>
                                                        <col name="el-table_2_column_10" width="52">
                                                        <col name="el-table_2_column_11" width="120">
                                                        <col name="el-table_2_column_12" width="100">
                                                        <col name="el-table_2_column_13" width="180">
                                                        <col name="el-table_2_column_14" width="100">
                                                        <col name="el-table_2_column_15" width="180">
                                                        <col name="el-table_2_column_16" width="100">
                                                        <col name="el-table_2_column_17" width="100">
                                                        <col name="el-table_2_column_18" width="80">
                                                    </colgroup>
                                                    <thead class="has-gutter">
                                                    <tr style="font-size: 14px;color: #B1DBFE;">
                                                        <th colspan="1" rowspan="1"
                                                            class="el-table_2_column_7   el-table-column--selection  is-leaf">
                                                            <div class="cell">
                                                                <label role="checkbox" class="el-checkbox">
                                                            <span class="el-checkbox__input">
                                                                <span class="el-checkbox__inner"></span>
                                                                <input type="checkbox" class="el-checkbox__original"
                                                                       value=""/>
                                                            </span>
                                                                </label>
                                                            </div>
                                                        </th>
                                                        <th colspan="1" rowspan="1"
                                                            class="el-table_2_column_11     is-leaf">
                                                            <div class="cell">订单号</div>
                                                        </th>
                                                        <th colspan="1" rowspan="1"
                                                            class="el-table_2_column_12     is-leaf">
                                                            <div class="cell">单价</div>
                                                        </th>
                                                        <th colspan="1" rowspan="1"
                                                            class="el-table_2_column_13     is-leaf">
                                                            <div class="cell">收货人</div>
                                                        </th>
                                                        <th colspan="1" rowspan="1"
                                                            class="el-table_2_column_14     is-leaf">
                                                            <div class="cell">支付方式</div>
                                                        </th>
                                                        <th colspan="1" rowspan="1"
                                                            class="el-table_2_column_15     is-leaf">
                                                            <div class="cell">金额标签</div>
                                                        </th>
                                                        <th colspan="1" rowspan="1"
                                                            class="el-table_2_column_16     is-leaf">
                                                            <div class="cell">订单状态</div>
                                                        </th>
                                                        <th colspan="1" rowspan="1"
                                                            class="el-table_2_column_17     is-leaf">
                                                            <div class="cell">下单时间</div>
                                                        </th>
                                                        <th colspan="1" rowspan="1"
                                                            class="el-table_2_column_18     is-leaf">
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
                                                        <col name="el-table_2_column_10" width="52">
                                                        <col name="el-table_2_column_11" width="120">
                                                        <col name="el-table_2_column_12" width="100">
                                                        <col name="el-table_2_column_13" width="180">
                                                        <col name="el-table_2_column_14" width="100">
                                                        <col name="el-table_2_column_15" width="180">
                                                        <col name="el-table_2_column_16" width="100">
                                                        <col name="el-table_2_column_17" width="100">
                                                        <col name="el-table_2_column_18" width="80">
                                                    </colgroup>
                                                    <tbody style="font-size: 12px;color:#82898e">
                                                    <?php foreach ($orders as $v) { ?>
                                                        <tr class="el-table__row">
                                                            <td class="el-table_2_column_10  el-table-column--selection">
                                                                <div class="cell el-tooltip">
                                                                    <label role="checkbox" class="el-checkbox">
                                                                <span class="el-checkbox__input">
                                                                    <span class="el-checkbox__inner"></span>
                                                                    <input type="checkbox" class="el-checkbox__original"
                                                                           value=""/>
                                                                </span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td class="el-table_2_column_11  ">
                                                                <div class="cell el-tooltip"
                                                                     title="<?= $v["increment_id"] ?>">
                                                                    <?= $v["increment_id"] ?></div>
                                                            </td>
                                                            <td class="el-table_2_column_12">
                                                                <div class="cell el-tooltip">
                                                                    655.00
                                                                </div>
                                                            </td>
                                                            <td class="el-table_2_column_13">
                                                                <div class="cell el-tooltip">
                                                                    <div title="<?= $v["customer_firstname"] ?>"
                                                                         class="ddd"><?= $v["customer_firstname"] ?></div>
                                                                    <div title="<?= $v["customer_telephone"] ?>"
                                                                         class="ddd">
                                                                        TEL:<?= $v["customer_telephone"] ?></div>
                                                                    <div class="ddd"
                                                                         title="<?= $v["customer_address_country"] . $v["customer_address_state"] . $v["customer_address_city"] . $v["customer_address_street1"] ?>">
                                                                        <?= $v["customer_address_country"] . $v["customer_address_state"] . $v["customer_address_city"] . $v["customer_address_street1"] ?></div>
                                                                </div>
                                                            </td>
                                                            <td class="el-table_2_column_14">
                                                                <div class="cell el-tooltip"
                                                                     title="<?= $v["payment_method"] ?>"><?= $v["payment_method"] ?></div>
                                                            </td>
                                                            <td class="el-table_2_column_15">
                                                                <div class="cell el-tooltip">
                                                                    <div title="<?= $v["grand_total"] ?>">
                                                                        总金额：<span
                                                                                style="color: #566168;font-weight: bold"><?= $v["grand_total"] ?></span>
                                                                    </div>
                                                                    <div title="<?= $v["coupon_name"] ?>">
                                                                        使用优惠券：<span
                                                                                style="color: #FF8F71;font-weight: bold"><?= $v["coupon_name"] ?></span>
                                                                    </div>
                                                                    <div title="<?= $v["coin_num"] ?>">使用金币：<span
                                                                                style="color: #FFD545;font-weight: bold"><?= $v["coin_num"] ?></span>
                                                                    </div>
                                                                    <div title="<?= $v["discount_amount"] ?>">折扣：<span
                                                                                style="color: #1FD98C;font-weight: bold"><?= $v["discount_amount"] ?></span>
                                                                    </div>
                                                                    <div title="<?= $v["grand_total"] - $v["subtotal_with_discount"] ?>">
                                                                        应付金额：<span
                                                                                style="color:#3BACFE;font-weight: bold"><?= $v["grand_total"] - $v["subtotal_with_discount"] ?></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="el-table_2_column_16">
                                                                <div class="cell el-tooltip"><?php
                                                                    $arr = ["待支付", "待接单", "待确认", "待评价", "已完成", "已退单"];
                                                                    echo $arr[$v["order_status"]];
                                                                    ?></div>
                                                            </td>
                                                            <td class="el-table_2_column_17">
                                                                <div class="cell el-tooltip"
                                                                     title="<?= date("Y-m-d H:i:s", $v[created_at]) ?>">
                                                                    <?= date("Y-m-d H:i:s", $v[created_at]) ?></div>
                                                            </td>
                                                            <td class="el-table_2_column_18">
                                                                <div class="cell el-tooltip">
                                                                    <a data-v-6045fa9c="" href="#/OrderListDetails"
                                                                       class="">
                                                                        <button data-v-6045fa9c="" type="button"
                                                                                class="el-button el-button--text el-button--small">
                                                                            <a href="<?= Yii::$service->url->getUrl('admin/shop/see?order_id=' . $v['order_id']) ?>"
                                                                               style="color: #41b2fc;">查看</a></button>
                                                                    </a> <span data-v-6045fa9c=""
                                                                               style="color: rgb(234, 235, 236);">|</span>
                                                                    <button data-v-6045fa9c="" type="button"
                                                                            class="el-button el-button--text el-button--small">
                                                                        <span><i data-v-6045fa9c=""
                                                                                 class="el-icon-delete"></i></span>
                                                                    </button>
                                                                    <?php if ($v["order_status"] == 1) { ?>
                                                                        <div data-v-6045fa9c="">
                                                                            <a href="<?= Yii::$service->url->geturl("/shop/orders/receipt?order_id={$v["order_id"]}") ?>">
                                                                                <button data-v-6045fa9c="" type="button"
                                                                                        class="el-button el-button--primary is-round"
                                                                                        style="font-size: 10px; width: 60px; margin-top: 5px; height: 25px; padding-top: 5px; padding-left: 18px;">
                                                                                    <span>接单</span>
                                                                                </button>
                                                                            </a>
                                                                        </div>
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
                                        <div style="position: relative;">
                                            <div style="margin-top: 40px;">
                                                <button data-v-6045fa9c="" type="button"
                                                        class="el-button el-button--default"><!---->
                                                    <!----><span>全选</span>
                                                </button>
                                                <button data-v-6045fa9c="" type="button"
                                                        class="el-button red el-button--danger is-round">
                                                    <span>批量删除</span></button>
                                            </div>
                                        </div>
                                        <div data-v-6045fa9c="" style="width: 100%; position: relative;">
                                            <div class="order_p">
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
                                                    .order_p {
                                                        font-size: 12px;
                                                        position: absolute;
                                                        bottom: 0px;
                                                        right: 0px;
                                                        display: flex;
                                                        justify-content: space-between;
                                                    }

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
                                    <div data-v-6045fa9c="" role="tabpanel" aria-hidden="true" id="pane-second"
                                         aria-labelledby="tab-second" class="el-tab-pane" style="display: none;">待支付（1）
                                    </div>
                                    <div data-v-6045fa9c="" role="tabpanel" aria-hidden="true" id="pane-third"
                                         aria-labelledby="tab-third" class="el-tab-pane" style="display: none;">待取件（1）
                                    </div>
                                    <div data-v-6045fa9c="" role="tabpanel" aria-hidden="true" id="pane-fourth"
                                         aria-labelledby="tab-fourth" class="el-tab-pane" style="display: none;">待评价（1）
                                    </div>
                                    <div data-v-6045fa9c="" role="tabpanel" aria-hidden="true" id="pane-fifth"
                                         aria-labelledby="tab-fifth" class="el-tab-pane" style="display: none;">已完成 （1）
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>