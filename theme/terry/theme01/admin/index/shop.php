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
        <!--店铺列表-->
        <div class="admin-table">
            <div class="admin-tablename">
                    <div class="admin-tablenamebox"></div>
                    <span class="admin-tablename1"><a href="/vip">会员</a></span><span class="admin-tablename2">列表</span>
             </div>
                <div class="el-table__body-wrapper is-scrolling-left">
                    <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                           style="width: 1012px;">
                        <colgroup>
                            <col name="el-table_2_column_1" width="120">
                            <col name="el-table_2_column_2" width="200">
                            <col name="el-table_2_column_3" width="200">
                            <col name="el-table_2_column_4" width="200">
                            <col name="el-table_2_column_5" width="300">
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
                                <div class="cell">商家状态</div>
                            </th>
                            <th colspan="1" rowspan="1"
                                class="el-table_2_column_14     is-leaf">
                                <div class="cell">上次访问时间</div>
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
                            <col name="el-table_2_column_1" width="120">
                            <col name="el-table_2_column_2" width="200">
                            <col name="el-table_2_column_3" width="200">
                            <col name="el-table_2_column_4" width="200">
                            <col name="el-table_2_column_5" width="300">
                        </colgroup>
                        <tbody style="font-size: 12px;color:#82898e">
                        <?php foreach ($rows as $v){?>
                            <tr class="el-table__row" style="height:36px;font-size: 14px;">
                                <td class="el-table_2_column_11  ">
                                    <div class="cell el-tooltip" title="<?= $v["increment_id"] ?>">
                                        <?php echo $v['shop_id']?>
                                    </div>
                                </td>
                                <td class="el-table_2_column_12">
                                    <div class="cell el-tooltip">
                                        <?=$v['shop_name']?>
                                    </div>
                                </td>

                                <td class="el-table_2_column_14">
                                    <div class="cell el-tooltip" title="<?= $v["payment_method"] ?>">
                                        正常
                                    </div>
                                </td>
                                <td class="el-table_2_column_13">
                                    <div class="cell el-tooltip">
                                        2018-05-29 18:25
                                    </div>
                                </td>
                                <td class="el-table_2_column_18">
                                    <a style="color: #ff5932" href="">移入黑名单</a>
                                    &nbsp;<label>|</label>&nbsp;
                                    <a style="color: #41b2fc" href="">冻结账号</a>
                                    &nbsp;<label>|</label>&nbsp;
                                    <a href="<?= Yii::$service->url->getUrl('admin/index/wshop',array('id'=>$v['id']))?>" style="color: #41b2fc;left:200px;">查看</a>
                                    <label>|</label>&nbsp;
                                    <a href="<?= Yii::$service->url->getUrl('admin/index/del',array('id'=>$v['id'])) ?>">
                                        <button data-v-6045fa9c="" type="button"  style="color:#FC4C00"
                                                class="el-button el-button--text el-button--small">
                                            <span><i data-v-6045fa9c="" class="el-icon-delete"></i></span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>

        <div class="admincount" style="justify-content: flex-end;margin-bottom: 0px;margin-top:30px;font-size: 14px;">
            <div class="admincountall">
                <span style="color: #3db0ff">·</span>&nbsp;<span>总计</span><span><?=$tot?></span><span>记录</span>
            </div>
            <div class="admintotalpage">
                <span style="color: #29c99a">·</span>&nbsp;<span>分</span><span
                        style="color: #29c99a"><?= ceil($tot/2)?></span><span>页</span>
            </div>
            <div class="admintotalpage">
                <span style="color: #29c99a">·</span>&nbsp;<span>每页</span>
                <input type="text" style="display: inline-block;width: 40px;height: 20px;border-radius: 10px;
                            border: 1px solid #ebf6ff;background: #f3faff;outline: none;padding:0 5px;
                            box-sizing: border-box;text-align: center;color:#29c99a;line-height: 20px; "
                       value="2">
            </div>
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
</div>
