<div class="box">
    <div class="freeze" style="display: none;">
        <div class="freeze-content">
            <div style="width: 438px; height: 30px; border-bottom: 1px solid rgb(48, 163, 254); color: rgb(48, 163, 254); font-size: 20px; font-weight: bolder;">
                通知
            </div>
            <div class="freeze-content1">
                <div style="height: 40px; font-size: 12px; line-height: 40px;">
                    冻结原因：
                </div>
                <div class="text">
                    您好，由于多名用户投诉，所以在2018年5月20日将商家的店铺资金冻结。
                </div>
                <div class="text">
                    具体冻结原因：
                </div>
                <div class="text">
                    店铺中的交易存在用同一台机器(即同个IP地址)买卖商品,且是同个单位的局域网。
                </div>
                <div class="text">
                    若有疑问可以电话咨询，联系电话：0351-8765432
                </div>
            </div>
            <div class="freeze-content2">
                <div style="height: 40px; line-height: 40px; font-size: 12px;">
                    申请解冻描述：
                </div>
                <textarea cols="50" rows="10" style="border-radius: 5px; resize: none; height: 81px; width: 438px; background: rgb(243, 250, 255);">您好，我公司已将不规范交易进行修改，申请解决冻结账务。</textarea>
            </div>
            <div class="freeze-content3">
                <div style="height: 40px; line-height: 40px; font-size: 12px;">
                    凭证上传：
                </div>
                <input type="file" name="pic" placeholder="上传照片能够提高申请通过率" accept="image/jpg,image/jpeg,image/gif,image/png" />
                <div class="button1" style="float: left;"></div>
            </div>
            <div class="button2" style="float: left; margin-top: 18px;"></div>
            <div class="close"></div>
        </div>
    </div>
    <div class="freeze" style="display: none;">
        <div class="freeze-content">
            <div style="width: 438px; height: 30px; border-bottom: 1px solid rgb(48, 163, 254); color: rgb(48, 163, 254); font-size: 20px; font-weight: bolder;">
                通知
            </div>
            <div class="freeze-content1">
                <div style="height: 40px; font-size: 12px; line-height: 40px;">
                    冻结原因：
                </div>
                <div class="text">
                    您好，由于多名用户投诉，所以在2018年5月20日将商家的店铺冻结。
                </div>
                <div class="text">
                    具体冻结原因：
                </div>
                <div class="text">
                    多名用户投诉商家的商品包装有问题。
                </div>
                <div class="text">
                    若有疑问可以电话咨询，联系电话：0351-8765432
                </div>
            </div>
            <div class="freeze-content2">
                <div style="height: 40px; line-height: 40px; font-size: 12px;">
                    申请解冻描述：
                </div>
                <textarea cols="50" rows="10" style="border-radius: 5px; resize: none; height: 81px; width: 438px; background: rgb(243, 250, 255);">您好，我公司已将不规范交易进行修改，申请解决冻结账务。</textarea>
            </div>
            <div class="freeze-content3">
                <div style="height: 40px; line-height: 40px; font-size: 12px;">
                    凭证上传：
                </div>
                <div style="box-sizing: border-box; padding-left: 15px; font-size: 10px; line-height: 30px; width: 339px; height: 30px; border-radius: 15px; background: rgb(243, 250, 255); float: left; margin-right: 12px;">
                    上传照片能够提高申请通过率
                </div>
                <div class="button1" style="float: left;"></div>
            </div>
            <div class="button2" style="float: left; margin-top: 18px;"></div>
            <div class="close"></div>
        </div>
    </div>
    <div class="aside">
        <div class="logo"></div>
    </div>
    <div class="main-content">
        <div style="width: 1012px; margin: 0px auto;">
            <div class="main-content1">
                <div class="dianpu" style="background: url('<?= Yii::$app->params[img]."/images/".$_SESSION[shop_logo]?>')no-repeat center center /100% auto" alt=""></div>
                <div class="content1-center">
                    <div class="col-box"></div>
                    <div class="name">
                        <?=$shop['shop_name']?>
                    </div>
                    <div class="message1">
                        <div class="jianjie">
                            商家简介:
                        </div>
                        <span title="<?=$shop['shop_description']?>"><?=$shop['shop_description']?></span>
                    </div>
                    <div class="message2">
                        <div class="gonggao">
                            商家公告:
                        </div>
                        <span title="<?=$shop['shop_banner']?>"><?=$shop['shop_banner']?></span>
                    </div>
                </div>
                <div class="content1-right">
                    <div class="name">
                        <div class="col-box"></div>
                        <span style="color: rgb(65, 178, 252);">商家</span>信息
                    </div>
                    <ul class="message3">
                        <li >
                            <div class="gonggao">
                                所属公司：
                            </div> <span ><?=$shop['shop_company_name']?></span></li>
                        <li >
                            <div class="gonggao">
                                负责人：
                            </div> <span ><?=$_SESSION['admin_name']?></span></li>
                        <li >
                            <div class="gonggao">
                                最后一次登录时间：
                            </div> <span ><?php echo date("Y-m-d H:i:s",$_SESSION['time']);?></span></li>
                    </ul>
                </div>
            </div>
            <div class="main-content2">
                <ul class="biaoti">
                    <li data-v-af5b5ab4="">待处理订单（0）</li>
                    <li data-v-af5b5ab4="">退换货订单（0）</li>
                    <li data-v-af5b5ab4="">当前店铺活动（0）</li>
                    <li data-v-af5b5ab4="">即将到期店铺活动（0）</li>
                    <li data-v-af5b5ab4="">待处理回复评论（0）</li>
                </ul>
                <ul class="item">
                    <li >
                        <div class="item_box">
                            <div class="item_box1">
                                今日成交额
                            </div>
                            <div class="item_box2">
                                10,915.00
                            </div>
                            <div class="item_box3">
                                昨日成交额 8,222.00
                                <div class="jiantou1"></div> 11%
                            </div>
                        </div></li>
                    <li >
                        <div class="item_box">
                            <div class="item_box1">
                                今日成交量
                            </div>
                            <div class="item_box2">
                                1976
                            </div>
                            <div class="item_box3">
                                昨日成交额 8,222.00
                                <div class="jiantou1"></div> 11%
                            </div>
                        </div></li>
                    <li >
                        <div class="item_box">
                            <div class="item_box1">
                                今日下单量
                            </div>
                            <div class="item_box2">
                                1990
                            </div>
                            <div class="item_box3">
                                昨日下单量 8,222.00
                                <div class="jiantou2"></div> 11%
                            </div>
                        </div></li>
                    <li >
                        <div class="item_box">
                            <div class="item_box1">
                                今日退货量
                            </div>
                            <div class="item_box2">
                                30
                            </div>
                            <div class="item_box3">
                                昨日退货量 8,222.00
                                <div class="jiantou3"></div> 11%
                            </div>
                        </div></li>
                    <li >
                        <div class="item_box">
                            <div class="item_box1">
                                今日点击量
                            </div>
                            <div class="item_box2">
                                3919
                            </div>
                            <div class="item_box3">
                                昨日点击量 8,222.00
                                <div class="jiantou1"></div> 11%
                            </div>
                        </div></li>
                </ul>
            </div>
            <div class="main-content3">
                <div style="font-size: 12px; line-height: 46px; border-bottom: 1px solid rgb(48, 162, 254);">
                    <span style="margin-left: 17px; color: rgb(153, 202, 254);">最近一周销售量趋势</span>
                </div>
                <div class="zhexian"></div>
                <div style="font-size: 12px; line-height: 46px; border-bottom: 1px solid rgb(48, 162, 254);">
                    <span style="margin-left: 17px; color: rgb(153, 202, 254);">最近一周单品销量排名</span>
                    <div style="float: right;">
                        <label role="radio" aria-checked="true" tabindex="0" class="el-radio is-checked"><span class="el-radio__input is-checked"><span class="el-radio__inner"></span><input type="radio" aria-hidden="true" tabindex="-1" class="el-radio__original" value="1" /></span><span class="el-radio__label">按销售量排名
                                <!----></span></label>
                        <label role="radio" tabindex="0" class="el-radio"><span class="el-radio__input"><span class="el-radio__inner"></span><input type="radio" aria-hidden="true" tabindex="-1" class="el-radio__original" value="2" /></span><span class="el-radio__label">按销售额排名
                                <!----></span></label>
                    </div>
                </div>
                <div >
                    <div class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition" style="width: 100%;">
                        <div class="hidden-columns">
                            <div ></div>
                            <div ></div>
                            <div ></div>
                            <div ></div>
                            <div ></div>
                            <div ></div>
                        </div>
                        <div class="el-table__header-wrapper">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__header" style="width: 1064px;">
                                <colgroup>
                                    <col name="el-table_2_column_11" width="80" />
                                    <col name="el-table_2_column_12" width="146" />
                                    <col name="el-table_2_column_13" width="400" />
                                    <col name="el-table_2_column_14" width="146" />
                                    <col name="el-table_2_column_15" width="146" />
                                    <col name="el-table_2_column_16" width="146" />
                                    <col name="gutter" width="0" />
                                </colgroup>
                                <thead class="has-gutter">
                                <tr style="font-size: 14px;color: #a4adb5;">
                                    <th colspan="1" rowspan="1" class="el-table_2_column_11     is-leaf">
                                        <div class="cell">
                                            排名
                                        </div></th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_12     is-leaf">
                                        <div class="cell">
                                            货号
                                        </div></th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_13     is-leaf">
                                        <div class="cell">
                                            商品名称
                                        </div></th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_14     is-leaf">
                                        <div class="cell">
                                            销售量（件）
                                        </div></th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_15     is-leaf">
                                        <div class="cell">
                                            销售额（元）
                                        </div></th>
                                    <th colspan="1" rowspan="1" class="el-table_2_column_16     is-leaf">
                                        <div class="cell">
                                            均价（元）
                                        </div></th>
                                    <th class="gutter" style="width: 0px; display: none;"></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="el-table__body-wrapper is-scrolling-none">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__body" style="width: 1064px;">
                                <colgroup>
                                    <col name="el-table_2_column_11" width="80" />
                                    <col name="el-table_2_column_12" width="146" />
                                    <col name="el-table_2_column_13" width="400" />
                                    <col name="el-table_2_column_14" width="146" />
                                    <col name="el-table_2_column_15" width="146" />
                                    <col name="el-table_2_column_16" width="146" />
                                </colgroup>
                                <tbody style="font-size: 12px;color: #82898e">
                                <tr class="el-table__row">
                                    <td class="el-table_2_column_11  ">
                                        <div class="cell">
                                            1
                                        </div></td>
                                    <td class="el-table_2_column_12  ">
                                        <div class="cell">
                                            ECS00103
                                        </div></td>
                                    <td class="el-table_2_column_13  ">
                                        <div class="cell">
                                            JOMOO九牧精铜单冷快开水龙头洗衣机快开水龙头自来水嘴
                                        </div></td>
                                    <td class="el-table_2_column_14  ">
                                        <div class="cell">
                                            1002
                                        </div></td>
                                    <td class="el-table_2_column_15  ">
                                        <div class="cell">
                                            10,915
                                        </div></td>
                                    <td class="el-table_2_column_16  ">
                                        <div class="cell">
                                            119.99
                                        </div></td>
                                </tr>
                                <tr class="el-table__row">
                                    <td class="el-table_2_column_11  ">
                                        <div class="cell">
                                            2
                                        </div></td>
                                    <td class="el-table_2_column_12  ">
                                        <div class="cell">
                                            ECS00103
                                        </div></td>
                                    <td class="el-table_2_column_13  ">
                                        <div class="cell">
                                            JOMOO九牧精铜单冷快开水龙头洗衣机快开水龙头自来水嘴
                                        </div></td>
                                    <td class="el-table_2_column_14  ">
                                        <div class="cell">
                                            1002
                                        </div></td>
                                    <td class="el-table_2_column_15  ">
                                        <div class="cell">
                                            10,915
                                        </div></td>
                                    <td class="el-table_2_column_16  ">
                                        <div class="cell">
                                            119.99
                                        </div></td>
                                </tr>
                                <tr class="el-table__row">
                                    <td class="el-table_2_column_11  ">
                                        <div class="cell">
                                            3
                                        </div></td>
                                    <td class="el-table_2_column_12  ">
                                        <div class="cell">
                                            ECS00103
                                        </div></td>
                                    <td class="el-table_2_column_13  ">
                                        <div class="cell">
                                            JOMOO九牧精铜单冷快开水龙头洗衣机快开水龙头自来水嘴
                                        </div></td>
                                    <td class="el-table_2_column_14  ">
                                        <div class="cell">
                                            1002
                                        </div></td>
                                    <td class="el-table_2_column_15  ">
                                        <div class="cell">
                                            10,915
                                        </div></td>
                                    <td class="el-table_2_column_16  ">
                                        <div class="cell">
                                            119.99
                                        </div></td>
                                </tr>
                                <tr class="el-table__row">
                                    <td class="el-table_2_column_11  ">
                                        <div class="cell">
                                            4
                                        </div></td>
                                    <td class="el-table_2_column_12  ">
                                        <div class="cell">
                                            ECS00103
                                        </div></td>
                                    <td class="el-table_2_column_13  ">
                                        <div class="cell">
                                            JOMOO九牧精铜单冷快开水龙头洗衣机快开水龙头自来水嘴
                                        </div></td>
                                    <td class="el-table_2_column_14  ">
                                        <div class="cell">
                                            1002
                                        </div></td>
                                    <td class="el-table_2_column_15  ">
                                        <div class="cell">
                                            10,915
                                        </div></td>
                                    <td class="el-table_2_column_16  ">
                                        <div class="cell">
                                            119.99
                                        </div></td>
                                </tr>
                                <tr class="el-table__row">
                                    <td class="el-table_2_column_11  ">
                                        <div class="cell">
                                            5
                                        </div></td>
                                    <td class="el-table_2_column_12  ">
                                        <div class="cell">
                                            ECS00103
                                        </div></td>
                                    <td class="el-table_2_column_13  ">
                                        <div class="cell">
                                            JOMOO九牧精铜单冷快开水龙头洗衣机快开水龙头自来水嘴
                                        </div></td>
                                    <td class="el-table_2_column_14  ">
                                        <div class="cell">
                                            1002
                                        </div></td>
                                    <td class="el-table_2_column_15  ">
                                        <div class="cell">
                                            10,915
                                        </div></td>
                                    <td class="el-table_2_column_16  ">
                                        <div class="cell">
                                            119.99
                                        </div></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="el-table__column-resize-proxy" style="display: none;"></div>
                    </div>
                </div>
                <div >
                    <div style="width: 200px; float: right; margin-top: 28px; display: flex; justify-content: space-between;">
                        <div style="display: flex;">
                            <div class="dian"></div> 总计
                            <span style="color: rgb(61, 176, 255); font-weight: bolder;margin:0 5px;">206</span>记录
                        </div>
                        <div style="display: flex;">
                            <div class="dian" style="background: rgb(41, 201, 154);"></div> 分
                            <span style="font-weight: bolder; color: rgb(41, 201, 154);margin:0 5px">82</span>页
                        </div>
                    </div>
                    <button type="button" class="el-button green el-button--success is-round" style="padding:0;">
                        <span>导出表格</span></button>
                </div>
                <div >
                    <div style="width: 400px; font-size: 12px; float: right; display: flex; justify-content: space-between;">
                        <div class="button_left">
                            首页
                        </div>
                        <div class="el-pagination">
                            <button type="button" disabled="disabled" class="btn-prev"><i class="el-icon el-icon-arrow-left"></i></button>
                            <ul class="el-pager">
                                <li class="number active">1</li>
                                <!---->
                                <li class="number">2</li>
                                <li class="number">3</li>
                                <li class="number">4</li>
                                <!---->
                                <li class="number">5</li>
                            </ul>
                            <button type="button" class="btn-next"><i class="el-icon el-icon-arrow-right"></i></button>
                        </div>
                        <div class="button_right">
                            末页
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

    .close {
        position: absolute;
        top: 17px;
        right: 18px;
        width: 14px;
        height: 14px;
        background: url("/public/img/close.png") no-repeat center center/100% auto;
    }
    .main-content1 {
        width: 100%;
        height: 135px;
        margin-bottom: 27px;
    }

    .main-content .col-box {
        width: 11px;
        height: 5px;
        border-radius: 3px;
        margin-left: 1px;
        margin-top: 9px;
        margin-right: 7px;
        background-color: #37e06f;
        box-shadow: 0 0 2px #37e06f;
    }

    .main-content1 .dianpu {
        float: left;
        width: 129px;
        height: 129px;
        border: 3px solid #eee;
    }
    .main-content1 .dianpu img{
        width:100%;
        height:100%;
    }

    .main-content1 .content1-center {
        float: left;
        width: 430px;
        height: 135px;
        border-right: 1px solid #30a2fe;
        padding-left: 25px;
        padding-right: 26px;
        box-sizing: border-box;
    }

    .main-content1 .name {
        height: 24px;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 24px;
        margin-left: 7px;
        line-height: 24px;
    }

    .main-content1 .message1 {
        width: 360px;
        height: 46px;
        font-size: 12px;
        color: #bdc3c9;
        margin-left: 20px;
        line-height: 23px;
    }

    .main-content1 .message1 span {
        width: 296px;
        height: 46px;
        line-height: 23px;
        overflow: hidden;
        /*转换为webkit内核浏览器中的盒子*/
        display: -webkit-box;
        /*需要几行就写几*/
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .main-content1 .message2 {
        width: 360px;
        height: 42px;
        line-height: 40px;
        font-size: 12px;
        color: #bdc3c9;
        margin-left: 20px;
    }

    .main-content1 .message2 span {
        display: inline-block;
        width: 296px;
        height: 40px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .message1 .jianjie {
        width: 64px;
        height: 100%;
        font-size: 12px;
        line-height: 22px;
        font-weight: bold;
        color: #82898e;
        float: left;
    }

    .message2 .gonggao {
        width: 64px;
        height: 100%;
        font-size: 12px;
        line-height: 40px;
        font-weight: bold;
        color: #82898e;
        float: left;
    }


    .main-content1 .content1-right {
        float: left;
        width: 420px;
        height: 135px;
        padding-left: 26px;
        box-sizing: border-box;
    }

    .content1-right .message3 {
        font-size: 12px;
        height: 75px;
        color: #bdc3c9;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .message3 li {
        width: 100%;
        height: 18px;
        line-height: 18px;
    }

    .message3 .gonggao {
        height: 100%;
        font-size: 12px;
        line-height: 18px;
        font-weight: bold;
        color: #82898e;
        float: left;
    }

    .main-content2 {
        width:100%;
    }
    .main-content2 .biaoti {
        display: flex;
        justify-content: space-around;
        line-height: 48px;
        font-size: 14px;
        background: #eaf6ff;
        font-weight: bolder;
        cursor: pointer;
    }

    .main-content2 .item {
        margin-top: 28px;
        display: flex;
        justify-content: space-between;
    }

    .item .item_box {
        width: 190px;
        height: 114px;
        border-radius: 5px;
        box-shadow: 0 0 15px 2px #eee;
        padding-left: 17px;
        padding-top: 10px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    .item_box .item_box1 {
        height: 30px;
        font-size: 16px;
        color: #82898e;
        line-height: 30px;
        font-weight: bold;
    }

    .item_box .item_box2 {
        height: 38px;
        font-size: 22px;
        color: #30a2fe;
        line-height: 38px;
        font-weight: bolder;
    }

    .item_box .item_box3 {
        font-size: 10px;
        line-height: 36px;
        color: #bdc4c9;
    }

    .item_box .jiantou1 {
        margin-left:10px;
        display: inline-block;
        width: 14px;
        height: 14px;
        background: url("/public/img/jiantou1.png") no-repeat center center/100% auto;
    }

    .item_box .jiantou2 {
        margin-left:10px;
        display: inline-block;
        width: 14px;
        height: 14px;
        background: url("/public/img/jiantou2.png") no-repeat center center/100% auto;
    }

    .item_box .jiantou3 {
        margin-left:10px;
        display: inline-block;
        width: 14px;
        height: 14px;
        background: url("/public/img/jiantou3.png") no-repeat center center/100% auto;
    }

    .main-content3 {
        width:100%;
    }

    .main-content3 .dian {
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background: #3db0ff;
        box-shadow: 0 0 2px #3db0ff;
        margin-top: 10px;
        margin-right: 5px;
    }


    .freeze {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3);
        z-index: 999;
    }

    .freeze .freeze-content {
        width: 500px;
        height: 456px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        background: white;
        border-radius: 5px;
        padding-top: 23px;
        padding-left: 29px;
    }

    .freeze .freeze-content1 {
        width: 438px;
        height: 135px;
        border-bottom: 1px solid #e5e5e5;
        margin-bottom: 5px;
    }

    .freeze-content1 .text {
        font-size: 10px;
        line-height: 20px;
    }

    .freeze-content3 .button1 {
        width: 82px;
        height: 30px;
        background: url("/public/img/button1.png") no-repeat center center/100% auto;
    }

    .freeze .button2 {
        width: 90px;
        height: 30px;
        background: url("/public/img/button2.png") no-repeat center center/100% auto;
    }

    .zhexian {
        width: 1012px;
        height: 370px;
        background: url("/public/img/zhexiantu.png") no-repeat center center/100% auto;
    }

    .green {
        margin-top: 41px;
        width: 88px;
        height: 26px;
        background: #37DF73;
        border: none;
        box-shadow: 0 0 5px #37DF73;
        padding-top: 8px;
        padding-left: 18px;
    }

</style>