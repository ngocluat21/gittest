<div class="raw mb">
    <div class="boxtrai mr">
        <div class="raw mb">
            <div class="boxtitle">QUÊN MẬT KHẨU</div>
            <div class="raw boxcontent formtaikhoan">
                <form action="index.php?act=quenmk" method="post">
                    <div class="raw mb10">
                        Email <br>
                        <input type="email" name="email">
                    </div>
                    
                    <div class="raw mb10">
                        <input type="submit" name="guiemail" value="Gửi">
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