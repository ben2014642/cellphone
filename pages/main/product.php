<?php
$sql = "SELECT * FROM cp_product";
$data = array();
$query = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($query,1)) {
    $data[] = $row;
}

?>
<div class="section-2">
                <div class="section2-header">
                    <a href="" class="section2-link">ĐIỆN THOẠI NỔI BẬT NHẤT</a>
                    <ul class="section2-list">
                        <li class="section2-item">Apple</li>
                        <li class="section2-item">Samsung</li>
                        <li class="section2-item">Xiaomi</li>
                        <li class="section2-item">OPPO</li>
                        <li class="section2-item">Vsmart</li>
                        <li class="section2-item">Realme</li>
                    </ul>
                </div>
                <div class="list-product">
                    <div class="col-12">
                        <div class="row">
                            <?php
                                foreach ($data as $item) {
                                    $sale = '';
                                    if ($item['sale'] > 0) {
                                        $sale = '
                                            <div class="card-item-percent">
                                                <p>Giảm '.$item['sale'].'%</p>
                                            </div>
                                            
                                        ';
                                    }
                                    echo '
                                    <div class="card-item col-2-4">
                                    '.$sale.'
                                        <a href="" style="text-decoration: none; color: #616161;">
                                            <div class="card-item-head">
                                                <img src="'.$item['img'].'" alt="" class="card-item-img">
                                            </div>
                                            <div class="card-item-body">
                                                <div class="card-item-title">'.$item['title_product'].'</div>
                                                <div class="card-item-price-wrap">
                                                    <p class="card-item-price-current">'.$item['price'].'đ</p>
                                                    <p class="card-item-price-old">'.$item['price_old'].'đ</p>
                                                </div>
                                                <div class="card-item-des">
                                                    <p class="card-item-des-content">
                                                    '.$item['des'].'
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-item-footer">
                                                <div class="card-item-favourite">
                                                    <i class="fas fa-star card-icon-fav"></i>
                                                    <i class="fas fa-star card-icon-fav"></i>
                                                    <i class="fas fa-star card-icon-fav"></i>
                                                    <i class="fas fa-star card-icon-fav"></i>
                                                    <i class="fas fa-star card-icon-fav"></i>
                                                </div>
                                                <div class="card-item-review">
                                                '.$item['total_review'].' đánh giá
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    ';
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            
<div class="section-2">
                <div class="section2-header">
                    <a href="" class="section2-link">ĐIỆN THOẠI NỔI BẬT NHẤT</a>
                    <ul class="section2-list">
                        <li class="section2-item">Apple</li>
                        <li class="section2-item">Samsung</li>
                        <li class="section2-item">Xiaomi</li>
                        <li class="section2-item">OPPO</li>
                        <li class="section2-item">Vsmart</li>
                        <li class="section2-item">Realme</li>
                    </ul>
                </div>
                <div class="list-product">
                    <div class="col-12">
                        <div class="row">
                            <?php
                                foreach ($data as $item) {
                                    $sale = '';
                                    if ($item['sale'] > 0) {
                                        $sale = '
                                            <div class="card-item-percent">
                                                <p>Giảm '.$item['sale'].'%</p>
                                            </div>
                                            
                                        ';
                                    }
                                    echo '
                                    <div class="card-item col-2-4">
                                    '.$sale.'
                                        <a href="" style="text-decoration: none; color: #616161;">
                                            <div class="card-item-head">
                                                <img src="'.$item['img'].'" alt="" class="card-item-img">
                                            </div>
                                            <div class="card-item-body">
                                                <div class="card-item-title">'.$item['title_product'].'</div>
                                                <div class="card-item-price-wrap">
                                                    <p class="card-item-price-current">'.$item['price'].'đ</p>
                                                    <p class="card-item-price-old">'.$item['price_old'].'đ</p>
                                                </div>
                                                <div class="card-item-des">
                                                    <p class="card-item-des-content">
                                                    '.$item['des'].'
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-item-footer">
                                                <div class="card-item-favourite">
                                                    <i class="fas fa-star card-icon-fav"></i>
                                                    <i class="fas fa-star card-icon-fav"></i>
                                                    <i class="fas fa-star card-icon-fav"></i>
                                                    <i class="fas fa-star card-icon-fav"></i>
                                                    <i class="fas fa-star card-icon-fav"></i>
                                                </div>
                                                <div class="card-item-review">
                                                '.$item['total_review'].' đánh giá
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    ';
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>