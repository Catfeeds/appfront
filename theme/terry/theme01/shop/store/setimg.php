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

    .content .item {
        width: 100%;
        height: 50px;
    }

    .content .item .bottom {
        width: 100%;
    }

    .content .item .bottom1 {
        width: 100%;
    }

    .bottom .title {
        width: 100%;
        height: 200px;
        /*margin-top: 10px;*/
        line-height: 46px;
        font-size: 12px;
        padding-left: 22px;
        border-bottom: 1px solid #eee;
    }

    .bottom1 .title1 {
        width: 90%;
        height: 100px;
        line-height: 46px;
        font-size: 12px;
        padding-left: 22px;
    }

    .content .red {
        height: 33px;
        background: #FD5E4E;
        border: none;
        box-shadow: 0 0px 8px #FD5E4E;
    }

    .content .green {
        height: 33px;
        background: #37DF73;
        border: none;
        box-shadow: 0 0 8px #37DF73;
    }
</style>
<div  class="main-content">
    <div  style="width: 1012px; margin: 0 auto;">
        <div >
            <div class="content">
                <div class="biaoti">
                    <div aria-label="Breadcrumb" role="navigation" class="el-breadcrumb"><span
                                class="el-breadcrumb__item"><span role="link"
                                                                                     class="el-breadcrumb__inner is-link">店铺管理</span><span
                                    role="presentation" class="el-breadcrumb__separator">·</span></span> <span
                                class="el-breadcrumb__item" aria-current="page"><span role="link"
                                                                                                         class="el-breadcrumb__inner"><span
                                       
                                        style="color: rgb(48, 211, 102); font-weight: bolder;">店铺图片设置</span></span><span
                                    role="presentation" class="el-breadcrumb__separator">·</span></span></div>
                </div>
                <div class="item">
                    <div class="bottom">
                        <div
                             style="width: 328px; height: 42px; line-height: 42px; font-size: 18px; font-weight: bolder;">
                            <div class="col-box"></div>
                            <span style="color: rgb(48, 163, 254);">图片</span>上传
                        </div>
                        <div class="title">
                            <form class="el-form" action="<?= Yii::$service->url->getUrl("/shop/store/setpic") ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>" />
                                <div class="el-row" style="width: 800px;">
                                    <div class="el-form-item"><label class="el-form-item__label"
                                                                                        style="width: 150px;">*LOGO缩略图</label>
                                        <div class="el-form-item__content" style="margin-left: 150px;">
                                            <div
                                                 style="display: flex; justify-content: space-between;">
                                                <div class="el-input" style="width: 480px;">
                                                    <input type="text" name="shop_logo"
                                                           value="<?= $res["shop_logo"] ?>"
                                                           class="el-input__inner">
                                                    <input accept="image/*" type="file" style="display: none;" name="file[]">
                                                </div>
                                                <button type="button"
                                                        class="el-button green el-button--success is-round sc" style="line-height: 10px">
                                                    <span>上传</span></button>
                                                <span style="color: rgb(65, 178, 252);">模板样式</span>
                                            </div>
                                            <div style="color: rgb(255, 133, 100);">大小限制：80*80像素
                                            </div><!----></div>
                                    </div>
                                    <div class="el-form-item"><label class="el-form-item__label"
                                                                                        style="width: 150px;">*店铺封面图</label>
                                        <div class="el-form-item__content" style="margin-left: 150px;">
                                            <div
                                                 style="display: flex; justify-content: space-between;">
                                                <div class="el-input" style="width: 480px;">
                                                    <input type="file" style="display: none;" name="file[]" accept="image/jpeg">
                                                    <input type="text" autocomplete="off"
                                                           class="el-input__inner" value="<?= $res["shop_avatar"] ?>"
                                                           name="shop_avatar"></div>
                                                <button type="button"
                                                        class="el-button green el-button--success is-round sc" style="line-height: 10px">
                                                    <span>上传</span></button>
                                                <span style="color: rgb(65, 178, 252);">模板样式</span>
                                            </div>
                                            <div style="color: rgb(255, 133, 100);">大小限制：无限制</div>
                                            </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="bottom1">
                        <div
                             style="width: 328px; height: 42px; line-height: 42px; font-size: 18px; font-weight: bolder;">
                            <div class="col-box"></div>
                            <span style="color: rgb(48, 163, 254);">审核</span>状态
                        </div>
                        <div class="title1">
                                <div class="el-row" style="width: 500px;">
                                    <div class="el-form-item"><label class="el-form-item__label"
                                                                                        style="width: 100px;line-height: 40px">审核状态</label>
                                        <div class="el-form-item__content" style="margin-left: 100px;">
                                            <div style="color: rgb(55, 223, 113); font-weight: bolder;">审核成功
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div style="float: right;">
                        <button type="submit" class="el-button green el-button--success is-round" style="line-height: 10px">
                            <span>提交</span>
                        </button>
                        <button type="button" class="el-button red el-button--danger is-round" style="line-height: 10px">
                            <!----><!----><span>取消</span></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var scBtn = document.querySelectorAll(".sc");
    var input = document.querySelectorAll("[type=file]");
    var input1 = document.querySelectorAll("[type=text]");
    var input2 = document.querySelectorAll(".hidden");
    scBtn.forEach(function(val,index){
    	val.onclick = function(){
    		input[index].click();
    	}
    });
    input.forEach(function (val,index) {
        val.onchange = function () {
            var url = location.href;
            var name = new Date().getTime()+Math.floor(Math.random()*1000);
            input1[index].value = "<?php echo $imgUrl ?>/images/"+name+"."+val.files[0].name.split(".")[1];
            // val.files[0].name = name;
        }
    });

</script>