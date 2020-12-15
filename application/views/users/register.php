<div id="main">
    <img <?php echo $html->includeImg("nen1", "jpg"); ?> alt="No" class="image_main" />
    <card style=" top: 40%;left: 15%;">
        <form class="login-form" autocomplete="off" action="#">
            <p class="title" style="text-align: center;">PingPong xin chào!</p>

            <input type="text" name="name" style="width:45%; float: left; box-sizing: border-box;" placeholder="Họ và tên" />
            <input type="text" name="phone" style="width:45%; float: right; box-sizing: border-box;" placeholder="SĐT" />

            <input type="text" name="address" style="width:100%;" placeholder="Địa chỉ" />
            <input type="text" name="email" style="width:100%;" placeholder="Email" />
            <input type="text" name="username" style="width:100%;" placeholder="Tên đăng nhập" />


            <input type="password" name="password" style="width:45%; float: left; box-sizing: border-box;" placeholder="Mật khẩu" />
            <input type="password" name="resetPassword" style="width:45%; float: right; box-sizing: border-box;" placeholder="Xác nhận mật khẩu" />


            <div class="button">
                <button>Đăng ký</button>
            </div>
        </form>
    </card>
</div>
</div>