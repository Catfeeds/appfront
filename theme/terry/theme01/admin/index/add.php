
<div class="main-content">
    <div class="add">

        <form method="post" action="<?= Yii::$service->url->getUrl('/admin/index/editadmin') ?>">
          <div>
              <span>用户名：</span>
              <input type="text" name="username">
              <label>(用户名不可重复,大于6位数)</label>
          </div>
            <div>
                <span>密&nbsp;&nbsp;&nbsp;码：</span>
                <input type="text" name="password_hash">
                <label>(密码必须大于6位数)</label>
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
            <input type="submit">
            <button class="button" onclick="getback()">返回</button>
        </form>
    </div>
</div>
<script>
    function getback(){
        location.href="/admin/index/index";
    }
</script>