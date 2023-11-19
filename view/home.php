<div class="raw mb">
    <div class="boxtrai mr">
        <div class="raw mb">
            <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="view/images/banner1.png" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="view/images/banner2.png" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="view/images/banner3.png" style="width:100%">
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="raw">
            <?php 
                $i = 1;
                foreach ($spnew as $sp) {
                    extract($sp);
                    $hinh = $img_path.$img;
                    $linksp = "index.php?act=sanphamct&idsp=".$id;
                    // if ($i == 3 || $i == 6 || $i == 9) {
                    if($i % 3 == 0) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                    echo '  <div class="boxsp '.$mr.'">
                                <div class="img">
                                <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
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
    <div class="boxphai">
        <?php 
            include "boxright.php";
        ?>
    </div>
</div>