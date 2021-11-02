<?php
//reset password account 
session_start();
include ("../../lib/connection.php");
include ("../../lib/password.php");
$id = $_GET['ID'];
$qry = mysqli_query($conn,"SELECT * FROM login where ID ='$id'"); 
$data = mysqli_fetch_object($qry); 
if (isset ($_SESSION['username']) && $_SESSION['level'] == 1 && ($_SESSION['security_code'])) 
{
        $username = $data->username;
        if ($_SESSION['username'] == $username)
        {
            ?>
                <script>
                    if (!alert('Lol nice try!\nYou cannot change the account level you are currently logged in with!\nUse change password for account you are currently logged in with!')) {
                        document.location = "../usermanger.php";
                    }
                </script>
                <?php
        }
        else
        {
        $level = $data->level;
        //hash default password with BCrypt
        $defaultpass = 'Agencystore123'; //This is default password for all new account. Yes, system will automatic hash with Bcrypt
        $pass_hash = password_hash($defaultpass, PASSWORD_BCRYPT, array("cost" => 10)); 
            $sql="UPDATE login SET  password = '$pass_hash', level ='$level' WHERE ID = '$id'";
            $result = mysqli_query($conn, $sql);
            
            if ($result) 
            {
                ?>
                <script>
                    if (!alert('Reset password account success!')) {
                        document.location = "../usermanger.php";
                    }
                </script>
                <?php
                mysqli_close($conn);
            }
            else 
            {
                ?>
                <script>
                    if (!alert('Something wrong in here!')) {
                        document.location = "../usermanger.php";
                    }
                </script>
                <?php
            }
        }
        
    }
    else 
    {
        header('Location: ../../index.php');
    }
    
?>