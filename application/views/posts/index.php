<main>
<!--    --><?php //var_dump($totalPages); ?>
<!--    <br>-->
<!--    --><?php //var_dump($posts); ?>
<!--    <br>-->
<!---->
<!--    --><?php //var_dump($currentPageNumber); ?>

    <div class="header-main">
        <img <?php echo $html->includeImg("nen",  "jpg"); ?> alt="No" class="image_main" />
        <input type="text" name="" id="" placeholder="Tìm kiếm đồ ăn yêu thích và đặt PING PONG ngay" />
    </div>
    <div class="header-bottom">
        <div class="header-bottom-left">
            <img width="50" height="220" <?php echo $html->includeImg("salehot", "png"); ?> alt="No" />
        </div>
        <div>
            <div class="header-bottom-left" style="width:100%;">
                <ul>
                    <li>
                        <div>
                            <img style="height:60px" <?php echo $html->includeImg("sortBy", "png"); ?> alt="No" />
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="#">
                                <img <?php echo $html->includeImg("monMan", "png"); ?> alt="No" /></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="#">
                                <img <?php echo $html->includeImg("monNgot", "png"); ?> alt="No" /></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="#">
                                <img <?php echo $html->includeImg("priceUp", "png"); ?> alt="No" /></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="#">
                                <img <?php echo $html->includeImg("priceDown", "png"); ?> alt="No" /></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <input type="text" name="" id="" placeholder="Tìm kiếm đồ ăn yêu thích" />
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-bottom-right">
            <ul>
                <?php foreach ($posts as $post): ?>
                    <li>
                        <div class="test">
                            <a href="#">
                                <img width="150" height="100" <?php echo $html->includeImg("com-chay", "jpg"); ?> alt="No" /></a>
                            <div class="content">
                                <div class="name">  <?php echo $post["Post"]["title"] ?> </div>
                                <div class="price">
                                    <div class="priceStart"><?php echo $post["Post"]["price"] ?> đ</div>
                                    <div class="priceEnd"><?php echo $post["Post"]["sale"] ?> đ</div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
                <?php for ($i = 1; $i <= $totalPages; $i++):?>
                    <div>
                        <?php if ($i == $currentPageNumber):?>
                            <?php echo $currentPageNumber?>
                        <?php else: ?>
                            <?php echo $html->link($i,'posts/index/'.$i)?>
                        <?php endif?>
                    </div>
                <?php endfor?>
<!--                <li id="first">-->
<!--                    <div class="test">-->
<!--                        <a href="#">-->
<!--                            <img width="150" height="100" --><?php //echo $html->includeImg("com-chay", "jpg"); ?><!-- alt="No" /></a>-->
<!--                        <div class="content">-->
<!--                            <div class="name">Cơm cháy</div>-->
<!--                            <div class="price">-->
<!--                                <div class="priceStart">20.000 đ</div>-->
<!--                                <div class="priceEnd">15.000 đ</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!---->
<!--                <li>-->
<!--                    <div class="test">-->
<!--                        <a href="#">-->
<!--                            <img width="150" height="100" --><?php //echo $html->includeImg("com-chay", "jpg"); ?><!-- alt="No" /></a>-->
<!--                        <div class="content">-->
<!--                            <div class="name">Cơm cháy</div>-->
<!--                            <div class="price">-->
<!--                                <div class="priceStart">20.000 đ</div>-->
<!--                                <div class="priceEnd">15.000 đ</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
            </ul>
        </div>

    </div>
</main>
</div>