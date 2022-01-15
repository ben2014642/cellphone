<?php
header('content-type: text/html; charset=utf-8');

require_once('../Helper/db.php');

$arrData = json_decode($_POST['arr'],1);
$action = $arrData['action'];

switch ($action) {
    case 'update':
        $id = $arrData['id'];
        $title = $arrData['title'];
        $status = $arrData['status'];
        $sql = "UPDATE cp_category SET `title_category` = '$title',`status` = $status WHERE id_category = $id" ;
        $check = mysqli_query($conn,$sql);
        if ($check > 0) {
            die("ok");
        } else {
            die("failed");
        }
        break;
    case 'delete':
        $id = $arrData['id'];
        $sql = "DELETE FROM cp_category WHERE id_category=$id";
        $check = mysqli_query($conn,$sql);
        if ($check > 0) {
            die("ok");
        } else {
            die("failed");
        }
        break;
    case 'add':
        $time = date('Y-m-d H:i:s');
        $title = $arrData['title'];
        $status = $arrData['status'];
        $sql = "INSERT INTO cp_category(id_category,title_category,status,created_at,total_view) VALUES(null,'$title',$status,'$time',0)";
        $check = mysqli_query($conn,$sql);
        if ($check > 0) {
            die("ok");
        } else {
            die("failed");
        }
        break;

    case 'update_product':
        $id = $arrData['id'];
        $category = $arrData['category'];
        $title = $arrData['title'];
        $price = $arrData['price'];
        $price_old = $arrData['price_old'];
        $sale = $arrData['sale'];
        $img = $arrData['img'];
        $des = $arrData['des'];
        $tskt =$arrData['tskt'];
        $images = $arrData['images'];
        $sql = "UPDATE cp_product SET `title_product`='$title', `price`= '$price',`price_old` = '$price_old',`sale` = $sale,`img` = '$img',`des` ='$des',`id_category` = $category WHERE id = $id";
        $sql_tskt = "UPDATE cp_property_values SET `value` =$tskt,`key_property` = 'tskt' WHERE product_id=$id AND key_property = 'tskt'";
        $sql_images = "UPDATE cp_property_values SET `value` = $images,`key_property` = 'images' WHERE product_id=$id AND key_property = 'images'";
        $check = mysqli_query($conn,$sql_tskt);
        $check1 = mysqli_query($conn,$sql_images);
        if ($check > 0) {
            die("ok");
        } else {
            die("failed");
        }
        break;

    case 'add_product':
        $category = $arrData['category'];
        $title = $arrData['title'];
        $price = $arrData['price'];
        $price_old = $arrData['price_old'];
        $sale = $arrData['sale'];
        $img = $arrData['img'];
        $des = $arrData['des'];
        $sql = "INSERT INTO cp_product (title_product,price,price_old,sale,img,des,id_category) VALUES ('$title','$price','$price_old',$sale,'$img','$des',$category)";
        $check = mysqli_query($conn,$sql);
        if ($check > 0) {
            die("ok");
        } else {
            die("failed");
        }
        break;
    default:
        # code...
        break;
}

?>