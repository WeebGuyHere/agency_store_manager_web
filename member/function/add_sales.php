<?php
    session_start();
    require_once ('../../lib/connection.php');
    if (isset ($_SESSION['username']) && $_SESSION['level'] == 2 && ($_SESSION['security_code'])) 
        {
            if(isset($_POST['Add'])) 
            { 
                $idstore = $_POST['idstore'];
                $month = $_POST['month'];
                
                $sql0="select COUNT(MaPhieuXuat) AS XUATHIEN, SUM(TongTien) AS TOTAL from phieuxuathang 
                where MaDaiLy= '$idstore' and MONTH(NgayLapPhieu) = $month";          
                $query0=mysqli_query($conn,$sql0);
                $data = mysqli_fetch_object($query0); 
                
                $count = $data->XUATHIEN;
                $final = $data->TOTAL;

                $sql1="insert into doanhso (MaDaiLy, Thang, SoPhieuXuat, TongTriGia) 
                values ('$idstore','$month','$count','$final')";
                $run = mysqli_query($conn,$sql1);
                if ($run)
                {
                    ?>
                        <script>
                            if (!alert('Add Sales Report success!')) {
                            document.location = "../SalesReport.php";
                            }
                        </script>
                    <?php            
                }
                else
                {
                    ?>
                        <script>
                            if (!alert('Some thing went wrong!\nPlease try again!')) {
                            document.location = "../SalesReport.php";
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