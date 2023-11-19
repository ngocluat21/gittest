<?php
    function viewcart($del) {
        global $img_path;
        $i = 1;
        $tongtien = 0;
        $c = 0;
        
        if ($del == 1) {
            $xoasp_th = "<th>THAO TÁC</th>";
        } else {
            $xoasp_th = '';
        }
        echo '  <tr>
                    <th>STT</th>
                    <th>HÌNH</th>
                    <th>SẢN PHẨM</th>
                    <th>ĐƠN GIÁ</th>
                    <th>SỐ LƯỢNG</th>
                    <th>THẦNH TIỀN</th>
                    '.$xoasp_th.'
                </tr>';
        
        foreach ($_SESSION['mycart'] as $cart) {
            
            $img = $img_path.$cart[2];
            $hinh = '<img src="'.$img.'" alt="" width="100" height="100">';
            $ttien = $cart[4] * $cart[3];
            $tongtien += $ttien;
            
            if ($del == 1) {
                $xoasp_td = '<td><a href="index.php?act=delcart&idcart='.$c.'"><input type="button" value="Xóa"></a></td>';
            } else {
                $xoasp_td = '';
            }
            echo '  <tr>
                        <td>'.$i++.'</td>
                        <td>'.$hinh.'</td>
                        <td>'.$cart[1].'</td>
                        <td>'.$cart[3].'</td>
                        <td>'.$cart[4].'</td>
                        <td>'.$ttien.'</td>
                        '.$xoasp_td.'
                    </tr>';
            $c+=1;
        }
        if ($_SESSION['mycart'] == []) {
            echo "  <tr>
                        <td colspan='7'><p class='thongbao'><strong>Chưa có sản phẩm nào trong giỏ hàng</strong></p></td>
                    </tr>";
        } else {
            echo '  <tr>
                        <td colspan="5">Tổng tiền</td>
                        <td colspan="2" class="thongbao"><strong>'.$tongtien.'<u>đ</u></strong></td>
                    </tr>';
        }
    }

    function bill_chi_tiet($listbill) {
        global $img_path;
        $i = 1;
        $tongtien = 0;
        $c = 0;
        
        echo '  <tr>
                    <th>STT</th>
                    <th>HÌNH</th>
                    <th>SẢN PHẨM</th>
                    <th>ĐƠN GIÁ</th>
                    <th>SỐ LƯỢNG</th>
                    <th>THẦNH TIỀN</th>
                </tr>';
        
        foreach ($listbill as $cart) {
            
            $img = $img_path.$cart['img'];
            $hinh = '<img src="'.$img.'" alt="" width="100" height="100">';
            $tongtien += $cart['thanhtien'];
            
            echo '  <tr>
                        <td>'.$i++.'</td>
                        <td>'.$hinh.'</td>
                        <td>'.$cart['name'].'</td>
                        <td>'.$cart['price'].'</td>
                        <td>'.$cart['soluong'].'</td>
                        <td>'.$cart['thanhtien'].'</td>
                    </tr>';
            $c+=1;
        }
        echo '  <tr>
                    <td colspan="5">Tổng tiền</td>
                    <td colspan="2" class="thongbao"><strong>'.$tongtien.'<u>đ</u></strong></td>
                </tr>';
    }

    function tongdonhang() {
        $tongtien = 0;
        foreach ($_SESSION['mycart'] as $cart) {
            $ttien = $cart[4] * $cart[3];
            $tongtien += $ttien;
        }
        return $tongtien;   
    }

    function insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang) {
        $sql = "INSERT INTO bill(iduser, bill_name, bill_email, bill_address, bill_tel, bill_pttt, ngaydathang, total) VALUES ('$iduser', '$name', '$email', '$address', '$tel', '$pttt', '$ngaydathang', '$tongdonhang')";
        return pdo_execute_return_lastInsertId($sql);
    }

    function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill) {
        $sql = "INSERT INTO cart(iduser, idpro, img, name, price, soluong, thanhtien, idbill) VALUES ('$iduser', '$idpro', '$img', '$name', '$price', '$soluong', '$thanhtien', '$idbill')";
        return pdo_execute($sql);
    }

    function loadone_bill($id) {
        $sql = "SELECT * FROM bill WHERE id=".$id;
        $bill = pdo_query_one($sql);
        return $bill;
    }

    function loadall_cart($idbill) {
        $sql = "SELECT * FROM cart WHERE idbill=".$idbill;
        $bill = pdo_query($sql);
        return $bill;
    }

    function loadall_cart_count($idbill) {
        $sql = "SELECT * FROM cart WHERE idbill=".$idbill;
        $bill = pdo_query($sql);
        return sizeof($bill);
    }

    function loadall_bill($kyw="", $iduser = 0) {
        $sql = "SELECT * FROM bill WHERE 1";
        if ($iduser > 0) {
            $sql.=" AND iduser=".$iduser;
        }
        if ($kyw != "") {
            $sql.=" AND id like '%".$kyw."%'";
        }
        $sql.=" ORDER BY id DESC";
        $listbill = pdo_query($sql);
        return $listbill;
    }

    function get_tddh($n) {
        switch($n) {
            case '0':
                $tt = "Đơn hàng mới";
                break;
            case '1':
                $tt = "Đang xử lý";
                break;
            case '2';
                $tt = "Đang giao hàng";
                break;
            case '3':
                $tt = "Hoàn tất đơn hàng";
                break;
            default: 
                $tt = "Đơn hàng mới";
                break;
        }
        return $tt;
    }

    function loadall_thongke() {
        $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
        $sql.= " FROM sanpham LEFT JOIN danhmuc ON danhmuc.id=sanpham.iddm";
        $sql.=" GROUP BY danhmuc.id ORDER BY danhmuc.id DESC";
        $listtk = pdo_query($sql);
        return $listtk;
    }
?>