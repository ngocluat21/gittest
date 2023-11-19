<div class="raw mb">
    <div class="boxtrai mr">
        <div class="raw mb">
            <div class="boxtitle">SẢN PHẨM</div>
            <div class="raw boxcontent">
                <?php 
                    $i = 1;
                    foreach ($dssp as $sp) {
                        extract($sp);
                        $img = $img_path.$img;
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        if ($i % 3 == 0) {
                            $mr = "";
                        } else {
                            $mr = "mr";
                        }
                        echo '  <div class="boxsp '.$mr.'">
                                    <div class="raw img ">
                                        <a href="'.  $linksp.'"><img src="'.$img.'"></a>
                                    </div>
                                    <p>$'.$price.'</p>
                                    <a href="'.$linksp.'">'.$name.'</a>
                                    <div class="raw btnaddtocart formtaikhoan">
                                        <form action="index.php?act=addtocart" method="post">
                                            <input type="hidden" name="id" value="'.$id.'">
                                            <input type="hidden" name="name" value="'.$name.'">
                                            <input type="hidden" name="img" value="'.$img.'">
                                            <input type="hidden" name="price" value="'.$price.'">
                                            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                        </form>
                                    </div>
                                </div>';
                        $i++;
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php" ?>
    </div>
</div>