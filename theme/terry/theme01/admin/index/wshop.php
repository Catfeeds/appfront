<style>
    .wshop_btn{width: 100px;height: 36px;color:#fff;line-height: 36px;text-align: center;
        background: #37df73;border-radius: 16px;float: left;margin-left:10px;border:none;outline: none;margin-bottom: 50px;}
</style>
<div class="main-content">
    <div class="adminmannager">
        <!--用户管理-管理员管理-->
        <div class="adminmannager-title">
            <span>店铺管理</span>&nbsp;
            <span style="color: #516676;">·&nbsp;<a href="javascript:0"><?php if($rows['shop_type']==1){echo "水司";}else{echo "商家";}?></a></span>&nbsp;
            <span>·&nbsp;<?= $rows['shop_name']?></span>
        </div>
        <!--管理员列表-->
        <div class="admin-table" style="margin:0;">
            <div class="admin-tablename">
                <div class="admin-tablenamebox"></div>
                <span class="admin-tablename1">认证</span><span class="admin-tablename2">信息</span>
            </div>
        </div>
        <div class="vipinfo"style="height: auto;">
            <div>
                <table border="0" class="ppro" cellspacing="8">
                    <tr>
                        <td valign="center">公司名称:</td>
                        <td valign="center">
                            <input type="text" value="<?php echo $rows['shop_company_name']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">注册号（营业执照号）:</td>
                        <td valign="center">
                            <input type="text" value="<?php echo $rows['business_licence_number']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">法定代表人姓名:</td>
                        <td valign="center">
                            <input type="text" value="<?php echo $rows['contacts_name']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">身份证号:</td>
                        <td valign="center">
                            <input type="text" value="<?php echo $rows['contacts_card_no']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center"><span>法人手持身份证照:</span></td>
                        <td valign="center">
                            <div style="height: 180px;">
                                <div style="height: 162px;width: 276px;line-height: 162px;text-align: center;
                                <?php if($row['contacts_card_electronic_1']){?>
                                        background:url(http://img.uekuek.com/images/<?php echo $row['contacts_card_electronic_1'];?>) no-repeat center center/100% 100%;
                                <?php }else{?>
                                    <?php echo 'background:#f3faff;'?>
                                <?php }?>
                                        border-radius: 2px;">
                                    <span style="color:#333;"><?php if($row['contacts_card_electronic_1']==null){echo "(空)";}?></span>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td valign="center">身份证:</td>
                        <td valign="center">
                            <div style="height: 100%;width: 276px;float:left;text-align: center">
                                <div style="height: 162px;width: 276px;line-height: 162px;text-align: center;
                                <?php if($row['contacts_card_electronic_2']){?>
                                        background:url(http://img.uekuek.com/images/<?php echo $row['contacts_card_electronic_2'];?>) no-repeat center center/100% 100%;
                                <?php }else{?>
                                    <?php echo 'background:#f3faff;'?>
                                <?php }?>
                                        border-radius: 2px;">
                                    <span style="color:#333;"><?php if($row['contacts_card_electronic_2']==null){echo "(空)";}?></span>
                                </div>
                                <span style="display:block;margin-top:20px;">正面</span>
                            </div>
                            <div style="height: 100%;width: 276px;float:left;margin-left:20px;text-align: center">
                                <div style="height: 162px;width: 276px;line-height: 162px;text-align: center;
                                <?php if($row['contacts_card_electronic_3']){?>
                                        background:url(http://img.uekuek.com/images/<?php echo $row['contacts_card_electronic_3'];?>) no-repeat center center/100% 100%;
                                <?php }else{?>
                                    <?php echo 'background:#f3faff;'?>
                                <?php }?>
                                        border-radius: 2px;">
                                    <span style="color:#333;"><?php if($row['contacts_card_electronic_3']==null){echo "(空)";}?></span>
                                </div>
                                <span style="display:block;margin-top:20px;">反面</span>
                            </div>

                            <div style="float:left;width: 100%;height: 46px; line-height:46px;">


                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">营业执照所在地:</td>
                        <td valign="center">
                            <input type="text" value="<?php echo $rows['province_id'],$rows['city_id'],$rows['district_id']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">营业执照详细地址:</td>
                        <td valign="center">
                            <input type="text" value="<?php echo $rows['shop_address']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">成立时间:</td>
                        <td valign="center">
                            <input type="text" value="<?php echo date('Y-m-d',$rows['shop_create_time'])?>" disabled class="awreview">
                        </td>
                    </tr>
                    <!--<tr>
                        <td valign="center">营业期限:</td>
                        <td valign="center">
                            <input type="text" value="<?php /*echo $rows['business_sphere']*/?>" disabled class="awreview">
                        </td>
                    </tr>-->
                    <tr>
                        <td valign="center">注册资本:</td>
                        <td valign="center">
                            <input type="text" value="<?php echo $rows['company_registered_capital']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">经营范围:</td>
                        <td valign="center">
                            <input type="text" value="<?php echo $rows['business_sphere']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">营业执照电子版:</td>
                        <td valign="center">
                            <div style="height: 395px;width: 570px;line-height: 395px;text-align: center;
                            <?php if($row['contacts_card_electronic_2']){?>
                                    background:url(http://img.uekuek.com/images/<?php echo $row['contacts_card_electronic_2'];?>) no-repeat center center/100% 100%;
                            <?php }else{?>
                                <?php echo 'background:#f3faff;'?>
                            <?php }?>
                                    border-radius: 2px;">
                                <span style="color:#333;"><?php if($row['contacts_card_electronic_2']==null){echo "(空)";}?></span>
                            </div>
                        </td>
                    </tr>
                </table>


            </div>
        </div>
        <!--店铺信息-->
        <div class="adminmannager" style="border-top:1px solid #f3faff;padding:0;margin-bottom: 50px;">
            <div class="admin-tablename" style="margin-top:0;">
                <div class="admin-tablenamebox"></div>
                <span class="admin-tablename1">店铺</span><span class="admin-tablename2">信息</span>
            </div>
            <div class="vipinfo"style="height: auto;">
                <div>
                    <table border="0" class="ppro" cellspacing="8">
                        <tr>
                            <td valign="center">店铺名称:</td>
                            <td valign="center">
                                <input type="text" value="<?php echo $rows['shop_name']?>" disabled class="awreview">
                            </td>
                        </tr>
                        <tr>
                            <td valign="center">关键词:</td>
                            <td valign="center">
                                <input type="text" value="<?php echo $rows['shop_keywords']?>" disabled class="awreview">
                            </td>
                        </tr>
                        <tr>
                            <td valign="center">店铺公告:</td>
                            <td valign="center">
                                <span>
                                    <?php echo $rows['shop_banner']?>
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!--审核状态-->
        <!--<div class="adminmannager" style="border-top:1px solid #f3faff;padding:0;">
            <div class="admin-tablename" style="margin-top:0;">
                <div class="admin-tablenamebox"></div>
                <span class="admin-tablename1">审核</span><span class="admin-tablename2">状态</span>
            </div>
            <button class="wshop_btn">
                <?php /*if($rows['shop_state']==0){echo "关闭";}
                else if ($rows['shop_state']==1){echo "开启";}
                else if ($rows['shop_state']==2){echo "冻结";}
                else if ($rows['shop_state']==3){echo "待审核";}
                else if ($rows['shop_state']==4){echo "未通过";}
                */?>
            </button>
        </div>-->
    </div>
</div>