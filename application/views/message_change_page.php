<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="css/admin_common.css">
    <link rel="stylesheet" href="css/change_page.css">
</head>
<body>
<div id="wrap">
    <h3 class="title">管理员管理系统</h3>
    <ul class="tab">
        <li class="message">留言管理</li>
        <li class="blog">博客管理</li>
    </ul>
    <div class="box">
        <div class="one show"  >
            <form action="admin/update_message"  method="post">
                <p>
                    id: <input name="id" type="text" value="<?php echo $admins->id?>">
                </p>
                <p>
                    姓名：<input  class="gray common" name="name" type="text" value="<?php echo $admins->name?>">
                </p>
                <p>
                    邮箱：<input  class="gray common" name="email" type="text" value="<?php echo $admins->email?>">
                </p>
                <p>
                   content: <input  class="gray common" name="content" type="text" value="<?php echo $admins->content?>">
                </p>
                <p>
                    <input class="change" data-id="<?php echo $admins->id?>" type="submit" value="确认修改">
                </p>
            </form>
        </div>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/change_page.js"></script>

</body>
</html>