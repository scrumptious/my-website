<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?=$title;?></title>
	<link rel="stylesheet" href="<?=assets_url();?>css/shared.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tools/1.2.7/jquery.tools.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<div class="container-fluid">
	<div class="row">	<!-- row1 and logo div -->
		<div class="col-12 col-sm-12 col-md-6 text-center">
			<h1 class="logo-first-line logo-name"><?=$logo_line_1;?></h1>
			<?php if(!empty($logo_middle_line)) {
				echo '<br><p class="logo-small-text">' . $logo_middle_line . '</p>';
			} ?>
			<h1 class="logo-second-line logo-name"><?=$logo_line_2;?></h1>
		</div>
		<div class="col-12 col-sm-12 col-md-6">
			<ul class="nav-bar text-center">
				<li><a href="<?=base_url();?>">HOME</a></li>
				<li><a href="shapes">WORK</a></li>
				<li><a href="author">ABOUT</a></li>
				<li><a href="contact">CONTACT</a></li>
			</ul>
		</div>
	</div>