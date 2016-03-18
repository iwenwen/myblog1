<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo site_url(); ?>">
    <title>Document</title>
</head>
<body>
    <form action="welcome/save" method="post">
        <p>
            用户名：<input type="text" name="name">
        </p>
        <p>
            email：<input type="text" name="email">
        </p>
        <p>
            内容：<input type="text" name="content">
        </p>
        <p>
            <input type="submit" value="提交">
        </p>
    </form>
</body>
</html>