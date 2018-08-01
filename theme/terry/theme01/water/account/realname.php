<div class="main-content">
    <div style="width: 1012px; margin: 0px auto;">
        <div >
            <div  class="content">
                <div  class="biaoti">
                    <div  aria-label="Breadcrumb" role="navigation" class="el-breadcrumb">
                        <span  class="el-breadcrumb__item"><span role="link" class="el-breadcrumb__inner is-link">店铺管理</span><span role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
                        <span  class="el-breadcrumb__item" aria-current="page"><span role="link" class="el-breadcrumb__inner"><span  style="color: rgb(48, 211, 102);font-weight: bold">实名认证</span></span><span role="presentation" class="el-breadcrumb__separator">&middot;</span></span>
                    </div>
                </div>
                <div  class="bottom">
                    <div  class="title">
                        <form  class="el-form">
                            <div  class="el-row" style="width: 850px;">
                                <div  class="el-form-item">
                                    <label class="el-form-item__label" style="width: 150px;">*真实姓名</label>
                                    <div class="el-form-item__content" style="margin-left: 150px;">
                                        <div  class="el-input" style="width: 500px;">
                                            <input type="text" disabled autocomplete="off" placeholder="王卓" value="<?= $res["contacts_name"] ?>" class="el-input__inner" />
                                        </div>
                                        <div  style="color: #A4ADB5;font-size: 12px;">
                                            为确保您的账户安全，请填写本人的实名认证信息。
                                        </div>
                                    </div>
                                </div>
                                <div  class="el-form-item">
                                    <label class="el-form-item__label" style="width: 150px;">*身份证号码</label>
                                    <div class="el-form-item__content" style="margin-left: 150px;">
                                        <div  class="el-input" style="width: 500px;">
                                            <input disabled value="<?= $res[contacts_card_no] ?>" type="text" autocomplete="off" placeholder="342605121212121200" class="el-input__inner" />
                                        </div>
                                    </div>
                                </div>
                                <div  class="el-form-item">
                                    <label class="el-form-item__label" style="width: 150px;">*身份证正面图片</label>
                                    <div class="el-form-item__content" style="margin-left: 150px;">
                                        <div  style="display: flex; justify-content: space-between;">
                                            <div  class="el-input" style="display: flex;align-items: center;justify-content: space-around;width: 500px;">
                                                <img src="<?= Yii::$app->params["img"].$res[contacts_card_electronic_2] ?>" title="身份证正面" style="width: 220px;height: 150px;margin-right: 20px"/>
                                                <img src="<?= Yii::$app->params["img"].$res[contacts_card_electronic_3] ?>" title="身份证背面" style="width: 220px;height: 150px"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div  class="el-form-item">
                                    <label class="el-form-item__label" style="width: 150px;">*开户行</label>
                                    <div class="el-form-item__content" style="margin-left: 150px;">
                                        <div  class="el-input" style="width: 500px;">
                                            <input disabled value="<?= $res["bank_name"] ?>" type="text" autocomplete="off" placeholder="上海建设银行中山支行" class="el-input__inner" />
                                        </div>
                                    </div>
                                </div>
                                <div  class="el-form-item">
                                    <label class="el-form-item__label" style="width: 150px;">*银行卡号</label>
                                    <div class="el-form-item__content" style="margin-left: 150px;">
                                        <div  class="el-input" style="width: 500px;">
                                            <input disabled value="<?= $res["bank_account_number"] ?>" type="text" autocomplete="off" placeholder="123456789123456789" class="el-input__inner" />
                                        </div>
                                    </div>
                                </div>
                                <div  class="el-form-item">
                                    <label class="el-form-item__label" style="width: 150px;">*手机号码</label>
                                    <div class="el-form-item__content" style="margin-left: 150px;">
                                        <div  class="el-input" style="width: 500px;">
                                            <input disabled value="<?= $res[contacts_phone] ?>" type="text" autocomplete="off" placeholder="13112341234" class="el-input__inner" />
                                        </div>
                                    </div>
                                </div>
                                <!--          <div  class="el-form-item">-->
                                <!--           <label class="el-form-item__label" style="width: 150px;">*手机号码</label>-->
                                <!--           <div class="el-form-item__content" style="margin-left: 150px;">-->
                                <!--            <div >-->
                                <!--             已认证-->
                                <!--            </div>-->
                                <!--            -->
                                <!--           </div>-->
                                <!--          </div>-->
                            </div>
                        </form>
                    </div>
                </div>
                <!--      <button  type="button" class="el-button el-button--primary is-round">-->
                <!--       -->
                <!--       <span>确定</span></button>-->
            </div>
        </div>
    </div>
    <style>
        .content {
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            padding-top: 8px;
        }

        .content .biaoti {
            height: 52px;
            font-size: 12px;
            line-height: 52px;
            font-weight: bolder;
        }

        .content .bottom {
            width: 100%;
        }

        .bottom .title {
            width: 100%;
            line-height: 46px;
            font-size: 12px;
            padding-left: 22px;
        }

        .content .blue {
            width: 98px;
            height: 33px;
            background: #30B5FE;
            border: none;
            box-shadow: 0 0 8px #30B5FE;
            padding-top: 8px;
        }
        .el-form-item__label{
            color: #A4ADB5;
            font-weight: bold;
        }
    </style>