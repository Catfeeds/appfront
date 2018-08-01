<style>
    .forget1{
        width: 128px;
        height: 100%;
        float: right;
        line-height: 32px;
    }
    .forget1 div{
        width: 12px;
        height: 12px;
        border:4px solid #37e06f;
        box-sizing: border-box;
        float: left;
        border-radius: 50%;
        margin-top:10px;
    }
    .forget1 span{
        float:left;
        margin-left:6px;
        font-size: 12px;
        color: #b4c2cc;
    }
    .forget1 a{
        float:left;
        margin-left:10px;
        font-size: 12px;
        color: #b4c2cc;
    }
    .submit{
        display: inline-block;
        width: 208px;
        height: 33px;
        border:0;
        background: #36de76;
        text-align: center;
        line-height: 33px;
        color:#fff;
        margin:0 auto;
        border-radius:16px;
        outline: none;
    }
    .submit a{
        color:#fff;
    }
    input:-webkit-autofill{
        -webkit-box-shadow: 0 0 0px 1000px  #f3faff inset !important;
    }
    .login-2 ul li input{
        width: 230px;
        margin-left:30px;
        font-size: 14px;
        color:#9eabb5;
    }
    #loginin{
        width: 100%;
        height: 100%;
        position: relative;
        background: url("/public/background.png") no-repeat top center/100% 100%;
        overflow: hidden;
    }
    .login-box{
        width: 441px;
        height: 380px;
        background: #fff;
        border-radius: 4px;
        position: fixed;
        left:0px;
        top:0px;
        right:0px;
        bottom:0px;
        margin:auto;
        overflow: hidden;
    }
    .login-logo{
        width: 100%;
        height: 82px;
        text-align: center;
        margin-top:17px;
    }
    .login-logo img{
        display: block;
        margin:0 auto;
    }
    .login-logo span{
        font-size: 14px;
        color: #4c545a;
    }
    .login-l{
        width: 100%;
        /*height: 80px;*/
        margin-top:20px;
    }
    .login-l ul{
        width: 100%;
        height: 100%;
    }
    .login-l ul li{
        width: 286px;
        height: 32px;
        border:2px solid #ebf6ff;
        box-sizing: border-box;
        border-radius: 16px;
        margin: 3px auto;
        background: #f3faff;
        position: relative;
        line-height: 32px;
    }
   
    .login-l ul li img{
        display: block;
        width: 18px;
        height: 18px;
        position:absolute;
        left:10px;
        top:0;
        bottom:0;
        margin:auto 0;
    }
    .login-l ul li span{
        display: block;
        float: left;
        margin-left:40px;
        font-size: 14px;
        color: #516676;
    }
    .login-l ul li input{
        height: 100%;
        border:0;
        float: left;
        width: 180px;
        outline: none;
        padding-left:6px;
        background: #f3faff;
    }
    #loginin{
        width: 100%;
        height: 100vh;
    }
    *{
        margin: 0;
        padding: 0;
        list-style: none;
    }
    a{
        text-decoration: none;
    }
</style>
<div id="loginin">
    <!-- <form action="<?= Yii::$service->url->getUrl('shop/login/reg') ?>" method="post"> -->
        <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>" id="_csrf" />
        <div class="login-box">
            <div class="login-logo">
                <img src="/public/login.png" alt="">
                <span>晋彤商家管理系统</span>
            </div>
            <div class="login-l">
                <ul>
                    <li>
                        <img src="/public/account.png" alt="">
                        <span>手&nbsp;&nbsp;机&nbsp;号</span>
                        <input type="text" name="firstname" id="mobile">
                    </li>
                    <li>
                        <img src="/public/account.png" alt="">
                        <span>验&nbsp;&nbsp;证&nbsp;码</span>
                        <input type="text" name="code" style="" id="code">
                        <button style="position: absolute;height: 100%;width: 80px;background: #36de76;border: none;border-radius: 20px;font-size: 12px;color: #fff;top: 0;right: 0;cursor: pointer" onclick="getcode()">获取验证码</button>
                    </li>

                    <li>
                        <img src="/public/pwd.png" alt="">
                        <span>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</span>
                        <input type="password" name="password_hash" id="password_hash">
                    </li>
                    <li>
                        <img src="/public/pwd.png" alt="">
                        <span>确认密码</span>
                        <input type="password" name="repassword" id="repassword">
                    </li>
                </ul>
                <div class="forget">
                    <div class="forget1">
                        <div></div>
                        <a href="<?= Yii::$service->url->getUrl('shop/login/index') ?>">登录</a>
                    </div>
                </div>
                <div style="display:flex;justify-content:center;width: 100%;height: 34px;cursor: pointer;margin-top:50px;text-align:center">
                    <button style="cursor: pointer;margin-top: 10px;width: 230px;letter-spacing: 10px" class="submit" onclick="submit()">注册</button>
                </div>

            </div>
        </div>
    <!-- </form> -->
</div>
<script>
    function getcode(){
        var phoneReg = /(^1[3|4|5|7|8]\d{9}$)|(^09\d{8}$)/;
        //电话
        var phone = $.trim($('#mobile').val());
        if (!phoneReg.test(phone)) {
            alert('请输入有效的手机号码！');
            return false;
        }else{
            $.get("<?= Yii::$service->url->getUrl('shop/login/fasong') ?>",{'mobile':phone},function(data){
                var data = JSON.parse(data)
                if(data.err!=1){
                    alert(data.info)
                }else{
                    alert(data.info)                    
                }
            })
        }
    }
    function submit(){
        var phone = $.trim($('#mobile').val());
        var code = $.trim($('#code').val());
        var password_hash = $.trim($('#password_hash').val());
        var repassword = $.trim($('#repassword').val());
        if(typeof phone == "undefined" || phone == null || phone == ""){
            alert('手机号不能为空');
            return false;
        }
        if(typeof code == "undefined" || code == null || code == ""){
            alert('验证码不能为空');
            return false;
        }
        if(typeof password_hash == "undefined" || password_hash == null || password_hash == ""){
            alert('密码不能为空');
            return false;
        }
        if(typeof repassword == "undefined" || repassword == null || repassword == ""){
            alert('确认密码不能为空');
            return false;
        }
        if(password_hash != repassword){
            alert('两次密码不一致');
            return false;
        }
        $.post("<?= Yii::$service->url->getUrl('shop/login/reg') ?>",{'firstname':phone,'code':code,'password_hash':password_hash,'repassword':repassword,'_csrf':$('#_csrf').val()},function(data){
            var data = JSON.parse(data)
            if(data.err!=1){
                alert(data.info)
            }else{
                alert(data.info)
                window.location.href = "<?= Yii::$service->url->getUrl('shop/login/index') ?>";               
            }
        })
    }
</script>

    
