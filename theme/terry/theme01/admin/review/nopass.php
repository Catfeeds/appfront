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
           <div class="xiala xialapro" style="margin-left:20px;color:#49e17a">
                <span class="search-ID" style="color:#a4adb5">地区省</span>
                <select name="province_id" id="province_id" style="color:#a4adb5">
                    <option value="0">请选择省</option>
                    <?php foreach ($province as $k=>$v){?>
                    	<option value="<?php echo $v['province_id']?>"><?php echo $v['province_name']?></option>
                    <?php }?>
                </select>
                <div class="xialaimg1"></div>
            </div>
            <div class="xiala xialacity" style="margin-left:20px;color:#49e17a;">
                <span class="search-ID" style="color:#a4adb5">市</span>
                <select name="city_id" id="city_id" style="color:#a4adb5">
                    <option value="0">请选择市</option>
                </select>
                <div class="xialaimg1"></div>
            </div>
            <div class="xiala xialadis" style="margin-left:20px;color:#49e17a;">
                <span class="search-ID" style="color:#a4adb5">县</span>
                <select name="district_id" id="district_id" style="color:#a4adb5">
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
				}
        </script>
        <!--待审核列表-->
        <div class="wait-list">
            <div class="el-table__body-wrapper is-scrolling-left" style="margin-top:20px;">
                <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                       style="width: 1012px;">
                    <colgroup>
                        <col name="el-table_2_column_6" width="120">
                        <col name="el-table_2_column_7" width="200">
                        <col name="el-table_2_column_8" width="200">
                        <col name="el-table_2_column_9" width="200">
                        <col name="el-table_2_column_10" width="150">
                    </colgroup>
                    <thead class="has-gutter">
                    <tr style="font-size: 14px;color: #B1DBFE;text-align: left;height: 50px;">
                        <th
                                class="el-table_2_column_11     is-leaf">
                            <div class="cell">ID</div>
                        </th>
                        <th
                                class="el-table_2_column_12     is-leaf">
                            <div class="cell">名称</div>
                        </th>
                        <th
                                class="el-table_2_column_13     is-leaf">
                            <div class="cell">类型</div>
                        </th>
                        <th colspan="1" rowspan="1"
                            class="el-table_2_column_14     is-leaf">
                            <div class="cell">审核状态</div>
                        </th>
                        <th
                                class="el-table_2_column_15     is-leaf">
                            <div class="cell">操作</div>
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
                        <col name="el-table_2_column_6" width="120">
                        <col name="el-table_2_column_7" width="200">
                        <col name="el-table_2_column_8" width="200">
                        <col name="el-table_2_column_9" width="200">
                        <col name="el-table_2_column_10" width="150">
                    </colgroup>
                    <tbody style="font-size: 12px;color:#82898e">
                    <?php foreach($list as $k=>$v){?>
                        <tr class="el-table__row" style="height:36px;font-size: 14px;">
                            <td class="el-table_2_column_11  ">
                                <div class="cell el-tooltip" title="<?= $v["increment_id"] ?>">
                                    <?php echo $k+1?>
                                </div>
                            </td>
                            <td class="el-table_2_column_12">
                                <div class="cell el-tooltip">
                                    <?php echo $v['shop_name']?>
                                </div>
                            </td>
                            <?php if($v['shop_type']==1){?>
                                <td class="el-table_2_column_14">
                                    <div class="cell el-tooltip" title="<?= $v["payment_method"] ?>">
                                        水司
                                    </div>
                                </td>
                            <?php }else{?>
                                <td class="el-table_2_column_13">
                                    <div class="cell el-tooltip">
                                        商家
                                    </div>
                                </td>
                            <?php }?>
                                <td class="el-table_2_column_14">
                                    <div class="cell el-tooltip" title="<?= $v["payment_method"] ?>">
                                        未通过
                                    </div>
                                </td>
                            <td class="el-table_2_column_18">
                                <a href="/admin/review/nopasswreview?shop_id=<?php echo $v['shop_id']?>" style="color: #2dacff">查看</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
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
</div>