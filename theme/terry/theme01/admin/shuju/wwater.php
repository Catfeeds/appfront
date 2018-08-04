<div class="main-content">
    <div>
        <div style="width: 100%;height: 637px;">
            <!--主内容-->
            <div id="platdata">
                <div class="adminmannager-title">
                    <span>数据中心</span>&nbsp;
                    <span>·&nbsp;水司数据</span>
                </div>
                <!-- <div class="ShopMannager-search">

                 </div>-->
                <div class="tongji ptongji">
                    <ul>
                        <li style="background: #fff;">
                            <div class="tongji-circle pcontent-circle">
                                <img src="/public/imgs/pcontent1.png">
                            </div>
                            <div class="tongji-number">
                                <div>
                                    <span>1024</span>
                                </div>
                                <div>
                                    <span>点击量统计</span>
                                </div>
                            </div>
                        </li>
                        <li style="background: #fff;">
                            <div class="tongji-circle pcontent-circle">
                                <img src="/public/imgs/pcontent2.png">
                            </div>
                            <div class="tongji-number">
                                <div>
                                    <span>88%</span>
                                </div>
                                <div>
                                    <span>成交转换率</span>
                                </div>
                            </div>
                        </li>
                        <li style="background: #fff;">
                            <div class="tongji-circle pcontent-circle">
                                <img src="/public/imgs/pcontent3.png">
                            </div>
                            <div class="tongji-number">
                                <div>
                                    <span>96%</span>
                                </div>
                                <div>
                                    <span>好评率</span>
                                </div>
                            </div>
                        </li>
                        <li style="background: #fff;">
                            <div class="tongji-circle pcontent-circle">
                                <img src="/public/imgs/pcontent4.png">
                            </div>
                            <div class="tongji-number">
                                <div>
                                    <span>2%</span>
                                </div>
                                <div>
                                    <span>投诉率</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--评价汇总-->
                <div class="addofplatdata" style="float: left;">
                    <div class="platdata-header">
                        <div class="platdata-headername">评价汇总</div>
                        <div class="platdata-headerright">
                            <ul class="wshop-active">
                                <li class="btn1 chose-acive" onclick="fn(this)">七天</li>
                                <li class="btn1" onclick="fn(this)">一个月</li>
                                <li class="btn1" onclick="fn(this)">一个季度</li>
                                <li class="btn1" onclick="fn(this)">一年</li>
                            </ul>
                            <style>
                                .chose-acive{
                                    border-bottom:3px solid #30a2fe;
                                }
                            </style>
                            <script>
                                function fn(that){
                                    $(".wshop-active li").removeClass("chose-acive");
                                    $(that).addClass("chose-acive");
                                }
                            </script>
                            <!--时间戳-->
                            <div class="block" style="float: left;line-height: 48px; position: relative;
margin-top:4px;display:flex">
                                <input type="text" name="data" class="demo-input" placeholder="请选择日期和时间范围" id="test2" style="text-align: center;">
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
                                        margin-top: 14px;
                                        margin-left:20px;
                                    }

                                    .demo-input:hover {
                                        border-color: #c0c4cc;
                                    }

                                    .demo-input:focus {
                                        border-color: #3CACFE;
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

                            </div>



                            <button style="float: left;border:0;margin-top:15px;">确定</button>
                        </div>
                    </div>
                    <div id="mychart">

                    </div>

                    <script>
                        $(function(){
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
                                        t1 = timeForMat(90)["t2"];
                                        t2 = timeForMat(90)["t1"];
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
                                    url:"/admin/shuju/evalute?t1="+t1+"&t2="+t2,
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
                                    var myChart = echarts.init(document.querySelector('#mychart'));
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




                    <div class="chart-b">
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
                    </div>
                </div>
                <!--投诉汇总-->
                <div class="addofplatdata" style="float: left;">
                    <div class="platdata-header">
                        <div class="platdata-headername">投诉汇总</div>
                        <div class="platdata-headerright">
                            <ul>
                                <li>七天</li>
                                <li>一个月</li>
                                <li>一个季度</li>
                                <li>一年</li>
                            </ul>
                            <!--时间戳-->

                            <button style="float: left;border:0;margin-top:13px;">确定</button>
                        </div>
                    </div>
                    <div id="mychart2">
                    </div>
                    <div class="chart-b">
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
                    </div>
                </div>
                <!--本周营业排行-->
                <div class="addofplatdata" style="float: left;">
                    <div class="platdata-header">
                        <div class="platdata-headername">本月营业排行</div>

                        <div class="platdata-headerright">
                            <div class="money-box money-box1">
                            </div>
                            <span style="font-size: 14px;color:#82898e;margin-left:14px;float: left;">按销售量排行</span>
                            <div class="money-box money-box1">
                            </div>
                            <span style="font-size: 14px;color:#82898e;margin-left:14px;float: left;">按销售额排行</span>
                            <button
                                    style="width:89px;height:32px;background: #36de77;
                                        float: left;border:0;margin-top:13px;line-height: 32px;">导出表格</button>
                        </div>
                    </div>
                    <div class="paihang ppaihang">
                        <table border="0" class="ShopMannager-tablelist money-list">
                            <tr>
                                <th>排行</th>
                                <th>货号</th>
                                <th>商品名称</th>
                                <th>商品量/件</th>
                                <th>销售额/元</th>
                                <th>均价/元</th>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>ESCOO103</td>
                                <td>爱康街洗衣纺大街21</td>
                                <td>12344</td>
                                <td>120</td>
                                <td>119</td>
                            </tr>
                        </table>
                        <div class="adminpagination">
                            <div class="pagination">
                                <div class="block">
                                    <div class="admincount">
                                        <div class="admincountall">
                                            <span style="color: #3db0ff">·</span>&nbsp;<span>总计</span><span>206</span><span>记录</span>
                                        </div>
                                        <div class="admintotalpage">
                                            <span style="color: #29c99a">·</span>&nbsp;<span>分</span><span style="color: #29c99a">82</span><span>页</span>
                                        </div>
                                        <div class="admintotalpage">
                                            <span style="color: #29c99a">·</span>&nbsp;<span>每页</span>
                                            <input type="text" style="display: inline-block;width: 40px;height: 20px;border-radius: 10px;
                            border: 1px solid #ebf6ff;background: #f3faff;outline: none;padding:0 5px;
                            box-sizing: border-box;text-align: center;color:#29c99a;line-height: 20px; "
                                                   value="10" >
                                        </div>
                                    </div>
                                </div>
                                <div style="float: right;" class="pcontentp">
                                    <button class="firstpage-box">首页</button>
                                    <el-pagination
                                            layout="prev, pager, next"
                                            :total="50">
                                    </el-pagination>
                                    <button class="lastpage-box">末页</button>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>