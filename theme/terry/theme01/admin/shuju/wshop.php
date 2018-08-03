<div class="main-content">
    <div>
        <!--头部-->
        <div class="header">
            <ul>
                <li>
                    <router-link to="/">
                        用户管理
                    </router-link>
                </li>
                <li>
                    <router-link to="/shuju">
                        数据中心
                    </router-link>
                </li>
                <li>
                    <router-link to="/shop">
                        店铺管理
                    </router-link>
                </li>
                <li>
                    <router-link to="/check">
                        审核管理
                    </router-link>
                </li>
                <li>
                    <router-link to="/system">
                        系统管理
                    </router-link>
                </li>
                <li>
                    <router-link to="/money">
                        财务管理
                    </router-link>
                </li>
            </ul>
            <div class="header-right">
                <div class="adminname">
                    <div class="admin-img"></div>
                    <span class="name1">管理员名称</span>
                </div>
                <div class="adminname">
                    <div class="clearimg"></div>
                    <span class="name2">清除缓存</span>
                </div>
                <div class="adminname">
                    <div class="out"></div>
                    <span class="name3">退出</span>
                </div>
            </div>
        </div>
        <div style="width: 100%;height: 637px;">
            <!--侧边栏-->
            <div class="aside">
                <div class="logo"></div>
                <ul class="aside-list">
                    <li>

                        <router-link to="/shuju">
                            <span>平台数据</span>
                        </router-link>
                        <div :class="['col-box']"></div>
                    </li>
                    <li>
                        <div :class="['col-box']"></div>
                        <router-link to="/shuju/ProductorData"><span>商家数据</span></router-link>
                    </li>
                    <li>
                        <div :class="['col-box']"></div>
                        <router-link to="/shuju/shuisi"><span>水司数据</span></router-link>
                    </li>
                </ul>
            </div>
            <!--主内容-->
            <div id="platdata">
                <div class="adminmannager-title">
                    <span>数据中心</span>&nbsp;
                    <span>·&nbsp;商家数据</span>
                </div>
                <div class="ShopMannager-search">
                    <div class="xiala">
                        <select name="member-level" id="member-level"
                                style="width: 180px;background: #f3faff;margin-left:0;">
                            <option value="">最近一周</option>
                        </select>
                        <div class="xialaimg1"></div>
                    </div>
                    <!--时间戳-->
                    <div class="block" style="float: left;line-height: 48px; margin-left: 20px;position: relative;">
                        <span class="demonstration">时间段选择</span>
                        <div class="timer">
                            <el-date-picker
                                v-model="value1"
                                type="date"
                            >
                            </el-date-picker>
                            <div style="width: 26px;height: 26px;border-radius: 50%;
                background: #30a3fe; position: absolute;top:0;bottom:0;margin:auto 0;
                left:248px;pointer-events: none">
                                <img src="../../../assets/img/date.png" style="width: 12px;height: 12px;display:block;
margin:0 auto;margin-top:7px;">
                            </div>
                        </div>
                        <span style="margin:0 6px">~</span>
                        <div class="timer">
                            <el-date-picker
                                v-model="value2"
                                type="date"
                            >
                            </el-date-picker>
                            <div style="width: 26px;height: 26px;border-radius: 50%;
                background: #30a3fe; position: absolute;top:0;bottom:0;margin:auto 0;
                right:5px;pointer-events: none">
                                <img src="../../../assets/img/date.png" style="width: 12px;height: 12px;display:block;
margin:0 auto;margin-top:7px;">
                            </div>
                        </div>

                    </div>
                    <button>查询</button>
                </div>
                <div class="tongji ptongji">
                    <ul>
                        <li style="background: #fff;">
                            <div class="tongji-circle pcontent-circle">
                                <img src="../../../assets/img/pcontent1.png">
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
                                <img src="../../../assets/img/pcontent2.png">
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
                                <img src="../../../assets/img/pcontent3.png">
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
                                <img src="../../../assets/img/pcontent4.png">
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
                                    <el-date-picker
                                        v-model="value1"
                                        type="date"
                                        placeholder="请选择开始时间"
                                    >
                                    </el-date-picker>
                                    <div style="width: 26px;height: 26px;border-radius: 50%;
                background: #30a3fe; position: absolute;top:0;bottom:0;margin:auto 0;
                right:215px;pointer-events: none">
                                        <img src="../../../assets/img/date.png" style="width: 12px;height: 12px;display:block;
margin:0 auto;margin-top:7px;">
                                    </div>
                                </div>
                                <div class="timer">
                                    <el-date-picker
                                        v-model="value2"
                                        type="date"
                                        placeholder="请选择结束时间"
                                    >
                                    </el-date-picker>
                                    <div style="width: 26px;height: 26px;border-radius: 50%;
                background: #30a3fe; position: absolute;top:0;bottom:0;margin:auto 0;
                right:5px;pointer-events: none">
                                        <img src="../../../assets/img/date.png" style="width: 12px;height: 12px;display:block;
margin:0 auto;margin-top:7px;">
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
                            <div class="block" style="float: left;line-height: 48px; position: relative;
margin-top:4px;"
                            >
                                <div class="timer">
                                    <el-date-picker
                                        v-model="value1"
                                        type="date"
                                        placeholder="请选择开始时间"
                                    >
                                    </el-date-picker>
                                    <div style="width: 26px;height: 26px;border-radius: 50%;
                background: #30a3fe; position: absolute;top:0;bottom:0;margin:auto 0;
                right:210px;pointer-events: none">
                                        <img src="../../../assets/img/date.png" style="width: 12px;height: 12px;display:block;
margin:0 auto;margin-top:7px;">
                                    </div>
                                </div>
                                <div class="timer">
                                    <el-date-picker
                                        v-model="value2"
                                        type="date"
                                        placeholder="请选择结束时间"
                                    >
                                    </el-date-picker>
                                    <div style="width: 26px;height: 26px;border-radius: 50%;
                background: #30a3fe; position: absolute;top:0;bottom:0;margin:auto 0;
                right:5px;pointer-events: none">
                                        <img src="../../../assets/img/date.png" style="width: 12px;height: 12px;display:block;
margin:0 auto;margin-top:7px;">
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