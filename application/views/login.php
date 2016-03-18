<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<form class="login-box" action="admin/admin_mrg" method="post">
    <p>
        用户名：<input   class="com " type="text" name="uname">
    </p>
    <p>
        密码：&nbsp;&nbsp;<input   class="com " type="password" name="pwd">
    </p>
    <p>
        <input  class="btn" type="submit" value="登录">
    </p>
</form>
</body>
</html>