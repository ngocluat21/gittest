<div class="raw mb">
    <div class="boxtrai mr">
        <div class="raw mb">
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="raw boxcontent formdsloai cart">

                <table>
                    <?php viewcart(1) ?>
                </table>
                
            </div>
        </div>

        <div class="raw mb formdsloai">
            <a href="index.php?act=bill"><input type="button" value="Đồng ý đặt hàng"></a>
            <a href="index.php?act=delcart"><input type="button" value="Xóa giỏ hàng"></a>
            <a href="index.php?act=index.php"><input type="button" value="Tiếp tục mua hàng"></a>
        </div>

    </div>
    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>
</div>