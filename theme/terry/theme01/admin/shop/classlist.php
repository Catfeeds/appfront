<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="main-content">
<div class="adminmannager">
    <!--用户管理-管理员管理-->
    <div class="adminmannager-title">
        <span>店铺管理</span>&nbsp;
        <span>·&nbsp;分类管理</span>
    </div>
    <div class="adminmannager-search">
        <span>管理员名称</span>
        <input type="text">
        <div class="search-img">
            <img src="/public/adminimg/search.png" alt="">
        </div>
        <button class="addadmin">
            <a href="/admin/index/classadd">添加管理员</a>
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
           <!--  -->
        </table >
    </div>

</div>
</div>
<style>
    .addadmin a{
        color: #fff;
    }
</style>