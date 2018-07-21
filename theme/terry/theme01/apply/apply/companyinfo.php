   <div  id="index1">
    <header >
     <div  class="index1-logo">
      <img  src="/public/imgs/login.png" alt="" /> 
      <h1 >晋彤后台管理系统</h1>
     </div> 
     <div  style="float: right; padding-top: 50px; box-sizing: border-box; margin-right: 50px; width: 553px;">
      <div  class="el-steps el-steps--horizontal">
       <div  class="el-step is-horizontal is-center" style="flex-basis: 25%; margin-right: 0px;">
        <div class="el-step__head is-finish">
         <div class="el-step__line" style="margin-right: 0px;">
          <i class="el-step__line-inner" style="transition-delay: 0ms; border-width: 1px; width: 100%;"></i>
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
       <div  class="el-step is-horizontal is-center" style="flex-basis: 25%; margin-right: 0px;">
        <div class="el-step__head is-finish">
         <div class="el-step__line" style="margin-right: 0px;">
          <i class="el-step__line-inner" style="transition-delay: 150ms; border-width: 0px; width: 0%;"></i>
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
       <div  class="el-step is-horizontal is-center" style="flex-basis: 25%; margin-right: 0px;">
        <div class="el-step__head is-wait">
         <div class="el-step__line" style="margin-right: 0px;">
          <i class="el-step__line-inner" style="transition-delay: -300ms; border-width: 0px; width: 0%;"></i>
         </div>
         <div class="el-step__icon is-text">
          
          <div class="el-step__icon-inner">
           3
          </div>
         </div>
        </div>
        <div class="el-step__main">
         <div class="el-step__title is-wait">
          店铺信息认证
         </div>
         <div class="el-step__description is-wait"></div>
        </div>
       </div> 
       <div  class="el-step is-horizontal is-center" style="flex-basis: 25%; max-width: 25%;">
        <div class="el-step__head is-wait">
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
         <div class="el-step__title is-wait">
          等待审核
         </div>
         <div class="el-step__description is-wait"></div>
        </div>
       </div>
      </div>
     </div>
    </header> 
    <div  class="index2">
     <div  class="index2-list">
      <div  class="admin-tablename" style="height: 40px; line-height: 40px;">
       <div  class="admin-tablenamebox" style="margin-top: 18px;"></div> 
       <span  class="admin-tablename2" style="margin-left: 6px; font-size: 14px;">请选择您的开店身份</span>
      </div> 
      <div  class="index2-change">
        <style>
          .index-change.sp+span{
             color: rgb(55, 224, 111);
          }
        </style>

       <a  href="#/index5" class="index-change"></a> 
       <span  style="margin-left: 8px;">商家</span> 
       <a  href="#/index2" class="index-change sp router-link-exact-active router-link-active" style="margin-left: 40px;">√</a> 
       <span  style="margin-left: 8px;">水司</span>
      </div> 
      <div  class="index2-tip">
       <p > *&nbsp;一下所需要上传的电子版资质文件仅支持JPG／GIF／PNG格式图片，大小请控制在400K之内 </p>
      </div> 
      <div  class="index2-shui">
       <div  class="admin-tablename" style="height: 40px; line-height: 40px;">
        <div  class="admin-tablenamebox" style="margin-top: 18px;"></div> 
        <span  class="admin-tablename2" style="margin-left: 6px; font-size: 14px;">企业执照信息</span>
       </div> 
       <form  class="el-form" method="get" action="<?= Yii::$service->url->getUrl('apply/apply/shopinfo') ?>" >
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">公司名称</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-input">
           
           <input type="text" name="company" class="el-input__inner" />
          </div>
          
         </div>
        </div> 
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">注册号(营业执照号)</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-input">
           
           <input type="text" autocomplete="off" class="el-input__inner" />
          </div>
          
         </div>
        </div> 
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">法定代表人姓名</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-input">
           
           <input type="text" autocomplete="off" class="el-input__inner" />
          </div>
          
         </div>
        </div> 
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">身份证号</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-input">
           
           <input type="text" autocomplete="off" class="el-input__inner" />
          </div>
          
         </div>
        </div> 
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">法人手持身份证照</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div >
           <ul class="el-upload-list el-upload-list--picture-card"></ul>
           <div tabindex="0" class="el-upload el-upload--picture-card">
            <i  class="el-icon-plus"></i>
            <input type="file" name="file" class="el-upload__input" />
           </div>
          </div> 
          <div  class="el-dialog__wrapper" style="display: none;">
           <div class="el-dialog" style="margin-top: 15vh;">
            <div class="el-dialog__header">
             <span class="el-dialog__title"></span>
             <button type="button" aria-label="Close" class="el-dialog__headerbtn"><i class="el-dialog__close el-icon el-icon-close"></i></button>
            </div>
            
            
           </div>
          </div> 
          <img  src="/public/imgs/shouchi.png" alt="" />
          
         </div>
        </div> 
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">身份证</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div >
           <div >
            <ul class="el-upload-list el-upload-list--picture-card"></ul>
            <div tabindex="0" class="el-upload el-upload--picture-card">
             <i  class="el-icon-plus"></i>
             <input type="file" name="file" class="el-upload__input" />
            </div>
           </div> 
           <div  class="el-dialog__wrapper" style="display: none;">
            <div class="el-dialog" style="margin-top: 15vh;">
             <div class="el-dialog__header">
              <span class="el-dialog__title"></span>
              <button type="button" aria-label="Close" class="el-dialog__headerbtn"><i class="el-dialog__close el-icon el-icon-close"></i></button>
             </div>
             
             
            </div>
           </div> 
           <div  style="margin-left: 50px;">
            <ul class="el-upload-list el-upload-list--picture-card"></ul>
            <div tabindex="0" class="el-upload el-upload--picture-card">
             <i  class="el-icon-plus"></i>
             <input type="file" name="file" class="el-upload__input" />
            </div>
           </div> 
           <div  class="el-dialog__wrapper" style="display: none;">
            <div class="el-dialog" style="margin-top: 15vh;">
             <div class="el-dialog__header">
              <span class="el-dialog__title"></span>
              <button type="button" aria-label="Close" class="el-dialog__headerbtn"><i class="el-dialog__close el-icon el-icon-close"></i></button>
             </div>
             
             
            </div>
           </div>
          </div>
          
         </div>
        </div>

        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">营业执照所在地</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-select">
           
           <div class="el-input el-input--suffix">
            
            <input type="text" autocomplete="off" placeholder="请选择" readonly="readonly" class="el-input__inner" />
            
            <span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i>
              </span>
             </span>
            
           </div>
           <div class="el-select-dropdown el-popper" style="display: none; min-width: 279px;">
            <div class="el-scrollbar" style="">
             <div class="el-select-dropdown__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
             </div>
             <div class="el-scrollbar__bar is-horizontal">
              <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
             </div>
             <div class="el-scrollbar__bar is-vertical">
              <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
             </div>
            </div>
            
           </div>
          </div> 
          <div  class="el-select">
           
           <div class="el-input el-input--suffix">
            
            <input type="text" autocomplete="off" placeholder="请选择" readonly="readonly" class="el-input__inner" />
            
            <span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i>
              </span>
             </span>
            
           </div>
           <div class="el-select-dropdown el-popper" style="display: none; min-width: 279px;">
            <div class="el-scrollbar" style="">
             <div class="el-select-dropdown__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
             </div>
             <div class="el-scrollbar__bar is-horizontal">
              <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
             </div>
             <div class="el-scrollbar__bar is-vertical">
              <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
             </div>
            </div>
            
           </div>
          </div> 
          <div  class="el-select">
           
           <div class="el-input el-input--suffix">
            
            <input type="text" autocomplete="off" placeholder="请选择" readonly="readonly" class="el-input__inner" />
            
            <span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i>
              </span>
             </span>
            
           </div>
           <div class="el-select-dropdown el-popper" style="display: none; min-width: 279px;">
            <div class="el-scrollbar" style="">
             <div class="el-select-dropdown__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
             </div>
             <div class="el-scrollbar__bar is-horizontal">
              <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
             </div>
             <div class="el-scrollbar__bar is-vertical">
              <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
             </div>
            </div>
            
           </div>
          </div>
          
         </div>
        </div> 
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">营业执照详细地址</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-input">
           
           <input type="text" autocomplete="off" class="el-input__inner" />
           
           
           
          </div>
          
         </div>
        </div> 
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">成立时间</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-input">
           
           <input type="text" autocomplete="off" class="el-input__inner" />
           
           
           
          </div>
          
         </div>
        </div> 
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">营业期限</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="block">
           <div  class="el-date-editor el-range-editor el-input__inner el-date-editor--daterange">
            <i class="el-input__icon el-range__icon el-icon-date"></i>
            <input placeholder="开始日期" name="" class="el-range-input" />
            <span class="el-range-separator">至</span>
            <input placeholder="结束日期" name="" class="el-range-input" />
            <i class="el-input__icon el-range__close-icon"></i>
           </div>
          </div>
          
         </div>
        </div> 
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">注册资本</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-input" style="width: 300px;">
           
           <input type="text" autocomplete="off" class="el-input__inner" />
           
           
           
          </div>
          <span >万元</span>
          
         </div>
        </div> 
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">经营范围</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  style="width: 800px; height: 300px; background: rgb(234, 246, 255);"></div>
          
         </div>
        </div> 
        <div  class="el-form-item nnnn">
         <label class="el-form-item__label" style="width: 80px;">营业执照电子版</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  style="width: 500px; height: 250px; background: rgb(243, 250, 255); position: relative;">
           <input  type="file" multiple="multiple" class="file" /> 
           <a  href="javascript:0" style="pointer-events: none; display: block; width: 50px; height: 50px; border-radius: 50%; background: rgb(48, 163, 254); position: absolute; margin: auto 210px; top: 0px; bottom: 0px; font-size: 30px; color: rgb(255, 255, 255); line-height: 50px; text-align: center;">+</a>
          </div> 
          <div >
           <p  style="color: rgb(255, 84, 18);">*&nbsp;请确保图片清晰，文字可辨并有清晰的红色公章</p>
          </div>
          
         </div>
        </div>

        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">公司所在地</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-select">
           
           <div class="el-input el-input--suffix">
            
            <input type="text" autocomplete="off" placeholder="请选择" readonly="readonly" class="el-input__inner" />
            
            <span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i>
              </span>
             </span>
            
           </div>
           <div class="el-select-dropdown el-popper" style="display: none; min-width: 279px;">
            <div class="el-scrollbar" style="">
             <div class="el-select-dropdown__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
             </div>
             <div class="el-scrollbar__bar is-horizontal">
              <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
             </div>
             <div class="el-scrollbar__bar is-vertical">
              <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
             </div>
            </div>
            
           </div>
          </div> 
          <div  class="el-select">
           
           <div class="el-input el-input--suffix">
            
            <input type="text" autocomplete="off" placeholder="请选择" readonly="readonly" class="el-input__inner" />
            
            <span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i>
              </span>
             </span>
            
           </div>
           <div class="el-select-dropdown el-popper" style="display: none; min-width: 279px;">
            <div class="el-scrollbar" style="">
             <div class="el-select-dropdown__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
             </div>
             <div class="el-scrollbar__bar is-horizontal">
              <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
             </div>
             <div class="el-scrollbar__bar is-vertical">
              <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
             </div>
            </div>
            
           </div>
          </div> 
          <div  class="el-select">
           
           <div class="el-input el-input--suffix">
            
            <input type="text" autocomplete="off" placeholder="请选择" readonly="readonly" class="el-input__inner" />
            
            <span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i>
              </span>
             </span>
            
           </div>
           <div class="el-select-dropdown el-popper" style="display: none; min-width: 279px;">
            <div class="el-scrollbar" style="">
             <div class="el-select-dropdown__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
              <ul class="el-scrollbar__view el-select-dropdown__list">
               
               <li  class="el-select-dropdown__item"><span  style="float: left;">北京</span> <span  style="float: right; color: rgb(132, 146, 166); font-size: 13px;">Beijing</span></li>
               <li  class="el-select-dropdown__item"><span  style="float: left;">上海</span> <span  style="float: right; color: rgb(132, 146, 166); font-size: 13px;">Shanghai</span></li>
               <li  class="el-select-dropdown__item"><span  style="float: left;">南京</span> <span  style="float: right; color: rgb(132, 146, 166); font-size: 13px;">Nanjing</span></li>
               <li  class="el-select-dropdown__item"><span  style="float: left;">成都</span> <span  style="float: right; color: rgb(132, 146, 166); font-size: 13px;">Chengdu</span></li>
               <li  class="el-select-dropdown__item"><span  style="float: left;">深圳</span> <span  style="float: right; color: rgb(132, 146, 166); font-size: 13px;">Shenzhen</span></li>
               <li  class="el-select-dropdown__item"><span  style="float: left;">广州</span> <span  style="float: right; color: rgb(132, 146, 166); font-size: 13px;">Guangzhou</span></li>
              </ul>
             </div>
             <div class="el-scrollbar__bar is-horizontal">
              <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
             </div>
             <div class="el-scrollbar__bar is-vertical">
              <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
             </div>
            </div>
            
           </div>
          </div>
          
         </div>
        </div> 
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">公司详细地址</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-input">
           
           <input type="text" autocomplete="off" class="el-input__inner" />

          </div>
          
         </div>
        </div> 
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">企业电话</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-input">
           
           <input type="text" autocomplete="off" class="el-input__inner" />

          </div>
          
         </div>
        </div> 
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">公司紧急联系人</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-input">
           
           <input type="text" autocomplete="off" class="el-input__inner" />

          </div>
          
         </div>
        </div> 
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">紧急联系人手机号</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-input">
           
           <input type="text" autocomplete="off" class="el-input__inner" />

          </div>
          
         </div>
        </div> 
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">电子邮箱</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-input">
           
           <input type="text" autocomplete="off" class="el-input__inner" />

          </div>
          
         </div>
        </div>

        <div  style="margin-bottom: 10px;">
         <p  style="font-size: 14px;"><span  style="color: rgb(255, 113, 73);">*</span>&nbsp;一般纳税人证明：所属企业具有一般纳税人证明时，此项为必填</p>
        </div> 
        <div  class="el-form-item nnnn">
         <label class="el-form-item__label" style="width: 80px;">一般纳税人证明</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  style="width: 500px; height: 250px; background: rgb(243, 250, 255); position: relative;">
           <input  type="file" multiple="multiple" class="file" /> 
           <a  href="javascript:0" style="pointer-events: none; display: block; width: 50px; height: 50px; border-radius: 50%; background: rgb(48, 163, 254); position: absolute; margin: auto 210px; top: 0px; bottom: 0px; font-size: 30px; color: rgb(255, 255, 255); line-height: 50px; text-align: center;">+</a>
          </div> 
          <div >
           <p  style="color: rgb(255, 84, 18);">*&nbsp;请确保图片清晰，文字可辨并有清晰的红色公章</p>
          </div>
          
         </div>
        </div>
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">银行开户行</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-input">
           
           <input type="text" autocomplete="off" class="el-input__inner" />
           
           
           
          </div>
          
         </div>
        </div> 
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">个人银行账户</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-input">
           
           <input type="text" autocomplete="off" class="el-input__inner" />
           
           
           
          </div>
          
         </div>
        </div> 
        <div  class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">开户银行支行名称</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-input">
           
           <input type="text" autocomplete="off" class="el-input__inner" />
           
           
           
          </div>
          
         </div>
        </div> 
        <div class="el-form-item">
         <label class="el-form-item__label" style="width: 80px;">支行联行号</label>
         <div class="el-form-item__content" style="margin-left: 80px;">
          <div  class="el-input">
           
           <input type="text" autocomplete="off" class="el-input__inner" />
           
          </div>
          
         </div>
        </div>
            <div  style="width: 800px; display: flex; justify-content: space-around;">
                <a href="<?= Yii::$service->url->getUrl('apply/apply/notes') ?>">
                    <button  type="button" class="el-button el-button--primary is-round">
                        <span>上一步</span>
                    </button> 
                </a>
                <button  type="submit" class="el-button el-button--primary is-round">
                    <span>下一步</span>
                </button>
            </div>
        </form>
      </div>
     </div>
    </div> 
    <div  style="width: 100%; height: 30px; line-height: 30px; text-align: center; margin-top: 100px; font-size: 12px; color: rgb(153, 153, 153);">
     <span >@2015-2018&nbsp;dscmall.cn&nbsp;&nbsp;版本所有ICP备案号：DSC00000249 POWERED</span>
    </div>
   </div>
   <script>
      $(".index-change").click(function(){
        $(".index-change").removeClass("sp router-link-exact-active router-link-active").html('');
        $(this).addClass("sp router-link-exact-active router-link-active").html('√');
      });
   </script>