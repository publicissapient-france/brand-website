<!DOCTYPE html>
<html>
	<head>
		<title>Titre intéressant à changer plus tard</title>
		<?php include('header.php'); ?>
	</head>
	<body>
		<?php $page = "colors"; ?>
		<?php include('topbar.php');?>
		<?php include('banner.php');?>

		<div class="content">

			<div class="colors-title">
				<h1>COLOR CHART</h1>
				<p>Click color square to copy</p>
			</div>

			<div class="main-colors">
				<button class="color-black white-font" value="#000000">
					<div class="color-content">
						<div class="color-title">
							<div class="color-name">
								<h1>#000000</h1>
								<p class="primary-secondary">Primary</p>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}</style></defs><rect class="a" width="50" height="50"/><path d="M1048.823,1009.25h-12.5v5h-9v16.5h16.5v-9h5Zm-6.5,20h-13.5v-13.5h7.5v6h6Zm0-9h-4.5v-4.5h4.5Zm5,0h-3.5v-6h-6v-3.5h9.5Z" transform="translate(-1013.072 -995)"/></svg>
						</div>
						<div class="color-attributes">
							<p>RGB: 0, 0, 0</p>
							<p>CMYK: 0, 0, 0, 100</p>
							<p>Coated: PMS Black 100%</p>
							<p>Uncoated: PMS Black 100%</p>
						</div>
					</div>
				</button>

				<button class="color-ps-red white-font" value="#FE414D">
					<div class="color-content">
						<div class="color-title">
							<div class="color-name">
								<h1>#FE414D</h1>
								<p class="primary-secondary">Primary</p>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}</style></defs><rect class="a" width="50" height="50"/><path d="M1048.823,1009.25h-12.5v5h-9v16.5h16.5v-9h5Zm-6.5,20h-13.5v-13.5h7.5v6h6Zm0-9h-4.5v-4.5h4.5Zm5,0h-3.5v-6h-6v-3.5h9.5Z" transform="translate(-1013.072 -995)"/></svg>
						</div>
						<div class="color-attributes">
							<p>RGB: 254, 65, 77</p>
							<p>CMYK: 0, 100, 65, 0</p>
							<p>Coated: PMS 199 C</p>
							<p>Uncoated: PMS 199 U</p>
						</div>
					</div>
				</button>

				<button class="color-white" value="#FFFFFF">
					<div class="color-content">
						<div class="color-title">
							<div class="color-name">
								<h1>#FFFFFF</h1>
								<p class="primary-secondary">Primary</p>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}</style></defs><rect class="a" width="50" height="50"/><path d="M1048.823,1009.25h-12.5v5h-9v16.5h16.5v-9h5Zm-6.5,20h-13.5v-13.5h7.5v6h6Zm0-9h-4.5v-4.5h4.5Zm5,0h-3.5v-6h-6v-3.5h9.5Z" transform="translate(-1013.072 -995)"/></svg>
						</div>
						<div class="color-attributes">
							<p>RGB: 238, 238, 238</p>
							<p>CMYK: 0, 0, 0, 10</p>
							<p>Coated: PMS Black 10%</p>
							<p>Uncoated: PMS Black 10%</p>
						</div>
					</div>
				</button>

				<button class="color-blue white-font" value="#079FFF">
					<div class="color-content">
						<div class="color-title">
							<div class="color-name">
								<h1>#079FFF</h1>
								<p class="primary-secondary">Secondary</p>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}</style></defs><rect class="a" width="50" height="50"/><path d="M1048.823,1009.25h-12.5v5h-9v16.5h16.5v-9h5Zm-6.5,20h-13.5v-13.5h7.5v6h6Zm0-9h-4.5v-4.5h4.5Zm5,0h-3.5v-6h-6v-3.5h9.5Z" transform="translate(-1013.072 -995)"/></svg>
						</div>
						<div class="color-attributes">
							<p>RGB: 7, 159, 255</p>
							<p>CMYK: 70, 33, 0, 10</p>
							<p>Coated: PMS 279 C</p>
							<p>Uncoated: PMS 2925 U</p>
						</div>
					</div>
				</button>

				<button class="color-yellow" value="#FFE63B">
					<div class="color-content">
						<div class="color-title">
							<div class="color-name">
								<h1>#FFE63B</h1>
								<p class="primary-secondary">Secondary</p>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}</style></defs><rect class="a" width="50" height="50"/><path d="M1048.823,1009.25h-12.5v5h-9v16.5h16.5v-9h5Zm-6.5,20h-13.5v-13.5h7.5v6h6Zm0-9h-4.5v-4.5h4.5Zm5,0h-3.5v-6h-6v-3.5h9.5Z" transform="translate(-1013.072 -995)"/></svg>
						</div>
						<div class="color-attributes">
							<p>RGB: 255, 230, 59</p>
							<p>CMYK: 0, 0, 100, 0</p>
						</div>
					</div>
				</button>

				<button class="color-turquoise" value="#00E6C3">
					<div class="color-content">
						<div class="color-title">
							<div class="color-name">
								<h1>#00E6C3</h1>
								<p class="primary-secondary">Secondary</p>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}</style></defs><rect class="a" width="50" height="50"/><path d="M1048.823,1009.25h-12.5v5h-9v16.5h16.5v-9h5Zm-6.5,20h-13.5v-13.5h7.5v6h6Zm0-9h-4.5v-4.5h4.5Zm5,0h-3.5v-6h-6v-3.5h9.5Z" transform="translate(-1013.072 -995)"/></svg>
						</div>
						<div class="color-attributes">
							<p>RGB: 0, 230, 195</p>
							<p>CMYK: 62, 0, 26, 0</p>
						</div>
					</div>
				</button>

				<button class="color-grey" value="#B4B4B4">
					<div class="color-content">
						<div class="color-title">
							<div class="color-name">
								<h1>#B4B4B4</h1>
								<p class="primary-secondary">Secondary</p>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}</style></defs><rect class="a" width="50" height="50"/><path d="M1048.823,1009.25h-12.5v5h-9v16.5h16.5v-9h5Zm-6.5,20h-13.5v-13.5h7.5v6h6Zm0-9h-4.5v-4.5h4.5Zm5,0h-3.5v-6h-6v-3.5h9.5Z" transform="translate(-1013.072 -995)"/></svg>
						</div>
						<div class="color-attributes">
							<p>RGB: 180, 180, 180</p>
							<p>CMYK: 21, 11, 9, 22</p>
						</div>
					</div>
				</button>
				
			</div>


			<h1 class="colors-title">MANY COLORS...</h1>
			<div class="not-main-colors">

				<button class="color-orange" value=#FF7B5C>
					<h1>#FF7B5C</h1>
					<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}</style></defs><rect class="a" width="50" height="50"/><path d="M1048.823,1009.25h-12.5v5h-9v16.5h16.5v-9h5Zm-6.5,20h-13.5v-13.5h7.5v6h6Zm0-9h-4.5v-4.5h4.5Zm5,0h-3.5v-6h-6v-3.5h9.5Z" transform="translate(-1013.072 -995)"/></svg>
				</button>

				<button class="color-sky-blue" value=#04C2E2>
					<h1>#04C2E2</h1>
					<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}</style></defs><rect class="a" width="50" height="50"/><path d="M1048.823,1009.25h-12.5v5h-9v16.5h16.5v-9h5Zm-6.5,20h-13.5v-13.5h7.5v6h6Zm0-9h-4.5v-4.5h4.5Zm5,0h-3.5v-6h-6v-3.5h9.5Z" transform="translate(-1013.072 -995)"/></svg>
				</button>

				<button class="color-light-orange" value=#F5AA6D>
					<h1>#F5AA6D</h1>
					<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}</style></defs><rect class="a" width="50" height="50"/><path d="M1048.823,1009.25h-12.5v5h-9v16.5h16.5v-9h5Zm-6.5,20h-13.5v-13.5h7.5v6h6Zm0-9h-4.5v-4.5h4.5Zm5,0h-3.5v-6h-6v-3.5h9.5Z" transform="translate(-1013.072 -995)"/></svg>
				</button>

				<button class="color-purple" value=#9E97F2>
					<h1>#9E97F2</h1>
					<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}</style></defs><rect class="a" width="50" height="50"/><path d="M1048.823,1009.25h-12.5v5h-9v16.5h16.5v-9h5Zm-6.5,20h-13.5v-13.5h7.5v6h6Zm0-9h-4.5v-4.5h4.5Zm5,0h-3.5v-6h-6v-3.5h9.5Z" transform="translate(-1013.072 -995)"/></svg>
				</button>

				<button class="color-light-yellow" value=#FFD53B>
					<h1>#FFD53B</h1>
					<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}</style></defs><rect class="a" width="50" height="50"/><path d="M1048.823,1009.25h-12.5v5h-9v16.5h16.5v-9h5Zm-6.5,20h-13.5v-13.5h7.5v6h6Zm0-9h-4.5v-4.5h4.5Zm5,0h-3.5v-6h-6v-3.5h9.5Z" transform="translate(-1013.072 -995)"/></svg>
				</button>

				<button class="color-magenta" value=#D576C8>
					<h1>#D576C8</h1>
					<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}</style></defs><rect class="a" width="50" height="50"/><path d="M1048.823,1009.25h-12.5v5h-9v16.5h16.5v-9h5Zm-6.5,20h-13.5v-13.5h7.5v6h6Zm0-9h-4.5v-4.5h4.5Zm5,0h-3.5v-6h-6v-3.5h9.5Z" transform="translate(-1013.072 -995)"/></svg>
				</button>

				<button class="color-light-green" value=#9CE361>
					<h1>#9CE361</h1>
					<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}</style></defs><rect class="a" width="50" height="50"/><path d="M1048.823,1009.25h-12.5v5h-9v16.5h16.5v-9h5Zm-6.5,20h-13.5v-13.5h7.5v6h6Zm0-9h-4.5v-4.5h4.5Zm5,0h-3.5v-6h-6v-3.5h9.5Z" transform="translate(-1013.072 -995)"/></svg>
				</button>

				<button class="color-light-gray" value=#DEDEDE>
					<h1>#DEDEDE</h1>
					<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs><style>.a{fill:none;}</style></defs><rect class="a" width="50" height="50"/><path d="M1048.823,1009.25h-12.5v5h-9v16.5h16.5v-9h5Zm-6.5,20h-13.5v-13.5h7.5v6h6Zm0-9h-4.5v-4.5h4.5Zm5,0h-3.5v-6h-6v-3.5h9.5Z" transform="translate(-1013.072 -995)"/></svg>
				</button>

			</div>
			
		</div>

		<script> 
			$("button").click(function(e){
			    var dummy = document.createElement("input");
				document.body.appendChild(dummy);
				dummy.setAttribute("id", "dummy_id");
				document.getElementById("dummy_id").value = e.currentTarget.value;
				dummy.select();
				document.execCommand("copy");
				document.body.removeChild(dummy); 
			});

		
		</script>

		<?php include('footer.php');?>
	</body>
</html>