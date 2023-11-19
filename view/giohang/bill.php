<div class="raw mb">
    <div class="boxtrai mr">
        <form action="index.php?act=billconfirm" method="post">
            <div class="raw mb">
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="raw boxcontent billform formtaikhoan">
                    
                    <table>
                        <?php
                            if (isset($_SESSION['user'])) {
                                $name = $_SESSION['user']['user'];
                                $address = $_SESSION['user']['address'];
                                $email = $_SESSION['user']['email'];
                                $tel = $_SESSION['user']['tel'];
                            } else {
                                $name = "";
                                $address = "";
                                $email = "";
                                $tel = "";
                            }
                        ?>
                        <tr>
                            <td>Người đặt hàng: </td>
                            <td><input type="text" name="name" value="<?=$name;?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ: </td>
                            <td><input type="text" name="address" value="<?=$address;?>"></td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td><input type="text" name="email" value="<?=$email;?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại: </td>
                            <td><input type="text" name="tel" value="<?=$tel;?>"></td>
                        </tr>
                    </table>

                </div>
            </div>

            <div class="raw mb">
                <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="raw boxcontent">

                    <table class="checkboxtb">
                        <tr>
                            <td><input type="radio" name="pttt" checked> Trả tiền khi nhận hàng</td>
                            <td><input type="radio" name="pttt"> Chuyển khoản ngân hàng</td>
                            <td><input type="radio" name="pttt"> Thanh toán online</td>
                        </tr>
                    </table>

                </div>
            </div>

            <div class="raw mb">
                <div class="boxtitle">Thông tin giỏ hàng</div>
                <div class="raw boxcontent formdsloai cart">

                    <table>
                        <?php viewcart(0); ?>
                    </table>
                    
                </div>
            </div>

            <div class="raw mb">
                <input type="submit" name="dongydathang" value="Đồng ý đặt hàng">
            </div>
            
        </form>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>