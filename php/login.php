<?php
  session_start();
  require_once("../lib/connection.php");
  require_once("../lib/password.php"); //yes, bcrypt hashing password
  

  if (isset($_POST["submit"])) 
  {    
    $level = $_POST["level"];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($_POST['txtCaptcha'] == NULL)
    {
        ?>
        <script>
            !alert('Please enter the captcha code!')
        </script>
        <?php
    }
    else if ($username == "" || $password == "") //return login page if username or password empty
    { 
        ?>
                <script>
                    if (!alert('Username or Password Empty!')) {
                        document.location = "./login.php";
                    }
                </script>
                <?php
    } 
    else if($_POST['txtCaptcha'] == $_SESSION['security_code'])
    {
      $sql = "select * from login where username = '$username' and level = '$level'";
      $query = mysqli_query($conn,$sql);
      $passhash = mysqli_fetch_object($query);
      
      //verify user 
      if (password_verify($password, $passhash->password)) 
      {
          $_SESSION['username'] = $username;
          $_SESSION['level'] = $level;
          if ($level == 1)
          {
              ?>
              <script>
                  if (!alert('Captcha Verified! You are NOT a ROBOT.\nWelcome Adminstrator - Agency Store Manager!')) {
                      document.location = "../homepage.php";
                  }
              </script>
              <?php
          }
          else if ($level == 2)
          {
              ?>
              <script>
                  if (!alert('Captcha Verified! You are NOT a ROBOT.\nWelcome Member -  Agency Store Manager!')) {
                      document.location = "../member.php";
                  }
              </script>
              <?php
          }             
      } 
      else
      {               
              ?>
              <script>
              if (!alert('User or Password NOT Found!')) 
              { //return login page if username of password not found in database
              document.location = "./login.php";
              }
              </script>
              <?php      
      }
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

    <title>Agency Store Manager - Login</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico" />
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-lg-img">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Agency Store Manager!</h1>
                                    </div>
                                    <form method="POST" class="user">
                                        <div class="form-group">
                                            <select class="form-control" name="level" required>
                                            <option value=''>Choose Account Type</option>
                                            <option value='1'>Adminstrator</option>
                                            <option value='2'>Member</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name = "username" class="form-control" placeholder="Enter Username..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name = "password" id="password" class="form-control" placeholder="Password" required>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                            <input type="text" name="txtCaptcha" class="form-control" placeholder="Captcha Code" required>
                                            </div>
                                            <div class="col">
                                            <img src="./random_captcha.php" />
                                            </div>
                                        </div><br>
                                        <div class="form-group">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" onclick="ShowPass()" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Show Password
                                            </label>
                                            </div>
                                        </div>
                                        <hr>
                                        <input type="submit" name="submit" class="btn btn-primary btn-user btn-block"  value="Sign In">
                                         
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="#noticemodal" data-toggle="modal">Forgot Password? / New Memeber?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!--Modal forget/new member-->
    <div class="modal fade" id="noticemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin đến bạn</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Nếu bạn quên mật khẩu, liên hệ quản trị viên giúp bạn đặt lại mật khẩu tài khoản.</p>
                    <p>Hiện tại trang chưa cung cấp nút đăng ký tài khoản</p>
                    <p>Liên hệ quản trị viên để đăng ký tài khoản và đặt cấp độ tài khoản</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Thoát</button>
                </div>
            </div>
        </div>
    </div>

    <!--Show Password-->
    <script>
    function ShowPass() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>