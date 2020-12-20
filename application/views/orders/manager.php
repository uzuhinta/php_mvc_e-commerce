<div class="admin_wrapper">
    <!-- left_sidebar -->
    <div class="left_sidebar">
        <ul>
            <li><a href=<?php echo $html->linkSrc("users", "manager") ?>>Manger Users</a></li>
            <li><a href=<?php echo $html->linkSrc("categories", "manager") ?>>Manger Categories</a></li>
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
                        Tên sản phẩm
                    </th>
                    <th>
                        Loại sản phẩm
                    </th>
                    <th>
                        Giá tiền
                    </th>
                    <th colspan="3">
                        Hoạt động
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Cơm cháy</td>
                        <td>Cơm</td>
                        <td>20.000 đ</td>
                        <td>
                            <a href="" class="edit">Sửa</a>
                        </td>
                        <td><a href="" class="delete">Xóa</a></td>
                        <td><a href="" class="publish">Ẩn/Hiện</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Cơm cháy</td>
                        <td>Cơm</td>
                        <td>20.000 đ</td>
                        <td><a href="" class="edit">Sửa</a></td>
                        <td><a href="" class="delete">Xóa</a></td>
                        <td><a href="" class="publish">Ẩn/Hiện</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Cơm cháy</td>
                        <td>Cơm</td>
                        <td>20.000 đ</td>
                        <td><a href="" class="edit">Sửa</a></td>
                        <td><a href="" class="delete">Xóa</a></td>
                        <td><a href="" class="publish">Ẩn/Hiện</a></td>
                    </tr>
                </tbody>
                <div class="pagination">
                    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                        <?php if ($i == $currentPageNumber) : ?>
                            <a class="active"><?php echo $currentPageNumber ?></a>
                        <?php else : ?>
                            <?php
                            ?>
                            <a href=<?php echo $html->linkSrc("orders", "manager", $i) ?>> <?php echo $i; ?> </a>
                        <?php endif ?>
                    <?php endfor ?>
                </div>
            </table>
        </div>
    </div>
    <!-- end admin_content -->
</div>
</div>