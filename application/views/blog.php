<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<base href="<?php echo site_url(); ?>">

</head>
<body>
	<?php
		foreach($blogs as $blog){

		
	?>
	<div>
		<h2 ><?php echo $blog->title_1?></h2>
		<h3><?php echo $blog->title_2?></h3>
		<img src=img/<?php echo $blog->url?> alt="">
		<p><?php echo $blog->content?></p>
	</div>
	<?php
		}
	?>
</body>
</html>