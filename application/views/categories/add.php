<div class="admin_wrapper">
    <!-- left_sidebar -->
    <div class="left_sidebar">
        <ul>
            <li><a href=<?php echo $html->linkSrc("users", "index") ?>>Manger Users</a></li>
            <li class="active"><a href=<?php echo $html->linkSrc("categories", "index") ?>>Manger Categories</a></li>
            <li><a href=<?php echo $html->linkSrc("products", "index") ?>>Manger Products</a></li>
            <li><a href=<?php echo $html->linkSrc("orders", "index") ?>>Manger Orders</a></li>
        </ul>
    </div>
    <!--end left_sidebar -->

    <!-- admin_content -->
    <div class="admin_content">
        <div class="button">
            <a href=<?php echo $html->linkSrc("categories", "index") ?>>Quản lý loại sp</a>
        </div>
        <div class="content">
            <h2 class="page_title">Thêm loại sản phẩm</h2>
            <form action=<?php echo $html->linkSrc("categories", "add") ?> method="POST" class="login-form">
                <label class="title">Tên</label>
                <input type=" text" name="name_category" class="register-input2">
                <input type="submit" value="Thêm">
            </form>

        </div>
    </div>
    <!-- end admin_content -->
</div>
</div>