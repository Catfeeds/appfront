<div class="main-content">
    <div id="platdata">
        <div class="adminmannager-title">
            <span>数据中心</span>&nbsp;
            <span>·&nbsp;平台数据</span>
        </div>
        <div class="add">

            <form method="post" action="<?= Yii::$service->url->getUrl('/admin/index/editadmin') ?>" onsubmit="return check_submit()">
                <div>
                    <span>用户名：</span>
                    <input type="text" name="username" id="username">
                    <label id="result_name"></label>
                </div>
                <div>
                    <span>密&nbsp;&nbsp;&nbsp;码：</span>
                    <input type="password" name="password_hash" id="password">
                    <label id="result_pwd"></label>
                </div>
                <div>
                    <span>邮&nbsp;&nbsp;&nbsp;箱：</span>
                    <input type="email" name="email">
                    <label>(请填写正确的邮箱格式！)</label>
                </div>
                <div>
                    <span>姓&nbsp;&nbsp;&nbsp;名：</span>
                    <input type="text" name="person">
                </div>
                <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>"/>
                <input type="submit" onsubmit="check_submit()">
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

       nameObj.style.color="red";
       if ("该用户名合法" ==  str2)
       {
           flag = true;
           nameObj.innerHTML = str2;
       }
       else
       {
           nameObj.innerHTML = str2;
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

            nameObj1.style.color="red";
            if ("密码合法" ==  str2)
            {
                flag = true;
                nameObj1.innerHTML = str2;
            }
            else
            {
                nameObj1.innerHTML = str2;
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