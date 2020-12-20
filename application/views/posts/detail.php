<?php $img = explode('.', $post["Post"]["imgname"]);
?>
<div class="detail_main">
    <div class="detail">
        <div class="card_detail">
            <div class="images">
<!--                <a href="#">-->
                    <img <?php echo $html->includeImg("$img[0]", $img[1]); ?> >
<!--                </a>-->
            </div>
            <div class="info">
                <h1> <?php echo $post["Post"]["title"] ?></h1>
                <div class="price">
                    <?php if ($post["Post"]["sale"] != 0): ?>
                        <h3 class="price-begin"> <?php echo $post["Post"]["price"] ?> đ</h3>
                        <h3> <?php echo $post["Post"]["sale"] ?> đ</h3>
                    <?php else: ?>
                        <h3> <?php echo $post["Post"]["price"] ?> đ</h3>
                    <?php endif; ?>
                </div>
                <div class="info-content">
                    <h3>Mô tả</h3>
                    <p>
                        <?php echo $post["Post"]["description"] ?>
                    </p>
                </div>
                <div class="buttons">
                    <a href=<?php echo $html->linkSrc("orders", "add", $post["Post"]["id"]) ?> class="button"><i class="fas fa-cart-plus"></i> &nbsp;Thêm vào giỏ hàng</a>
                </div>
            </div>

        </div>
    </div>

</div>

<div class="feedback">
    <form class="login-form" method="post" action=<?php echo $html->linkSrc("feedbacks", "add", $post["Post"]["id"]) ?>>
        <input type="text" name="content" class="register-input2" placeholder="Bạn có thích sản phẩm này không?" />
        <div class="type_submit"><input type="submit" value="Đánh giá"></div>
    </form>
    <div>
        <table>
            <tbody>
                <?php if($feedback != null) : ?>
                    <?php foreach ($feedback as $value): ?>
                        <tr>
                            <td> <?php echo $value["User"]["name"] ?> </td>
                            <td>  <?php echo $value["Feedback"]["content"] ?> </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td></td>
                        <td> Chưa có bình luận cho bài viết này!</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
</div>