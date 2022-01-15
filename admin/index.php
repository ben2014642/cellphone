<?php
    require_once('./Helper/helper.php');
    require_once('Helper/db.php');
    require_once('./pages/header.php');
?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <!-- Content Row -->
                    <?php
                        $page = '';
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        }
                        switch ($page) {
                            case 'category':
                                require_once('./modules/category.php');
                                break;
                            case 'product':
                                require_once('./modules/product.php');
                                break;
                            case 'test':
                                require_once('./modules/test.php');
                                break;
                            default:
                                require_once('./pages/dashboard.php'); 
                            break;
                        }

                    ?>

                </div>
                <!-- /.container-fluid -->
<?php
    require_once('./pages/footer.php');
?>