<?php
  session_start();
  if (isset($_SESSION['username']) && ($_SESSION['security_code']) )
  {
    require_once('../lib/connection.php');
    $query = "SELECT * FROM cacdaily";
    $result = mysqli_query($conn,$query);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/agencystore.css">
    <!--icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

  <main class="custom">
    <section class="second-header"> 
        <nav>
                <ul class="primary-nav">
                    
                    <li><a href="../homepage.php"><span class="iconn"><ion-icon name="home-outline"></ion-icon></span> Home</a></li>
                    <li><a href="#">Tổ chức</a>
                    <ul class ="menu-dropdown">
                        <li><a href="../php/AgencyStore.php">Quản lý các đại lý</a></li>
                        <li><a href="../php/addgoods.php">Quản lý mặt hàng</a></li>
                        <li><a href="#">Xuất phiếu</a>
                          <ul class ="menu-dropdown">
                            <li><a href="../php/Bill.php">Phiếu thu tiền</a></li>
                            <li><a href="../php/DeliveryNote.php">Phiếu xuất hàng</a></li>
                            
                          </li>
                          </ul></li>
                      </ul></li>
                    
                    <li><a href="#">Báo cáo</a>
                    <ul class ="menu-dropdown">
                      <li><a href="../php/SalesReport.php">Doanh số</a></li>
                    <li><a href="../php/DebtReport.php">Công nợ tháng</a></li>
                    </li></ul>
                    <li><a href="#">Khách hàng</a>
                      <ul class ="menu-dropdown">
                    <li><a href="../php/Feedback.php">Phản hồi</a></li>
                    <li><a href="../php/Request.php">Yêu cầu Khác hàng</a></li></li></ul>
                    <li><a href="#">Contact</a>
                    <ul class="menu-dropdown">
                      <li><a href="#">Hotline: 0948232811</a></li>
                      <li><a href="https://vi-vn.facebook.com/">Facebook</a></li>
                      <li><a href="https://www.instagram.com/">Instagram</a></li>
                    </ul></li>
                    <li class="search-icon">
                       <input type="search" placeholder="Tìm kiếm...">
                       <label class="icon">
                       <img src="../pic/Icon feather-search.png" alt="Search">
                       </label>
                    </li>
                    <button>
                    <li class ="login"><a href="../php/signout.php?logout">Đăng xuất</a></li>
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
          <li><a href="../php/AgencyStore.php">Quản lý các đại lý</a></li>
            <li><a href="../php/addgoods.php">Quản lý mặt hàng</a></li>
            <li><a href="#">Xuất phiếu</a>
            <ul class ="menu-dropdown">
                        <li><a href="../php/Bill.php">Phiếu thu tiền</a></li>
                        <li><a href="../php/DeliveryNote.php">Phiếu xuất hàng</a></li>
                        
                      </li>
                      </ul></li>
          </ul></li>
        <li><a href="#" class="feat-btn"><span class="iconn"><ion-icon name="warning-outline"></ion-icon></span>Báo Cáo</a>
          <ul class ="menu-dropdown1">
            <li><a href="../php/SalesReaport.php">Doanh số</a></li>
          <li><a href="../php/DebtReport.php">Công nợ tháng</a></li>
          </li></ul></li>
        <li><a href="#" class="feat-btn"><span class="iconn"><ion-icon name="accessibility-outline"></ion-icon></span>Khách Hàng</a>
          <ul class ="menu-dropdown1">
            <li><a href="../php/Feedback.php">Phản hồi</a></li>
            <li><a href="../php/Request.php">Yêu cầu Khác hàng</a></li></li></ul></li>
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
    <div class="container">
    <div class="row">
      <article class="col-sm-9">
        <div class="modal" style="margin-top:5px;" id="myModal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
             <div class="modal-header" style="height:50px;">
                 <h2 style="position: relative; bottom:5px; left:270px; ">Thêm đại lý</h2>
             </div>
            <div class="modal-body" style="height:170px; background: #ddd;">
              <div class="row" style="margin: 5px">
                <div class="form-group col-sm-6">
                 <input type="text"style="margin-bottom:10px; " placeholder="Mã đại lý" >
                <input type="text" style="margin-bottom:10px;" placeholder="Tên đại lý">   
                <input  type="text" style="margin-bottom:10px;" placeholder="Địa chỉ">
                <input  type="text" style="margin-bottom:10px;" placeholder="Quận">    
              </div>
              </div>
              <div class="form-group col-sm-6" style="position:relative; left:400px; bottom:145px;">
                <input type="text" style="margin-bottom:10px;" placeholder="Số điện thoại">
                <input type="text" style="margin-bottom:10px;" placeholder="Email">
                <input type="text" style="margin-bottom:10px;" placeholder="Tiền nợ">
                <input type="text" style="margin-bottom:10px;" placeholder="Ngày tiếp nhận">
              </div>  

         <input type="text" style="position:relative; left:240px; bottom:287px; width:45px;" placeholder="Loại" >
            </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-primary" >Thêm</button>
                  <Button class="btn btn-default" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
          </div>
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="position:relative; left:950px; top:30px;">Thêm</button>
         <button class="btn btn-primary" style="position:relative; left:950px; top:30px;">Lưu</button>
         <button class="btn btn-primary" style="position:relative; left:950px; top:30px;">Refresh</button>
      </div>
</article>           
</div>
<table border=1 cellspacing=0 cellpading=0>  
<t>
  <th>Mã Đại Lý</th>
  <th>Tên Đại Lý</th>
  <th>Loại</th>
  <th>Địa chỉ</th>
  <th>Quận</th>
  <th>Tel</th>
  <th>Email</th>
  <th>Ngày Tiếp Nhận</th>
  <th>Tiền Nợ</th>
  <th>Thay đổi</th>
  </t>
  <?php 
          while($rows=mysqli_fetch_array($result))
          {
        ?>
        <tr>
          <td><?php echo $rows['MaDaiLy']; ?></td>
          <td><?php echo $rows['TenDaiLy']; ?></td>
          <td><?php echo $rows['Loai']; ?></td>
          <td><?php echo $rows['DiaChi']; ?></td>
          <td><?php echo $rows['Quan']; ?></td>
          <td><?php echo $rows['DienThoai']; ?></td>
          <td><?php echo $rows['Email']; ?></td>
          <td><?php echo $rows['NgayTiepNhan']; ?></td>
          <td><?php echo $rows['TienNo']; ?></td>
          <td><a class ="button_change" href="./function/edit_store.php?id=<?php echo $rows['MaDaiLy']; ?>">Sửa</a>
          <a class ="button_change" href="./function/del_store.php?id=<?php echo $rows['MaDaiLy']; ?>">Xoá</a></td>
           
        </tr>
        <?php
          }
        ?>
  </table>  
  
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>

<?php
  }
  else 
  {
    ?>
      <script>
        if (!alert('You MUST login first!')) {
          document.location = "./login.php";
        }
        </script>
        <?php
  }
?>