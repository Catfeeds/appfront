
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
            </div>
            
           </div>
          </div>
         </div>
        </form> 
        <button  type="button" class="el-button el-button--primary is-round">
         
         <span>申请</span></button>
       </div>
      </div>
     </div>
    </div>
   </div>
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

    .tongzhi .message {
        padding-left: 20px;
        box-sizing: border-box;
        font-size: 10px;
        line-height: 20px;
    }

    .message .text {
        margin-top: 27px;

    }
</style>