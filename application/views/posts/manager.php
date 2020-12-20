<div class="admin_wrapper">
    <!-- left_sidebar -->
    <div class="left_sidebar">
        <ul>
            <li><a href=<?php echo $html->linkSrc("users", "manager") ?>>Manger Users</a></li>
            <li><a href=<?php echo $html->linkSrc("categories", "manager") ?>>Manger Categories</a></li>
            <li class="active"><a href=<?php echo $html->linkSrc("posts", "manager") ?>>Manger Posts</a></li>
            <li><a href=<?php echo $html->linkSrc("orders", "manager") ?>>Manger Orders</a></li>
        </ul>
    </div>
    <!--end left_sidebar -->

    <!-- admin_content -->
    <div class="admin_content">
        <div class="button">
            <a href=<?php echo $html->linkSrc("posts", "add") ?>>Thêm sản phẩm</a>
        </div>
        <div class="content">
            <h2 class="page_title">Quản lý sản phẩm</h2>
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
                    <th>
                        Giá tiền
                    </th>
                    <th colspan="3">
                        Hoạt động
                    </th>
                </thead>
                <tbody>
                    <?php
                    $counter = 1;
                    foreach ($infoPost as $post): ?>
                    <tr>
                        <td> <?php echo $counter; $counter++; ?> </td>
                        <td> <?php echo $post["Post"]["title"]; ?> </td>
                        <td><?php echo $post["Category"]["name"]; ?></td>
                        <td><?php echo $post["Post"]["price"]; ?></td>
                        <td><?php echo $post["Post"]["sale"]; ?></td>
<!--                        <td>-->
<!--                            <a href="" class="edit">Sửa</a>-->
<!--                        </td>-->
                        <td><a href="" class="delete">Xóa</a></td>
<!--                        <td><a href="" class="publish">Ẩn/Hiện</a></td>-->
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- end admin_content -->
</div>
</div>