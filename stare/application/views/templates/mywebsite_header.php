<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>
	<link rel="stylesheet" href="<?=assets_url();?>css/_tabs.css">
	<link rel="stylesheet" href="<?=assets_url();?>css/shared.css">
	<link rel="stylesheet" href="<?=assets_url();?>css/bootstrap/_bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet"> 

</head>
<body>
<div class="container">
	<div class="row nav_row">
		<div class="col col-md-offset-3">
			<nav class="nav_bar">
				<a href="<?=base_url();?>index.php">Home</a>
				<a href="<?=base_url();?>author">Author</a>
				<a href="<?=base_url();?>shapes">Shapes Generator</a>
				<a href="<?=base_url();?>heroes">Heroes Vault</a>
				<a href="<?=base_url();?>contact">Get in touch</a>
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