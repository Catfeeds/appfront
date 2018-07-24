<?php

use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="main-content">
    <div style="width: 1064px;margin:0 auto">
        <div class="biaoti">
            <div aria-label="Breadcrumb" role="navigation" class="el-breadcrumb">
                <span class="el-breadcrumb__item"> <span role="link" class="el-breadcrumb__inner is-link">商品管理</span> <span role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
                <span class="el-breadcrumb__item"><span role="link" class="el-breadcrumb__inner"><a href="#/goods" class="">商品列表</a></span><span role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
                <span class="el-breadcrumb__item" aria-current="page"><span role="link" class="el-breadcrumb__inner"><span style="color: rgb(48, 211, 102); font-weight: bolder;">编辑收货人信息</span></span><span role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
            </div>
        </div>
        <div class="item">
            <form class="el-form" action="<?= Yii::$service->url->getUrl('shop/orders/editinfo') ?>" method="post">
                <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>"/>
                <input type="hidden" name="order_id" value="<?= $res["order_id"] ?>"/>
                <div class="el-form-item">
                    <label class="el-form-item__label">姓名：</label>
                    <div class="el-form-item__content" style="margin-left: 100px;">
                        <div class="inputbox el-input">
                            <input name="customer_firstname" type="text" value="<?= $res["customer_firstname"] ?>" class="el-input__inner">
<!--                            <input type="text" name="sku" autocomplete="off" />-->
                        </div>
                    </div>
                </div>
                <div class="el-form-item">
                    <label class="el-form-item__label">手机号：</label>
                    <div class="el-form-item__content" style="margin-left: 100px;">
                        <div class="inputbox el-input">
                            <input name="customer_telephone" type="tel" value="<?= $res["customer_telephone"] ?>" class="el-input__inner">
                            <!-- <input type="text" name="sku" autocomplete="off" />-->
                        </div>
                    </div>
                </div>
                <div class="el-form-item">
                    <label class="el-form-item__label">收货地址：</label>
                    <div class="el-form-item__content" style="margin-left: 100px;">
                        <div class="inputbox el-input">
                            <select name="customer_address_country" class="xiala">
                                <!--                <option style="display: none">请选择省份</option>-->
                            </select>
                            <select name="customer_address_state" class="xiala">
                            </select>
                            <select name="customer_address_city" class="xiala">

                            </select>
                            <div class="details">
                                <input name="customer_address_street1" type="text" placeholder="请填写详细地址" class="input"
                                       value="<?= $res["customer_address_street1"] ?>">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="el-form-item">
                    <label class="el-form-item__label">邮政编码：</label>
                    <div class="el-form-item__content" style="margin-left: 100px;">
                        <div class="inputbox el-input">
                            <input name="customer_address_zip" type="text" value="<?= $res["customer_address_zip"] ?>"  class="el-input__inner">
                        </div>
                    </div>
                </div>
                <div class="el-form-item">
                    <label class="el-form-item__label">电子邮件：</label>
                    <div class="el-form-item__content" style="margin-left: 100px;">
                        <div class="inputbox el-input">
                            <input name="customer_email" type="email" value="<?= $res["customer_email"] ?>"  class="el-input__inner">
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="el-button green el-button--success is-round">
                        <span>提交</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var province = JSON.parse('<?php echo json_encode($province); ?>');
    var city = JSON.parse('<?php echo json_encode($city); ?>');
    var county = JSON.parse('<?php echo json_encode($county); ?>');

    var selPro = document.querySelector("[name=customer_address_country]");
    var selCity = document.querySelector("[name=customer_address_state]");
    var selCounty = document.querySelector("[name=customer_address_city]");
    province.forEach(function (val) {
        var option = document.createElement("option");
        option.value = val["province_id"] + "|" + val["province_name"];
        option.innerHTML = val["province_name"];
        if (val["province_name"] == '<?= $res["customer_address_country"] ?>') {
            option.selected = "selected";
        }
        selPro.appendChild(option);
    });
    selPro.onchange = function () {
        selCity.innerHTML = '<option style="display: none">请选择城市</option>';
        selCounty.innerHTML = '<option style="display: none">请选择县区</option>';
        city.filter(function (val) {
            return selPro.value.split("|")[0] == val.province_id;
        }).forEach(function (val) {
            var option = document.createElement("option");
            option.value = val["city_id"] + "|" + val["city_name"];
            option.innerHTML = val["city_name"];
            selCity.appendChild(option);
        });
    }
    city.filter(function (val) {
        return selPro.value.split("|")[0] == val.province_id
    }).forEach(function (val) {
        var option = document.createElement("option");
        option.value = val["city_id"] + "|" + val["city_name"];
        option.innerHTML = val["city_name"];

        if (val["city_name"] == "<?= $res['customer_address_state'] ?>") {
            option.selected = "selected";
        }
        selCity.appendChild(option);
    });
    selCity.onchange = function () {
        selCounty.innerHTML = "<option style=\"display: none\">请选择区县</option>";
        county.filter(function (val) {
            return selCity.value.split("|")[0] == val.city_id;
        }).forEach(function (val) {
            var option = document.createElement("option");
            option.value = val["district_name"];
            option.innerHTML = val["district_name"];
            selCounty.appendChild(option);
        });
    }
    county.filter(function (val) {
        return selCity.value.split("|")[0] == val.city_id;
    }).forEach(function (val) {
        var option = document.createElement("option");
        option.value = val["district_name"];
        option.innerHTML = val["district_name"];

        if (val["district_name"] == "<?= $res['customer_address_city'] ?>") {
            option.selected = "selected";
        }
        selCounty.appendChild(option);
    });

</script>
<style>
    .main-content .biaoti {
        height: 52px;
        font-size: 12px;
        line-height: 52px;
        font-weight: bolder;
    }

    .main-content .item {
        width: 100%;
    }
    .item .btn{
        background: #37DF73;
        box-shadow:0 0 5px #37DF73;
        outline:none;
        width: 100px;
        height: 33px;
        border-radius: 5px;
    }
    .el-input__inner{
        width: 300px;
    }
    .main-content .item .xiala {
        padding-left: 5px;
        width: 98px;
        outline: none;
        font-size: 12px;
        height: 30px;
        border-radius: 15px;
        background: #f3faff;
        border: 2px solid #e5eff8;
    }
    .item .xiala:hover {
        border-color: #3CACFE;
    }

    .item .details{
        margin-top:15px;
    }
    .main-content .item .input {
        width: 400px;
        height: 30px;
        background: #f3faff;
        border: 2px solid #ecf7ff;
        border-radius: 15px;
        outline: none;
        font-size: 12px;
        padding-left:5px;
    }
    .item .input:hover {
        border-color: #3CACFE;
    }
    .item .green {
        width: 112px;
        height: 33px;
        background: #37DF73;
        border: none;
        box-shadow: 0 0 8px #37DF73;
        padding-top: 10px;
    }

</style>