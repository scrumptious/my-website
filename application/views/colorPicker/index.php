<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple color picker - canvas version</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=assets_url();?>css/picker.css">
</head>
<body>
	<!-- nav bar -->
	<div class="container-fluid">
	<div class="row">	<!-- row1 and logo div -->
		<div class="col-xs-12 col-sm-12 col-md-6 text-center">
			<h1 class="logo-first-line logo-name"><?=$logo_line_1;?></h1>
			<?php if(!empty($logo_middle_line)) {
				echo '<br><p class="logo-small-text">' . $logo_middle_line . '</p>';
			} ?>
			<h1 class="logo-second-line logo-name"><?=$logo_line_2;?></h1>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6">
			<ul class="nav-bar text-center">
				<li><a href="<?=base_url();?>">HOME</a></li>
				<li><a href="shapes">WORK</a></li>
				<li><a href="author">ABOUT</a></li>
				<li><a href="contact">CONTACT</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<hr>
	</div>
</div>
	<!-- end of nav bar (as in mywebsite_header) -->
	<h1 class="base-header">Pick a color</h1>
	<p>Choose lighter or darker shades</p>
	<div class="darkness">
		<label for="normal">normal</label><input type="radio" name="darkness" value="normal">
		<label for="light">light</label><input type="radio" name="darkness" value="light">
		<label for="dark">dark</label><input type="radio" name="darkness" value="dark">
	</div>
	<canvas id="canvas" width="640px" height="320px">Your browser does not support Canvas!</canvas>
	<form action="">
		<label for="red">R :</label><input type="text" name="red" disabled>
		<label for="green">G :</label><input type="text" name="green" disabled>
		<label for="blue">B :</label><input type="text" name="blue" disabled>
		<label for="hex"># </label><input type="text" name="hex">
	</form>
	<div class="colorSquare"></div>
	<div class="colorDiv">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam repudiandae numquam earum error aut deleniti iusto tempore delectus ad praesentium illum laudantium dolorem reprehenderit, nisi expedita vero facilis dolor sint accusamus. Dolorum reiciendis maiores vel, rem labore nulla incidunt, repudiandae, sapiente quas optio assumenda, consequuntur accusamus unde dignissimos. Dignissimos, temporibus?</p>
	</div>


	<script src="<?=assets_url();?>js/colorPicker.js"></script>
</body>
</html>