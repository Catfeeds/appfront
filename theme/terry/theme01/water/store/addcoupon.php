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
        height: 333px;
        background: #f8fcff;
        border: 2px solid #ebf6ff;
        padding-left: 17px;
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
        background: url("/public/img/jiantou.png");
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
                        data-v-63f72479="" class="el-breadcrumb__item"><span role="link" class="el-breadcrumb__inner">优惠券管理</span><span
                            role="presentation" class="el-breadcrumb__separator">·</span></span> <span
                        data-v-63f72479="" class="el-breadcrumb__item" aria-current="page"><span role="link"
                                                                                                 class="el-breadcrumb__inner"><span
                                data-v-63f72479=""
                                style="color: rgb(48, 211, 102); font-weight: bolder;">添加优惠券</span></span><span
                            role="presentation" class="el-breadcrumb__separator">·</span></span></div>
        </div>
        <div data-v-63f72479="" class="bottom">
            <div data-v-63f72479="" class="title">
                <form data-v-63f72479="" method="post" action="<?= Yii::$service->url->geturl("/water/store/addcou") ?>" class="el-form" enctype="application/x-www-form-urlencoded">
                    <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>"/>
                    <div data-v-63f72479="" class="el-row" style="width: 850px;">
                        <div data-v-63f72479="" class="el-form-item"><label class="el-form-item__label"
                                                                            style="width: 150px;">*优惠券名称</label>
                            <div class="el-form-item__content" style="margin-left: 150px;">
                                <div data-v-63f72479="" class="el-input" style="width: 500px;"><!----><input type="text" name="coupon_name"
                                                                                                             autocomplete="off"
                                                                                                             placeholder="名称可输入20个字符，支持输入中文、字母、数字、_、/和小数点"
                                                                                                             class="el-input__inner">
                                    </div>
                            </div>
                        </div>
                        <div data-v-63f72479="" class="el-form-item"><label class="el-form-item__label"
                                                                            style="width: 150px;">*有效时间段</label>
                            <div class="el-form-item__content" style="margin-left: 150px;">
                                <input type="text" name="data" class="demo-input" placeholder="日期时间范围" id="test10">
                            </div>
                        </div>
                        <div data-v-63f72479="" class="el-form-item"><label class="el-form-item__label"
                                                                            style="width: 150px;">*优惠金额</label>
                            <div class="el-form-item__content" style="margin-left: 150px;">
                                <div data-v-63f72479="" class="el-input" style="width: 300px;"><input type="text" name="discount"
                                                                                                             autocomplete="off"
                                                                                                             placeholder=""
                                                                                                             class="el-input__inner">
                                    </div>
                                <span data-v-63f72479=""
                                      style="color: rgb(155, 210, 253); font-weight: bolder; margin-left: 15px;">单位：元</span>
                                </div>
                        </div>
                        <div data-v-63f72479="" class="el-form-item"><label class="el-form-item__label"
                                                                            style="width: 150px;">*消费金额</label>
                            <div class="el-form-item__content" style="margin-left: 150px;">
                                <div data-v-63f72479="" class="el-input" style="width: 300px;"><input type="text" name="conditions"
                                                                                                             autocomplete="off"
                                                                                                             placeholder=""
                                                                                                             class="el-input__inner">
                                    <!----><!----><!----></div>
                                <span data-v-63f72479=""
                                      style="color: rgb(155, 210, 253); font-weight: bolder; margin-left: 15px;">单位：元（无门槛请设为0）</span>
                                <!----></div>
                        </div>
                        <div data-v-63f72479="" class="el-form-item"><label class="el-form-item__label"
                                                                            style="width: 150px;">*使用范围</label>
                            <div class="el-form-item__content" style="margin-left: 150px;"><label data-v-63f72479=""
                                                                                                  role="radio"
                                                                                                  aria-checked="true"
                                                                                                  tabindex="0"
                                                                                                  class="el-radio danxuan xuanze is-checked"><span
                                            class="el-radio__input is-checked"><span
                                                class="el-radio__inner"></span><input name="flag" type="radio"
                                                                                      aria-hidden="true"
                                                                                      tabindex="-1"
                                                                                      class="el-radio__original"
                                                                                      value="1" checked></span><span
                                            class="el-radio__label">全部商品<!----></span></label> <label data-v-63f72479=""
                                                                                                      role="radio"
                                                                                                      tabindex="1"
                                                                                                      class="el-radio danxuan xuanze"><span
                                            class="el-radio__input"><span class="el-radio__inner"></span><input
                                                type="radio" name="flag" aria-hidden="true" tabindex="-1"
                                                class="el-radio__original"
                                                value="2"></span><span class="el-radio__label">指定商品
                                        <!----></span></label>
                                <div data-v-63f72479="" style="display: none;" class="xuanze-view">
                                    <div data-v-63f72479="" class="shuaixuan">
                                        <div data-v-63f72479="" class="left_box">
                                            <div data-v-63f72479="" class="shuaixuan_top">请选择第一级类别</div>
                                            <div data-v-63f72479="" class="shuaixuan_bottom">
                                                <?php foreach ($class as $v) { ?>
                                                    <div data-v-63f72479="" class="checked-class">
                                                            <span class="el-radio__input">
                                                                <span class="el-radio__inner"></span>
                                                                <input type="checkbox" name="goods1[]"
                                                                       tabindex="-1" class="el-radio__original"
                                                                       value="<?= $v["_id"] ?>">
                                                            </span>
                                                            <span class="el-radio__label"><?= $v["name"]["name_zh"] ?></span>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div data-v-63f72479="" class="jiantou"></div>
                                        <div data-v-63f72479="" class="left_box" style="overflow: auto">
                                            <div data-v-63f72479="" class="shuaixuan_top">请选择商品</div>
                                            <div data-v-63f72479="" class="shuaixuan_bottom checked-goods">

                                            </div>
                                        </div>
                                    </div>
                                </div><!----></div>
                        </div>
                    </div>
            </div>
        </div>
        <div data-v-63f72479="" style="float: right;">
            <button data-v-63f72479="" type="submit" class="el-button green el-button--success is-round"><!---->
                <!----><span>发布活动</span></button>
            <a data-v-63f72479="" href="#/ShopCouponEdit" class="">
                <button data-v-63f72479="" type="reset" class="el-button red el-button--danger is-round"><!---->
                    <!----><span>重置</span></button>
            </a></div>
        </form>
    </div>
</div>
</div>
<script>
    // lay('#version').html('-v' + laydate.v);

    //存储商品是否被选中
    var goods = {};
    //日期时间范围
    laydate.render({
        elem: '#test10'
        , type: 'datetime'
        , range: true
        , theme: "#3CACFE"
    });

    $(".xuanze").click(function (a) {
        $(this).children(".el-radio__input").addClass("is-checked").end().siblings().children(".el-radio__input").removeClass("is-checked");
        if ($(this).attr("tabindex") == 0) {
            $(".xuanze-view").css("display", "none");
        } else {
            $(".xuanze-view").css("display", "block");
        }
    });
    var flag = false;
    $(".checked-class").each(function (index,val) {
        goods[$(this).find("input").val()]=[];
    });
    $(".checked-class").click(function (e) {
        if (!flag) {
            if ($(this).find(".el-radio__input").attr("class").indexOf("is-checked") < 0) {
                $(this).find(".el-radio__input").addClass("is-checked");
            } else {
                $(this).find(".el-radio__input").removeClass("is-checked");
            }
            flag = true;
            $(this).find("input").click();
        } else {
            flag = false;
        }
    });

    $(".checked-class").find("input").change(function () {
        var category = [];
        document.querySelectorAll(".checked-class input").forEach(function (val) {
            if ($(val).is(":checked")) {
                category.push(val.value);
            }else {
                goods[val.value]=[];
            }
        });
        fetch("/water/store/getgoods?" + "category=" + JSON.stringify(category)).then(function (e) {
            return e.json();
        }).then(function (e) {
            var str = "";
            e.forEach(function (val) {
                if (goods[val["category"][0]] == undefined) {
                    goods[val["category"][0]] = [];
                }
                goods[val["category"][0]].forEach(function (value) {
                    if (val["_id"]['$oid'] == value) {
                        val.isSel = true;
                        console.log(1);
                    }
                })
            });
            e.forEach(function (val) {
                str += `<div data-v-63f72479="" onclick="dianji(this)">
                                <span class="el-radio__input ${val['isSel'] ? 'is-checked' : ""}">
                                    <span class="el-radio__inner"></span>
                                        <input onclick="gaibian(this,'${val["category"][0]}')" type="checkbox" name="goods[]" aria-hidden="true" tabindex="-1" class="el-radio__original" value="${val['_id']['$oid']}" ${val['isSel'] ? 'checked' : ''}>
                                    </span>
                                    <span class="el-radio__label">${val["name"]["name_zh"]}</span>
                        </div>`;
            });
            $(".checked-goods").html(str);
        });
    });
    var flag1 = false;

    function dianji(ele) {
        if (!flag1) {
            if ($(ele).find(".el-radio__input").attr("class").indexOf("is-checked") < 0) {
                $(ele).find(".el-radio__input").addClass("is-checked");

            } else {
                $(ele).find(".el-radio__input").removeClass("is-checked");
            }
            flag1 = true;
            $(ele).find("input").click();
        } else {
            flag1 = false;
        }
    }

    function gaibian(ele, id) {
        if (($(ele).is(":checked"))) {
            goods[id].push(ele.value);
        } else {
            goods[id] = goods[id].filter(function (val) {
                return val != ele.value;
            });
        }
    }
</script>
