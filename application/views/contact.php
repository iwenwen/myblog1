
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url(); ?>">

    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
<div id="header">
    <div id="head-box">
        <div class="nav"></div>
        <ul class="tab">
            <li><a href="">HOME</a></li>
            <li><a href="">ABOUT</a></li>
            <li><a href="">SERCIVES</a></li>
            <li><a href="">PROTFOLIO</a></li>
            <li><a href="">BLOG</a></li>
            <li><a href="">CONTACT</a></li>
        </ul>
        <span class="close-icon"></span>
    </div>
    <span class="show-icon"></span>
</div>
<div id="message">
    <form  class="box" action="welcome/save" method="post">
        <p>
            用户名：<input type="text" name="name">
        </p>
        <p>
            email：<input type="text" name="email">
        </p>
        <p>
            内容：<input class="content" type="text" name="content">
        </p>
        <p>
            <input class="btn" type="submit" value="提交">
        </p>
    </form>
</div>
<script src="js/require.js" data-main="js/index.js"></script>

</body>
</html>