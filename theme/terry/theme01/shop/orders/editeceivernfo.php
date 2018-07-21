<?php

use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<div style="margin: 0 0 0 12%">

    <form action="<?= Yii::$service->url->getUrl('shop/orders/editinfo') ?>" method="post">
        <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>" />
        <input type="hidden" name="order_id" value="<?= $res["order_id"] ?>" />
        <div>
            姓名：<input name="customer_firstname" type="text" value="<?= $res["customer_firstname"] ?>">
        </div>
        <div>
            手机号：<input name="customer_telephone" type="tel" value="<?= $res["customer_telephone"] ?>">
        </div>
        <div>
            收获地址：<select name="customer_address_country">">
<!--                <option style="display: none">请选择省份</option>-->
            </select>
            <select name="customer_address_state">">
            </select>
            <select name="customer_address_city">

            </select>
            <input name="customer_address_street1" type="text" placeholder="请填写详细地址" value="<?= $res["customer_address_street1"] ?>">
        </div>
        <div>
            邮政编码：<input name="customer_address_zip" type="text" value="<?= $res["customer_address_zip"] ?>">
        </div>
        <div>
            电子邮件：<input name="customer_email" type="email" value="<?= $res["customer_email"] ?>">
        </div>

        <div>
            <input type="submit" value="提交">
        </div>
    </form>
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
    selPro.onchange=function(){
        selCity.innerHTML='<option style="display: none">请选择城市</option>';
        selCounty.innerHTML='<option style="display: none">请选择县区</option>';
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

        if(val["city_name"] == "<?= $res['customer_address_state'] ?>"){
            option.selected = "selected";
        }
        selCity.appendChild(option);
    });
    selCity.onchange=function(){
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

        if(val["district_name"] == "<?= $res['customer_address_city'] ?>"){
            option.selected = "selected";
        }
        selCounty.appendChild(option);
    });

</script>
