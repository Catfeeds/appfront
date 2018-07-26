<div class="main-content">

    <div class="adminmannager">
        <!--用户管理-管理员管理-->
        <div class="adminmannager-title">
            <span>店铺管理</span>&nbsp;
            <!--跳转水司-->
            <span>·&nbsp;<a href="/shuisic" style="color: #30d366;">商家</a></span>
        </div>
        <div class="adminmannager-search">
            <form action="<?= Yii::$service->url->getUrl('/admin/index/member') ?>" method="get">
                <div class="xiala">
                    <span class="search-ID"  style="margin-left:0px;">地区</span>
                    <select name="member-level" id="member-level">
                        <?php foreach ($province as $v){?>
                            <option value="<?php echo $v['province_name'];?>"><?php echo $v['province_name'];?></option>
                        <?php }?>

                    </select>
                    <div class="xialaimg1"></div>
                </div>
                <span style="margin-left:10px;">管理员名称</span>
                <input type="text">
                <span class="search-ID">ID</span>
                <input type="text">
                <div class="indexsearch">
                    <input class="search-img" type="submit" value="">
                </div>
            </form>
        </div>
        <!--管理员列表-->
        <div class="admin-table">
            <div class="admin-tablename">
                <div class="admin-tablenamebox"></div>
                <span class="admin-tablename1">商家</span><span class="admin-tablename2">列表</span>
            </div>
            <table border="0" class="admin-tablelist active">
                <tr>
                    <th>ID</th>
                    <th>商家名称</th>
                    <th>商家状态</th>
                    <th>上次访问时间</th>
                    <th style="flex:1.5;">操作</th>
                </tr>
                <tr>
                    <td>01</td>
                    <td>小明</td>
                    <td>正常</td>
                    <td>2018-05-29 18:25</td>
                    <td style="flex:1.5;">
                        <a style="color: #ff5932" href="javascript:0">移入黑名单</a>
                        &nbsp;<label>|</label>&nbsp;
                        <a style="color: #41b2fc" href="javascript:0">冻结账号</a>
                        &nbsp;<label>|</label>&nbsp;
                        <a href="/personalp" style="color: #41b2fc;left:200px;">查看</a>
                        <label>|</label>&nbsp;
                        <a href="javascript:0" class="delete" style="left:211px;"></a>
                    </td>
                </tr>
            </table >
        </div>

    </div>
</div>
