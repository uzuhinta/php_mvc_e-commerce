<div id="main">
    <img <?php echo $html->includeImg("nen1", "jpg"); ?> alt="No" class="image_main" />
    <card style=" top: 16%;left: 15%;">
        <form class="login-form" style="padding-bottom: 0px" autocomplete="off" action=<?php echo $html->linkSrc("users", "edit") ?> method="POST">
            <p class="title" style="text-align: center;">Cập nhật thông tin!</p>

            <input type="text" name="name" class="register-input1" placeholder="Họ và tên" value="<?php echo $user["User"]["name"]; ?>" required />
            <input type="text" name="phone" class="register-input1" style="margin-left:2.9%;" placeholder="SĐT" value="<?php echo $user["User"]["phone"]; ?>" register />
            <input type="text" name="address" class="register-input2" placeholder="Địa chỉ" value="<?php echo $user["User"]["address"]; ?>" required />

            <input type="text" name="username" class="register-input2" placeholder="Tên đăng nhập" value="<?php echo $user["User"]["nameLogin"]; ?>" required />
            <input type="password" name="password" class="register-input1" placeholder="Mật khẩu" value="" required />
            <input type="password" name="typepassword" class="register-input1" style="margin-left:2.9%;" placeholder="Xác nhận mật khẩu" required />

            <div class="type_submit"><input type="submit" value="Cập nhật"></div>
        </form>
        <?php
        if (isset($message)) {
            echo $message;
        }
        ?>
    </card>

</div>
</div>