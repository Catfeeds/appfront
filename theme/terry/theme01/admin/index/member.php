<div class="main-content">
    <div class="adminmannager">
        <!--用户管理-管理员管理-->
        <div class="adminmannager-title">
            <span>会员管理</span>&nbsp;
            <span>·&nbsp;账户管理</span>
        </div>
        <div class="adminmannager-search">
            <span>会员名称</span>
            <input type="text">
            <span class="search-ID">ID</span>
            <input type="text">

            <div class="xiala">
                <span class="search-ID">等级</span>
                <select name="member-level" id="member-level">
                    <option value="">白银会员</option>
                </select>
                <div class="xialaimg"></div>
            </div>

            <div class="search-img">
                <img src="/public/adminimg/search.png" alt="">
            </div>
        </div>
        <!--管理员列表-->
        <div class="admin-table">
            <div class="admin-tablename">
                <div class="admin-tablenamebox"></div>
                <span class="admin-tablename1"><a href="/vip">会员</a></span><span class="admin-tablename2">列表</span>
            </div>
            <table border="0" class="admin-tablelist">
                <tr>
                    <th>ID</th>
                    <th>会员名称</th>
                    <th>等级</th>
                    <th>账户状态</th>
                    <th>上次访问时间</th>
                    <th>相关操作</th>
                </tr>
                <?php foreach ($arr as $v){?>
                <tr>
                    <td><?php echo $v["ID"]+1?></td>
                    <td><?php echo $v["member_name"]?></td>
                    <td><?php echo $v["member_level"] ?></td>
                    <td>
                        <?php if ($v["member_status"]==1){
                            echo "正常";
                        }else{echo "不正常";} ?>
                    </td>
                    <td>
                        <?php echo $v["updated_time"]?>
                    </td>
                    <td>
                        <a style="color: #41b2fc" href="/vipinfo">查看</a>
                        &nbsp;<label>|</label>&nbsp;
                        <a style="color: #41b2fc" href="javascript:0">删除</a>
                        &nbsp;<label>|</label>&nbsp;
                        <a style="color: #ff5932" href="javascript:0">移入黑名单</a>
                        &nbsp;<label>|</label>&nbsp;
                        <a style="color: #41b2fc" href="javascript:0">冻结账号</a>
                    </td>
                </tr>
                <?php }?>
            </table>
        </div>
    </div>
</div>