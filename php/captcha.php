<?php
    session_start();

    if (isset ($_SESSION['username']))
    {
        if(isset($_POST['ok']))
        {
            if($_POST['txtCaptcha'] == NULL)
            {
                ?>
                <script>
                    !alert('Please enter the captcha code!')
                </script>
                <?php
            }
            else
            {
                if($_POST['txtCaptcha'] == $_SESSION['security_code'])
                {
                    ?>
                    <script>
                        if (!alert('Captcha Verified! You are NOT a ROBOT.\nWelcome Agency Store Manager!')) {
                            document.location = "../homepage.php";
                        }
                    </script>
                    <?php
                }
                else
                {
                ?>
                <script>
                    !alert('Something went wong!')
                </script>
                <?php
                }
            }
        }
    }
    else 
    {
        header("location: ../index.php");
    }
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Verify</title>
  <link rel="stylesheet" href="../css/captcha.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>Security Requirement!</header>
    <p>You must verified captcha before continue access!</p>
    <form action="./captcha.php" method="POST">
      <table class="user-add" align="center">
      <tr>
    <td align="left">
    <label for="captcha">Captcha</label>
    </td>
    <td>
    <input type="text" name="txtCaptcha" maxlength="10" size="32" />
    </td>
    <td>
    <img src="./random_captcha.php" />
    </td>
    </tr>
    <tr>
    <td> </td>
    <td>
    <input type='submit' name='ok' value="Check" />
    </td>
    </tr>    
    </table>
    </form>
  </div>
</body>
</html>
