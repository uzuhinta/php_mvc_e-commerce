<div id="main">
    <img <?php echo $html->includeImg("nen1", "jpg"); ?> alt="No" class="image_main" />
    <card style=" top: 20%;left: 15%;">
        <form class="login-form" autocomplete="off" action=<?php echo $html->linkSrc("users", "login") ?> method="POST">
            <p class="title">Đăng nhập ngay mua liền tay</p>
            <input type="text" name="name" class="register-input2" placeholder="Username" />
            <div class="input-icon">
                <input type="password" name="password" class="register-input2" placeholder="Password" />
            </div>

            <div class="button">
                <a href="#" class="forgot">Quên mật khẩu?</a>
                <div class="type_submit"><input type="submit" value="Đăng nhập"></div>
            </div>
            <?php if (isset($login) == true) {
                var_dump($login);
            }; ?>
        </form>
    </card>
</div>
</div>