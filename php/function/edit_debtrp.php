<?php
session_start();
require_once ("../../lib/connection.php");
$mth = $_GET['Mt'];
$id = $_GET['ID'];
$qry = mysqli_query($conn,"SELECT * FROM congno where Thang ='$mth' and MaDaily = '$id'"); 
$data0 = mysqli_fetch_array($qry);
 
if (isset ($_SESSION['username']) && $_SESSION['level'] == 1 && ($_SESSION['security_code'])) 
{
    
    if(isset($_POST['Update'])) 
    {
        $idstore = $_POST['idstore'];
        $month = $_POST['month'];
        $incurred = $_POST['incurred'];

        $sql0="select * from cacdaily where MaDaiLy= '$idstore' ";          
        $query0=mysqli_query($conn,$sql0);
        $data = mysqli_fetch_object($query0); 
        
        $debt = $data->TienNo;
        $final = $incurred + $debt;

        $sql1="UPDATE congno SET NoDau ='$debt', PhatSinh ='$incurred', NoCuoi = '$final' WHERE Thang ='$month' AND MaDaiLy ='$idstore'";
        $run = mysqli_query($conn,$sql1);
        if ($run)
        {
            ?>
                <script>
                    if (!alert('Update Debt Report success!')) {
                    document.location = "../DebtReport.php";
                    }
                </script>
            <?php            
        }
        else
        {
            ?>
                <script>
                    if (!alert('Some thing went wrong!\nPlease try again!')) {
                    document.location = "../DebtReport.php";
                }
            </script>
            <?php
        } 
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency Store Manager - Admin System</title>
    <link rel="icon" type="image/x-icon" href="../../img/favicon.ico" />
    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
    <!--Boostrap DatePicker-->
	<link rel="stylesheet" type="text/css" href="../../vendor/bootstrap-datepicker/bootstrap-datepicker.css" >

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Store Manager <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../../homepage.php">
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
                        <a class="collapse-item" href="../AgencyStore.php">Thông tin các đại lý</a>
                        <a class="collapse-item" href="../Addgoods.php">Thông tin các mặt hàng</a>
                        <a class="collapse-item" href="../Bill.php">Thu tiền</a>
                        <a class="collapse-item" href="../DeliveryNote.php">Xuất hàng</a>
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
                        <a class="collapse-item" href="../SalesReport.php">Doanh số tháng</a>
                        <a class="collapse-item" href="../DebtReport.php">Công nợ tháng</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-users-cog"></i>
                    <span>For Adminstrator</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../usermanger.php">Quản lý người dùng</a>
                        <a class="collapse-item" href="../AgentOrganization.php>Quy định số đại lý</a>
                        <a class="collapse-item" href="../TypeStore.php">Các loại đại lý</a>

                    </div>
                </div>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#aboutus" data-toggle="modal">
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
                                    src="../../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="../Changepassword.php">
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
                <div class="container-fluid" style="margin: auto; width: 50%;">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Sửa báo cáo nợ</h1>
                    <br>

                    <div class="card shadow mb-4" style="width: 50rem;">
                        <div class="card-header py-3">
                          <h4><?php echo "Sửa thông tin báo cáo nợ của đại lý ".$id; ?></h4>  
                        </div>
                        <div class="card-body">
                        <form method="POST">
                        <div class="form-group">
                        <input type="text" name="idstore" value ="<?php echo $data0['MaDaiLy'] ?>" class="form-control" placeholder="Nhập mã đại lý" readonly>
                        </div>
                        <div class="form-group">
                        <input type="text" name="month" value ="<?php echo $data0['Thang'] ?>" class="form-control" placeholder="Tháng" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" name="incurred" value ="<?php echo $data0['PhatSinh'] ?>" class="form-control" placeholder="Nhập phí phát sinh" required>
                        </div>
                            <div class="modal-footer">
                                <a href="../DebtReport.php" class="btn btn-secondary active" role="button" aria-pressed="true">Huỷ</a>
                                <button type="submit" name="Update" class="btn btn-primary">Sửa</button>
                            </div>
                          </form>
                        </div>
                    </div>

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

    
    <!--Modal about team-->
    <div class="modal fade" id="aboutus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Về chúng tôi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-dark">
               <h5 class="card-title text-dark">Trang web quản lý các đại lý</h5>
               <h5 class="card-title text-dark">Các thành viên: </h5>
               <p>1. Ngô Thành Long</p>
               <p>2. Đỗ Bá Sơn</p>
               <p>3. Trịnh Tiến Anh</p>
               <p>4. Vũ Quốc Hưng</p>
               <p>5. Nguyễn Ngọc Hoàng Hà</p>
               <br>
               <h5 class="card-title text-dark">Các khuôn mẫu CSS, template và thư viện sử dụng</h5>
               <p>1. Khuôn mẫu CSS Bootstrap: <a href="https://getbootstrap.com/">https://getbootstrap.com/</a></p>
               <p>2. Bootstrap DatePicker: <a href="https://github.com/uxsolutions/bootstrap-datepicker">https://github.com/uxsolutions/bootstrap-datepicker</a></p>
               <p>3. DataTables: <a href="https://datatables.net/">https://datatables.net/</a></p>
               <p>4. Fontawesome phiên bản free</p>
               <p>5. jQuery và jQuery-easing: <a href="https://jquery.com/">https://jquery.com/</a></p>
               <p>6. Start Bootstrap Template: <a href="https://startbootstrap.com/">https://startbootstrap.com/</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
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
                    <a class="btn btn-primary" href="../signout.php?logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>
     <!--Boostrap DatePicker-->
    <script type="text/javascript" src="../../vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script>
			$(function() {
			$('.dates #date').datepicker({
				'format': 'yyyy-mm-dd',
				'autoclose': true
			});
		});
			</script>                               
</body>

</html>
<?php
        
        
  }
  else 
  {
    header('Location: ../../index.php');
  }
?>