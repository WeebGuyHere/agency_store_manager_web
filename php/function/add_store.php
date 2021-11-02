<?php
    session_start();
    require_once ('../../lib/connection.php');
    if (isset ($_SESSION['username']) && $_SESSION['level'] == 1 && ($_SESSION['security_code'])) 
    {
        if(isset($_POST['Add'])) 
        { 
            $idstore = $_POST['idstore'];
            $namestore = $_POST['namestore'];
            $type = $_POST['type'];
            $addr = $_POST['addr'];
            $district = $_POST['district'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $date = $_POST['date'];
            $debt = $_POST['debt'];

            $sql0="select * from cacdaily where TenDaiLy= '$namestore' ";
            $sql1="SELECT COUNT(Loai) AS vail FROM cacdaily where Loai = '$type'"; //count type available
            $sql_debt="SELECT NoToiDa FROM loaidaily where Loai = '$type'";  //get debt from type-store input
            $policy="select * from tochucdaily";
            
            $query=mysqli_query($conn,$sql0);
            $query1=mysqli_query($conn,$policy);
            $query2=mysqli_query($conn,$sql_debt);
            $query_vail=mysqli_query($conn,$sql1);
            
            $get_policy = mysqli_fetch_object($query1);
            $get_debt = mysqli_fetch_object($query2); //get debt
            $get_vail=mysqli_fetch_object($query_vail); //get vail
            
            
            if(mysqli_num_rows($query) != "" ) //checking name store input to make sure it does NOT exists from DATABASE
            {
                ?>
                    <script>
                        if (!alert('This name of store already exists!')) {
                            document.location = "../AgencyStore.php";
                        }
                    </script>
                    <?php
            }
            else
            {
                if ($get_vail->vail < $get_policy->SoDaiLyToiDa && $debt < $get_debt->NoToiDa)
                {
                    $query = "INSERT INTO `cacdaily`(`MaDaiLy`, `TenDaiLy`, `Loai`, `DiaChi`, `Quan`, `DienThoai`, `Email`, `NgayTiepNhan`, `TienNo`) 
                    VALUES ('$idstore','$namestore','$type','$addr',' $district','$tel','$email','$date','$debt')";
                    $run = mysqli_query($conn,$query);
                    if ($run)
                    {
                    ?>
                            <script>
                                if (!alert('Add store success!')) {
                                    document.location = "../AgencyStore.php";
                                }
                            </script>
                            <?php
                    }
                }
                else
                {
                ?>
                <script>
                    if (!alert('Store has already max or\nDebt exceeds the limit')) {
                        document.location = "../AgencyStore.php";
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