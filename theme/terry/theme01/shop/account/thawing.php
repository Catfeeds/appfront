<div class="main-content">
    <?php if ($shop_state != 2) { ?>
        <div class="biaoti" style="width: 1012px; margin: 0 auto;">
            <div aria-label="Breadcrumb" role="navigation" class="el-breadcrumb">
                        <span class="el-breadcrumb__item"><span role="link"
                                                                class="el-breadcrumb__inner is-link">账户管理</span><span
                                    role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
                <span class="el-breadcrumb__item" aria-current="page"><span role="link"
                                                                            class="el-breadcrumb__inner"><span
                                style="color: rgb(48, 211, 102);font-weight: bold">账单解冻</span></span><span role="presentation"
                                                                                          class="el-breadcrumb__separator">&middot;</span></span>
            </div>
        </div>
        <div style="width: 400px;height:20px;position: absolute;top: 100px;left: 0;right: 0;margin: auto;font-size: 20px;text-align: center">
            <!--店铺未被冻结，该功能暂时无法使用。-->
            <img src="/public/imgs/dongjie.jpg" alt="">
        </div>
    <?php } else { ?>
        <div style="width: 1012px; margin: 0px auto;">
            <div class="content">
                <div class="biaoti">
                    账户管理&middot;
                    <span style="color: rgb(48, 211, 102);">账户冻结</span>
                </div>
                <div class="tongzhi">
                    <div style="height: 52px;">
                        <div style="width: 9px; height: 6px; border-radius: 3px; background: rgb(55, 224, 111); display: inline-block;"></div>
                        <span style="margin-left: 9px; color: rgb(65, 178, 252); font-size: 16px; line-height: 52px; font-weight: bolder;">通知</span>
                    </div>
                    <div class="message">
                        <div>
                            您好，由于多名用户投诉，所以在<?= date("Y", $res["freezing_time"]) ?>
                            年<?= date("m", $res["freezing_time"]) ?>月<?= date("d", $res["freezing_time"]) ?>日将商家的店铺冻结。
                        </div>
                        <div>
                            具体冻结原因：
                        </div>
                        <div>
                            <?= $res["freezing_cause"] ?>
                        </div>
                        <div class="text">
                            <form class="el-form" action="<?=Yii::$service->url->geturl("/shop/account/apply")?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" value="<?= $res["voucher"] ?>" name="voucher">
                                <input type="hidden" value="<?= $res["id"] ?>" name="id">
                                <input type="hidden" value="<?= $res["status"] ?>" name="status">
                                <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>"/>
                                <div class="el-row" style="width: 600px;">
                                    <div class="el-form-item">
                                        <label class="el-form-item__label" style="width: 100px;">申请描述</label>
                                        <div class="el-form-item__content" style="margin-left: 100px;">
                                            <textarea name="desc" id="" cols="30" rows="10"
                                                      style="width: 600px; height: 120px; outline: none; resize: none; border-radius: 10px; border-color: rgb(220, 223, 230);background: #f3faff;padding: 10px;box-sizing: border-box" <?php if ($res["status"] == 0) {
                                                echo "disabled";
                                            } ?> ><?= $res["desc"] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="el-form-item">
                                        <label class="el-form-item__label" style="width: 100px;">凭证上传</label>
                                        <div class="el-form-item__content img-box"
                                             style="margin-left: 100px;display: flex;flex-wrap: wrap;width: 600px">
                                            <?php
                                                $arr  = explode("||",$res["voucher"]);
                                                foreach ($arr as $k=>$v){
                                                    $src = Yii::$app->params["img"].$v;
                                                    echo '<div class="img">
                                                                <span style="display: none;" class="x" flag="'.$k.'">X</span>
                                                               <img src="'.$src.'" style="width: 100%;height: 100%">
                                                            </div>';
                                                }
                                            ?>
                                            <div style="display: flex; justify-content: space-between;" class="sc">
                                                <div data-v-339faee8="" class="zhizhao2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="el-form-item">
                                        <label class="el-form-item__label"
                                               style="width: 100px;line-height: 40px">审核状态</label>
                                        <div class="el-form-item__content" style="margin-left: 100px;">
                                            <div>
                                                <?php if ($res) { ?>
                                                    <?php
                                                    if ($res["status"] == 0) {
                                                        echo "正在等待审核";
                                                    } else if ($res["status"] == 2) {
                                                        echo "审核失败";
                                                    } else {
                                                        echo "无任何审核信息";
                                                    }
                                                    ?>
                                                <?php } else { ?>
                                                    暂无审核记录
                                                <?php } ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php if ($res["status"] == 2) { ?>

                                    <button type="submit" class="el-button el-button--primary is-round">
            <span>
                重新提交
            </span>
                                    </button>
                                <?php } else if ($res["status"] == 1) { ?>
                                    <button type="submit" class="el-button el-button--primary is-round">
                    <span>
                        提交
                    </span>
                                    </button>
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            <?php if($res["status"]!=0){ ?>
            var sc = document.querySelector(".sc");
            var box = document.querySelector(".img-box");
            var n=0;
            var voucher = document.querySelector("[name=voucher]").value.split("||");
            sc.onclick = function () {
                n++;
                var input = document.createElement("input");
                input.type = "file";
                input.style.display = "none";
                input.name = "voucher[]";
                input.accept="image/*";
                input.id = "input"+n;
                box.appendChild(input, sc);
                input.click();
                input.onchange = function () {
                    var reader = new FileReader();
                    reader.readAsDataURL(input.files[0]);
                    reader.onloadend = function (e) {
                        var div = document.createElement("div");
                        div.classList.add("img");
                        div.id="div"+n;
                        str = `
                                <span class="x" id="span${n}" style="display: none">X</span>
                                <img src="${e.target.result}" style="width: 100%;height: 100%;"/ >
                                `;
                        div.innerHTML = str;
                        box.insertBefore(div, sc);
                    }
                }
            }
            $(box).on("click",".x",function () {
                if($(this).attr("id")){
                    $(this).parent().remove();
                    str = $(this).attr("id").slice(4,5);
                    console.log(str);
                    $("#input"+str).remove();
                }else {
                    $(this).parent().remove();
                    voucher[$(this).attr("flag")]="";
                    var arr = voucher.filter(function (val) {
                        return val;
                    });
                    document.querySelector("[name=voucher]").value=arr.join("||");
                }
            });
            <?php } ?>
        </script>
    <?php } ?>
</div>
<style>

    .content {
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        padding-top: 8px;
    }

    .content .biaoti {
        font-size: 12px;
        font-weight: bolder;
        margin-bottom: 5px;
    }

    .content .tongzhi {
        width: 100%;
    }

    .tongzhi .message {
        padding-left: 20px;
        box-sizing: border-box;
        font-size: 10px;
        line-height: 20px;
    }

    .message .text {
        margin-top: 30px;
    }

    .content .blue {
        height: 33px;
        background: #30B5FE;
        border: none;
        box-shadow: 0 0 8px #30B5FE;
        padding-top: 10px;
    }

    .text .details {
        width: 500px;
        height: 120px;
        outline: none;
        resize: none;
        border-radius: 5px;
        background: #f3faff;
        border: 2px solid #e5eff8;
    }

    .el-form-item__label {
        color: #A4ADB5;
    }
</style>
