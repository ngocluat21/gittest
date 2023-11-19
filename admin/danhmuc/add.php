<div class="raw">
    <div class="raw formtitle">
        <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
    </div>
    <div class="raw formcontent">
        <form action="index.php?act=adddm" method="post">
            <div class="raw mb10">
                Mã loại <br>
                <input type="text" name="maloai" id="" disabled>
            </div>

            <div class="raw mb10">
                Tên loại <br>
                <input type="text" name="tenloai" id="">
            </div>
            
            <div class="raw mb10">
                <input type="submit" value="Thêm mới" name="themmoi">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listdm">
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