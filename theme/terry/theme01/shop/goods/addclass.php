

<input type="hidden" name="" id="one">
<input type="hidden" name="" id="two">

<div class="main-content">
    <div style="width: 1012px; margin: 0px auto;">
        <div class="biaoti">
            <div aria-label="Breadcrumb" role="navigation" class="el-breadcrumb">
                <span class="el-breadcrumb__item"> <span role="link" class="el-breadcrumb__inner is-link">商品管理</span> <span role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
                <span class="el-breadcrumb__item"><span role="link" class="el-breadcrumb__inner"><a href="#/goods" class="">商品列表</a></span><span role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
                <span class="el-breadcrumb__item" aria-current="page"><span role="link" class="el-breadcrumb__inner"><span style="color: rgb(48, 211, 102); font-weight: bolder;">添加商品</span></span><span role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
            </div>
        </div>
        <div class="item">
            <ul class="top">
                <li class="btn1"><span class="btn " style="color: white;">选择商品分类</span> </li>
                 <li class="btn2"><span class="btn">填写商品信息</span></li>
<!--                 <li class="btn3"><span class="btn">选择商品关联</span></li>-->
            </ul>
            <div class="bottom">
                <div class="title">
                    <span style="font-size: 14px; color: rgb(206, 203, 203);">您当前选择的商品类别是：</span>
                    <div aria-label="Breadcrumb" role="navigation" class="el-breadcrumb" style="display: inline-block;">
                        <span class="el-breadcrumb__item"><span role="link" class="el-breadcrumb__inner" id="one1">洗衣</span><span role="presentation" class="el-breadcrumb__separator">/</span></span>
                        <span class="el-breadcrumb__item" aria-current="page"><span role="link" class="el-breadcrumb__inner" id="two1"></span><span role="presentation" class="el-breadcrumb__separator">/</span></span>
                    </div>
                </div>
                <div class="select">
                    <div>
                        <div class="select_box">
                            <div class="col-box"></div> 请选择
                            <span style="color: rgb(48, 163, 254);">第一级类别</span>
                        </div>
                        <div class="left_box">
                            <div class="shuaixuan_bottom">
                                <?php foreach ($category as $key => $value) { ?>
                                    <div class='oo' style="margin-top:10px">
                                        <label onclick="getTwoMenu(this)" id="<?= $value['_id'] ?>" role="radio" aria-checked="true" tabindex="0" class="el-radio danxuan is-checked">
                                            <span class="el-radio__input">
                                            	<span class="el-radio__inner"></span>
                                            	<input type="radio" aria-hidden="true" tabindex="-1" class="el-radio__original" value="1" />
                                            </span>
                                            <span class="el-radio__label" style="line-height: 24px"><?= $value['name']['name_zh'] ?></span>
                                        </label>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                    <div class="jiantou"></div>
                    <div>
                        <div class="select_box">
                            <div class="col-box"></div> 请选择
                            <span style="color: rgb(48, 163, 254);">第二级类别</span>
                        </div>
                        <div class="left_box">
                            <div class="shuaixuan_bottom">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        	<button type="button" onclick="next()" class="el-button blue el-button--primary is-round">
           		<span>下一步，填写商品信息</span>
        	</button> 
        </div>
    </div>
</div>

<script>

    // 获取二级按钮
    function getTwoMenu(obj) {
        let id = $(obj).attr("id");
        let ids = $(obj).find(".el-radio__label").html();
        let str = '';

        $(".oo").find(".el-radio__input").removeClass("is-checked");
        $(obj).find(".el-radio__input").addClass("is-checked");


        $.get("<?= Yii::$service->url->getUrl('shop/goods/ajaxclass') ?>" + "?id=" + id, function (data) {

            $("#one").val(id);
            $("#one1").html(ids);
            for (item in data) {

            	str+=`<div class="tt">
            	    <label onclick="clickMenu(this)"  id="${data[item]._id.$oid}" role="radio" aria-checked="true" tabindex="0" class="el-radio danxuan is-checked">
            	        <span class="el-radio__input">
            	        	<span class="el-radio__inner"></span>
            	        	<input type="radio" aria-hidden="true" tabindex="-1" class="el-radio__original" value="1" />
            	        </span>
            	        <span class="el-radio__label">${data[item].name.name_zh}</span>
            	    </label>
            	</div>`;

            }

             $(".shuaixuan_bottom").eq(1).html(str);

        }, 'json');
    }

    $(".shuaixuan_bottom").eq(0).find("label").eq(0).click();

    // 获取一级按钮

    function clickMenu(obj) {
        let id = $(obj).attr('id');
        let ids = $(obj).find(".el-radio__label").html();

        $('.tt').find(".el-radio__input").removeClass("is-checked");
        $(obj).find(".el-radio__input").addClass("is-checked");

        $("#two").val(id);
        $("#two1").html(ids);

    }

    // 点击下一步

    function next() {
        // 获取ID
        if ($("#one").val() && $("#two").val()) {

            location.href = "<?= Yii::$service->url->getUrl('shop/goods/addshopinfo') ?>" + "?one=" + $("#one").val() + "&tow=" + $("#two").val();
        } else {
            alert("请选择分类");
        }
    }
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
        height: 50px;
    }

    .main-content .item .top {
        width: 65%;
        height: 39px;
        display: flex;
        justify-content: space-between;
        font-size: 14px;
        color: #000;
        line-height: 39px;
    }

    .item .top .btn1 {
        background: url("/public/img/add1.png") no-repeat center center/100% auto;
        color: white;
    }

    .item .top .btn2 {
        background: url("/public/img/add3.png") no-repeat center center/100% auto;
    }

    /*.item .top .btn3 {
        background: url("/public/img/add3.png") no-repeat center center/100% auto;
    }*/

    .top li {
        width: 333px;
        height: 100%;
        text-align: center;
    }

    .main-content .item .bottom {
        width: 100%;
        margin-bottom: 20px;
    }

    .bottom .title {
        width: 100%;
        height: 46px;
        margin-top: 10px;
        line-height: 46px;
        font-size: 12px;
    }

    .bottom .select {
        width: 100%;
        border-radius: 5px;
        margin-bottom: 10px;
        margin-top: 15px;
        display: flex;
    }

    .select .select_box {
        width: 309px;
        height: 42px;
        line-height: 42px;
        font-size: 18px;
        font-weight: bolder;
    }

    .main-content .col-box {
        width: 12px;
        height: 7px;
        border-radius: 5px;
        margin-top: 17px;
        margin-left: 10px;
        margin-right: 7px;
        background-color: #37e06f;
    }

    .select .left_box {
        width: 309px;
        height: 250px;
        background: #f8fcff;
        border: 2px solid #ebf6ff;
        padding-left: 30px;
        padding-top: 20px;
        line-height: 36px;
        border-radius: 10px;
        overflow: auto;
    }

    .bottom .jiantou {
        width: 42px;
        height: 14px;
        margin-top: 60px;
        background: url("/public/img/jiantou.png");
    }

    .shuaixuan_bottom .danxuan {
        width: 20px;
        height: 20px;
        font-size: 12px;
    }

    .main-content .blue {
        height: 30px;
        background: #30B5FE;
        border: none;
        box-shadow: 0 0 5px #30B5FE;
        margin-left: 20px;
        padding-top: 8px;
    }
    .shuaixuan_bottom .tt{
        margin-top:10px;
    }

</style>