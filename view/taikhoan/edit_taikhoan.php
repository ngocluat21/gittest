<div class="raw mb">
    <div class="boxtrai mr">
        <div class="raw mb">
            <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
            <div class="raw boxcontent formtaikhoan">
                <?php
                    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);
                    }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="raw mb10">
                        Tên đăng ký <br>
                        <input type="text" name="user" value="<?=$user?>">
                    </div>

                    <div class="raw mb10">
                        Email <br>
                        <input type="email" name="email" value="<?=$email?>">
                    </div>

                    <div class="raw mb10">
                        Mật khẩu <br>
                        <input type="password" name="pass" value="<?=$pass?>">
                    </div>

                    <div class="raw mb10">
                        Địa chỉ <br>
                        <input type="text" name="address" value="<?=$address?>">
                    </div>

                    <div class="raw mb10">
                        Số điện thoại <br>
                        <input type="text" name="tel" value="<?=$tel?>">
                    </div>
                    
                    <div class="raw mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php 
                        if (isset($thongbao) && ($thongbao != "")) {
                            echo $thongbao;
                        } 
                    ?>
                </h2>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>
</div>