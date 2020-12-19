<div class="admin_wrapper">
    <!-- left_sidebar -->
    <div class="left_sidebar">
        <ul>
            <li><a href=<?php echo $html->linkSrc("users", "index") ?>>Manger Users</a></li>
            <li><a href=<?php echo $html->linkSrc("categories", "index") ?>>Manger Categories</a></li>
            <li class="active"><a href=<?php echo $html->linkSrc("products", "index") ?>>Manger Products</a></li>
            <li><a href=<?php echo $html->linkSrc("orders", "index") ?>>Manger Orders</a></li>
        </ul>
    </div>
    <!--end left_sidebar -->

    <!-- admin_content -->
    <div class="admin_content">
        <div class="content">
            <h2 class="page_title">Thêm sản phẩm</h2>
            <form action=<?php echo $html->linkSrc("products", "add") ?> method="POST" class="login-form">
                <div class="left">
                    <label class="title" for="name_product">Tên</label>
                    <input type="text" name="name_product" class="register-input2" id="name_product">
                </div>
                <div class="right">
                    <label class="title">Loại sản phẩm</label>
                    <select name="category" class="register-input2">
                        <option value="category1">Category1</option>
                        <option value="category2">Category2</option>
                    </select>
                </div>
                <div>
                    <label class="title">Mô tả</label>
                    <textarea name="description" class="register-input2" rows="3" cols="15"></textarea>
                </div>
                <div class="left">
                    <label class="title" for="price">Giá gốc</label>
                    <input type="number" min="1" name="price" class="register-input2" id="price">
                </div>
                <div class="right">
                    <label class="title" for="price_sale">Giá sale</label>
                    <input type="number" min="0" name="price_sale" class="register-input2" id="price_sale">
                </div>
                <div>
                    <label class="title" for="name_product">Ảnh sản phẩm</label>
                    <input type="text" name="name_product" class="register-input2" id="name_product">
                </div>
                <input type="submit" value="Thêm">
            </form>

        </div>
    </div>
    <!-- end admin_content -->
</div>
</div>