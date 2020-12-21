<?php $counter = 1; ?>

<div class="admin_wrapper">
    <!-- left_sidebar -->
    <div class="left_sidebar">
        <ul>
            <li><a href=<?php echo $html->linkSrc("users", "manager") ?>>Manger Users</a></li>
<!--            <li><a href=<?php //echo $html->linkSrc("categories", "manager") ?> Manger Categories</a></li>-->
            <li><a href=<?php echo $html->linkSrc("posts", "manager") ?>>Manger Posts</a></li>
            <li class="active"><a href=<?php echo $html->linkSrc("orders", "manager") ?>>Manger Orders</a></li>
            <li><a href=<?php echo $html->linkSrc("blogs", "manager") ?>>Manger Blogs</a></li>
        </ul>
    </div>
    <!--end left_sidebar -->

    <!-- admin_content -->
    <div class="admin_content">
        <div class="content">
            <h2 class="page_title">Quản lý đơn hàng</h2>
            <table>
                <thead>
                    <th>
                        STT
                    </th>
                    <th>
                        Tên người mua
                    </th>
                    <th>
                        Số tiền
                    </th>
                    <th>
                        Trạng thái
                    </th>
                    <th colspan="3">
                        Hoạt động
                    </th>
                </thead>
                <tbody>
                    <?php foreach ($carts as $cart): ?>
                    <tr>
                        <td> <?php echo $counter; $counter++; ?></td>
                        <td><?php if(isset($cart["Username"][0]["User"]["name"])){
                            echo ($cart["Username"][0]["User"]["name"]);
                            }; ?></td>
                        <td><?php echo $cart["Order"]["price"]; ?></td>
                        <td><?php if($cart["Order"]["temp"] == 1){ echo "Giỏ hàng tạm thời";}

                            if($cart["Order"]["temp"] == 0){ echo "Đă đặt hàng";}
                        ?></td>
                        <td>
                            <a href="" class="edit">Sửa</a>
                        </td>
                        <td><a href="" class="delete">Xóa</a></td>
                        <td><a href="" class="publish">Ẩn/Hiện</a></td>
                    </tr>
                    <?php endforeach; ?>

                </tbody>
<!--                <div class="pagination">-->
<!--                    --><?php //for ($i = 1; $i <= $totalPages; $i++) : ?>
<!--                        --><?php //if ($i == $currentPageNumber) : ?>
<!--                            <a class="active">--><?php //echo $currentPageNumber ?><!--</a>-->
<!--                        --><?php //else : ?>
<!--                            --><?php
//                            ?>
<!--                            <a href=--><?php //echo $html->linkSrc("orders", "manager", $i) ?><!--> --><?php //echo $i; ?><!-- </a>-->
<!--                        --><?php //endif ?>
<!--                    --><?php //endfor ?>
<!--                </div>-->
            </table>
        </div>
    </div>
    <!-- end admin_content -->
</div>
</div>