<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/single.css">

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
<div id="img">

</div>
<div id="word">hauigdksjxbnidogcbodjnc9dychpdcn8ydocuinchdgcbdwibcyd8ocb</div>
<div id="intro">
    <p>Written by <a href="">admin</a></p>
    <img src="img/avatar.png" alt="">
    <h1>View all posts by: admin</h1>
</div>
<div id="comment">
    <h2>ADD NEW COMMENT</h2>
    <form action="welcome/save_commont" method="post" class="comment_form">
    <p>Name <input type="text" name="name"></p>
    <p>Email <input type="text" name="email"></p>
    <p>Website<input type="text" name="website"></p>
    <p>Subject <input class="content" type="text" name="subject"></p>
    <input class="btn" type="submit" value="Submit Comment">
    </form>
</div>
<div id="single_foot">
    <br>
    <br>
    &nbsp;&nbsp;Template by W3layouts
</div>
<script src="js/require.js" data-main="js/index.js"></script>

</body>
</html>