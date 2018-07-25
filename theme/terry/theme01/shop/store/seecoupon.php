<style>
    .demo-input {
        padding-left: 10px;
        height: 30px;
        min-width: 300px;
        line-height: 38px;
        border: 1px solid #e6e6e6;
        background-color: #f3faff;
        border-radius: 30px;
        outline: none;
    }

    .demo-input:hover {
        border-color: #c0c4cc;
    }

    .demo-input:focus {
        border-color: #3CACFE;
    }

    .main-content .biaoti {
        height: 52px;
        font-size: 12px;
        line-height: 52px;
        font-weight: bolder;
    }

    .main-content .bottom {
        width: 100%;
    }

    .title .shuaixuan {
        margin-top: 15px;
        display: flex;
    }

    .left_box {
        width: 309px;
        max-height: 333px;
        background: #f8fcff;
        border: 2px solid #ebf6ff;
        padding: 20px 0 20px 17px;
        overflow: auto;
    }

    .title .shuaixuan .shuaixuan_top {
        line-height: 55px;
        font-size: 14px;
        color: #9bd2fd;
    }

    .bottom .jiantou {
        width: 42px;
        height: 14px;
        margin-top: 33px;
        background: url("../../assets/img/jiantou.png");
    }

    .shuaixuan_bottom .danxuan {
        width: 20px;
        height: 20px;
        font-size: 12px;
    }

    .main-content .red {
        height: 35px;
        background: #FD5E4E;
        border: none;
        box-shadow: 0 0px 8px #FD5E4E;
    }

    .main-content .green {
        height: 35px;
        background: #37DF73;
        border: none;
        box-shadow: 0 0px 8px #37DF73;
        margin-right: 20px;
    }

    .el-form-item {
        /*line-height: 40px;*/
    }

    .el-form-item__content {
        line-height: normal;
    }
</style>

<div data-v-63f72479="" class="main-content">
    <div data-v-63f72479="" style="width: 1064px; margin: 0px auto;">
        <div data-v-63f72479="" class="biaoti">
            <div data-v-63f72479="" aria-label="Breadcrumb" role="navigation" class="el-breadcrumb"><span
                        data-v-63f72479="" class="el-breadcrumb__item"><span role="link"
                                                                             class="el-breadcrumb__inner is-link">店铺管理</span><span
                            role="presentation" class="el-breadcrumb__separator">·</span></span> <span
                        data-v-63f72479="" class="el-breadcrumb__item">
                        <a href="<?= Yii::$service->url->geturl("/shop/store/couponindex") ?>">
                            <span role="link" class="el-breadcrumb__inner">优惠券管理</span>
                        </a>
                    <span role="presentation" class="el-breadcrumb__separator">·</span></span> <span
                        data-v-63f72479="" class="el-breadcrumb__item" aria-current="page"><span role="link"
                                                                                                 class="el-breadcrumb__inner"><span
                                data-v-63f72479=""
                                style="color: rgb(48, 211, 102); font-weight: bolder;">优惠券详情</span></span><span
                            role="presentation" class="el-breadcrumb__separator">·</span></span></div>
        </div>
        <div data-v-63f72479="" class="bottom">
            <div data-v-63f72479="" class="title">
                <form data-v-63f72479="" method="post" action="<?= Yii::$service->url->geturl("/shop/store/addcou") ?>"
                      class="el-form" enctype="application/x-www-form-urlencoded">
                    <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>"/>
                    <div data-v-63f72479="" class="el-row" style="width: 850px;">
                        <div data-v-63f72479="" class="el-form-item"><label class="el-form-item__label"
                                                                            style="width: 150px;">优惠券名称</label>
                            <div class="el-form-item__content" style="margin-left: 150px;">
                                <div data-v-63f72479="" class="el-input" style="width: 500px;"><!----><input
                                            value="<?= $res["coupon_name"] ?>" disabled type="text" name="coupon_name"
                                            autocomplete="off"
                                            placeholder="名称可输入20个字符，支持输入中文、字母、数字、_、/和小数点"
                                            class="el-input__inner">
                                </div>
                            </div>
                        </div>
                        <div data-v-63f72479="" class="el-form-item"><label class="el-form-item__label"
                                                                            style="width: 150px;">有效时间段</label>
                            <div class="el-form-item__content" style="margin-left: 150px;">
                                <input value="<?= date("Y-m-d H:i:s", $res["start_date"]) ?> 至 <?= date("Y-m-d H:i:s", $res["expiration_date"]) ?> "
                                       disabled type="text" name="data" class="demo-input" placeholder="日期时间范围"
                                       id="test10">
                            </div>
                        </div>
                        <div data-v-63f72479="" class="el-form-item"><label class="el-form-item__label"
                                                                            style="width: 150px;">优惠金额</label>
                            <div class="el-form-item__content" style="margin-left: 150px;">
                                <div data-v-63f72479="" class="el-input" style="width: 300px;"><input
                                            value="<?= $res["discount"] ?>" disabled type="text" name="discount"
                                            autocomplete="off"
                                            placeholder=""
                                            class="el-input__inner">
                                </div>
                                <span data-v-63f72479=""
                                      style="color: rgb(155, 210, 253); font-weight: bolder; margin-left: 15px;">单位：元</span>
                            </div>
                        </div>
                        <div data-v-63f72479="" class="el-form-item"><label class="el-form-item__label"
                                                                            style="width: 150px;">消费金额</label>
                            <div class="el-form-item__content" style="margin-left: 150px;">
                                <div data-v-63f72479="" class="el-input" style="width: 300px;"><input
                                            value="<?= $res["conditions"] ?>" disabled type="text" name="conditions"
                                            autocomplete="off"
                                            placeholder=""
                                            class="el-input__inner">
                                </div>
                                <span data-v-63f72479=""
                                      style="color: rgb(155, 210, 253); font-weight: bolder; margin-left: 15px;">单位：元（无门槛请设为0）</span>
                                </div>
                        </div>
                        <div data-v-63f72479="" class="el-form-item">
                            <label class="el-form-item__label" style="width: 150px;">使用范围</label>
                            <div class="el-form-item__content" style="margin-left: 150px;">
                                <div data-v-63f72479="" class="el-input" style="width: 300px;">
                                    <?php if($res["goods"]==0){?>
                                        <input value="全部商品" disabled type="text" name="conditions" autocomplete="off" placeholder="" class="el-input__inner">
                                    <?php }else{ ?>
                                        <div id="info" style="display: none"><?= $res["goods"] ?></div>
                                        <div data-v-63f72479="" class="left_box" style="overflow: auto">
                                            <div data-v-63f72479="" class="shuaixuan_bottom checked-goods">

                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div data-v-63f72479="" class="el-form-item">
                            <label class="el-form-item__label" style="width: 150px;">订单状态</label>
                            <div class="el-form-item__content" style="margin-left: 150px;">
                                <div data-v-63f72479="" class="el-input" style="width: 300px;">
                                    <input <?php
                                        if($res["status"]==0){
                                            echo "value='未审核' style='color:red'";
                                        }else if($res["status"]==2){
                                            echo "value='审核失败' style='color:red'";
                                        }else if($res["expiration_date"]<=time()){
                                            echo "value='失效' style='color:red'";
                                        }else{
                                            echo "value='有效' style='color:rgb(48, 211, 102)'";
                                        }
                                    ?> disabled type="text" name="conditions"
                                              autocomplete="off" placeholder="" class="el-input__inner">
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

    var category = document.querySelector("#info").innerHTML.split("|");
    var checked_goods = document.querySelector(".checked-goods");
    fetch("/shop/store/getgoods1?category="+JSON.stringify(category)).then(function (e) {
        return e.json();
    }).then(function (e) {
        var str="";
        e.forEach(function (val) {
            str += `<div data-v-63f72479="" onclick="dianji(this)">
                                <span class="el-radio__input is-checked">
                                    <span class="el-radio__inner"></span>
                                        <input type="checkbox" name="goods[]" aria-hidden="true" tabindex="-1" class="el-radio__original">
                                    </span>
                                    <span class="el-radio__label">${val["name"]["name_zh"]}</span>
                        </div>`;
        });
        checked_goods.innerHTML=str;
    });
</script>
