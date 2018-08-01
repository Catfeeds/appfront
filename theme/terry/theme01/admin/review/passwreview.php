<style>
    .vipinfo table tr:first-child:hover{
        background: #fff;
    }
</style>
<div class="main-content">
    <div class="adminmannager">
        <!--用户管理-管理员管理-->
        <div class="adminmannager-title">
        	<?php if($row['shop_type']==1){?>
            <span>水司信息</span>&nbsp;
            <?php }else{?>
            <span>商家信息</span>&nbsp;
            <?php }?>
            <span style="color: #516676;">·&nbsp;<router-link to="/ShopMannager"><?php echo $row['shop_name']?></router-link></span>&nbsp;
            <span>·&nbsp;查看</span>
        </div>
        <form id="el-form" class="el-form" method="post"  action="<?= Yii::$service->url->getUrl('admin/review/pass') ?>">
     	    <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>" />
        <!--管理员列表-->
        <div class="admin-table" style="margin:0;">
            <div class="admin-tablename">
                <div class="admin-tablenamebox"></div>
                <span class="admin-tablename1">企业</span><span class="admin-tablename2">信息</span>
            </div>
        </div>
        <div class="vipinfo"style="height: auto;">
            <div>
                <table border="0" class="ppro" cellspacing="8">
                    <tr>
                        <td valign="center">公司名称:</td>
                        <td valign="center">
                            <input type="text" value="<?php echo $row['shop_company_name']?>" disabled class="awreview">
<!--                            <span>--><?php //echo $row['shop_company_name']?><!--</span>-->
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">注册号（营业执照号）:</td>
                        <td valign="center">
                            <input type="text" value="<?php echo $row['business_licence_number']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center"><span>营业执照电子版:</span></td>
                        <td valign="center">
                            <div style="height: 180px;">
                                <div style="height: 162px;width: 276px;line-height: 162px;text-align: center;
                                <?php if($row['business_licence_number_electronic']){?>
                                        background:url(http://img.uekuek.com/images/<?php echo $row['business_licence_number_electronic'];?>) no-repeat center center/100% 100%;
                                <?php }else{?>
                                    <?php echo 'background:#eee;'?>
                                <?php }?>
                                        border-radius: 2px;">
                                    <span style="color:#333;"><?php if($row['business_licence_number_electronic']==null){echo "(空)";}?></span>
                                </div>
			               </div>

                        </td>
                    </tr>
                    <tr>
                        <td valign="center">注册资金:</td>
                        <td valign="center">
                            <input type="text" value="<?php echo $row['company_registered_capital']?>" disabled class="awreview">
<!--                            <span>--><?php //echo $row['company_registered_capital']?><!--</span>-->
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">联系人姓名:</td>
                        <td valign="center">
                            <input type="text" value="<?php echo $row['contacts_name']?>" disabled class="awreview">

<!--                            <span>--><?php //echo $row['contacts_name']?><!--</span>-->
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">联系人电话:</td>
                        <td valign="center">
                            <input type="text" value="<?php echo $row['contacts_phone']?>" disabled class="awreview">
<!--                            <span>--><?php //echo $row['contacts_phone']?><!--</span>-->
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">联系人邮箱:</td>
                        <td valign="center">
<!--                            <span>--><?php //echo $row['contacts_email']?><!--</span>-->
                            <input type="text" value="<?php echo $row['contacts_email']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">申请人身份证号:</td>
                        <td valign="center">
<!--                            <span>--><?php //echo $row['contacts_card_no']?><!--</span>-->
                            <input type="text" value="<?php echo $row['contacts_card_no']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center"><span>申请人手持身份证电子版:</span></td>
                        <td valign="center">
                            <div style="height: 180px;">
                                <div style="height: 162px;width: 276px;line-height: 162px;text-align: center;
                                <?php if($row['contacts_card_electronic_1']){?>
                                        background:url(http://img.uekuek.com/images/<?php echo $row['contacts_card_electronic_1'];?>) no-repeat center center/100% 100%;
                                <?php }else{?>
                                    <?php echo 'background:#eee;'?>
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
                                    <?php echo 'background:#eee;'?>
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
                                    <?php echo 'background:#eee;'?>
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
                        <td valign="center">银行开户名:</td>
                        <td valign="center">
<!--                            <span>--><?php //echo $row['bank_account_name']?><!--</span>-->
                            <input type="text" value="<?php echo $row['bank_account_name']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">公司银行账号:</td>
                        <td valign="center">
<!--                            <span>--><?php //echo $row['bank_account_number']?><!--</span>-->
                            <input type="text" value="<?php echo $row['bank_account_number']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">开户银行支行名称:</td>
                        <td valign="center">
<!--                            <span>--><?php //echo $row['bank_name']?><!--</span>-->
                            <input type="text" value="<?php echo $row['bank_name']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">支行联行号:</td>
                        <td valign="center">
<!--                            <span>--><?php //echo $row['bank_code']?><!--</span>-->
                            <input type="text" value="<?php echo $row['bank_code']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">开户银行所在地:</td>
                        <td valign="center">
<!--                            <span>--><?php //echo $row['bank_address']?><!--</span>-->
                            <input type="text" value="<?php echo $row['bank_address']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">结算银行开户名:</td>
                        <td valign="center">
<!--                            <span>--><?php //echo $row['settlement_bank_account_name']?><!--</span>-->
                            <input type="text" value="<?php echo $row['settlement_bank_account_name']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">结算公司银行账号:</td>
                        <td valign="center">
<!--                            <span>--><?php //echo $row['settlement_bank_account_number']?><!--</span>-->
                            <input type="text" value="<?php echo $row['settlement_bank_account_number']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">结算开户银行支行名称:</td>
                        <td valign="center">
<!--                            <span>--><?php //echo $row['settlement_bank_name']?><!--</span>-->
                            <input type="text" value="<?php echo $row['settlement_bank_name']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">结算支行联行号:</td>
                        <td valign="center">
<!--                            <span>--><?php //echo $row['settlement_bank_code']?><!--</span>-->
                            <input type="text" value="<?php echo $row['settlement_bank_code']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">结算开户银行所在地:</td>
                        <td valign="center">
<!--                            <span>--><?php //echo $row['settlement_bank_address']?><!--</span>-->
                            <input type="text" value="<?php echo $row['settlement_bank_address']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">税务登记证号:</td>
                        <td valign="center">
<!--                            <span>--><?php //echo $row['tax_registration_certificate']?><!--</span>-->
                            <input type="text" value="<?php echo $row['tax_registration_certificate']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">纳税人识别号:</td>
                        <td valign="center">
<!--                            <span>--><?php //echo $row['taxpayer_id']?><!--</span>-->
                            <input type="text" value="<?php echo $row['taxpayer_id']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">员工总数:</td>
                        <td valign="center">
<!--                            <span>--><?php //echo $row['company_employee_count']?><!--</span>-->
                            <input type="text" value="<?php echo $row['company_employee_count']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">经营范围:</td>
                        <td valign="center">
<!--                            <span>--><?php //echo $row['business_sphere']?><!--</span>-->
                            <input type="text" value="<?php echo $row['business_sphere']?>" disabled class="awreview">
                        </td>
                    </tr>
                    <tr>
                        <td valign="center">组织机构代码:</td>
                        <td valign="center">
                            <span><?php echo $row['organization_code']?></span>
                            <input type="text" value="<?php echo $row['organization_code']?>" disabled class="awreview">

                        </td>
                    </tr>
                    <tr>
                        <td valign="center"><span>一般纳税人证明:</span></td>
                        <td valign="center">
                            <div style="height: 180px;">
                                <div style="height: 162px;width: 276px;
									background:url(http://img.uekuek.com/images/<?php echo $row['general_taxpayer'];?>) no-repeat center center/100% 100%;
									border-radius: 2px;"></div>
			               </div>

                        </td>
                    </tr>
                    <tr>
                        <td valign="center"><span>组织机构代码电子版:</span></td>
                        <td valign="center">
                            <div style="height: 180px;">
                                <div style="height: 162px;width: 276px;line-height: 162px;text-align: center;
                                <?php if($row['organization_code_electronic']){?>
                                        background:url(http://img.uekuek.com/images/<?php echo $row['organization_code_electronic'];?>) no-repeat center center/100% 100%;
                                <?php }else{?>
                                    <?php echo 'background:#eee;'?>
                                <?php }?>

									border-radius: 2px;">
                                    <span style="color:#333;"><?php if($row['organization_code_electronic']==null){echo "(空)";}?></span>
                                </div>
			               </div>

                        </td>
                    </tr>
                    <tr>
                        <td valign="center"><span>开户银行许可证电子版:</span></td>
                        <td valign="center">
                            <div style="height: 180px;">
                                <div style="height: 162px;width: 276px;line-height: 162px;text-align: center;
                                <?php if($row['bank_licence_electronic']){?>
                                        background:url(http://img.uekuek.com/images/<?php echo $row['bank_licence_electronic'];?>) no-repeat center center/100% 100%;
                                <?php }else{?>
                                    <?php echo 'background:#eee;'?>
                                <?php }?>

									border-radius: 2px;">
                                    <span style="color:#333;"><?php if($row['bank_licence_electronic']==null){echo "(空)";}?></span>
                                </div>
			               </div>

                        </td>
                    </tr>
                    <tr>
                        <td valign="center"><span>税务登记证号电子版:</span></td>
                        <td valign="center">
                            <div style="height: 180px;">
                                <div style="height: 162px;width: 276px;line-height: 162px;text-align: center;
                                <?php if($row['tax_registration_certificate_electronic']){?>
                                        background:url(http://img.uekuek.com/images/<?php echo $row['tax_registration_certificate_electronic'];?>) no-repeat center center/100% 100%;
                                <?php }else{?>
                                    <?php echo 'background:#eee;'?>
                                <?php }?>

									border-radius: 2px;">
                                    <span style="color:#333;"><?php if($row['tax_registration_certificate_electronic']==null){echo "(空)";}?></span>
                                </div>
			               </div>

                        </td>
                    </tr>
                </table>


            </div>
        </div>
        
        <!--店铺信息-->
        <div class="adminmannager" style="border-top:1px solid #eee;padding:0 0 20px 0;">
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
<!--                                <span>--><?php //echo $row['shop_name']?><!--</span>-->
                                <input type="text" value="<?php echo $row['shop_name']?>" disabled class="awreview">
                            </td>
                        </tr>
                        <tr>
                        <td valign="center"><span>店铺logo:</span></td>
                        <td valign="center">
                            <div style="height: 180px;">
                                <div style="height: 162px;width: 276px;line-height: 162px;text-align: center;
                                <?php if($row['shop_logo']){?>
                                        background:url(http://img.uekuek.com/images/<?php echo $row['shop_logo'];?>) no-repeat center center/100% 100% ;
                                <?php }else{?>
                                    <?php echo 'background:#eee;'?>
                                <?php }?>

									border-radius: 2px;">
                                    <span style="color:#333;"><?php if($row['shop_logo']==null){echo "(空)";}?></span>
                                </div>
			               </div>

                        </td>
	                    </tr>
	                    <tr>
	                        <td valign="center"><span>店铺横幅:</span></td>
	                        <td valign="center">
	                            <div style="height: 180px;">
	                                <div style="height: 162px;width: 276px;line-height: 162px;text-align: center;
                                    <?php if($row['shop_banner']){?>
                                            background:url(http://img.uekuek.com/images/<?php echo $row['shop_banner'];?>) no-repeat center center/100% 100%;
                                    <?php }else{?>
                                        <?php echo 'background:#eee;'?>
                                    <?php }?>

										border-radius: 2px;">
                                        <span style="color:#333;"><?php if($row['shop_banner']==null){echo "(空)";}?></span>
                                    </div>
				               </div>
	
	                        </td>
	                    </tr>
	                    <tr>
	                        <td valign="center"><span>店铺头像:</span></td>
	                        <td valign="center">
	                            <div style="height: 180px;">
	                                <div style="height: 162px;width: 276px;line-height: 162px;text-align: center;
                                    <?php if($row['shop_avatar']){?>
                                            background:url(http://img.uekuek.com/images/<?php echo $row['shop_avatar'];?>) no-repeat center center/100% 100%;
                                    <?php }else{?>
                                        <?php echo 'background:#eee;'?>
                                    <?php }?>

										border-radius: 2px;">
                                        <span style="color:#333;"><?php if($row['shop_avatar']==null){echo "(空)";}?></span>
                                    </div>
				               </div>
	
	                        </td>
	                    </tr>
                        <tr>
                            <td valign="center">店铺所在省:</td>
                            <td valign="center">
<!--                                <span>--><?php //echo $row['province_name']?><!--</span>-->
                                <input type="text" value="<?php echo $row['province_name']?>" disabled class="awreview">
                            </td>
                        </tr>
                        <tr>
                            <td valign="center">店铺所在市:</td>
                            <td valign="center">
<!--                                <span>--><?php //echo $row['city_name']?><!--</span>-->
                                <input type="text" value="<?php echo $row['city_name']?>" disabled class="awreview">
                            </td>
                        </tr>
                        <tr>
                            <td valign="center">店铺所在县:</td>
                            <td valign="center">
<!--                                <span>--><?php //echo $row['district_name']?><!--</span>-->
                                <input type="text" value="<?php echo $row['district_name']?>" disabled class="awreview">
                            </td>
                        </tr>
                        
                        <tr>
                            <td valign="center">店铺默认配送区域:</td>
                            <td valign="center">
<!--                                <span>--><?php //echo $row['shop_region']?><!--</span>-->
                                <input type="text" value="<?php echo $row['shop_region']?>" disabled class="awreview">
                            </td>
                        </tr>
                        <tr>
                            <td valign="center">店铺公众号:</td>
                            <td valign="center">
<!--                                <span>--><?php //echo $row['shop_qrcode']?><!--</span>-->
                                <input type="text" value="<?php echo $row['shop_qrcode']?>" disabled class="awreview">
                            </td>
                        </tr>
                        <tr>
                            <td valign="center">详细地址:</td>
                            <td valign="center">
<!--                                <span>--><?php //echo $row['shop_address']?><!--</span>-->
                                <input type="text" value="<?php echo $row['shop_address']?>" disabled class="awreview">
                            </td>
                        </tr>
                        <tr>
                            <td valign="center">邮政编码:</td>
                            <td valign="center">
<!--                                <span>--><?php //echo $row['shop_zip']?><!--</span>-->
                                <input type="text" value="<?php echo $row['shop_zip']?>" disabled class="awreview">
                            </td>
                        </tr>
                        <tr>
                            <td valign="center">店铺seo关键字:</td>
                            <td valign="center">
<!--                                <span>--><?php //echo $row['shop_keywords']?><!--</span>-->
                                <input type="text" value="<?php echo $row['shop_keywords']?>" disabled class="awreview">
                            </td>
                        </tr>
                        <tr>
                            <td valign="center">店铺seo描述:</td>
                            <td valign="center">
<!--                                <span>--><?php //echo $row['shop_description']?><!--</span>-->
                                <input type="text" value="<?php echo $row['shop_description']?>" disabled class="awreview">
                            </td>
                        </tr>
                        <tr>
                            <td valign="center">商家电话:</td>
                            <td valign="center">
<!--                                <span>--><?php //echo $row['shop_phone']?><!--</span>-->
                                <input type="text" value="<?php echo $row['shop_phone']?>" disabled class="awreview">
                            </td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>



        <!--审核状态-->
        <div class="adminmannager" style="border-top:1px solid #eee; padding-top:0;margin-bottom: 50px;">
            <button style="margin-top:10px;width: 100px;height: 36px;color:#fff;line-height: 36px;text-align: center;
background: #37df73;border-radius: 16px;border:none;outline: none;display: block" type="submit">返回</button>
        </div>

        </form>
    </div>
</div>