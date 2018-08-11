<div class="main-content">
    <div id="platdata">
        <div class="adminmannager-title">
            <span>商家财务</span>&nbsp;
            <span>·&nbsp;<?=$res['shop_name'] ?></span>
        </div>
        <div class="ShopMannager-search">
            <div class="xiala">
                <select name="member-level" id="member-level"
                        style="width: 180px;background: #f3faff;margin-left:0;">
                    <option value="">最近24小时</option>
                </select>
                <div class="xialaimg1"></div>
            </div>

            <div class="block" style="float: left;line-height: 48px; margin-left: 20px;position: relative;">
                <span class="demonstration">时间段选择</span>
                <div class="timer">
                    <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                        <input type="text" style="width:100%;height:100%;text-align: center;border:none;" name="data" class="demo-input"
                               placeholder="请选择要查询的时间段" id="test1">
                    </div>
                </div>
            </div>
            <button id="search">查询</button>
        </div>
        <div class="tongji">
            <ul>
                <li>
                    <div class="tongji-circle">
                        <img src="/public/adminimg/jrchengjiaoe.jpg">
                    </div>
                    <div class="tongji-number">
                        <div>
                            <span class="cjje">652.36</span>
                            <script>
                                console.log($(".cjje"));
                            </script>
                        </div>
                        <div>
                            <span>成交金额(元)</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="tongji-circle">
                        <img src="/public/adminimg/xfxd.jpg">
                    </div>
                    <div class="tongji-number">
                        <div>
                            <span class="xdl">999</span>
                        </div>
                        <div>
                            <span>下单量</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="tongji-circle">
                        <img src="/public/adminimg/xdcg.jpg">
                    </div>
                    <div class="tongji-number">
                        <div>
                            <span class="cjl">199</span>
                        </div>
                        <div>
                            <span>成交量</span>
                        </div>
                    </div>
                </li>
                <li style="background: #fd9e52;">
                    <div class="tongji-circle">
                        <img src="/public/adminimg/tuihuo.jpg">
                    </div>
                    <div class="tongji-number">
                        <div>
                            <span class="thl">199</span>
                        </div>
                        <div>
                            <span>退货量</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!--会员增长趋势-->
        <div class="addofplatdata" style="float: left;">
            <div class="platdata-header">
                <div class="platdata-headername">成交额趋势</div>
                <div class="platdata-headerright">
                    <ul>
                        <li class="week but1 btnactive" onclick='cut(3,this)' uri='1'>七天</li>
                        <li class="month but1" onclick='cut(3,this)' uri='2'>一个月</li>
                        <li class="quarter but1" onclick='cut(3,this)' uri='3'>一个季度</li>
                        <li class="year but1" onclick='cut(3,this)' uri='4'>一年</li>
                    </ul>
                    <!--时间戳-->
                    <div class="block shijianchuo">
                        <div class="timer">
                            <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                                <input type="text" style="width:100%;height:100%;text-align: center;border:none;" name="data" class="demo-input"
                                       placeholder="请选择要查询的时间段" id="test10">
                            </div>
                        </div>

                    </div>
                    <button style="float: left;border:0;margin-top:20px;" onclick='atime()'>确定</button>
                </div>
            </div>
            <div>
                <!--<span>今日新增：<?php /*echo $huiyuannew['num'];*/?>&nbsp;&nbsp;&nbsp;&nbsp;会员总数：<?php /*echo $huiyuanall['num'];*/?></span>-->
            </div>
            <div id="mychart" style="width: 950px; height: 400px; float: left; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;">
            
            </div>
            <script type="text/javascript">
            $(function () {
                    $("#search").on("click",function () {
                        console.log(222);
                        var aval=$('#test1').val();
                        if(aval){
                            $(".but1").css({"background":"#fff","color":"#99cafe"});
                            var sta = aval.substring(0, 10);
                            var end = aval.substring(22,32);
                            var url="<?= Yii::$service->url->getUrl('admin/money/searchhours') ?>?type=3&sta="+sta+"&end="+end;

                        }else{
                            var t1 = timeForMat(7)["t2"];
                            var t2 = timeForMat(7)["t1"];
                            var url="<?= Yii::$service->url->getUrl('admin/money/searchhours') ?>?type=3&sta="+t1+"&end="+t2;
                        }
                        $.get(url).done(function (data) {
                            var row = eval('('+data+')');
                            // 填入数据
                            console.log(row);
                            $(".cjje").text(row.num);
                            console.log(row['sumnum']);
                            $(".xdl").text(row.sumnum);
                            $(".cjl").text(row.number);
                            $(".thl").text(row.backnum);
                        });
                    });
                    $("#search").triggerHandler("click");
                })
            //日期时间范围
            laydate.render({
                elem: '#test10'
                , type: 'datetime'
                , range: true
                , theme: "#3CACFE"
            });
            //日期时间范围
            laydate.render({
                elem: '#test1'
                , type: 'datetime'
                , range: true
                , theme: "#3CACFE"
            });
            function atime(){
               var aval=$('#test10').val();
               if(aval){ 
            	   $(".but1").css({"background":"#fff","color":"#99cafe"});
            	   var sta = aval.substring(0, 10); 
            	   var end = aval.substring(22,32);
            	   url="<?= Yii::$service->url->getUrl('admin/money/searchdate') ?>?type=3&sta="+sta+"&end="+end;
            	   $.get(url).done(function (data) {
                    	var row = eval('('+data+')');
                        // 填入数据
        	             myChart.setOption({
        	          	   title: {
        	                   text: ''
        	               },
        	               tooltip: {},
        	               legend: {
        	                   data:['新增量']
        	               },
        	               xAxis: {
        	                   data:row.dat    /* row.dat */
        	               },
        	               yAxis: {},
        	               series: [{
        	                   name: '会员',
        	                   type: 'line',
        	                   data:row.num    /* row.num */
        	               }],
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
               }
           }

           var myChart = echarts.init(document.getElementById('mychart'));
            // 异步加载数据
            var url="<?= Yii::$service->url->getUrl("admin/money/week") ?>?type=3";
           function cut(type,that){
        	   $('#test10').val("");
               $(".but1").css({"border":"none"});
               $(that).css({"border-bottom":"4px solid rgb(48, 162, 254)"});
               if($(that).attr("uri")==1){
            	   url="<?= Yii::$service->url->getUrl("admin/money/week") ?>?type="+type;
               }else if($(that).attr("uri")==2){
            	   url="<?= Yii::$service->url->getUrl('admin/money/month') ?>?type="+type;
               }else if($(that).attr("uri")==3){
            	   url="<?= Yii::$service->url->getUrl('admin/money/quarter') ?>?type="+type;
               }else if($(that).attr("uri")==4){
            	   url="<?= Yii::$service->url->getUrl('admin/money/year') ?>?type="+type;
               }
               $.get(url).done(function (data) {
                  	var row = eval('('+data+')');
                      // 填入数据
      	             myChart.setOption({
      	          	   title: {
      	                   text: ''
      	               },
      	               tooltip: {},
      	               legend: {
      	                   data:['新增量']
      	               },
      	               xAxis: {
      	                   data:row.dat    /* row.dat */
      	               },
      	               yAxis: {},
      	               series: [{
      	                   name: '会员',
      	                   type: 'line',
      	                   data:row.num    /* row.num */
      	               }],
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
           }
            $.get(url).done(function (data) {
            	var row = eval('('+data+')');
                // 填入数据
	             myChart.setOption({
	          	   title: {
	                   text: ''
	               },
	               tooltip: {},
	               legend: {
	                   data:['新增量']
	               },
	               xAxis: {
	                   data:row.dat    /* row.dat */
	               },
	               yAxis: {},
	               series: [{
	                   name: '会员',
	                   type: 'line',
	                   data:row.num    /* row.num */
	               }],
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
//             // 使用刚指定的配置项和数据显示图表。
//             myChart.setOption(option);
            </script>
            <!--<div class="chart-b">
                <button style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #30b7fe;margin-left: 0;">导出图片</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #33d892;margin-left: 0;">导出表格</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #f9c131;margin-left: 0;">导出报告</button>
                <div class="line-img">
                    <img src="/public/adminimg/line.png" alt="">
                    <span style="color:#a4adb5">销售额</span>
                </div>
            </div>-->
        </div>
        <!--水司增长趋势-->
        <div class="addofplatdata" style="float: left;">
       		 <div class="platdata-header">
                <div class="platdata-headername">返款情况</div>
                <div class="platdata-headerright">
                    <ul>
                        <li class="week but1 btnactive" onclick='cut2(1,this)' uri='1'>七天</li>
                        <li class="month but1" onclick='cut2(1,this)' uri='2'>一个月</li>
                        <li class="quarter but1" onclick='cut2(1,this)' uri='3'>一个季度</li>
                        <li class="year but1" onclick='cut2(1,this)' uri='4'>一年</li>
                    </ul>
                    <!--时间戳-->
                    <div class="block shijianchuo" 
                    >
                        <div class="timer">
                            <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                                <input type="text" style="width:100%;height:100%;text-align: center;border:none;" name="data" class="demo-input"
                                       placeholder="请选择要查询的时间段" id="test11">
                            </div>
                        </div>

                    </div>
                    <button style="float: left;border:0;margin-top:20px;" onclick='btime()'>确定</button>
                </div>
            </div>
            <div>

            </div>
            <div id="mychart2" style="width: 950px; height: 400px; float: left; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;">
            </div>
            <script type="text/javascript">           
            //日期时间范围
            laydate.render({
                elem: '#test11'
                , type: 'datetime'
                , range: true
                , theme: "#3CACFE"
            });  
           function btime(){
               var aval=$('#test11').val();
               if(aval){ 
            	   $(".but1").css({"background":"#fff","color":"#99cafe"});
            	   var sta = aval.substring(0, 10); 
            	   var end = aval.substring(22,32);
            	   url="<?= Yii::$service->url->getUrl('admin/money/backsearchdate') ?>?type=1&sta="+sta+"&end="+end;
            	   $.get(url).done(function (data) {
                    	var row = eval('('+data+')');
                        // 填入数据
                    	mychart2.setOption({
        	          	   title: {
        	                   text: ''
        	               },
        	               tooltip: {},
        	               legend: {
        	                   data:['新增量']
        	               },
        	               xAxis: {
        	                   data:row.dat    /* row.dat */
        	               },
        	               yAxis: {},
        	               series: [{
        	                   name: '水司',
        	                   type: 'line',
        	                   data:row.num    /* row.num */
        	               }],
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
               }
           }        
            
           var mychart2 = echarts.init(document.getElementById('mychart2'));
            // 异步加载数据
           var url="<?= Yii::$service->url->getUrl("admin/money/backweek") ?>?type=1";
           function cut2(type,that){
        	   $('#test11').val("");
               $(".but1").css({"border":"none"});
               $(that).css({"border-bottom":"4px solid rgb(48, 162, 254)"});
               if($(that).attr("uri")==1){
            	   url="<?= Yii::$service->url->getUrl("admin/money/backweek") ?>?type="+type;
               }else if($(that).attr("uri")==2){
            	   url="<?= Yii::$service->url->getUrl('admin/money/backmonth') ?>?type="+type;
               }else if($(that).attr("uri")==3){
            	   url="<?= Yii::$service->url->getUrl('admin/money/backquarter') ?>?type="+type;
               }else if($(that).attr("uri")==4){
            	   url="<?= Yii::$service->url->getUrl('admin/money/backyear') ?>?type="+type;
               }
               $.get(url).done(function (data) {
                  	var row = eval('('+data+')');
                      // 填入数据
                  	mychart2.setOption({
      	          	   title: {
      	                   text: ''
      	               },
      	               tooltip: {},
      	               legend: {
      	                   data:['新增量']
      	               },
      	               xAxis: {
      	                   data:row.dat    /* row.dat */
      	               },
      	               yAxis: {},
      	               series: [{
      	                   name: '水司',
      	                   type: 'line',
      	                   data:row.num    /* row.num */
      	               }],
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
           }
            $.get(url).done(function (data) {
            	var row = eval('('+data+')');
                // 填入数据
            	mychart2.setOption({
	          	   title: {
	                   text: ''
	               },
	               tooltip: {},
	               legend: {
	                   data:['新增量']
	               },
	               xAxis: {
	                   data:row.dat    /* row.dat */
	               },
	               yAxis: {},
	               series: [{
	                   name: '水司',
	                   type: 'line',
	                   data:row.num    /* row.num */
	               }],
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
            </script>
            <!--<div class="chart-b">
                <button style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #30b7fe;margin-left: 0;">导出图片</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #33d892;margin-left: 0;">导出表格</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #f9c131;margin-left: 0;">导出报告</button>
                <div class="line-img">
                    <img src="/public/adminimg/line.png" alt="">
                    <span style="color:#a4adb5">销售额</span>
                </div>
            </div>-->
        </div>
        <!--商家增长趋势-->
        <div class="addofplatdata" style="float: left;">
            <div class="platdata-header">
                <div class="platdata-headername">订单数量走势</div>
                <div class="platdata-headerright">
                    <ul>
                        <li class="week but1 btnactive" onclick='cut3(2,this)' uri='1'>七天</li>
                        <li class="month but1" onclick='cut3(2,this)' uri='2'>一个月</li>
                        <li class="quarter but1" onclick='cut3(2,this)' uri='3'>一个季度</li>
                        <li class="year but1" onclick='cut3(2,this)' uri='4'>一年</li>
                    </ul>
                    <!--时间戳-->
                    <div class="block shijianchuo" 
                    >
                        <div class="timer">
                            <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                                <input type="text" style="width:100%;height:100%;text-align: center;border:none;" name="data" class="demo-input"
                                       placeholder="请选择要查询的时间段" id="test12">
                            </div>
                        </div>


                    </div>
                    <button style="float: left;border:0;margin-top:20px;" onclick='ctime()'>确定</button>
                </div>
            </div>
            <div>

            </div>
            <div id="mychart3" style="width: 950px; height: 400px; float: left; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;">
            </div>
             <script type="text/javascript">   
             //日期时间范围
             laydate.render({
                 elem: '#test12'
                 , type: 'datetime'
                 , range: true
                 , theme: "#3CACFE"
             });  
            function ctime(){
                var aval=$('#test12').val();
                if(aval){ 
             	   $(".but1").css({"background":"#fff","color":"#99cafe"});
             	   var sta = aval.substring(0, 10); 
             	   var end = aval.substring(22,32);
             	   url="<?= Yii::$service->url->getUrl('admin/money/numsearchdate') ?>?type=2&sta="+sta+"&end="+end;
             	   $.get(url).done(function (data) {
                     	var row = eval('('+data+')');
                         // 填入数据
                     	mychart3.setOption({
         	          	   title: {
         	                   text: ''
         	               },
         	               tooltip: {},
         	               legend: {
         	                   data:['新增量']
         	               },
         	               xAxis: {
         	                   data:row.dat    /* row.dat */
         	               },
         	               yAxis: {},
         	               series: [{
         	                   name: '商家',
         	                   type: 'line',
         	                   data:row.num    /* row.num */
         	               }],
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
                }
            }                
           var mychart3 = echarts.init(document.getElementById('mychart3'));
            // 异步加载数据
           var url="<?= Yii::$service->url->getUrl("admin/money/numweek") ?>?type=2";
           function cut3(type,that){
        	   $('#test12').val("");
               $(".but1").css({"border":"none"});
               $(that).css({"border-bottom":"4px solid rgb(48, 162, 254)"});
               if($(that).attr("uri")==1){
            	   url="<?= Yii::$service->url->getUrl("admin/money/numweek") ?>?type="+type;
               }else if($(that).attr("uri")==2){
            	   url="<?= Yii::$service->url->getUrl('admin/money/nummonth') ?>?type="+type;
               }else if($(that).attr("uri")==3){
            	   url="<?= Yii::$service->url->getUrl('admin/money/numquarter') ?>?type="+type;
               }else if($(that).attr("uri")==4){
            	   url="<?= Yii::$service->url->getUrl('admin/money/numyear') ?>?type="+type;
               }
               $.get(url).done(function (data) {
                  	var row = eval('('+data+')');
                      // 填入数据
                  	mychart3.setOption({
      	          	   title: {
      	                   text: ''
      	               },
      	               tooltip: {},
      	               legend: {
      	                   data:['新增量']
      	               },
      	               xAxis: {
      	                   data:row.dat    /* row.dat */
      	               },
      	               yAxis: {},
      	               series: [{
      	                   name: '商家',
      	                   type: 'line',
      	                   data:row.num    /* row.num */
      	               }],
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
           }
            $.get(url).done(function (data) {
            	var row = eval('('+data+')');
                // 填入数据
            	mychart3.setOption({
	          	   title: {
	                   text: ''
	               },
	               tooltip: {},
	               legend: {
	                   data:['新增量']
	               },
	               xAxis: {
	                   data:row.dat    /* row.dat */
	               },
	               yAxis: {},
	               series: [{
	                   name: '商家',
	                   type: 'line',
	                   data:row.num    /* row.num */
	               }],
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
            </script>
            <!--<div class="chart-b">
                <button style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #30b7fe;margin-left: 0;">导出图片</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #33d892;margin-left: 0;">导出表格</button>
                <button
                        style=" width: 90px;
        height: 27px;
        color: #fff;
        line-height: 27px;
        text-align: center;
        border-radius: 12px;background: #f9c131;margin-left: 0;">导出报告</button>
                <div class="line-img">
                    <img src="/public/adminimg/line.png" alt="">
                    <span style="color:#a4adb5">销售额</span>
                </div>
            </div>-->
        </div>

    </div>
</div>

<style>
    .layui-laydate .layui-this{
        background: #30B5FE !important;
    }
    .btnactive{
        border-bottom:4px solid rgb(48, 162, 254);
    }
</style>