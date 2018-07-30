
<div class="main-content">
    <div class="ShopMannager">
        <div class="ShopMannager-title">
            <span>商家列表</span>
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
            <div class="el-table__body-wrapper is-scrolling-left">
                <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                       style="width: 1012px;">
                    <colgroup>
                        <col name="el-table_2_column_6" width="80">
                        <col name="el-table_2_column_7" width="120">
                        <col name="el-table_2_column_8" width="120">
                        <col name="el-table_2_column_9" width="120">
                        <col name="el-table_2_column_11" width="500">
                    </colgroup>
                    <thead class="has-gutter">
                    <tr style="font-size: 14px;color: #B1DBFE;text-align: left;height: 50px;">
                        <th
                                class="el-table_2_column_11     is-leaf">
                            <div class="cell">ID</div>
                        </th>
                        <th
                                class="el-table_2_column_12     is-leaf">
                            <div class="cell">商家名称</div>
                        </th>
                        <th
                                class="el-table_2_column_13     is-leaf">
                            <div class="cell">地区</div>
                        </th>
                        <th colspan="1" rowspan="1"
                            class="el-table_2_column_14     is-leaf">
                            <div class="cell">上次访问时间</div>
                        </th>
                        <th
                                class="el-table_2_column_15     is-leaf">
                            <div class="cell">相关操作</div>
                        </th>
                        <th class="gutter" style="width: 0px; display: none;"></th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="el-table__body-wrapper is-scrolling-left">
                <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                       style="width: 1012px;">
                    <colgroup>
                        <col name="el-table_2_column_6" width="80">
                        <col name="el-table_2_column_7" width="120">
                        <col name="el-table_2_column_8" width="120">
                        <col name="el-table_2_column_9" width="120">
                        <col name="el-table_2_column_11" width="500">
                    </colgroup>
                    <tbody style="font-size: 12px;color:#82898e">
                    <tr class="el-table__row" style="height:36px;font-size: 14px;">
                        <td class="el-table_2_column_11  ">
                            <div class="cell el-tooltip" title="">
                                01
                            </div>
                        </td>
                        <td class="el-table_2_column_12">
                            <div class="cell el-tooltip">
                                小明
                            </div>
                        </td>

                        <td class="el-table_2_column_14">
                            <div class="cell el-tooltip" title="">
                                万荣县
                            </div>
                        </td>
                        <td class="el-table_2_column_13">
                            <div class="cell el-tooltip">
                                2018.05.29 14:00:00
                            </div>
                        </td>
                        <td class="el-table_2_column_18">
                            <a href="" style="color: #41b2fc">订单管理</a>
                            &nbsp;<label>|</label>&nbsp;
                            <a style="color: #41b2fc" href="">商品管理</a>
                            &nbsp;<label>|</label>&nbsp;
                            <a style="color: #41b2fc" href="">分类管理</a>
                            &nbsp;<label>|</label>&nbsp;
                            <a href="" style="color: #41b2fc">评价管理</a>
                            &nbsp;<label>|</label>&nbsp;
                            <a style="color: #41b2fc" href="">咨询管理</a>
                            &nbsp;<label>|</label>&nbsp;
                            <a href="" style="color: #41b2fc" >优惠券管理</a>
                            &nbsp;<label>|</label>&nbsp;
                            <a style="color: #41b2fc" href="">活动管理</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
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
            </div>
        </div>
    </div>
</div>