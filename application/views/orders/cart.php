<main>
    <div class="header-bottom">
        <?php if ($total != 0): ?>
        <div class="login-form" style="max-width: 55rem;">
            <p class="title" style="text-align: center;">Thông tin</p>
            <br>
            <form>

                <input type="text" name="name" class="register-input1" placeholder="Mèo béo" />
                <input type="text" name="phone" class="register-input1" style="margin-left:2.9%;" placeholder="0353253464" />

                <input type="text" name="address" class="register-input2" placeholder="Ngõ tự do" />
<!--                <input type="text" name="note" class="register-input2" placeholder="Ghi chú: cho thêm nhiều thịt nhé" />-->

            </form>

        </div>
        <p class="title" style="text-align: center; font-size: 32px;">Giỏ hàng có gì?</p>
        <table>
            <thead>
                <th>
                    STT
                </th>
                <th>
                    Tên sản phẩm
                </th>
                <th>
                    Số lượng
                </th>
                <th>
                    Giá tiền
                </th>
                <th>
                    Thành tiền
                </th>
            </thead>
            <tbody>
                <?php $counter = 1; ?>
                <?php  foreach ($infos as $info): ?>
                    <?php if(($info["Post"]["sale"]) == 0){ $price =  ($info["Post"]["price"]);}else{$price = ($info["Post"]["sale"]);} ?>
                    <?php $number = $info["orders_posts"]["number"]; ?>
                <tr>
                    <td> <?php echo $counter;  $counter++;?></td>
                    <td><?php echo ($info["Post"]["title"]); ?></td>
                    <td>
                        <?php echo $number; ?>
                    </td>
                    <td> <?php echo $price; ?> đ</td>
                    <td> <?php echo $number * $price;?> đ</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p class="title" style="text-align: center;font-size: 32px; margin-top: 16px;">Thành tiền: <?php echo $total;?> đ</p>
        <input type="Submit" value="Đặt hàng" style="margin-left: 50%; transform: translateX(-50%)">
        <?php else: ?>
            <p class="title" style="text-align: center; margin: 190px auto;">Vui lòng đặt hàng?</p>
        <?php endif; ?>

    </div>
</main>
</div>