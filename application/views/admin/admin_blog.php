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
                <td class="first"><button class="add" >新增</button><button class="delete-all">删除</button></td>
              </tr>
              <tr>
                <td><input class="all-select" type="checkbox"></td><td>用户ID</td><td>用户名</td><td>邮箱</td><td>website</td><td>评论详情</td><td>评论时间</td>
              </tr>
            <?php
            foreach($blogs as $blog){
            ?> 
                <tr class="handel">
                    <td><input class="check-btn" data-id="<?php echo $blog->id?>" type="checkbox"></td>
                    <td><?php echo $blog->id?></td>
                    <td><?php echo $blog->name?></td>
                    <td><?php echo $blog->email?></td>
                    <td><?php echo $blog->website?></td>
                    <td><?php echo $blog->subject?></td>
                    <td><?php echo $blog->time?></td>
                    <td>
                        <button  class="delete" data-id="<?php echo $blog->id?>">删除</button>
                         <button  class="change" data-id="<?php echo $blog->id?>">修改</button>
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
<script src="js/admin_blog.js"></script>
<script src="js/admin_mrg.js"></script>


</body>
</html>