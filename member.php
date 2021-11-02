<?php
//admin login
  session_start();
  if (isset($_SESSION['username']) && $_SESSION['level'] == 2 && ($_SESSION['security_code']) )
  {
    

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency Store Manager - For Member Account</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Store Manager <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="./member.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>HomePage</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Menu Tổ chức -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-store"></i>
                    <span>Tổ chức</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="./member/AgencyStore.php">Thông tin các đại lý</a>
                        <a class="collapse-item" href="./member/Addgoods.php">Thông tin các mặt hàng</a>
                        <a class="collapse-item" href="./member/Bill.php">Thu tiền</a>
                        <a class="collapse-item" href="./member/DeliveryNote.php">Xuất hàng</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Báo cáo</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="./member/SalesReport.php">Doanh số tháng</a>
                        <a class="collapse-item" href="./member/DebtReport.php">Công nợ tháng</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                About US
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Nav Item - About US -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-address-book"></i>
                    <span>Về chúng tôi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo "Hello, ".$_SESSION['username']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="./php/Changepassword.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Danh sách các tính năng của thành viên</h1>
                    <br>
                    <!--Line 01-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card text-white bg-primary mb-3" style="max-width: 40rem;">
                            <div class="card-header bg-primary">Tính năng</div>
                                <div class="card-body">
                                    <h5 class="card-title">Xem thông tin các đại lý</h5>
                                    <p class="card-text">Bạn chỉ có thể thêm tìm kiếm các bản ghi</p>
                                    <a href="./php/AgencyStore.php" class="btn btn-light">Go</a>
                                </div>
                            </div>
                        </div>
                            <div class="col-sm-6">
                                <div class="card text-white bg-secondary mb-3" style="max-width: 40rem;">
                                <div class="card-header bg-secondary">Tính năng</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Thêm thông tin các mặt hàng</h5>
                                        <p class="card-text">Có thể thêm, chỉnh sửa, xoá các mặt hàng đang có</p>
                                        <a href="./php/addgoods.php" class="btn btn-light">Go</a>
                                    </div>
                                </div>
                            </div>        
                    </div>
                    <br><br>
                    <!--Line 02-->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card text-white bg-success mb-3" style="max-width: 40rem;">
                            <div class="card-header bg-success">Tính năng</div>
                                <div class="card-body">
                                    <h5 class="card-title">Báo cáo doanh số tháng</h5>
                                    <p class="card-text">Lấy báo cáo doanh số đại lý theo tháng.</p>
                                    <a href="./php/SalesReport.php" class="btn btn-light">Go</a>
                                </div>
                            </div>
                        </div>
                            <div class="col-sm-6">
                                <div class="card text-white bg-danger mb-3" style="max-width: 40rem;">
                                <div class="card-header bg-danger">Tính năng</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Báo cáo công nợ tháng</h5>
                                        <p class="card-text">Lấy báo cáo nợ cuối đại lý theo tháng</p>
                                        <a href="./php/DebtReport.php" class="btn btn-light">Go</a>
                                    </div>
                                </div>
                            </div>        
                    </div>
                    <br><br>
                    <!--Line 03-->
                    <div class="row">
                        <div class="col-sm-6">
                        <div class="card text-white bg-warning mb-3" style="max-width: 40rem;">
                                <div class="card-header bg-warning">Tính năng</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Tạo phiếu xuất hàng</h5>
                                        <p class="card-text">Có thể thêm, chỉnh sửa, xoá các phiếu xuất hàng</p>
                                        <a href="./php/DeliveryNote.php" class="btn btn-light">Go</a>
                                    </div>
                                </div>
                            </div>        
                            <div class="col-sm-6">
                            <div class="card text-white bg-dark mb-3" style="max-width: 40rem;">
                            <div class="card-header bg-dark">Tính năng</div>
                                <div class="card-body">
                                    <h5 class="card-title">Tạo phiếu thu tiền</h5>
                                    <p class="card-text">Có thể thêm, chỉnh sửa, xoá các phiếu thu tiền</p>
                                    <a href="./php/Bill.php" class="btn btn-light">Go</a>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <br><br>
                    
                    
                </div>
                <!-- /.container-fluid --> 
            

            </div>
            <!-- End of Main Content -->
             <!-- Footer -->
             <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span> Agency Store Manager Web Version</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="./php/signout.php?logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php
  }
  else 
  {
    header('Location: ./index.php');
    exit;
  }
?>