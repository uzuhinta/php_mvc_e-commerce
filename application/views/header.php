<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"-->
<!--        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<!--<head>-->
<!--    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>-->
<!--    <title>My E-Commerce Website</title>-->
<!--    --><?php //echo $html->includeCss("test"); ?>
<!--</head>-->
<!---->
<!--<body>-->
<!--<div class="navigation"><h1>My E-Commerce Website</h1>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Ping Pong</title>
    <?php echo $html->includeCss("header"); ?>
</head>
<body>
<div class="container">
    <header>
        <div class="header-top">
            <ul>
                <li id="logo">
                    <a href="#"
                    ><img
                                width="160"
                                height="85"
                            <?php echo $html->includeImg("LogoPingPong"); ?>
                                alt="No"
                        /></a>
                </li>
                <li>
                    <a href="#">
                        <img
                                width="160"
                                height="50"
                            <?php echo $html->includeImg("LogotenTrangchu"); ?>
                                alt="No"
                        /></a>
                </li>
                <li>
                    <a href="#">
                        <img
                                width="180"
                                height="50"
                            <?php echo $html->includeImg("Logohomnayangi"); ?>
                                alt="No"
                        /></a>
                </li>
                <li>
                    <a href="#">
                        <img
                                width="200"
                                height="50"
                            <?php echo $html->includeImg("LogoSieusalesieuhot"); ?>
                                alt="No"
                        /></a>
                </li>
                <li>
                    <a href="#">
                        <img width="120" height="45"
                            <?php echo $html->includeImg("logoLienhe"); ?>
                             alt="No"
                        /></a>
                </li>
            </ul>
            <div class="header-top-right">
                <ul>
                    <li>
                        <a href="#">
                            <img width="120" height="45"
                                <?php echo $html->includeImg("dangnhap"); ?>
                                 alt="No"
                            /></a>
                    </li>
                    <li>
                        <a href="#">
                            <img width="120" height="45"
                                <?php echo $html->includeImg("dangky"); ?>
                                 alt="No"
                            /></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--        <div class="header-main">-->
        <!--            <img src="img/nen.jpg" alt="No" class="image_main" />-->
        <!--            <input-->
        <!--                    type="text"-->
        <!--                    name=""-->
        <!--                    id=""-->
        <!--                    placeholder="Tìm kiếm đồ ăn yêu thích và đặt PING PONG ngay"-->
        <!--            />-->
        <!--        </div>-->
        <!--        <div class="header-bottom">-->
        <!--            <div class="header-bottom-left">-->
        <!--                <img-->
        <!--                        width="50"-->
        <!--                        height="230"-->
        <!--                        src="img/salehot.png"-->
        <!--                        alt="No"-->
        <!--                        class="image_main"-->
        <!--                />-->
        <!--            </div>-->
        <!--            <div class="header-bottom-right">-->
        <!--                <ul>-->
        <!--                    <li id="first">-->
        <!--                        <div class="test">-->
        <!--                            <a href="#">-->
        <!--                                <img-->
        <!--                                        width="150"-->
        <!--                                        height="100"-->
        <!--                                        src="img/com-chay.jpg"-->
        <!--                                        alt="No"-->
        <!--                                /></a>-->
        <!--                            <div class="content">-->
        <!--                                <div class="name">Cơm cháy</div>-->
        <!--                                <div class="price">-->
        <!--                                    <div class="priceStart">20.000 đ</div>-->
        <!--                                    <div class="priceEnd">15.000 đ</div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                    <li>-->
        <!--                        <div class="test">-->
        <!--                            <a href="#">-->
        <!--                                <img-->
        <!--                                        width="150"-->
        <!--                                        height="100"-->
        <!--                                        src="img/com-chay.jpg"-->
        <!--                                        alt="No"-->
        <!--                                /></a>-->
        <!--                            <div class="content">-->
        <!--                                <div class="name">Cơm cháy</div>-->
        <!--                                <div class="price">-->
        <!--                                    <div class="priceStart">20.000 đ</div>-->
        <!--                                    <div class="priceEnd">15.000 đ</div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                    <li>-->
        <!--                        <div class="test">-->
        <!--                            <a href="#">-->
        <!--                                <img-->
        <!--                                        width="150"-->
        <!--                                        height="100"-->
        <!--                                        src="img/com-chay.jpg"-->
        <!--                                        alt="No"-->
        <!--                                /></a>-->
        <!--                            <div class="content">-->
        <!--                                <div class="name">Cơm cháy</div>-->
        <!--                                <div class="price">-->
        <!--                                    <div class="priceStart">20.000 đ</div>-->
        <!--                                    <div class="priceEnd">15.000 đ</div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                    <li>-->
        <!--                        <div class="test">-->
        <!--                            <a href="#">-->
        <!--                                <img-->
        <!--                                        width="150"-->
        <!--                                        height="100"-->
        <!--                                        src="img/com-chay.jpg"-->
        <!--                                        alt="No"-->
        <!--                                /></a>-->
        <!--                            <div class="content">-->
        <!--                                <div class="name">Cơm cháy</div>-->
        <!--                                <div class="price">-->
        <!--                                    <div class="priceStart">20.000 đ</div>-->
        <!--                                    <div class="priceEnd">15.000 đ</div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                    <li>-->
        <!--                        <div class="test">-->
        <!--                            <a href="#">-->
        <!--                                <img-->
        <!--                                        width="150"-->
        <!--                                        height="100"-->
        <!--                                        src="img/com-chay.jpg"-->
        <!--                                        alt="No"-->
        <!--                                /></a>-->
        <!--                            <div class="content">-->
        <!--                                <div class="name">Cơm cháy</div>-->
        <!--                                <div class="price">-->
        <!--                                    <div class="priceStart">20.000 đ</div>-->
        <!--                                    <div class="priceEnd">15.000 đ</div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                    <li>-->
        <!--                        <div class="test">-->
        <!--                            <a href="#">-->
        <!--                                <img-->
        <!--                                        width="150"-->
        <!--                                        height="100"-->
        <!--                                        src="img/com-chay.jpg"-->
        <!--                                        alt="No"-->
        <!--                                /></a>-->
        <!--                            <div class="content">-->
        <!--                                <div class="name">Cơm cháy</div>-->
        <!--                                <div class="price">-->
        <!--                                    <div class="priceStart">20.000 đ</div>-->
        <!--                                    <div class="priceEnd">15.000 đ</div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                </ul>-->
        <!--            </div>-->
        <!--        </div>-->
    </header>
</div>
