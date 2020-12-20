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
        <div class="content">
            <h2 class="page_title">Thêm sản phẩm</h2>
            <form action=<?php echo $html->linkSrc("posts", "add") ?> method="POST" class="login-form" enctype="multipart/form-data">
                <div class="left">
                    <label class="title" for="name_product">Tên</label>
                    <input type="text" name="name_product" class="register-input2" id="name_product" required>
                </div>
                <div class="right">
                    <label class="title">Loại sản phẩm</label>
                    <select name="category" class="register-input2" required>
                        <?php foreach ($infoCategory as $info) : ?>
                            <option value=<?php echo '"' . $info["Category"]["id"] . '"' ?>> <?php echo $info["Category"]["name"] ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="title">Mô tả</label>
                    <textarea name="description" class="register-input2" rows="3" cols="15" required></textarea>
                </div>
                <div class="left">
                    <label class="title" for="price">Giá gốc</label>
                    <input type="number" min="1" name="price" class="register-input2" id="price" required>
                </div>
                <div class="right">
                    <label class="title" for="price_sale">Giá sale</label>
                    <input type="number" min="0" name="price_sale" class="register-input2" id="price_sale">
                </div>
                <div class="upload_file">
                    <label class="title" for="fileToUpload" required>Ảnh sản phẩm</label>
                    <!--                    <div class="file">-->
                    <!--                        <label class="file_product" for="file_input"> <i class="fas fa-upload"></i>&nbsp;Chọn ảnh...</label>-->
                    <!--                        <span style="color: red">-->
                    <!--                            <strong>Chọn file: </strong>-->
                    <!--                            <span id="file_name">None</span>-->
                    <!--                        </span>-->
                    <!--                    </div>-->
                    <!--                    <input type="file" name="fileToUpload" id="file_input">-->
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <div class="type_submit"><input type="submit" value="Thêm"></div>
            </form>

        </div>
    </div>
    <!-- end admin_content -->
</div>
</div>