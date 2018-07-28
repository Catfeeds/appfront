<?php

use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;


?>
<div class="main-content">
    <div class="adminmannager">
        <!--用户管理-管理员管理-->
        <div class="adminmannager-title">
            <span>会员管理</span>&nbsp;
            <span>·&nbsp;账户管理</span>
        </div>
        <div class="adminmannager-search">
            <form action="<?= Yii::$service->url->getUrl('/admin/index/member') ?>" method="get">

                <span>会员名称</span>
                <input type="text" name="firstname" value="<?php if ($firstname!=null){echo $firstname;}?>">
                <span class="search-ID">ID</span>
                <input type="text" name="id" value="<?php if ($id!=null){echo $id;}?>">

                <div class="xiala">
                    <span class="search-ID">等级</span>
                    <select name="level" id="member-level">
                        <option value="0" <?php if ($level==0){echo "selected";}?>>普通会员</option>
                        <option value="1" <?php if ($level==1){echo "selected";}?>>白银会员</option>
                        <option value="2" <?php if ($level==2){echo "selected";}?>>黄金会员</option>

                    </select>
                    <div class="xialaimg"></div>
                </div>
                <div class="indexsearch">
                    <input class="search-img" type="submit" value="">
                </div>
            </form>

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
                <?php foreach ($rows as $v){?>
                <tr>
                    <td><?php echo $v["id"]?></td>
                    <td><?php echo $v["firstname"]?></td>
                    <td><?php if($v['level']==0){echo '普通会员';}else if($v['level']==1){echo '白金会员';}else if ($v['level']==2){echo '黄金会员';}?></td>
                    <td>
                        正常
                    </td>
                    <td>
                        <?php echo date('Y-m-d',$v["updated_at"]);?>
                    </td>
                    <td>
                        <a style="color: #41b2fc" href="<?= Yii::$service->url->getUrl('admin/index/wmember',array('id'=>$v['id']))?>">查看</a>
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
        <div style="width: 100%; position: relative;height: 50px;">
            <div style="font-size: 12px; position: absolute; bottom: 0; right: 0; display: flex; justify-content: space-between;">
                <?php
                echo LinkPager::widget([
                    'pagination' => $pagination,
                    'firstPageLabel' => '首页',
                    'lastPageLabel' => '尾页',

                    'nextPageLabel' => '>',
                    'prevPageLabel' => '<',
                ]);


                ?>
                <style>
                    .pagination {
                        white-space: nowrap;
                        padding: 2px 5px;
                        color: #303133;
                        font-weight: 700;
                    }

                    .pagination li {
                        padding: 0 4px;
                        background: #fff;
                        font-size: 13px;
                        min-width: 35.5px;
                        height: 28px;
                        line-height: 28px;
                        box-sizing: border-box;
                        display: inline-block;
                    }

                    .pagination li.first {
                        width: 54px;
                        height: 20px;
                        background: #edf8ff;
                        border: 2px solid #e8f6ff;
                        border-radius: 10px;
                        color: #41b2fc;
                        line-height: 18px;
                        text-align: center;
                        margin-top: 8px;
                    }

                    .pagination li.last {
                        width: 54px;
                        height: 20px;
                        background: #51b7fc;
                        border: 2px solid #51b7fc;
                        border-radius: 10px;
                        color: #fff;
                        line-height: 18px;
                        text-align: center;
                        margin-top: 8px;
                    }
                    .pagination li.first a{
                        color: #51b7fc;
                    }
                    .pagination li.last a{
                        color: #fff;
                    }
                    .pagination li a {
                        color: #000;
                        font-weight: bold;
                    }

                    .pagination li.active a {
                        color: #409EFF;
                        cursor: default;
                    }
                </style>
            </div>
        </div>
    </div>
</div>