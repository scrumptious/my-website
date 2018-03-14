<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" href="<?=assets_url();?>css/_tabs.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=assets_url();?>css/generator.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet"> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tools/1.2.7/jquery.tools.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script>
	<link rel="stylesheet" href="<?=assets_url();?>css/_inputrange.css">
</head>

<body ng-app="generatorApp" ng-controller="drawCtrl as draw">
<div class="container-fluid">
	<div class="row">	<!-- row1 and logo div -->
		<div class="col-xs-12 col-sm-12 col-md-6 text-center">
			<h1 class="logo-first-line logo-name"><?=$logo_line_1;?></h1>
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