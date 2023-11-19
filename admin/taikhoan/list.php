<div class="raw">
    <div class="raw formtitle">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="raw formcontent">
        <div class="raw mb10 formdsloai">

            <table>
                <tr>
                    <th></th>
                    <th>MÃ TÀI KHOẢN</th>
                    <th>TÊN ĐĂNG NHẬP</th>
                    <th>MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIÊN THOẠI</th>
                    <th>VAI TRÒ</th>
                    <th></th>
                </tr>
                <?php 
                    foreach ($listtk as $taikhoan) {
                        extract($taikhoan);
                        $suatk = "index.php?act=suatk&id=".$id;
                        $xoatk = "index.php?act=xoatk&id=".$id;
                        echo '  <tr>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td>'.$id.'</td>
                                    <td>'.$user.'</td>
                                    <td>'.$pass.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$tel.'</td>
                                    <td>'.$role.'</td>
                                    <td>
                                        <a href="'.$suatk.'">
                                            <input type="button" value="Sửa">
                                        </a>
                                        <a href="'.$xoatk.'">
                                            <input type="button" value="Xóa">
                                        </a>
                                    </td>
                                </tr>';
                    }
                ?>
            </table>

        </div>
        <div class="raw mb10">
            <a href="index.php">
                <input type="button" value="Nhập thêm">
            </a>
        </div>
    </div>
</div>