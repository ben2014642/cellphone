<?php
require_once('admin/Helper/db.php');

$id = $_GET['id'];
// $noi = implode(" ",explode("-",$temp));
// echo $noi;
$noi = '';

// Chọn phiên bản khác của một sản phẩm
if (isset($_GET['v'])) {
    $v = $_GET['v'];
    $noi = implode(" ", explode("-", $v));
    $sql_v = "SELECT * FROM cp_product WHERE version_product = '$noi'";
    $product_select = mysqli_fetch_array(mysqli_query($conn, $sql_v));
     
}

$sql_tskt = "SELECT * FROM cp_property_values WHERE key_property = 'tskt' AND product_id = $id";
$sql_images = "SELECT * FROM cp_property_values WHERE key_property = 'images' AND product_id = $id";

$sql_product = "SELECT * FROM cp_product WHERE id = $id OR version_id=$id";
$product_arr = array();
$query = mysqli_query($conn, $sql_product);
while ($row = mysqli_fetch_array($query, 1)) {
    $product_arr[] = $row;
}




$data_tskt = mysqli_fetch_array(mysqli_query($conn, $sql_tskt), 1);
$data_images = mysqli_fetch_array(mysqli_query($conn, $sql_images), 1);

$tskt = json_decode($data_tskt['value'], 1);
$images_slide = json_decode($data_images['value']);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

</head>

<body>
    <div class="app">
        <?php
        require_once('./pages/header.php');
        ?>
        <div class="main-view">
            <div class="wrap-view-phone">
                <div class="head-view-phone">
                    <h2>Samsung Galaxy Note 20 Ultra 5G</h2>
                    <div class="box-view-rating">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <span>21 đánh giá</span>
                    </div>
                </div>
                <div class="main-viewphone">
                    <div class="main-viewleft">
                        <div class="swiper" style="width: 400px; height: 400px">
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <?php
                                foreach ($images_slide as $item) {
                                    echo '<div class="swiper-slide"><img src="' . $item . '" alt=""></div>';
                                }
                                ?>

                                <!-- <div class="swiper-slide"></div>
                                <div class="swiper-slide"></div> -->
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                    <div class="main-viewcenter">
                        <div class="box-view-price">
                            <span>Giá: 
                                <?php 
                                    if (isset($_GET['v'])) {
                                        echo $product_select['price'];
                                    } else {
                                        echo $product_arr[0]['price'];
                                    }
                                ?>đ</span>
                            <span>3.000.000đ</span>
                        </div>
                        <div class="box-view-choose-price">
                            <?php
                            $check = 1;
                            foreach ($product_arr as $product) {
                                $temp = implode("-", explode(" ", $product['version_product']));
                                if ($noi == $product['version_product'] || empty($_GET['v']) && $check == 1) {
                                    $check = 0;
                                    echo '
                                    
                                    <a class="link-product active" href="view.php?id=' . $id . '&v=' . $temp . '">
                                    <img class="choose-product" src="https://cachbothuocla.vn/wp-content/uploads/2019/03/tick-xanh.png">
                                        <div class="box-view-item">
                                            <p>' . $product['version_product'] . '</p>
                                            <P>' . $product['price'] . '</P>
                                        </div>
                                    </a>
                                    ';
                                } else {
                                    echo '
                                    
                                    <a class="link-product" href="view.php?id=' . $id . '&v=' . $temp . '">
                                    <img class="choose-product" src="https://cachbothuocla.vn/wp-content/uploads/2019/03/tick-xanh.png">
                                        <div class="box-view-item">
                                            <p>' . $product['version_product'] . '</p>
                                            <P>' . $product['price'] . '</P>
                                        </div>
                                    </a>
                                    ';
                                }
                            }
                            ?>
                            <!-- <div class="box-view-item">
                                <p>Note 20 Ultra 5G</p>
                                <P>3.000.000đ</P>
                            </div>
                            <div class="box-view-item">
                                <p>Note 20 Ultra 5G</p>
                                <P>3.000.000đ</P>
                            </div> -->
                        </div>
                        <div class="box-view-choose-color">
                            <h4>Chọn màu để xem giá và chi nhánh có hàng</h4>
                            <div class="box-view-item">
                                <p>Đen</p>
                                <p>3.000.000đ</p>
                            </div>
                        </div>
                        <div class="box-view-choose-order">
                            <div class="order-now">
                                <p>MUA NGAY</p>
                                <p>(Giao tận nơi hoặc lấy tại cửa hàng)</p>
                            </div>
                            <div class="order-installment">
                                <div class="order-installment-item order-installment1">
                                    <p>Trả góp</p>
                                    <p>(Xét duyệt qua điện thoại)</p>
                                </div>
                                <div class="order-installment-item order-installment1">
                                    <p>Trả góp qua thẻ</p>
                                    <p>(Visa, Master Card, JCB)</p>
                                </div>
                            </div>
                        </div>
                        <div class="box-view-offer">
                            <h3>ƯU ĐÃI THÊM</h3>
                            <div class="box-view-offer-item">
                                <p>Giảm thêm tới 1% cho thành viên Smember</p>
                                <p>Giảm 500.000đ khi thanh toán hoặc trả góp từ 5 triệu trở lên bằng thẻ tín dụng FE Credit</p>
                            </div>
                        </div>
                    </div>
                    <div class="main-viewright">
                        <span>Thông số kỹ thuật</span>
                        <div class="viewright-content">
                            <table id="table-tskt" class="table table-striped">
                                <thead>

                                </thead>
                                <tbody>
                                    <?php
                                    for ($i = 0; $i < 9; $i++) {
                                        echo '
                                                <tr>
                                                    <td>' . $tskt[$i]['name'] . '</td>
                                                    <td>' . $tskt[$i]['value'] . '</td>
                                                </tr>
                                            ';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once('./pages/footer.php');
        ?>
    </div>
</body>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        speed: 600,
        autoplay: {
            delay: 3500,
        },
        // parallax: true,
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        // scrollbar: {
        //   el: '.swiper-scrollbar',
        // },
    });
</script>

</html>