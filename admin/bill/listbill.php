<div class="raw">
    <div class="raw formtitle mb">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
        <select name="iddm">
            <option value="0" selected>Chọn loại sản phẩm</option>
            <?php 
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$name.'</option>';
                }
            ?>
        </select>
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="raw formcontent">
        <div class="raw mb10 formdsloai">
            
            <table>
                <tr>
                    <th></th>
                    <th>Mã ĐƠN HÀNG</th>
                    <th>KHÁCH HÀNG</th>
                    <th>SỐ LƯỢNG HÀNG</th>
                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    <th>NGÀY ĐẶT HÀNG</th>
                    <th>THAO TÁC</th>
                </tr>
                <?php 
                    foreach ($listbill as $bill) {
                        extract($bill);
                        // $suasp = "index.php?act=suasp&id=".$id;
                        // $xoasp = "index.php?act=xoasp&id=".$id;
                        
                        $kh = $bill["bill_name"].'
                        <br>'.$bill["bill_email"].'
                        <br>'.$bill["bill_address"].'
                        <br>'.$bill["bill_tel"].'';
                        $countsp = loadall_cart_count($bill['id']);
                        $ttdh = get_tddh($bill['bill_status']);
                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>DAM '.$bill['id'].'</td>
                                <td>'.$kh.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$bill['total'].'</td>
                                <td>'.$ttdh.'</td>
                                <td>'.$bill['ngaydathang'].'</td>
                                <td>
                                    <a href="">
                                        <input type="button" value="Sửa">
                                    </a>
                                    <a href="">
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
            <a href="index.php?act=addsp">
                <input type="button" value="Nhập thêm">
            </a>
        </div>
    </div>
</div>