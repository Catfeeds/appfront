<div class="main-content">
    <div id="platdata">
        <div class="adminmannager-title">
            <span>数据中心</span>&nbsp;
            <span>·&nbsp;平台数据</span>
        </div>
        <div class="ShopMannager-search">
            <div class="xiala">
                <select name="member-level" id="member-level"
                        style="width: 180px;background: #f3faff;margin-left:0;">
                    <option value="">最近24小时</option>
                </select>
                <div class="xialaimg1"></div>
            </div>
            <!--时间戳-->
            <div class="block" style="float: left;line-height: 48px; margin-left: 20px;position: relative;">
                <span class="demonstration">时间段选择</span>
                <div class="timer">
                    <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                        <i class="el-input__icon el-range__icon el-icon-time"></i>
                        <input placeholder="开始日期" name="" class="el-range-input" />
                        <span class="el-range-separator">至</span>
                        <input placeholder="结束日期" name="" class="el-range-input"/>
                        <i class="el-input__icon el-range__icon el-icon-time"></i>
                    </div>
                </div>

            </div>
            <button>查询</button>
        </div>
        <div class="tongji">
            <ul>
                <li>
                    <div class="tongji-circle">
                        <img src="/public/adminimg/huiyuan.png">
                    </div>
                    <div class="tongji-number">
                        <div>
                            <span>188</span><span>个</span>
                        </div>
                        <div>
                            <span>新增会员</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="tongji-circle">
                        <img src="/public/adminimg/shuisi.png">
                    </div>
                    <div class="tongji-number">
                        <div>
                            <span>20</span><span>家</span>
                        </div>
                        <div>
                            <span>入驻水司</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="tongji-circle">
                        <img src="/public/adminimg/shangjia.png">
                    </div>
                    <div class="tongji-number">
                        <div>
                            <span>66</span><span>家</span>
                        </div>
                        <div>
                            <span>入驻商家</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="tongji-circle">
                        <img src="/public/adminimg/fangke.png">
                    </div>
                    <div class="tongji-number">
                        <div>
                            <span>2222</span>
                        </div>
                        <div>
                            <span>总访问量</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!--会员增长趋势-->
        <div class="addofplatdata" style="float: left;">
            <div class="platdata-header">
                <div class="platdata-headername">会员新增趋势</div>
                <div class="platdata-headerright">
                    <ul>
                        <li>七天</li>
                        <li>一个月</li>
                        <li>一个季度</li>
                        <li>一年</li>
                    </ul>
                    <!--时间戳-->
                    <div class="block" style="float: left;line-height: 48px; position: relative;
margin-top:4px;"
                    >
                        <div class="timer">
                            <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                                <input placeholder="开始日期" name="" class="el-range-input" />
                                <span class="el-range-separator">至</span>
                                <input placeholder="结束日期" name="" class="el-range-input"/>
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                            </div>
                        </div>

                    </div>
                    <button style="float: left;border:0;margin-top:13px;">确定</button>
                </div>
            </div>
            <div id="mychart">
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
            </div>
        </div>
        <!--水司增长趋势-->
        <div class="addofplatdata" style="float: left;">
            <div class="platdata-header">
                <div class="platdata-headername">水司新增趋势</div>
                <div class="platdata-headerright">
                    <ul>
                        <li>七天</li>
                        <li>一个月</li>
                        <li>一个季度</li>
                        <li>一年</li>
                    </ul>
                    <!--时间戳-->
                    <div class="block" style="float: left;line-height: 48px; position: relative;
margin-top:4px;"
                    >
                        <div class="timer">
                            <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                                <input placeholder="开始日期" name="" class="el-range-input" />
                                <span class="el-range-separator">至</span>
                                <input placeholder="结束日期" name="" class="el-range-input"/>
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                            </div>
                        </div>

                    </div>
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
            </div>
        </div>
        <!--商家增长趋势-->
        <div class="addofplatdata" style="float: left;">
            <div class="platdata-header">
                <div class="platdata-headername">商家新增趋势</div>
                <div class="platdata-headerright">
                    <ul>
                        <li>七天</li>
                        <li>一个月</li>
                        <li>一个季度</li>
                        <li>一年</li>
                    </ul>
                    <!--时间戳-->
                    <div class="block" style="float: left;line-height: 48px; position: relative;
margin-top:4px;"
                    >
                        <div class="timer">
                            <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                                <input placeholder="开始日期" name="" class="el-range-input" />
                                <span class="el-range-separator">至</span>
                                <input placeholder="结束日期" name="" class="el-range-input"/>
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                            </div>
                        </div>

                    </div>
                    <button style="float: left;border:0;margin-top:13px;">确定</button>
                </div>
            </div>
            <div id="mychart3">
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
            </div>
        </div>
        <!--商品服务数据-->
        <div class="addofplatdata" style="float: left;">
            <div class="platdata-header">
                <div class="platdata-headername">商品服务数据</div>
                <div class="platdata-headerright">
                    <ul>
                        <li>七天</li>
                        <li>一个月</li>
                        <li>一个季度</li>
                        <li>一年</li>
                    </ul>
                    <!--时间戳-->
                    <div class="block" style="float: left;line-height: 48px; position: relative;
margin-top:4px;"
                    >
                        <div class="timer">
                            <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                                <input placeholder="开始日期" name="" class="el-range-input" />
                                <span class="el-range-separator">至</span>
                                <input placeholder="结束日期" name="" class="el-range-input"/>
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                            </div>
                        </div>

                    </div>
                    <button style="float: left;border:0;margin-top:13px;">确定</button>
                </div>
            </div>
            <div id="mychart4">
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
            </div>
        </div>
        <!--支付方式汇总-->
        <div class="addofplatdata" style="float: left;">
            <div class="platdata-header">
                <div class="platdata-headername">商品服务数据</div>
                <div class="platdata-headerright">
                    <ul>
                        <li>七天</li>
                        <li>一个月</li>
                        <li>一个季度</li>
                        <li>一年</li>
                    </ul>
                    <!--时间戳-->
                    <div class="block" style="float: left;line-height: 48px; position: relative;
margin-top:4px;"
                    >
                        <div class="timer">
                            <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                                <input placeholder="开始日期" name="" class="el-range-input" />
                                <span class="el-range-separator">至</span>
                                <input placeholder="结束日期" name="" class="el-range-input"/>
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                            </div>
                        </div>

                    </div>
                    <button style="float: left;border:0;margin-top:13px;">确定</button>
                </div>
            </div>
            <div id="mychart5">
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
            </div>
        </div>
        <!--访问数据-->
        <div class="addofplatdata" style="float: left;">
            <div class="platdata-header">
                <div class="platdata-headername">访问数据</div>
                <div class="platdata-headerright">
                    <ul>
                        <li>七天</li>
                        <li>一个月</li>
                        <li>一个季度</li>
                        <li>一年</li>
                    </ul>
                    <!--时间戳-->
                    <div class="block" style="float: left;line-height: 48px; position: relative;
margin-top:4px;"
                    >
                        <div class="timer">
                            <div class="el-date-editor el-range-editor el-input__inner el-date-editor--datetimerange">
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                                <input placeholder="开始日期" name="" class="el-range-input" />
                                <span class="el-range-separator">至</span>
                                <input placeholder="结束日期" name="" class="el-range-input"/>
                                <i class="el-input__icon el-range__icon el-icon-time"></i>
                            </div>
                        </div>

                    </div>
                    <button style="float: left;border:0;margin-top:13px;">确定</button>
                </div>
            </div>
            <div id="mychart6">
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
            </div>
        </div>
    </div>
</div>
<style>
    .layui-laydate .layui-this{
        background: #30B5FE !important;
    }
</style>