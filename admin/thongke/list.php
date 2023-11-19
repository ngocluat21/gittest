<div class="raw">
    <div class="raw formtitle mb">
        <h1>DANH SÁCH THỐNG KÊ</h1>
    </div>
    <div class="raw formcontent">
        <div class="raw mb10 formdsloai">
            
            <table>
                <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
                <?php 
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        echo '<tr>
                                <td>'.$madm.'</td>
                                <td>'.$tendm.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$maxprice.'</td>
                                <td>'.$minprice.'</td>
                                <td>'.round($avgprice, 2).'</td>
                            </tr>';
                    }
                ?>
            </table>
            
        </div>
        <div class="raw mb10">
            <a href="index.php?act=bieudo">
                <input type="button" value="Xem biểu đồ">
            </a>
        </div>
    </div>
</div>