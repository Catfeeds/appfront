<div class="main-content">
    <div class="ShopMannager">
        <div class="ShopMannager-title">
            <span>待审核列表</span>
        </div>
        <div class="ShopMannager-search">
            <div class="search" style="margin-left:0;">
                <span>名称</span>
                <input type="text">
            </div>
            <div class="search">
                <span>ID</span>
                <input type="text">
            </div>
            <div class="xiala" style="margin-left:20px;">
                <span class="search-ID">类型</span>
                <select name="member-level" id="member-level">
                    <option value="">全部</option>
                </select>
                <div class="xialaimg1"></div>
            </div>
            <div class="xiala" style="margin-left:20px;color:#49e17a">
                <span class="search-ID" style="color:#49e17a">地区</span>
                <select name="member-level" id="member-level" style="color:#49e17a">
                    <option value="">全部</option>
                </select>
                <div class="xialaimg1"></div>
            </div>
            <div class="ShopMannagersearch-img">
                <img src="/public/adminimg/search.png" alt="">
            </div>
        </div>
        <!--待审核列表-->
        <div class="wait-list">
            <table border="0" class="ProductorData-tablelist wait-tablelist">
                <tr>
                    <th>
                        ID
                    </th>
                    <th>名称</th>
                    <th>类型</th>
                    <th>创建</th>
                    <th>审核状态</th>
                    <th>操作</th>
                </tr>
                <tr>
                    <td>
                        <div id="check">
                                <input type="checkbox" class="input_check" id="check1">
                                <label for="check1"></label>
                        </div>
                        <div style="margin-left:6px;">01</div>
                    </td>
                    <td>万荣县自来水厂</td>
                    <td>水司</td>
                    <td><span>2018-05-17</span>&nbsp;<span>18:25</span></td>
                    <td>待审核</td>
                    <td>
                        <a to="" style="color: #2dacff">查看</a>
                        <label>|</label>&nbsp;
                        <a href="javascript:0" class="delete"></a>
                    </td>
                </tr>
            </table>
        </div>

        <div class="adminpagination">
            <div id="root">
                <!--全选-->
                `<div class="select-all">
                    <div :class="['checkbox',{'selectall':all}]" @click="selectall"></div>
                </div>
                <span>修改状态</span>
                <div class="xiala" style="margin-left:20px;color:#49e17a">
                    <select name="member-level" id="member-level" style="width: 100px;margin-top:1px;">
                        <option value="">通过</option>
                        <option value="">不通过</option>
                    </select>
                    <div class="xialaimg1" style="top:5px;"></div>
                </div>
                <button style="width: 90px;height: 32px;border:0;float: right;margin-top:1px;
background: #fc5e4a;border-radius: 18px;text-align: center;line-height: 32px;color: #fff;">
                    确定
                </button>
            </div>
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
            </div>
        </div>
    </div>
</div>