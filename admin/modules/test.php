<?php

$conn1 = mysqli_connect('localhost','root','','test_product');

// $sql = "SELECT * FROM product_property WHERE product_id = 1";
// $arrProperty = [];
// $query = mysqli_query($conn1,$sql);

// while ($row = mysqli_fetch_array($query,1)) {
//     extract($row);
//     $$property_id = $row['property_id'];
    
// }

$sql = "SELECT * FROM property_values WHERE product_id = 1";
$data = array();
$query = mysqli_query($conn1,$sql);
$arrProperty = array();

while ($row = mysqli_fetch_array($query,1)) {
    if (!in_array($row['property_id'],$arrProperty)) {
        $arrProperty[$row['property_id']] = [];
    }
    $data[] = $row;
}


foreach ($data as $item) {
    array_push($arrProperty[$item['property_id']],$item['value']);
}

$arrProperty= json_encode($arrProperty);

print_r($arrProperty);  


// function getData($conn1,$property_id)
// {
//     $sql = "SELECT * FROM property_values WHERE product_id = 1";
//     $query = mysqli_query($conn1,$sql);
//     $data = array();
//     while ($row = mysqli_fetch_array($query,1)) {
//         $data[] = $row;
//     }

//     return $data;
// }

$t_object = (object) [
    "name" => "Iphone 11",
    "image" => "google.com",
    "images" => [
        "https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/l/a/layer_20.jpg",
        "https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/_/0/_0005_layer_6.jpg",
        "https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/_/0/_0001_layer_2.jpg",
        "https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/l/a/layer_19.jpg",
        "https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/l/a/layer_21.jpg",
        "https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/l/a/layer_18.jpg",
        "https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/4/i/4iphone-11-1_1.jpg",
        "https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/i/p/iphone-11-do-21_1.jpg"
    ]
    ];

// print_r($t_object);

// $sql_property = "SELECT * FROM properties,property_values WHERE"

?>