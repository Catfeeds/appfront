<?php

use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<style>
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

    .content .shuaixuan {
        height: 46px;
        width: 800px;
        display: flex;
        justify-content: space-between;
        line-height: 46px;
        color: #a4adb5;
        font-size: 12px;
    }

    .content .shuaixuan .xiala {
        padding-left: 10px;
        width: 150px;
        outline: none;
        height: 30px;
        border-radius: 15px;
        background: #f3faff;
        border: 2px solid #e5eff8;
        color: #9eabb5;
        font-size: 14px;
        cursor: pointer;
    }

    .shuaixuan .el-select:hover {
        border-color: #c0c4cc;
    }

    .shuaixuan .el-select:focus {
        border-color: #3CACFE;
    }

    .sousuo {
        margin-top: 5px;
        width: 40px;
        height: 40px;
        background: url("/public/img/sousuo.png") no-repeat center center/100% auto;
        cursor: pointer;
    }

    .content .item {
        width: 100%;
        height: 50px;
    }

    .content .red {
        height: 35px;
        background: #FD5E4E;
        border: none;
        box-shadow: 0 0 8px #FD5E4E;
    }
</style>
<div data-v-29f2ba61="" class="main-content">
    <div data-v-29f2ba61="" style="width: 1012px; margin: 0 auto;">
        <div data-v-7a00a356="" data-v-29f2ba61="">
            <div data-v-7a00a356="" class="content">
                <div data-v-7a00a356="" class="biaoti">
                    <div data-v-7a00a356="" aria-label="Breadcrumb" role="navigation" class="el-breadcrumb"><span
                                data-v-7a00a356="" class="el-breadcrumb__item"><span role="link"
                                                                                     class="el-breadcrumb__inner is-link">订单管理</span><span
                                    role="presentation" class="el-breadcrumb__separator">·</span></span> <span
                                data-v-7a00a356="" class="el-breadcrumb__item" aria-current="page"><span role="link"
                                                                                                         class="el-breadcrumb__inner"><span
                                        data-v-7a00a356=""
                                        style="color: rgb(48, 211, 102); font-weight: bolder;">纠纷订单</span></span><span
                                    role="presentation" class="el-breadcrumb__separator">·</span></span></div>
                </div>
                <ul data-v-7a00a356="" class="shuaixuan">
                    <li data-v-7a00a356="" style="display: flex;align-items: center">
                        处理状态&nbsp;&nbsp;<select name="class" id="" class="el-select xiala chuli" style="margin-left:10px;">
                            <option value="" style="display: none;">请选择处理状态</option>
                            <option value="5">未处理</option>
                            <option value="6">已处理</option>
                        </select>
                    </li>
                    <li data-v-7a00a356="">
                        订单号&nbsp;&nbsp;<div data-v-7a00a356="" class="el-input" style="width: 150px;">
                            <input type="text" autocomplete="off" placeholder="请输入订单号" class="el-input__inner increment_id"
                                   name="increment_id">
                            </div>
                    </li>
                    <li data-v-7a00a356="">
                        姓名&nbsp;&nbsp;<div data-v-7a00a356="" class="el-input" style="width: 200px;">
                            <input type="text" autocomplete="off" placeholder="请输入收货人姓名"
                                   class="el-input__inner customer_firstname" name="customer_firstname">
                            </div>
                    </li>
                    <li data-v-7a00a356="">
                        <div data-v-7a00a356="" class="sousuo"></div>
                    </li>
                </ul>
                <div data-v-7a00a356="" class="item">
                    <div data-v-7a00a356=""
                         class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition"
                         style="width: 100%;">
                        <div class="hidden-columns">
                            <div data-v-7a00a356=""></div>
                            <div data-v-7a00a356=""></div>
                            <div data-v-7a00a356=""></div>
                            <div data-v-7a00a356=""></div>
                            <div data-v-7a00a356=""></div>
                            <div data-v-7a00a356=""></div>
                            <div data-v-7a00a356=""></div>
                            <div data-v-7a00a356=""></div>
                            <div data-v-7a00a356=""></div>
                            <div data-v-7a00a356=""></div>
                            <div data-v-7a00a356=""></div>
                        </div>
                        <div class="el-table__header-wrapper">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                   style="width: 1012px;">
                                <colgroup>
                                    <col name="el-table_18_column_144" width="45">
                                    <col name="el-table_18_column_145" width="80">
                                    <col name="el-table_18_column_146" width="90">
                                    <col name="el-table_18_column_147" width="80">
                                    <col name="el-table_18_column_148" width="129">
                                    <col name="el-table_18_column_149" width="129">
                                    <col name="el-table_18_column_150" width="129">
                                    <col name="el-table_18_column_151" width="80">
                                    <col name="el-table_18_column_152" width="80">
                                    <col name="el-table_18_column_153" width="80">
                                    <col name="el-table_18_column_154" width="90">
                                    <col name="gutter" width="0">
                                </colgroup>
                                <thead class="has-gutter">
                                <tr class="" style="font-size: 14px;color: #B1DBFE;">
                                    <th colspan="1" rowspan="1"
                                        class="el-table_18_column_144   el-table-column--selection  is-leaf">
                                        <div class="cell"><label role="checkbox" class="el-checkbox"><span
                                                        aria-checked="mixed" class="el-checkbox__input"><span
                                                            class="el-checkbox__inner"></span><input type="checkbox"
                                                                                                     aria-hidden="true"
                                                                                                     class="el-checkbox__original"
                                                                                                     value=""></span>
                                                <!----></label></div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_18_column_145     is-leaf">
                                        <div class="cell">编号</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_18_column_146     is-leaf">
                                        <div class="cell">订单号</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_18_column_147     is-leaf">
                                        <div class="cell">收货人</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_18_column_148     is-leaf">
                                        <div class="cell">下单时间</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_18_column_149     is-leaf">
                                        <div class="cell">支付时间</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_18_column_150     is-leaf">
                                        <div class="cell">退款时间</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_18_column_151     is-leaf">
                                        <div class="cell">纠纷类型</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_18_column_152     is-leaf">
                                        <div class="cell">操作人</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_18_column_153     is-leaf">
                                        <div class="cell">处理状态</div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_18_column_154     is-leaf">
                                        <div class="cell">操作</div>
                                    </th>
                                    <th class="gutter" style="width: 0px; display: none;"></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <?php if(count($res)>0){ ?>
                            <div class="el-table__body-wrapper is-scrolling-none">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                                   style="width: 1012px;">
                                <colgroup>
                                    <col name="el-table_18_column_144" width="45">
                                    <col name="el-table_18_column_145" width="80">
                                    <col name="el-table_18_column_146" width="90">
                                    <col name="el-table_18_column_147" width="80">
                                    <col name="el-table_18_column_148" width="129">
                                    <col name="el-table_18_column_149" width="129">
                                    <col name="el-table_18_column_150" width="129">
                                    <col name="el-table_18_column_151" width="80">
                                    <col name="el-table_18_column_152" width="80">
                                    <col name="el-table_18_column_153" width="80">
                                    <col name="el-table_18_column_154" width="90">
                                </colgroup>
                                <tbody style="font-size: 12px;color:#82898e">
                                <?php foreach ($res as $key => $v) { ?>
                                    <tr class="el-table__row">
                                        <td class="el-table_18_column_144  el-table-column--selection">
                                            <div class="cell el-tooltip">
                                                <label role="checkbox" class="el-checkbox">
                                                    <span aria-checked="mixed" class="el-checkbox__input">
                                                        <span class="el-checkbox__inner"></span>
                                                        <input type="checkbox" aria-hidden="true" class="el-checkbox__original" value=""></span>
                                                </label></div>
                                        </td>
                                        <td class="el-table_18_column_145">
                                            <div class="cell el-tooltip"><?= $key + 1 + $pagination->limit * $pagination->offset ?></div>
                                        </td>
                                        <td class="el-table_18_column_146">
                                            <div class="cell el-tooltip"
                                                 title="<?= $v["increment_id"] ?>"><?= $v["increment_id"] ?></div>
                                        </td>
                                        <td class="el-table_18_column_147  ">
                                            <div class="cell el-tooltip"
                                                 title="<?= $v["customer_firstname"] ?>"><?= $v["customer_firstname"] ?></div>
                                        </td>
                                        <td class="el-table_18_column_148  ">
                                            <div class="cell el-tooltip" title="<?=date("Y:m:d H:i:s", $v["created_at"]) ?>">
                                                <?php
                                                if ($v["created_at"]) {
                                                    echo date("Y:m:d H:i:s", $v["created_at"]);
                                                } ?>
                                            </div>
                                        </td>
                                        <td class="el-table_18_column_149  ">
                                            <div class="cell el-tooltip" title="<?= date("Y:m:d H:i:s", $v["paypal_order_datetime"]) ?>">
                                                <?php
                                                if ($v["paypal_order_datetime"]) {
                                                    echo date("Y:m:d H:i:s", $v["paypal_order_datetime"]);
                                                } ?>
                                            </div>
                                        </td>
                                        <td class="el-table_18_column_150  ">
                                            <div class="cell el-tooltip" title="<?= date("Y:m:d H:i:s", $v["refund_at"]) ?>">
                                                <?php
                                                if ($v["refund_at"]) {
                                                    echo date("Y:m:d H:i:s", $v["refund_at"]);
                                                }
                                                ?>
                                            </div>
                                        </td>
                                        <td class="el-table_18_column_151  ">
                                            <div class="cell el-tooltip">退款</div>
                                        </td>
                                        <td class="el-table_18_column_152  ">
                                            <div class="cell el-tooltip"><?= $v["operator"] ?></div>
                                        </td>
                                        <td class="el-table_18_column_153  ">
                                            <div class="cell el-tooltip">
                                                <?php
                                                if ($v["order_status"] == 5) {
                                                    echo "未处理";
                                                } else if ($v["order_status"] == 6) {
                                                    echo "已处理";
                                                }
                                                ?>
                                            </div>
                                        </td>
                                        <td class="el-table_18_column_154  ">
                                            <div class="cell el-tooltip"><a data-v-7a00a356=""
                                                                                                 href="#/OrderDetails"
                                                                                                 class="">
                                                    <a href="<?= Yii::$service->url->geturl("/shop/orders/seedispute?order_id=" . $v[order_id]) ?>">
                                                        <button data-v-7a00a356="" type="button"
                                                                class="el-button el-button--text el-button--small">
                                                            <span>查看</span>
                                                        </button>
                                                    </a>
                                                </a> <span data-v-7a00a356=""
                                                           style="color: rgb(234, 235, 236);">|</span>
                                                <button data-v-7a00a356="" type="button"
                                                        class="el-button el-button--text el-button--small">
                                                    <span><i data-v-7a00a356="" class="el-icon-delete"></i></span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <?php }else{ ?>
                            <div style="width: 300px;height: 100px;background: url('/public/empty.jpg') center center/100% auto no-repeat;margin: 0 auto">
                        <?php } ?>
                        <div class="el-table__column-resize-proxy" style="display: none;"></div>
                    </div>
                        <?php if(count($res)>0){ ?>
                    <div data-v-7a00a356="" style="position: relative;">
                        <div data-v-7a00a356=""
                             style="width: 200px; position: absolute; right: 0px; bottom: 50px; display: flex; justify-content: space-between;">
                            <div data-v-7a00a356="" style="display: flex;">
                                <div data-v-7a00a356="" class="dian"></div>
                                总计<span data-v-7a00a356=""
                                        style="color: rgb(61, 176, 255); font-weight: bolder;margin:0 5px;"><?= $count ?></span>记录
                            </div>
                            <div data-v-7a00a356="" style="display: flex;">
                                <div data-v-7a00a356="" class="dian" style="background: rgb(41, 201, 154);"></div>
                                分<span data-v-7a00a356=""
                                       style="font-weight: bolder; color: rgb(41, 201, 154);margin:0 5px;"><?= ceil($count / $pagination->limit) ?></span>页
                            </div>
                        </div>
                        <div data-v-7a00a356="" style="margin-top: 40px;">
                            <button data-v-7a00a356="" type="button" class="el-button el-button--default">
                                <span>全选</span>
                            </button>
                            <button data-v-7a00a356="" type="button" class="el-button red el-button--danger is-round">
                                <span>批量删除</span></button>
                        </div>
                    </div>
                    <div data-v-7a00a356="" style="width: 100%; position: relative;">
                        <div data-v-7a00a356=""
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
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        console.log($(".chuli"));
        let orderStatus = "";
        $(".chuli").on("change", function () {
            orderStatus = $('form').serializeArray()[0]['value'];
        })
        $(".sousuo").on("click", function () {
            let customer_firstname = $("input.customer_firstname").val();
            let increment_id = $("input.increment_id").val();
            location.href = "<?= Yii::$service->url->geturl("/shop/orders/dispute?") ?>" + `customer_firstname=${customer_firstname}&increment_id=${increment_id}&orderStatus=${orderStatus}`;
        })

    })

</script>