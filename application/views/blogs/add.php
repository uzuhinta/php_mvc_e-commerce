<!-- <?php if (isset($message)) {
            echo '<script language="javascript">';
            echo 'alert("Thêm thành công")';
            echo '</script>';
        } ?>
 -->

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
        <div class="content">
            <h2 class="page_title">Thêm blog</h2>
            <form action=<?php echo $html->linkSrc("blogs", "add"); ?> method="POST" class="login-form" enctype="multipart/form-data">
                <div>
                    <label class="title" for="title_blog">Tên</label>
                    <input type="text" name="title_blog" class="register-input2" id="title_blog" required>
                </div>
                <div>
                    <label class="title">Mô tả</label>
                    <textarea name="description" class="register-input2" rows="7" cols="15" required></textarea>
                </div>
                <div class="upload_file">
                    <!-- <label class="title" for="fileToUpload" required>Ảnh sản phẩm</label> -->
                    <div class="file">
                        <input type="file" id="file_input" name="file_input">
                        <label class="file_product" for="file_input" required> <i class="fas fa-upload"></i>&nbsp;Chọn ảnh...</label>
                        <span style="color: red">
                            <strong>Chọn file: </strong>
                            <span id="file_name">None</span>
                        </span>
                        <script>
                            let inputFile = document.getElementById("file_input");
                            let fileNameField = document.getElementById("file_name");
                            inputFile.addEventListener('change', function(event) {
                                let uploadedFileName = event.target.files[0].name;
                                fileNameField.textContent = uploadedFileName;
                            })
                        </script>
                    </div>

                    <!-- <input type="file" name="fileToUpload" id="fileToUpload"> -->
                </div>
                <div class="type_submit"><input type="submit" value="Thêm"></div>
            </form>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
        </div>
    </div>
    <!-- end admin_content -->
</div>
</div>