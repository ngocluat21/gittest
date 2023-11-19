<div class="raw mb">
    <div class="boxtrai mr">
        <div class="raw mb">
            <?php extract($sanphamct); ?>
            <div class="boxtitle"><?=$name?></div>
            <div class="raw boxcontent">
                <?php 
                    // extract($sanphamct);
                    $img = $img_path.$img;
                    echo '<div class="raw mb spct"><img src="'.$img.'" alt=""><br></div>';
                    echo $mota;
                ?>
            </div>
        </div>

        <!-- <div class="raw mb">
            <div class="boxtitle">BÌNH LUẬN</div>
            <div class="raw boxcontent">
                   
            </div>
        </div> -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {

                $("#binhluan").load("view/binhluan/binhluan.php", {
                    idpro: <?=$id?>
                });

            });
        </script>
        <div class="raw" id="binhluan">

        </div>

        <!-- <div class="raw">
            <iframe src="../view/binhluan/binhluanform.php?idpro=<?//$id?>" frameborder="0" width="100%"
                height="300px"></iframe>
        </div> -->
        
        <div class="raw mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="raw boxcontent">
                <?php
                    foreach ($spcungloai as $spcl) {
                        extract($spcl);
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php" ?>
    </div>
</div>