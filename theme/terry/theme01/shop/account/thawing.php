<<<<<<< HEAD
<<<<<<< HEAD
<div class="main-content">
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
                        您好，由于多名用户投诉，所以在2018年5月20日将商家的店铺冻结。
                    </div>
                    <div>
                        具体冻结原因：
                    </div>
                    <div>
                        多名用户投诉商家的商品包装有问题。
                    </div>
                    <div class="text">
                        <form class="el-form">
                            <div class="el-row" style="width: 600px;">
                                <div class="el-form-item">
                                    <label class="el-form-item__label" style="width: 100px;">申请描述</label>
                                    <div class="el-form-item__content" style="margin-left: 100px;">
                                        <textarea id="" cols="30" rows="10" class="details"></textarea>
                                    </div>
                                </div>
                                <div class="el-form-item">
                                    <label class="el-form-item__label" style="width: 100px;">凭证上传</label>
                                    <div class="el-form-item__content" style="margin-left: 100px;">
                                        <div style="display: flex; justify-content: space-between;">
                                            <div class="el-input" style="width: 400px;">
                                                <input type="text" autocomplete="off" class="el-input__inner"/>
                                            </div>
                                            <button type="button" class="el-button blue el-button--primary is-round">
                                                <span>上传</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="el-form-item">
                                    <label class="el-form-item__label" style="width: 100px;">审核状态</label>
                                    <div class="el-form-item__content" style="margin-left: 100px;">
                                        <div style="line-height: 28px;">
                                            暂无审核记录
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <button type="button" class="el-button blue el-button--primary is-round">
                            <span>申请</span></button>
                    </div>
                </div>
=======

  <div  class="main-content">
      <?php if($_SESSION[shop_state ]!=2){ ?>
          <div>店铺未被冻结，该功能暂时无法使用。</div>
      <?php }else{?>
          <div  style="width: 1012px; margin: 0px auto;">
    <div   class="content">
     <div  class="biaoti">
       账户管理&middot;
      <span  style="color: rgb(48, 211, 102);">账户冻结</span>
     </div> 
     <div  class="tongzhi">
      <div  style="height: 52px;">
       <div  style="width: 9px; height: 6px; border-radius: 3px; background: rgb(55, 224, 111); display: inline-block;"></div> 
       <span  style="margin-left: 9px; color: rgb(65, 178, 252); font-size: 16px; line-height: 52px; font-weight: bolder;">通知</span>
      </div> 
      <div  class="message">
       <div >
        您好，由于多名用户投诉，所以在2018年5月20日将商家的店铺冻结。
       </div> 
       <div >
        具体冻结原因：
       </div> 
       <div >
        多名用户投诉商家的商品包装有问题。
       </div> 
       <div  class="text">
        <form  class="el-form">
         <div  class="el-row" style="width: 600px;">
          <div  class="el-form-item">
           <label class="el-form-item__label" style="width: 100px;">申请描述</label>
           <div class="el-form-item__content" style="margin-left: 100px;">
            <textarea  id="" cols="30" rows="10" style="width: 600px; height: 120px; outline: none; resize: none; border-radius: 3px; border-color: rgb(220, 223, 230);"></textarea>
            
           </div>
          </div> 
          <div  class="el-form-item">
           <label class="el-form-item__label" style="width: 100px;">凭证上传</label>
           <div class="el-form-item__content" style="margin-left: 100px;">
            <div  style="display: flex; justify-content: space-between;">
             <div  class="el-input">
              
              <input type="text" autocomplete="off" class="el-input__inner" />
              
              
              
             </div> 
             <button  type="button" class="el-button el-button--primary is-round">
              
              <span>上传</span></button>
            </div>
            
           </div>
          </div> 
          <div  class="el-form-item">
           <label class="el-form-item__label" style="width: 100px;">审核状态</label>
           <div class="el-form-item__content" style="margin-left: 100px;">
            <div >
                <?php if($res){?>
                    <?php
                        if($res["status"]==0){
                            echo "正在等待审核。";
                        }else{
                            echo "审核失败";
                        }
                    ?>
                <?php }else{ ?>
                    暂无审核记录
                <?php}?>
>>>>>>> bebd3cae7ee685f19e08fe7cec3ce8672eaf93b4
            </div>
        </div>
    </div>
<<<<<<< HEAD
</div>
=======
   </div>
      <?php } ?>
  </div>
>>>>>>> bebd3cae7ee685f19e08fe7cec3ce8672eaf93b4
=======
<style>
    .img {
        width: 272px;
        height: 159px;
        margin-right: 10px;
        margin-bottom: 5px;
        position: relative;
    }

    .zhizhao2 {
        margin-bottom: 5px;
        width: 272px;
        height: 159px;
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARAAAACfCAIAAAC++RH7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3hpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpjNDVlNmNhOC0wZjU5LWM2NDYtODA5YS0zNGIxODk1ZGU1Y2EiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MjFDQjYwN0I4NUExMTFFODk0OUNFRkVGNTY3MDIzRUIiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MjFDQjYwN0E4NUExMTFFODk0OUNFRkVGNTY3MDIzRUIiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUuNSAoV2luZG93cykiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5MDg4ZTNkNi1jOTBhLTAzNDEtYTcwMC03MjY2MTZjNmIyOGIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6YzQ1ZTZjYTgtMGY1OS1jNjQ2LTgwOWEtMzRiMTg5NWRlNWNh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);
    }
    .x{
        width: 15px;
        height: 15px;
        border: 1px solid #000;
        background: #fff;
        color: #000;
        line-height: 15px;
        text-align: center;
        position: absolute;
        top: 5px;
        right: 5px;
        border-radius: 100%;
        cursor: pointer;
    }
    .img:hover .x{
        display: block !important;
    }

</style>

<div class="main-content">
    <?php if ($shop_state != 2) { ?>
        <div style="width: 400px;height:20px;position: absolute;top: 100px;left: 0;right: 0;margin: auto;font-size: 20px;text-align: center">
            店铺未被冻结，该功能暂时无法使用。
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
>>>>>>> 7c031fefc20fea9c076336871d9e737a629c8847
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
