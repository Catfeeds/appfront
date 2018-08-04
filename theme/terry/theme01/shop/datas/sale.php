
  <div  class="main-content">
   <div  style="width: 1012px; margin: 0px auto;">
    <div  >
     <div  class="content">
      <div  class="biaoti">
       <div  aria-label="Breadcrumb" role="navigation" class="el-breadcrumb">
        <span  class="el-breadcrumb__item"><span role="link" class="el-breadcrumb__inner is-link">数据统计</span><span role="presentation" class="el-breadcrumb__separator">&middot;</span></span> 
        <span  class="el-breadcrumb__item" aria-current="page"><span role="link" class="el-breadcrumb__inner"><span  style="color: rgb(48, 211, 102);">销售统计</span></span><span role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
       </div>
      </div> 
      <ul  class="shuaixuan">
       <li >
        <div  class="el-select" style="width: 150px;">
         <!---->
         <div class="el-input el-input--suffix">
          <!---->
          <input type="text" autocomplete="off" placeholder="最近一周" readonly="readonly" class="el-input__inner" />
          <!---->
          <span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-arrow-up"></i>
            <!----></span>
           <!----></span>
          <!---->
         </div>
         <div class="el-select-dropdown el-popper" style="display: none; min-width: 150px;">
          <div class="el-scrollbar" style="">
           <div class="el-select-dropdown__wrap el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
            <ul class="el-scrollbar__view el-select-dropdown__list">
             <!---->
             <li  class="el-select-dropdown__item"><span>1</span></li>
             <li  class="el-select-dropdown__item"><span>2</span></li>
             <li  class="el-select-dropdown__item"><span>3</span></li>
            </ul>
           </div>
           <div class="el-scrollbar__bar is-horizontal">
            <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
           </div>
           <div class="el-scrollbar__bar is-vertical">
            <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
           </div>
          </div>
          <!---->
         </div>
        </div></li> 
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
      </style>
       <li >时间段选择

           <input id="test2" class="demo-input" placeholder="日期时间范围" style="width: 300px">
           <script>
               laydate.render({
                   elem: '#test2'
                   , type: 'datetime'
                   , range: true
                   , theme: "#3CACFE"
               });
           </script>
       </li>
       <li ><button  type="button" class="el-button el-button--primary is-round">
         <!---->
         <!----><span>查询</span></button></li>
      </ul> 
      <ul  class="item">
       <li >
        <div  class="item_box1">
         6723.9
        </div> 
        <div  class="item_box2">
         成交金额（元）
        </div></li> 
       <li >
        <div  class="item_box1">
         3456
        </div> 
        <div  class="item_box2">
         金币总数
        </div></li> 
       <li >
        <div  class="item_box1">
         19%
        </div> 
        <div  class="item_box2">
         成交转化率
        </div></li>
      </ul> 
      <div  class="item1">
       <div  class="title1">
        <div  class="title_left">
         销售额趋势
        </div> 
        <div  class="title_right">
            <div  class="btn btnorder active"  uri='1'>
                7天
            </div>
            <div  class="btn btnorder"  uri='2'>
                一个月
            </div>
            <div  class="btn btnorder"  uri='3'>
                一个季度
            </div>
            <div  class="btn btnorder"  uri='4'>
                一年
            </div>
        </div> 
        <ul  style="display: flex;">
         <li >
             <input id="test3" class="demo-input" placeholder="日期时间范围" style="width: 300px">
             <script>
                 laydate.render({
                     elem: '#test3'
                     , type: 'datetime'
                     , range: true
                     , theme: "#3CACFE"
                 });
             </script>
         </li>
         <li ><button  type="button" class="el-button el-button--primary is-round" style="width: 50px; height: 30px; line-height: 5px; font-size: 12px; padding-left: 12px;">
           <!---->
           <!----><span> 确定 </span></button></li>
        </ul>
       </div> 
       <div  class="bottom">
        <div  class="contents active">
         <div  class="tu3"></div>
        </div> 
        <div  class="contents">
         一个月
        </div> 
        <div  class="contents">
         一个季度
        </div> 
        <div  class="contents">
         一年
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <script>
      $(function () {
          var myCharts = echarts.init(document.querySelector('.tu3'));
          $('#test3').on('blur',function(){
              $('.laydate-btns-confirm').on('click',function () {
                  let  test3=$('#test3');
                  let date = test3.val().split(" - ");
                  console.log(date);
                  var sta=date[0];var end=date[1];
                  var url="<?= Yii::$service->url->getUrl('shop/datas/salesearchdate') ?>?type=1&sta="+sta+"&end="+end;
                  $.get(url).done(function (data) {
                      var row =JSON.parse(data);
                      console.log(data);
                      // 填入数据
                      myCharts.setOption({
                          title: {
                              text: ''
                          },
                          tooltip: {},
                          legend: {
                              data:['下单','成交']
                          },
                          xAxis: {
                              data:row.dat    /* row.dat */
                          },
                          yAxis: {},
                          series: [{
                              name: '下单',
                              type: 'line',
                              data:row.moneyall    /* row.moneyorder */
                          },
                              {
                                  name: '成交',
                                  type: 'line',
                                  data:row.moneyorder    /* row.moneyorder */
                              },
                          ],
                          toolbox: {

                              show: true,

                              feature: {

                                  saveAsImage: {

                                      show:true,

                                      excludeComponents :['toolbox'],

                                      pixelRatio: 2

                                  }

                              }

                          }
                      });
                  });
              })
          })

          var url = "<?= Yii::$service->url->getUrl("shop/datas/saleweek") ?>?type="+3;
          $('.btnorder').on("click",function () {
              $('.btnorder').removeClass('active').filter(this).addClass('active');

              if($(this).attr("uri")==1){
                  url="<?= Yii::$service->url->getUrl("shop/datas/saleweek") ?>?type="+3;
              }else if($(this).attr("uri")==2){
                  url="<?= Yii::$service->url->getUrl("shop/datas/salemonth") ?>?type="+3;
              }else if($(this).attr("uri")==3){
                  url="<?= Yii::$service->url->getUrl("shop/datas/salequarter") ?>?type="+3;
              }else if($(this).attr("uri")==4){
                  url="<?= Yii::$service->url->getUrl("shop/datas/saleyear") ?>?type="+3;
              }
              $.get(url).done(function (data) {
                  var row =JSON.parse(data);
                  // 填入数据
                  myCharts.setOption({
                      title: {
                          text: ''
                      },
                      tooltip: {},
                      legend: {
                          data:['下单','成交']
                      },
                      xAxis: {
                          data:row.dat    /* row.dat */
                      },
                      yAxis: {},
                      series: [{
                          name: '下单',
                          type: 'line',
                          data:row.moneyall    /* row.moneyorder */
                      },
                          {
                              name: '成交',
                              type: 'line',
                              data:row.moneyorder    /* row.moneyorder */
                          },
                      ],
                      toolbox: {

                          show: true,

                          feature: {

                              saveAsImage: {

                                  show:true,

                                  excludeComponents :['toolbox'],

                                  pixelRatio: 2

                              }

                          }

                      }
                  });


              });
          })
          $.get(url).done(function (data) {
              var row =JSON.parse(data);
              // 填入数据
              myCharts.setOption({
                  title: {
                      text: ''
                  },
                  tooltip: {},
                  legend: {
                      data:['下单','成交']
                  },
                  xAxis: {
                      data:row.dat    /* row.dat */
                  },
                  yAxis: {},
                  series: [{
                      name: '下单',
                      type: 'line',
                      data:row.moneyall    /* row.moneyorder */
                  },
                      {
                          name: '成交',
                          type: 'line',
                          data:row.moneyorder    /* row.moneyorder */
                      },
                  ],
                  toolbox: {

                      show: true,

                      feature: {

                          saveAsImage: {

                              show:true,

                              excludeComponents :['toolbox'],

                              pixelRatio: 2

                          }

                      }

                  }
              });


          });
      })
  </script>
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
        width: 780px;
        display: flex;
        justify-content: space-between;
        line-height: 46px;
    }

    .content .item {
        height: 85px;
        width: 573px;
        display: flex;
        justify-content: space-between;
        line-height: 46px;

    }
    .content .item li{
        width: 180px;
        height:85px ;
        padding-left: 80px;
        padding-top: 10px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    .content .item li:first-child {

        background: url("/public/img/bg1.png");
    }

    .content .item li:nth-child(2) {

        background: url("/public/img/bg2.png");
    }

    .content .item li:last-child {

        background: url("/public/img/bg3.png");
    }

    .item li .item_box1 {
        height: 30px;
        font-size: 20px;
        line-height: 30px;
        font-weight: bolder;
        color: white;
    }

    .item li .item_box2 {
        height: 35px;
        font-size: 12px;
        color: white;
        line-height: 35px;
    }
.title_right .active {
       border-bottom: 2px solid #30A6FE;
   }

    .content .item1 {
        width: 1014px;
        margin-top: 28px;
    }

    .content .item1 .title1 {
        width: 100%;
        border-bottom: 1px solid #30A6FE;
        display: flex;
        justify-content: space-between;
        line-height: 40px;
        color: #30A6FE;

    }

    .content .item1 .btn {
        float: left;
        line-height: 40px;
    }

    .content .item1 .bottom {
        width: 100%;
        padding-top: 10px;
        padding-bottom: 20px;
        box-sizing: border-box;
    }

    .content .item1 .bottom .contents {
        width: 100%;
        display: none;
    }

    .content .item1 .bottom .active {
        display: block;
    }

    .item1 .bottom .contents .tu3 {
        width: 100%;
        height: 500px;
        /*background: url("/public/img/zhexiantu.png") no-repeat center center /100% auto;*/
    }
</style>