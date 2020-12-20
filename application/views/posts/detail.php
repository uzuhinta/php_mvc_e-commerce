<?php $img = explode('.', $post["Post"]["imgname"]);
    var_dump($post);
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
                    <a href="#" class="button"><i class="fas fa-cart-plus"></i> &nbsp;Thêm vào giỏ hàng</a>
                </div>
            </div>

        </div>
    </div>

</div>

<div class="feedback">
    <form class="login-form">
        <input type="text" name="address" class="register-input2" placeholder="Bạn có thích sản phẩm này không?" />
        <div class="type_submit"><input type="submit" value="Đánh giá"></div>
    </form>
    <div>
        <table>
            <tbody>
                <tr>
                    <td>Hằng Vũ</td>
                    <td>Cơm cháy này ngon lắm, lần sau mình sẽ ủng hộ tiếp</td>
                </tr>
                <tr>
                    <td>Bá Quân</td>
                    <td>Cơm cháy khô gà phô mai lá chanh là một bản hoà ca hoàn hảo, là sự kết hợp “bùng nổ” giữa miếng cơm giòn rụm, vị khô gà mằn mặn và phô mai béo ngậy, tạo nên vẻ bề ngoài bắt mắt và hương vị khó có thể chối từ.</td>
                </tr>
                <tr>
                    <td>Minh Nhật</td>
                    <td>Cơm cháy</td>
                </tr>
                <tr>
                    <td>Mèo béo</td>
                    <td>Cơm cháy</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>