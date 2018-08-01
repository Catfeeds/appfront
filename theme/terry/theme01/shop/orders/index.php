<?php

use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<style>
    .is-top>a{
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

    .sousuo {
        margin-top: 5px;
        width: 40px;
        height: 40px;
        background: url("/public/img/sousuo.png") no-repeat center center/100% auto;
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
                        <div data-v-6045fa9c="" class="biaoti">
                            <div data-v-6045fa9c="" aria-label="Breadcrumb" role="navigation"
                                 class="el-breadcrumb"><span
                                        data-v-6045fa9c="" class="el-breadcrumb__item"><span role="link"
                                                                                             class="el-breadcrumb__inner is-link">商品管理</span><span
                                            role="presentation" class="el-breadcrumb__separator">·</span></span> <span
                                        data-v-6045fa9c="" class="el-breadcrumb__item" aria-current="page"><span
                                            role="link"
                                            class="el-breadcrumb__inner"><span
                                                data-v-6045fa9c=""
                                                style="color: rgb(48, 211, 102); font-weight: bolder;">订单列表</span></span><span
                                            role="presentation" class="el-breadcrumb__separator">·</span></span></div>
                        </div>
                        <ul data-v-6045fa9c="" class="shuaixuan">
                            <li data-v-6045fa9c="">
                                <div data-v-6045fa9c="" class="el-input" style="width: 150px;"><!----><input type="text"
                                                                                                             autocomplete="off"
                                                                                                             placeholder="请输入收货人"
                                                                                                             class="el-input__inner  customer_firstname" name="customer_firstname">
                                    <!----><!----><!----></div>
                            </li>
                            <li data-v-6045fa9c="">
                                <div data-v-6045fa9c="" class="el-input" style="width: 150px;"><!----><input type="text"
                                                                                                             autocomplete="off"
                                                                                                             placeholder="请输入订单号"
                                                                                                             class="el-input__inner increment_id" name="increment_id">
                                    <!----><!----><!----></div>
                            </li>
                            <li data-v-6045fa9c="">
                                <div data-v-6045fa9c="" class="el-input" style="width: 200px;"><!----><input type="text"
                                                                                                             autocomplete="off"
                                                                                                             placeholder="请输入商品编号/关键字"
                                                                                                             class="el-input__inner">
                                    <!----><!----><!----></div>
                            </li>
                            <li data-v-6045fa9c="">
                                <div data-v-6045fa9c="" class="sousuo"></div>
                            </li>
                        </ul>
                        <div data-v-6045fa9c="" class="item">
                            <div data-v-6045fa9c="" class="el-tabs el-tabs--top">
                                <div class="el-tabs__header is-top">
                                    <div class="el-tabs__nav-wrap is-top">
                                        <div class="el-tabs__nav-scroll">
                                            <div role="tablist" class="el-tabs__nav is-top"
                                                 style="transform: translateX(0px);">
                                                <div class="el-tabs__active-bar is-top"
                                                     style="width: 120px; transform: translateX(<?= ($flag) * 120 ?>px);"></div>
                                                <a href="<?= Yii::$service->url->geturl("/shop/orders/index") ?>">
                                                    <div id="tab-first" aria-controls="pane-first" role="tab"
                                                         aria-selected="true" tabindex="0"
                                                         class="el-tabs__item is-top is-active">
                                                        全部订单(<?= count($all) ?>)
                                                    </div>
                                                </a>
                                                <a href=" <?= Yii::$service->url->geturl("/shop/orders/index?flag=1") ?>">
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
                                                <a href=" <?= Yii::$service->url->geturl("/shop/orders/index?flag=2") ?>">
                                                    <div id="tab-third" aria-controls="pane-third" role="tab" tabindex="-1"
                                                     class="el-tabs__item is-top">待接单（<?php
                                                    $arr = array_filter($all, function ($val) {
                                                        return $val["order_status"] == 1;
                                                    });
                                                    echo count($arr);
                                                    ?>）
                                                </div>
                                                </a>
                                                <a href=" <?= Yii::$service->url->geturl("/shop/orders/index?flag=3") ?>">
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
                                                <a href=" <?= Yii::$service->url->geturl("/shop/orders/index?flag=4") ?>">
                                                    <div id="tab-fifth" aria-controls="pane-fifth" role="tab" tabindex="-1"
                                                     class="el-tabs__item is-top">待评价（<?php
                                                    $arr = array_filter($all, function ($val) {
                                                        return $val["order_status"] == 3;
                                                    });
                                                    echo count($arr);
                                                    ?>）
                                                </div>
                                                </a>
                                                <a href=" <?= Yii::$service->url->geturl("/shop/orders/index?flag=5") ?>">
                                                    <div id="tab-fifth" aria-controls="pane-fifth" role="tab" tabindex="-1"
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
                                                                <input type="checkbox" class="el-checkbox__original" value=""/>
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
                                                                    <input type="checkbox"  class="el-checkbox__original" value=""/>
                                                                </span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td class="el-table_2_column_11  ">
                                                                <div class="cell el-tooltip" title="<?= $v["increment_id"] ?>">
                                                                    <?= $v["increment_id"] ?></div>
                                                            </td>
                                                            <td class="el-table_2_column_12">
                                                                <div class="cell el-tooltip">
                                                                    655.00
                                                                </div>
                                                            </td>
                                                            <td class="el-table_2_column_13">
                                                                <div class="cell el-tooltip">
                                                                    <div  title="<?= $v["customer_firstname"] ?>" class="ddd"><?= $v["customer_firstname"] ?></div>
                                                                    <div  title="<?= $v["customer_telephone"] ?>" class="ddd">
                                                                        TEL:<?= $v["customer_telephone"] ?></div>
                                                                    <div class="ddd" title="<?= $v["customer_address_country"] . $v["customer_address_state"] . $v["customer_address_city"] . $v["customer_address_street1"] ?>">
                                                                        <?= $v["customer_address_country"] . $v["customer_address_state"] . $v["customer_address_city"] . $v["customer_address_street1"] ?></div>
                                                                </div>
                                                            </td>
                                                            <td class="el-table_2_column_14">
                                                                <div class="cell el-tooltip" title="<?= $v["payment_method"] ?>"><?= $v["payment_method"] ?></div>
                                                            </td>
                                                            <td class="el-table_2_column_15">
                                                                <div class="cell el-tooltip">
                                                                <div title="<?= $v["grand_total"] ?>">
                                                                        总金额：<span style="color: #566168;font-weight: bold"><?= $v["grand_total"] ?></span></div>
                                                                    <div title="<?= $v["coupon_name"] ?>">
                                                                        使用优惠券：<span style="color: #FF8F71;font-weight: bold"><?= $v["coupon_name"] ?></span></div>
                                                                    <div title="<?= $v["coin_num"] ?>">使用金币：<span style="color: #FFD545;font-weight: bold"><?= $v["coin_num"] ?></span></div>
                                                                    <div title="<?= $v["discount_amount"] ?>">折扣：<span style="color: #1FD98C;font-weight: bold"><?= $v["discount_amount"] ?></span></div>
                                                                    <div title="<?= $v["grand_total"] - $v["subtotal_with_discount"] ?>">
                                                                        应付金额：<span style="color:#3BACFE;font-weight: bold"><?= $v["grand_total"] - $v["subtotal_with_discount"] ?></span></div>
                                                                </div>
                                                            </td>
                                                            <td class="el-table_2_column_16">
                                                                <div class="cell el-tooltip"><?php
                                                                    $arr = ["待支付", "待接单", "待确认", "待评价", "已完成", "已退单"];
                                                                    echo $arr[$v["order_status"]];
                                                                    ?></div>
                                                            </td>
                                                            <td class="el-table_2_column_17">
                                                                <div class="cell el-tooltip" title="<?= date("Y-m-d H:i:s", $v[created_at]) ?>">
                                                                    <?= date("Y-m-d H:i:s", $v[created_at]) ?></div>
                                                            </td>
                                                            <td class="el-table_2_column_18">
                                                                <div class="cell el-tooltip">
                                                                    <a data-v-6045fa9c="" href="#/OrderListDetails" class="">
                                                                        <button data-v-6045fa9c="" type="button"
                                                                                class="el-button el-button--text el-button--small">
                                                                            <a href="<?= Yii::$service->url->getUrl('shop/orders/see?order_id=' . $v['order_id']) ?>"
                                                                               style="color: #41b2fc;">查看</a></button>
                                                                    </a> <span data-v-6045fa9c=""
                                                                               style="color: rgb(234, 235, 236);">|</span>
                                                                    <button data-v-6045fa9c="" type="button"
                                                                            class="el-button el-button--text el-button--small">
                                                                        <span><i data-v-6045fa9c="" class="el-icon-delete"></i></span>
                                                                    </button>
                                                                    <?php if($v["order_status"]==1){ ?>
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
                                        <div data-v-6045fa9c="" style="position: relative;">
                                            <div data-v-6045fa9c="" style="margin-top: 40px;">
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
                                            <div data-v-6045fa9c=""
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
<script>
    $(function(){
        console.log($(".sousuo"));
        $(".sousuo").on("click",function () {
            let customer_firstname = $("input.customer_firstname").val();
            let increment_id = $("input.increment_id").val();
            location.href="<?= Yii::$service->url->geturl("/shop/orders/index?") ?>"+`customer_firstname=${customer_firstname}&increment_id=${increment_id}`;
        })

    })

</script>