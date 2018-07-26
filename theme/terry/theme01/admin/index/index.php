<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="main-content">
<div class="adminmannager">
    <!--用户管理-管理员管理-->
    <div class="adminmannager-title">
        <span>管理员管理</span>&nbsp;
        <span>·&nbsp;管理员管理</span>
    </div>
    <div class="adminmannager-search">
        <span>管理员名称</span>
        <input type="text">
        <span class="search-ID">ID</span>
        <input type="text">
        <div class="search-img">
            <img src="/public/adminimg/search.png" alt="">
        </div>
        <button class="addadmin">
            <a href="/admin/index/add">添加管理员</a>
        </button>
    </div>
    <!--管理员列表-->
    <div class="admin-table">
        <div class="admin-tablename">
            <div class="admin-tablenamebox"></div>
            <span class="admin-tablename1">管理员</span><span class="admin-tablename2">列表</span>
        </div>
        <table border="0" class="admin-tablelist active">
            <tr>
                <th>ID</th>
                <th>管理员名称</th>
                <th>账户状态</th>
                <th>上次访问时间</th>
                <th>操作</th>
            </tr>
            <?php foreach($arr as $k=>$v){?>

            <tr>
                <td><?= $k+1?></td>
                <td><?= $v["username"]?></td>
                <td>
                    <?php if ($v["status"]==1){
                        echo "正常";
                    }else{echo "不正常";} ?>
                </td>
                <td>
                    <?php echo $v["updated_at_datetime"] ?>
                </td>
                <td>
                    <a style="color: #ff5932" href="javascript:0">移入黑名单</a>
                    &nbsp;<label>|</label>&nbsp;
                    <a style="color: #41b2fc" href="javascript:0">冻结账号</a>
                    &nbsp;<label>|</label>&nbsp;
                    <a href="javascript:0" class="delete"></a>
                </td>
            </tr>
            <?php }?>
        </table >
    </div>

</div>
</div>
<style>
    .addadmin a{
        color: #fff;
    }
</style>