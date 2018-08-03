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

    .content .shuaixuan {
        height: 46px;
        width: 900px;
        display: flex;
        justify-content: space-between;
        line-height: 46px;
        font-size: 12px;
        color: #a4adb5;
    }
    .content .shuaixuan .xiala {
        padding-left: 5px;
        width: 120px;
        outline: none;
        height: 30px;
        border-radius: 15px;
        background: #f3faff;
        border: 2px solid #e5eff8;
        color: #9eabb5;
        font-size: 14px;
    }
    .shuaixuan .el-select:hover {
        border-color: #c0c4cc;
    }
    .shuaixuan .el-select:focus {
        border-color: #3CACFE;
    }

    .sousuo {
        margin-top: 5px;
        width: 40px;
        height: 40px;
        background: url("/public/img/sousuo.png") no-repeat center center/100% auto;
    }

    .content .item {
        width: 100%;
        margin-top: 10px;
    }
    .content .green {
        width: 112px;
        height: 33px;
        background: #37DF73;
        border: none;
        box-shadow: 0 0 8px #37DF73;
        padding-top: 10px;
    }

    .content .blue {
        width: 112px;
        height: 33px;
        background: #30B5FE;
        border: none;
        box-shadow: 0 0 8px #30B5FE;
        padding-top: 10px;
    }



</style>
  <div  class="main-content">
   <div  style="width: 1012px; margin: 0px auto;">
    <div  >
     <div  class="content">
      <div  class="biaoti">
       <div  aria-label="Breadcrumb" role="navigation" class="el-breadcrumb">
        <span  class="el-breadcrumb__item"><span role="link" class="el-breadcrumb__inner is-link">账号管理</span><span role="presentation" class="el-breadcrumb__separator">&middot;</span></span> 
        <span  class="el-breadcrumb__item" aria-current="page"><span role="link" class="el-breadcrumb__inner"><span  style="color: rgb(48, 211, 102);">资金列表</span></span><span role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
       </div>
      </div> 
      <ul  class="shuaixuan">
       <li>
           <select name="" id="" class="el-select xiala">
               <option value="" style="display: none;">最近一个月</option>
               <option value="">1</option>
               <option value="">2</option>
           </select>
          <li style="
                display: flex;
                align-items: center;
                    ">
              <div class="el-form-item__content" style="margin-left: 10px;">
                  <input type="text" name="data" class="demo-input" placeholder="日期时间范围" id="test10">
              </div>
          </li>
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
              .el-form-item__content {
                  line-height: normal;
              }

              .el-form-item__content {
                  line-height: 40px;
                  position: relative;
                  font-size: 14px;
              }
              .layui-laydate .layui-this{
                  background: #30B5FE !important;
              }
          </style>
       <li >
        <div  class="el-input" style="width: 200px;">
         <input type="text" autocomplete="off" placeholder="请输入关键字搜索" class="el-input__inner" />
        </div></li> 
       <li >
        <div  class="sousuo"></div></li>
      </ul> 
      <div  class="item">
       <div  class="el-table el-table--fit el-table--enable-row-hover el-table--enable-row-transition" style="width: 100%;">
        <div class="hidden-columns">
         <div ></div> 
         <div ></div> 
         <div ></div> 
         <div ></div> 
         <div ></div> 
         <div ></div> 
         <div ></div>
        </div>
        <div class="el-table__header-wrapper">
         <table cellspacing="0" cellpadding="0" border="0" class="el-table__header" style="width: 1064px;">
          <colgroup>
           <col name="el-table_2_column_10" width="50" />
           <col name="el-table_2_column_11" width="169" />
           <col name="el-table_2_column_12" width="169" />
           <col name="el-table_2_column_13" width="169" />
           <col name="el-table_2_column_14" width="169" />
           <col name="el-table_2_column_15" width="169" />
           <col name="el-table_2_column_16" width="169" />
           <col name="gutter" width="0" />
          </colgroup>
          <thead class="has-gutter">
           <tr style="font-size: 14px;color: #B1DBFE;">
            <th colspan="1" rowspan="1" class="el-table_2_column_10   el-table-column--selection  is-leaf">
             <div class="cell">
              <label role="checkbox" class="el-checkbox"><span aria-checked="mixed" class="el-checkbox__input"><span class="el-checkbox__inner"></span><input type="checkbox" aria-hidden="true" class="el-checkbox__original" value="" /></span>
               </label>
             </div></th>
            <th colspan="1" rowspan="1" class="el-table_2_column_11     is-leaf">
             <div class="cell">
              账户变动时间
             </div></th>
            <th colspan="1" rowspan="1" class="el-table_2_column_12     is-leaf">
             <div class="cell">
              操作详情
             </div></th>
            <th colspan="1" rowspan="1" class="el-table_2_column_13     is-leaf">
             <div class="cell">
              类型
             </div></th>
            <th colspan="1" rowspan="1" class="el-table_2_column_14     is-leaf">
             <div class="cell">
              金额
             </div></th>
            <th colspan="1" rowspan="1" class="el-table_2_column_15     is-leaf">
             <div class="cell">
              账户可用余额
             </div></th>
            <th colspan="1" rowspan="1" class="el-table_2_column_16     is-leaf">
             <div class="cell">
              操作
             </div></th>
            <th class="gutter" style="width: 0px; display: none;"></th>
           </tr>
          </thead>
         </table>
        </div>
        <div class="el-table__body-wrapper is-scrolling-none">
         <table cellspacing="0" cellpadding="0" border="0" class="el-table__body" style="width: 1064px;">
          <colgroup>
           <col name="el-table_2_column_10" width="50" />
           <col name="el-table_2_column_11" width="169" />
           <col name="el-table_2_column_12" width="169" />
           <col name="el-table_2_column_13" width="169" />
           <col name="el-table_2_column_14" width="169" />
           <col name="el-table_2_column_15" width="169" />
           <col name="el-table_2_column_16" width="169" />
          </colgroup>
          <tbody style="font-size: 12px;color:#82898e">
           <tr class="el-table__row">
            <td class="el-table_2_column_10  el-table-column--selection">
             <div class="cell">
              <label role="checkbox" class="el-checkbox"><span aria-checked="mixed" class="el-checkbox__input"><span class="el-checkbox__inner"></span><input type="checkbox" aria-hidden="true" class="el-checkbox__original" value="" /></span>
               </label>
             </div></td>
            <td class="el-table_2_column_11  ">
             <div class="cell">
              2018-5-29 18:25:00
             </div></td>
            <td class="el-table_2_column_12  ">
             <div class="cell">
              6月平台结算
             </div></td>
            <td class="el-table_2_column_13  ">
             <div class="cell">
              月底结算
             </div></td>
            <td class="el-table_2_column_14  ">
             <div class="cell">
              6,720
             </div></td>
            <td class="el-table_2_column_15  ">
             <div class="cell">
              111,098
             </div></td>
            <td class="el-table_2_column_16  ">
             <div class="cell">
              <a  href="#/AccountMoney1" style="color:rgb(255, 143, 113)">资金明细</a>
             </div></td>
           </tr>
           <tr class="el-table__row">
            <td class="el-table_2_column_10  el-table-column--selection">
             <div class="cell">
              <label role="checkbox" class="el-checkbox"><span aria-checked="mixed" class="el-checkbox__input"><span class="el-checkbox__inner"></span><input type="checkbox" aria-hidden="true" class="el-checkbox__original" value="" /></span>
               </label>
             </div></td>
            <td class="el-table_2_column_11  ">
             <div class="cell">
              2018-5-29 18:25:00
             </div></td>
            <td class="el-table_2_column_12  ">
             <div class="cell">
              6月平台结算
             </div></td>
            <td class="el-table_2_column_13  ">
             <div class="cell">
              月底结算
             </div></td>
            <td class="el-table_2_column_14  ">
             <div class="cell">
              6,720
             </div></td>
            <td class="el-table_2_column_15  ">
             <div class="cell">
              111,098
             </div></td>
            <td class="el-table_2_column_16  ">
             <div class="cell">
              <a  href="#/AccountMoney1" style="color:rgb(255, 143, 113)">资金明细</a>
             </div></td>
           </tr>
           <tr class="el-table__row">
            <td class="el-table_2_column_10  el-table-column--selection">
             <div class="cell">
              <label role="checkbox" class="el-checkbox"><span aria-checked="mixed" class="el-checkbox__input"><span class="el-checkbox__inner"></span><input type="checkbox" aria-hidden="true" class="el-checkbox__original" value="" /></span>
               </label>
             </div></td>
            <td class="el-table_2_column_11  ">
             <div class="cell">
              2018-5-29 18:25:00
             </div></td>
            <td class="el-table_2_column_12  ">
             <div class="cell">
              6月平台结算
             </div></td>
            <td class="el-table_2_column_13  ">
             <div class="cell">
              月底结算
             </div></td>
            <td class="el-table_2_column_14  ">
             <div class="cell">
              6,720
             </div></td>
            <td class="el-table_2_column_15  ">
             <div class="cell">
              111,098
             </div></td>
            <td class="el-table_2_column_16  ">
             <div class="cell">
              <a  href="#/AccountMoney1" style="color:rgb(255, 143, 113)">资金明细</a>
             </div></td>
           </tr>
          </tbody>
         </table>
        </div>
        <div class="el-table__column-resize-proxy" style="display: none;"></div>
       </div>
       <div  style="margin-top: 20px;position: relative;">
           <div style="width: 200px; position: absolute; right: 0px; top: 0px; display: flex; justify-content: space-between;">
               <div style="display: flex;">
                   <div class="dian"></div>
                   总计
                   <span style="color: rgb(61, 176, 255); font-weight: bolder;margin:0 5px;"><?= $tot ?></span>记录
               </div>
               <div style="display: flex;">
                   <div class="dian" style="background: rgb(41, 201, 154);"></div>
                   分
                   <span style="font-weight: bolder; color: rgb(41, 201, 154);margin:0 5px;"><?= ceil($tot / 10) ?></span>页
               </div>
           </div>
        <button  type="button" class="el-button el-button--default">
         
         <span>全选</span></button> 
        <button  type="button" class="el-button green el-button--success is-round">
         
         <span>导出</span></button> 
<!--        <button  type="button" class="el-button blue el-button--primary is-round">-->
<!--         -->
<!--         <span>打印</span></button>-->
       </div> 
       <div  style="float: right; margin-top: 50px;">
        <div  class="el-pagination is-background">
         <button type="button" disabled="disabled" class="btn-prev"><i class="el-icon el-icon-arrow-left"></i></button>
         <ul class="el-pager">
          <li class="number active">1</li>
          
          <li class="number">2</li>
          <li class="number">3</li>
          <li class="number">4</li>
          <li class="number">5</li>
          <li class="number">6</li>
          <li class="el-icon more btn-quicknext el-icon-more"></li>
          <li class="number">10</li>
         </ul>
         <button type="button" class="btn-next"><i class="el-icon el-icon-arrow-right"></i></button>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
