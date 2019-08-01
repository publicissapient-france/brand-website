<!DOCTYPE html>
<html>
	<head>
		<title>Brand - Assets</title>
		<?php include('header.html'); ?>
		<link rel="stylesheet" type="text/css" href="./styles/banner.css">
		<link rel="stylesheet" type="text/css" href="./styles/assets.css">
	</head>
	<body>
		<?php $page = "assets"; ?>
		<?php include('topbar.html');?>
		
		<div class="banner">
			<div class="banner-content">
				<div class="banner-logo">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}.b{clip-path:url(#a);}</style><clipPath id="a"><rect class="a" width="50" height="50"/></clipPath></defs><g class="b"><rect class="a" width="50" height="50"/><g transform="translate(-793.327 -995)"><path d="M822.327,1019.75a3.75,3.75,0,1,0-3.75-3.75A3.754,3.754,0,0,0,822.327,1019.75Zm0-6a2.25,2.25,0,1,1-2.25,2.25A2.253,2.253,0,0,1,822.327,1013.75Z"/><path d="M807.577,1009.25v21.5h21.5v-21.5Zm20,1.5v14.439l-3.25-3.25-3.5,3.5-6.5-6.5-5.25,5.25V1010.75Zm-18.5,15.561,5.25-5.25,8.19,8.189h-13.44Zm15.561,2.939-2.75-2.75,2.439-2.439,3.25,3.25v1.939Z"/></g></g></svg>
				</div>
				<h1>ASSETS</h1>
			</div>
		</div>

		<div class="content">
			<div class="assets-title">
				<h2>IMAGE LIBRARY</h2>
			</div>
			<div class="download-link">
				<a class="download-box" href="">
					<p class="on-hover">Search image library</p>
					<img src="../images/external-link.svg" />
				</a>
			</div>
			<div class="assets-image">
				<img src="../images/stock-pictures-3x.png"/>
			</div>
		</div>

		<?php include('footer.php');?>
	</body>
</html>