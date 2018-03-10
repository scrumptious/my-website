<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<title><?=$title;?></title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tools/1.2.7/jquery.tools.min.js"></script>
	<link rel="stylesheet" href="<?=assets_url();?>css/_tabs.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap/_bootstrap.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/shared.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet"> 
</head>

<body>
<div class="container-fluid">
	<div class="row">	<!-- row1 and logo div -->
		<div class="col-md-6 col-sm-10">
			<h1 class="logo-first-line logo-name"><?=$logo_line_1;?></h1><br>
			<p class="logo-small-text">WEB DEVELOPER</p>
			<h1 class="logo-second-line logo-name"><?=$logo_line_2;?></h1>
		</div>
		<div class="col-md-5 col-sm-10">
			<ul class="nav-bar">
				<li><a href="shapes">WORK</a></li>
				<li><a href="author">ABOUT</a></li>
				<li><a href="contact">CONTACT</a></li>
				<li><a href="main">HOME</a></li>
			</ul>
		</div>
	</div>