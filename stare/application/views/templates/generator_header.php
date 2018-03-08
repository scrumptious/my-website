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
<body ng-app="generatorApp" ng-controller="drawCtrl as draw">
<script src="<?=assets_url();?>js/app.js"></script>
<div class="container">
	<div class="row nav_row">
		<div class="col col-md-offset-3">
			<nav class="nav_bar">
				<a href="index.php">Home</a>
				<a href="author">Author</a>
				<a href="shapes">Shapes Generator</a>
				<!-- <a href="heroes">Heroes Vault</a> -->
				<a href="contact">Get in touch</a>
			</nav>
		</div>
	</div>		<br>
	<div class="row">
		<div class="col col-md-6 col-md-offset-4">
			<header class="main_header">
				<h1><?=$title;?></h1>
			</header>
		</div>
<!-- div.row is open! -->