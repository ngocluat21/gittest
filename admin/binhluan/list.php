<div class="raw">
    <div class="raw formtitle">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="raw formcontent">
        <div class="raw mb10 formdsloai">

            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>NỘI DUNG</th>
                    <th>IDUSER</th>
                    <th>IDPRO</th>
                    <th>NGÀY BÌNH LUẬN</th>
                    <th></th>
                </tr>
                <?php 
                    foreach ($listbl as $binhluan) {
                        extract($binhluan);
                        $suabl = "index.php?act=suabl&id=".$id;
                        $xoabl = "index.php?act=xoabl&id=".$id;
                        echo '  <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$noidung.'</td>
                                    <td>'.$iduser.'</td>
                                    <td>'.$idpro.'</td>
                                    <td>'.$ngaybinhluan.'</td>
                                    <td>
                                        <a href="'.$suabl.'">
                                            <input type="button" value="Ẩn">
                                        </a>
                                        <a href="'.$xoabl.'">
                                            <input type="button" value="Xóa">
                                        </a>
                                    </td>
                                </tr>';
                    }
                ?>
            </table>
            
        </div>
        <div class="raw mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục chọn">
        </div>
    </div>
</div>