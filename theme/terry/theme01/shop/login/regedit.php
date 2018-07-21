<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>用户注册页面</h2>
	<form action="<?= Yii::$service->url->getUrl('shop/login/reg') ?>" method="post">
        <input type="hidden" name="_csrf" value="<?= Yii::$app->request->csrfToken ?>" />
        <h2>用户名：<input type="text" name="firstname" id=""></h2>
		<h2>密&nbsp;&nbsp;码：<input type="password" name="password_hash" id=""></h2>
		<h2>重复密码：<input type="password" name="" id=""></h2>
		<h2><input type="submit" value="提交"> <input type="reset" value="重置按钮"></h2>
	</form>
	<p>
		<a href="<?= Yii::$service->url->getUrl('shop/login/index') ?>">用户登录页面</a>
	</p>
</body>
</html>