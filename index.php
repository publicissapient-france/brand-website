<!DOCTYPE html>
<html>
	<head>
		<title>Titre intéressant à changer plus tard</title>
		<link rel="stylesheet" type="text/css" href="./styles/header.css">
		<link rel="stylesheet" type="text/css" href="./styles/global.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</head>

	<body>

		<div class="header">
			<div class="logo">
				<img class="logo-img" src="./images/pse-logo.svg"/>
			</div>
			<button class="menu-button">
				<div class="line line-top"></div>
				<div class="line line-bottom"></div>
			</button>
		</div>

		<div class="menu">
			<div class="menu-box">
				<a class="menu-box-single" href="logos.php">LOGOS</a>
				<a class="menu-box-single" href="colors.php">COLORS</a>
				<a class="menu-box-single" href="fonts.php">FONTS</a>
				<a class="menu-box-single" href="assets.php">ASSETS</a>
				<a class="menu-box-single" href="slides.php">SLIDES</a>
				<a class="menu-box-single" href="about.html">ABOUT</a>
			</div>
		</div>

	</body>

	<script>
		$(document).ready(function(){
			$('.menu-button').click(function(){
		        $('.menu').toggleClass('menu-is-open');
		        $('.line-top').toggleClass('line-is-open')
		        $('.line-bottom').toggleClass('line-is-open')
		    });
	    });
	</script>

</html>