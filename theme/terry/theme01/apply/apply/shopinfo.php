<style>
    .xiala {
        padding-left: 5px;
        width: 100px;
        outline: none;
        font-size: 12px;
        height: 30px;
        border-radius: 15px;
        background: #f3faff;
        border: 2px solid #e5eff8;
    }

    .xiala:hover {
        border-color: #3CACFE;
    }

</style>
<div id="index1">
    <div style="width: 1300px;margin:0 auto;">
        <header>
            <div class="index1-logo">
                <a href="/apply/apply/index">
                    <img src="/public/imgs/login.png" alt=""/>
                    <h1>晋彤后台管理系统</h1>
                </a>
            </div>
            <div style="float: right; padding-top: 50px; box-sizing: border-box; margin-right: 50px; width: 553px;">
                <div class="el-steps el-steps--horizontal">
                    <div class="el-step is-horizontal is-center" style="flex-basis: 25%; margin-right: 0px;">
                        <div class="el-step__head is-finish">
                            <div class="el-step__line" style="margin-right: 0px;">
                                <i class="el-step__line-inner"
                                   style="transition-delay: 0ms; border-width: 1px; width: 100%;"></i>
                            </div>
                            <div class="el-step__icon is-text">
                                <div class="el-step__icon-inner">
                                    1
                                </div>
                            </div>
                        </div>
                        <div class="el-step__main">
                            <div class="el-step__title is-finish">
                                入驻须知
                            </div>
                            <div class="el-step__description is-finish"></div>
                        </div>
                    </div>
                    <div class="el-step is-horizontal is-center" style="flex-basis: 25%; margin-right: 0px;">
                        <div class="el-step__head is-finish">
                            <div class="el-step__line" style="margin-right: 0px;">
                                <i class="el-step__line-inner"
                                   style="transition-delay: 150ms; border-width: 1px; width: 100%;"></i>
                            </div>
                            <div class="el-step__icon is-text">

                                <div class="el-step__icon-inner">
                                    2
                                </div>
                            </div>
                        </div>
                        <div class="el-step__main">
                            <div class="el-step__title is-finish">
                                企业信息认证
                            </div>
                            <div class="el-step__description is-finish"></div>
                        </div>
                    </div>
                    <div class="el-step is-horizontal is-center" style="flex-basis: 25%; margin-right: 0px;">
                        <div class="el-step__head is-finish">
                            <div class="el-step__line" style="margin-right: 0px;">
                                <i class="el-step__line-inner"
                                   style="transition-delay: 300ms; border-width: 0px; width: 0%;"></i>
                            </div>
                            <div class="el-step__icon is-text">

                                <div class="el-step__icon-inner">
                                    3
                                </div>
                            </div>
                        </div>
                        <div class="el-step__main">
                            <div class="el-step__title is-finish">
                                店铺信息认证
                            </div>
                            <div class="el-step__description is-finish"></div>
                        </div>
                    </div>
                    <div class="el-step is-horizontal is-center" style="flex-basis: 25%; max-width: 25%;">
                        <div class="el-step__head is-process">
                            <div class="el-step__line">
                                <i class="el-step__line-inner"></i>
                            </div>
                            <div class="el-step__icon is-text">

                                <div class="el-step__icon-inner">
                                    4
                                </div>
                            </div>
                        </div>
                        <div class="el-step__main">
                            <div class="el-step__title is-process">
                                等待审核
                            </div>
                            <div class="el-step__description is-process"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="index2">
            <div class="index2-list">
                <div class="index2-shui">
                    <div class="admin-tablename" style="height: 40px; line-height: 40px;">
                        <div class="admin-tablenamebox" style="margin-top: 18px;"></div>
                        <span class="admin-tablename2" style="margin-left: 6px; font-size: 14px;">店铺经营信息</span>
                    </div>
                    <form id="el-form" class="el-form" method="post" enctype="multipart/form-data" action="">
                        <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>"/>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 80px;">店铺名称</label>
                            <div class="el-form-item__content" style="margin-left: 80px;">
                                <div class="el-input">
                                    <input type="text" name="shop_name" autocomplete="off" class="el-input__inner"
                                           placeholder="请输入店铺名称"
                                           value="<?php echo $shopinfo['post']['shop_name'] ?>" required  />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item nnnn">
                            <label class="el-form-item__label" style="width: 80px;">店铺logo</label><!-- shop_logo -->
                            <div class="el-form-item__content" style="margin-left: 80px;">
                                <div style="width: 500px; height: 250px;
                                <?php if ($shopinfo['img'][0]) { ?>
                                        background:url(http://img.chengzhanghao.com:81/media/catalog/product/<?php echo $shopinfo['img'][0];?>) no-repeat;
                                <?php } else if ($shopinfo['imgs']['img0']) { ?>
                                        background: url(http://img.chengzhanghao.com:81/media/catalog/product/<?php echo $shopinfo['imgs']['img0'];?>) no-repeat;
                                <?php } else { ?>
                                        background: rgb(243, 250, 255);
                                <?php } ?>
                                        position: relative;">
                                    <input type="hidden" name="img0" class="img0"
                                           value="<?php echo $shopinfo['img'][0]; ?>"/>
                                    <input type="file" multiple="multiple" class="file" name="file[]"
                                           onchange="uploads(this)" required  />
                                    <a href="javascript:0"
                                       style="pointer-events: none; display: block; width: 50px; height: 50px; border-radius: 50%; background: rgb(48, 163, 254); position: absolute; margin: auto 210px; top: 0px; bottom: 0px; font-size: 30px; color: rgb(255, 255, 255); line-height: 50px; text-align: center;">+</a>
                                </div>

                            </div>
                        </div>
                        <div class="el-form-item nnnn">
                            <label class="el-form-item__label" style="width: 80px;">店铺横幅</label><!-- shop_banner -->
                            <div class="el-form-item__content" style="margin-left: 80px;">
                                <div style="width: 500px; height: 250px;
                                <?php if ($shopinfo['img'][1]) { ?>
                                        background:url(http://img.chengzhanghao.com:81/media/catalog/product/<?php echo $shopinfo['img'][1];?>) no-repeat;
                                <?php } else if ($shopinfo['imgs']['img1']) { ?>
                                        background: url(http://img.chengzhanghao.com:81/media/catalog/product/<?php echo $shopinfo['imgs']['img1'];?>) no-repeat;
                                <?php } else { ?>
                                        background: rgb(243, 250, 255);
                                <?php } ?>
                                        position: relative;">
                                    <input type="hidden" name="img1" class="img1"
                                           value="<?php echo $shopinfo['img'][1]; ?>"/>
                                    <input type="file" multiple="multiple" class="file" name="file[]"
                                           onchange="uploads(this)" required  />
                                    <a href="javascript:0"
                                       style="pointer-events: none; display: block; width: 50px; height: 50px; border-radius: 50%; background: rgb(48, 163, 254); position: absolute; margin: auto 210px; top: 0px; bottom: 0px; font-size: 30px; color: rgb(255, 255, 255); line-height: 50px; text-align: center;">+</a>
                                </div>

                            </div>
                        </div>
                        <div class="el-form-item nnnn">
                            <label class="el-form-item__label" style="width: 80px;">店铺头像</label><!-- shop_avatar -->
                            <div class="el-form-item__content" style="margin-left: 80px;">
                                <div style="width: 500px; height: 250px;
                                <?php if ($shopinfo['img'][2]) { ?>
                                        background:url(http://img.chengzhanghao.com:81/media/catalog/product/<?php echo $shopinfo['img'][2];?>) no-repeat;
                                <?php } else if ($shopinfo['imgs']['img2']) { ?>
                                        background: url(http://img.chengzhanghao.com:81/media/catalog/product/<?php echo $shopinfo['imgs']['img2'];?>) no-repeat;
                                <?php } else { ?>
                                        background: rgb(243, 250, 255);
                                <?php } ?>
                                        position: relative;">
                                    <input type="hidden" name="img2" class="img2"
                                           value="<?php echo $shopinfo['img'][2]; ?>"/>
                                    <input type="file" multiple="multiple" class="file" name="file[]"
                                           onchange="uploads(this)" required  />
                                    <a href="javascript:0"
                                       style="pointer-events: none; display: block; width: 50px; height: 50px; border-radius: 50%; background: rgb(48, 163, 254); position: absolute; margin: auto 210px; top: 0px; bottom: 0px; font-size: 30px; color: rgb(255, 255, 255); line-height: 50px; text-align: center;">+</a>
                                </div>

                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 80px;">店铺所在地</label>
                            <!-- province_id  city_id   district_id -->
                            <div class="el-form-item__content" style="margin-left: 80px;">
                                <div class="el-select">
                                    <select name="province_id" id="" class="xiala province">
                                        <option value="" style="display: none;">请选择省份</option>
                                        <?php
                                        foreach ($province as $k => $v) {
                                            ?>
                                            <option value="<?php echo $v['province_id'] ?>"><?php echo $v['province_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="el-select">
                                    <select name="city_id" id="" class="xiala city">
                                        <option value="" style="display: none">请选择城市</option>
                                    </select>
                                </div>
                                <div class="el-select">
                                    <select name="district_id" id="" class="xiala district">
                                        <option value="" style="display: none;">请选择区/县</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 80px;">店铺默认配送区域</label>
                            <div class="el-form-item__content" style="margin-left: 80px;">
                                <div class="el-input">
                                    <input type="text" name="shop_region" autocomplete="off" class="el-input__inner"
                                           placeholder="请输入店铺默认配送区域"
                                           value="<?php echo $shopinfo['post']['shop_region'] ?>" required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 80px;">店铺公众号</label>
                            <div class="el-form-item__content" style="margin-left: 80px;">
                                <div class="el-input">
                                    <input type="text" name="shop_qrcode" autocomplete="off" class="el-input__inner"
                                           placeholder="请输入店铺公众号"
                                           value="<?php echo $shopinfo['post']['shop_qrcode'] ?>"  required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 80px;">详细地址</label>
                            <div class="el-form-item__content" style="margin-left: 80px;">
                                <div class="el-input">
                                    <input type="text" name="shop_address" autocomplete="off" class="el-input__inner"
                                           placeholder="请输入详细地址"
                                           value="<?php echo $shopinfo['post']['shop_address'] ?>" required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 80px;">邮政编码</label>
                            <div class="el-form-item__content" style="margin-left: 80px;">
                                <div class="el-input">
                                    <input type="text" name="shop_zip" autocomplete="off" class="el-input__inner"
                                           placeholder="请输入邮政编码"
                                           value="<?php echo $shopinfo['post']['shop_zip'] ?>" required />
                                </div>
                            </div>
                        </div>
                        <!--<div class="el-form-item">
                            <label class="el-form-item__label" style="width: 80px;">店铺关闭原因</label>
                            <div class="el-form-item__content" style="margin-left: 80px;">
                                <div class="el-input">
                                    <input type="text" name="shop_close_info" autocomplete="off" class="el-input__inner"
                                           placeholder="请输入店铺关闭原因"
                                           value="<?php /*echo $shopinfo['post']['shop_close_info'] */?>"  required />
                                </div>
                            </div>
                        </div>-->
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 80px;">店铺seo关键字</label>
                            <div class="el-form-item__content" style="margin-left: 80px;">
                                <div class="el-input">
                                    <input type="text" name="shop_keywords" autocomplete="off" class="el-input__inner"
                                           placeholder="请输入店铺seo关键字"
                                           value="<?php echo $shopinfo['post']['shop_keywords'] ?>"  required/>
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 80px;">店铺seo描述</label>
                            <div class="el-form-item__content" style="margin-left: 80px;">
                                <div class="el-input">
                                    <input type="text" name="shop_description" autocomplete="off"
                                           placeholder="请输入店铺seo描述"
                                           class="el-input__inner"
                                           value="<?php echo $shopinfo['post']['shop_description'] ?>" required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 80px;">商家电话</label>
                            <div class="el-form-item__content" style="margin-left: 80px;">
                                <div class="el-input">
                                    <input type="text" name="shop_phone" autocomplete="off" class="el-input__inner"
                                           placeholder="请输入商家电话"
                                           value="<?php echo $shopinfo['post']['shop_phone'] ?>" required />
                                </div>
                            </div>
                        </div>

                        <div style="margin-top: 50px;">
                            <div style="width: 800px; display: flex; justify-content: space-around;">

                                <button type="button" class="el-button el-button--primary is-round"
                                        onclick='shopload("<?= Yii::$service->url->getUrl('apply/apply/companyinfo') ?>")'>
                                    <span>上一步</span>
                                </button>
                                <input type="submit" class="el-button el-button--primary is-round"
                                       value="下一步"
                                       onclick='shopload("<?= Yii::$service->url->getUrl('apply/apply/waitaudit1') ?>")'>
                                </input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div style="width: 100%; height: 80px; line-height: 80px; text-align: center; margin-top: 40px; font-size: 12px; color: rgb(153, 153, 153);">
        <span>@2015-2018&nbsp;dscmall.cn&nbsp;&nbsp;版本所有ICP备案号：DSC00000249 POWERED</span>
    </div>
</div>

<script type="text/javascript">
    var proid = "<?php echo $shopinfo['post']['province_id']?>";
    var cityid = "<?php echo $shopinfo['post']['city_id']?>";
    var distid = "<?php echo $shopinfo['post']['district_id']?>";
    $(function () {
        if (proid > 0) {
            $(".province").val(proid);
            changePro(proid);
            if (cityid > 0) {
                $(".city").val(cityid);
                changeCity(cityid);
                if (distid > 0) {
                    $(".district").val(distid);
                }
            }
        }
    })
    $(".province").change(function () {
        changePro($(this).val());

    })
    $(".city").change(function () {
        changeCity($(this).val());
    })

    function changePro(province_id) {
        $.ajax({
            type: "get",
            url: "<?= Yii::$service->url->getUrl('apply/apply/getcity') ?>",
            data: {"province_id": province_id},
            async: false,
            success: function (msg) {
                var row = JSON.parse(msg);
                $(".city").find(".aa").remove();
                $(".district").find(".aa").remove();
                $.each(row, function (k, v) {
                    $(".city").append("<option value='" + v.city_id + "' class='aa'>" + v.city_name + "</option>");
                })
            }
        })
    }

    function changeCity(city_id) {
        $.ajax({
            type: "get",
            url: "<?= Yii::$service->url->getUrl('apply/apply/getdistrict') ?>",
            data: {"city_id": city_id},
            async: false,
            success: function (msg) {
                var row = JSON.parse(msg);
                $(".district").find(".aa").remove();
                $.each(row, function (k, v) {
                    $(".district").append("<option value='" + v.district_id + "' class='aa' >" + v.district_name + "</option>");
                })
            }
        })
    }


</script>

<script>
    function uploads(obj) {
        var file = obj.files[0];

        if (window.FileReader) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            //监听文件读取结束后事件
            reader.onloadend = function (e) {
                $(obj).parent("div").css({
                    "background": "url(" + e.target.result + ") no-repeat center center /  auto 100%",
                });
                $(obj).next().hide();
            };
        }
    }

</script>

<script>
    function shopload(url) {

        $("#el-form").submit(function (e) {
            e.preventDefault();
            let formdata = $('form').serializeArray();
            $.ajax({
                url: url,
                type: 'post',
                data: formdata,
                success: function (msg) {
                    location.href = url;
                }
            })
        });
    }

    /* $(".el-button").onclick()
  
    $("#el-form").submit
    $("form").submit(function(e){
          alert("Submitted");
        }); */
</script>
<style>
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
</style>