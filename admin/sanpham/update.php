<?php
    if(is_array($sanpham)) {
        extract($sanpham);
    }

    $hinhpath = "../upload/".$img;
    if (is_file($hinhpath)) {
        $hinh = "<img src='".$hinhpath."' height='80'>";
    } else {
        $hinh = "No photo";
    }
?>
<div class="raw">
    <div class="raw formtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="raw formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="raw mb10">
                <select name="iddm">
                    <option value="0" selected>Chọn loại sản phẩm</option>
                    <?php 
                        foreach ($listdanhmuc as $danhmuc) {
                            // extract($danhmuc);
                            if ($iddm==$danhmuc['id']) 
                                $s="selected"; 
                            else 
                                $s="";
                            echo '<option value="'.$danhmuc['id'].'" '.$s.'>'.$danhmuc['name'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <?php 
                // if(is_array($sanpham)) {
                //     extract($sanpham);
                // }
            ?>
            <div class="raw mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" value="<?php echo $name;?>">
            </div>

            <div class="raw mb10">
                Giá <br>
                <input type="text" name="giasp" value="<?=$price?>">
            </div>

            <div class="raw mb10">
                Hình <br>
                <input type="file" name="hinh">
                <?=$hinh?>
            </div>

            <div class="raw mb10">
                Mô tả <br>
                <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
            </div>

            <div class="raw mb10">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="Cập nhập">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp">
                    <input type="button" value="Danh sách">
                </a>
            </div>
            <?php
                if (isset($thongbao) && ($thongbao!="")) {
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>