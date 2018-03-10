<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link href="<?=assets_url();?>css/sass-example2.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=assets_url();?>css/_inputrange.css">
	<link rel="stylesheet" href="<?=assets_url();?>css/_tabs.css">
	<link rel="stylesheet" href="<?=assets_url();?>css/shared.css">
	<link rel="stylesheet" href="<?=assets_url();?>css/generator.css">
	<link rel="stylesheet" href="<?=assets_url();?>css/bootstrap/_bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet"> 
	<script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script>
</head>

<body>
<div class="container-fluid">
	<div class="row">	<!-- row1 and logo div -->
		<div class="col-md-6 col-sm-10">
			<h1 class="logo-first-line logo-name"><?=$logo_line_1;?></h1><br>
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