<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	hellow!
	<hr/>
	<?php echo $username; ?>
	<br/>
	<?= $username ?>
	<hr/>

	<?php 
		foreach ($order as $k=>$v) {
			echo $k.'__'.$v.'<br/>';
	}
	?>
	<hr/>
	<?php foreach($order as $k=>$v) : ?>
		<?= $k ?>___<?= $v ?><br/>
	<?php endforeach ?>
</body>
</html>