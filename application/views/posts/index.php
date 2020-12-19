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
            </ul>
            <h1>fsd</h1>
            <div class="pagination" style="display: inline; clear: both;">
                <?php for ($i = 1; $i <= $totalPages; $i++):?>
                    <?php if ($i == $currentPageNumber):?>
                        <a class="active" style="  color: black;float: left;padding: 8px 16px;text-decoration: none;  background-color: #4CAF50 !important;color: white;"><?php echo $currentPageNumber?></a>
                    <?php else: ?>
                        <?php // echo $html->link($i,'posts/index/'.$i)?>
                        <a style="  color: black;float: left;padding: 8px 16px;text-decoration: none; background-color: #ddd;"  href= <?php echo $html->linkSrc("posts", "index", $i)?>  > <?php echo $i; ?> </a>
                    <?php endif?>
                <?php endfor?>
            </div>
        </div>

    </div>
</main>
</div>