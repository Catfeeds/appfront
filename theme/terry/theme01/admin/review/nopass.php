<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="main-content">
    <div class="ShopMannager">
        <div class="ShopMannager-title">
            <span>未通过列表</span>
        </div>
        <div class="ShopMannager-search">
        <form id="el-form" class="el-form" method="post"  action="<?= Yii::$service->url->getUrl('admin/review/nopass') ?>">
     	    <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>" />
            <div class="search" style="margin-left:0;">
                <span>名称</span>
                <input type="text" name="shop_name" value="<?php echo $shop_name;?>">
            </div>
            <div class="xiala" style="margin-left:20px;">
                <span class="search-ID">类型</span>
                <select name="shop_type" id="shop_type">
                    <option value="0">请选择类型</option>
                    <option value="1">水司</option>
                    <option value="2">商家</option>
                </select>
                <div class="xialaimg1"></div>
            </div>
            <script type="text/javascript">
				$(function(){
					$("#shop_type").val("<?php echo $shop_type?>");
				})
            </script>
            <div class="xiala" style="margin-left:20px;color:#49e17a">
                <span class="search-ID" style="color:#49e17a">地区</span>
                <select name="member-level" id="member-level" style="color:#49e17a">
                    <option value="">全部</option>
                </select>
                <div class="xialaimg1"></div>
            </div>
            <div class="ShopMannagersearch-img">
                <img src="/public/adminimg/search.png" alt="" onclick="$('#el-form').submit()">
            </div>
         </form>
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
                    <th>审核状态</th>
                    <th>操作</th>
                </tr>
                  <?php foreach($list as $k=>$v){?>
                <tr>
                    <td>
                        <div style="margin-left:6px;"><?php echo $k+1?></div>
                    </td>
                    <td><?php echo $v['shop_name']?></td>
                    <?php if($v['shop_type']==1){?>
                    <td>水司</td>
                    <?php }else{?>
                    <td>商家</td>
                    <?php }?>
                    <td>未通过</td>
                    <td>
                        <a to="" style="color: #2dacff">查看</a>
                    </td>
                </tr>
                 <?php }?>
            </table>
        </div>

        <div class="adminpagination">
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
</div>