<style>
    #test10{
        width:100%;height:100%;border:none;text-align: center;
    }
    .btnactive{
        border-bottom:4px solid rgb(48, 162, 254);
    }
</style>
<div class="main-content">
    <div id="platdata">
        <div class="adminmannager-title">
            <span>财务管理</span>&nbsp;
            <span>·&nbsp;平台财务</span>
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
                            <input type="text"  name="data" class="demo-input" placeholder="请选择日期时间范围" id="test1" style="border:none">
                        </div>
                    </div>
            </div>
            <button id="search">查询</button>
        </div>
        <div class="tongji">
            <ul>
                <li>
                    <div class="tongji-circle">
                        <img src="/public/adminimg/3_03.png">
                    </div>
                    <div class="tongji-number">
                        <div>
                            <span class="cjje">6723.98</span>
                        </div>
                        <div>
                            <span>成交全额（元）</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="tongji-circle">
                        <img src="/public/adminimg/3_06.png">
                    </div>
                    <div class="tongji-number">
                        <div>
                            <span class="dfkje">6723.98</span>
                        </div>
                        <div>
                            <span>待付款金额（元）</span>
                        </div>
                    </div>
                </li>
                <li style="background: #fdcb52">
                    <div class="tongji-circle">
                        <img src="/public/adminimg/3_08.png">
                    </div>
                    <div class="tongji-number">
                        <div>
                            <span class="ddzs">299</span>
                        </div>
                        <div>
                            <span>订单总数</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="process">
            <div >
                <span >待支付订单</span>
                <span class="daizhifu"></span>
            </div>
            <!--<div class="daifahuo"></div>-->
            <div >
                <span >已发货订单</span>
                <span class="yifahuo"></span>
            </div>
            <div>
                <span >已收货订单</span>
                <span  class="yishouhuo"></span>
            </div>
            <!--<div>
                <span >待服务订单</span>
                <span class="daifuwu"></span>
            </div>-->
            <div >
                <span>已完成订单</span>
                <span class="yiwancheng"></span>
            </div>
            <div >
                <span>用户申请退款</span>
                <span class="applybackmoney"></span>
            </div>
        </div>
        <style>
            .process>div{
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }
            .process>div>span:nth-of-type(1){
                margin-top:40px;
            }
            .process>div>span:nth-of-type(2){
                margin-top:20px;
            }
        </style>
        <!--成交额趋势-->
        <div class="addofplatdata" style="float: left;">
            <div class="platdata-header">
                <div class="platdata-headername">成交额趋势</div>
                <div class="platdata-headerright">
                    <ul style="cursor:pointer;">
                        <li class="week but1 btnactive" onclick='cut(3,this)' uri='1'>七天</li>
                        <li class="month but1" onclick='cut(3,this)' uri='2'>一个月</li>
                        <li class="quarter but1" onclick='cut(3,this)' uri='3'>一个季度</li>
                        <li class="year but1" onclick='cut(3,this)' uri='4'>一年</li>
                    </ul>
                    <!--时间戳-->
                    <div class="block" style="float: left;line-height: 48px; position: relative;
margin-top:16px;"
                    >
                        <div class="timer">
                            <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                                <input type="text"  name="data" class="demo-input" placeholder="请选择日期时间范围" id="test10">
                            </div>
                        </div>
                    </div>
                    <button style="float: left;border:0;margin-top:20px;" onclick='atime()'>确定</button>
                </div>
            </div>
            <div id="mychart" style="width: 950px; height: 400px; float: left; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;">

            </div>
            <script type="text/javascript">
                $(function () {
                    $("#search").on("click",function () {
                        var aval=$('#test1').val();
                        if(aval){
                            $(".but1").css({"background":"#fff","color":"#99cafe"});
                            var sta = aval.substring(0, 10);
                            var end = aval.substring(22,32);
                            var url="<?= Yii::$service->url->getUrl('admin/money/searchindex') ?>?type=3&sta="+sta+"&end="+end;

                        }else{
                            var t1 = timeForMat(7)["t2"];
                            var t2 = timeForMat(7)["t1"].slice(0,timeForMat(7)["t1"].length-3)+timeForMat(7)["t1"].slice(timeForMat(7)["t1"].length-2,timeForMat(7)["t1"].length);
                            var url="<?= Yii::$service->url->getUrl('admin/money/searchindex') ?>?type=3&sta="+t1+"&end="+t2;
                        }
                        $.get(url).done(function (data) {
                            var row = eval('('+data+')');
                            // 填入数据
                            console.log(row);
                            $(".cjje").text(row.num);
                            $(".dfkje").text(row.daizhifu);
                            $(".ddzs").text(row.number);
                            $(".daizhifu").text(row.daizhifu);
                            // $(".daifahuo").text(row.daifahuonum);
                            $(".yifahuo").text(row.yifahuonum);
                            $(".yishouhuo").text(row.yishouhuonum);
                            $(".yiwancheng").text(row.yiwanchengnum);
                            $(".applybackmoney").text(row.applybackmoneynum);
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
            	   url="<?= Yii::$service->url->getUrl('admin/money/searchdate') ?>?sta="+sta+"&end="+end;
            	   $.get(url).done(function (data) {
                    	var row = eval('('+data+')'); 
                        // 填入数据
        	             myChart.setOption({
        	          	   title: {
        	                   text: ''
        	               },
        	               tooltip: {},
        	               legend: {
        	                   data:['成交额']
        	               },
        	               xAxis: {
        	                   data:row.dat    /* row.dat */
        	               },
        	               yAxis: {},
        	               series: [{
        	                   name: '成交额',
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
           var url="<?= Yii::$service->url->getUrl('admin/money/hours?hours=24') ?>";
           function cut(type,that){
        	   $('#test10').val("");
               $(".but1").css({"border":"none"});
               $(that).css({"border-bottom":"4px solid rgb(48, 162, 254)"});
               if($(that).attr("uri")==1){
            	   url="<?= Yii::$service->url->getUrl("admin/money/week") ?>";
               }else if($(that).attr("uri")==2){
            	   url="<?= Yii::$service->url->getUrl('admin/money/month') ?>";
               }else if($(that).attr("uri")==3){
            	   url="<?= Yii::$service->url->getUrl('admin/money/quarter') ?>";
               }else if($(that).attr("uri")==4){
            	   url="<?= Yii::$service->url->getUrl('admin/money/year') ?>";
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
      	                   data:['成交额']
      	               },
      	               xAxis: {
      	                   data:row.dat    /* row.dat */
      	               },
      	               yAxis: {},
      	               series: [{
      	                   name: '成交额',
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
	                   data:['成交额']
	               },
	               xAxis: {
	                   data:row.dat    /* row.dat */
	               },
	               yAxis: {},
	               series: [{
	                   name: '成交额',
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
        <!--本月营业排行TOP10-->
        <div class="addofplatdata" style="float: left;">
            <div class="platdata-header">
                <div class="platdata-headername">本月营业排行TOP10</div>


              <!--  <div class="xiala" style="float: left;">
                    <div class="money-box"></div>
                    <span style="font-size: 14px;color:#82898e;margin-left:14px;">区域</span>
                    <select name="member-level" id="member-level">
                        <option value="">万荣县</option>
                    </select>
                    <div class="xialaimg1" style="top:20px;"></div>
                </div>
                <div class="xiala" style="float: left;">
                    <div class="money-box money-box1">
                    </div>
                    <span style="font-size: 14px;color:#82898e;margin-left:14px;">类别</span>
                    <select name="member-level" id="member-level">
                        <option value="">洗衣</option>
                    </select>
                    <div class="xialaimg1" style="top:20px;"></div>
                </div>  -->
                <div class="platdata-headerright">
                    <div class="money-box money-box1">
                    </div>
                    <span style="font-size: 14px;color:#82898e;margin-left:14px;float: left;cursor:pointer;" onclick='port(1)'>按销售量排行</span>
                    <div class="money-box money-box1">
                    </div>
                    <span style="font-size: 14px;color:#82898e;margin-left:14px;float: left;cursor:pointer;" onclick='port(2)'>按销售额排行</span>
                    <a href="<?= Yii::$service->url->getUrl('admin/money/export') ?>"><button
                        style="width:89px;height:32px;background: #36de77;
                                        float: left;border:0;margin-top:13px;line-height: 32px;">导出表格</button></a>
                </div>
            </div>
            <script>
				function port(type){
					$.ajax({
						type:"get",
						url:"<?= Yii::$service->url->getUrl('admin/money/rank') ?>?type="+type,
						success:function(msg){
							var row=JSON.parse(msg);
							$("#paih").find(".xtr").remove();
							var html='';
							$.each(row,function(k,v){
							     html+="<tr class='xtr'>"+
							    			"<td>"+(k+1)+"</td>"+
							    			"<td>"+v.shop_name+"</td>"+
							    			"<td>"+v.items+"</td>"+
							    			"<td>"+v.grand+"</td>"+
							    			"<td>"+(v.grand/v.items)+"</td>"+
							    		 "</tr>";
							})
							$("#paih").append(html);
						}
					})
				}
				
				
            </script>
            <div class="paihang">
                <table border="0" class="ShopMannager-tablelist money-list" id="paih">
                    <tr style="border-bottom:2px solid #b2b2b2;box-sizing: border-box;">
                        <th>排行</th>
                        <th>店铺名称</th>
                        <th>销售量（件）</th>
                        <th>销售额（元）</th>
                        <th>均价（元）</th>
                    </tr>
                    <?php foreach ($list as $k=>$v){?>
                    <tr class='xtr'>
                    	<td><?php echo $k+1;?></td>
                        <td><?php echo $v['shop_name']?></td>
                        <td><?php echo $v['items']?></td>
                        <td><?php echo $v['grand']?></td>
                        <td><?php echo ($v['grand']/$v['items'])?></td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>
</div>
<style>
    .layui-laydate .layui-this{
        background: #30B5FE !important;
    }
</style>