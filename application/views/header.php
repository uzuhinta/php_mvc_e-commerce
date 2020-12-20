<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title>Ping Pong</title>
	<?php echo $html->includeCss("header"); ?>
	<?php echo $html->includeCss("style_login"); ?>
	<?php echo $html->includeCss("style_main"); ?>
	<!--    --><?php //echo $html->includeJs("generic"); 
				?>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>

<body>
	<div class="container">
		<header>
			<div class="header">
				<ul>
					<li id="logo">
						<a href=<?php echo $html->linkSrc("posts", "index") ?>><img width="160" height="85" <?php echo $html->includeImg("LogoPingPong", "png"); ?> alt="No" /></a>
					</li>
					<li>
						<a href=<?php echo $html->linkSrc("posts", "index") ?>>
							<img width="160" height="50" <?php echo $html->includeImg("LogotenTrangchu", "png"); ?> alt="No" /></a>
					</li>
					<li>
						<a href=<?php echo $html->linkSrc("blogs", "detail") ?>>
							<img width="180" height="50" <?php echo $html->includeImg("Logohomnayangi", "png"); ?> alt="No" /></a>
					</li>
					<li>
						<a href="#">
							<img width="200" height="50" <?php echo $html->includeImg("LogoSieusalesieuhot", "png"); ?> alt="No" /></a>
					</li>
					<li>
						<a href=<?php echo $html->linkSrc("users", "contact") ?>>
							<img width="120" height="45" <?php echo $html->includeImg("logoLienhe", "png"); ?> alt="No" /></a>
					</li>
				</ul>
				<div class="header-right">
					<?php if (isset($_SESSION['loggedin']) && $_SESSION["loggedin"] == true) : ?>
						<ul class="header_logged">
							<li style="cursor: pointer;">
								<a href=<?php echo $html->linkSrc("orders", "cart") ?>>
									<i class="fas fa-shopping-cart" style="font-size: 30px; cursor: pointer; "></i>
									<small class="number_product">1</small>
								</a>
							</li>
							<li class="dropdown">
								Xin chào <?php if (isset($_SESSION['user_name']))
												echo $_SESSION["user_name"] ?> <i class="fas fa-caret-down show"></i>
								<div class="dropdown-content">
									<ul>
										<li><a href=<?php echo $html->linkSrc("users", "edit") ?>>Cập nhật thông tin</a></li>
										<li><a href=<?php echo $html->linkSrc("users", "change_pass") ?>>Đổi mật khẩu</a></li>
										<li><a href=<?php echo $html->linkSrc("orders", "cart") ?>>Quản lý giỏ hàng</a></li>
										<li><a href=<?php echo $html->linkSrc("users", "logout") ?>>Đăng xuất</a></li>

									</ul>
								</div>
							</li>
						<?php else : ?>
							<ul>
								<li>
									<a href=<?php echo $html->linkSrc("users", "login") ?>>
										<img width="120" height="45" <?php echo $html->includeImg("dangnhap", "png"); ?> alt="No" /></a>
								</li>
								<li>
									<a href=<?php echo $html->linkSrc("users", "register") ?>>
										<img width="120" height="45" <?php echo $html->includeImg("dangky", "png"); ?> alt="No" /></a>
								</li>
							</ul>
						<?php endif; ?>
				</div>
			</div>
		</header>