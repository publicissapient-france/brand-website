<!DOCTYPE html>
<html>
	<head>
		<title>Brand - Slides</title>
		<?php include('header.html'); ?>
		<link rel="stylesheet" type="text/css" href="./styles/banner.css">
		<link rel="stylesheet" type="text/css" href="./styles/slides.css">
	</head>
	<body>
		<?php $page = "slides"; ?>
		<?php include('topbar.html');?>

		<div class="banner">
			<div class="banner-content">
				<div class="banner-logo">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}.b{clip-path:url(#a);}</style><clipPath id="a"><rect class="a" width="50" height="50"/></clipPath></defs><g class="b"><rect class="a" width="50" height="50"/><g transform="translate(-666.056 -995)"><path d="M680.306,1009.25v21.5h21.5v-21.5Zm20,20h-18.5v-18.5h18.5Z"/><path d="M698.806,1014.25h-15.5v11.5h15.5Zm-1.5,10h-12.5v-8.5h12.5Z"/></g></g></svg>
				</div>
				<h1>CORPORATE</h1>
			</div>
		</div>

		<div class="content">

			<div class="card-container">
			 
				<div class="card">
				<div class="cercle cercle-imagebank"></div>
					<h2>Image Bank</h2>
					<div class="liste">
						<ul>
							<li>Photos Corporate</li>
							<li>Expertises</li>
							<li>Illustrations</li>
						</ul>
					</div>
				</div>

				<div class="card">
				<div class="cercle cercle-logo"></div>
					<h2>Logos</h2>
					<div class="liste">
						<ul class="un">
							<li>Technos</li>
							<li>Business</li>
							<li>Sponsors</li>
						</ul>
					</div>
				</div>

				<div class="card">
				<div class="cercle cercle-picto"></div>
					<h2>Pictos</h2>
					<div class="liste">
						<ul class="un">
							<li>Pictogrammes</li>
							<li>Data Science</li>
							<li>Design Sprint</li>
							<li>Xtrem Archi</li>
						</ul>
					</div>
				</div>

			</div>

		</div>

		<?php include('footer.php');?>
	</body>
</html>