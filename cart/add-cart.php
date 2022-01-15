<?php
session_start();
require_once("../admin/Helper/db.php");
// $_SESSION['cart'] = array()
if (empty($_SESSION['cart'])) {
    $_SESSION['cart'] = array(); 
}

if (isset($_GET['add_sp'])) {
    $id = $_GET['add_sp'];
    $sql = "SELECT * FROM cp_product WHERE id = $id";
    $product = mysqli_fetch_array(mysqli_query($conn,$sql),1);
    $get_key = array_keys($product);
    // print_r($get_key);
    $new_product = [
        "id" => $product['id'],
        "title_product" => $product['title_product'],
        "version_product" => $product['version_product'],
        "price" => $product['price'],
        "sale" => $product['sale'],
        "img" => $product['img']
    ];
    $check = existProduct($id,$_SESSION['cart']);
    if ($check) {
        print_r($_SESSION['cart']);
        echo "ton tai san pham";
    } else {
        array_push($_SESSION['cart'],$new_product);
        print_r($_SESSION['cart']);

    }
}


function existProduct($id,$arr)
{
    foreach ($arr as $item ) {
        if ($item['id'] == $id) {
            return 1;
        }
    }

    return 0;
}


?>