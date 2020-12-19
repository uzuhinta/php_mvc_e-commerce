<div class="admin_wrapper">
    <!-- left_sidebar -->
    <div class="left_sidebar">
        <ul>
            <li class="active"><a href=<?php echo $html->linkSrc("users", "index") ?>>Manger Users</a></li>
            <li><a href=<?php echo $html->linkSrc("categories", "index") ?>>Manger Categories</a></li>
            <li><a href=<?php echo $html->linkSrc("products", "index") ?>>Manger Products</a></li>
            <li><a href=<?php echo $html->linkSrc("orders", "index") ?>>Manger Orders</a></li>
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
                        Quyền
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
                        <td>
                            <a href="" class="edit">Sửa</a>
                        </td>
                        <td><a href="" class="delete">Xóa</a></td>
                        <td><a href="" class="publish">Mở/Khóa</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Cơm cháy</td>
                        <td>Cơm</td>
                        <td><a href="" class="edit">Sửa</a></td>
                        <td><a href="" class="delete">Xóa</a></td>
                        <td><a href="" class="publish">Mở/Khóa</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Cơm cháy</td>
                        <td>Cơm</td>
                        <td><a href="" class="edit">Sửa</a></td>
                        <td><a href="" class="delete">Xóa</a></td>
                        <td><a href="" class="publish">Mở/Khóa</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- end admin_content -->
</div>
</div>