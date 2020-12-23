<?php $counter = 1; ?>

<div class="admin_wrapper">
    <!-- left_sidebar -->
    <div class="left_sidebar">
        <ul>
            <li><a href=<?php echo $html->linkSrc("users", "manager") ?>>Manger Users</a></li>
            <li><a href=<?php echo $html->linkSrc("posts", "manager") ?>>Manger Posts</a></li>
            <li class="active"><a href=<?php echo $html->linkSrc("orders", "manager") ?>>Manger Orders</a></li>
            <li><a href=<?php echo $html->linkSrc("blogs", "manager") ?>>Manger Blogs</a></li>
        </ul>
    </div>
    <!--end left_sidebar -->

    <!-- admin_content -->
    <div class="admin_content">
        <div class="content">
            <h2 class="page_title">Chi tiết đơn hàng</h2>
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
                <?php foreach ($infos as $info) : ?>
                    <?php if (($info["Post"]["sale"]) == 0) {
                        $price =  ($info["Post"]["price"]);
                    } else {
                        $price = ($info["Post"]["sale"]);
                    } ?>
                    <?php $number = $info["orders_posts"]["number"]; ?>
                    <tr>
                        <td> <?php echo $counter;
                            $counter++; ?></td>
                        <td><?php echo ($info["Post"]["title"]); ?></td>
                        <td>
                            <?php echo $number; ?>
                        </td>
                        <td> <?php echo $price; ?> đ</td>
                        <td> <?php echo $number * $price; ?> đ</td>
                    </tr>

                <?php endforeach; ?>
                </tbody>
            </table>
            <p class="title" style="text-align: center;font-size: 32px; margin-top: 16px;">Thành tiền: <?php echo $total; ?> đ</p>
        </div>
    </div>
    <!-- end admin_content -->
</div>
</div>