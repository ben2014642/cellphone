<?php

$sql = "SELECT * FROM cp_category";
$data = array();
$query = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($query,1)) {
    $data[] = $row;
}

?>
<div class="menu section section-1">
                <div class="menu-left">
                    <?php
                        foreach ($data as $item) {
                            if ($item['status'] == 1) {
                                echo '
                                <div class="menu-wrap">
                                    <i class="menu-icon-left"></i>
                                    <span class="menu-text">'.$item['title_category'].'</span>
                                    <i class="menu-icon-right dropdown">></i>
                                </div>
                                ';
                            }
                        }
                    ?>
                    
                </div>
                <div class="banner-center">
                    <div class="swiper" style="width: 733px">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide"><img class="banner-img" src="../cellphone/assets/img/banner1.png" alt=""></div>
                            <div class="swiper-slide"><img class="banner-img" src="../cellphone/assets/img/banner2.png" alt=""></div>
                            <div class="swiper-slide"><img class="banner-img" src="../cellphone/assets/img/banner3.png" alt=""></div>
                            ...
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                    <!-- <img class="banner-img" src="./assets/img/banner1.png" alt=""> -->
                    <div class="banner-footer">
                        <div class="banner-footer-wrap">
                            <a href="" class="banner-item">BÃO KHAI TRƯƠNG<br>Cơn mưa quà tặng</a>
                        </div>
                        <div class="banner-footer-wrap">
                            <a href="" class="banner-item">Z FOLD3 | Z FLIP3 5G <br>Ưu đãi cực lớn</a>
                        </div>
                        <div class="banner-footer-wrap">
                            <a href="" class="banner-item">ROG PHONE 5S <br>Mở bán quà khủng</a>
                        </div>
                        <div class="banner-footer-wrap">
                            <a href="" class="banner-item">ZENBOOK FLIP OLED <br>Đẳng cấp thời thượng</a>
                        </div>
                        <div class="banner-footer-wrap">
                            <a href="" class="banner-item">MI PURIFIER 4 PRO <br>Đặt trước giá ngon</a>
                        </div>
                    </div>
                </div>
                <div class="menu-right">
                    <div class="menu-right__part1">
                        <img src="./assets/img/right1.png" alt="" class="menu-right-img">
                    </div>
                    <div class="menu-right__part2">
                        <img src="./assets/img/right2.png" alt="" class="menu-right-img">
                    </div>
                    <div class="menu-right__part3">
                        <img src="./assets/img/right3.png" alt="" class="menu-right-img">
                    </div>
                </div>
            </div>