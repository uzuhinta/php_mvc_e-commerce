<div class="admin_wrapper">
    <!-- left_sidebar -->
    <div class="left_sidebar">
        <ul>
            <li><a href=<?php echo $html->linkSrc("users", "manager") ?>>Manger Users</a></li>
            <li><a href=<?php echo $html->linkSrc("posts", "manager") ?>>Manger Posts</a></li>
            <li><a href=<?php echo $html->linkSrc("orders", "manager") ?>>Manger Orders</a></li>
            <li class="active"><a href=<?php echo $html->linkSrc("blogs", "manager") ?>>Manger Blogs</a></li>
        </ul>
    </div>
    <!--end left_sidebar -->

    <!-- admin_content -->
    <div class="admin_content">
        <div class="button">
            <a href=<?php echo $html->linkSrc("blogs", "add") ?>>Thêm blog</a>
        </div>
        <div class="content">
            <h2 class="page_title">Quản lý blogs</h2>
            <table>
                <thead>
                    <th>
                        STT
                    </th>
                    <th>
                        Tiêu đề
                    </th>
                    <th>
                        Mô tả
                    </th>
                    <th colspan="3">
                        Hoạt động
                    </th>
                </thead>
                <tbody>
                    <?php
                    $index = 1;
                    foreach ($blogs as $blog) : ?>
                        <tr>
                            <td><?php echo  $index;
                                $index++; ?>1</td>
                            <td><?php echo  $blog["Blog"]["title"]; ?></td>
                            <td><?php echo  $blog["Blog"]["content"]; ?></td>
                            <td>
                                <a href="" class="edit">Sửa</a>
                            </td>
                            <td><a href=<?php echo $html->linkSrc("blogs", "delete", $blog["Blog"]["id"]) ?> class="delete">Xóa</a></td>
                            <td><a href=<?php echo $html->linkSrc("blogs", "detail", $blog["Blog"]["id"]) ?> class="publish">Xem chi tiết</a></td>
                        </tr>

                    <?php endforeach ?>
                </tbody>
                <div class="pagination">
                    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                        <?php if ($i == $currentPageNumber) : ?>
                            <a class="active"><?php echo $currentPageNumber ?></a>
                        <?php else : ?>
                            <?php
                            ?>
                            <a href=<?php echo $html->linkSrc("blogs", "manager", $i) ?>> <?php echo $i; ?> </a>
                        <?php endif ?>
                    <?php endfor ?>
                </div>
            </table>
        </div>
    </div>
    <!-- end admin_content -->
</div>
</div>