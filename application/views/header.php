<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title>Ping Pong</title>
	<?php echo $html->includeCss("header"); ?>
	<?php echo $html->includeCss("style_login"); ?>
	<?php echo $html->includeCss("style_main"); ?>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>

<body>
	<div class="container">
		<header style="position:sticky;">
			<div class="header">
				<ul>
					<li id="logo">
						<a href="#"><img width="160" height="85" <?php echo $html->includeImg("LogoPingPong", "png"); ?> alt="No" /></a>
					</li>
					<li>
						<a href="#">
							<img width="160" height="50" <?php echo $html->includeImg("LogotenTrangchu", "png"); ?> alt="No" /></a>
					</li>
					<li>
						<a href="#">
							<img width="180" height="50" <?php echo $html->includeImg("Logohomnayangi", "png"); ?> alt="No" /></a>
					</li>
					<li>
						<a href="#">
							<img width="200" height="50" <?php echo $html->includeImg("LogoSieusalesieuhot", "png"); ?> alt="No" /></a>
					</li>
					<li>
						<a href="#">
							<img width="120" height="45" <?php echo $html->includeImg("logoLienhe", "png"); ?> alt="No" /></a>
					</li>
				</ul>
				<div class="header-right">
					<?php if (isset($_SESSION['loggedin']) && $_SESSION["loggedin"] == true) : ?>
						<ul>
							<li>
								da dang nhap
							</li>
							<li>
								bang session
							</li>
							<li>
								<button><a href=<?php echo $html->linkSrc("users", "logout") ?>>dang xuat</a></button>
							</li>
							<li>
								<button><a href=<?php echo $html->linkSrc("users", "logout") ?>>Gio hang</a></button>
							</li>
						</ul>
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