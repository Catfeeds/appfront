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

<div class="main-content">
    <div style="width: 1064px; margin: 0px auto;padding-top:20px;">
        <div class="biaoti">
            <div  class="el-breadcrumb">
                <span class="el-breadcrumb__item">
                    <span role="link" class="el-breadcrumb__inner is-link">店铺管理</span>
                    <span  class="el-breadcrumb__separator">·</span>
                </span>
                <span class="el-breadcrumb__item">
                    <span class="el-breadcrumb__inner">分类管理</span>
                    <span class="el-breadcrumb__separator">·</span>
                </span>
                <span class="el-breadcrumb__item" >
                    <span style="color: rgb(48, 211, 102); font-weight: bolder;">添加分类</span>
                </span>
            </div>
        </div>
        <form method="post" enctype="multipart/form-data" action="<?= Yii::$service->url->geturl("/admin/shop/classedit") ?>" class="el-form" enctype="application/x-www-form-urlencoded">
        <div class="bottom">
            <div class="title">
                <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>"/>
                <div class="el-row" style="width: 850px;">
                    
                    <input type="hidden" name="_id" value="<?=$class['_id']?>">
                    <input type="hidden" name="parent_id" value="<?=$class['parent_id']?>">
                    <input type="hidden" name="level" value="<?=$class['level']?>">
            
                    <div class="el-form-item">
                        <label class="el-form-item__label" style="width: 150px;">*分类名称</label>
                        <div class="el-form-item__content" style="margin-left: 150px;">
                            <div class="el-input" style="width: 500px;">
                                <input type="text" name="name" value="<?=$class['name']['name_zh']?>" placeholder="名称可输入20个字符，支持输入中文、字母、数字、_、/和小数点" class="el-input__inner">
                            </div>
                        </div>
                    </div>
                    <div class="el-form-item">
                        <label class="el-form-item__label" style="width: 150px;">*分类描述</label>
                        <div class="el-form-item__content" style="margin-left: 150px;">
                            <div class="el-input" style="width: 500px;">
                                <input type="text" name="description" value="<?=$class['description']['description_zh']?>" placeholder="请输入分类的描述" class="el-input__inner">
                            </div>
                        </div>
                    </div>

                    <div class="el-form-item">
                        <label class="el-form-item__label" style="width: 150px;">*分类关键字</label>
                        <div class="el-form-item__content" style="margin-left: 150px;">
                            <div class="el-input" style="width: 500px;">
                                <input type="text" name="meta_keywords" value="<?=$class['meta_keywords']['meta_keywords_zh']?>" placeholder="请输入分类关键字" class="el-input__inner">
                            </div>
                        </div>
                    </div>
                    <div class="el-form-item">
                        <label class="el-form-item__label" style="width: 150px;">*分类类型</label>
                        <div class="el-form-item__content" style="margin-left: 150px;">
                            <div class="el-input" style="width: 500px;">
                                <select name="type" id="" class="el-input__inner">

                                    <?php 

                                        if ($class['type']==1) {
                                            # code...
                                            echo '<option selected  value="1">商家</option>
                                                <option  value="2">水司</option>';
                                        }else{
                                            echo '<option  value="1">商家</option>
                                                <option selected value="2">水司</option>';
                                        }


                                     ?>
                                    
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="el-form-item">
                        <label class="el-form-item__label" style="width: 150px;">*显示隐藏</label>
                        <div class="el-form-item__content" style="margin-left: 150px;">
                            <div class="el-input" style="width: 500px;">
                                <select name="menu_show" id="" class="el-input__inner">
                                    <!-- <option  value="1">显示</option>
                                    <option  value="2">隐藏</option>
 -->
                                    <?php 

                                        if ($class['menu_show']==1) {
                                            # code...
                                            echo '<option selected  value="1">显示</option>
                                                <option  value="2">隐藏</option>';
                                        }else{
                                            echo '<option  value="1">显示</option>
                                                <option selected value="2">隐藏</option>';
                                        }


                                     ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="el-form-item">
                        <label class="el-form-item__label" style="width: 150px;">*分类照片</label>
                        <div class="el-form-item__content" style="margin-left: 150px;">
                            <div class="el-input" style="width: 500px;">
                                <style>
                                    .addImg{
                                        width:100%;
                                        height:150px;
                                        border: 1px solid #dcdfe6;
                                        border-radius: 4px;
                                        line-height: 150px;
                                        text-align: center;
                                        font-size: 50px;
                                        cursor: pointer;

                                    }
                                </style>
                                <div class="addImg">+</div>
                                <input onchange="uploads(this)" type="file" name="img" style="display:none" id="files">
                            </div>
                        </div>
                    </div>

                     <div class="el-form-item">
                        <label class="el-form-item__label" style="width: 150px;">*分类排序</label>
                        <div class="el-form-item__content" style="margin-left: 150px;">
                            <div class="el-input" style="width: 500px;">
                                <input type="text" name="sort" value="<?=$value['sort']?>" placeholder="请输入分类的排序，数值越大越靠前" class="el-input__inner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="float: right;">
            <button type="submit" class="el-button green el-button--success is-round">
                <span>添加分类</span></button>
            <a href="#/ShopCouponEdit" class="">
                <button type="reset" class="el-button red el-button--danger is-round">
                <span>重置</span></button>
            </a></div>
        </form>
    </div>
</div>
</div>

<script>
    
    $(".addImg").click(function () {
        // 相当于点击文件上传框

        $("#files").click();
    });

    function uploads(obj) {
        var file = obj.files[0];

        if (window.FileReader) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            //监听文件读取结束后事件
            reader.onloadend = function (e) {

                $(".addImg").html($("<img>").css({
                    // "width": "100%",
                    "height": "150px"
                }).attr("src", e.target.result));
            };
        }
    }
</script>
