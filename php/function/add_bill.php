<?php
    session_start();
    require_once ('../../lib/connection.php');
    if (isset ($_SESSION['username']) && $_SESSION['level'] == 1 && ($_SESSION['security_code'])) 
        {
            if(isset($_POST['Add'])) 
            { 
                $idbill = $_POST['idbill'];
                $idstore = $_POST['idstore'];
                $date = $_POST['date'];
                $price = $_POST['price'];

                $sql0="select * from cacdaily where MaDaiLy= '$idstore' ";

                
                $query0=mysqli_query($conn,$sql0);
                $data = mysqli_fetch_object($query0); 
                    if ($price < $data->TienNo || $price == $data->TienNo || $data->TienNo == 0)
                    {
                        $tel = $data->DienThoai;
                        $addr = $data->DiaChi;
                        $email = $data->Email;
                        $query = "INSERT INTO `phieuthutien`(`MaPhieuThu`, `MaDaiLy`, `DienThoai`, `DiaChi`, `Email`, `NgayThuTien`, `SoTienThu`) 
                        VALUES ('$idbill','$idstore','$tel','$addr','$email','$date','$price')";
                        $run = mysqli_query($conn,$query);
                        if ($run)
                        {
                        ?>
                                <script>
                                    if (!alert('Add Bill success!')) {
                                        document.location = "../Bill.php";
                                    }
                                </script>
                                <?php
                            
                        }
                    }
                    else
                    {
                    ?>
                    <script>
                        if (!alert('The amount collected exceeds the amount owed by the store!')) {
                            document.location = "../Bill.php";
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