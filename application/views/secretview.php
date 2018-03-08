<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
</head>
<body>
	<h2><?php echo $heading; ?></h2>
	<p></p><br>
	<p>in this section there is going to be some kind of show off</p>
	<p><strong>not so much fun but needs to be done: </strong></p>
	<ul>
		<?php foreach($todo_list as $item): ?>
			<li><?=$item; ?></li>
			<!-- or <?php echo $item; ?> -->

		<?php endforeach; ?>
	</ul>


	</form>
</body>
</html>