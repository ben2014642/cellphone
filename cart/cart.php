<?php
session_start();
if (!empty($_SESSION['cart'])) {
    $list_cart = $_SESSION['cart'];
} else {
    $list_cart = '';
}

function totalPrice($list_cart)
{
    $sl = 0;
    $price = 0;
    foreach ($list_cart as $item) {
        $price += $item['price'];
        $sl++;
    }
    $info = [
        "total_price" => $price,
        "quantily" => $sl
    ];
    return $info;
}

$info = totalPrice($list_cart);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem giỏ hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/cart.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
        <?php
        require_once("../pages/header.php");
        
        ?>
        <div class="wrap-main-cart">
            <div class="wrap-main-left">
                <div class="title-cart">
                    <h3>Xem giỏ hàng</h3>
                </div>
                <?php
                    if (empty($list_cart)) {
                        echo 'Giỏ hàng đang trống';
                    } else {
                        foreach ($list_cart as $item) {
                            $pr = number_format($item['price']);
                            echo '
                            <div class="wrap-cart">
                                <div class="cart-left">
                                    <img src="'.$item['img'].'" alt="">
                                    <div class="cart-info-left">
                                        <p>'.$item['title_product'].'</p>
                                    </div>
                                </div>
                                <div class="card-right">
                                    <p>'.$pr.'</p>
                                    <div class="cart-action">
                                        <i class="far fa-heart"></i>
                                        <i class="fas fa-trash"></i>
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                    }
                ?>
            </div>
            <div class="wrap-main-right">
                <div class="infopay">
                    <div class="infopay-head">
                        <h3>Thông tin thanh toán</h3>
                    </div>
                    <div class="infopay-main">
                        <div class="infopay-profile">
                            <div class="infopay-address">
                                <span>Địa: chỉ: Ấp an bình, xã an thạnh trung, huyện chợ mới, tỉnh an giang</span>
                            </div>
                            <div class="infopay-fullname">
                                <span>Người nhận: Nguyễn Hồ Thanh Bền</span>
                            </div>
                        </div>
                        <div class="infopay-info_total">
                            <p>Thông tin thanh toán</p>
                            <p>Số lượng:<?=$info['quantily'];?></p>
                            <p>Thành giá:<?= number_format($info['total_price']) ?></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
</body>
</html>