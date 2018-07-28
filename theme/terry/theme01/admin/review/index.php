<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="main-content">
    <div class="ShopMannager">
        <div class="ShopMannager-title">
            <span>待审核列表</span>
        </div>
        <div class="ShopMannager-search">
        <form id="el-form" class="el-form" method="post"  action="<?= Yii::$service->url->getUrl('admin/review/index') ?>">
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
            <div class="xiala xialapro" style="margin-left:20px;color:#49e17a">
                <span class="search-ID" style="color:#49e17a">地区省</span>
                <select name="province_id" id="province_id" style="color:#49e17a">
                    <option value="0">请选择省</option>
                    <?php foreach ($province as $k=>$v){?>
                    	<option value="<?php echo $v['province_id']?>"><?php echo $v['province_name']?></option>
                    <?php }?>
                </select>
                <div class="xialaimg1"></div>
            </div>
            <div class="xiala xialacity" style="margin-left:20px;color:#49e17a;">
                <span class="search-ID" style="color:#49e17a">市</span>
                <select name="city_id" id="city_id" style="color:#49e17a">
                    <option value="0">请选择市</option>
                </select>
                <div class="xialaimg1"></div>
            </div>
            <div class="xiala xialadis" style="margin-left:20px;color:#49e17a;">
                <span class="search-ID" style="color:#49e17a">县</span>
                <select name="district_id" id="district_id" style="color:#49e17a">
                    <option value="0">请选择县</option>
                </select>
                <div class="xialaimg1"></div>
            </div>
            <div class="ShopMannagersearch-img">
                <img src="/public/adminimg/search.png" alt="" onclick="$('#el-form').submit()">
            </div>
         </form>
        </div>
        <script type="text/javascript">
		        var proid="<?php echo $province_id?>";
				var cityid="<?php echo $city_id?>";
				var distid="<?php echo $district_id?>";
				$(function(){
					$("#shop_type").val("<?php echo $shop_type?>");
					if(proid>0){
						$("#province_id").val(proid);
						changePro(proid);
						if(cityid>0){
							$("#city_id").val(cityid);
							changeCity(cityid);
							if(distid>0){
								$("#district_id").val(distid);
							}
						}
					}
				})
				$("#province_id").change(function(){
					changePro($(this).val());
				})
				$("#city_id").change(function(){
					changeCity($(this).val());
				})
				function changePro(province_id){
					$.ajax({
						type:"get",
						url: "<?= Yii::$service->url->getUrl('admin/review/getcity') ?>",
						data:{"province_id":province_id},
						async:false,
						success:function(msg){
							var row =JSON.parse(msg);
							$("#city_id").find(".aa").remove();
							$("#district_id").find(".aa").remove();
							$.each(row,function(k,v){
								$("#city_id").append("<option value='"+v.city_id+"' class='aa'>"+v.city_name+"</option>");
							})
						}
					})
				}
				function changeCity(city_id){
					$.ajax({
						type:"get",
						url: "<?= Yii::$service->url->getUrl('admin/review/getdistrict') ?>",
						data:{"city_id":city_id},
						async:false,
						success:function(msg){
							var row =JSON.parse(msg);
							$("#district_id").find(".aa").remove();
							$.each(row,function(k,v){
								$("#district_id").append("<option value='"+v.district_id+"' class='aa' >"+v.district_name+"</option>");
							})
						}
					})
				}css({"color":"red","width":"11px"})
				css("color","red");
        </script>
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
                    <td>待审核</td>
                    <td>
                        <a href="/admin/review/wreview?shop_id=<?php echo $v['shop_id']?>" style="color: #2dacff">查看</a>
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