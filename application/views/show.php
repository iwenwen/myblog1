<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url(); ?>">
</head>
<body>
<?php
    foreach($admins as $admin){
        echo $admin->name;
    }
?>

</body>
</html>