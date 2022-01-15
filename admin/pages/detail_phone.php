<?php
$id = $_GET['id'];
$sql = "SELECT * FROM cp_product WHERE id = $id";
$item = mysqli_fetch_array(mysqli_query($conn,$sql),1);

$sql = "SELECT * FROM cp_category";
$arrCategory = array();
$query = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($query,1)) {
    $arrCategory[] = $row;
}



?>

<div class="myForm">
    <div class="wrap-list step-1">
        <div class="list-1">
            <div  class="form-group">
                <label for="title-product">Tiêu đề sản phẩm</label>
                <input value="<?=$item['title_product']?>" class="form-control" placeholder="abcd" type="text" name="" id="title-product">
            </div>
            <div  class="form-group">
                <label for="price-new">Giá mới</label>
                <input value="<?=$item['price']?>" class="form-control" placeholder="abcd" type="text" name="" id="price-new">
            </div>
            <div  class="form-group">
                <label for="price-old">Giá cũ</label>
                <input value="<?=$item['price_old']?>" class="form-control" placeholder="abcd" type="text" name="" id="price-old">
            </div>
            <div  class="form-group">
                <label for="category">Danh Mục</label>
                <select class="custom-select mr-sm-2" id="category">
                    <?php
                        foreach ($arrCategory as $itemCate) {
                            if ($itemCate['id_category'] == $item['id_category']) {
                                echo '
                            <option selected value="'.$itemCate['id_category'].'">'.$itemCate['title_category'].'</option>
                            ';
                            } else {
                                echo '
                            <option value="'.$itemCate['id_category'].'">'.$itemCate['title_category'].'</option>
                            ';
                            }
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="list-2">
            <div  class="form-group">
                <label for="sale-product">Giảm</label>
                <input value="<?=$item['sale']?>" class="form-control" placeholder="abcd" type="text" name="" id="sale-product">
            </div>
            <div  class="form-group">
                <label for="img-product">Ảnh chính</label>
                <input value="<?=$item['img']?>" class="form-control" placeholder="abcd" type="text" name="" id="img-product">
            </div>
            <div  class="form-group">
                <label for="img-product">Ảnh phụ</label>
                <textarea placeholder="Mỗi ảnh cách nhau bởi dấu ','" class="form-control" name="" id="images" cols="30" rows="3"></textarea>
            </div>
            <div  class="form-group">
                <label for="des-product">Mô tả</label>
                <textarea class="form-control" id="des-product" rows="3"><?=$item['des']?></textarea>
            </div>
            
        </div>
        
    </div>
    <div class="wrap-list step-2">
        <table class="table table-sm">
            <thead>
            <tr>
                <th scope="col">First</th>
                <th scope="col">Last</th>
            </tr>
            </thead>
            <tbody id="body_table">
                <tr>
                    <td scope="row">3</td>
                    <td >Larry the Bird</td>
                </tr>
            </tbody>
        </table>
        

    </div>
    <button id="next-step" onclick="showTskt(<?=$id?>);" class="btn btn-primary">Next</button>
    <button id="save-step" onclick="update_product(<?=$id?>)" class="btn btn-primary">Lưu</button>
    <a href="?page=product"><button class="btn btn-primary">Quay lại</button></a>
</div>