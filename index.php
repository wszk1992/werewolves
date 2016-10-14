<html>
<head>
	<link rel="stylesheet" href="./font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="./list.css">

	<style>
		
	</style>
</head>
<body>
	<div class="top-bar">
		<i id="back" class="fa fa-arrow-left" aria-hidden="true"></i>
		<i id="title">Werewolves</i>
	</div>
	<div class="container">
	<?php
		foreach(glob("./images/characters/*.jpg") as $filename) { ?>
			<div class="box">
				<img src="<?php echo $filename?>" width="200" height="200">
				<div class="name"><?php echo basename($filename, ".jpg").PHP_EOL?></div>
			</div>	
		<?php }
	?>
	</div>
</body>
</html>