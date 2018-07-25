<div class="main-content">
    <div class="ShopMannager">
        <div class="ShopMannager-title">
            <span>水司数据</span>
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
                <span>名称</span>
                <input type="text">
            </div>
            <div class="search">
                <span>ID</span>
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
            <button style="margin-right:16px;width: 100px;height: 32px;border:0;float: right;margin-top:8px;
background: #32d699;border-radius: 18px;text-align: center;line-height: 32px;color: #fff;">
                导出表格
            </button>
        </div>
        <!--管理员列表-->
        <div class="ProductorData">
            <table border="0" class="ProductorData-tablelist">
                <tr>
                    <th>ID</th>
                    <th>商家名称</th>
                    <th>地区</th>
                    <th>好评率</th>
                    <th>投诉率</th>
                    <th>操作</th>
                </tr>
                <tr>
                    <td>01</td>
                    <td>万荣县自来水厂</td>
                    <td>万荣县</td>
                    <td>98%</td>
                    <td>2%</td>
                    <td>
                        <a to="/scontent" style="color: #2dacff">查看</a>
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
                            <span style="color: #29c99a">·</span>&nbsp;<span>分</span><span
                                    style="color: #29c99a">82</span><span>页</span>
                        </div>
                        <div class="admintotalpage">
                            <span style="color: #29c99a">·</span>&nbsp;<span>每页</span>
                            <input type="text" style="display: inline-block;width: 40px;height: 20px;border-radius: 10px;
                            border: 1px solid #ebf6ff;background: #f3faff;outline: none;padding:0 5px;
                            box-sizing: border-box;text-align: center;color:#29c99a;line-height: 20px; "
                                   value="10">
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
        
    </div>
</div>