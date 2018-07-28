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
                        <img src="/public/adminimg/3_03.png">
                    </div>
                    <div class="tongji-number">
                        <div>
                            <span>6723.98</span>
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
                            <span>6723.98</span>
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
                            <span>299</span>
                        </div>
                        <div>
                            <span>订单总数</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="process">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <!--成交额趋势-->
        <div class="addofplatdata" style="float: left;">
            <div class="platdata-header">
                <div class="platdata-headername">成交额趋势</div>
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
        <!--本月营业排行TOP10-->
        <div class="addofplatdata" style="float: left;">
            <div class="platdata-header">
                <div class="platdata-headername">本月营业排行TOP10</div>


                <div class="xiala" style="float: left;">
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
                </div>
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
            <div class="paihang">
                <table border="0" class="ShopMannager-tablelist money-list">
                    <tr style="border-bottom:2px solid #b2b2b2;box-sizing: border-box;">
                        <th>排行</th>
                        <th>店铺名称</th>
                        <th>销售量（件）</th>
                        <th>销售额（元）</th>
                        <th>均价（元）</th>
                    </tr>
                    <tr>
                        <td style="color:#30a3fe">01</td>
                        <td>爱康街洗衣纺大街21</td>
                        <td>12344</td>
                        <td>10009</td>
                        <td>119</td>
                    </tr>
                    <tr>
                        <td style="color:#30d366">02</td>
                        <td>爱康街洗衣纺大街21</td>
                        <td>12344</td>
                        <td>10009</td>
                        <td>119</td>
                    </tr>
                    <tr>
                        <td style="color:#fedc95">03</td>
                        <td>爱康街洗衣纺大街21</td>
                        <td>12344</td>
                        <td>10009</td>
                        <td>119</td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>爱康街洗衣纺大街21</td>
                        <td>12344</td>
                        <td>10009</td>
                        <td>119</td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>爱康街洗衣纺大街21</td>
                        <td>12344</td>
                        <td>10009</td>
                        <td>119</td>
                    </tr>
                    <tr>
                        <td>06</td>
                        <td>爱康街洗衣纺大街21</td>
                        <td>12344</td>
                        <td>10009</td>
                        <td>119</td>
                    </tr>
                    <tr>
                        <td>07</td>
                        <td>爱康街洗衣纺大街21</td>
                        <td>12344</td>
                        <td>10009</td>
                        <td>119</td>
                    </tr>
                    <tr>
                        <td>08</td>
                        <td>爱康街洗衣纺大街21</td>
                        <td>12344</td>
                        <td>10009</td>
                        <td>119</td>
                    </tr>
                    <tr>
                        <td>09</td>
                        <td>爱康街洗衣纺大街21</td>
                        <td>12344</td>
                        <td>10009</td>
                        <td>119</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>爱康街洗衣纺大街21</td>
                        <td>12344</td>
                        <td>10009</td>
                        <td>119</td>
                    </tr>
                </table>
            </div>


        </div>
    </div>
</div>