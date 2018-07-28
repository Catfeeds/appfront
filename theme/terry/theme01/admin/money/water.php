<div class="main-content">
    <div class="adminmannager">
        <!--用户管理-管理员管理-->
        <div class="adminmannager-title">
            <span>财务管理</span>&nbsp;
            <span>·&nbsp;水司财务</span>
        </div>
        <div class="adminmannager-search">
            <div class="xiala" style="float: left;">
                <span style="font-size: 14px;color:#82898e;margin-left:14px;">类别</span>
                <select name="member-level" id="member-level">
                    <option value="">全部</option>
                </select>
                <div class="xialaimg1" style="top:12px;"></div>
            </div>
            <span style="margin-left:10px;">商家名称</span>
            <input type="text" style="width: 150px">
            <span class="search-ID" style="margin-left:10px;">ID</span>
            <input type="text" style="width: 150px">
            <div class="xiala" style="float: left;">
                <span style="font-size: 14px;color:#82898e;margin-left:14px;">类别</span>
                <select name="member-level" id="member-level">
                    <option value="">全部</option>
                </select>
                <div class="xialaimg1" style="top:12px;"></div>
            </div>
            <div class="indexsearch">
                <input class="search-img" type="submit" value="">
            </div>
            <button class="addadmin" style="width: 100px;">导出表格</button>
        </div>
        <!--管理员列表-->
        <div class="admin-table">
            <table border="0" class="moneyproduct-list">
                <tr>
                    <th>ID</th>
                    <th>商家名称</th>
                    <th>总营业额</th>
                    <th>本月营业额</th>
                    <th>本月待付款</th>
                    <th>地区</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                <tr>
                    <td>01</td>
                    <td>万荣县自来水厂</td>
                    <td>200,000.00</td>
                    <td>200,000.00</td>
                    <td>200,000.00</td>
                    <td>万荣县</td>
                    <td>正常</td>
                    <td>
                        <a style="color: #41b2fc" href="javascript:0">查看</a>
                        &nbsp;<label>|</label>&nbsp;
                        <a style="color: #ff5932" href="javascript:0">冻结账号</a>
                    </td>
                </tr>
            </table >

        </div>

        <com-footer></com-footer>
    </div>

</div>