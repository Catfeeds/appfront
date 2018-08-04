<style>
    .main-content .red {
        height: 33px;
        background: #FD5E4E;
        border: none;
        box-shadow: 0 0 8px #FD5E4E;
        padding-top: 10px;
    }
    .main-content .details{
        width: 600px;
        height:116px;
        outline:none;
        resize:none;
        border-radius: 3px;
        background: #f3faff;
        border:2px solid #e5eff8;
        padding:8px;
    }
    .el-input__inner {
        height: 30px;
        border-radius: 15px;
        background: #f3faff;
        border: 2px solid #e5eff8;

    }
    .el-form{
        margin-top:30px;
    }
    .shangpin{
        width: 96px;
        height: 96px;
        background: url("/public/img/sptp2.png")no-repeat center center /100% auto;
    }

</style>
<div class="main-content">
    <div class="adminmannager">
        <div class="adminmannager-title">
            <span>系统设置</span>&nbsp;
            <span>·&nbsp;VIP规则</span>
            <span>·&nbsp;修改VIP规则</span>
        </div>

        <form  class="el-form" method="post" enctype="multipart/form-data" action="<?= Yii::$service->url->getUrl('admin/system/save') ?>">
            <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>"/>
            <div  class="el-row" style="width: 500px;">
                <div  class="el-form-item">
                    <label class="el-form-item__label" style="width: 120px;">特权名称:</label>
                    <div class="el-form-item__content" style="margin-left: 120px;">
                        <div  class="el-input">
                            <input type="text" value="<?= $ruler['name']?>" name="name" placeholder="" class="el-input__inner">
                        </div>
                    </div>
                </div>
                <div class="el-form-item">
                    <label class="el-form-item__label" style="width: 120px;">排序:</label>
                    <div class="el-form-item__content" style="margin-left: 120px;">
                        <div class="el-input">
                            <input type="text" value="<?= $ruler['sort']?>" name="sort" placeholder="" class="el-input__inner">
                        </div>
                    </div>
                </div>
                <div  class="el-form-item">
                    <label class="el-form-item__label" style="width: 120px;">特权介绍:</label>
                    <div class="el-form-item__content" style="margin-left: 120px;">
                        <textarea id=""  name="info"  placeholder="" class="details"><?= $ruler['info']?></textarea>
                    </div>
                </div>
                <div  class="el-form-item">
                    <label class="el-form-item__label" style="width: 120px;">特权图标:</label>
                    <div class="el-form-item__content" style="margin-left: 120px;">
                        <div style="line-height: 28px;color: #A2D5FD;margin-bottom:10px;">图标尺寸为（宽*高）：200*200px</div>
                        <div style="cursor:pointer;"  class="shangpin"></div>
                        <input type="file" onchange="uploads(this)" name="file[]" style="display:none" class="img">
                    </div>
                    <div class="el-form-item__content" id="abc" style="margin-left: 120px;">
                        <img src="http://img.uekuek.com/images/<?= $ruler['img']?>" alt="" style="display:inline-block;width: 96px;height: 96px;">
                        <div class="close" onclick="del(this)">&times;</div>
                        <input accept="jpg;" type="file" onchange="uploads(this)" name="file[]" style="display:none" class="img">
                    </div>
                </div>
                <input type="hidden" name="id" value="<?= $ruler['id']?>">
                <div style="margin-left:80px;margin-bottom: 50px;">
                    <button  type="submit" class="el-button red el-button--danger is-round">
                        <span>确定</span>
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>
<script>
    // 点击上传按钮
    $(".shangpin").click(function () {
        // 相当于点击文件上传框
        let a = document.querySelector("img");
        if (!a) {
            $(".img").eq($(".img").length - 1).click();
        }
        else {
            alert("只能上传一张图标")
        }
    });

    function uploads(obj) {
        var file = obj.files[0];
        if (window.FileReader) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            //监听文件读取结束后事件
            reader.onloadend = function (e) {
                $("#abc").append($("<input type='file' name='file[]' onchange='uploads(this)' style='display:none' class='img'>"));
                $("<img>").css({
                    "display": "inline-block",
                    "width": "96px",
                    "height": "96px",
                    "background": "url('" + e.target.result + "')no-repeat center center /100% auto"
                }).attr("id", 'abc').appendTo($("#abc"));
            };
        }
    }
    function del(obj) {
        $("#abc").remove();
    }
    function bao(obj){
        let bao=$("#bao").val();

        // 获取保留的图片
        $("#bao").val(bao.replace(','+value,''));
        // 拼接字符串

        let str=val+","+idx+'-'+value;
    }
</script>