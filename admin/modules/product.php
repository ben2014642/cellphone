<?php
    require_once('Helper/helper.php');

$sql = "SELECT * FROM cp_product,cp_category WHERE cp_product.id_category = cp_category.id_category ORDER BY cp_product.id DESC";
// $sql = "SELECT * FROM cp_product LEFT JOIN cp_category ON cp_product.id_category = cp_category.id";
$data = array();

$query = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($query,1)) {
    $data[] = $row;
}

if (isset($_GET['do'])) {
    $action = $_GET['do'];
} else {
    $action = '';
}

?>

<div class="row">
    <h3>QUẢN LÝ SẢN PHẨM</h3>
</div>
<div class="row">
    <?php
        switch ($action) {
            case 'detail':
                require_once('pages/detail_phone.php');
                
                break;
            case 'add':
                require_once('pages/add_sp.php');
                break;
            default:
                require_once('pages/list_phone.php');
                break;
        }
    ?>
</div>