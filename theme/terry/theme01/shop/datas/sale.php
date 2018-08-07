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
        width: 700px;
        display: flex;
        justify-content: space-between;
        line-height: 46px;
        color: #a4adb5;
        font-size: 12px;
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
        margin-top: 20px;
        height: 85px;
        width: 573px;
        display: flex;
        justify-content: space-between;
        line-height: 46px;

    }

    .content .item li {
        width: 180px;
        height: 85px;
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

    .title_right {
        width: 200px;
        display: flex;
        justify-content: space-between;
    }

    .title_right .active {
        border-bottom: 2px solid #30A6FE;
    }

    .content .item1 {
        width: 1012px;
        margin-top: 28px;
    }

    .content .item1 .title1 {
        width: 100%;
        border-bottom: 1px solid #30A6FE;
        display: flex;
        justify-content: space-between;
        line-height: 40px;
        color: #30A6FE;
        font-size: 14px;

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
    }

    .demo-input {
        min-width: 320px;
        line-height: 38px;
    }

    .content .blue {
        height: 33px;
        background: #30B5FE;
        border: none;
        box-shadow: 0 0 8px #30B5FE;
        padding-top: 10px;
    }

</style>
<div class="main-content">
    <div style="width: 1012px; margin: 0px auto;">
        <div>
            <div class="content">
                <div class="biaoti">
                    <div aria-label="Breadcrumb" role="navigation" class="el-breadcrumb">
                        <span class="el-breadcrumb__item"><span role="link"
                                                                class="el-breadcrumb__inner is-link">数据统计</span><span
                                    role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
                        <span class="el-breadcrumb__item" aria-current="page"><span role="link"
                                                                                    class="el-breadcrumb__inner"><span
                                        style="color: rgb(48, 211, 102);font-weight: bold">销售统计</span></span><span
                                    role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
                    </div>
                </div>
                <ul class="shuaixuan">
                    <li>
                        <select name="sel" id="sel" class="el-select xiala" onchange="sel(1)">
                            <option value="" style="display: none;"></option>
                            <option value="1" selected>最近一周</option>
                            <option value="2">最近一月</option>
                            <option value="3">最近一年</option>
                        </select>
                    </li>
                    <li style="display: flex;align-items: center;">
                        时间段选择
                        <div class="el-form-item__content" style="margin-left: 10px;">
                            <input id="test2" class="demo-input el-input__inner" placeholder="日期时间范围">
                        </div>
                    </li>
                    <li>
                        <button type="button" class="el-button blue el-button--primary is-round">
                            <span>查询</span></button>
                    </li>
                </ul>
                <ul class="item">
                    <li>
                        <div class="item_box1">
                            6723.9
                        </div>
                        <div class="item_box2">
                            成交金额（元）
                        </div>
                    </li>
                    <li>
                        <div class="item_box1">
                            3456
                        </div>
                        <div class="item_box2">
                            金币总数
                        </div>
                    </li>
                    <li>
                        <div class="item_box1">
                            19%
                        </div>
                        <div class="item_box2">
                            成交转化率
                        </div>
                    </li>
                </ul>
                <div class="item1">
                    <div class="title1">
                        <div class="title_left">
                            销售额趋势
                        </div>
                        <div class="title_right">
                            <div class="btn btnorder active" uri='1'>
                                7天
                            </div>
                            <div class="btn btnorder" uri='2'>
                                一个月
                            </div>
                            <div class="btn btnorder" uri='3'>
                                一个季度
                            </div>
                            <div class="btn btnorder" uri='4'>
                                一年
                            </div>
                        </div>
                        <ul style="display: flex;">
                            <li>
                                <input id="test3" class="demo-input el-input__inner" placeholder="日期时间范围">
                                <script>
                                    laydate.render({
                                        elem: '#test3'
                                        , type: 'datetime'
                                        , range: true
                                        , theme: "#3CACFE"
                                    });
                                </script>
                            </li>
                            <li>
                                <button type="button" class="el-button blue el-button--primary is-round"
                                        style="margin-left:10px;width: 50px;height: 28px;padding:0;">
                                    <span> 确定 </span></button>
                            </li>
                        </ul>
                    </div>
                    <div class="bottom">
                        <div class="contents active">
                            <div class="tu3"></div>
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
        </div>
    </div>
</div>
<script>
    laydate.render({
        elem: '#test2'
        , type: 'datetime'
        , range: true
        , theme: "#3CACFE"
    });

    $(function () {
        var myCharts = echarts.init(document.querySelector('.tu3'));
        $('#test3').on('blur', function () {
            $('.laydate-btns-confirm').on('click', function () {
                let test3 = $('#test3');
                let date = test3.val().split(" - ");
                console.log(date);
                var sta = date[0];
                var end = date[1];
                var url = "<?= Yii::$service->url->getUrl('shop/datas/salesearchdate') ?>?type=1&sta=" + sta + "&end=" + end;
                $.get(url).done(function (data) {
                    var row = JSON.parse(data);
                    console.log(data);
                    // 填入数据
                    myCharts.setOption({
                        title: {
                            text: ''
                        },
                        tooltip: {},
                        legend: {
                            data: ['下单', '成交']
                        },
                        xAxis: {
                            data: row.dat    /* row.dat */
                        },
                        yAxis: {},
                        series: [{
                            name: '下单',
                            type: 'line',
                            data: row.moneyall    /* row.moneyorder */
                        },
                            {
                                name: '成交',
                                type: 'line',
                                data: row.moneyorder    /* row.moneyorder */
                            },
                        ],
                        toolbox: {

                            show: true,

                            feature: {

                                saveAsImage: {

                                    show: true,

                                    excludeComponents: ['toolbox'],

                                    pixelRatio: 2

                                }

                            }

                        }
                    });
                });
            })
        })

        var url = "<?= Yii::$service->url->getUrl("shop/datas/saleweek") ?>?type=" + 3;
        $('.btnorder').on("click", function () {
            $('.btnorder').removeClass('active').filter(this).addClass('active');

            if ($(this).attr("uri") == 1) {
                url = "<?= Yii::$service->url->getUrl("shop/datas/saleweek") ?>?type=" + 3;
            } else if ($(this).attr("uri") == 2) {
                url = "<?= Yii::$service->url->getUrl("shop/datas/salemonth") ?>?type=" + 3;
            } else if ($(this).attr("uri") == 3) {
                url = "<?= Yii::$service->url->getUrl("shop/datas/salequarter") ?>?type=" + 3;
            } else if ($(this).attr("uri") == 4) {
                url = "<?= Yii::$service->url->getUrl("shop/datas/saleyear") ?>?type=" + 3;
            }
            $.get(url).done(function (data) {
                var row = JSON.parse(data);
                // 填入数据
                myCharts.setOption({
                    title: {
                        text: ''
                    },
                    tooltip: {},
                    legend: {
                        data: ['下单', '成交']
                    },
                    xAxis: {
                        data: row.dat    /* row.dat */
                    },
                    yAxis: {},
                    series: [{
                        name: '下单',
                        type: 'line',
                        data: row.moneyall    /* row.moneyorder */
                    },
                        {
                            name: '成交',
                            type: 'line',
                            data: row.moneyorder    /* row.moneyorder */
                        },
                    ],
                    toolbox: {

                        show: true,

                        feature: {

                            saveAsImage: {

                                show: true,

                                excludeComponents: ['toolbox'],

                                pixelRatio: 2

                            }

                        }

                    }
                });


            });
        })
        $.get(url).done(function (data) {
            var row = JSON.parse(data);
            // 填入数据
            myCharts.setOption({
                title: {
                    text: ''
                },
                tooltip: {},
                legend: {
                    data: ['下单', '成交']
                },
                xAxis: {
                    data: row.dat    /* row.dat */
                },
                yAxis: {},
                series: [{
                    name: '下单',
                    type: 'line',
                    data: row.moneyall    /* row.moneyorder */
                },
                    {
                        name: '成交',
                        type: 'line',
                        data: row.moneyorder    /* row.moneyorder */
                    },
                ],
                toolbox: {

                    show: true,

                    feature: {

                        saveAsImage: {

                            show: true,

                            excludeComponents: ['toolbox'],

                            pixelRatio: 2

                        }

                    }

                }
            });


        });
    })
</script>
