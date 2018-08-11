<div class="main-content">
    <div style="width: 1012px; margin: 0 auto;">
        <div class="biaoti">
            <div aria-label="Breadcrumb" role="navigation" class="el-breadcrumb">
                <span class="el-breadcrumb__item">
                    <span class="el-breadcrumb__inner is-link">商品管理</span>
                    <span class="el-breadcrumb__separator">&middot;</span>
                </span>
                <span class="el-breadcrumb__item">
                    <span role="link" class="el-breadcrumb__inner">
                        <a href="#/goods"  class="">商品列表</a>
                    </span>
                    <span class="el-breadcrumb__separator">&middot;</span>
                </span>
                <span class="el-breadcrumb__item" aria-current="page">
                    <span role="link" class="el-breadcrumb__inner">
                        <span style="color: rgb(48, 211, 102); font-weight: bolder;">添加商品</span>
                    </span>
                    <span class="el-breadcrumb__separator">&middot;</span>
                </span>
            </div>
        </div>
        <div class="item">
            <ul class="top">
                <li class="btn1"><span class="btn">选择商品分类</span></li>
                <li class="btn2"><span class="btn">填写商品信息</span></li>
<!--                <li class="btn3"><span class="btn">选择商品关联</span></li>-->
            </ul>
            <div class="bottom">
                <div style="width: 328px; height: 42px; line-height: 42px; font-size: 18px; font-weight: bolder;">
                    <div class="col-box"></div>
                    基本信息
                </div>
                <div class="title">
                    <span style="font-size: 16px;">商品分类：</span>
                    <div aria-label="Breadcrumb" role="navigation" class="el-breadcrumb" style="display: inline-block;">
                        <span class="el-breadcrumb__item">
                            <span  class="el-breadcrumb__inner"><?= $one ?></span>
                            <span class="el-breadcrumb__separator">/</span>
                        </span>
                        <span class="el-breadcrumb__item" aria-current="page">
                            <span role="link" class="el-breadcrumb__inner"><?= $two ?></span>
                            <span class="el-breadcrumb__separator">/</span>
                        </span>
                    </div>
                    <div class="neirong">
                        <form class="el-form" method="post" enctype="multipart/form-data"
                              action="<?= Yii::$service->url->getUrl('shop/goods/addgoods1') ?>">
                            <div class="el-form-item">
                                <label class="el-form-item__label" style="width: 80px;">商品货号</label>
                                <div class="el-form-item__content" style="margin-left: 80px;">
                                    <div class="inputbox el-input">
                                        <input type="text" name="sku" placeholder="请输入商品货号" class="el-input__inner"/>
                                    </div>
                                    <div class="tishi">
                                        商家货号是指商家管理商品的编号，买家不可见，最多可输入20个字符，支持输入英文、字母和_
                                    </div>
                                </div>
                            </div>
                            <div class="el-form-item">
                                <label class="el-form-item__label" style="width: 80px;">商品名称</label>
                                <div class="el-form-item__content" style="margin-left: 80px;">
                                    <div class="inputbox el-input">
                                        <input type="text" placeholder="请输入商品名称" name="name" class="el-input__inner"/>
                                    </div>
                                    <div class="tishi">
                                        商品标题名称长度至少1个字符，最长150个汉字
                                    </div>
                                </div>
                            </div>
                            <div class="el-form-item">
                                <label class="el-form-item__label" style="width: 80px;">商品描述</label>
                                <div class="el-form-item__content" style="margin-left: 80px;">
                                    <textarea id="" cols="30" rows="10" name="description_zh"
                                              class="details" placeholder="请输入商品描述"></textarea>
                                </div>
                            </div>
                            <div class="el-form-item">
                                <label class="el-form-item__label" style="width: 80px;">价格</label>
                                <div class="el-form-item__content" style="margin-left: 80px;">
                                    <div class="inputbox el-input">
                                        <input type="text"  placeholder="请输入商品的价格" name="price" class="el-input__inner"/>
                                    </div>
                                    <div class="tishi">
                                        价格必须是在0.01-99999999之间的数字，且不能高于市场价，此价格为商品实际销售价格，如果商品存在规格，该价格显示最低价格
                                    </div>

                                </div>
                            </div>
                            <div class="el-form-item">
                                <label class="el-form-item__label" style="width: 80px;">折扣价</label>
                                <div class="el-form-item__content" style="margin-left: 80px;">
                                    <div class="inputbox el-input">
                                        <input type="text" placeholder="请输入商品的折扣价格" name="special_price"class="el-input__inner"/>
                                    </div>
                                </div>
                            </div>
                            <style>
                                .el-icon-plus:before {
                                    content: "";
                                }

                                #abc img {
                                    margin-left: 10px;
                                }

                                .avatar-uploader-icon {
                                    display: block;
                                    font-style: normal;
                                }
                            </style>
                            <div class="el-form-item" style=" overflow: hidden;">
                                <label class="el-form-item__label" style="width: 80px;line-height:80px">上传图片</label>
                                <div class="el-form-item__content" id="abc" style="margin-left: 80px;">
                                    <div class="avatar-uploader" style="float:left">

                                        <i class=" avatar-uploader-icon sadad">+</i>
                                        <input type="file" name="file[]" onchange="uploads(this)"
                                               class="el-upload__input img"/>
                                    </div>

                                </div>
                            </div>
                    </div>
                </div>
                <script>
                    // 点击上传按钮
                    $(".sadad").click(function () {
                        // 相当于点击文件上传框

                        $(".img").eq($(".img").length - 1).click();
                    });

                    function uploads(obj) {
                        var file = obj.files[0];

                        if (window.FileReader) {
                            var reader = new FileReader();
                            reader.readAsDataURL(file);
                            //监听文件读取结束后事件
                            reader.onloadend = function (e) {

                                $(".avatar-uploader").append($("<input type='file' name='file[]' onchange='uploads(this)' class='img el-upload__input'>"));
                                $("<div>").css({
                                    "display":"inline-block",
                                    "width": "82px",
                                    "height": "82px",
                                    "background":"url("+e.target.result+")no-repeat center center /100% auto"
                                }).appendTo($("#abc"));
                            };
                        }
                    }
                </script>
                <div style="width: 328px; height: 42px; line-height: 42px; font-size: 18px; font-weight: bolder; margin-top: 15px;">
                    <div class="col-box"
                         style="width: 12px; height: 7px; border-radius: 5px; margin-top: 17px; margin-left: 10px; margin-right: 7px; background-color: rgb(55, 224, 111);"></div>
                    基本信息
                </div>
                <div class="message">
                    <div>
                        <span style="color: rgb(164, 173, 181);">基本要求：</span>手机详情总体大小：图片+文字不超过20张，文字不超过5000字&nbsp;&nbsp;&nbsp;&nbsp;
                        <span style="color: rgb(59, 172, 254);">建议:</span>所有图片都是本宝贝相关的图片
                    </div>
                    <div>
                        <span style="color: rgb(164, 173, 181);">图片大小：</span>1.建议使用宽度480-620像素，高度小于等于960像素的图片。&nbsp;&nbsp;2.格式为：JPG/PNG/GIF
                    </div>
                    <div>
                        <span style="margin-left: 70px; color: rgb(59, 172, 254);">举例：可以上传宽度为480，高度为960像素，格式为JPG的图片。</span>
                    </div>
                    <div>
                        <span style="color: rgb(164, 173, 181);">文字要求：</span>每次插入文字不超过500字，标点、特殊字符按一个字算。2.请手动输入文字，不要复制粘贴网页上的文字，防止出现乱码。3.以下特殊字符“＜”“＞”“、”“/”会被替换为空。
                    </div>
                    <div>
                        <span style="margin-left: 70px; color: rgb(59, 172, 254);">建议:</span>不要添加太多的文字，这样看起来更清晰。
                    </div>
                    <div style="width: 100%; margin-left: 70px; margin-top: 15px;" class="qweasd1">
                        <div class="shangchuan"></div>
                        <input type="file" name="asd[]"  onchange='uploads1(this)'  id="" class='img2 el-upload__input'> 
                    </div>

                    <script>
                        // 点击上传按钮
                        $(".shangchuan").click(function () {
                            // 相当于点击文件上传框

                            $(".img2").eq($(".img2").length - 1).click();
                        });

                        function uploads1(obj) {
                            var file = obj.files[0];

                            if (window.FileReader) {
                                var reader = new FileReader();
                                reader.readAsDataURL(file);
                                //监听文件读取结束后事件
                                reader.onloadend = function (e) {

                                    $(".qweasd1").append($("<input type='file' name='asd[]' onchange='uploads1(this)' class='img2 el-upload__input'>"));
                                    $("<div>").css({
                                        "display":"inline-block",
                                        "width": "218px",
                                        "height": "312px",
                                        "background":"url("+e.target.result+")no-repeat center center /100% auto"
                                    }).appendTo($(".qweasd1"));
                                };
                            }
                        }
                    </script>
                    <div class="el-form-item" style="margin-top: 10px">
                        <label class="el-form-item__label" style="width: 80px;">文字描述</label>
                        <div class="el-form-item__content" style="margin-left: 80px;">
                            <textarea name="" id="" class="details" placeholder="请输入商品文字描述" cols="30" rows="10" name="description_zh1"></textarea>
                        </div>

                    </div>
                </div>
                <div style="width: 328px; height: 42px; line-height: 42px; font-size: 18px; font-weight: bolder; margin-top: 15px;">
                    <div class="col-box"
                         style="width: 12px; height: 7px; border-radius: 5px; margin-top: 17px; margin-left: 10px; margin-right: 7px; background-color: rgb(55, 224, 111);"></div>
                    其他信息
                </div>
                <div class="message" style="height: 230px; margin-bottom: 20px;border:none">
                    <div class="el-form-item">
                        <label class="el-form-item__label" style="width: 80px;">上架</label>
                        <div class="el-form-item__content" style="margin-left: 80px;margin-top:5px;">
                            <div role="switch" aria-checked="true" class="el-switch is-checked">
                                <!-- 上架 -->
                                <span class="el-switch__core" data-id="1"
                                      style="width: 40px; border-color: rgb(19, 206, 102); background-color: rgb(19, 206, 102);"></span>
                                <!-- 下架 -->
                                <span class="el-switch__core" data-id="2"
                                      style="display:none;width: 40px; border-color: rgb(255, 73, 73); background-color: rgb(255, 73, 73);"></span>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="status" value="1"/>
                    <div class="el-form-item">
                        <label class="el-form-item__label" style="width: 80px;">关键词</label>
                        <div class="el-form-item__content" style="margin-left: 80px;">
                            <div class="inputbox el-input">
                                <input type="text" autocomplete="off" name="keywords" class="el-input__inner"/>
                                <input type="hidden" name="one" value="<?= $oneId ?>">
                                <input type="hidden" name="tow" value="<?= $twoId ?>">
                                <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>"/>
                            </div>
                            <div class="tishi">
                                商品关键词请用空格分隔
                            </div>
                        </div>
                    </div>
                    <div class="el-form-item">
                        <label class="el-form-item__label" style="width: 80px;">商品库存</label>
                        <div class="el-form-item__content" style="margin-left: 80px;">
                            <div class="inputbox el-input">
                                <input type="text" autocomplete="off" name="kucun" class="el-input__inner"/>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="<?= Yii::$service->url->getUrl('shop/goods/addclass') ?>" class="">
                    <button type="button" class="el-button blue el-button--primary is-round"
                            style="margin-right: 20px;">
                        <span>上一步，选择商品分类 </span></button>
                </a>
                <button type="submit" class="el-button blue el-button--primary is-round">
<!--                    <span>下一步，选择商品关联</span>-->
                    <span>完成，发布商品</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(".el-switch__core").click(function () {
        // 获取标示
        let a = $(this).attr("data-id");

        if (a == 1) {
            $(this).next().show();
            $(this).hide();
            $("input[name=statu]").val(2);
        } else {
            $(this).prev().show();
            $(this).hide();
            $("input[name=statu]").val(1);
        }
    })
</script>
<style>
    .detail{
        width: 350px;
        height: 84px;
        outline: none;
        resize: none;
        border-radius: 5px;
        background: #f3faff;
        border: 2px solid #e5eff8;
    }


    .avatar-uploader .el-upload {
        border: 1px dashed #d9d9d9;
        border-radius: 6px;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .avatar-uploader .el-upload:hover {
        border-color: #409EFF;
    }

    .avatar-uploader-icon {
        font-size: 28px;
        color: #8c939d;
        width: 80px;
        height: 80px;
        line-height: 80px;
        text-align: center;
        border: 1px dashed #ccc;
    }

    .avatar {
        width: 80px;
        height: 80px;
        display: block;
        border: 1px dashed #ccc;
    }

    .main-content .biaoti {
        height: 52px;
        font-size: 12px;
        line-height: 52px;
        font-weight: bolder;
    }

    .main-content .item {
        width: 100%;
    }

    .main-content .item .top {
        width: 70%;
        height: 39px;
        display: flex;
        justify-content: space-between;
        font-size: 14px;
        color: #000;
        line-height: 39px;
    }

    .main-content .item .top .btn1 {
        background: url("/public/img/add1.png") no-repeat center center/100% auto;
        color: white;
    }

    .main-content .item .top .btn2 {
        background: url("/public/img/add5.png") no-repeat center center/100% auto;
        color: white;
    }

    /*.main-content .item .top .btn3 {
        background: url("/public/img/add3.png") no-repeat center center/100% auto;
    }*/

    .top li {
        width: 333px;
        height: 100%;
        text-align: center;
    }

    .main-content .item .bottom {
        width: 100%;
        margin-top: 20px;
    }

    .bottom .title {
        width: 100%;
        /*height: 686px;*/
        margin-top: 10px;
        line-height: 46px;
        font-size: 12px;
        padding-left: 22px;
        border-bottom: 1px solid #eee;
        box-sizing: border-box;
    }

    .bottom .col-box {
        width: 12px;
        height: 7px;
        border-radius: 5px;
        margin-top: 17px;
        margin-left: 10px;
        margin-right: 7px;
        background-color: #37e06f;
    }

    .bottom .title .neirong {
        width: 100%;
        /*height: 640px;*/
        padding-left: 25px;
    }

    .inputbox {
        width: 272px;
    }

    .tishi {
        font-size: 12px;
        color: #999;
    }

    .bottom .message {
        width: 100%;
        /*height: 570px;*/
        height: auto;
        padding-left: 25px;
        box-sizing: border-box;
        line-height: 28px;
        font-size: 12px;
        border-bottom: 1px solid #eee;
        overflow: hidden;
    }

    .bottom .message .shangchuan {
        width: 218px;
        height: 312px;
        background: #bbdff6;
        cursor: pointer;
        display:inline-block;
        background: url("/public/img/shangchuan.png") no-repeat center center/100% auto;
    }

    .el-icon-edit {
        margin-left: 10px;
        font-size: 24px;
        text-align: center;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #3bacfe;
        line-height: 30px;
        box-shadow: 0 3px 8px #48A1FF;
    }

    .main-content .blue {
        height: 30px;
        background: #30B5FE;
        border: none;
        box-shadow: 0 0 5px #30B5FE;
        margin-left: 20px;
        padding-top: 8px;
    }

    .details {
        width: 350px;
        height: 84px;
        outline: none;
        resize: none;
        border-radius: 5px;
        background: #f3faff;
        border: 2px solid #e5eff8;
        padding:8px;
        font-size: 14px;
    }
    textarea::-webkit-input-placeholder{color:#C0C4CC;}

</style>