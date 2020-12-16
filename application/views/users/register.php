<div id="main">
    <img <?php echo $html->includeImg("nen1", "jpg"); ?> alt="No" class="image_main" />
    <card style=" top: 16%;left: 15%;">
        <form class="login-form" style="padding-bottom: 0px" autocomplete="off" action=<?php echo $html->linkSrc("users", "register") ?> method="post">
            <p class="title" style="text-align: center;">PingPong xin chào!</p>

            <input type="text" name="name" class="register-input1" placeholder="Họ và tên" />
            <input type="text" name="phone" class="register-input1" style="margin-left:2.9%;" placeholder="SĐT" />

            <input type="text" name="address" class="register-input2" placeholder="Địa chỉ" />
            <input type="text" name="email" class="register-input2" placeholder="Email" />
            <input type="text" name="username" class="register-input2" placeholder="Tên đăng nhập" />

            <input type="password" name="password" class="register-input1" placeholder="Mật khẩu" />
            <input type="password" name="resetPassword" class="register-input1" style="margin-left:2.9%;" placeholder="Xác nhận mật khẩu" />

            <input type="submit" value="Đăng ký" style="margin: 0 auto; padding-bottom: 15px">
<!--            <div class="button">-->
<!--                <button>Đăng ký</button>-->
<!--            </div>-->
        </form>
    </card>
</div>
</div>