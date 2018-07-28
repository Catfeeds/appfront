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
            <!--跳转水司-->
            <span>·&nbsp;<a href="/admin/index/water" style="color: #30d366;">商家</a></span>
        </div>
        <div class="adminmannager-search">
            <form action="<?= Yii::$service->url->getUrl('/admin/index/shop') ?>" method="get">
<!--                省-->
                <div class="xiala xialapro" style="color:#49e17a">
                    <span class="search-ID" style="color:#49e17a;margin-left:0;">地区省</span>
                    <select name="province_id" id="province_id" style="color:#49e17a">
                        <option value="0">请选择省</option>
                        <?php foreach ($province as $k=>$v){?>
                            <option value="<?php echo $v['province_id']?>"><?php echo $v['province_name']?></option>
                        <?php }?>
                    </select>
                    <div class="xialaimg1"></div>
                </div>
<!--                市-->
                <div class="xiala xialapro" style="color:#49e17a">
                    <span class="search-ID" style="color:#49e17a">市</span>
                    <select name="city_id" id="city_id" style="color:#49e17a">
                        <option value="0">请选择市</option>
                    </select>
                    <div class="xialaimg1"></div>
                </div>
<!--                县-->
                <div class="xiala xialapro" style="color:#49e17a">
                    <span class="search-ID" style="color:#49e17a">县</span>
                    <select name="district_id" id="district_id" style="color:#49e17a">
                        <option value="0">请选择县</option>
                    </select>
                    <div class="xialaimg1"></div>
                </div>
                <span style="margin-left:10px;">管理员名称</span>
                <input type="text" name="shop_name">
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
                            url:'<?=Yii::$service->url->getUrl('admin/index/getcity')?>',
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
                            url:'<?=Yii::$service->url->getUrl('admin/index/getdistrict')?>',
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
                <?php foreach ($rows as $v){?>
                    <tr>
                        <td><?php echo $v['shop_id']?></td>
                        <td><?=$v['shop_name']?></td>
                        <td>正常</td>
                        <td>2018-05-29 18:25</td>
                        <td style="flex:1.5;">
                            <a style="color: #ff5932" href="">移入黑名单</a>
                            &nbsp;<label>|</label>&nbsp;
                            <a style="color: #41b2fc" href="">冻结账号</a>
                            &nbsp;<label>|</label>&nbsp;
                            <a href="" style="color: #41b2fc;left:200px;">查看</a>
                            <label>|</label>&nbsp;
                            <a href="" class="delete" style="left:211px;"></a>
                        </td>
                    </tr>
                <?php }?>

            </table >
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
