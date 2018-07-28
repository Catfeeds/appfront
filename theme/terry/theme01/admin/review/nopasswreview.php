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
        <form id="el-form" class="el-form" method="post"  action="<?= Yii::$service->url->getUrl('admin/review/nopass') ?>">
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
                <table border="0" class="ppro">
                    <tr>
                        <td valign="top">公司名称:</td>
                        <td valign="top">
                            <span><?php echo $row['shop_company_name']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">注册号（营业执照号）:</td>
                        <td valign="top">
                            <span><?php echo $row['business_licence_number']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><span>营业执照电子版:</span></td>
                        <td valign="top">
                            <div style="height: 180px;">
                                <div style="height: 162px;width: 276px;
									background:url(http://img.uekuek.com/media/catalog/product/<?php echo $row['business_licence_number_electronic'];?>) no-repeat;
									border-radius: 2px;"></div>
			               </div>

                        </td>
                    </tr>
                    <tr>
                        <td valign="top">注册资金:</td>
                        <td valign="top">
                            <span><?php echo $row['company_registered_capital']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">联系人姓名:</td>
                        <td valign="top">
                            <span><?php echo $row['contacts_name']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">联系人电话:</td>
                        <td valign="top">
                            <span><?php echo $row['contacts_phone']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">联系人邮箱:</td>
                        <td valign="top">
                            <span><?php echo $row['contacts_email']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">申请人身份证号:</td>
                        <td valign="top">
                            <span><?php echo $row['contacts_card_no']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><span>申请人手持身份证电子版:</span></td>
                        <td valign="top">
                            <div style="height: 180px;">
                                <div style="height: 162px;width: 276px;
									background:url(http://img.uekuek.com/media/catalog/product/<?php echo $row['contacts_card_electronic_1'];?>) no-repeat;
									border-radius: 2px;"></div>
			               </div>

                        </td>
                    </tr>
                    <tr>
                        <td valign="top">身份证:</td>
                        <td valign="top">
                            <div style="height: 100%;width: 276px;float:left;text-align: center">
                                <div style="height: 162px;width: 276px;
									background:url(http://img.uekuek.com/media/catalog/product/<?php echo $row['contacts_card_electronic_2'];?>) no-repeat;
									border-radius: 2px;"></div>
                                <span style="display:block;margin-top:20px;">正面</span>
                            </div>
                            <div style="height: 100%;width: 276px;float:left;margin-left:20px;text-align: center">
                                <div style="height: 162px;width: 276px;
									background:url(http://img.uekuek.com/media/catalog/product/<?php echo $row['contacts_card_electronic_3'];?>) no-repeat;
								border-radius: 2px;"></div>
                                <span style="display:block;margin-top:20px;">反面</span>
                            </div>

                            <div style="float:left;width: 100%;height: 46px; line-height:46px;">


                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td valign="top">银行开户名:</td>
                        <td valign="top">
                            <span><?php echo $row['bank_account_name']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">公司银行账号:</td>
                        <td valign="top">
                            <span><?php echo $row['bank_account_number']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">开户银行支行名称:</td>
                        <td valign="top">
                            <span><?php echo $row['bank_name']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">支行联行号:</td>
                        <td valign="top">
                            <span><?php echo $row['bank_code']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">开户银行所在地:</td>
                        <td valign="top">
                            <span><?php echo $row['bank_address']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">结算银行开户名:</td>
                        <td valign="top">
                            <span><?php echo $row['settlement_bank_account_name']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">结算公司银行账号:</td>
                        <td valign="top">
                            <span><?php echo $row['settlement_bank_account_number']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">结算开户银行支行名称:</td>
                        <td valign="top">
                            <span><?php echo $row['settlement_bank_name']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">结算支行联行号:</td>
                        <td valign="top">
                            <span><?php echo $row['settlement_bank_code']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">结算开户银行所在地:</td>
                        <td valign="top">
                            <span><?php echo $row['settlement_bank_address']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">税务登记证号:</td>
                        <td valign="top">
                            <span><?php echo $row['tax_registration_certificate']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">纳税人识别号:</td>
                        <td valign="top">
                            <span><?php echo $row['taxpayer_id']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">员工总数:</td>
                        <td valign="top">
                            <span><?php echo $row['company_employee_count']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">经营范围:</td>
                        <td valign="top">
                            <span><?php echo $row['business_sphere']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">组织机构代码:</td>
                        <td valign="top">
                            <span><?php echo $row['organization_code']?></span>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><span>一般纳税人证明:</span></td>
                        <td valign="top">
                            <div style="height: 180px;">
                                <div style="height: 162px;width: 276px;
									background:url(http://img.uekuek.com/media/catalog/product/<?php echo $row['general_taxpayer'];?>) no-repeat;
									border-radius: 2px;"></div>
			               </div>

                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><span>组织机构代码电子版:</span></td>
                        <td valign="top">
                            <div style="height: 180px;">
                                <div style="height: 162px;width: 276px;
									background:url(http://img.uekuek.com/media/catalog/product/<?php echo $row['organization_code_electronic'];?>) no-repeat;
									border-radius: 2px;"></div>
			               </div>

                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><span>开户银行许可证电子版:</span></td>
                        <td valign="top">
                            <div style="height: 180px;">
                                <div style="height: 162px;width: 276px;
									background:url(http://img.uekuek.com/media/catalog/product/<?php echo $row['bank_licence_electronic'];?>) no-repeat;
									border-radius: 2px;"></div>
			               </div>

                        </td>
                    </tr>
                    <tr>
                        <td valign="top"><span>税务登记证号电子版:</span></td>
                        <td valign="top">
                            <div style="height: 180px;">
                                <div style="height: 162px;width: 276px;
									background:url(http://img.uekuek.com/media/catalog/product/<?php echo $row['tax_registration_certificate_electronic'];?>) no-repeat;
									border-radius: 2px;"></div>
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
                    <table border="0" class="ppro">
                        <tr>
                            <td valign="top">店铺名称:</td>
                            <td valign="top">
                                <span><?php echo $row['shop_name']?></span>
                            </td>
                        </tr>
                        <tr>
                        <td valign="top"><span>店铺logo:</span></td>
                        <td valign="top">
                            <div style="height: 180px;">
                                <div style="height: 162px;width: 276px;
									background:url(http://img.uekuek.com/media/catalog/product/<?php echo $row['shop_logo'];?>) no-repeat;
									border-radius: 2px;"></div>
			               </div>

                        </td>
	                    </tr>
	                    <tr>
	                        <td valign="top"><span>店铺横幅:</span></td>
	                        <td valign="top">
	                            <div style="height: 180px;">
	                                <div style="height: 162px;width: 276px;
										background:url(http://img.uekuek.com/media/catalog/product/<?php echo $row['shop_banner'];?>) no-repeat;
										border-radius: 2px;"></div>
				               </div>
	
	                        </td>
	                    </tr>
	                    <tr>
	                        <td valign="top"><span>店铺头像:</span></td>
	                        <td valign="top">
	                            <div style="height: 180px;">
	                                <div style="height: 162px;width: 276px;
										background:url(http://img.uekuek.com/media/catalog/product/<?php echo $row['shop_avatar'];?>) no-repeat;
										border-radius: 2px;"></div>
				               </div>
	
	                        </td>
	                    </tr>
                        <tr>
                            <td valign="top">店铺所在省:</td>
                            <td valign="top">
                                <span><?php echo $row['province_name']?></span>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">店铺所在市:</td>
                            <td valign="top">
                                <span><?php echo $row['city_name']?></span>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">店铺所在县:</td>
                            <td valign="top">
                                <span><?php echo $row['district_name']?></span>
                            </td>
                        </tr>
                        
                        <tr>
                            <td valign="top">店铺默认配送区域:</td>
                            <td valign="top">
                                <span><?php echo $row['shop_region']?></span>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">店铺公众号:</td>
                            <td valign="top">
                                <span><?php echo $row['shop_qrcode']?></span>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">详细地址:</td>
                            <td valign="top">
                                <span><?php echo $row['shop_address']?></span>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">邮政编码:</td>
                            <td valign="top">
                                <span><?php echo $row['shop_zip']?></span>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">店铺seo关键字:</td>
                            <td valign="top">
                                <span><?php echo $row['shop_keywords']?></span>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">店铺seo描述:</td>
                            <td valign="top">
                                <span><?php echo $row['shop_description']?></span>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">商家电话:</td>
                            <td valign="top">
                                <span><?php echo $row['shop_phone']?></span>
                            </td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>



        <!--审核状态-->
        <div class="adminmannager" style="border-top:1px solid #eee; padding-top:0;">
            <div class="admin-tablename" style="margin-top:0;">
                <div class="admin-tablenamebox"></div>
                <span class="admin-tablename1">审核</span><span class="admin-tablename2">结果</span>
            </div>
            <div name="reason" id="reason"
             style="width: 900px;height: 200px;display: block;background: rgba(0,223,207,0.3);border:none;outline: none;
padding: 20px;"><?php echo $row['reason']?></div>
            <button style="margin-top:10px;width: 100px;height: 36px;color:#fff;line-height: 36px;text-align: center;
background: #37df73;border-radius: 16px;border:none;outline: none;display: block" type="submit">返回</button>
        </div>

        </form>
    </div>
</div>