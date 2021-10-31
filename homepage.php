<?php
  session_start();
  if (isset($_SESSION['username']) && ($_SESSION['security_code']) )
  {
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>

<body>
 
<body>
 
 <img class="pic2" src="./pic/5.jpg">
 
 <img class="pic3" src="./pic/2.jpg">
 <li class ="QL">Trang web quản lý đại lý cho các doanh</li>
  <li class ="QL2"> nghiệp vừa và nhỏ</li>
  <li class="QL3">Trang web giúp quản lý các đại lý một cách khoa học và hiệu quả</li>
  <button class="button">
    <li class="QL4"><a herf="#">Đăng kí làm thành viên</a><span><ion-icon class="icoc" name="arrow-forward-circle-outline"></ion-icon></span></li>
  </button>
  <li class="ND1"></li>
 <main class="custom">

</li>
   <section class="second-header"> 
       <nav>
               <ul class="primary-nav">
                 <li>  
                   <li><a href="./index.php"><span><ion-icon name="home-outline"></ion-icon></span> Home</a></li>
                   <li><a href="#">Admin</a>
                   <ul class="menu-dropdown">
                     <li><a href="#">Quản trị tài khoản</a></li>
                     <li><a href="#">Facebook</a></li>
                     <li><a href="#">Instagram</a></li>
                   </ul></li>
                   <li><a href="#">Tổ chức</a>
                     <ul class ="menu-dropdown">
                       <li><a href="./php/ThemdaiLy.php">Quản lý các đại lý</a></li>
                       <li><a href="./php/ThemMatHang.php">Quản lý mặt hàng</a></li>
                       <li><a href="#">Xuất phiếu</a>
                       <ul class ="menu-dropdown">
                        <li><a href="./php/PhieuThuTien.php">Phiếu thu tiền</a></li>
                        <li><a href="./php/Phieuxuathang.php">Phiếu xuất hàng</a></li>
                        
                      </li>
                      </ul></li>
                     </ul></li>
                   <li><a href="#">Báo cáo</a>
                   <ul class ="menu-dropdown">
                     <li><a href="./php/SalesReport.php">Doanh số</a></li>
                   <li><a href="./php/DebtReport.php">Công nợ tháng</a></li>
                   </li></ul>
                   <li><a href="#">Khách hàng</a>
                     <ul class ="menu-dropdown">
                   <li><a href="./php/PhanHoi.php">Phản hồi</a></li>
                   <li><a href="./php/YeuCau.php">Yêu cầu Khác hàng</a></li></li></ul>
                  
                   <li class="search-icon">
                      <input type="search" placeholder="Tìm kiếm...">
                      <label class="icon">
                      <img src="./pic/Icon feather-search.png" alt="Search">
                      </label>
                   </li>
                    <button>
                    <li class ="login"><a href="./php/signout.php?logout">Đăng xuất</a></li>
                    </button>
                </ul>         
        </nav>  
         
    </section>
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
            <li><a href="./php/ThemdaiLy.php">Quản lý các đại lý</a></li>
            <li><a href="./php/ThemMatHang.php">Quản lý mặt hàng</a></li>
            <li><a href="#">Xuất phiếu</a>
            <ul class ="menu-dropdown1">
                        <li><a href="./php/PhieuThuTien.php">Phiếu thu tiền</a></li>
                        <li><a href="./php/Phieuxuathang.php">Phiếu xuất hàng</a></li>
                        
                      </li>
                      </ul></li>
          </ul></li>
        <li><a href="#" class="feat-btn"><span class="iconn"><ion-icon name="warning-outline"></ion-icon></span>Báo Cáo</a>
          <ul class ="menu-dropdown1">
            <li><a href="./php/SalesReport.php">Doanh số</a></li>
          <li><a href="./php/DebtReport.php">Công nợ tháng</a></li>
          </li></ul></li>
        <li><a href="#" class="feat-btn"><span class="iconn"><ion-icon name="accessibility-outline"></ion-icon></span>Khách Hàng</a>
          <ul class ="menu-dropdown1">
            <li><a href="./php/PhanHoi.php">Phản hồi</a></li>
            <li><a href="./php/YeuCau.php">Yêu cầu Khác hàng</a></li></li></ul></li>
        <li><a href="#" class="feat-btn"><span class="iconn"><ion-icon name="call-outline"></ion-icon></span>Contact</a>
          <ul class="menu-dropdown1">
            <li><a href="#">Hotline: 0948232811</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
          </ul></li>
        
      </ul>
    </div>
    
    </main>
    <hr style="border: 0">
    <script>
      $('.feat-btn').click(function(){
        $('.menu-dropdown1').toggleClass("show");
      });
    </script>
   <div id="footer">
    <ul class="list-inline">
        <li><a href="#">Home</a></li><span>|</span>
        <li><a href="#">About Us</a></li><span>|</span>
        <li><a href="#">Contact Us</a></li><span>|</span>
        <li><a href="#">Feedback</a></li>
        
    </ul>
</div>
</div>
</body>

</html>
<?php
  }
  else 
  {
    header("location: ./index.php");
  }
?>