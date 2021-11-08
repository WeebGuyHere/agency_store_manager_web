<?php
    session_start();
    require_once ('../../lib/connection.php');
    require_once ('../../lib/password.php');
    if (isset ($_SESSION['username']) && $_SESSION['level'] == 1 && ($_SESSION['security_code'])) 
    {
        if(isset($_POST['Add'])) 
        { 
            $username = $_POST['username'];
            $level = $_POST['level'];
            $defaultpass = 'Agencystore123'; //This is default password for all new account. Yes, system will automatic hash with Bcrypt

            $sql0="select * from login where username= '$username' ";
            $query0=mysqli_query($conn,$sql0);
            
            if (mysqli_num_rows($query0) != "" ) //checking username input to make sure it does NOT exists from DATABASE
            {
                ?>
                    <script>
                        if (!alert('This account already exists!')) {
                            document.location = "../usermanger.php";
                        }
                    </script>
                    <?php
            }
            else
            {
                    //hash default password with BCrypt
                    $pass_hash = password_hash($defaultpass, PASSWORD_BCRYPT, array("cost" => 10));
                    $query = "INSERT INTO `login`(`username`, `password`, `level`) 
                    VALUES ('$username','$pass_hash','$level')";
                    $run = mysqli_query($conn,$query);
                    if ($run)
                    {
                    ?>
                            <script>
                                if (!alert('Add account success!')) {
                                    document.location = "../usermanger.php";
                                }
                            </script>
                            <?php
            }
                    else
                    {
                    ?>
                    <script>
                        if (!alert('Some thing wrong!\nPlease try again!')) {
                            document.location = "../usermanger.php";
                        }
                    </script>
                    <?php
                }
            }
        }
    }
    else 
    {
        header('Location: ../../index.php');
    }
?>