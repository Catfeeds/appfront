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
        font-size: 20px;
        line-height: 52px;
        font-weight: bolder;
    }

    .content .shuaixuan {
        height: 46px;
        width: 770px;
        display: flex;
        justify-content: space-between;
        line-height: 46px;
        color: #a4adb5;
        font-size: 12px;
    }
    .content .shuaixuan li{
        margin:0 20px;
    }
    .content .shuaixuan .xiala {
        padding-left: 10px;
        width: 98px;
        outline: none;
        height: 30px;
        border-radius: 15px;
        background: #f3faff;
        border: 2px solid #e5eff8;
        color:#9eabb5;
        font-size: 14px;
        cursor: pointer;
    }

    .content .shuaixuan .xialas {
        width: 198px;

    }
    .shuaixuan .el-select:hover {
        border-color: #c0c4cc;
    }
    .shuaixuan .el-select:focus {
        border-color: #3CACFE;
    }

    .content .shuaixuan .input1 {
        width: 110px;
        height: 30px;
        background: #f3faff;
        border: 2px solid #ecf7ff;
        border-radius: 15px;
        outline: none;
        font-size: 12px;
        text-align: center;
    }

    .content .shuaixuan .input2 {
        width: 160px;
        height:30px;
        background: #f3faff;
        border: 2px solid #ecf7ff;
        border-radius: 15px;
        outline: none;
        font-size: 12px;
        text-align: center;
    }
    .shuaixuan .input1:hover {
        border-color: #3CACFE;
    }
    .shuaixuan .input2:hover {
        border-color: #3CACFE;
    }
    .sousuo {
        margin-top: 5px;
        width: 40px;
        height: 40px;
        background: url("/public/img/sousuo.png") no-repeat center center/100% auto;
    }

    .content .item {
        width: 100%;
        margin-top:10px;
    }

    .item .picture {
        width: 56px;
        height: 56px;
        border-radius: 3px;
        display: inline-block;
        position: absolute;
        top: 50%;
        margin-top: -28px;
    }

    .item .picture img {
        width: 56px;
        height: 56px;
    }

    .item .contents {
        width: 108px;
        height: 100px;
        margin-left: 65px;
        font-size: 12px;
        line-height: 18px;
        display: flex;
        flex-direction: column;
        justify-content: center;

    }

    .content .red {
        height: 33px;
        background: #FD5E4E;
        border: none;
        box-shadow: 0 0 8px #FD5E4E;
        padding-top: 10px;
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
    .contents .ddd{
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }


</style>
<div class="main-content">
    <div style="width: 1012px; margin: 0 auto;">
        <div>
            <div class="content">
                <div class="biaoti">
                    <div aria-label="Breadcrumb" role="navigation" class="el-breadcrumb">
                        <span class="el-breadcrumb__item">
                            <span role="link" class="el-breadcrumb__inner is-link">商品管理</span>
                            <span role="presentation" class="el-breadcrumb__separator">&middot;</span>
                        </span>
                        <span class="el-breadcrumb__item" aria-current="page">
                            <span role="link" class="el-breadcrumb__inner">
                                <span style="color: rgb(48, 211, 102); font-weight: bolder;">商品列表</span>
                            </span>
                            <span role="presentation" class="el-breadcrumb__separator">&middot;</span>
                        </span>
                    </div>
                </div>
                <form action="<?php echo  Yii::$app->request->getHostInfo().Yii::$app->request->url;?>" method="get">
                    <ul class="shuaixuan">
                        <li>分类
                            <select name="class" id="class" class="el-select xiala xialas" style="margin-left:10px;">
                                <option value="0">全部分类</option>
                                <?php
                                foreach ($class as $key => $value) {
                                    echo "<option disabled style='color: #000'>".$value['name']['name_zh']."</option>";
                                    foreach ($value['zi'] as $k => $v) {

                                        if ($_GET['class'] == $v[_id] ) {
                                            echo "<option selected value='$v[_id]'>".$value['name']['name_zh'].'/'.$v['name']['name_zh']."</option>";
                                        }else{
                                            echo "<option value='$v[_id]'>".$value['name']['name_zh'].'/'.$v['name']['name_zh']."</option>";
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </li>
                        <li>上下架
                            <select name="status" id="" class="el-select xiala" style="margin-left: 10px">
                                <?php

                                if ($_GET['status']==1) {
                                    # code...
                                    echo '<option value="0">全部</option>
                                        <option value="1" selected>上架</option>
                                        <option value="2">下架</option>';
                                }else if($_GET['status']==2){
                                    echo '<option value="0">全部</option>
                                        <option value="1" >上架</option>
                                        <option value="2" selected>下架</option>';
                                }else{
                                    echo '<option value="0" selected>全部</option>
                                        <option value="1" >上架</option>
                                        <option value="2" >下架</option>';
                                }
                                ?>

                            </select>
                        </li>
                        <!--  <li> 商家编号
                             <input type="text" name="name" placeholder="请输入商品编号/关键字" class="input2"/>
                         </li> -->
                        <li>
                            <!-- <button class="sousuo" style="border:0px"></button> -->
                            <button type="submit" class="el-button blue el-button--success is-round">
                                <span> 查询商品 </span>
                            </button>
                        </li>

                        <li><a href="<?= Yii::$service->url->getUrl('water/goods/addclass') ?>" class="">
                                <button type="button" class="el-button green el-button--success is-round">
                                    <span> 添加商品 </span>
                                </button>
                            </a>
                        </li>
                    </ul>
                </form>

                <div class="item">
                    <div class="el-tabs el-tabs--top">
                        <div class="el-tabs__header is-top">
                            <div class="el-tabs__nav-wrap is-top">
                                <div class="el-tabs__nav-scroll">
                                    <div role="tablist" class="el-tabs__nav is-top" style="transform: translateX(0px);">
                                        <!-- <div class="el-tabs__active-bar is-top"  style="width: 92px; transform: translateX(0px);"></div> -->
                                        <style>
                                            .is_active1{
                                                border-bottom: 2px solid #3CACFE;
                                            }
                                            .el-tabs__item a{
                                                color:#303133;
                                            }
                                            .is_active1 a{
                                                color: #30a2fe;
                                            }
                                        </style>
                                        <div style="padding-left:20px;"  class="el-tabs__item is-top <?php echo $_GET['status']==0 ?'is_active1':'';?>">
                                            <a style="" href="<?php echo  Yii::$app->request->getHostInfo().'/'.Yii::$app->request->pathInfo;?>?class=<?=$_GET['class']?>&status=0">全部商品（<?=$tot?>）</a>
                                        </div>
                                        <div class="el-tabs__item is-top <?php echo $_GET['status']==1 ?'is_active1':'';?>">
                                            <a style="" href="<?php echo  Yii::$app->request->getHostInfo().'/'.Yii::$app->request->pathInfo;?>?class=<?=$_GET['class']?>&status=1">上架（<?=$tot1?>）</a>
                                        </div>
                                        <div  class="el-tabs__item is-top <?php echo $_GET['status']==2 ?'is_active1':'';?>">
                                            <a style="" href="<?php echo  Yii::$app->request->getHostInfo().'/'.Yii::$app->request->pathInfo;?>?class=<?=$_GET['class']?>&status=2">下架（<?=$tot-$tot1?>）</a>
                                        </div>

                                        <!--  <div id="tab-second" aria-controls="pane-second" role="tab" tabindex="-1"
                                           class="el-tabs__item is-top">
                                          回收站（1）
                                      </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="el-tabs__content">
                            <div role="tabpanel" id="pane-first" aria-labelledby="tab-first" class="el-tab-pane">
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
                                    </div>
                                    <div class="el-table__header-wrapper">
                                        <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                               style="width: 1012px;">
                                            <colgroup>
                                                <col name="el-table_2_column_7" width="55"/>
                                                <col name="el-table_2_column_8" width="150"/>
                                                <col name="el-table_2_column_9" width="200"/>
                                                <col name="el-table_2_column_10" width="100"/>
                                                <col name="el-table_2_column_11" width="150"/>
                                                <col name="el-table_2_column_12" width="100"/>
                                                <col name="el-table_2_column_13" width="150"/>
                                                <col name="el-table_2_column_14" width="107"/>
                                                <col name="gutter" width="0"/>
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
                                                <th colspan="1" rowspan="1" class="el-table_2_column_8     is-leaf">
                                                    <div class="cell">
                                                        编号
                                                    </div>
                                                </th>
                                                <th colspan="1" rowspan="1" class="el-table_2_column_9     is-leaf">
                                                    <div class="cell">
                                                        商品名称
                                                    </div>
                                                </th>
                                                <th colspan="1" rowspan="1" class="el-table_2_column_10     is-leaf">
                                                    <div class="cell">
                                                        价格/折扣价
                                                    </div>
                                                </th>
                                                <th colspan="1" rowspan="1" class="el-table_2_column_11     is-leaf">
                                                    <div class="cell">
                                                        分类
                                                    </div>
                                                </th>
                                                <th colspan="1" rowspan="1" class="el-table_2_column_12     is-leaf">
                                                    <div class="cell">
                                                        上下架
                                                    </div>
                                                </th>
                                                <th colspan="1" rowspan="1" class="el-table_2_column_13     is-leaf">
                                                    <div class="cell">
                                                        发布时间
                                                    </div>
                                                </th>
                                                <th colspan="1" rowspan="1" class="el-table_2_column_14     is-leaf">
                                                    <div class="cell">
                                                        操作
                                                    </div>
                                                </th>
                                                <th class="gutter" style="width: 0px; display: none;"></th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="el-table__body-wrapper is-scrolling-none">
                                        <table cellspacing="0" cellpadding="0" border="0" class="el-table__body" style="width: 1012px;">
                                            <colgroup>
                                                <col name="el-table_2_column_7" width="55"/>
                                                <col name="el-table_2_column_8" width="150"/>
                                                <col name="el-table_2_column_9" width="200"/>
                                                <col name="el-table_2_column_10" width="100"/>
                                                <col name="el-table_2_column_11" width="150"/>
                                                <col name="el-table_2_column_12" width="100"/>
                                                <col name="el-table_2_column_13" width="150"/>
                                                <col name="el-table_2_column_14" width="107"/>
                                            </colgroup>
                                            <tbody style="font-size: 12px;color:#82898e">
                                            <?php foreach ($goods as $v) { ?>
                                                <tr class="el-table__row">
                                                    <td class="el-table_2_column_7  el-table-column--selection">
                                                        <div class="cell el-tooltip">
                                                            <label role="checkbox" class="el-checkbox">
                                                                <span class="el-checkbox__input">
                                                                    <span class="el-checkbox__inner"></span>
                                                                    <input type="checkbox"  class="el-checkbox__original" value=""/>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="el-table_2_column_8">
                                                        <div class="cell el-tooltip" title="<?= $v["_id"]; ?>">
                                                            <?= $v["_id"]; ?>
                                                        </div>
                                                    </td>
                                                    <td class="el-table_2_column_9">
                                                        <div class="cell el-tooltip">
                                                            <div class="picture" style="background: url('http://img.uekuek.com/media/catalog/product/<?= $v['image']['main']['image'] ?>')no-repeat center center /100% auto">
                                                            </div>
                                                            <div class="contents">
                                                                <div title="<?= $v["sku"] ?>" class="ddd">
                                                                    <span style="color: rgb(186, 190, 193);">货号：</span><?= $v["sku"] ?>
                                                                </div>
                                                                <div title="<?=  $v["name"]["name_zh"] ?>" class="ddd" >
                                                                    <span style="color: rgb(186, 190, 193);">商品名：</span><?= $v["name"]["name_zh"] ?>
                                                                </div>
                                                                <div><span style="color: rgb(186, 190, 193);">运费：</span>按固定运费
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="el-table_2_column_10">
                                                        <div class="cell el-tooltip"
                                                             style="width: 115px;"><?= $v["price"] ?>
                                                            / <?= $v['special_price'] ?></div>
                                                    </td>
                                                    <td class="el-table_2_column_11">
                                                        <div class="cell el-tooltip">
                                                            <?= $v['className'] ?> > <?= $v['class2Name'] ?>
                                                        </div>
                                                    </td>
                                                    <td class="el-table_2_column_12">
                                                        <div class="cell el-tooltip">
                                                            <div role="switch" aria-checked="true"
                                                                 class="el-switch is-checked">
                                                                <a href="<?= Yii::$service->url->getUrl('water/goods/status', array('id' => $v['_id'], 'status' => $v['status'])) ?>">

                                                                    <?php

                                                                    if ($v['status'] == 1) {
                                                                        echo '<span class="el-switch__core" style="width: 40px; border-color: rgb(19, 206, 102); background-color: rgb(19, 206, 102);"></span>';
                                                                    } else {
                                                                        echo '<span class="el-switch__core" style="width: 40px; border-color: rgb(255, 73, 73); background-color: rgb(255, 73, 73);"></span>';
                                                                    }

                                                                    ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="el-table_2_column_13">
                                                        <div class="cell el-tooltip" title="<?= date("Y-m-d H:i:s", $v["created_at"]) ?>" style="width: 146px;">
                                                            <?= date("Y-m-d H:i:s", $v["created_at"]) ?>
                                                        </div>
                                                    </td>
                                                    <td class="el-table_2_column_14">
                                                        <div class="cell el-tooltip">
                                                            <a href="<?= Yii::$service->url->getUrl('water/goods/find', array('id' => $v['_id'])) ?>"
                                                               class="">
                                                                <button type="button"
                                                                        class="el-button el-button--text el-button--small">
                                                                    <span>查看</span></button>
                                                            </a>
                                                            <span style="color: rgb(234, 235, 236);">|</span>
                                                            <a href="<?= Yii::$service->url->getUrl('water/goods/del', array('id' => $v['_id'])) ?>">
                                                                <button type="button"
                                                                        class="el-button el-button--text el-button--small">
                                                                    <span><i style="color: rgb(255, 143, 113);font-style:normal">删除</i></span>
                                                                </button>
                                                            </a>
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
                                    <div style="width: 200px; position: absolute; right: 0px; bottom: 50px; display: flex; justify-content: space-between;">
                                        <div style="display: flex;">
                                            <div class="dian"></div>
                                            总计
                                            <span style="color: rgb(61, 176, 255); font-weight: bolder;margin:0 5px"><?= $tot ?></span>记录
                                        </div>
                                        <div style="display: flex;">
                                            <div class="dian" style="background: rgb(41, 201, 154);"></div>
                                            分
                                            <span style="font-weight: bolder; color: rgb(41, 201, 154);margin:0 5px"><?= $pages ?></span>页
                                        </div>
                                    </div>
                                    <div style="margin-top: 40px;">
                                        <button type="button" class="el-button el-button--default">
                                            <span>全选</span></button>
                                        <button type="button" class="el-button red el-button--danger is-round">

                                            <span>批量删除</span></button>
                                        <button type="button" class="el-button green el-button--success is-round">

                                            <span>导出表格</span></button>
                                        <button type="button" class="el-button blue el-button--primary is-round">

                                            <span>导出图片</span></button>
                                    </div>
                                </div>
                                <div style="width: 100%; position: relative;">
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
                            <div role="tabpanel" aria-hidden="true" id="pane-second" aria-labelledby="tab-second"
                                 class="el-tab-pane" style="display: none;">
                                回收站（1）
                            </div>
                            <div role="tabpanel" aria-hidden="true" id="pane-third" aria-labelledby="tab-third"
                                 class="el-tab-pane" style="display: none;">
                                上架（1）
                            </div>
                            <div role="tabpanel" aria-hidden="true" id="pane-fourth" aria-labelledby="tab-fourth"
                                 class="el-tab-pane" style="display: none;">
                                下架（1）
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


