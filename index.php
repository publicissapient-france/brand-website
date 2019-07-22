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
			<nav id="menu-box">
				<li><a href="logos.php">LOGOS</a></li>
				<li><a href="colors.php">COLORS</a></li>
				<li><a href="fonts.php">FONTS</a></li>
				<li><a href="assets.php">ASSETS</a></li>
				<li><a href="slides.php">SLIDES</a></li>
				<li><a href="about.php">ABOUT</a></li>
			</nav>
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