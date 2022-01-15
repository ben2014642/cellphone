<?php
$sql = "SELECT * FROM cp_category";
$arrCategory = array();
$query = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($query,1)) {
    $arrCategory[] = $row;
}


?>

<div class="myForm">
    <div class="wrap-list">
        <div class="list-1">
            <div  class="form-group">
                <label for="title-product">Tiêu đề sản phẩm</label>
                <input value="" class="form-control" placeholder="" type="text" name="" id="title-product">
            </div>
            <div  class="form-group">
                <label for="price-new">Giá mới</label>
                <input value="" class="form-control" placeholder="" type="text" name="" id="price-new">
            </div>
            <div  class="form-group">
                <label for="price-old">Giá cũ</label>
                <input value="" class="form-control" placeholder="" type="text" name="" id="price-old">
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
                <input value="" class="form-control" placeholder="" type="text" name="" id="sale-product">
            </div>
            <div  class="form-group">
                <label for="img-product">Hình ảnh</label>
                <input value="" class="form-control" placeholder="" type="text" name="" id="img-product">
            </div>
            <div  class="form-group">
                <label for="des-product">Mô tả</label>
                <textarea class="form-control" id="des-product" rows="3"></textarea>
            </div>
            
        </div>
    </div>
    <button onclick="add_product()" class="btn btn-primary">Thêm</button>
    <a href="?page=product"><button class="btn btn-primary">Quay lại</button></a>
</div>