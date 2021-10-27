<?php
  session_start();
  require_once("../lib/connection.php");
  require_once("../lib/password.php"); //yes, bcrypt hashing password
  $username = isset($_POST['username']);
  $password = isset($_POST['password']);

  if (isset($_POST["submit"])) {
    
    if ($username == "" || $password == "") { //return login page if username or password empty
        ?>
                <script>
                    if (!alert('Username or Password Empty!')) {
                        document.location = "./login.php";
                    }
                </script>
                <?php
    } 
    else 
    {
    $sql = "select * from login where username = '$username'";
	  $query = mysqli_query($conn,$sql);
    $passhash = mysqli_fetch_object($query);
    
    //verify user 
    if (password_verify($password, $passhash->password)) 
    {
        $_SESSION['username'] = $username;
        header("location: ./captcha.php");             
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../css/loginstyle.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body> 
  <div class="wrapper">
    <header>Login</header>
    <form method="POST">
      <div class="field email">
        <div class="input-area">
          <input type="text" name = "username" placeholder="Username">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Tài khoản không được để trống</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" name = "password" placeholder="Password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Mật khẩu không được để trống</div>
      </div>
      <div class="pass-txt"><a href="#">Quên mật khẩu?</a></div>
      <input type="submit" name="submit" value="Sign In">
    </form>
    <div class="sign-txt">Chưa có tài khoản ? <a href="#">Đăng kí ngay</a></div>
  </div>
</main>

</body>

</body>
</html>