<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
        <a href="?page=product&do=add">
        <button type="button"class="fl-right btn btn-primary">Thêm SP</button>

        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tiêu đề</th>
                        <th>Giá cũ</th>
                        <th>Giá mới</th>
                        <th>Lượt xem</th>
                        <th>Mã SP</th>
                        <th>Danh Mục</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Tiêu đề</th>
                        <th>Giá cũ</th>
                        <th>Giá mới</th>
                        <th>Lượt xem</th>
                        <th>Mã SP</th>
                        <th>Danh Mục</th>
                    </tr>

                </tfoot>
                <tbody>
                <?php
                    foreach ($data as $item) {
                        echo '
                        <tr>
                            <td><a href="?page=product&do=detail&id='.$item['id'].'">'.$item['title_product'].'</a></td>
                            <td>'.$item['price_old'].'</td>
                            <td>'.$item['price'].'</td>
                            <td>'.$item['total_review'].'</td>
                            <td>'.$item['id'].'</td>
                            <td>'.$item['title_category'].'</td>
                        </tr>
                    ';
                    }

                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>