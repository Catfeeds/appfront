
  <div  class="main-content">
   <div  style="width: 1012px; margin: 0px auto;">
    <div  >
     <div  class="content">
      <div  class="biaoti">
       <div  aria-label="Breadcrumb" role="navigation" class="el-breadcrumb">
        <span  class="el-breadcrumb__item"><span role="link" class="el-breadcrumb__inner is-link">数据统计</span><span role="presentation" class="el-breadcrumb__separator">&middot;</span></span> 
        <span  class="el-breadcrumb__item" aria-current="page"><span role="link" class="el-breadcrumb__inner"><span  style="color: rgb(48, 211, 102);font-weight: bold">订单统计</span></span><span role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
       </div>
      </div> 
      <ul  class="shuaixuan">
       <li >
           <select name="" id="sel" class="el-select xiala"  onchange="sel(1)">
               <option value="" style="display: none;"></option>
               <option value="1" selected>最近一周</option>
               <option value="2">最近一月</option>
               <option value="3">最近一年</option>
           </select>
       <li >时间段选择
           <input type="text" name="data" class="demo-input" placeholder="日期时间范围" id="test1">
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
          <script>
              laydate.render({
                  elem: '#test1'
                  , type: 'datetime'
                  , range: true
                  , theme: "#3CACFE"
              });
          </script>
       <li ><!--<button  type="button" class="el-button el-button--primary is-round">

         <span>查询</span></button>--></li>
      </ul> 
      <ul  class="item">
       <li >
        <div  class="item_box">
         <div  class="item_box1">
          点击量统计
         </div> 
         <div  class="item_box2">
          0
         </div>
        </div></li> 
       <li >
        <div  class="item_box">
         <div  class="item_box1">
          下单量统计
         </div> 
         <div  class="item_box2 xd">

         </div>
        </div></li> 
       <li >
        <div  class="item_box">
         <div  class="item_box1">
          成交量统计
         </div> 
         <div  class="item_box2 cj" >
         </div>
        </div></li> 
       <li >
        <div  class="item_box">
         <div  class="item_box1">
          退货量统计
         </div> 
         <div  class="item_box2 th">

         </div>
        </div></li> 
       <li >
        <div  class="item_box">
         <div  class="item_box1">
          好评率
         </div> 
         <div  class="item_box2 hp">
         </div>
        </div></li> 
       <li >
        <div  class="item_box">
         <div  class="item_box1">
          投诉率
         </div> 
         <div  class="item_box2">
          2%
         </div>
        </div></li>
      </ul>
         <script>
             document.querySelector("#test1").addEventListener("blur",function () {
                 document.querySelector(".laydate-btns-confirm").onclick=function () {
                     sel(2);
                 }
             });
             var el_select = document.querySelector("#sel");
             var test1 = document.querySelector("#test1");
             sel(1);
             function sel(flag){
                 var t1 = "",t2="";
                 if(flag==1){
                     if(el_select.value==1){
                         t1 = timeForMat(7)["t2"];
                         t2 = timeForMat(7)["t1"];
                     }else if(el_select.value==2){
                         t1 = timeForMat(30)["t2"];
                         t2 = timeForMat(30)["t1"];
                     }else if(el_select.value==3){
                         t1 = timeForMat(365)["t2"];
                         t2 = timeForMat(365)["t1"];
                     }
                     document.querySelector("#test1").value="";
                 }else if(flag==2){
                     el_select.value="";
                     var arr = test1.value.split(" - ");
                     t1=arr[0];t2=arr[1];
                 }


                 $.ajax({
                     url:"/water/datas/count?t1="+t1+"&t2="+t2,
                     dataType:"json",
                     success:function (data) {
                         document.querySelector(".xd").innerHTML=data[0].nums;
                         document.querySelector(".cj").innerHTML=data[1].nums;
                         document.querySelector(".th").innerHTML=data[2].nums;

                         var n=0;
                         data[3].forEach(function (val) {
                             if(val.rate_star>3){
                                 n++;
                             }
                         });
                         if(data[3].length){
                             document.querySelector(".hp").innerHTML = ((n/(data[3].length)).toFixed(2)*100)+"%";

                         }else {
                             document.querySelector(".hp").innerHTML="无";
                         }

                     }

                 });


             }


         </script>

      <div  class="item1">
       <div  class="box1">
        <div  class="title">
         <div  class="title_left">
          评价汇总
         </div>
         <div  class="title_right">
          <div  class="btn active btn1">
           7天
          </div>
          <div  class="btn btn1">
           一个月
          </div>
          <div  class="btn btn1">
           一个季度
          </div>
          <div  class="btn bnt1">
           一年
          </div>
         </div>
        </div> 
        <div  class="bottom">
         <div  class="contents active">
          <ul  style="display: flex; justify-content: space-between;">
              <li >
                  时间段选择
                  <input type="text" name="data" class="demo-input" placeholder="日期时间范围" id="test2">
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
              <script>
                  laydate.render({
                      elem: '#test2'
                      , type: 'datetime'
                      , range: true
                      , theme: "#3CACFE"
                  });
              </script>
               <li><!--<button  type="button" class="el-button el-button--primary is-round" style="width: 50px; height: 30px; line-height: 5px; font-size: 12px; padding-left: 12px;">

                 <span> 确定 </span></button>--></li>
          </ul> 
          <div  class="tu1"></div>
            <script>
                 $(function () {
                     $('#test2').on('blur',function(){
                         $('.laydate-btns-confirm').on('click',function () {
                             getinfo(2,-1);
                         })
                     })
                     $('.btn1').on('click',function(){
                         $('.btn1').removeClass('active').filter(this).addClass('active');
                         let  test2=$('#test2');
                         let date=$(this).attr('date');
                         getinfo(1,date);
                     })
                     function getinfo(flag,date) {
                         var t1="",t2="";
                         if(flag==1){
                             if(date==7){
                                 t1 = timeForMat(7)["t2"];
                                 t2 = timeForMat(7)["t1"];
                             }else if(date == 30){
                                 t1 = timeForMat(30)["t2"];
                                 t2 = timeForMat(30)["t1"];
                             }else if(date==90){
                                 t1 = timeForMat(120)["t2"];
                                 t2 = timeForMat(120)["t1"];
                             }else if(date==365){
                                 t1 = timeForMat(365)["t2"];
                                 t2 = timeForMat(365)["t1"];
                             }
                         }else if(flag==2){
                             date = test2.value.split(" - ");
                             t1=date[0];t2=date[1];
                         }

                         var favorable,reviewable,nagetivable;
                         $.ajax({
                             url:"/water/datas/countdate?t1="+t1+"&t2="+t2,
                             dataType:'json',
                             success:function (msg) {
                                 for(let i=0;i<msg.length;i++){
                                     msg[i]=filtert2(msg[i],t2);
                                 }
                                 favorable=msg[0].length;
                                 reviewable=msg[1].length;
                                 nagetivable=msg[2].length;
                                 getChart(favorable,reviewable,nagetivable);
                             }
                         });
                         function getChart(a,b,c) {
                             var myChart = echarts.init(document.querySelector('.tu1'));
                             var option={

                                 legend: {
                                     itemWidth: 20,
                                     itemHeight: 20,
                                     orient: 'vertical',
                                     // top: 'middle',
                                     bottom: 20,
                                     right:24,
                                     data: ['好评', '中评','差评']
                                 },
                                 tooltip : {
                                     trigger: 'item',
                                     formatter: "{a} <br/>{b} : {c} ({d}%)"
                                 },
                                 series : [
                                     {
                                         type: 'pie',
                                         radius : '80%',
                                         center: ['50%', '50%'],
                                         selectedMode: 'single',
                                         data:[
                                             {value:a, name: '好评'},
                                             {value:b, name: '中评'},
                                             {value:c, name: '差评'},
                                         ],
                                         itemStyle: {
                                             normal: {
                                                 borderWidth: 10,
                                                 borderColor: '#ffffff',
                                             },

                                         }
                                     }
                                 ],
                                 color: ['rgb(48,163,254)','rgb(55,223,116)','rgb(253,203,82)']
                             };
                             myChart.setOption(option);
                         }
                         function filtert2(arr,t2) {
                             arr=arr.filter(ele=>{return ele.review_date<t2});
                             return arr;
                         }
                     }

                     $('.btn1').triggerHandler('click');
                 })
             </script>
<!--zjz-->
          <!--<div >
           <button  type="button" class="el-button el-button--primary is-round">
            <span>导出图片</span></button>
           <button  type="button" class="el-button el-button--success is-round">
           <span>导出表格</span></button>
           <button  type="button" class="el-button el-button--warning is-round">
            <span>导出报告</span></button>
          </div>-->
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
       <div  class="box1">
        <div  class="title">
         <div  class="title_left">
          投诉汇总
         </div>
         <div  class="title_right">
          <div  class="btn btn2 active">
           7天
          </div>
          <div  class="btn btn2">
           一个月
          </div>
          <div  class="btn btn2">
           一个季度
          </div>
          <div  class="btn btn2">
           一年
          </div>
         </div>
        </div> 
        <div  class="bottom">
         <div  class="contents active">
          <ul  style="display: flex; justify-content: space-between;">
              <li >
                  时间段选择
                  <input type="text" name="data" class="demo-input" placeholder="日期时间范围" id="test4">
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
              <script>
                  laydate.render({
                      elem: '#test4'
                      , type: 'datetime'
                      , range: true
                      , theme: "#3CACFE"
                  });
              </script>
           <li><!--<button  type="button" class="el-button el-button--primary is-round" style="width: 50px; height: 30px; line-height: 5px; font-size: 12px; padding-left: 12px;">
             <span> 确定 </span></button>--></li>
          </ul> 
          <div  class="tu2"></div>
             <script>
                 $(function () {
                     $('#test4').on('blur',function(){
                         $('.laydate-btns-confirm').on('click',function () {
                             // getinfo(2,-1);
                             getChart(3,5,3);
                         })
                     })
                     function getChart(a,b,c) {
                         var myChart = echarts.init(document.querySelector('.tu2'));
                         var option={

                             legend: {
                                 itemWidth: 20,
                                 itemHeight: 20,
                                 orient: 'vertical',
                                 // top: 'middle',
                                 bottom: 20,
                                 right:-4,
                                 data: ['商家爽约', '服务不好','态度不好','连带推销','恶意跳单','乱收费','其他']
                             },
                             tooltip : {
                                 trigger: 'item',
                                 formatter: "{a} <br/>{b} : {c} ({d}%)"
                             },
                             series : [
                                 {
                                     type: 'pie',
                                     radius : '80%',
                                     center: ['50%', '50%'],
                                     selectedMode: 'single',
                                     data:[
                                         {value:a, name: '商家爽约'},
                                         {value:b, name: '服务不好'},
                                         {value:c, name: '态度不好'},
                                         {value:c, name: '连带推销'},
                                         {value:c, name: '恶意跳单'},
                                         {value:c, name: '乱收费'},
                                         {value:c, name: '其他'}
                                     ],
                                     itemStyle: {
                                         normal: {
                                             borderWidth: 10,
                                             borderColor: '#ffffff',
                                         },

                                     }
                                 }
                             ],
                             color: ['rgb(48,163,254)','rgb(55,223,116)','rgb(253,203,82)']
                         };
                         myChart.setOption(option);
                     }
                     $('.btn2').on('click',function(){
                         $('.btn2').removeClass('active').filter(this).addClass('active');
                         let  test4=$('#test4');
                         let date=$(this).attr('date');
                         getinfo(1,date);
                     })
                     function getinfo(flag,date) {
                         var t1="",t2="";
                         if(flag==1){
                             if(date==7){
                                 t1 = timeForMat(7)["t2"];
                                 t2 = timeForMat(7)["t1"];
                             }else if(date == 30){
                                 t1 = timeForMat(30)["t2"];
                                 t2 = timeForMat(30)["t1"];
                             }else if(date==90){
                                 t1 = timeForMat(120)["t2"];
                                 t2 = timeForMat(120)["t1"];
                             }else if(date==365){
                                 t1 = timeForMat(365)["t2"];
                                 t2 = timeForMat(365)["t1"];
                             }
                         }else if(flag==2){
                             date = test2.value.split(" - ");
                             t1=date[0];t2=date[1];
                         }

                         var favorable,reviewable,nagetivable;
                         $.ajax({
                             url:"/water/datas/complaint?t1="+t1+"&t2="+t2,
                             dataType:'json',
                             success:function (msg) {
                                 console.log(msg);
                                 // getChart(3,5,3);
                             }
                         });

                         function getChart(a,b,c) {
                             var myChart = echarts.init(document.querySelector('.tu2'));
                             var option={

                                 legend: {
                                     itemWidth: 20,
                                     itemHeight: 20,
                                     orient: 'vertical',
                                     // top: 'middle',
                                     bottom: 20,
                                     right:24,
                                     data: ['商家爽约', '服务不好','态度不好']
                                 },
                                 tooltip : {
                                     trigger: 'item',
                                     formatter: "{a} <br/>{b} : {c} ({d}%)"
                                 },
                                 series : [
                                     {
                                         type: 'pie',
                                         radius : '80%',
                                         center: ['50%', '50%'],
                                         selectedMode: 'single',
                                         data:[
                                             {value:a, name: '商家爽约'},
                                             {value:b, name: '服务不好'},
                                             {value:c, name: '态度不好'},
                                         ],
                                         itemStyle: {
                                             normal: {
                                                 borderWidth: 10,
                                                 borderColor: '#ffffff',
                                             },

                                         }
                                     }
                                 ],
                                 color: ['rgb(48,163,254)','rgb(55,223,116)','rgb(253,203,82)']
                             };
                             myChart.setOption(option);
                         }
                         function filtert2(arr,t2) {
                             arr=arr.filter(ele=>{return ele.review_date<t2});
                             return arr;
                         }
                     }

                     // $('.btn2').triggerHandler('click');
                 })
             </script>
             <!--zjz-->
          <!--<div >
           <button  type="button" class="el-button el-button--primary is-round">
            <span>导出图片</span></button>
           <button  type="button" class="el-button el-button--success is-round">
            <span>导出表格</span></button>
           <button  type="button" class="el-button el-button--warning is-round">
            <span>导出报告</span></button>
          </div>-->
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
      <div  class="item2">
       <div  class="title2">
        <div  class="title_left">
         订单数量走势
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
             时间段选择
             <input type="text" name="data" class="demo-input" placeholder="日期时间范围" id="test3">
         </li>
            <script>
                laydate.render({
                    elem: '#test3'
                    , type: 'datetime'
                    , range: true
                    , theme: "#3CACFE"
                });
                $(function () {
                    var myCharts = echarts.init(document.querySelector('.tu3'));
                    $('#test3').on('blur',function(){
                        $('.laydate-btns-confirm').on('click',function () {
                            let  test3=$('#test3');
                            let date = test3.val().split(" - ");
                            console.log(date);
                            var sta=date[0];var end=date[1];
                            var url="<?= Yii::$service->url->getUrl('water/datas/searchdate') ?>?type=1&sta="+sta+"&end="+end;
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
                                        data:row.numall    /* row.num */
                                    },
                                        {
                                            name: '成交',
                                            type: 'line',
                                            data:row.num    /* row.num */
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

                                    },
                                    // color: ['rgb(48,163,254)','rgb(55,223,116)','rgb(253,203,82)']
                                });
                            });
                        })
                    })

                    var url = "<?= Yii::$service->url->getUrl("water/datas/week") ?>?type="+3;
                    $('.btnorder').on("click",function () {
                        $('.btnorder').removeClass('active').filter(this).addClass('active');

                        if($(this).attr("uri")==1){
                            url="<?= Yii::$service->url->getUrl("water/datas/week") ?>?type="+3;
                        }else if($(this).attr("uri")==2){
                            url="<?= Yii::$service->url->getUrl("water/datas/month") ?>?type="+3;
                        }else if($(this).attr("uri")==3){
                            url="<?= Yii::$service->url->getUrl("water/datas/quarter") ?>?type="+3;
                        }else if($(this).attr("uri")==4){
                            url="<?= Yii::$service->url->getUrl("water/datas/year") ?>?type="+3;
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
                                    data:row.numall    /* row.num */
                                },
                                    {
                                        name: '成交',
                                        type: 'line',
                                        data:row.num    /* row.num */
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

                                },
                                // color: ['rgb(48,163,254)','rgb(55,223,116)','rgb(253,203,82)']
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
                                data:row.numall    /* row.num */
                            },
                                {
                                    name: '成交',
                                    type: 'line',
                                    data:row.num    /* row.num */
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

                            },
                            // color: ['rgb(48,163,254)','rgb(55,223,116)','rgb(253,203,82)']
                        });


                    });
                })
            </script>
         <li ><!--<button  type="button" class="el-button el-button--primary is-round" style="width: 50px; height: 30px; line-height: 5px; font-size: 12px; padding-left: 12px;">
           <span> 确定 </span></button>--></li>
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
    .content .item {
        width: 1000px;
        margin-top: 28px;
        display: flex;
        justify-content: space-between;
    }
    .item .item_box {
        width: 140px;
        height: 80px;
        border-radius: 5px;
        box-shadow: 0 0 15px 2px #eee;
        padding-left: 20px;
        padding-top: 10px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }
    .item_box .item_box1 {
        height: 30px;
        font-size: 18px;
        line-height: 30px;
    }
    .item_box .item_box2 {
        height: 35px;
        font-size: 22px;
        color: #30a2fe;
        line-height: 35px;
        font-weight: bolder;
    }
    .content .item1 {
        width: 1014px;
        margin-top: 28px;
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #eee;
    }
    .content .item1 .box1 {
        width: 485px;
    }
    .content .item1 .box1 .title {
        width: 100%;
        height: 52px;
        line-height: 52px;
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #30A6FE;
    }
    .item1 .box1 .title_left {
        width: 88px;
        text-align: center;
        color: #30A6FE;
        font-weight: bolder;
    }
    .item1 .box1 .title_right {
        width: 250px;
        color: #30A6FE;
        display: flex;
        justify-content: space-between;
    }
    .item2 .title_right {
        width: 250px;
        color: #30A6FE;
        display: flex;
        justify-content: space-between;
    }
    .title_right .btn {
        float: left;
        line-height: 52px;
    }
    .title_right .active {
        border-bottom: 2px solid #30A6FE;
    }
    .content .item1 .box1 .bottom {
         width: 100%;
         padding-top: 10px;
         padding-bottom: 20px;
         box-sizing: border-box;
     }
    .content .item1 .box1 .bottom .contents {
        width: 100%;
        display: none;
    }
    .item1 .box1 .bottom .contents .tu1 {
        width: 100%;
        height: 330px;
        /*background: url("/public/img/tu1.png") no-repeat center center /100% auto;*/
    }
    .item1 .box1 .bottom .contents .tu2 {
        width: 100%;
        height: 330px;
        /*background: url("/public/img/tu2.png") no-repeat center center /100% auto;*/
    }
    .content .item1 .box1 .bottom .active {
        display: block;
    }
    .content .item2 {
        width: 1014px;
        margin-top: 28px;
    }
    .content .item2 .title2{
        width: 100%;
        border-bottom: 1px solid  #30A6FE;
        display: flex;
        justify-content: space-between;
        line-height: 52px;
        color: #30A6FE;

    }
    .content .item2 .btn {
        float: left;
        line-height: 52px;
    }
    .content .item2 .bottom {
        width: 100%;
        padding-top: 10px;
        padding-bottom: 20px;
        box-sizing: border-box;
    }
    .content .item2 .bottom .contents {
        width: 100%;
        display: none;
    }
    .content .item2 .bottom .active {
        display: block;
    }
    .item2 .bottom .contents .tu3{
        width: 100%;
        height: 500px;
        /*background: url("/public/img/zhexiantu.png") no-repeat center center /100% auto;*/
    }
</style>