<style>
    .del {
        width: 50px;
        font-size: 18px;
        font-weight: bold;
        color: red;
        display: none;
        margin-left: 15px;
        cursor: pointer;
    }
    .recharge1 table tr:hover{
        background: #fff;
    }
</style>
<div class="main-content">
    <div class="adminmannager">
        <div class="adminmannager-title">
            <span>系统设置</span>&nbsp;
            <span>·&nbsp;充值设置</span>
        </div>
        <!--充值设置-->
        <div class="system-content recharge">
            <div class="recharge1">
                <div class="admin-tablename" style="height: 40px;line-height: 40px;">
                    <div class="admin-tablenamebox" style="margin-top:18px;"></div>
                    <span class="admin-tablename2" style="margin-left:6px;font-size: 14px;">
                                <span style="color: #30a3fe">充值</span><span>设置</span>
                            </span>
                </div>
                <table border="0" cellspacing="10" cellpadding="0" class="rechargetable addtab addtag">
                    <?php foreach ($recharge as $v) { ?>
                        <tr>
                            <td>
                                <span>充值</span>
                            </td>
                            <td>
                                <input id="<?= $v["id"] ?>" type="text" value="<?= $v["actual_payment"] ?>"
                                       onblur="saveRecharge1(this)"
                                       style="text-align:center;color:red;width: 45px;height: 30px;background: #f3faff;outline: none;border:none;padding:0 8px;box-sizing: border-box">
                                <span>元</span>
                                <span style="margin:0 4px;">=</span>
                                <input id="<?= $v["id"] ?>" type="text" value="<?= $v["price"] ?>"
                                       onblur="saveRecharge2(this)" style="text-align:center;color:red;width: 45px;height: 30px;background: #f3faff;outline: none;border:none;padding:0 8px;
box-sizing: border-box">
                                <span>元</span>
                                <span class="del" id="<?= $v["id"] ?>">✖</span>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                <button style="width: 100px;height: 32px;border:0;float: left;margin-top:1px;
background: #30a3fe;border-radius: 18px;text-align: center;line-height: 32px;color: #fff;" onclick="addTab1()">
                    添加
                </button>
            </div>
            <div class="recharge2">
                <div class="admin-tablename" style="height: 40px;line-height: 40px;">
                    <div class="admin-tablenamebox" style="margin-top:18px;"></div>
                    <span class="admin-tablename2" style="margin-left:6px;font-size: 14px;">
                                <span style="color: #FFE804">金币</span><span>设置</span>
                            </span>
                </div>
                <div style="height: 40px;line-height: 40px;font-size: 14px;margin-left:10px;">
                    <input type="text" value="1"
                           style="text-align:center;color:red;width: 45px;height: 30px;background: #f3faff;outline: none;border:none;padding:0 8px;
box-sizing: border-box">
                    <span>金币</span>
                    <span style="margin:0 4px;">=</span>
                    <input type="text" value="0.1"
                           style="text-align:center;color:red;width: 45px;height: 30px;background: #f3faff;outline: none;border:none;padding:0 8px;
box-sizing: border-box">
                    <span>元</span>
                </div>
                <table border="0" cellspacing="10" cellpadding="0" class="rechargetable addtab1 addtag">
                    <?php foreach ($coin as $v) { ?>
                        <tr>
                            <td>
                                <span>消费</span>
                            </td>
                            <td>
                                <input id="<?= $v[id] ?>" type="text" value="<?= $v["condition"] ?>"
                                       onblur="saveCoin1(this)"
                                       style="text-align:center;color:red;width: 45px;height: 30px;background: #f3faff;outline: none;border:none;padding:0 8px;
box-sizing: border-box">
                                <span>元</span>
                                <span style="margin:0 4px;">可使用</span>
                                <input id="<?= $v[id] ?>" type="text" value="<?= $v["coin_num"] ?>"
                                       onblur="saveCoin2(this)"
                                       style="text-align:center;color:red;width: 45px;height: 30px;background: #f3faff;outline: none;border:none;padding:0 8px;
box-sizing: border-box">
                                <span>金币</span>
                                <span class="del" style="display: none" id="<?= $v["id"] ?>">✖</span>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                <Button style="width: 100px;height: 32px;border:0;float: left;margin-top:1px;
background: #30a3fe;border-radius: 18px;text-align: center;line-height: 32px;color: #fff;" onclick="addTab()">
                    添加
                </Button>
            </div>
        </div>
    </div>
</div>
<script>
    function addTab() {
        $.ajax({
            url: "<?= Yii::$service->url->geturl("/admin/system/savecoin") ?>",
            success: function (id) {
                var tcount = $(".addtab1 tr").length;
                var tpl = `<tr><td><span>消费</span></td><td>
        <input id="${id}"  onblur="saveCoin1(this)" type="text" value="" style="text-align:center;color:red;width: 45px;height: 30px;background: #f3faff;outline: none;border:none;padding:0 8px;box-sizing: border-box">
            <span>元</span>
            <span style="margin:0 4px;">可使用</span>
        <input id="${id}"  onblur="saveCoin2(this)" type="text" value="" style="text-align:center;color:red;width: 45px;height: 30px;background: #f3faff;outline: none;border:none;padding:0 8px;box-sizing: border-box">
    <span>金币</span><span class="del"  id="${id}">✖</span>
    </td>
    </tr>`;
                $(".addtab1").append(tpl);
            }
        });
    }

    function saveCoin1(ele) {
        $.ajax({
            url: "<?= Yii::$service->url->geturl("/admin/system/savecoin1?") ?>" + `id=${ele.getAttribute("id")}&condition=${ele.value}`,
            success: function (data) {
            }
        });
    }

    function saveCoin2(ele) {
        $.ajax({
            url: "<?= Yii::$service->url->geturl("/admin/system/savecoin2?") ?>" + `id=${ele.getAttribute("id")}&coin_num=${ele.value}`,
            success: function (data) {
            }
        });
    }

    function addTab1() {
        $.ajax({
            url: "<?= Yii::$service->url->geturl("/admin/system/money")?>",
            success: function (id) {
                var tcount = $(".addtab tr").length;
                var tpl = `<tr><td><span>充值</span></td>
                        <td><input id="${id}" type="text" value="" onblur="saveRecharge1(this)" style="text-align:center;color:red;width: 45px;height: 30px;background: #f3faff;outline: none;border:none;padding:0 8px;box-sizing: border-box">
<span>元</span>
<span style="margin:0 4px;">=</span>
<input id="${id}" type="text" value="" onblur="saveRecharge2(this)" style="text-align:center;color:red;width: 45px;height: 30px;background: #f3faff;outline: none;border:none;padding:0 8px;
box-sizing: border-box">
<span>元</span>
<span class="del" id="{$id}">✖</span></td></tr>`;
                $(".addtab").append(tpl);
            }
        });
    }

    function saveRecharge1(ele) {
        $.ajax({
            url: "<?= Yii::$service->url->geturl("/admin/system/saverecharge1?")?>" + `id=${ele.getAttribute("id")}&actual_payment=${ele.value}`,
            success: function (data) {

            }
        });
    }

    function saveRecharge2(ele) {
        $.ajax({
            url: "<?= Yii::$service->url->geturl("/admin/system/saverecharge2?")?>" + `id=${ele.getAttribute("id")}&price=${ele.value}`,
            success: function (data) {

            }
        });
    }


    $(".addtag").on("mouseenter", "tr", function (e) {
        $(this).find(".del").show();

    });
    $(".addtag").on("mouseleave", "tr", function () {
        $(this).find(".del").hide();
    });

    //删除一行数
    let table = document.querySelectorAll("table");
    table.forEach(function (val) {
            val.onclick = function (event) {
                if (event.target.className && event.target.className == "del") {
                    if ("val.className"=="addtab") {
                        $.ajax({
                            url: '<?=Yii::$service->url->geturl("/admin/system/delcoin")?>' + `?id=${event.target.getAttribute("id")}`,
                            success: function (data) {

                                let delE = event.target.parentNode.parentNode;
                                let tbody = delE.parentNode;
                                tbody.removeChild(delE);//删除一行
                            }
                        })
                    } else {
                        $.ajax({
                            url: '<?=Yii::$service->url->geturl("/admin/system/delrecharge")?>' + `?id=${event.target.getAttribute("id")}`,
                            success: function (data) {
                                let delE = event.target.parentNode.parentNode;
                                let tbody = delE.parentNode;
                                tbody.removeChild(delE);//删除一行
                            }
                        })
                    }
                }
            }
        }
    )


</script>