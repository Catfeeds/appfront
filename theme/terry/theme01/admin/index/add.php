<style>
    .demo-input {
        padding-left: 10px;
        height: 30px;
        min-width: 420px;
        line-height: 38px;
        border: 1px solid #e6e6e6;
        background-color: #f3faff;
        border-radius: 30px;
        outline: none;
    }

    .demo-input:hover {
        border-color: #c0c4cc;
    }

    .demo-input:focus {
        border-color: #3CACFE;
    }

    .main-content .biaoti {
        height: 52px;
        font-size: 12px;
        line-height: 52px;
        font-weight: bolder;
    }

    .main-content .bottom {
        width: 100%;
    }

    .title .shuaixuan {
        margin-top: 15px;
        display: flex;
    }

    .left_box {
        width: 309px;
        height: 333px;
        background: #f8fcff;
        border: 2px solid #ebf6ff;
        padding-left: 17px;
    }

    .title .shuaixuan .shuaixuan_top {
        line-height: 55px;
        font-size: 14px;
        color: #9bd2fd;
    }

    .bottom .jiantou {
        width: 42px;
        height: 14px;
        margin-top: 33px;
        background: url("/public/img/jiantou.png");
    }

    .shuaixuan_bottom .danxuan {
        width: 20px;
        height: 20px;
        font-size: 12px;
    }

    .main-content .red {
        height: 35px;
        background: #FD5E4E;
        border: none;
        box-shadow: 0 0px 8px #FD5E4E;
    }

    .main-content .green {
        height: 35px;
        background: #37DF73;
        border: none;
        box-shadow: 0 0px 8px #37DF73;
        margin-right: 20px;
    }

    .el-form-item {
        /*line-height: 40px;*/
    }

    .el-form-item__content {
        line-height: normal;
    }
    .el-input .el-input__inner{
        width: 400px;
        height: 30px;
        background: #f3faff;
        border: 2px solid #e5eff8;
    }

</style>

<div data-v-63f72479="" class="main-content">
    <div data-v-63f72479="" style="width: 1064px; margin: 0px auto; margin-top:50px;">
        <div data-v-63f72479="" class="biaoti">
            <div data-v-63f72479="" aria-label="Breadcrumb" role="navigation" class="el-breadcrumb"><span
                        data-v-63f72479="" class="el-breadcrumb__item"><span role="link"
                                                                             class="el-breadcrumb__inner is-link">用户管理</span><span
                            role="presentation" class="el-breadcrumb__separator">·</span></span> <span
                        data-v-63f72479="" class="el-breadcrumb__item"><span role="link" class="el-breadcrumb__inner">管理员管理</span><span
                            role="presentation" class="el-breadcrumb__separator">·</span></span> <span
                        data-v-63f72479="" class="el-breadcrumb__item" aria-current="page"><span role="link"
                                                                                                 class="el-breadcrumb__inner"><span
                                data-v-63f72479=""
                                style="color: rgb(48, 211, 102); font-weight: bolder;">添加用户</span></span><span
                            role="presentation" class="el-breadcrumb__separator">·</span></span></div>
        </div>
        <div data-v-63f72479="" class="bottom">
            <div data-v-63f72479="" class="title">
                <form data-v-63f72479="" method="post" action="<?= Yii::$service->url->getUrl('/admin/index/editadmin') ?>" class="el-form" enctype="application/x-www-form-urlencoded"
                      onsubmit="return check_submit()">
                    <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>"/>
                    <div data-v-63f72479="" class="el-row" style="width: 850px;">
                        <div data-v-63f72479="" class="el-form-item">
                            <label class="el-form-item__label"
                                   style="width: 150px;">*用户名</label>
                            <div class="el-form-item__content" style="margin-left: 150px;">
                                <div data-v-63f72479="" class="el-input" style="width: 420px;">
                                    <input type="text" name="username"  class="el-input__inner" id="username">
                                </div>
                                <label id="result_name"></label>
                            </div>
                        </div>
                        <div data-v-63f72479="" class="el-form-item">
                            <label class="el-form-item__label"
                                   style="width: 150px;">*密码</label>
                            <div class="el-form-item__content" style="margin-left: 150px;">
                                <div data-v-63f72479="" class="el-input" style="width: 420px;">
                                    <input type="password" name="password_hash"  class="el-input__inner" id="password">
                                </div>
                                <label id="result_pwd"></label>
                            </div>
                        </div>
                        <div data-v-63f72479="" class="el-form-item">
                            <label class="el-form-item__label"
                                   style="width: 150px;">*邮箱</label>
                            <div class="el-form-item__content" style="margin-left: 150px;">
                                <div data-v-63f72479="" class="el-input" style="width: 420px;">
                                    <input type="email" name="email"  class="el-input__inner">
                                </div>
                                <label>(请填写正确的邮箱格式！)</label>
                            </div>
                        </div>
                        <div data-v-63f72479="" class="el-form-item">
                            <label class="el-form-item__label"
                                   style="width: 150px;">*姓名</label>
                            <div class="el-form-item__content" style="margin-left: 150px;">
                                <div data-v-63f72479="" class="el-input" style="width: 420px;">
                                    <input type="text" name="person"  class="el-input__inner">
                                </div>
                            </div>
                        </div>

                    </div>
            </div>
        </div>
        <div data-v-63f72479="" style="float: right;">
            <button data-v-63f72479="" type="submit" class="el-button green el-button--success is-round"><!---->
                <!----><span>提交</span></button>
            <a data-v-63f72479="" href="#/ShopCouponEdit" class="">
                <button data-v-63f72479="" type="reset" class="el-button red el-button--danger is-round"><!---->
                    <!----><span>重置</span></button>
            </a></div>
        </form>
    </div>
</div>
</div>


<script>
    var flag = false;
    //======================判断用户名==================================
    // 当鼠标聚焦于用户名
   $("#username").focus(function(){
       var nameObj = document.getElementById("result_name");
       nameObj.innerHTML = "用户名不能包含特殊字符且为6~20位";
       nameObj.style.color="#999";
   });
   //失去焦点
   $("#username").blur(function () {
       // 找到id=result_name的div
       var nameObj = document.getElementById("result_name");
       // 判断用户名是否合法
       var str2 = check_user_name($("#username").val());

      /* nameObj.style.color="red";*/
       if ("该用户名合法" ==  str2)
       {
           flag = true;
           nameObj.innerHTML = str2;
           nameObj.style.color="skyblue";
       }
       else
       {
           nameObj.innerHTML = str2;
           nameObj.style.color="red";
       }
   });
    // 检查用户名是否合法
    function check_user_name(str)
    {
        var str2 = "该用户名合法";
        if ("" == str)
        {
            str2 = "用户名为空";
            return str2;
        }
        else if ((str.length < 5) || (str.length > 20))
        {
            str2 = "用户名必须为5 ~ 20位";
            return str2;
        }
        else if (check_other_char(str))
        {
            str2 = "不能含有特殊字符";
            return str2;
        }
        return str2;
    }
    // 验证用户名是否含有特殊字符
    function check_other_char(str)
    {
        var arr = ["&", "\\", "/", "*", ">", "<", "@", "!","、",","];
        for (var i = 0; i < arr.length; i++)
        {
            for (var j = 0; j < str.length; j++)
            {
                if (arr[i] == str.charAt(j))
                {
                    return true;
                }
            }
        }
        return false;
    }
    //=======================判断密码==============================
    //聚焦
    $(":password").focus(
        function () {
            var nameObj1 = document.getElementById("result_pwd");
            nameObj1.innerHTML = "密码不能包含特殊字符且为6~20位";
            nameObj1.style.color="#999";
        }
    );
    //失焦
    $(":password").blur(
        function () {
            // 找到id=result_name的div
            var nameObj1 = document.getElementById("result_pwd");
            // 判断用户名是否合法
            var str2 = check_password($("#password").val());

            if ("密码合法" ==  str2)
            {
                flag = true;
                nameObj1.innerHTML = str2;
                nameObj1.style.color="skyblue";
            }
            else
            {
                nameObj1.innerHTML = str2;
                nameObj1.style.color="red";
            }
        }
    );
    // 检查用户名是否合法
    function check_password(str)
    {
        var str2 = "密码合法";
        if ("" == str)
        {
            str2 = "密码为空";
            return str2;
        }
        else if ((str.length < 5) || (str.length > 20))
        {
            str2 = "密码必须为6 ~ 20位";
            return str2;
        }
        return str2;
    }

    //判断是否可以提交
    function check_submit()
    {
        if (flag == false)
        {
           return false;
        }
        return true;
    }
</script>