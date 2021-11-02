<?php
    session_start();
    require_once ('../../lib/connection.php');
    if (isset ($_SESSION['username']) && $_SESSION['level'] == 2 && ($_SESSION['security_code'])) 
        {
            if(isset($_POST['Add'])) 
            { 
                $idstore = $_POST['idstore'];
                $month = $_POST['month'];
                $incurred = $_POST['incurred'];

                $sql0="select * from cacdaily where MaDaiLy= '$idstore' ";          
                $query0=mysqli_query($conn,$sql0);
                $data = mysqli_fetch_object($query0); 
                
                $debt = $data->TienNo;
                $final = $incurred + $debt;

                $sql1="insert into congno (MaDaiLy, Thang, NoDau, PhatSinh, NoCuoi) 
                values ('$idstore','$month','$debt','$incurred','$final')";
                $run = mysqli_query($conn,$sql1);
                if ($run)
                {
                    ?>
                        <script>
                            if (!alert('Add Debt Report success!')) {
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
        }
        else 
        {
            header('Location: ../../index.php');
        }
?>