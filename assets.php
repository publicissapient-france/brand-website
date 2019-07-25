<!DOCTYPE html>
<html>
	<head>
		<title>Assets</title>
		<?php include('header.php'); ?>
	</head>
	<body>
		<?php $page = "assets"; ?>
		<?php include('topbar.php');?>
		<?php include('banner.php');?>

		<div class="content">
			<div class="assets-title">
				<h1>IMAGE LIBRARY</h1>
			</div>
			<div class="download-link">
				<a class="download-box" href="">
					<p class="on-hover">Search image library</p>
					<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}</style></defs><rect class="a" width="50" height="50"/><path d="M1048.823,1009.25h-12.5v5h-9v16.5h16.5v-9h5Zm-6.5,20h-13.5v-13.5h7.5v6h6Zm0-9h-4.5v-4.5h4.5Zm5,0h-3.5v-6h-6v-3.5h9.5Z" transform="translate(-1013.072 -995)"/></svg>
				</a>
			</div>
			<div class="assets-image">
				<img src="../images/stock-pictures-3x.png"/>
			</div>
		</div>

		<?php include('footer.php');?>
	</body>
</html>