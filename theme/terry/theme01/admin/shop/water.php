<div class="main-content">
    <div class="ShopMannager">
        <div class="ShopMannager-title">
            <span>水司列表</span>
        </div>
        <div class="ShopMannager-search">
            <div class="xiala">
                <span class="search-ID">地区</span>
                <select name="member-level" id="member-level">
                    <option value="">全部</option>
                </select>
                <div class="xialaimg1"></div>
            </div>
            <div class="search">
                <span>商家名称</span>
                <input type="text">
            </div>
            <div class="search">
                <span>水司ID</span>
                <input type="text">
            </div>
            <div class="xiala" style="margin-left:20px;">
                <span class="search-ID">地区</span>
                <select name="member-level" id="member-level">
                    <option value="">全部</option>
                </select>
                <div class="xialaimg1"></div>
            </div>
            <div class="ShopMannagersearch-img">
                <img src="/public/adminimg/search.png" alt="">
            </div>
        </div>
        <!--管理员列表-->
        <div class="ShopMannager-table">
            <table border="0" class="ShopMannager-tablelist">
                <tr>
                    <th>ID</th>
                    <th style="flex:0.4;">水司名称</th>
                    <th>地区</th>
                    <th>上次访问时间</th>
                    <th>相关操作</th>
                </tr>
                <tr>
                    <td>01</td>
                    <td style="flex:0.4;">万荣县自来水厂</td>
                    <td>万荣县</td>
                    <td>2018.05.29 14:00:00</td>
                    <td>
                        <a href="/sPOrder" style="color: #41b2fc">订单管理</a>
                        &nbsp;<label>|</label>&nbsp;
                        <a style="color: #41b2fc" href="/smannager">商品管理</a>
                        &nbsp;<label>|</label>&nbsp;
                        <a style="color: #41b2fc" href="/scategory">分类管理</a>
                        &nbsp;<label>|</label>&nbsp;
                        <a href="/spingjia" style="color: #41b2fc">评价管理</a>
                        &nbsp;<label>|</label>&nbsp;
                        <a style="color: #41b2fc" href="/scousult">咨询管理</a>
                        &nbsp;<label>|</label>&nbsp;
                        <a href="/scoupan" style="color: #41b2fc" >优惠券管理</a>
                        &nbsp;<label>|</label>&nbsp;
                        <a style="color: #41b2fc" href="/sactivity">活动管理</a>
                    </td>
                </tr>
            </table>
        </div>
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
                    <div style="float: right;">
                        <button class="firstpage-box">首页</button>
                        <el-pagination
                                layout="prev, pager, next"
                                :total="50">
                        </el-pagination>
                        <button class="lastpage-box">末页</button>
                    </div>
                </div>
                <!--<div class="block">
                    <span class="demonstration">大于 7 页时的效果</span>
                    <el-pagination
                            layout="prev, pager, next"
                            :total="1000">
                    </el-pagination>
                </div>-->
            </div>
        </div>
        <com-footer></com-footer>
    </div>
</div>