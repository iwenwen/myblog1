<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url(); ?>">

</head>
<body>
        <button id="btn">展示</button>
        <script>
            var obtn=document.getElementById('btn');
            obtn.onclick=function(){
                location.href="welcome/get";
            }

        </script>
</body>
</html>