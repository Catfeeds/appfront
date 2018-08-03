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
        width: 600px;
        display: flex;
        justify-content: space-between;
        line-height: 46px;
    }

    .sousuo {
        margin-top: 5px;
        width: 40px;
        height: 40px;
        background: url("../../../assets/img/sousuo.png") no-repeat center center/100% auto;
    }

    .content .item {
        width: 100%;

    }

    .item .picture {
        width: 56px;
        height: 56px;
        background: url("../../../assets/img/sousuo.png") no-repeat center center/100% auto;
        border-radius: 3px;
        display: inline-block;
    }

    .item .contents {
        width: 150px;
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
        box-shadow: 0 0 8px #FD5E4E;
    }
</style>

<div data-v-29f2ba61="" class="main-content">
    <div data-v-29f2ba61="" style="width: 1064px; margin: 0px auto;">
        <div data-v-0457afb0="" data-v-29f2ba61="">
            <div data-v-0457afb0="" class="content">
                <div data-v-0457afb0="" class="biaoti">
                    <div data-v-0457afb0="" aria-label="Breadcrumb" role="navigation" class="el-breadcrumb"><span
                                data-v-0457afb0="" class="el-breadcrumb__item"><span role="link"
                                                                                     class="el-breadcrumb__inner is-link">订单管理</span><span
                                    role="presentation" class="el-breadcrumb__separator">·</span></span> <span
                                data-v-0457afb0="" class="el-breadcrumb__item" aria-current="page"><span role="link"
                                                                                                         class="el-breadcrumb__inner"><span
                                        data-v-0457afb0=""
                                        style="color: rgb(48, 211, 102); font-weight: bolder;">缺货登记</span></span><span
                                    role="presentation" class="el-breadcrumb__separator">·</span></span></div>
                </div>

                <ul data-v-0457afb0="" class="shuaixuan">
                    <li data-v-0457afb0="">
                        商品编号&nbsp;&nbsp;<div data-v-0457afb0="" class="el-input" style="width: 180px;"><!----><input
                                    type="text"
                                    autocomplete="off"
                                    placeholder="请输入商品编号"
                                    class="el-input__inner"
                            >
                            <!----><!----><!----></div>
                    </li>
                    <li data-v-0457afb0="">
                        关键字&nbsp;&nbsp;<div data-v-0457afb0="" class="el-input" style="width: 200px;"><!----><input
                                    type="text"
                                    autocomplete="off"
                                    placeholder="请输入商品关键字"
                                    class="el-input__inner">
                            <!----><!----><!----></div>
                    </li>
                    <li data-v-0457afb0="">
                        <div data-v-0457afb0="" class="sousuo"></div>
                    </li>
                </ul>
                <div data-v-0457afb0="" class="item">
                    <div data-v-0457afb0="" class="el-tabs el-tabs--top">
                        <div class="el-tabs__content">
                            <div data-v-0457afb0="" role="tabpanel" id="pane-first" aria-labelledby="tab-first"
                                 class="el-tab-pane">
                                <div data-v-0457afb0=""
                                     class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition"
                                     style="width: 100%;">
                                    <div class="hidden-columns">
                                        <div data-v-0457afb0=""></div>
                                        <div data-v-0457afb0=""></div>
                                        <div data-v-0457afb0=""></div>
                                        <div data-v-0457afb0=""></div>
                                        <div data-v-0457afb0=""></div>
                                        <div data-v-0457afb0=""></div>
                                        <div data-v-0457afb0=""></div>
                                        <div data-v-0457afb0=""></div>
                                        <div data-v-0457afb0=""></div>
                                    </div>
                                    <div class="el-table__header-wrapper">
                                        <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                               style="width: 1064px;">
                                            <colgroup>
                                                <col name="el-table_34_column_271" width="48">
                                                <col name="el-table_34_column_272" width="80">
                                                <col name="el-table_34_column_273" width="108">
                                                <col name="el-table_34_column_274" width="107">
                                                <col name="el-table_34_column_275" width="250">
                                                <col name="el-table_34_column_276" width="107">
                                                <col name="el-table_34_column_277" width="150">
                                                <col name="el-table_34_column_278" width="107">
                                                <col name="el-table_34_column_279" width="107">
                                                <col name="gutter" width="0">
                                            </colgroup>
                                            <thead class="has-gutter">
                                            <tr class="">
                                                <th colspan="1" rowspan="1"
                                                    class="el-table_34_column_271   el-table-column--selection  is-leaf">
                                                    <div class="cell"><label role="checkbox" class="el-checkbox"><span
                                                                    aria-checked="mixed"
                                                                    class="el-checkbox__input"><span
                                                                        class="el-checkbox__inner"></span><input
                                                                        type="checkbox" aria-hidden="true"
                                                                        class="el-checkbox__original" value=""></span>
                                                            <!----></label></div>
                                                </th>
                                                <th colspan="1" rowspan="1" class="el-table_34_column_272     is-leaf">
                                                    <div class="cell">编号</div>
                                                </th>
                                                <th colspan="1" rowspan="1" class="el-table_34_column_273     is-leaf">
                                                    <div class="cell">负责人</div>
                                                </th>
                                                <th colspan="1" rowspan="1" class="el-table_34_column_274     is-leaf">
                                                    <div class="cell">联系电话</div>
                                                </th>
                                                <th colspan="1" rowspan="1" class="el-table_34_column_275     is-leaf">
                                                    <div class="cell">缺货商品名</div>
                                                </th>
                                                <th colspan="1" rowspan="1" class="el-table_34_column_276     is-leaf">
                                                    <div class="cell">数量</div>
                                                </th>
                                                <th colspan="1" rowspan="1" class="el-table_34_column_277     is-leaf">
                                                    <div class="cell">登记时间</div>
                                                </th>
                                                <th colspan="1" rowspan="1" class="el-table_34_column_278     is-leaf">
                                                    <div class="cell">状态</div>
                                                </th>
                                                <th colspan="1" rowspan="1" class="el-table_34_column_279     is-leaf">
                                                    <div class="cell">操作</div>
                                                </th>
                                                <th class="gutter" style="width: 0px; display: none;"></th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="el-table__body-wrapper is-scrolling-none">
                                        <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                                               style="width: 1064px;">
                                            <colgroup>
                                                <col name="el-table_34_column_271" width="48">
                                                <col name="el-table_34_column_272" width="80">
                                                <col name="el-table_34_column_273" width="108">
                                                <col name="el-table_34_column_274" width="107">
                                                <col name="el-table_34_column_275" width="250">
                                                <col name="el-table_34_column_276" width="107">
                                                <col name="el-table_34_column_277" width="150">
                                                <col name="el-table_34_column_278" width="107">
                                                <col name="el-table_34_column_279" width="107">
                                            </colgroup>


                                            <?php for ($i=0;$i<count($res);$i++) { ?>

                                            <tbody>
                                                <tr class="el-table__row">
                                                <td class="el-table_34_column_271  el-table-column--selection">
                                                    <div class="cell"><label role="checkbox" class="el-checkbox"><span
                                                                    aria-checked="mixed"
                                                                    class="el-checkbox__input"><span
                                                                        class="el-checkbox__inner"></span><input
                                                                        type="checkbox" aria-hidden="true"
                                                                        class="el-checkbox__original" value=""></span>
                                                            <!----></label></div>
                                                </td>
                                                <td class="el-table_34_column_272  ">
                                                    <div class="cell el-tooltip" style="width: 79px;"><?=  $res[$i]["product_id"] ?></div>
                                                </td>
                                                <td class="el-table_34_column_273  ">
                                                    <div class="cell el-tooltip" style="width: 107px;">张三</div>
                                                </td>
                                                <td class="el-table_34_column_274  ">
                                                    <div class="cell el-tooltip" style="width: 106px;">13012345678</div>
                                                </td>
                                                <td class="el-table_34_column_275  ">
                                                    <div class="cell el-tooltip" style="width: 249px;">
                                                        <div data-v-0457afb0="" class="picture"></div>
                                                        <div data-v-0457afb0="" class="contents">
                                                            <div data-v-0457afb0="">货号：<?=  $res[$i]["product_id"] ?></div>

                                                            <div data-v-0457afb0=""><?=  $goods[$i]['name'] ?></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="el-table_34_column_276  ">
                                                    <div class="cell el-tooltip" style="width: 106px;"><?= $res[$i]["qty"] ?></div>
                                                </td>
                                                <td class="el-table_34_column_277  ">
                                                    <div class="cell el-tooltip" style="width: 149px;">2018-06-01
                                                        18:25
                                                    </div>
                                                </td>
                                                <td class="el-table_34_column_278  ">
                                                    <div class="cell el-tooltip" style="width: 106px;">正在采购</div>
                                                </td>
                                                <td class="el-table_34_column_279  ">
                                                    <div class="cell el-tooltip" style="width: 106px;">
                                                        <button data-v-0457afb0="" type="button"
                                                                class="el-button el-button--text el-button--small">
                                                            <!----><!----><span><i data-v-0457afb0=""
                                                                                   class="el-icon-delete"></i></span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>

                                            <?php } ?>
                                        </table><!----><!----></div><!----><!----><!----><!---->
                                    <div class="el-table__column-resize-proxy" style="display: none;"></div>
                                </div>
                                <div data-v-0457afb0="" style="position: relative;">
                                    <div data-v-0457afb0=""
                                         style="width: 180px; position: absolute; right: 0px; bottom: 50px; display: flex; justify-content: space-between;">
                                        <div data-v-0457afb0="" style="display: flex;">
                                            <div data-v-0457afb0="" class="dian"></div>
                                            总计<span data-v-0457afb0=""
                                                    style="color: rgb(61, 176, 255); font-weight: bolder;"><?= $tot ?></span>记录
                                        </div>
                                        <div data-v-0457afb0="" style="display: flex;">
                                            <div data-v-0457afb0="" class="dian"
                                                 style="background: rgb(41, 201, 154);"></div>
                                            分<span data-v-0457afb0=""
                                                   style="font-weight: bolder; color: rgb(41, 201, 154);"><?= $page ?></span>页
                                        </div>
                                    </div>
                                    <div data-v-0457afb0="" style="margin-top: 40px;">
                                        <button data-v-0457afb0="" type="button" class="el-button el-button--default">
                                            <!----><!----><span>全选</span></button>
                                        <button data-v-0457afb0="" type="button"
                                                class="el-button red el-button--danger is-round"><!----><!----><span>批量删除</span>
                                        </button>
                                    </div>
                                </div>
                                <div data-v-0457afb0="" style="width: 100%; position: relative;">
                                    <div data-v-0457afb0=""
                                         style="font-size: 12px; position: absolute; bottom: 0px; right: 0px; display: flex; justify-content: space-between;">
<!--                                        <div data-v-0457afb0="" class="button_left">首页</div>-->
<!--                                        <div data-v-0457afb0="" class="el-pagination">-->
<!--                                            <button type="button" disabled="disabled" class="btn-prev"><i-->
<!--                                                        class="el-icon el-icon-arrow-left"></i></button>-->
<!--                                            <ul class="el-pager">-->
<!--                                                <li class="number active">1</li><!---->
<!--                                                <li class="number">2</li>-->
<!--                                                <li class="number">3</li>-->
<!--                                                <li class="number">4</li><!---->
<!--                                                <li class="number">5</li>-->
<!--                                            </ul>-->
<!--                                            <button type="button" class="btn-next"><i-->
<!--                                                        class="el-icon el-icon-arrow-right"></i></button>-->
<!--                                        </div>-->
<!--                                        <div data-v-0457afb0="" class="button_right">末页</div>-->


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
                            <div data-v-0457afb0="" role="tabpanel" aria-hidden="true" id="pane-second"
                                 aria-labelledby="tab-second" class="el-tab-pane" style="display: none;">待支付（1）
                            </div>
                            <div data-v-0457afb0="" role="tabpanel" aria-hidden="true" id="pane-third"
                                 aria-labelledby="tab-third" class="el-tab-pane" style="display: none;">待取件（1）
                            </div>
                            <div data-v-0457afb0="" role="tabpanel" aria-hidden="true" id="pane-fourth"
                                 aria-labelledby="tab-fourth" class="el-tab-pane" style="display: none;">待评价（1）
                            </div>
                            <div data-v-0457afb0="" role="tabpanel" aria-hidden="true" id="pane-fifth"
                                 aria-labelledby="tab-fifth" class="el-tab-pane" style="display: none;">已完成 （1）
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>