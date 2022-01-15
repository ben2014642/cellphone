<?php
if (isset($_SESSION['fullname'])) {
    $fullname = $_SESSION['fullname'];
} else {
    $fullname = 'Khách';
}

?>
<div class="header">
            <div class="header-left">
                <div class="header-logo">
                    CELLPHONES
                </div>
                <div class="wrap-input">
                    <input type="text" placeholder="Bạn cần tìm kiếm gì ?" name="search" id="search" class="input-search">
                </div>
            </div>
            <div class="header-right">
                <ul class="header-list">
                    <li class="header-list-item">
                        <span class="text-header">Gọi mua hàng <br>1800.2245</span>
                    </li>
                    <li class="header-list-item">
                        <span class="text-header">Cửa hàng gần bạn</span>
                    </li>
                    <li class="header-list-item">
                        <span class="text-header">Giỏ hàng</span>
                    </li>
                    <li class="header-list-item">
                        <?php 
                            if (isset($_SESSION['fullname'])) {
                                echo '<span class="text-header">'.$fullname.'</span>';
                            } else {
                                echo '<a style="color: white;" href="member/signin.php" >Login</a>';
                            }
                        ?>
                        <div class="menu-account">
                            <ul class="menu-account_list">
                                <li>Tài khoản của tôi</li>
                                <li>Giỏ hàng</li>
                                <li>Đăng xuất</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
