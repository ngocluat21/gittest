<div class="raw mb">
    <div class="boxtitle">
        Tài khoản
    </div>
    <div class="boxcontent formtaikhoan">
        <?php 
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
        ?>
            <div class="raw mb10">
                Xin chào <strong><?=$user?></strong> <br>
            </div>
            <div class="raw mb10">
                <li>
                    <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                </li>
                <li>
                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                </li>
                <?php if($role==1) {?>
                    <li>
                        <a href="admin/index.php">Đăng nhập admin</a>
                    </li>
                <?php } ?>
                <li>
                    <a href="index.php?act=thoat">Logout</a>
                </li>
            </div>

        <?php        
            } else {
        ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="raw mb10">
                    Tên đăng nhập <br>
                    <input type="text" name="user">
                </div>
                <div class="raw mb10">
                    Mật khẩu <br>
                    <input type="password" name="pass">
                </div>
                <div class="raw mb10">
                    <input type="checkbox" name="remember"> Ghi nhớ tài khoản?
                </div>
                <div class="raw mb10">
                    <input type="submit" name="dangnhap" value="Đăng nhập">
                </div>
            </form>
            <li>
                <a href="index.php?act=quenmk">Quên mật khẩu</a>
            </li>
            <li>
                <a href="index.php?act=dangky">Đăng ký thành viên</a>
            </li>
        <?php } ?>
    </div>
</div>
<div class="raw mb ">
    <div class="boxtitle">
        Danh mục
    </div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
                foreach ($dsdm as $dm) {
                    extract($dm);
                    $linkdm = "index.php?act=sanpham&iddm=".$id;
                    echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                }
            ?>
        </ul>
    </div>
    <div class="boxfooter">
        <form action="index.php?act=sanpham" method="post" class="searbox formtaikhoan">
            <input type="text" name="kyw" class="fullwidth">
            <input type="submit" name="timkiem" value="Tìm kiếm">
        </form>
    </div>
</div>
<div class="raw mb">
    <div class="boxtitle">
        Top 10 yêu thích
    </div>
    <div class="raw boxcontent">

        <?php
            foreach ($dstop10 as $sptop10) {
                extract($sptop10);
                $hinh = $img_path.$img;
                $linksp = "index.php?act=sanphamct&idsp=".$id;
                echo '  <div class="raw mb10 top10">
                            <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                            <a href="'.$linksp.'">'.$name.'</a>
                        </div>';
            }
        ?>

    </div>
</div>