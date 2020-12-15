<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Ping Pong</title>
    <?php echo $html->includeCss("header"); ?>
    <?php echo $html->includeCss("style_login"); ?>
    <?php echo $html->includeCss("style_main"); ?>
</head>

<body>
<div class="container">
    <header>
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
            </div>
        </div>
    </header>