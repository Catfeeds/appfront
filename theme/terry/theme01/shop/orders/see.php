<style>
    .aside {
        width: 12%;
        min-height: 800px;
        background: #1f262c;
        float: left;
        position: fixed;
        top: 0;
        left: 0;
    }

    .aside .logo {
        width: 100%;
        height: 125px;
        background: url("../../assets/img/logo.png") no-repeat center center/100% auto;
    }

    .aside-list li {
        width: 100%;
        height: 72px;
        line-height: 72px;
    }

    .content {
        position: absolute;
        top: 80px;
        bottom: 0;
        left: 18%;
        right: 0;
    }

    .content .biaoti {
        height: 52px;
        font-size: 12px;
        line-height: 52px;
        font-weight: bolder;
    }

    .content .item {
        width: 100%;
    }

    .content .item .bottom {
        width: 100%;
    }

    .bottom .title {
        width: 100%;
        margin-top: 10px;
        line-height: 46px;
        font-size: 12px;
        padding-left: 22px;
        padding-bottom: 20px;

    }

    .bottom .col-box {
        width: 12px;
        height: 7px;
        border-radius: 5px;
        margin-top: 17px;
        margin-left: 10px;
        margin-right: 7px;
        background-color: #37e06f;
    }

    .bottom .title .shangpinbg {
        width: 56px;
        height: 56px;
        background: #BBDFF6;
        border-radius: 3px;
    }

    .bottom .blue {
        float: right;
        font-size: 12px;
        width: 60px;
        margin-top: 5px;
        height: 25px;
        background: #30B5FE;
        border: none;
        box-shadow: 0 0px 8px #30B5FE;
        border-radius: 20px;
        outline: none;
        cursor: pointer;
    }

    .bottom .bottom_top {
        width: 100%;
        height: 42px;
        line-height: 42px;
        font-size: 18px;
        font-weight: bolder
    }

    .el-icon-edit {
        margin-left: 10px;
        font-size: 24px;
        text-align: center;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #3bacfe;
        line-height: 30px;
        box-shadow: 0 3px 8px #48A1FF;
    }

    table {
        font-size: 14px;
    }
</style>
<div class="main-content">
    <div style="width: 1064px; margin: 0px auto;">
        <div data-v-2b6e6d92="" class="content">
            <div data-v-2b6e6d92="" class="biaoti">
                <div data-v-2b6e6d92="" aria-label="Breadcrumb" role="navigation" class="el-breadcrumb"><span
                            data-v-2b6e6d92=""
                            class="el-breadcrumb__item"><span
                                role="link" class="el-breadcrumb__inner is-link">订单管理</span><span role="presentation"
                                                                                                  class="el-breadcrumb__separator">·</span></span>
                    <span data-v-2b6e6d92="" class="el-breadcrumb__item"><span role="link"
                                                                               class="el-breadcrumb__inner">订单列表</span><span
                                role="presentation" class="el-breadcrumb__separator">·</span></span> <span
                            data-v-2b6e6d92=""
                            class="el-breadcrumb__item"
                            aria-current="page"><span
                                role="link" class="el-breadcrumb__inner"><span data-v-2b6e6d92=""
                                                                               style="color: rgb(48, 211, 102); font-weight: bolder;">查看详情</span></span><span
                                role="presentation" class="el-breadcrumb__separator">·</span></span></div>
            </div>
            <div data-v-2b6e6d92="" class="item">
                <div data-v-2b6e6d92="" class="el-steps el-steps--horizontal" style="margin-bottom: 20px;">
                    <div data-v-2b6e6d92="" class="el-step is-horizontal is-center"
                         style="flex-basis: 20%; margin-right: 0px;">
                        <div class="el-step__head is-finish">
                            <div class="el-step__line" style="margin-right: 0px;"><i class="el-step__line-inner"
                                                                                     style="transition-delay: 0ms; border-width: 1px; width: 100%;"></i>
                            </div>
                            <div class="el-step__icon is-text"><!---->
                                <div class="el-step__icon-inner">1</div>
                            </div>
                        </div>
                        <div class="el-step__main">
                            <div class="el-step__title is-finish">提交订单</div>
                            <div class="el-step__description is-finish">2018-03-20 12:00:02</div>
                        </div>
                    </div>
                    <div data-v-2b6e6d92="" class="el-step is-horizontal is-center"
                         style="flex-basis: 20%; margin-right: 0px;">
                        <div class="el-step__head is-finish">
                            <div class="el-step__line" style="margin-right: 0px;"><i class="el-step__line-inner"
                                                                                     style="transition-delay: 150ms; border-width: 1px; width: 100%;"></i>
                            </div>
                            <div class="el-step__icon is-text"><!---->
                                <div class="el-step__icon-inner">2</div>
                            </div>
                        </div>
                        <div class="el-step__main">
                            <div class="el-step__title is-finish">支付订单</div>
                            <div class="el-step__description is-finish">2018-03-20 12:00:02</div>
                        </div>
                    </div>
                    <div data-v-2b6e6d92="" class="el-step is-horizontal is-center"
                         style="flex-basis: 20%; margin-right: 0px;">
                        <div class="el-step__head is-finish">
                            <div class="el-step__line" style="margin-right: 0px;"><i class="el-step__line-inner"
                                                                                     style="transition-delay: 300ms; border-width: 1px; width: 100%;"></i>
                            </div>
                            <div class="el-step__icon is-text"><!---->
                                <div class="el-step__icon-inner">3</div>
                            </div>
                        </div>
                        <div class="el-step__main">
                            <div class="el-step__title is-finish">商家取件</div>
                            <div class="el-step__description is-finish">2018-03-20 12:00:02</div>
                        </div>
                    </div>
                    <div data-v-2b6e6d92="" class="el-step is-horizontal is-center"
                         style="flex-basis: 20%; margin-right: 0px;">
                        <div class="el-step__head is-finish">
                            <div class="el-step__line" style="margin-right: 0px;"><i class="el-step__line-inner"
                                                                                     style="transition-delay: 450ms; border-width: 0px; width: 0%;"></i>
                            </div>
                            <div class="el-step__icon is-text"><!---->
                                <div class="el-step__icon-inner">4</div>
                            </div>
                        </div>
                        <div class="el-step__main">
                            <div class="el-step__title is-finish">确认送达</div>
                            <div class="el-step__description is-finish">2018-03-20 12:00:02</div>
                        </div>
                    </div>
                    <div data-v-2b6e6d92="" class="el-step is-horizontal is-center"
                         style="flex-basis: 20%; max-width: 20%;">
                        <div class="el-step__head is-process">
                            <div class="el-step__line"><i class="el-step__line-inner"></i></div>
                            <div class="el-step__icon is-text"><!---->
                                <div class="el-step__icon-inner">5</div>
                            </div>
                        </div>
                        <div class="el-step__main">
                            <div class="el-step__title is-process">评价</div>
                            <div class="el-step__description is-process"></div>
                        </div>
                    </div>
                </div>
                <div data-v-2b6e6d92="" class="bottom">
                    <div data-v-2b6e6d92="" class="bottom_top">
                        <div data-v-2b6e6d92="" class="col-box"></div>
                        <span data-v-2b6e6d92="" style="color: rgb(48, 163, 254);">基本</span>信息
                    </div>
                    <div data-v-2b6e6d92="" class="title">
                        <div data-v-2b6e6d92=""
                             class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition"
                             style="width: 100%; font-size: 14px;">
                            <div class="hidden-columns">
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                            </div>
                            <div class="el-table__header-wrapper">
                                <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                       style="width: 933px;">
                                    <colgroup>
                                        <col name="el-table_2_column_11" width="180">
                                        <col name="el-table_2_column_12" width="150">
                                        <col name="el-table_2_column_13" width="103">
                                        <col name="el-table_2_column_14" width="100">
                                        <col name="el-table_2_column_15" width="100">
                                        <col name="el-table_2_column_16" width="100">
                                        <col name="el-table_2_column_17" width="100">
                                        <col name="el-table_2_column_18" width="100">
                                        <col name="gutter" width="0">
                                    </colgroup>
                                    <thead class="has-gutter">
                                    <tr class="">
                                        <th colspan="1" rowspan="1" class="el-table_2_column_11     is-leaf">
                                            <div class="cell">订单号</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_2_column_12     is-leaf">
                                            <div class="cell">购货人：信息|留言</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_2_column_13     is-leaf">
                                            <div class="cell">支付方式</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_2_column_14     is-leaf">
                                            <div class="cell">下单时间</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_2_column_15     is-leaf">
                                            <div class="cell">付款时间</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_2_column_16     is-leaf">
                                            <div class="cell">订单状态</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_2_column_17     is-leaf">
                                            <div class="cell">取件时间</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_2_column_18     is-leaf">
                                            <div class="cell">送件时间</div>
                                        </th>
                                        <th class="gutter" style="width: 0px; display: none;"></th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="el-table__body-wrapper is-scrolling-none">
                                <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                                       style="width: 933px;">
                                    <colgroup>
                                        <col name="el-table_2_column_11" width="180">
                                        <col name="el-table_2_column_12" width="150">
                                        <col name="el-table_2_column_13" width="103">
                                        <col name="el-table_2_column_14" width="100">
                                        <col name="el-table_2_column_15" width="100">
                                        <col name="el-table_2_column_16" width="100">
                                        <col name="el-table_2_column_17" width="100">
                                        <col name="el-table_2_column_18" width="100">
                                    </colgroup>
                                    <tbody>
                                    <tr class="el-table__row">
                                        <td class="el-table_2_column_11  ">
                                            <div class="cell"><?= $res["increment_id"] ?></div>
                                        </td>
                                        <td class="el-table_2_column_12  ">
                                            <div class="cell">522836190</div>
                                        </td>
                                        <td class="el-table_2_column_13  ">
                                            <div class="cell"><?= $res["payment_method"] ?></div>
                                        </td>
                                        <td class="el-table_2_column_14  ">
                                            <div class="cell">2018-05-02 18:00</div>
                                        </td>
                                        <td class="el-table_2_column_15  ">
                                            <div class="cell">2016-05-02 18:00</div>
                                        </td>
                                        <td class="el-table_2_column_16  ">
                                            <div class="cell"><?= $res["order_status"] ?></div>
                                        </td>
                                        <td class="el-table_2_column_17  ">
                                            <div class="cell">2016-05-02 18:00</div>
                                        </td>
                                        <td class="el-table_2_column_18  ">
                                            <div class="cell">2016-05-02 18:00</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="el-table__column-resize-proxy" style="display: none;"></div>
                        </div>
                    </div>
                </div>
                <div data-v-2b6e6d92="" class="bottom">
                    <div data-v-2b6e6d92="" class="bottom_top">
                        <div data-v-2b6e6d92="" class="col-box"></div>
                        <span data-v-2b6e6d92="" style="color: rgb(48, 163, 254);">收货人</span>信息
                        <!--                <i data-v-2b6e6d92="" class="el-icon-edit"></i>-->
                        <a href="<?= Yii::$service->url->getUrl('shop/orders/editeceivernfo?order_id=' . $res['order_id']) ?>">
                            <button data-v-2b6e6d92="" type="button" class="blue el-button--primary is-round">编辑
                            </button>
                        </a>
                    </div>
                    <div data-v-2b6e6d92="" class="title">
                        <div data-v-2b6e6d92=""
                             class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition"
                             style="width: 100%;">
                            <div class="hidden-columns">
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                            </div>
                            <div class="el-table__header-wrapper">
                                <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                       style="width: 933px;">
                                    <colgroup>
                                        <col name="el-table_3_column_19" width="100">
                                        <col name="el-table_3_column_20" width="135">
                                        <col name="el-table_3_column_21" width="250">
                                        <col name="el-table_3_column_22" width="134">
                                        <col name="el-table_3_column_23" width="134">
                                        <col name="el-table_3_column_24" width="180">
                                        <col name="gutter" width="0">
                                    </colgroup>
                                    <thead class="has-gutter">
                                    <tr class="">
                                        <th colspan="1" rowspan="1" class="el-table_3_column_19     is-leaf">
                                            <div class="cell">收货人</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_3_column_20     is-leaf">
                                            <div class="cell">手机号</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_3_column_21     is-leaf">
                                            <div class="cell">收货地址</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_3_column_22     is-leaf">
                                            <div class="cell">送货时间</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_3_column_23     is-leaf">
                                            <div class="cell">邮政编码</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_3_column_24     is-leaf">
                                            <div class="cell">电子邮件</div>
                                        </th>
                                        <th class="gutter" style="width: 0px; display: none;"></th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="el-table__body-wrapper is-scrolling-none">
                                <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                                       style="width: 933px;">
                                    <colgroup>
                                        <col name="el-table_3_column_19" width="100">
                                        <col name="el-table_3_column_20" width="135">
                                        <col name="el-table_3_column_21" width="250">
                                        <col name="el-table_3_column_22" width="134">
                                        <col name="el-table_3_column_23" width="134">
                                        <col name="el-table_3_column_24" width="180">
                                    </colgroup>
                                    <tbody>
                                    <tr class="el-table__row">
                                        <td class="el-table_3_column_19  ">
                                            <div class="cell"><?= $res["customer_firstname"] ?></div>
                                        </td>
                                        <td class="el-table_3_column_20  ">
                                            <div class="cell"><?= $res["customer_telephone"] ?></div>
                                        </td>
                                        <td class="el-table_3_column_21  ">
                                            <div class="cell"><?= $res["customer_address_country"] . $res["customer_address_state"] . $res["customer_address_city"] . $res["customer_address_street1"] ?></div>
                                        </td>
                                        <td class="el-table_3_column_22  ">
                                            <div class="cell">2016-05-02 18:00</div>
                                        </td>
                                        <td class="el-table_3_column_23  ">
                                            <div class="cell"><?= $res["customer_address_zip"] ?></div>
                                        </td>
                                        <td class="el-table_3_column_24  ">
                                            <div class="cell"><?= $res["customer_email"] ?></div>
                                        </td>
                                    </tr><!----></tbody>
                                </table><!----><!----></div><!----><!----><!----><!---->
                            <div class="el-table__column-resize-proxy" style="display: none;"></div>
                        </div>
                    </div>
                </div>
                <div data-v-2b6e6d92="" class="bottom">
                    <div data-v-2b6e6d92="" class="bottom_top">
                        <div data-v-2b6e6d92="" class="col-box"></div>
                        <span data-v-2b6e6d92="" style="color: rgb(48, 163, 254);">其他</span>信息
                        <i data-v-2b6e6d92="" class="el-icon-edit"></i>
                        <button data-v-2b6e6d92="" type="button" class="el-button blue el-button--primary is-round">
                            <!---->
                            <!----><span>保存</span></button>
                    </div>
                    <div data-v-2b6e6d92="" class="title">
                        <div data-v-2b6e6d92=""
                             class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition"
                             style="width: 100%;">
                            <div class="hidden-columns">
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                            </div>
                            <div class="el-table__header-wrapper">
                                <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                       style="width: 933px;">
                                    <colgroup>
                                        <col name="el-table_4_column_25" width="200">
                                        <col name="el-table_4_column_26" width="134">
                                        <col name="el-table_4_column_27" width="133">
                                        <col name="el-table_4_column_28" width="200">
                                        <col name="el-table_4_column_29" width="133">
                                        <col name="el-table_4_column_30" width="133">
                                        <col name="gutter" width="0">
                                    </colgroup>
                                    <thead class="has-gutter">
                                    <tr class="">
                                        <th colspan="1" rowspan="1" class="el-table_4_column_25     is-leaf">
                                            <div class="cell">发票抬头:(个人普通发票)</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_4_column_26     is-leaf">
                                            <div class="cell">发票内容</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_4_column_27     is-leaf">
                                            <div class="cell">识别码</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_4_column_28     is-leaf">
                                            <div class="cell">缺货处理</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_4_column_29     is-leaf">
                                            <div class="cell">卖家留言</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_4_column_30     is-leaf">
                                            <div class="cell">买家留言</div>
                                        </th>
                                        <th class="gutter" style="width: 0px; display: none;"></th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="el-table__body-wrapper is-scrolling-none">
                                <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                                       style="width: 933px;">
                                    <colgroup>
                                        <col name="el-table_4_column_25" width="200">
                                        <col name="el-table_4_column_26" width="134">
                                        <col name="el-table_4_column_27" width="133">
                                        <col name="el-table_4_column_28" width="200">
                                        <col name="el-table_4_column_29" width="133">
                                        <col name="el-table_4_column_30" width="133">
                                    </colgroup>
                                    <tbody>
                                    <tr class="el-table__row">
                                        <td class="el-table_4_column_25  ">
                                            <div class="cell">个人</div>
                                        </td>
                                        <td class="el-table_4_column_26  ">
                                            <div class="cell">不开发票</div>
                                        </td>
                                        <td class="el-table_4_column_27  ">
                                            <div class="cell">无</div>
                                        </td>
                                        <td class="el-table_4_column_28  ">
                                            <div class="cell">待所有货款补齐后发货</div>
                                        </td>
                                        <td class="el-table_4_column_29  ">
                                            <div class="cell">无</div>
                                        </td>
                                        <td class="el-table_4_column_30  ">
                                            <div class="cell">
                                                <?php
                                                if ($res["order_remark"] == "") {
                                                    echo "无";
                                                } else {
                                                    echo $res["order_remark"];
                                                }
                                                ?>
                                            </div>
                                        </td>
                                    </tr><!----></tbody>
                                </table><!----><!----></div><!----><!----><!----><!---->
                            <div class="el-table__column-resize-proxy" style="display: none;"></div>
                        </div>
                    </div>
                </div>
                <div data-v-2b6e6d92="" class="bottom">
                    <div data-v-2b6e6d92="" class="bottom_top">
                        <div data-v-2b6e6d92="" class="col-box"></div>
                        <span data-v-2b6e6d92="" style="color: rgb(48, 163, 254);">商品</span>信息
                    </div>
                    <div data-v-2b6e6d92="" class="title">
                        <div data-v-2b6e6d92=""
                             class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition"
                             style="width: 100%;">
                            <div class="hidden-columns">
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                            </div>
                            <div class="el-table__header-wrapper">
                                <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                       style="width: 933px;">
                                    <colgroup>
                                        <col name="el-table_5_column_31" width="204">
                                        <col name="el-table_5_column_32" width="125">
                                        <col name="el-table_5_column_33" width="120">
                                        <col name="el-table_5_column_34" width="120">
                                        <col name="el-table_5_column_35" width="120">
                                        <col name="el-table_5_column_36" width="120">
                                        <col name="el-table_5_column_37" width="120">
                                        <col name="el-table_5_column_38" width="120">
                                        <col name="gutter" width="0">
                                    </colgroup>
                                    <thead class="has-gutter">
                                    <tr class="">
                                        <th colspan="1" rowspan="1" class="el-table_5_column_31     is-leaf">
                                            <div class="cell">商品名称【品牌】</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_5_column_32     is-leaf">
                                            <div class="cell">货号</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_5_column_33     is-leaf">
                                            <div class="cell">价格</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_5_column_34     is-leaf">
                                            <div class="cell">数量</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_5_column_35     is-leaf">
                                            <div class="cell">库存</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_5_column_36     is-leaf">
                                            <div class="cell">小计</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_5_column_37     is-leaf">
                                            <div class="cell">操作</div>
                                        </th>
                                        <th class="gutter" style="width: 0px; display: none;"></th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="el-table__body-wrapper is-scrolling-none">
                                <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                                       style="width: 933px;">
                                    <colgroup>
                                        <col name="el-table_5_column_31" width="204">
                                        <col name="el-table_5_column_32" width="125">
                                        <col name="el-table_5_column_33" width="120">
                                        <col name="el-table_5_column_34" width="120">
                                        <col name="el-table_5_column_35" width="120">
                                        <col name="el-table_5_column_36" width="120">
                                        <col name="el-table_5_column_37" width="120">
                                        <col name="el-table_5_column_38" width="120">
                                    </colgroup>
                                    <tbody>
                                    <?php foreach ($res["goodDatas"] as $v) { ?>
                                        <tr class="el-table__row">
                                            <td class="el-table_5_column_31  ">
                                                <div class="cell">
                                                    <div data-v-2b6e6d92="" style="display: flex;">
                                                        <div data-v-2b6e6d92="" class="shangpinbg"></div>
                                                        <span data-v-2b6e6d92=""
                                                              style="margin-left: 10px;"><?= $v["name"] ?></span></div>
                                                </div>
                                            </td>
                                            <td class="el-table_5_column_32  ">
                                                <div class="cell"><?= $v["sku"] ?></div>
                                            </td>
                                            <td class="el-table_5_column_33  ">
                                                <div class="cell"><?= $v["price"] ?></div>
                                            </td>
                                            <td class="el-table_5_column_34  ">
                                                <div class="cell"><?= $v["qty"] ?></div>
                                            </td>
                                            <td class="el-table_5_column_35  ">
                                                <div class="cell"><?= $v["kc"] ?></div>
                                            </td>
                                            <td class="el-table_5_column_36  ">
                                                <div class="cell"><?= $v["row_total"] ?></div>
                                            </td>
                                            <td class="el-table_5_column_37  ">
                                                <div class="cell">发货单已生成</div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="7">
                                            <div style="float:right;text-align: center;box-sizing: border-box;padding-right: 25px">
                                                <div style="color: #41b2fc;margin-bottom: 5px">合计</div>
                                                <span>
                                                <?= $res["subtotal"] ?>
                                            </span>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table><!----><!----></div><!----><!----><!----><!---->
                            <div class="el-table__column-resize-proxy" style="display: none;"></div>
                        </div>
                    </div>
                </div>
                <div data-v-2b6e6d92="" class="bottom">
                    <div data-v-2b6e6d92="" class="bottom_top">
                        <div data-v-2b6e6d92="" class="col-box"></div>
                        <span data-v-2b6e6d92="" style="color: rgb(48, 163, 254);">费用</span>信息
                    </div>
                    <div data-v-2b6e6d92="" class="title">
                        <div data-v-2b6e6d92=""
                             class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition"
                             style="width: 100%;">
                            <div class="hidden-columns">
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                            </div>
                            <div class="el-table__header-wrapper">
                                <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                       style="width: 933px;">
                                    <colgroup>
                                        <col name="el-table_6_column_39" width="158">
                                        <col name="el-table_6_column_40" width="155">
                                        <col name="el-table_6_column_41" width="155">
                                        <col name="el-table_6_column_42" width="155">
                                        <col name="el-table_6_column_43" width="155">
                                        <col name="el-table_6_column_44" width="155">
                                        <col name="gutter" width="0">
                                    </colgroup>
                                    <thead class="has-gutter">
                                    <tr class="">
                                        <th colspan="1" rowspan="1" class="el-table_6_column_39     is-leaf">
                                            <div class="cell">商品总金额</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_6_column_40     is-leaf">
                                            <div class="cell">折扣</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_6_column_41     is-leaf">
                                            <div class="cell">使用金币</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_6_column_42     is-leaf">
                                            <div class="cell">使用优惠券</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_6_column_43     is-leaf">
                                            <div class="cell">订单总金额</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_6_column_44     is-leaf">
                                            <div class="cell">应付总金额</div>
                                        </th>
                                        <th class="gutter" style="width: 0px; display: none;"></th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="el-table__body-wrapper is-scrolling-none">
                                <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                                       style="width: 933px;">
                                    <colgroup>
                                        <col name="el-table_6_column_39" width="158">
                                        <col name="el-table_6_column_40" width="155">
                                        <col name="el-table_6_column_41" width="155">
                                        <col name="el-table_6_column_42" width="155">
                                        <col name="el-table_6_column_43" width="155">
                                        <col name="el-table_6_column_44" width="155">
                                    </colgroup>
                                    <tbody>
                                    <tr class="el-table__row">
                                        <td class="el-table_6_column_39  ">
                                            <div class="cell"><?= $res["subtotal"] ?></div>
                                        </td>
                                        <td class="el-table_6_column_40  ">
                                            <div class="cell"><?= $res["subtotal_with_discount"] ?></div>
                                        </td>
                                        <td class="el-table_6_column_41  ">
                                            <div class="cell"><?= $res["subtotal"] ?></div>
                                        </td>
                                        <td class="el-table_6_column_42  ">
                                            <div class="cell"><?= "-" . $res["subtotal_with_discount"] ?></div>
                                        </td>
                                        <td class="el-table_6_column_43  ">
                                            <div class="cell"><?= $res["subtotal"] ?></div>
                                        </td>
                                        <td class="el-table_6_column_44  ">
                                            <div class="cell"><?= $res["subtotal"] ?></div>
                                        </td>
                                    </tr><!----></tbody>
                                </table><!----><!----></div><!----><!----><!----><!---->
                            <div class="el-table__column-resize-proxy" style="display: none;"></div>
                        </div>
                    </div>
                </div>
                <div data-v-2b6e6d92="" class="bottom">
                    <div data-v-2b6e6d92="" class="bottom_top">
                        <div data-v-2b6e6d92="" class="col-box"></div>
                        <span data-v-2b6e6d92="" style="color: rgb(48, 163, 254);">取件</span>操作
                    </div>
                    <div data-v-2b6e6d92="" class="title">
                        <div data-v-2b6e6d92=""
                             class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition"
                             style="width: 100%;">
                            <div class="hidden-columns">
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                                <div data-v-2b6e6d92=""></div>
                            </div>
                            <div class="el-table__header-wrapper">
                                <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                       style="width: 933px;">
                                    <colgroup>
                                        <col name="el-table_7_column_45" width="158">
                                        <col name="el-table_7_column_46" width="155">
                                        <col name="el-table_7_column_47" width="155">
                                        <col name="el-table_7_column_48" width="155">
                                        <col name="el-table_7_column_49" width="155">
                                        <col name="el-table_7_column_50" width="155">
                                        <col name="gutter" width="0">
                                    </colgroup>
                                    <thead class="has-gutter">
                                    <tr class="">
                                        <th colspan="1" rowspan="1" class="el-table_7_column_45     is-leaf">
                                            <div class="cell">操作者</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_7_column_46     is-leaf">
                                            <div class="cell">操作时间</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_7_column_47     is-leaf">
                                            <div class="cell">订单状态</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_7_column_48     is-leaf">
                                            <div class="cell">付款状态</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_7_column_49     is-leaf">
                                            <div class="cell">发货状态</div>
                                        </th>
                                        <th colspan="1" rowspan="1" class="el-table_7_column_50     is-leaf">
                                            <div class="cell">备注</div>
                                        </th>
                                        <th class="gutter" style="width: 0px; display: none;"></th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="el-table__body-wrapper is-scrolling-none">
                                <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                                       style="width: 933px;">
                                    <colgroup>
                                        <col name="el-table_7_column_45" width="158">
                                        <col name="el-table_7_column_46" width="155">
                                        <col name="el-table_7_column_47" width="155">
                                        <col name="el-table_7_column_48" width="155">
                                        <col name="el-table_7_column_49" width="155">
                                        <col name="el-table_7_column_50" width="155">
                                    </colgroup>
                                    <tbody>
                                    <tr class="el-table__row">
                                        <td class="el-table_7_column_45  ">
                                            <div class="cell">ADMIN</div>
                                        </td>
                                        <td class="el-table_7_column_46  ">
                                            <div class="cell">2018-05-02 18:00</div>
                                        </td>
                                        <td class="el-table_7_column_47  ">
                                            <div class="cell">已分单</div>
                                        </td>
                                        <td class="el-table_7_column_48  ">
                                            <div class="cell">已付款</div>
                                        </td>
                                        <td class="el-table_7_column_49  ">
                                            <div class="cell">收货确认</div>
                                        </td>
                                        <td class="el-table_7_column_50  ">
                                            <div class="cell"></div>
                                        </td>
                                    </tr>
                                    <tr class="el-table__row">
                                        <td class="el-table_7_column_45  ">
                                            <div class="cell">ADMIN</div>
                                        </td>
                                        <td class="el-table_7_column_46  ">
                                            <div class="cell">2018-05-02 18:00</div>
                                        </td>
                                        <td class="el-table_7_column_47  ">
                                            <div class="cell">已确认</div>
                                        </td>
                                        <td class="el-table_7_column_48  ">
                                            <div class="cell">已付款</div>
                                        </td>
                                        <td class="el-table_7_column_49  ">
                                            <div class="cell">已发货</div>
                                        </td>
                                        <td class="el-table_7_column_50  ">
                                            <div class="cell"></div>
                                        </td>
                                    </tr>
                                    <tr class="el-table__row">
                                        <td class="el-table_7_column_45  ">
                                            <div class="cell">ADMIN</div>
                                        </td>
                                        <td class="el-table_7_column_46  ">
                                            <div class="cell">2018-05-02 18:00</div>
                                        </td>
                                        <td class="el-table_7_column_47  ">
                                            <div class="cell">已分单</div>
                                        </td>
                                        <td class="el-table_7_column_48  ">
                                            <div class="cell">已付款</div>
                                        </td>
                                        <td class="el-table_7_column_49  ">
                                            <div class="cell">发货中</div>
                                        </td>
                                        <td class="el-table_7_column_50  ">
                                            <div class="cell"></div>
                                        </td>
                                    </tr><!----></tbody>
                                </table><!----><!----></div><!----><!----><!----><!---->
                            <div class="el-table__column-resize-proxy" style="display: none;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>