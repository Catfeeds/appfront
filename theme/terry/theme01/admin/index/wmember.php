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
                            <input type="text" value="￥<?php echo $res['coin']?>">
                        </td>
                    </tr>
                    <tr>
                        <td>账号状态:</td>
                        <td>
                            <div class="xiala" style="margin:0;margin-left:10px;width: 300px;">
                                <select name="status" id="status"
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
                            <input type="text" value="￥<?php echo $res['money']?>">
                            <button style="outline: none;width: 100px;height: 36px;color:#fff;line-height: 36px;text-align: center;
background: #30b7fe;border-radius: 16px;float: left;margin-left:10px;border:none;" @click="dofind">查看详情</button>
                        </td>
                    </tr>
                    <tr>
                        <td>金币余额:</td>
                        <td>
                            <input type="text" value="<?= $res['coin']?>(个)">
                            <button style="outline: none;width: 100px;height: 36px;color:#fff;line-height: 36px;text-align: center;
background: #30b7fe;border-radius: 16px;float: left;margin-left:10px;border:none;">查看详情</button>
                        </td>
                    </tr>
                    <tr>
                        <td>注册时间:</td>
                        <td>
                            <input type="text" value="2018-05-21">
                        </td>
                    </tr>
                    <tr>
                        <td>手机号:</td>
                        <td>
                            <input type="text" value="13409876743">
                        </td>
                    </tr>
                    <tr>
                        <td>邮箱地址:</td>
                        <td>
                            <input type="text" value="1340987674@qq.com">
                        </td>
                    </tr>
                    <tr>
                        <td>收货地址:</td>
                        <td></td>
                    </tr>
                </table>


            </div>
            <table border="0" class="admin-tablelist active" style="float: left;">
                <tr>
                    <th>收货人</th>
                    <th style="flex:2;">地址</th>
                    <th>手机号</th>
                    <th>编辑</th>
                </tr>
                <tr>
                    <td>
                        <span style="float: left;">木子</span>
                        <button style="width: 80px;height: 36px;color:#fff;line-height: 36px;text-align: center;
background: #37df75;border-radius: 16px;float: left;margin-left:10px;border:none;">默认
                        </button>
                    </td>
                    <td style="flex:2;">山西省太原市迎泽区迎泽大街大南门123号</td>
                    <td>13400000003</td>
                    <td>
                        <a style="color: #30a3fe" href="javascript:0">删除</a>
                        &nbsp;<label>|</label>&nbsp;
                        <a style="color: #30a3fe" href="javascript:0">修改</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span style="float: left;">木子</span>
                    </td>
                    <td style="flex:2;">山西省太原市迎泽区迎泽大街大南门123号</td>
                    <td>13400000003</td>
                    <td>
                        <a style="color: #30a3fe" href="javascript:0">删除</a>
                        &nbsp;<label>|</label>&nbsp;
                        <a style="color: #30a3fe" href="javascript:0">修改</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span style="float: left;">木子</span>
                    </td>
                    <td style="flex:2;">山西省太原市迎泽区迎泽大街大南门123号</td>
                    <td>13400000003</td>
                    <td>
                        <a style="color: #30a3fe" href="javascript:0">删除</a>
                        &nbsp;<label>|</label>&nbsp;
                        <a style="color: #30a3fe" href="javascript:0">修改</a>
                    </td>
                </tr>
            </table >
            <button style="width: 100px;height: 36px;color:#fff;line-height: 36px;text-align: center;
background: #30b7fe;border-radius: 16px;float: left;margin-left:10px;border:none;outline: none;">保存修改</button>
        </div>

        <com-footer></com-footer>
    </div>
</div>