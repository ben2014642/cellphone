<?php
// require_once("./Helper/db.php");
// echo $conn;
$sql = "SELECT * FROM cp_category";
$data_category = array();
$query = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($query,1)) {
    $data_category[] = $row;
}

?>
<div class="row">
    <h3>QUẢN LÝ DANH MỤC</h3>
</div>
<div class="row">
    
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
        <button type="button" onclick="add_category();" class="fl-right btn btn-primary">Thêm</button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tên Danh Mục</th>
                        <th>Trang Thái</th>
                        <th>Ngày Tạo</th>
                        <th>Lượt Xem</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Tên Danh Mục</th>
                        <th>Trang Thái</th>
                        <th>Ngày Tạo</th>
                        <th>Lượt Xem</th>
                        <th>Hành Động</th>
                    </tr>

                </tfoot>
                <tbody>
                    <?php
                        $action ='';
                        if (isset($_GET['do'])) {
                            $action = $_GET['do'];
                        }
                        if ($action == "edit") {
                            foreach ($data_category as $item) {
                                $status = $item['status'] == 1 ? "selected" : "";
                                echo '
                                <tr>
                                <td><input id="title_category-'.$item['id_category'].'" value="'.$item['title_category'].'" type="text" style="border: 1px solid #e3e6f0"></td>
                                    <td><select name="" id="status_category">
                                    <option '.$status.' value="0">Ẩn</option>
                                    <option '.$status.' value="1">Hiện</option>
                                     </select></td>
                                    <td>'.$item['created_at'].'</td>
                                    <td>'.$item['total_view'].'</td>
                                    <td><i onclick="update_category('.$item['id_category'].');" class="myIcon icon_update far fa-save"></i><i onclick="delete_category('.$item['id_category'].');" class="myIcon icon_del far fa-trash-alt"></i></td>
                                </tr>
                                ';
                            }
                        } else {
                            foreach ($data_category as $item) {
                            
                                $status = $item['status'] == 1 ? "Đã hiện" : "Đang ẩn";
                                echo '
                                <tr>
                                <td>'.$item['title_category'].'</td>
                                    <td>'.$status.'</td>
                                    <td>'.$item['created_at'].'</td>
                                    <td>'.$item['total_view'].'</td>
                                    <td><a href="?page=category&do=edit&id='.$item['id_category'].'"><i class="far fa-edit"></i></a></td>
                                </tr>
                                ';
                            }
                        }
                        
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>