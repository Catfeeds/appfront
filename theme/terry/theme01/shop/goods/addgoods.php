
  <div class="main-content">
   <div style="width: 1012px; margin: 0px auto;">
    <div class="biaoti">
     <div aria-label="Breadcrumb" role="navigation" class="el-breadcrumb">
      <span class="el-breadcrumb__item">
        <span role="link" class="el-breadcrumb__inner is-link">商品管理</span>
        <span role="presentation" class="el-breadcrumb__separator">&middot;</span>
      </span> 
      <span class="el-breadcrumb__item">
        <span role="link" class="el-breadcrumb__inner"><a href="<?= Yii::$service->url->getUrl('shop/goods/index') ?>" class="">商品列表</a></span>
        <span role="presentation" class="el-breadcrumb__separator">&middot;</span>
      </span> 
      <span class="el-breadcrumb__item" aria-current="page"><span role="link" class="el-breadcrumb__inner"><span style="color: rgb(48, 211, 102); font-weight: bolder;">添加商品</span></span><span role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
     </div>
    </div> 
    <div class="item">
     <ul class="top">
      <li class="btn1"><span class="btn">选择商品分类</span></li>
      <li class="btn2"><span class="btn">填写商品信息</span></li>
      <li class="btn3"><span class="btn">选择商品关联</span></li>
     </ul> 
     <ul class="shuaixuan">
      <li>
          <select name="" id="" class="el-select xiala">
              <option value="" style="display: none;">请选择分类</option>
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3</option>
          </select>
      <li>
       <div class="el-input" style="width: 200px;">
        
        <input type="text" autocomplete="off" placeholder="请输入关键词搜索" class="el-input__inner" />
       </div></li> 
      <li>
       <div class="sousuo"></div></li>
     </ul> 
     <div class="bottom">
      <div class="title">
       <span style="font-size: 14px; color: rgb(206, 203, 203);">您当前选择的商品类别是：</span> 
       <div aria-label="Breadcrumb" role="navigation" class="el-breadcrumb" style="display: inline-block;">
        <span class="el-breadcrumb__item"><span role="link" class="el-breadcrumb__inner">洗衣</span><span role="presentation" class="el-breadcrumb__separator">/</span></span> 
        <span class="el-breadcrumb__item" aria-current="page"><span role="link" class="el-breadcrumb__inner">羽绒服清洗</span><span role="presentation" class="el-breadcrumb__separator">/</span></span>
       </div>
      </div> 
      <div class="select">
       <div>
        <div class="left_box">
         <div class="select_box">
          <div class="col-box"></div> 可选择商品 
         </div> 
         <div class="shuaixuan_bottom">
          <div class="oo">
           <label role="radio" aria-checked="true" tabindex="0" class="el-radio danxuan is-checked"><span class="el-radio__input is-checked"><span class="el-radio__inner"></span><input type="radio" aria-hidden="true" tabindex="-1" class="el-radio__original" value="1" /></span><span class="el-radio__label">羽绒服
             </span></label>
          </div>
          <div class="oo">
           <label role="radio" tabindex="0" class="el-radio danxuan"><span class="el-radio__input"><span class="el-radio__inner"></span><input type="radio" aria-hidden="true" tabindex="-1" class="el-radio__original" value="2" /></span><span class="el-radio__label">卫浴
             </span></label>
          </div>
         </div>
        </div> 
        <div>
         <label role="radio" aria-checked="true" tabindex="0" class="el-radio danxuan is-checked"><span class="el-radio__input is-checked"><span class="el-radio__inner"></span><input type="radio" aria-hidden="true" tabindex="-1" class="el-radio__original" value="1" /></span><span class="el-radio__label">全选
           </span></label> 
         <button type="button" class="el-button blue el-button--primary is-round">
          
          <span>确定</span></button>
        </div>
       </div> 
       <div class="danshuang">
        <!-- <div>
         <label role="radio" aria-checked="true" tabindex="0" class="el-radio danxuan is-checked"><span class="el-radio__input is-checked"><span class="el-radio__inner"></span><input type="radio" aria-hidden="true" tabindex="-1" class="el-radio__original" value="1" /></span><span class="el-radio__label">单向关联
           </span></label>
        </div>  -->
        <!-- <div style="margin-top: 15px;">
         <label role="radio" tabindex="0" class="el-radio danxuan"><span class="el-radio__input"><span class="el-radio__inner"></span><input type="radio" aria-hidden="true" tabindex="-1" class="el-radio__original" value="2" /></span><span class="el-radio__label">双向关联
           </span></label>
        </div> -->
       </div> 
       <div>
        <div class="left_box">
         <div class="select_box">
          <div class="col-box"></div> 跟该商品关联的商品 
         </div> 
         <div class="shuaixuan_bottom">
          <div class="oo">
           <label role="radio" aria-checked="true" tabindex="0" class="el-radio danxuan is-checked"><span class="el-radio__input is-checked"><span class="el-radio__inner"></span><input type="radio" aria-hidden="true" tabindex="-1" class="el-radio__original" value="1" /></span><span class="el-radio__label">浴室柜3423
             </span></label>
          </div> 
          <div class="oo">
           <label role="radio" tabindex="0" class="el-radio danxuan"><span class="el-radio__input"><span class="el-radio__inner"></span><input type="radio" aria-hidden="true" tabindex="-1" class="el-radio__original" value="2" /></span><span class="el-radio__label">晾衣架5624
             </span></label>
          </div> 
          <div class="oo">
           <label role="radio" tabindex="0" class="el-radio danxuan"><span class="el-radio__input"><span class="el-radio__inner"></span><input type="radio" aria-hidden="true" tabindex="-1" class="el-radio__original" value="3" /></span><span class="el-radio__label">花洒
             </span></label>
          </div>
         </div>
        </div> 
        <div>
         <label role="radio" aria-checked="true" tabindex="0" class="el-radio danxuan is-checked"><span class="el-radio__input is-checked"><span class="el-radio__inner"></span><input type="radio" aria-hidden="true" tabindex="-1" class="el-radio__original" value="1" /></span><span class="el-radio__label">全选
           </span></label> 
         <button type="button" class="el-button blue el-button--primary is-round">
          
          <span>移除关联</span></button>
        </div>
       </div>
      </div>
     </div> 
     <a href="#/GoodsAdd2" class=""><button type="button" class="el-button blue el-button--primary is-round">
       
       <span>上一步，填写商品信息</span></button> <button type="button" class="el-button blue el-button--primary is-round">
       
       <span>完成，发布商品</span></button></a>
    </div>
   </div>
  </div>
<style>
    .main-content .biaoti {
        height: 52px;
        font-size: 12px;
        line-height: 52px;
    }

    .main-content .item {
        width: 100%;
        height: 50px;
    }

    .main-content .item .top {
        width: 100%;
        height: 39px;
        display: flex;
        justify-content: space-between;
        font-size: 12px;
        color: #000;
        line-height: 39px;
    }

    .item .top .btn1 {
        background: url("/public/img/add1.png") no-repeat center center/100% auto;
    color: white;
    }

    .item .top .btn2{
        background: url("/public/img/add4.png") no-repeat center center/100% auto;
        color: white;
    }

    .item .top .btn3 {
        background: url("/public/img/add5.png") no-repeat center center/100% auto;
        color: white;
    }

    .top li {
        width: 333px;
        height: 100%;
        text-align: center;
    }
    .main-content .item .bottom {
        width: 100%;
        margin-bottom: 40px;
    }

    .bottom .title {
        width: 320px;
        height: 46px;
        margin-top: 10px;
        line-height: 46px;
        font-size: 12px;
    }
    .item .shuaixuan .xiala {
        padding-left: 5px;
        width: 98px;
        outline: none;
        font-size: 12px;
        height: 30px;
        border-radius: 15px;
        background: #f3faff;
        border: 2px solid #e5eff8;
    }
    .shuaixuan .el-select:hover {
        border-color: #3CACFE;
    }
    .shuaixuan .el-input__inner:hover{
        border-color: #3CACFE;
    }
    .bottom .select {
        width: 100%;
        border-radius: 5px;
        margin-bottom: 10px;
        margin-top: 15px;
        display: flex;
    }

    .shuaixuan {
        height: 46px;
        width: 450px;
        display: flex;
        justify-content: space-between;
        line-height: 46px;
        margin-top:20px;
    }
    .select .oo{
        margin-top:10px;
    }
    .sousuo {
        margin-top: 5px;
        width: 40px;
        height: 40px;
        background: url("/public/img/sousuo.png") no-repeat center center/100% auto;
    }

    .main-content .blue {
        height: 30px;
        background: #30B5FE;
        border: none;
        box-shadow: 0 0 5px #30B5FE;
        margin-left: 20px;
        padding-top: 8px;
    }

    .select .left_box {
        width: 309px;
        height: 250px;
        background: #f8fcff;
        border: 2px solid #ebf6ff;
        padding-left: 17px;
        padding-top: 20px;
        line-height: 36px;
        border-radius: 10px;
        margin-bottom: 30px;
    }

    .select .select_box {
        width: 309px;
        height: 42px;
        line-height: 42px;
        font-size: 18px;
        font-weight: bolder;
        overflow: auto;
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

    .select .danshuang {
        width: 100px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }
    .shuaixuan_bottom{
        margin-left: 20px;
        color: #9AA1A5;
    }
    .shuaixuan_bottom .danxuan {
        width: 20px;
        height: 20px;
        font-size: 12px;
    }
</style>