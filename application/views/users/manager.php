<div class="admin_wrapper">
    <!-- left_sidebar -->
    <div class="left_sidebar">
        <ul>
            <li class="active"><a href=<?php echo $html->linkSrc("users", "manager") ?>>Manger Users</a></li>
            <li><a href=<?php echo $html->linkSrc("posts", "manager") ?>>Manger Posts</a></li>
            <li><a href=<?php echo $html->linkSrc("orders", "manager") ?>>Manger Orders</a></li>
            <li><a href=<?php echo $html->linkSrc("blogs", "manager") ?>>Manger Blogs</a></li>
        </ul>
    </div>
    <!--end left_sidebar -->

    <!-- admin_content -->
    <div class=" admin_content">
        <div class="content">
            <h2 class="page_title">Quản lý người dùng</h2>
            <table>
                <thead>
                    <th>
                        STT
                    </th>
                    <th>
                        Tên
                    </th>
                    <th>
                        Số điện thoại
                    </th>
                    <th>
                        Địa chỉ
                    </th>
                    <th>
                        Quyền
                    </th>
                    <th colspan="1">
                        Hoạt động
                    </th>
                </thead>
                <tbody>
                    <?php
                    $counter = 1;
                    foreach ($users as $user) : ?>
                        <tr>
                            <td> <?php echo $counter;
                                    $counter++; ?> </td>
                            <td> <?php echo $user["User"]["nameLogin"]; ?> </td>
                            <td><?php echo $user["User"]["phone"]; ?></td>
                            <td><?php echo $user["User"]["address"]; ?></td>
                            <td><?php echo $user["User"]["role"]; ?></td>

                            <td><a href=<?php echo $html->linkSrc("users", "delete", $user["User"]["id"]) ?> class="delete">Xóa</a></td>
                            <!-- <td><a href="" class="publish">Ẩn/Hiện</a></td> -->
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
                            <a href=<?php echo $html->linkSrc("users", "manager", $i) ?>> <?php echo $i; ?> </a>
                        <?php endif ?>
                    <?php endfor ?>
                </div>
            </table>
        </div>
    </div>
    <!-- end admin_content -->
</div>
</div>