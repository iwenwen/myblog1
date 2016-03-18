<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="css/admin_common.css">
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
            <table class="td-box">
              <tr >
                <td class="first"><button class="add">新增</button><button class="delete-all">删除</button></td>
              </tr>
              <tr>
                <td><input class="all-select" type="checkbox"></td><td>用户ID</td><td>用户名</td><td>邮箱</td><td>留言内容</td>
              </tr>
            <?php
            foreach($messages as $message){
            ?> 
                <tr class="handel">
                    <td><input class="check-btn" data-id="<?php echo $message->id?>" type="checkbox"></td>
                    <td><?php echo $message->id?></td>
                    <td><?php echo $message->name?></td>
                    <td><?php echo $message->email?></td>
                    <td><?php echo $message->content?></td>
                    <td>
                        <button  class="delete" data-id="<?php echo $message->id?>">删除</button>
                         <button class="change-message" data-id="<?php echo $message->id?>">修改</button>
                    </td>
                </tr>
            <?php
            }
            ?>
           
            </table>
        </div>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/admin_message.js"></script>
<script src="js/admin_mrg.js"></script>

</body>
</html>