<div class="raw mb">
    <div class="boxtrai mr">
        <div class="raw mb">
            <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="raw boxcontent formtaikhoan">

                <form action="index.php?act=dangky" method="post">
                    <div class="raw mb10">
                        Tên đăng ký <br>
                        <input type="text" name="user">
                    </div>
                    <div class="raw mb10">
                        Email <br>
                        <input type="email" name="email">   
                    </div>
                    <div class="raw mb10">
                        Mật khẩu <br>
                        <input type="password" name="pass"> 
                    </div>
                    <div class="raw mb10">
                        <input type="submit" name="dangky" value="Đăng ký">
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