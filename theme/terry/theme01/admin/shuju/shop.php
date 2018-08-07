<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<style>
    .shop-btn{
        margin-right:16px;width: 100px;height: 32px;border:0;float: right;margin-top:8px;
        background: #32d699;border-radius: 18px;text-align: center;line-height: 32px;color: #fff;
    }
</style>
<div class="main-content">
    <div class="ShopMannager">
     
        <div class="adminmannager-title">
            <span>数据中心</span>&nbsp;
            <span>·&nbsp;商家数据</span>
        </div>
        <div class="ShopMannager-search adminmannager-search">
            <form action="<?= Yii::$service->url->getUrl('/admin/shuju/shop') ?>" method="get">
                <!--                省-->
                <div class="xiala xialapro" style="color:#49e17a">
                    <span class="search-ID" style="color:#8d8d8d;margin-left:0;">地区省</span>
                    <select name="province_id" id="province_id" style="color:#a4adb5">
                        <option value="0">请选择省</option>
                        <?php foreach ($province as $k=>$v){?>
                            <option value="<?php echo $v['province_id']?>"><?php echo $v['province_name']?></option>
                        <?php }?>
                    </select>
                    <div class="xialaimg1"></div>
                </div>
                <!--                市-->
                <div class="xiala xialapro" style="color:#3CACFE">
                    <span class="search-ID" style="color:#8d8d8d">市</span>
                    <select name="city_id" id="city_id" style="color:#a4adb5">
                        <option value="0">请选择市</option>
                    </select>
                    <div class="xialaimg1"></div>
                </div>
                <!--                县-->
                <div class="xiala xialapro" style="color:#3CACFE">
                    <span class="search-ID" style="color:#8d8d8d">县</span>
                    <select name="district_id" id="district_id" style="color:#a4adb5">
                        <option value="0">请选择县</option>
                    </select>
                    <div class="xialaimg1"></div>
                </div>
                <span style="margin-left:10px;">管理员名称</span>
                <input type="text" name="shop_name"
                    <?php if($shop_name){?>
                        value="<?= $shop_name?>"
                    <?php } else{?>
                        placeholder="请输入管理员名称"
                    <?php }?>
                >
                <div class="indexsearch">
                    <input class="search-img" type="submit" value="">
                </div>
            </form>
            <script type="text/javascript">
                $(function(){
                    //省份发生改变，则发送ajax请求，请求市区的数据
                    $("#province_id").change(function () {
                        changePro($(this).val());
                    })
                    //省份请求函数
                    function changePro(province_id){
                        $.ajax({
                            type:'get',
                            url:'<?=Yii::$service->url->getUrl('admin/shuju/getcity')?>',
                            data:{"province_id":province_id},
                            async:false,
                            success:function (msg) {
                                //将json转换为字符串
                                var rows = JSON.parse(msg);
                                $("#city_id").find(".aa").remove();
                                $("#district_id").find(".aa").remove();
                                $.each(rows,function (k,v) {
                                    // 将请求到的数据追加到市级
                                    $("#city_id").append("<option value='"+v.city_id+"' class='aa'>"+v.city_name+"</option>");
                                })
                            }
                        })
                    }
                    // 市区选项发生改变
                    $("#city_id").change(function () {
                        changeCity($(this).val());
                    })
                    //发送ajax请求获取县级
                    function changeCity(city_id) {
                        $.ajax({
                            type:'get',
                            url:'<?=Yii::$service->url->getUrl('admin/shuju/getdistrict')?>',
                            data:{'city_id':city_id},
                            async:false,
                            success:function(msg){
                                var rows = JSON.parse(msg);
                                $("#district_id").find(".aa").remove();
                                $.each(rows,function(k,v){
                                    $("#district_id").append("<option value='"+v.district_id+"' class='aa' >"+v.district_name+"</option>")
                                })
                            }
                        })
                    }
                })
            </script>
            <a href="<?= Yii::$service->url->getUrl('admin/shuju/export',array('shop_type'=>2)) ?>">
                <button class="shop-btn">
                    导出表格
                </button>
            </a>
        </div>
        <!--管理员列表-->
        <div class="ProductorData">
            <div class="admin-table">
                <div class="el-table__body-wrapper is-scrolling-left">
                    <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                           style="width: 1012px;">
                        <colgroup>
                            <col name="el-table_2_column_6" width="120">
                            <col name="el-table_2_column_7" width="200">
                            <col name="el-table_2_column_8" width="280">
                            <col name="el-table_2_column_9" width="180">
                            <col name="el-table_2_column_10" width="180">
                            <col name="el-table_2_column_11" width="300">
                        </colgroup>
                        <thead class="has-gutter">
                        <tr style="font-size: 14px;color: #B1DBFE;text-align: left;height: 50px;">
                            <th
                                    class="el-table_2_column_11     is-leaf">
                                <div class="cell">ID</div>
                            </th>
                            <th
                                    class="el-table_2_column_12     is-leaf">
                                <div class="cell">商家名称</div>
                            </th>
                            <th
                                    class="el-table_2_column_13     is-leaf">
                                <div class="cell">地区</div>
                            </th>
                            <th colspan="1" rowspan="1"
                                class="el-table_2_column_14     is-leaf">
                                <div class="cell">好评率</div>
                            </th>
                            <th colspan="1" rowspan="1"
                                class="el-table_2_column_14     is-leaf">
                                <div class="cell">投诉率</div>
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
                            <col name="el-table_2_column_8" width="280">
                            <col name="el-table_2_column_9" width="180">
                            <col name="el-table_2_column_10" width="180">
                            <col name="el-table_2_column_11" width="300">
                        </colgroup>
                        <tbody style="font-size: 12px;color:#82898e">

                            <?php foreach ($res as $k=>$v){?>
                                <tr class="el-table__row" style="height:36px;font-size: 14px;">
                                    <td class="el-table_2_column_11  ">
                                        <div class="cell el-tooltip" title="<?= $v["increment_id"] ?>">
                                            <?= $v['shop_id'] ?>
                                        </div>
                                    </td>
                                    <td class="el-table_2_column_12">
                                        <div class="cell el-tooltip">
                                            <?= $v['shop_name'] ?>
                                        </div>
                                    </td>

                                    <td class="el-table_2_column_14">
                                        <div class="cell el-tooltip" title="<?= $v["payment_method"] ?>">
                                            <?= $province[$v['province_id']-1]["province_name"]?>
                                            <?= $city[$v['city_id']-1]["city_name"]?>
                                            <?= $district[$v['district_id']-1]["district_name"]?>
                                        </div>
                                    </td>
                                    <td class="el-table_2_column_14">
                                        <div class="cell el-tooltip" title="<?= $v["payment_method"] ?>">
                                            <?= ceil((1-$tousunum[$k])*100).'%'?>
                                        </div>
                                    </td>
<!--                                    投诉率是投诉人数/总评论人数-->
                                    <td class="el-table_2_column_14">
                                        <div class="cell el-tooltip" title="<?= $v["payment_method"] ?>">
                                            <?= ceil($tousunum[$k]*100).'%'?>
                                        </div>
                                    </td>
                                    <td class="el-table_2_column_18">
                                        <a href="<?= Yii::$service->url->getUrl('admin/shuju/wshop', array('id' => $v['shop_id'])) ?>" style="color: #41b2fc;left:200px;">查看</a>
                                    </td>
                                </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="admincount" style="justify-content: flex-end;margin-bottom: 0px;margin-top:30px;font-size: 14px;">
            <?php if($tot>10){?>
                <div class="admincountall">
                    <span style="color: #3db0ff">·</span>&nbsp;<span>总计</span>
                    <span class="jianju"><?=$tot?></span>
                    <span>记录</span>
                </div>
                <div class="admintotalpage">
                    <span style="color: #29c99a">·</span>&nbsp;<span>分</span>
                    <span style="color: #29c99a" class="jianju"><?= ceil($tot/10)?></span><span>页</span>
                </div>
                <div class="admintotalpage">
                    <span style="color: #29c99a">·</span>&nbsp;<span>每页</span>
                    <input type="text" style="display: inline-block;width: 40px;height: 20px;border-radius: 10px;
                            border: 1px solid #ebf6ff;background: #f3faff;outline: none;padding:0 5px;
                            box-sizing: border-box;text-align: center;color:#29c99a;line-height: 20px; "
                           value="10" disabled>
                </div>
            <?php }?>
        </div>
<!--分页-->
        <div style="width: 100%; position: relative;height: 50px;margin-bottom: 50px;">
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