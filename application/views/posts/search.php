<main>

    <div class="panel">
        <img style="width: 100%; height: auto;" <?php echo $html->includeImg("nen",  "jpg"); ?> alt="No" class="image_main" />
        <form>
            <input id= "panel-input" type="input" placeholder="Nhập món ăn ưa thích" >
            <input id="panel-search" type="submit" value="Tìm" style="visibility: hidden; display: none;">
        </form>
    </div>


    <div class="salehot">
        <a href=<?php echo $html->linkSrc("posts", "salehot") ?>>
            <img width="50" height="220" <?php echo $html->includeImg("salehot", "png"); ?> alt="No" /></a>
    </div>

    <br/>
    <div class="filter">
        <div><img style="margin-left: 0px; cursor: default;" <?php echo $html->includeImg("sortby", "png"); ?> alt="No" /></div>
        <div><a href=<?php echo $html->linkSrc("posts", "findcategory", "1") ?> ><img <?php echo $html->includeImg("monMan", "png"); ?> alt="No" /></a></div>
        <div><a href=<?php echo $html->linkSrc("posts", "findcategory", "2") ?> ><img <?php echo $html->includeImg("monNgot", "png"); ?> alt="No" /></a></div>
        <div><a href=<?php echo $html->linkSrc("posts", "findcategory", "3") ?> ><img <?php echo $html->includeImg("comboXin", "png"); ?> alt="No" /></a></div>
        <div><a href=<?php echo $html->linkSrc("posts", "orderby") ?> ><img <?php echo $html->includeImg("priceUp", "png"); ?> alt="No" /></a></div>
        <div><a href=<?php echo $html->linkSrc("posts", "orderby", "1" , "DESC") ?>><img <?php echo $html->includeImg("priceDown", "png"); ?> alt="No" /></a></div>
        <div>
            <form action=<?php echo $html->linkSrc("posts", "search"); ?> method="POST" >
                <input type="text" name="" id="" placeholder="Tìm kiếm đồ ăn yêu thích" />
                <input id="panel-search" type="submit" value="Tìm" hidden>
            </form>
        </div>
    </div>

    <div class="list-post">
        <?php if (isset($posts[0])): ?>
        <?php foreach ($posts as $post): ?>
            <a href=<?php echo $html->linkSrc("posts", "detail", $post["Post"]["id"]) ?> >
                <div class="card">
                    <?php $img = explode('.', $post["Post"]["imgname"]);?>
                    <img <?php echo $html->includeImg("$img[0]", $img[1]); ?> >
                    <div class="text">
                        <div class="price"><span><?php echo $post["Post"]["price"] ?> đ</span></div>
                        <div class="name"><span><?php echo $post["Post"]["title"] ?></span></div>
                    </div>
                    <?php if ($post["Post"]["sale"] != 0): ?>
                        <div class="sale"><span>Sale</span></div>
                    <?php endif ?>
                </div>
            </a>
        <?php endforeach; ?>
        <?php else:?>
            <p class="title" style="text-align: center; margin: 190px auto;">Không có kết quả phù hợp</p>
        <?php endif; ?>

    </div>
</main>
</div>