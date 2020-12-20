<div id="main">
    <img <?php echo $html->includeImg("nen1", "jpg"); ?> alt="No" class="image_main" />
    <card style=" top: 20%;left: 15%; width:70%;">
        <form class="login-form" autocomplete="off" action=<?php echo $html->linkSrc("users", "change_pass") ?> method="POST">
            <p class="title">Đổi mật khẩu</p>
            <input type="password" name="old_password" class="register-input2" placeholder="Mật khẩu cũ" required />
            <input type="password" name="password" class="register-input2" placeholder="Mật khẩu mới" required />
            <div class="input-icon">
                <input type="password" name="reset_password" class="register-input2" placeholder="Nhắc lại mật khẩu mới" required />
            </div>
            <div class="type_submit"><input type="submit" value="Đổi mật khẩu"></div>
        </form>
        <?php
        if (isset($message)) {
            echo $message;
        }
        ?>
    </card>
</div>
</div>