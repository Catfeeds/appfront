
<div id="index1">
    <div style="width: 1160px;margin:0 auto;">
        <header style="width: 100%;">
            <div class="index1-logo">
                <a href="/apply/apply/index">
                    <img src="/public/imgs/login.png" alt=""/>
                    <h1>晋彤后台管理系统</h1>
                </a>
            </div>
            <div style="float: right; padding-top: 50px; box-sizing: border-box; width: 553px;">
                <div class="el-steps el-steps--horizontal">
                    <div class="el-step is-horizontal is-center" style="flex-basis: 25%; margin-right: 0px;">
                        <div class="el-step__head is-finish">
                            <div class="el-step__line" style="margin-right: 0px;">
                                <i class="el-step__line-inner"
                                   style="transition-delay: 0ms; border-width: 1px; width: 100%;"></i>
                            </div>
                            <div class="el-step__icon is-text">

                                <div class="el-step__icon-inner">
                                    1
                                </div>
                            </div>
                        </div>
                        <div class="el-step__main">
                            <div class="el-step__title is-finish">
                                入驻须知
                            </div>
                            <div class="el-step__description is-finish"></div>
                        </div>
                    </div>
                    <div class="el-step is-horizontal is-center" style="flex-basis: 25%; margin-right: 0px;">
                        <div class="el-step__head is-finish">
                            <div class="el-step__line" style="margin-right: 0px;">
                                <i class="el-step__line-inner"
                                   style="transition-delay: 150ms; border-width: 0px; width: 0%;"></i>
                            </div>
                            <div class="el-step__icon is-text">

                                <div class="el-step__icon-inner">
                                    2
                                </div>
                            </div>
                        </div>
                        <div class="el-step__main">
                            <div class="el-step__title is-finish">
                                企业信息认证
                            </div>
                            <div class="el-step__description is-finish"></div>
                        </div>
                    </div>
                    <div class="el-step is-horizontal is-center" style="flex-basis: 25%; margin-right: 0px;">
                        <div class="el-step__head is-wait">
                            <div class="el-step__line" style="margin-right: 0px;">
                                <i class="el-step__line-inner"
                                   style="transition-delay: -300ms; border-width: 0px; width: 0%;"></i>
                            </div>
                            <div class="el-step__icon is-text">

                                <div class="el-step__icon-inner">
                                    3
                                </div>
                            </div>
                        </div>
                        <div class="el-step__main">
                            <div class="el-step__title is-wait">
                                店铺信息认证
                            </div>
                            <div class="el-step__description is-wait"></div>
                        </div>
                    </div>
                    <div class="el-step is-horizontal is-center" style="flex-basis: 25%; max-width: 25%;">
                        <div class="el-step__head is-wait">
                            <div class="el-step__line">
                                <i class="el-step__line-inner"></i>
                            </div>
                            <div class="el-step__icon is-text">

                                <div class="el-step__icon-inner">
                                    4
                                </div>
                            </div>
                        </div>
                        <div class="el-step__main">
                            <div class="el-step__title is-wait">
                                等待审核
                            </div>
                            <div class="el-step__description is-wait"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="index2" style="width: 1160px;margin:0 auto;">
            <div class="index2-list">
                <div class="admin-tablename" style="height: 40px; line-height: 40px;">
                    <div class="admin-tablenamebox" style="margin-top: 18px;"></div>
                    <span class="admin-tablename2" style="margin-left: 6px; font-size: 14px;">请选择您的开店身份</span>
                </div>
                <div class="index2-change">
                    <style>
                        .index-change.sp + span {
                            color: rgb(55, 224, 111);
                        }
                    </style>
                    <?php if ($companyinfo['post']['shop_type'] == 2) { ?>
                        <a href="#/index5" class="index-change sp router-link-exact-active router-link-active"
                           value="2"></a>
                        <span style="margin-left: 8px;">商家</span><!-- 2 -->
                        <a href="#/index2" class="index-change" value="1" style="margin-left: 40px;">√</a>
                        <span style="margin-left: 8px;">水司</span><!-- 1 -->
                    <?php } else { ?>
                        <a href="#/index5" class="index-change" value="2"></a>
                        <span style="margin-left: 8px;">商家</span><!-- 2 -->
                        <a href="#/index2" class="index-change sp router-link-exact-active router-link-active" value="1"
                           style="margin-left: 40px;">√</a>
                        <span style="margin-left: 8px;">水司</span><!-- 1 -->
                    <?php } ?>
                </div>
                <div class="index2-tip">
                    <p> *&nbsp;以下所需要上传的电子版资质文件仅支持JPG／GIF／PNG格式图片，大小请控制在400K之内 </p>
                </div>
                <div class="index2-shui">
                    <div class="admin-tablename" style="height: 40px; line-height: 40px;">
                        <div class="admin-tablenamebox" style="margin-top: 18px;"></div>
                        <span class="admin-tablename2" style="margin-left: 6px; font-size: 14px;">企业执照信息</span>
                    </div>
                    <form id="el-form" method="post"
                          enctype="multipart/form-data">
                        <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>"/>
                        <input type="hidden" name="shop_type" class="shop_type" value="1"/>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;" >公司名称</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">

                                    <input type="text" name="shop_company_name" class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['shop_company_name'] ?>" required />
                                </div>

                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">注册号(营业执照号)</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">

                                    <input type="text" name="business_licence_number" autocomplete="off"
                                           class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['business_licence_number'] ?>"  required />
                                </div>

                            </div>
                        </div>
                        <div class="el-form-item nnnn">
                            <label class="el-form-item__label" style="width: 168px !important;">营业执照电子版</label>
                            <!-- business_licence_number_electronic -->
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="aaa" style="width: 500px; height: 250px;
                                <?php if ($companyinfo['img'][0]) { ?>
                                        background:url(http://img.uekuek.com/media/catalog/product/<?php echo $companyinfo['img'][0];?>) no-repeat center center/100% 100%;
                                <?php } else if ($companyinfo['imgc']['img0']) { ?>
                                        background: url(http://img.uekuek.com/media/catalog/product/<?php echo $companyinfo['imgc']['img0'];?>) no-repeat center center/100% 100%;
                                <?php } else { ?>
                                        background: rgb(243, 250, 255);
                                <?php } ?>
                                        position: relative;">
                                    <input type="hidden" name="img0" class="img0"
                                           value="<?php echo $companyinfo['img'][0]; ?>"  />
                                    <input type="file" multiple="multiple" class="file" name="file[]"
                                           onchange="uploads(this)"   required />
                                    <a href="javascript:0"
                                       style="pointer-events: none; display: block; width: 50px; height: 50px; border-radius: 50%; background: rgb(48, 163, 254); position: absolute; margin: auto 210px; top: 0px; bottom: 0px; font-size: 30px; color: rgb(255, 255, 255); line-height: 50px; text-align: center;">+</a>
                                </div>
                                <div>
                                    <p style="color: rgb(255, 84, 18);">*&nbsp;请确保图片清晰，文字可辨并有清晰的红色公章</p>
                                </div>

                            </div>
                            <script>
                                function uploads(obj) {
                                    var file = obj.files[0];
                                    if (window.FileReader) {
                                        var reader = new FileReader();
                                        reader.readAsDataURL(file);
                                        //监听文件读取结束后事件
                                        reader.onloadend = function (e) {
                                            $(obj).parent("div").css({

                                                "background": "url(" + e.target.result + ") no-repeat center center/100% 100%",
                                            });
                                            $(obj).next().hide();
                                            // $(obj).prev($('input[type=hidden]')).val(e.target.result);
                                        };
                                    }
                                }

                            </script>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">注册资金</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">

                                    <input type="text" name="company_registered_capital" autocomplete="off"
                                           class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['company_registered_capital'] ?>"  required/>
                                </div>

                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">联系人姓名</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">

                                    <input type="text" name="contacts_name" autocomplete="off" class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['contacts_name'] ?>"  required/>
                                </div>

                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">联系人电话</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">

                                    <input type="text" name="contacts_phone" autocomplete="off" class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['contacts_phone'] ?>"  required/>
                                </div>

                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">联系人邮箱</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">

                                    <input type="text" name="contacts_email" autocomplete="off" class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['contacts_email'] ?>"  required />
                                </div>

                            </div>
                        </div>


                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">申请人身份证号</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">

                                    <input type="text" name="contacts_card_no" autocomplete="off" class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['contacts_card_no'] ?>"  required />
                                </div>

                            </div>
                        </div>
                        <div class="el-form-item" style="margin-bottom: 0;">
                            <label class="el-form-item__label" style="width:168px !important;">申请人手持身份证电子版</label>
                            <!--contacts_card_electronic_1  -->
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div style="width: 270px; height: 160px; float:left;
                                <?php if ($companyinfo['img'][1]) { ?>
                                        background:url('http://img.uekuek.com/media/catalog/product/<?php echo $companyinfo['img'][1];?>) no-repeat center center/100% 100%;
                                <?php } else if ($companyinfo['imgc']['img1']) { ?>
                                        background: url(http://img.uekuek.com/media/catalog/product/<?php echo $companyinfo['imgc']['img1'];?>) no-repeat center center/100% 100% ;
                                <?php } else { ?>
                                        background: rgb(243, 250, 255);
                                <?php } ?>
                                        position: relative;">
                                    <input type="hidden" name="img1" class="img1"
                                           value="<?php echo $companyinfo['img'][1]; ?>"/>
                                    <input type="file" multiple="multiple" class="file" name="file[]"
                                           onchange="uploads(this)"  required />
                                    <a href="javascript:0"
                                       style="pointer-events: none; display: <?php if ($companyinfo['img'][1]||$companyinfo['imgc']['img1']) {echo 'none';}else{echo 'block';}?>; width: 50px; height: 50px; border-radius: 50%; background: rgb(48, 163, 254); position: absolute; margin: auto 110px; top: 0px; bottom: 0px; font-size: 30px; color: rgb(255, 255, 255); line-height: 50px; text-align: center;">+</a>
                                </div>
                                <div class="el-dialog__wrapper" style="display: none;">
                                    <div class="el-dialog" style="margin-top: 15vh;">
                                        <div class="el-dialog__header">
                                            <span class="el-dialog__title"></span>
                                            <button type="button" aria-label="Close" class="el-dialog__headerbtn"><i
                                                        class="el-dialog__close el-icon el-icon-close"></i></button>
                                        </div>


                                    </div>
                                </div>
                                <img src="/public/imgs/shouchi.png" alt="" style="margin-left:50px;"/ >

                            </div>
                        </div>
                        <div class="el-form-item">
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div>
                                    <p style="color: rgb(255, 84, 18);">*&nbsp;1.五官可见&nbsp;&nbsp;2.证件全部信息清晰无遮挡&nbsp;&nbsp;3.完全露出双手手臂</p>
                                </div>

                            </div>
                        </div>
                        <div class="el-form-item" style="margin-bottom: 0;">
                            <label class="el-form-item__label" style="width: 168px !important;">身份证</label>
                            <!-- contacts_card_electronic_2     contacts_card_electronic_3 -->
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div>
                                    <div style="width: 270px; height: 160px; float:left;
                                    <?php if ($companyinfo['img'][2]) { ?>
                                            background:url(http://img.uekuek.com/media/catalog/product/<?php echo $companyinfo['img'][2];?>) no-repeat center center/100% 100%;
                                    <?php } else if ($companyinfo['imgc']['img2']) { ?>
                                            background: url(http://img.uekuek.com/media/catalog/product/<?php echo $companyinfo['imgc']['img2'];?>) no-repeat center center/100% 100%;
                                    <?php } else { ?>
                                            background: rgb(243, 250, 255);
                                    <?php } ?>
                                            position: relative;">
                                        <input type="hidden" name="img2" class="img2"
                                               value="<?php echo $companyinfo['img'][2]; ?>"/>
                                        <input type="file" multiple="multiple" class="file" name="file[]"
                                               onchange="uploads(this)"  required />
                                        <a href="javascript:0"
                                           style="pointer-events: none; display: block; width: 50px; height: 50px; border-radius: 50%; background: rgb(48, 163, 254); position: absolute; margin: auto 110px; top: 0px; bottom: 0px; font-size: 30px; color: rgb(255, 255, 255); line-height: 50px; text-align: center;">+</a>
                                    </div>
                                    <div class="el-dialog__wrapper" style="display: none;">
                                        <div class="el-dialog" style="margin-top: 15vh;">
                                            <div class="el-dialog__header">
                                                <span class="el-dialog__title"></span>
                                                <button type="button" aria-label="Close" class="el-dialog__headerbtn"><i
                                                            class="el-dialog__close el-icon el-icon-close"></i></button>
                                            </div>


                                        </div>
                                    </div>
                                    <div style="width: 270px; height: 160px;float: left;margin-left:50px;
                                    <?php if ($companyinfo['img'][3]) { ?>
                                            background:url(http://img.uekuek.com/media/catalog/product/<?php echo $companyinfo['img'][3];?>) no-repeat;
                                    <?php } else if ($companyinfo['imgc']['img3']) { ?>
                                            background: url(http://img.uekuek.com/media/catalog/product/<?php echo $companyinfo['imgc']['img3'];?>) no-repeat;
                                    <?php } else { ?>
                                            background: rgb(243, 250, 255);
                                    <?php } ?>
                                            position: relative;">
                                        <input type="hidden" name="img3" class="img3"
                                               value="<?php echo $companyinfo['img'][3]; ?>"/>
                                        <input type="file" multiple="multiple" class="file" name="file[]"
                                               onchange="uploads(this)"  required/>
                                        <a href="javascript:0"
                                           style="pointer-events: none; display: block; width: 50px; height: 50px; border-radius: 50%; background: rgb(48, 163, 254); position: absolute; margin: auto 110px; top: 0px; bottom: 0px; font-size: 30px; color: rgb(255, 255, 255); line-height: 50px; text-align: center;">+</a>
                                    </div>
                                    <div class="el-dialog__wrapper" style="display: none;">
                                        <div class="el-dialog" style="margin-top: 15vh;">
                                            <div class="el-dialog__header">
                                                <span class="el-dialog__title"></span>
                                                <button type="button" aria-label="Close" class="el-dialog__headerbtn"><i
                                                            class="el-dialog__close el-icon el-icon-close"></i></button>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="el-form-item">
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div>
                                    <p style="color: rgb(255, 84, 18);">*&nbsp;1.证件全部信息清晰无遮挡&nbsp;&nbsp;2.有效期在一个月以上</p>
                                </div>

                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">银行开户名</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">
                                    <input type="text" name="bank_account_name" autocomplete="off" class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['bank_account_name'] ?>"  required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">公司银行账号</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">

                                    <input type="text" name="bank_account_number" autocomplete="off" class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['bank_account_number'] ?>"  required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">开户银行支行名称</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">
                                    <input type="text" name="bank_name" autocomplete="off" class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['bank_name'] ?>"  required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">支行联行号</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">
                                    <input type="text" name="bank_code" autocomplete="off" class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['bank_code'] ?>"  required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">开户银行所在地</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">
                                    <input type="text" name="bank_address" autocomplete="off" class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['bank_address'] ?>"  required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">结算银行开户名</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">
                                    <input type="text" name="settlement_bank_account_name" autocomplete="off"
                                           class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['settlement_bank_account_name'] ?>"  required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">结算公司银行账号</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">
                                    <input type="text" name="settlement_bank_account_number" autocomplete="off"
                                           class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['settlement_bank_account_number'] ?>"  required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">结算开户银行支行名称</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">
                                    <input type="text" name="settlement_bank_name" autocomplete="off"
                                           class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['settlement_bank_name'] ?>"  required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">结算支行联行号</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">
                                    <input type="text" name="settlement_bank_code" autocomplete="off"
                                           class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['settlement_bank_code'] ?>"  required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">结算开户银行所在地</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">
                                    <input type="text" name="settlement_bank_address" autocomplete="off"
                                           class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['settlement_bank_address'] ?>"  required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">税务登记证号</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">
                                    <input type="text" name="tax_registration_certificate" autocomplete="off"
                                           class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['tax_registration_certificate'] ?>"  required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">纳税人识别号</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">
                                    <input type="text" name="taxpayer_id" autocomplete="off" class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['taxpayer_id'] ?>"  required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">员工总数</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">
                                    <input type="text" name="company_employee_count" autocomplete="off"
                                           class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['company_employee_count'] ?>" required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">经营范围</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">
                                    <input type="text" name="business_sphere" autocomplete="off" class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['business_sphere'] ?>"  required />
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item">
                            <label class="el-form-item__label" style="width: 168px !important;">组织机构代码</label>
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div class="el-input">
                                    <input type="text" name="organization_code" autocomplete="off" class="el-input__inner"
                                           value="<?php echo $companyinfo['post']['organization_code'] ?>"  required />
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom: 10px;">
                            <p style="font-size: 14px;"><span style="color: rgb(255, 113, 73);">*</span>&nbsp;一般纳税人证明：所属企业具有一般纳税人证明时，此项为必填
                            </p>
                        </div>
                        <!-- 证明-->


                        <div class="el-form-item nnnn">
                            <label class="el-form-item__label" style="width: 168px !important;">一般纳税人证明</label><!-- general_taxpayer -->
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div style="width: 500px; height: 250px;
                                <?php if ($companyinfo['img'][4]) { ?>
                                        background:url(http://img.uekuek.com/media/catalog/product/<?php echo $companyinfo['img'][4];?>) no-repeat center center/100% 100%;
                                <?php } else if ($companyinfo['imgc']['img4']) { ?>
                                        background: url(http://img.uekuek.com/media/catalog/product/<?php echo $companyinfo['imgc']['img4'];?>) no-repeat center center/100% 100%;
                                <?php } else { ?>
                                        background: rgb(243, 250, 255);
                                <?php } ?>
                                        position: relative;">
                                    <input type="hidden" name="img4" class="img4"
                                           value="<?php echo $companyinfo['img'][4]; ?>"/>
                                    <input type="file" multiple="multiple" class="file" name="file[]"
                                           onchange="uploads(this)"   required/>
                                    <a href="javascript:0"
                                       style="pointer-events: none; display: block; width: 50px; height: 50px; border-radius: 50%; background: rgb(48, 163, 254); position: absolute; margin: auto 210px; top: 0px; bottom: 0px; font-size: 30px; color: rgb(255, 255, 255); line-height: 50px; text-align: center;">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item nnnn">
                            <label class="el-form-item__label" style="width: 168px !important;">组织机构代码电子版</label>
                            <!-- organization_code_electronic -->
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div style="width: 500px; height: 250px;
                                <?php if ($companyinfo['img'][5]) { ?>
                                        background:url(http://img.uekuek.com/media/catalog/product/<?php echo $companyinfo['img'][5];?>) no-repeat center center/100% 100%;
                                <?php } else if ($companyinfo['imgc']['img5']) { ?>
                                        background: url(http://img.uekuek.com/media/catalog/product/<?php echo $companyinfo['imgc']['img5'];?>) no-repeat center center/100% 100%;
                                <?php } else { ?>
                                        background: rgb(243, 250, 255);
                                <?php } ?>
                                        position: relative;">
                                    <input type="hidden" name="img5" class="img5"
                                           value="<?php echo $companyinfo['img'][5]; ?>"/>
                                    <input type="file" multiple="multiple" class="file" name="file[]"
                                           onchange="uploads(this)"   required/>
                                    <a href="javascript:0"
                                       style="pointer-events: none; display: block; width: 50px; height: 50px; border-radius: 50%; background: rgb(48, 163, 254); position: absolute; margin: auto 210px; top: 0px; bottom: 0px; font-size: 30px; color: rgb(255, 255, 255); line-height: 50px; text-align: center;">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item nnnn">
                            <label class="el-form-item__label" style="width: 168px !important;">开户银行许可证电子版</label>
                            <!-- bank_licence_electronic -->
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div style="width: 500px; height: 250px;
                                <?php if ($companyinfo['img'][6]) { ?>
                                        background:url(http://img.uekuek.com/media/catalog/product/<?php echo $companyinfo['img'][6];?>) no-repeat center center/100% 100%;
                                <?php } else if ($companyinfo['imgc']['img6']) { ?>
                                        background: url(http://img.uekuek.com/media/catalog/product/<?php echo $companyinfo['imgc']['img6'];?>) no-repeat center center/100% 100%;
                                <?php } else { ?>
                                        background: rgb(243, 250, 255) center center/100% 100%;
                                <?php } ?>
                                        position: relative;">
                                    <input type="hidden" name="img6" class="img6"
                                           value="<?php echo $companyinfo['img'][6]; ?>"/>
                                    <input type="file" multiple="multiple" class="file" name="file[]"
                                           onchange="uploads(this)"   required/>
                                    <a href="javascript:0"
                                       style="pointer-events: none; display: block; width: 50px; height: 50px; border-radius: 50%; background: rgb(48, 163, 254); position: absolute; margin: auto 210px; top: 0px; bottom: 0px; font-size: 30px; color: rgb(255, 255, 255); line-height: 50px; text-align: center;">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="el-form-item nnnn">
                            <label class="el-form-item__label" style="width: 168px !important;">税务登记证号电子版</label>
                            <!-- tax_registration_certificate_electronic -->
                            <div class="el-form-item__content" style="margin-left: 168px !important;">
                                <div style="width: 500px; height: 250px;
                                <?php if ($companyinfo['img'][7]) { ?>
                                        background:url(http://img.uekuek.com/media/catalog/product/<?php echo $companyinfo['img'][7];?>) no-repeat center center/100% 100%;
                                <?php } else if ($companyinfo['imgc']['img7']) { ?>
                                        background: url(http://img.uekuek.com/media/catalog/product/<?php echo $companyinfo['imgc']['img7'];?>) no-repeat center center/100% 100%;
                                <?php } else { ?>
                                        background: rgb(243, 250, 255);
                                <?php } ?>
                                        position: relative;">
                                    <input type="hidden" name="img7" class="img7"
                                           value="<?php echo $companyinfo['img'][7]; ?>"/>
                                    <input type="file" multiple="multiple" class="file" name="file[]"
                                           onchange="uploads(this)"  required />
                                    <a href="javascript:0"
                                       style="pointer-events: none; display: block; width: 50px; height: 50px; border-radius: 50%; background: rgb(48, 163, 254); position: absolute; margin: auto 210px; top: 0px; bottom: 0px; font-size: 30px; color: rgb(255, 255, 255); line-height: 50px; text-align: center;">+</a>
                                </div>
                            </div>
                        </div>

                        <div style="width: 800px; display: flex; justify-content: space-around;">
                            <button type="button" class="el-button el-button--primary is-round"
                                    onclick='shopload("<?= Yii::$service->url->getUrl('apply/apply/notes') ?>")'>
                                <span>上一步</span>
                            </button>
                            <input type="submit" class="el-button el-button--primary is-round"
                                   value="下一步"
                                   onclick='shopload("<?= Yii::$service->url->getUrl('apply/apply/shopinfo') ?>")'>
                            </input>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div style="width: 1160px; margin:0 auto;height: 80px; line-height: 80px; text-align: center; margin-top: 40px; font-size: 12px; color: rgb(153, 153, 153);">
            <span>@2015-2018&nbsp;dscmall.cn&nbsp;&nbsp;版本所有ICP备案号：DSC00000249 POWERED</span>
        </div>
    </div>
</div>
<script>
    function shopload(url) {
        // $("#el-form").attr("action", url);
        $("#el-form").submit(function(e){
            e.preventDefault();
            let formdata=$('form').serializeArray();
            $.ajax({
                url:url,
                type:'post',
                data:formdata,
                success:function (msg) {
                    location.href=url;
                }
            })
        });
    }

    $(".index-change").click(function () {
        $(".index-change").removeClass("sp router-link-exact-active router-link-active").html('');
        $(this).addClass("sp router-link-exact-active router-link-active").html('√');
        $(".shop_type").val($(this).attr("value"));
    });

    // $("form").validate({
    //     submitHandler:function(){
    //         let formedata =$('form').serialize();
    //         $.ajax({
    //             url:"/apply/apply/shopinfo",
    //             type:"post",
    //             data:formedata,
    //             success:function (data) {
    //                 if (data == "true") {
    //                     // console.log(data);
    //                     history.back();
    //                 }
    //             }
    //         })
    //         $(".buttom").addClass("success");
    //     },
    //     rules: {
    //         shop_company_name:{
    //             required:true,
    //         },
    //         business_license_number:{
    //             required:true,
    //         },
    //
    //     },
    //     messages:{
    //
    //     }
    //
    // })
</script>