<div class="admin_wrapper">
    <!-- left_sidebar -->
    <div class="left_sidebar">
        <ul>
            <li><a href=<?php echo $html->linkSrc("users", "manager") ?>>Manger Users</a></li>
            <li class="active"><a href=<?php echo $html->linkSrc("posts", "manager") ?>>Manger Posts</a></li>
            <li><a href=<?php echo $html->linkSrc("orders", "manager") ?>>Manger Orders</a></li>
            <li><a href=<?php echo $html->linkSrc("blogs", "manager") ?>>Manger Blogs</a></li>
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
                    foreach ($infoPost as $post) : ?>
                        <tr>
                            <td> <?php echo $counter;
                                    $counter++; ?> </td>
                            <td> <?php echo $post["Post"]["title"]; ?> </td>
                            <td><?php echo $post["Category"]["name"]; ?></td>
                            <td><?php echo $post["Post"]["price"]; ?></td>
                            <td><?php echo $post["Post"]["sale"]; ?></td>
                            <td>
                                <a href=<?php echo $html->linkSrc("posts", "edit", $post["Post"]["id"]) ?> class="edit">Sửa</a>
                            </td>
                            <td><a href=<?php echo $html->linkSrc("posts", "delete", $post["Post"]["id"]) ?> class="delete">Xóa</a></td>
                            <!--                        <td><a href="" class="publish">Ẩn/Hiện</a></td>-->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <div class="pagination">
                    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                        <?php if ($i == $currentPageNumber) : ?>
                            <a class="active"><?php echo $currentPageNumber ?></a>
                        <?php else : ?>
                            <?php
                            ?>
                            <a href=<?php echo $html->linkSrc("posts", "manager", $i) ?>> <?php echo $i; ?> </a>
                        <?php endif ?>
                    <?php endfor ?>
                </div>
            </table>
        </div>
    </div>
    <!-- end admin_content -->
</div>
</div>