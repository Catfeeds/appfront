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
            <span>·&nbsp;账户管理</span>&nbsp;
            <span>·&nbsp;会员详情</span>
        </div>
        <!--管理员列表-->
        <div class="admin-table" style="margin:0;">
            <div class="admin-tablename">
                <div class="admin-tablenamebox"></div>
                <span class="admin-tablename1">基本</span><span class="admin-tablename2">信息</span>
            </div>
        </div>
        <div class="vipinfo">
            <div class="vipinfo-list">
                <table border="0">
                    <tr>
                        <td>会员编号:</td>
                        <td>
                            <input type="text" value="<?= $res['id']?>" name="id">
                        </td>
                    </tr>
                    <tr>
                        <td>会员名称:</td>
                        <td>
                            <input type="text" value="<?= $res['firstname']?>" name="firstname">
                        </td>
                    </tr>
                    <tr>
                        <td>性别:</td>
                        <td>
                            <input type="radio" value="1" name="sex" style="margin-left:10px;"
                            <?php if($res['sex']==1){echo "checked";}?>>
                            <span style="margin-left:10px">男</span>
                            <input type="radio" value="0" name="sex" style="margin-left:10px"
                                <?php if($res['sex']==0){echo "checked";}?>>
                            <span style="margin-left:10px">女</span>
                        </td>
                    </tr>
                    <tr>
                        <td>会员等级:</td>
                        <td>
                            <div class="xiala" style="margin:0;margin-left:10px;width: 300px;">
                                <select name="level" id="member-level"
                                        style="width: 300px;background: #f3faff;margin:0;height: 36px">
                                    <option value="0" <?php if($res['level']==0){echo 'selected';}?>>普通会员</option>
                                    <option value="1" <?php if($res['level']==1){echo 'selected';}?>>白金会员</option>
                                    <option value="2" <?php if($res['level']==2){echo 'selected';}?>>黄金会员</option>
                                </select>
                                <div class="xialaimg1" style="width: 30px;height: 30px;top:3px;"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>累计充值:</td>
                        <td>
                            <input type="text" value="￥<?php echo $money['moneyNum']?>" name="moneyNum">
                        </td>
                    </tr>
                    <tr>
                        <td>账号状态:</td>
                        <td>
                            <div class="xiala" style="margin:0;margin-left:10px;width: 300px;">
                                <select name="status" id="status" name="status"
                                        style="width: 300px;background: #f3faff;margin:0;height: 36px">
                                    <option value="" <?php if($res['status']==1){echo 'selected';}?>>正常</option>
                                    <option value="" <?php if($res['status']==0){echo 'selected';}?>>不正常</option>
                                </select>
                                <div class="xialaimg1" style="width: 30px;height: 30px;top:3px;"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>账户余额:</td>
                        <td>
                            <input type="text" value="￥<?php echo $res['money']?>" name="money">
                            <button style="outline: none;width: 100px;height: 36px;color:#fff;line-height: 36px;text-align: center;
background: #30b7fe;border-radius: 16px;float: left;margin-left:10px;border:none;" id="wmoney">查看详情</button>
                        </td>
                    </tr>
                    <tr>
                        <td>金币余额:</td>
                        <td>
                            <input type="text" value="<?= $res['coin']?>(个)" name="coin">
                            <button style="outline: none;width: 100px;height: 36px;color:#fff;line-height: 36px;text-align: center;
background: #30b7fe;border-radius: 16px;float: left;margin-left:10px;border:none;">查看详情</button>
                        </td>
                    </tr>
                    <tr>
                        <td>注册时间:</td>
                        <td>
                            <input type="text" name="created_at" value="<?php echo date("Y-m-d",$res['created_at'])?>">
                        </td>
                    </tr>
                    <tr>
                        <td>手机号:</td>
                        <td>
                            <input type="text" name="tel" value="<?php echo $res['tel'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>邮箱地址:</td>
                        <td>
                            <input type="text" name="email" value="<?php echo $res['email']?>">
                        </td>
                    </tr>
                    <tr>
                        <td>收货地址:</td>
                        <td></td>
                    </tr>
                </table>


            </div>
            <div class="el-table__body-wrapper is-scrolling-left">
                <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                       style="width: 1012px;">
                    <colgroup>
                        <col name="el-table_2_column_6" width="150">
                        <col name="el-table_2_column_7" width="400">
                        <col name="el-table_2_column_8" width="150">
                    </colgroup>
                    <thead class="has-gutter">
                    <tr style="font-size: 14px;color: #B1DBFE;text-align: left;height: 50px;">
                        <th
                                class="el-table_2_column_11     is-leaf">
                            <div class="cell">收货人</div>
                        </th>
                        <th
                                class="el-table_2_column_12     is-leaf">
                            <div class="cell">地址</div>
                        </th>
                        <th
                                class="el-table_2_column_13     is-leaf">
                            <div class="cell">手机号</div>
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
                        <col name="el-table_2_column_6" width="150">
                        <col name="el-table_2_column_7" width="400">
                        <col name="el-table_2_column_8" width="150">
                    </colgroup>
                    <tbody style="font-size: 12px;color:#82898e">
                    <?php foreach ($address as $v){?>
                        <tr class="el-table__row" style="height:36px;font-size: 14px;">
                            <td class="el-table_2_column_11  ">
                                <div class="cell el-tooltip" title="<?= $v["increment_id"] ?>">
                                    <span style="float: left;line-height: 36px;"><?= $v['first_name']?></span>
                                    <?php if($v['is_default']==1){?>
                                        <button style="width: 60px;height: 28px;color:#fff;line-height: 28px;text-align: center;
background: #37df75;border-radius: 16px;float: left;margin-left:10px;border:none;margin-top:6px;">默认</button>
                                    <?php }?>
                                </div>
                            </td>
                            <td class="el-table_2_column_12">
                                <div class="cell el-tooltip">
                                    <?php echo $v['city'],$v['street1'],$v['street2'];?>
                                </div>
                            </td>

                            <td class="el-table_2_column_14">
                                <div class="cell el-tooltip" title="<?= $v["payment_method"] ?>">
                                    <?= $v['telephone']?>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <button style="margin-top:50px;width: 100px;height: 36px;color:#fff;line-height: 36px;text-align: center;
background: #30b7fe;border-radius: 16px;float: left;border:none;outline: none;margin-bottom:50px;">保存修改</button>
        </div>
        <!--余额详情-->
        <div class="find-mask">
            <div class="find-maskc">
                <div class="admin-table">
                    <div class="admin-tablename">
                        <span class="admin-tablename1">余额查询</span>
                        <a href="javascript:0" style="float:right; font-size: 30px;color:#e0e0e0;line-height: 30px;
margin-right:20px;display: block;width: 32px;height: 32px;margin-top:20px;">×</a>
                    </div>
                    <table border="0" class="admin-tablelist active">
                        <tr>
                            <th>操作日期</th>
                            <th>用户操作</th>
                            <th>账户余额</th>
                        </tr>


                        <tr>
                            <td>2018.05.29 18:25:56</td>
                            <td>消费￥199</td>
                            <td>￥499</td>
                        </tr>/* $.ajax({
                        url:'/admin/index/wmember',
                        data:{
                        id:$res['id']
                        },
                        success:function (msg) {

                        }
                        })*/
                    </table >

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        $("#wmoney").click(function(){
            $(".find-mask").addClass('find-maskactive');

        })
    })
</script>