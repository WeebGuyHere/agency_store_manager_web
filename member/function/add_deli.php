<?php
    session_start();
    require_once ('../../lib/connection.php');
    if (isset ($_SESSION['username']) && $_SESSION['level'] == 2 && ($_SESSION['security_code'])) 
        {
            if(isset($_POST['Add'])) 
            { 
                $exportID = $_POST['exportID'];
                $idstore = $_POST['idstore'];
                $date = $_POST['date'];
                    
                $query = "INSERT INTO phieuxuathang (MaPhieuXuat, MaDaiLy, NgayLapPhieu) 
                VALUES ('$exportID','$idstore','$date')";
                $run = mysqli_query($conn,$query);
                if ($run)
                {
                    ?>
                        <script>
                            if (!alert('Add Bill success!')) {
                            document.location = "../DeliveryNote.php";
                            }
                        </script>
                    <?php            
                }
                else
                {
                    ?>
                        <script>
                            if (!alert('Some thing went wrong!\nPlease try again!')) {
                            document.location = "../DeliveryNote.php";
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