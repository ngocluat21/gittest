<div class="raw">
    <div class="raw formtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="raw formcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="raw mb10">
                Danh mục <br>
                <select name="iddm" id="">
                    <option value="0" selected>Chọn danh mục</option>
                    <?php 
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>

                </select>
            </div>
            <div class="raw mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp">
            </div>

            <div class="raw mb10">
                Giá <br>
                <input type="text" name="price">
            </div>

            <div class="raw mb10">
                Hình <br>
                <input type="file" name="hinh">
            </div>

            <div class="raw mb10">
                Mô tả <br>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>

            <div class="raw mb10">
                <input type="submit" value="Thêm mới" name="themmoi">
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