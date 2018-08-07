<?php

use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="main-content">
    <div style="width: 1012px; margin: 0 auto;">
        <div>
            <div class="content">
                <div class="biaoti">
                    <div aria-label="Breadcrumb" role="navigation" class="el-breadcrumb">
                        <span class="el-breadcrumb__item"><span role="link"
                                                                class="el-breadcrumb__inner is-link">账户管理</span><span
                                    role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
                        <span class="el-breadcrumb__item" aria-current="page"><span role="link"
                                                                                    class="el-breadcrumb__inner"><span
                                        style="color: rgb(48, 211, 102);font-weight: bold">账单列表</span></span><span role="presentation"
                                                                                                  class="el-breadcrumb__separator">&middot;</span></span>
                    </div>
                </div>
                <ul class="shuaixuan">
                    <li>
                        账单&nbsp;&nbsp;<select name="" id="" class="el-select xiala">
                            <option value="" style="display: none;">今日账单</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                    </li>
                    <li style="
                        display: flex;
                        align-items: center;
                    ">时间段选择&nbsp;
                        <div class="el-form-item__content" style="margin-left: 10px;">
                            <input type="text" name="data" class="demo-input el-input__inner" placeholder="日期时间范围" id="test10">
                        </div>
                    </li>
                    <style>
                        .demo-input {
                            min-width: 330px;
                            line-height: 38px;
                        }
                        .el-form-item__content {
                            line-height: normal;
                        }

                        .el-form-item__content {
                            line-height: 40px;
                            position: relative;
                            font-size: 14px;
                        }

                        .layui-laydate .layui-this {
                            background: #30B5FE !important;
                        }
                    </style>
                    <li>
                        <div class="el-input" style="width: 200px;">
                            <input type="text" autocomplete="off" placeholder="请输入关键字搜索" class="el-input__inner"
                                   onkeydown="sel(event)"/>
                        </div>
                    </li>
                    <li>
                        <div class="sousuo" onclick="sel(event)"></div>
                    </li>
                </ul>
                <div class="item">
                    <div class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition"
                         style="width: 100%;">
                        <div class="hidden-columns">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="el-table__header-wrapper">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                   style="width: 1012px;">
                                <colgroup>
                                    <col name="el-table_2_column_11" width="50"/>
                                    <col name="el-table_2_column_12" width="100"/>
                                    <col name="el-table_2_column_13" width="150"/>
                                    <col name="el-table_2_column_14" width="150"/>
                                    <col name="el-table_2_column_15" width="100"/>
                                    <col name="el-table_2_column_16" width="150"/>
                                    <col name="el-table_2_column_17" width="150"/>
                                    <col name="el-table_2_column_18" width="80"/>
                                    <col name="el-table_2_column_19" width="82"/>
                                    <col name="gutter" width="0"/>
                                </colgroup>
                                <thead class="has-gutter">
                                <tr style="font-size: 14px;color: #B1DBFE;">
                                    <th colspan="1" rowspan="1"
                                        class="el-table_2_column_11   el-table-column--selection  is-leaf">
                                        <div class="cell">
                                            <label role="checkbox" class="el-checkbox"><span aria-checked="mixed"
                                                                                             class="el-checkbox__input"><span
                                                            class="el-checkbox__inner"></span><input type="checkbox"
                                                                                                     aria-hidden="true"
                                                                                                     class="el-checkbox__original"
                                                                                                     value=""/></span>
                                            </label>
                                        </div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_12     is-leaf">
                                        <div class="cell">
                                            编号
                                        </div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_13     is-leaf">
                                        <div class="cell">
                                            金额
                                        </div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_14     is-leaf">
                                        <div class="cell">
                                            比例
                                        </div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_15     is-leaf">
                                        <div class="cell">
                                            订单编号
                                        </div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_16     is-leaf">
                                        <div class="cell">
                                            下单时间
                                        </div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_17     is-leaf">
                                        <div class="cell">
                                            支付时间
                                        </div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_18     is-leaf">
                                        <div class="cell">
                                            订单状态
                                        </div>
                                    </th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_19     is-leaf">
                                        <div class="cell">
                                            支付方式
                                        </div>
                                    </th>
                                    <th class="gutter" style="width: 0px; display: none;"></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <?php if (count($res) > 0){ ?>
                            <div class="el-table__body-wrapper is-scrolling-none">
                                <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                                       style="width: 1012px;">
                                    <colgroup>
                                        <col name="el-table_2_column_11" width="50"/>
                                        <col name="el-table_2_column_12" width="100"/>
                                        <col name="el-table_2_column_13" width="150"/>
                                        <col name="el-table_2_column_14" width="150"/>
                                        <col name="el-table_2_column_15" width="100"/>
                                        <col name="el-table_2_column_16" width="150"/>
                                        <col name="el-table_2_column_17" width="150"/>
                                        <col name="el-table_2_column_18" width="80"/>
                                        <col name="el-table_2_column_19" width="82"/>
                                    </colgroup>
                                    <tbody style="font-size: 12px;color:#82898e">
                                    <?php foreach ($res as $v) { ?>
                                        <tr class="el-table__row">
                                            <td class="el-table_2_column_11  el-table-column--selection">
                                                <div class="cell el-tooltip">
                                                    <label role="checkbox" class="el-checkbox"><span
                                                                aria-checked="mixed"
                                                                class="el-checkbox__input"><span
                                                                    class="el-checkbox__inner"></span><input
                                                                    type="checkbox"
                                                                    aria-hidden="true"
                                                                    class="el-checkbox__original"
                                                                    value=""/></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="el-table_2_column_12  ">
                                                <div class="cell el-tooltip">
                                                    <?= $v["order_id"] ?>
                                                </div>
                                            </td>
                                            <td class="el-table_2_column_13  ">
                                                <div class="cell el-tooltip">
                                                    <div class="ddd">
                                                        订单金额：￥<?= $v['subtotal'] ?>
                                                    </div>
                                                    <div class="ddd">
                                                        退单金额：￥<?php if ($v["order_status"] == 6) { ?>
                                                            <?= $v["subtotal"] - $v["subtotal_with_discount"] ?>
                                                        <?php } else { ?>
                                                            0
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="el-table_2_column_14  ">
                                                <div class="cell el-tooltip">
                                                    <div class="ddd">
                                                        收取比例：<?= (number_format($v["subtotal_with_discount"] / $v["grand_total"], 2) * 100) . "%" ?>
                                                    </div>
                                                    <div class="ddd">
                                                        折扣比例：￥<?= $v["subtotal_with_discount"] ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="el-table_2_column_15  ">
                                                <div class="cell el-tooltip">
                                                    <?= $v["increment_id"] ?>
                                                </div>
                                            </td>
                                            <td class="el-table_2_column_16  ">
                                                <div class="cell el-tooltip">
                                                    <?= date("Y-m-d H:i:s", $v["created_at"]) ?>
                                                </div>
                                            </td>
                                            <td class="el-table_2_column_17  ">
                                                <div class="cell el-tooltip">
                                                    <?= date("Y-m-d H:i:s", $v["paypal_order_datetime"]) ?>
                                                </div>
                                            </td>
                                            <td class="el-table_2_column_18  ">
                                                <div class="cell el-tooltip">
                                                    <?php
                                                    if ($v[order_status] == 1) {
                                                        echo "已支付";
                                                    } else if ($v[order_status] == 2) {
                                                        echo "已接单";
                                                    } else if ($v[order_status] == 3) {
                                                        echo "已确认";
                                                    } else if ($v[order_status] == 4) {
                                                        echo "已完成";
                                                    } else if ($v[order_status] == 5) {
                                                        echo "<span style='color:red'>申请退货</span>";
                                                    } else if ($v[order_status] == 6) {
                                                        echo "<span style='color:red'>以退货</span>";
                                                    }
                                                    ?>
                                                </div>
                                            </td>
                                            <td class="el-table_2_column_19  ">
                                                <div class="cell el-tooltip">
                                                    <?= $v[payment_method] ?>
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
                        <?php if (count($res) > 0) { ?>
                            <div style="position: relative;">
                                <div style="width: 200px; position: absolute; right: 0px; bottom: 50px; display: flex; justify-content: space-between;">
                                    <div style="display: flex;">
                                        <div class="dian"></div>
                                        总计
                                        <span style="color: rgb(61, 176, 255); font-weight: bolder;margin:0 5px;"><?= $tot ?></span>记录
                                    </div>
                                    <div style="display: flex;">
                                        <div class="dian" style="background: rgb(41, 201, 154);"></div>
                                        分
                                        <span style="font-weight: bolder; color: rgb(41, 201, 154);margin:0 5px;"><?= ceil($tot / 10) ?></span>页
                                    </div>
                                </div>
                                <div style="margin-top: 40px;">
                                    <button type="button" class="el-button el-button--default">

                                        <span>全选</span></button>
                                    <button type="button" class="el-button green el-button--success is-round">

                                        <span>导出</span></button>
<!--                                    <button type="button" class="el-button blue el-button--primary is-round">-->
<!---->
<!--                                        <span>打印</span></button>-->
                                </div>
                            </div>
                            <div style="float: right; margin-top: 50px;">
                                <div class="el-pagination is-background">
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
        width: 900px;
        display: flex;
        justify-content: space-between;
        line-height: 46px;
        color: #a4adb5;
        font-size: 12px;
    }


        .content .shuaixuan .xiala {
            padding-left: 5px;
            width: 98px;
            outline: none;
            height: 30px;
            border-radius: 15px;
            background: #f3faff;
            border: 2px solid #e5eff8;
            color: #9eabb5;
            font-size: 14px;
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

        .content .item ul {
            width: 360px;
            height: 50px;
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            color: #30a2fe;
            line-height: 50px;
        }

        .content .green {
            width: 112px;
            height: 33px;
            background: #37DF73;
            border: none;
            box-shadow: 0 0 8px #37DF73;
            padding-top: 10px;
        }

        .content .blue {
            width: 112px;
            height: 33px;
            background: #30B5FE;
            border: none;
            box-shadow: 0 0 8px #30B5FE;
            padding-top: 10px;
        }

        .content .button_left {
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

        .content .button_right {
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

        .content .dian {
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background: #3db0ff;
            box-shadow: 0 0 2px #3db0ff;
            margin-top: 10px;
            margin-right: 5px;
        }

        .content .ddd {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }


    </style>
    <script>
        laydate.render({
            elem: '#test10'
            , type: 'datetime'
            , range: true
            , theme: "#3CACFE"
        });
        var el_input = document.querySelectorAll('.demo-input');

        function sel(e) {
            if (e.keyCode != 13 && e.type == "keydown") {
                return;
            }
            var dates = el_input[0].value.split(' ');
            if (dates[3] == undefined) {
                dates[3] = '';
            }
            var startdate = dates[0];
            var enddate = dates[3];
            location.href = "<?= Yii::$service->url->geturl("/shop/account/index?") ?>" + `startdate=${startdate}&enddate=${enddate}`;
        }
    </script>