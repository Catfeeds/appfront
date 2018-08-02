<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="main-content">
    <div class="adminmannager">
        <!--用户管理-管理员管理-->
        <div class="adminmannager-title">
            <span>财务管理</span>&nbsp;
            <span>·&nbsp;商家财务</span>
        </div>
        <div class="adminmannager-search">
            <form method="get" action="<?= Yii::$service->url->getUrl('admin/money/shop') ?>">
            <span style="margin-left:10px;">商家名称</span>
            <input type="text" style="width: 150px" name="shop_name" value="<?php echo  $shop_name?>">
            <div class="xiala" style="margin-left:20px;">
                <span class="search-ID">状态</span>
                <select name="shop_state" id="shop_state">
                    <option value="0">请选择状态</option>
                    <option value="1">开启</option>
                    <option value="2">冻结</option>
                    <option value="3">关闭</option>
                </select>
                <div class="xialaimg1"></div>
            </div>
            <div class="indexsearch">
                <input class="search-img" type="submit" value="">
            </div>
            </form>
            <button class="addadmin" style="width: 100px;">导出表格</button>
        </div>
        <!--管理员列表-->
        <div class="admin-table">
            <table border="0" class="moneyproduct-list">
                <tr>
                    <th>ID</th>
                    <th>商家名称</th>
                    <th>总销售额</th>
                    <th>月销售额</th>
                    <th>地区</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                <?php foreach ($list as $k=>$v){?>
                <tr>
                	<td><?php echo $k+1?></td>
                	<td><?php echo $v['shop_name']?></td>
                	<td><?php echo $v['total']?></td>
                	<td><?php echo $v['total_B']?></td>
                	<td><?php echo $v['district_name']?></td>
                	<?php if($v['shop_state']==0){?>
                	 <td>关闭</td>
                	<?php }else if($v['shop_state']==1){?>
                	  <td>开启</td>              	
                	<?php }else if($v['shop_state']==2){?>
                	 <td>冻结</td>
                	<?php }?>
                	<td>
                        <a style="color: #41b2fc" href="javascript:0">查看</a>
                        &nbsp;<label>|</label>&nbsp;
                        <?php if($v['shop_state']==0){?>
	                	<a style="color: #ff5932" href="javascript:open(<?php echo $v['shop_id']?>)">开启</a>
	                	<?php }else if($v['shop_state']==1){?>
	                	  <a style="color: #ff5932" href="javascript:frozen(<?php echo $v['shop_id']?>)">冻结</a>             	
	                	<?php }else if($v['shop_state']==2){?>
	                	 <a style="color: #ff5932" href="javascript:open(<?php echo $v['shop_id']?>)">开启</a>
	                	<?php }?>
                        
                    </td>
                    </tr>
                <?php }?>
            </table>
            <script type="text/javascript">
			function frozen(id){
				if(confirm("确定要冻结此账号吗")){
					$.ajax({
						url:"<?= Yii::$service->url->getUrl('admin/money/frozen') ?>",
						type:'get',
						data:{"id":id},
						async:false,
						success:function(msg){
							if(msg){
								location.href="<?= Yii::$service->url->getUrl('admin/money/water') ?>";
							}
						}
					})
				}
			}
			function open(id){
				if(confirm("确定要开启此账号吗")){
					$.ajax({
						url:"<?= Yii::$service->url->getUrl('admin/money/open') ?>",
						type:'get',
						data:{"id":id},
						async:false,
						success:function(msg){
							if(msg){
								location.href="<?= Yii::$service->url->getUrl('admin/money/water') ?>";
							}
						}
					})
				}
			}
		</script>
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
        </div>
    </div>
        </div>
</div>