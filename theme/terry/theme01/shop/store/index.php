<style>
    .content {
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        padding-top: 8px;
    }

    .address {
        display: flex;
        align-items: center;
    }

    .address select {
        height: 30px;
        border-radius: 20px;
        border: 2px solid #e5eff8;
        background: #f3faff;
        outline: none;
        width: 200px;
        padding-left: 10px;
        letter-spacing: 2px;
    }

    .address select:hover {
        border-color: #c0c4cc;
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

    .content .item .col-box {
        width: 12px;
        height: 7px;
        border-radius: 5px;
        margin-top: 17px;
        margin-left: 10px;
        margin-right: 7px;
        background-color: #37e06f;
    }

    .content .item .bottom {
        width: 100%;
    }

    .content .item .bottom1 {
        width: 100%;
    }

    .content .item .bottom2 {
        width: 100%;
    }

    .bottom .title {
        width: 100%;
        line-height: 46px;
        font-size: 12px;
        padding-left: 22px;
        border-bottom: 1px solid #eee;
    }

    .bottom1 .title1 {
        width: 100%;
        line-height: 46px;
        font-size: 12px;
        padding-left: 22px;
        /*border-bottom: 1px solid #eee;*/
    }

    .bottom .title .zhizhao1 {
        width: 272px;
        height: 159px;
        background: url("/public/img/shop1.png");
    }

    .bottom .title .zhizhao2 {
        width: 272px;
        height: 159px;
        background: url("/public/img/shop2.png");
    }
    .zhizhao-img{
        width: 100%;
        height: 100%;
    }
    .title .details {
        width: 600px;
        height: 120px;
        outline: none;
        resize: none;
        border-radius: 5px;
        background: #f3faff;
        border: 2px solid #e5eff8;
    }

    .content .red {
        height: 33px;
        background: #FD5E4E;
        border: none;
        box-shadow: 0 0 8px #FD5E4E;
    }

    .content .green {
        height: 33px;
        background: #37DF73;
        border: none;
        box-shadow: 0 0 8px #37DF73;
        padding-top: 10px;
    }
</style>

<div data-v-4ce00a5c="" class="main-content">
    <div data-v-4ce00a5c="" style="width: 1064px; margin: 0px auto;">
        <div data-v-3bfc0387="" data-v-4ce00a5c="">
            <div data-v-3bfc0387="" class="content">
                <div data-v-3bfc0387="" class="biaoti">
                    <div data-v-3bfc0387="" aria-label="Breadcrumb" role="navigation" class="el-breadcrumb">
                        <span data-v-3bfc0387="" class="el-breadcrumb__item"><span role="link"
                                                                                   class="el-breadcrumb__inner is-link">店铺管理</span><span
                                    role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
                        <span data-v-3bfc0387="" class="el-breadcrumb__item" aria-current="page"><span role="link"
                                                                                                       class="el-breadcrumb__inner"><span
                                        data-v-3bfc0387=""
                                        style="color: rgb(48, 211, 102); font-weight: bolder;">店铺信息</span></span><span
                                    role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
                    </div>
                </div>
                <div data-v-3bfc0387="" class="item">
                    <div data-v-3bfc0387="" class="bottom">
                        <div data-v-3bfc0387=""
                             style="width: 328px; height: 42px; line-height: 42px; font-size: 18px; font-weight: bolder;">
                            <div data-v-3bfc0387="" class="col-box"></div>
                            <span data-v-3bfc0387="" style="color: rgb(48, 163, 254);">基本</span>信息
                        </div>
                        <div data-v-3bfc0387="" class="title">
                            <form data-v-3bfc0387="" class="el-form"
                                  action="<?= Yii::$service->url->getUrl("/shop/store/editinfo") ?>" enctype="multipart/form-data" method="post">
                                <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>" />
                                <input type="hidden" name="uid" value="<?= $res["uid"] ?>">
                                <div data-v-3bfc0387="" class="el-row" style="width: 500px;">
                                    <div data-v-3bfc0387="" class="el-form-item">
                                        <label class="el-form-item__label" style="width: 100px;">公司名称</label>
                                        <div class="el-form-item__content" style="margin-left: 100px;">
                                            <div data-v-3bfc0387="">
                                                <?= $res["shop_company_name"] ?>
                                            </div>
                                            <!---->
                                        </div>
                                    </div>
                                    <div data-v-3bfc0387="" class="el-form-item">
                                        <label class="el-form-item__label" style="width: 100px;">*店铺名称</label>
                                        <div class="el-form-item__content" style="margin-left: 100px;">
                                            <div data-v-3bfc0387="" class="el-input">
                                                <!---->
                                                <input disabled type="text" autocomplete="off"
                                                       class="el-input__inner" value="<?= $res["shop_name"] ?>"
                                                       name="shop_name"/>
                                                <!---->
                                                <!---->
                                                <!---->
                                            </div>
                                            <!---->
                                        </div>
                                    </div>
                                    <div data-v-3bfc0387="" class="el-form-item">
                                        <label class="el-form-item__label" style="width: 100px;">*店铺关键字</label>
                                        <div class="el-form-item__content" style="margin-left: 100px;">
                                            <div data-v-3bfc0387="" class="el-input">
                                                <!---->
                                                <input type="text" autocomplete="off" placeholder="洗衣、洗鞋、洗家纺、洗窗帘、袋洗"
                                                       class="el-input__inner" name="shop_keywords"
                                                       value="<?= $res["shop_keywords"] ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-3bfc0387="" class="el-form-item">
                                        <label class="el-form-item__label" style="width: 100px;">店铺公告</label>
                                        <div class="el-form-item__content" style="margin-left: 100px;">
                                            <textarea data-v-3bfc0387="" id="" cols="30" rows="10"
                                                      placeholder="店铺新开张，2018.5.20-2018.5.23所有商品打8折" class="details"
                                                      name="shop_banner"><?= $res["shop_banner"] ?></textarea>
                                        </div>
                                    </div>
                                    <div data-v-3bfc0387="" class="el-form-item">
                                        <label class="el-form-item__label" style="width: 100px;">店铺简介</label>
                                        <div class="el-form-item__content" style="margin-left: 100px;">
                                            <textarea data-v-3bfc0387="" id="" cols="30" rows="10"
                                                      placeholder="灯具千种热销款式，厂家一站式供货，自由退换货。专业人士上门安装，服务到家。"
                                                      class="details"
                                                      name="shop_description"><?= $res["shop_description"] ?></textarea>
                                        </div>
                                    </div>
<!--                                    <div data-v-3bfc0387="" class="el-form-item">-->
<!--                                        <label class="el-form-item__label" style="width: 100px;">*营业执照</label>-->
<!--                                        <div class="el-form-item__content" style="margin-left: 100px;">-->
<!--                                            <div data-v-3bfc0387=""-->
<!--                                                 style="width: 600px; display: flex; justify-content: space-between;">-->
<!--                                                <input type="file" name="file" style="display: none" class="file">-->
<!--                                                <div data-v-3bfc0387="" class="zhizhao1">-->
<!---->
<!--                                                </div>-->
<!--                                                <div data-v-3bfc0387="" class="zhizhao2">-->
<!--                                                    -->
                                    <?php
//                                                        if($res["business_licence_number_electronic"]){
//                                                            echo "<img src='".$res["business_licence_number_electronic"]."' class='zhizhao-img'/>";
//                                                        }
//                                                    ?>
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <!---->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                        </div>
                    </div>
                    <div data-v-3bfc0387="" class="bottom1">
                        <div data-v-3bfc0387=""
                             style="width: 328px; height: 42px; line-height: 42px; font-size: 18px; font-weight: bolder;">
                            <div data-v-3bfc0387="" class="col-box"></div>
                            <span data-v-3bfc0387="" style="color: rgb(48, 163, 254);">联系</span>方式
                        </div>
                        <div data-v-3bfc0387="" class="title1">
                            <div data-v-3bfc0387="" class="el-row" style="width: 500px;">
                                <div data-v-3bfc0387="" class="el-form-item">
                                    <label class="el-form-item__label" style="width: 100px;">*联系方式</label>
                                    <div class="el-form-item__content" style="margin-left: 100px;">
                                        <div data-v-3bfc0387="" class="el-input">
                                            <!---->
                                            <input type="text" autocomplete="off" placeholder="13567890765"
                                                   class="el-input__inner" name="shop_phone"
                                                   value="<?= $res["shop_phone"] ?>"/>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                                <div data-v-3bfc0387="" class="el-form-item address">
                                    <label class="el-form-item__label" style="width: 100px;">*所在省份</label>
                                    <select type="text" readonly="readonly" class="" name="province_id"
                                            value="<?= $res["province_id"] ?>"></select>
                                </div>
                                <div data-v-3bfc0387="" class="el-form-item address">
                                    <label class="el-form-item__label" style="width: 100px;">*所在城市</label>
                                    <select type="text" readonly="readonly" class="" name="city_id"
                                            value="<?= $res["city_id"] ?>"></select>
                                </div>
                                <div data-v-3bfc0387="" class="el-form-item address">
                                    <label class="el-form-item__label" style="width: 100px;">*所在区/县</label>
                                    <select type="text" readonly="readonly" class="" name="district_id"
                                            value="<?= $res["district_id"] ?>"></select>
                                </div>
                                <div data-v-3bfc0387="" class="el-form-item">
                                    <label class="el-form-item__label" style="width: 100px;">*详细地址</label>
                                    <div class="el-form-item__content" style="margin-left: 100px;">
                                        <div data-v-3bfc0387="" class="el-input">
                                            <!---->
                                            <input type="text" autocomplete="off" placeholder="东北旺东路4号泰山大厦"
                                                   class="el-input__inner" name="shop_address"
                                                   value="<?= $res[shop_address] ?>"/>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                    <div data-v-3bfc0387="" class="bottom2">-->
<!--                        <div data-v-3bfc0387=""-->
<!--                             style="width: 328px; height: 42px; line-height: 42px; font-size: 18px; font-weight: bolder;">-->
<!--                            <div data-v-3bfc0387="" class="col-box"></div>-->
<!--                            <span data-v-3bfc0387="" style="color: rgb(48, 163, 254);">审核</span>状态-->
<!--                        </div>-->
<!--                        <div data-v-3bfc0387="" class="title2">-->
<!--                            <div data-v-3bfc0387="" class="el-row" style="width: 500px;">-->
<!--                                <div data-v-3bfc0387="" class="el-form-item">-->
<!--                                    <label class="el-form-item__label" style="width: 100px;">审核状态</label>-->
<!--                                    <div class="el-form-item__content" style="margin-left: 100px;">-->
<!--                                        <div data-v-3bfc0387="">-->
<!--                                            资料审核成功，店铺申请成功。-->
<!--                                        </div>-->
<!--                                        -->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div data-v-3bfc0387="" class="el-form-item" style="width: 800px;">-->
<!--                                    <label class="el-form-item__label" style="width: 100px;">注意</label>-->
<!--                                    <div class="el-form-item__content" style="margin-left: 100px;">-->
<!--                                        <div data-v-3bfc0387="">-->
<!--                                            修改提交后，会重新审核，请慎重填写提交。如需要改入住信息，请点击更改按钮。-->
<!--                                        </div>-->
<!--                                        <button data-v-3bfc0387="" type="button"-->
<!--                                                class="el-button green el-button--success is-round">-->
<!--                                            <span>更改入驻信息</span></button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div data-v-3bfc0387="" style="float: right;margin: 20px 0">
                        <button data-v-3bfc0387="" type="submit" class="el-button green el-button--success is-round">
                            <!---->
                            <!----><span>提交</span></button>
                        <button data-v-3bfc0387="" type="button" class="el-button red el-button--danger is-round">
                            <!---->
                            <!----><span>取消</span></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var province = JSON.parse('<?php echo json_encode($province); ?>');
    var city = JSON.parse('<?php echo json_encode($city); ?>');
    var district = JSON.parse('<?php echo json_encode($district); ?>');

    var selPro = document.querySelector("[name=province_id]");
    var selCity = document.querySelector("[name=city_id]");
    var selDistrict = document.querySelector("[name=district_id]");
    province.forEach(function (val) {
        var option = document.createElement("option");
        option.value = val["province_id"];
        option.innerHTML = val["province_name"];
        if (val["province_id"] == '<?= $res["province_id"] ?>') {
            option.selected = "selected";
        }
        selPro.appendChild(option);
    });
    selPro.onchange = function () {
        selCity.innerHTML = '<option style="display: none">请选择城市</option>';
        selDistrict.innerHTML = '<option style="display: none">请选择县区</option>';
        city.filter(function (val) {
            return selPro.value == val.province_id;
        }).forEach(function (val) {
            var option = document.createElement("option");
            option.value = val["city_id"];
            option.innerHTML = val["city_name"];
            selCity.appendChild(option);
        });
    }
    city.filter(function (val) {
        return selPro.value == val.province_id
    }).forEach(function (val) {
        var option = document.createElement("option");
        option.value = val["city_id"];
        option.innerHTML = val["city_name"];

        if (val["city_id"] == "<?= $res['city_id'] ?>") {
            option.selected = "selected";
        }
        selCity.appendChild(option);
    });
    selCity.onchange = function () {
        selDistrict.innerHTML = '<option style="display: none">请选择区县</option>';
        district.filter(function (val) {
            return selCity.value == val.city_id;
        }).forEach(function (val) {
            var option = document.createElement("option");
            option.value = val["district_id"];
            option.innerHTML = val["district_name"];
            selDistrict.appendChild(option);
        });
    }
    district.filter(function (val) {
        return selCity.value == val.city_id;
    }).forEach(function (val) {
        var option = document.createElement("option");
        option.value = val["district_id"];
        option.innerHTML = val["district_name"];

        if (val["district_id"] == "<?= $res['district_id'] ?>") {
            option.selected = "selected";
        }
        selDistrict.appendChild(option);
    });

    var file = document.querySelector(".file");
    var zhizhao = document.querySelector(".zhizhao2");

    zhizhao.onclick = function(){
    	file.click();
		
    };	
    file.onchange = function(){
    	var reader = new FileReader();
        reader.readAsDataURL(file.files[0]);
        reader.onloadend = function(e){
            str = `<img src="${e.target.result}" class="zhizhao-img"/ >`;
            zhizhao.innerHTML = str;
        }
    }

</script>