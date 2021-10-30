<?php
  session_start();
  require_once('../../lib/connection.php');
  if (isset($_SESSION['username']) && ($_SESSION['security_code']) )
  {
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/agencystore.css">
    <!--icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

</head>

<body>

  <main class="custom">
    <section class="second-header"> 
        <nav>
                <ul class="primary-nav">
                    
                    <li><a href="../homepage.php"><span class="iconn"><ion-icon name="home-outline"></ion-icon></span> Home</a></li>
                    <li><a href="#">Tổ chức</a>
                      <ul class ="menu-dropdown">
                        <li><a href="../../php/ThemdaiLy.php">Quản lý các đại lý</a></li>
                        <li><a href="../../php/ThemMatHang.php">Quản lý mặt hàng</a></li>
                        <li><a href="../../php/XuatPhieu.php">Xuất phiếu</a>
                        <ul class ="menu-dropdown">
              <li><a href="../../php/PhieuThuTien.php">Phiếu thu tiền</a></li>
              <li><a href="../../php/Phieuxuathang.php">Phiếu xuất hàng</a></li>
              
            </li>
            </ul></li>
                      </ul></li>
                    
                    <li><a href="#">Báo cáo</a>
                    <ul class ="menu-dropdown">
                      <li><a href="../../php/DoanhSo.php">Doanh số</a></li>
                    <li><a href="../../php/CongNo.php">Công nợ tháng</a></li>
                    </li></ul>
                    <li><a href="#">Khách hàng</a>
                      <ul class ="menu-dropdown">
                    <li><a href="../../php/PhanHoi.php">Phản hồi</a></li>
                    <li><a href="../../php/YeuCau.php">Yêu cầu Khác hàng</a></li></li></ul>
                    <li><a href="#">Contact</a>
                    <ul class="menu-dropdown">
                      <li><a href="#">Hotline: 0948232811</a></li>
                      <li><a href="https://vi-vn.facebook.com/">Facebook</a></li>
                      <li><a href="https://www.instagram.com/">Instagram</a></li>
                    </ul></li>
                    <li class="search-icon">
                       <input type="search" placeholder="Tìm kiếm...">
                       <label class="icon">
                       <img src="../../pic/Icon feather-search.png" alt="Search">
                       </label>
                    </li>
                    <button>
                    <li class ="login"><a href="../../php/signout.php?logout">Đăng xuất</a></li>
                    </button>
                </ul>         
        </nav>   
    </section>
    
    <input type="checkbox" id="check">
      <label for="check">
       
        <i class="fas fa-bars" id="btn" ></i>
        <i class="fas fa-times" id="cancel"></i>
      </label>
      <input type="checkbox" id="check">
      <label for="check">
       
        <i class="fas fa-bars" id="btn" ></i>
        <i class="fas fa-times" id="cancel"></i>
      </label>
    <div class="slidebar">
      
      <header>Menu</header>
      <ul>
        <li><a href="#" class="feat-btn"><span class="iconn"><ion-icon name="home-outline"></ion-icon></span>Home</a></li>
        <li><a href="#" class="feat-btn"><span class="iconn"><ion-icon name="briefcase-outline"></ion-icon></span>Tổ Chức</a>
          <ul class ="menu-dropdown1">
            <li><a href="../../php/ThemdaiLy.php">Quản lý các đại lý</a></li>
            <li><a href="../../php/ThemMatHang.php">Quản lý mặt hàng</a></li>
            <li><a href="../../php/XuatPhieu.php">Xuất phiếu</a>
            <ul class ="menu-dropdown1">
              <li><a href="../../php/PhieuThuTien.php">Phiếu thu tiền</a></li>
              <li><a href="../../php/Phieuxuathang.php">Phiếu xuất hàng</a></li>
              
            </li>
            </ul> </li>
          </ul></li>
        <li><a href="#" class="feat-btn"><span class="iconn"><ion-icon name="warning-outline"></ion-icon></span>Báo Cáo</a>
          <ul class ="menu-dropdown1">
            <li><a href="../../php/DoanhSo.php">Doanh số</a></li>
          <li><a href="../../php/CongNo.php">Công nợ tháng</a></li>
          </li></ul></li>
        <li><a href="#" class="feat-btn"><span class="iconn"><ion-icon name="accessibility-outline"></ion-icon></span>Khách Hàng</a>
          <ul class ="menu-dropdown1">
            <li><a href="../../php/PhanHoi.php">Phản hồi</a></li>
            <li><a href="../../php/YeuCau.php">Yêu cầu Khác hàng</a></li></li></ul></li>
        <li><a href="#" class="feat-btn"><span class="iconn"><ion-icon name="call-outline"></ion-icon></span>Contact</a>
          <ul class="menu-dropdown1">
            <li><a href="#">Hotline: 0948232811</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
          </ul></li>
        
      </ul>
    </div>
    
    </main>
    
      
      
      <br><br>
    </form>
  </div>
  <body class="add-store">
    <form class="add-form">
        <div class="form-group">
         <li>Mã đại lý</li> <input class="input0" type="text" >
        </div>
        <div class="form-group">
         <li>Tên đại lý</li><input type="text">
     </div>
     <div class="form-group">
         <li>Địa chỉ</li><input class="input1" type="text">
     </div>
     <div class="form-group">
         <li>Quận</li><input class="input2" type="text">
     </div>
     
    </form>
    <form class="add-form2">
     <div class="form-group">
         <li>Điện Thoại</li><input class="input3" type="text">
     </div>
     <div class="form-group">
         <li>Email</li><input class="input4" type="text">
     </div>
     <div class="form-group">
         <li>Tiền nợ</li><input class="input5 type="text">
         </div>
     <div class="form-group">
         <li>Ngày tiếp nhận</li><input type="text">
         </div>
         <div class="form-group">
         <li class="type1">Loại</li> <input class="input6" type="text" >
        </div>
    </form></body>
  
    <button class="type-form1">
        <li><a herf="#">Thêm</a></li>
    </button>
    <button class="type-form2">
        <li><a herf="#">Hủy</a></li>
    </button>
  </body>
  
</body>
<div class="footer">
    <ul class="list-inline">
        <li><a href="#">Home</a></li><span>|</span>
        <li><a href="#">About Us</a></li><span>|</span>
        <li><a href="#">Contact Us</a></li><span>|</span>
        <li><a href="#">Feedback</a></li>
        </ul>
  </div>
</html>

<?php
  }
  else 
  {
    ?>
      <script>
        if (!alert('You MUST login first!')) {
          document.location = "././login.php";
        }
        </script>
        <?php
  }
?>