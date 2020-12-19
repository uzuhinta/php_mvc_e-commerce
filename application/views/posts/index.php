<main>

    <div class="panel">
        <img style="width: 100%; height: auto;" <?php echo $html->includeImg("nen",  "jpg"); ?> alt="No" class="image_main" />
        <form>
            <input id= "panel-input" type="imput" placeholder="Nhập món ăn ưa thích" >
        </form>
    </div>


    <div class="salehot">
        <img width="50" height="220" <?php echo $html->includeImg("salehot", "png"); ?> alt="No" />
    </div>

    <br/>
    <div class="filter">
        <div><img style="margin-left: 0px;" <?php echo $html->includeImg("sortBy", "png"); ?> alt="No" /></div>
        <div><img <?php echo $html->includeImg("monMan", "png"); ?> alt="No" /></a></div>
        <div><img <?php echo $html->includeImg("monNgot", "png"); ?> alt="No" /></a></div>
        <div><img <?php echo $html->includeImg("comboXin", "png"); ?> alt="No" /></a></div>
        <div><img <?php echo $html->includeImg("priceUp", "png"); ?> alt="No" /></a></div>
        <div><img <?php echo $html->includeImg("priceDown", "png"); ?> alt="No" /></a></div>
        <div><input type="text" name="" id="" placeholder="Tìm kiếm đồ ăn yêu thích" /></div>
    </div>

    <div class="list-post">
        <?php foreach ($posts as $post): ?>
        <div class="card">
            <img <?php echo $html->includeImg("com-chay", "jpg"); ?> >
            <div class="text">
                <div class="price"><span><?php echo $post["Post"]["price"] ?> đ</span></div>
                <div class="name"><span><?php echo $post["Post"]["title"] ?></span></div>
            </div>
            <?php if ($post["Post"]["sale"] != 0): ?>
                <div class="sale"><span>Sale</span></div>
            <?php endif ?>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="pagination">
        <?php for ($i = 1; $i <= $totalPages; $i++):?>
            <?php if ($i == $currentPageNumber):?>
                <a class="active" ><?php echo $currentPageNumber?></a>
            <?php else: ?>
                <?php // echo $html->link($i,'posts/index/'.$i)?>
                <a href= <?php echo $html->linkSrc("posts", "index", $i)?>  > <?php echo $i; ?> </a>
            <?php endif?>
        <?php endfor?>
    </div>



</main>
</div>