<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
?>
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

    .layui-laydate .layui-this {
        background: #30B5FE !important;
    }
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

    .layui-laydate .layui-this {
        background: #30B5FE !important;
    }
</style>
<div class="main-content">
    <div style="width: 1012px; margin: 0px auto;">
        <div id="platdata" style="padding: 0;">
            <div class="content">
                <div class="biaoti">
                    <div aria-label="Breadcrumb" role="navigation" class="el-breadcrumb">
                        <span class="el-breadcrumb__item"><span role="link"
                                                                class="el-breadcrumb__inner is-link">数据中心</span><span
                                    role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
                        <span class="el-breadcrumb__item" aria-current="page"><span role="link"
                                                                                    class="el-breadcrumb__inner"><span
                                        style="color: rgb(48, 211, 102);">商家数据</span></span><span role="presentation"
                                                                                                  class="el-breadcrumb__separator">&middot;</span></span>
                    </div>
                </div>
                <div class="tongji ptongji" style="margin-top:0;">
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

                <div class="item1">
                    <div class="box1">
                        <div class="title">
                            <div class="title_left">
                                评价汇总
                            </div>
                            <div class="title_right">
                                <div class="btn active btn1" date="7">
                                    7天
                                </div>
                                <div class="btn btn1" date="30">
                                    一个月
                                </div>
                                <div class="btn btn1" date="90">
                                    一个季度
                                </div>
                                <div class="btn btn1" date="365">
                                    一年
                                </div>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="contents active">
                                <div style="display: flex; justify-content: space-between;height: 30px;line-height:30px;">
                                    <div style="margin:0 auto;">
                                        <div style="float: left;">时间段选择</div>
                                        <div class="el-form-item__content" style="margin-left: 10px !important;float: left;">
                                            <input type="text" name="data" class="demo-input" placeholder="日期时间范围"
                                                   id="test10">
                                        </div>
                                    </div>
                                    <script>
                                        laydate.render({
                                            elem: '#test10'
                                            , type: 'datetime'
                                            , range: true
                                            , theme: "#3CACFE"
                                        });
                                    </script>
                                </div>
                                <div class="tu1">
                                </div>
                                <script>
                                    $(function () {
                                        $('#test10').on('blur', function () {
                                            $('.laydate-btns-confirm').on('click', function () {
                                                getinfo(2, -1);
                                            })
                                        })

                                        $('.btn1').on('click', function () {
                                            $('.btn1').removeClass('active').filter(this).addClass('active');
                                            let test10 = $('#test10');
                                            let date = $(this).attr('date');
                                            getinfo(1, date);
                                        })

                                        function getinfo(flag, date) {
                                            var t1 = "", t2 = "";
                                            if (flag == 1) {
                                                if (date == 7) {
                                                    t1 = timeForMat(7)["t2"];
                                                    t2 = timeForMat(7)["t1"];
                                                } else if (date == 30) {
                                                    t1 = timeForMat(30)["t2"];
                                                    t2 = timeForMat(30)["t1"];
                                                } else if (date == 90) {
                                                    t1 = timeForMat(90)["t2"];
                                                    t2 = timeForMat(90)["t1"];
                                                } else if (date == 365) {
                                                    t1 = timeForMat(365)["t2"];
                                                    t2 = timeForMat(365)["t1"];
                                                }
                                            } else if (flag == 2) {
                                                date = test10.value.split(" - ");
                                                t1 = date[0];
                                                t2 = date[1];
                                            }

                                            var favorable, reviewable, nagetivable;
                                            $.ajax({
                                                url: "/shop/datas/countdate?t1=" + t1 + "&t2=" + t2,
                                                dataType: 'json',
                                                success: function (msg) {
                                                    for (let i = 0; i < msg.length; i++) {
                                                        msg[i] = filtert2(msg[i], t2);
                                                    }
                                                    favorable = msg[0].length;
                                                    reviewable = msg[1].length;
                                                    nagetivable = msg[2].length;
                                                    getChart(favorable, reviewable, nagetivable);
                                                }
                                            });

                                            function getChart(a, b, c) {
                                                var myChart = echarts.init(document.querySelector('.tu1'));
                                                var option = {

                                                    legend: {
                                                        itemWidth: 20,
                                                        itemHeight: 20,
                                                        orient: 'vertical',
                                                        // top: 'middle',
                                                        bottom: 20,
                                                        right: 24,
                                                        data: ['好评', '中评', '差评']
                                                    },
                                                    tooltip: {
                                                        trigger: 'item',
                                                        formatter: "{b} : {c} ({d}%)"
                                                    },
                                                    series: [
                                                        {
                                                            type: 'pie',
                                                            radius: '80%',
                                                            center: ['40%', '50%'],
                                                            selectedMode: 'single',
                                                            data: [
                                                                {value: a, name: '好评'},
                                                                {value: b, name: '中评'},
                                                                {value: c, name: '差评'},
                                                            ],
                                                            itemStyle: {
                                                                normal: {
                                                                    borderWidth: 10,
                                                                    borderColor: '#ffffff',
                                                                },

                                                            }
                                                        }
                                                    ],
                                                    color: ['rgb(48,163,254)', 'rgb(55,223,116)', 'rgb(253,203,82)']
                                                };
                                                myChart.setOption(option);
                                            }

                                            function filtert2(arr, t2) {
                                                arr = arr.filter(ele => {
                                                    return ele.review_date < t2
                                                });
                                                return arr;
                                            }
                                        }

                                        $('.btn1').triggerHandler('click');
                                    })
                                </script>
                            </div>
                            <div class="contents">
                                一个月
                            </div>
                            <div class="contents">
                                一个季度
                            </div>
                            <div class="contents">
                                一年
                            </div>
                        </div>
                    </div>
                    <div class="box1">
                        <div class="title">
                            <div class="title_left">
                                投诉汇总
                            </div>
                            <div class="title_right">
                                <div class="btn active btn2" date="7">
                                    7天
                                </div>
                                <div class="btn btn2" date="30">
                                    一个月
                                </div>
                                <div class="btn btn2" date="90">
                                    一个季度
                                </div>
                                <div class="btn btn2" date="365">
                                    一年
                                </div>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="contents active">
                                <div style="display: flex; justify-content: space-between;line-height: 30px;">
                                    <div style="margin:0 auto;">
                                        <div style="float: left;">时间段选择</div>
                                        <div class="el-form-item__content" style="margin-left: 10px !important;float: left;">
                                            <input type="text" name="data" class="demo-input" placeholder="日期时间范围"
                                                   id="test11">
                                        </div>
                                    </div>
                                    <script>
                                        laydate.render({
                                            elem: '#test11'
                                            , type: 'datetime'
                                            , range: true
                                            , theme: "#3CACFE"
                                        });
                                    </script>

                                </div>
                                <div class="tu2"></div>

                                <script>
                                    $(function () {
                                        $('#test11').on('blur', function () {
                                            $('.laydate-btns-confirm').on('click', function () {
                                                getinfo(2, -1);
                                                // getChart(3,5,3);
                                            })
                                        })
                                        $('.btn2').on('click', function () {
                                            $('.btn2').removeClass('active').filter(this).addClass('active');
                                            let test11 = $('#test11');
                                            let date = $(this).attr('date');
                                            getinfo(1, date);
                                        })

                                        function getinfo(flag, date) {
                                            var t1 = "", t2 = "";
                                            if (flag == 1) {
                                                if (date == 7) {
                                                    t1 = timeForMat(7)["t2"];
                                                    t2 = timeForMat(7)["t1"];
                                                } else if (date == 30) {
                                                    t1 = timeForMat(30)["t2"];
                                                    t2 = timeForMat(30)["t1"];
                                                } else if (date == 90) {
                                                    t1 = timeForMat(90)["t2"];
                                                    t2 = timeForMat(90)["t1"];
                                                } else if (date == 365) {
                                                    t1 = timeForMat(365)["t2"];
                                                    t2 = timeForMat(365)["t1"];
                                                }
                                            } else if (flag == 2) {
                                                date = test11.value.split(" - ");
                                                t1 = date[0];
                                                t2 = date[1];
                                            }
                                            var type1, type2, type3, type4, type5, type6, type7;
                                            $.ajax({
                                                url: "/shop/datas/complaint?t1=" + t1 + "&t2=" + t2,
                                                dataType: 'json',
                                                success: function (msg) {
                                                    // console.log(msg);
                                                    for (let i = 0; i < msg.length; i++) {
                                                        type1 = msg.filter(element => {
                                                            return element.ctype == 1
                                                        })
                                                        type2 = msg.filter(element => {
                                                            return element.ctype == 2
                                                        })
                                                        type3 = msg.filter(element => {
                                                            return element.ctype == 3
                                                        })
                                                        type4 = msg.filter(element => {
                                                            return element.ctype == 4
                                                        })
                                                        type5 = msg.filter(element => {
                                                            return element.ctype == 5
                                                        })
                                                        type6 = msg.filter(element => {
                                                            return element.ctype == 6
                                                        })
                                                        type7 = msg.filter(element => {
                                                            return element.ctype == 7
                                                        })
                                                    }
                                                    var complaintArr = [type1.length, type2.length, type3.length, type4.length, type5.length, type6.length, type7.length];

                                                    getChart(complaintArr);

                                                }
                                            });

                                            function getChart(arr) {
                                                var myChart = echarts.init(document.querySelector('.tu2'));
                                                var option = {

                                                    legend: {
                                                        itemWidth: 20,
                                                        itemHeight: 20,
                                                        orient: 'vertical',
                                                        // top: 'middle',
                                                        bottom: 20,
                                                        right: 4,
                                                        data: ['商家爽约', '服务不好', '态度不好', '连带推销', '恶意跳单', '乱收费', '其他']
                                                    },
                                                    tooltip: {
                                                        trigger: 'item',
                                                        formatter: "{b} : {c} ({d}%)"
                                                    },
                                                    series: [
                                                        {
                                                            type: 'pie',
                                                            radius: '80%',
                                                            center: ['43%', '50%'],
                                                            selectedMode: 'single',
                                                            label: {
                                                                normal: {
                                                                    show: false
                                                                },
                                                                emphasis: {
                                                                    show: true
                                                                }
                                                            },
                                                            labelLine: {
                                                                normal: {
                                                                    show: false
                                                                }
                                                            },
                                                            data: [
                                                                {value: arr[0], name: '商家爽约'},
                                                                {value: arr[1], name: '服务不好'},
                                                                {value: arr[2], name: '态度不好'},
                                                                {value: arr[3], name: '连带推销'},
                                                                {value: arr[4], name: '恶意跳单'},
                                                                {value: arr[5], name: '乱收费'},
                                                                {value: arr[6], name: '其他'},
                                                            ],
                                                            itemStyle: {
                                                                normal: {
                                                                    borderWidth: 10,
                                                                    borderColor: '#ffffff',
                                                                },

                                                            }
                                                        }
                                                    ],
                                                    color: ['rgb(55,223,116)', 'rgb(253,203,82)', 'rgb(249,140,44)', 'rgb(248,72,96)', 'rgb(128,152,255)', 'rgb(18,206,218)', 'rgb(59,172,254)']
                                                };
                                                myChart.setOption(option);
                                            }
                                        }

                                        $('.btn2').triggerHandler('click');
                                    })
                                </script>
                            </div>
                            <div class="contents">
                                一个月
                            </div>
                            <div class="contents">
                                一个季度
                            </div>
                            <div class="contents">
                                一年
                            </div>
                        </div>
                    </div>
                </div>

                <!--本周营业排行-->
                <div class="addofplatdata" style="float: left;">
                    <div class="platdata-header">
                        <div class="platdata-headername">本月营业排行</div>

                        <div class="platdata-headerright">
                            <div class="money-box money-box1" onclick="orderfn(a=1)"
                                 style="margin-right:14px;">
                            </div>
                            <span style="font-size: 14px;color:#82898e;float: left;">按销售量排行</span>
                            <div class="money-box money-box1" onclick="orderfn(a=2)"
                                 style="margin-right:14px;">
                            </div>
                            <span style="font-size: 14px;color:#82898e;float: left;">按销售额排行</span>
                            <script>
                                function orderfn(a){
                                    if(a == 1){
                                        $.ajax({
                                            type:'post',
                                            url:'<?php echo Yii::$service->url->getUrl("/admin/shuju/wmoney")?>',
                                        })
                                    }
                                    else if(a == 2){

                                    }
                                }
                            </script>
                            <button
                                    style="width:89px;height:32px;background: #36de77;
                                        float: left;border:0;margin-top:13px;line-height:
32px;">导出表格</button>
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
                            <?php foreach ($sales as $k=>$v){?>
                            <tr>
                                <td><?=($k+1)?></td>
                                <td><?= $v['spu']?></td>
                                <td><?= $v['name']['name_zh']?></td>
                                <td><?= $v['score']?></td>
                                <td><?= $v['score']*$v['price']?></td>
                                <td><?= $v['price']?></td>
                            </tr>
                            <?php }?>
                        </table>
<!--                        分页-->
                        <div class="admincount" style="justify-content: flex-end;margin-bottom: 0px;margin-top:30px;font-size: 14px;">
                            <?php if($tot>10){?>
                                <div class="admincountall">
                                    <span style="color: #3db0ff">·</span>&nbsp;<span>总计</span>
                                    <span class="jianju"><?=$tot?></span>
                                    <span>记录</span>
                                </div>
                                <div class="admintotalpage">
                                    <span style="color: #29c99a">·</span>&nbsp;<span>分</span>
                                    <span style="color: #29c99a" class="jianju"><?= ceil($tot/10)?></span><span>页</span>
                                </div>
                                <div class="admintotalpage">
                                    <span style="color: #29c99a">·</span>&nbsp;<span>每页</span>
                                    <input type="text" style="display: inline-block;width: 40px;height: 20px;border-radius: 10px;
                            border: 1px solid #ebf6ff;background: #f3faff;outline: none;padding:0 5px;
                            box-sizing: border-box;text-align: center;color:#29c99a;line-height: 20px; "
                                           value="10" disabled>
                                </div>
                            <?php }?>
                        </div>


                        <div class="paginationbox">

                            <div class="apagination">
                                <?php
                                echo LinkPager::widget([
                                    'pagination' => $pagination,
                                    'firstPageLabel' => '首页',
                                    'lastPageLabel' => '尾页',

                                    'nextPageLabel' => '>',
                                    'prevPageLabel' => '<',
                                ]);


                                ?>
                            </div>
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
        width: 850px;
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
        color: #858B90;
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
        cursor: pointer;
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

    .content .item2 .title2 {
        width: 100%;
        border-bottom: 1px solid #30A6FE;
        display: flex;
        justify-content: space-between;
        line-height: 52px;
        color: #30A6FE;

    }

    .content .item2 .btn {
        float: left;
        line-height: 52px;
        cursor: pointer;
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

    .item2 .bottom .contents .tu3 {
        width: 100%;
        height: 500px;
        /*background: url("/public/img/zhexiantu.png") no-repeat center center /100% auto;*/
    }

    /*  .content .blue {
          width: 112px;
          height: 33px;
          background: #30B5FE;
          border: none;
          box-shadow: 0 0 8px #30B5FE;
          padding-top: 10px;
      }*/

    .content .blue {
        height: 33px;
        background: #30B5FE;
        border: none;
        box-shadow: 0 0 8px #30B5FE;
        padding-top: 10px;
    }

    .content .blue1 {
        width: 50px;
        height: 30px;
        line-height: 5px;
        font-size: 12px;
        padding-left: 12px;
        border: none;
        background: #30B5FE;
        box-shadow: 0 0 8px #30B5FE;
    }

    .content .yellow {
        height: 33px;
        background: #FAC83A;
        border: none;
        box-shadow: 0 0 8px #FAC83A;
        padding-top: 10px;
    }

    .content .green {
        height: 33px;
        background: #37DF73;
        border: none;
        box-shadow: 0 0 8px #37DF73;
        padding-top: 10px;
    }
</style>

