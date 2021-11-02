<?php
    session_start();
    require_once ('../../lib/connection.php');
    if (isset ($_SESSION['username']) && $_SESSION['level'] == 1 && ($_SESSION['security_code'])) 
    {
        $id_ex = $_SESSION['id_ex'];
        if(isset($_POST['Add'])) 
        { 
            $exportID = $_POST['exportID'];
            $idgoods = $_POST['idgoods'];
            $SL = $_POST['SL'];
            
            //get price items from database
            $query_goods = "SELECT * FROM mathang WHERE MaMatHang = '$idgoods'";
            $get_info = mysqli_query($conn,$query_goods);
            $data = mysqli_fetch_object($get_info);
            $single_price = $data->DonGia;

            $total_price = $SL * $single_price;

            $query = "INSERT INTO chitietxuathang (MaPhieuXuat, MaMatHang, SoLuong, DonGia, ThanhTien) 
            VALUES ('$exportID','$idgoods','$SL','$single_price','$total_price')";
            $run = mysqli_query($conn,$query);
            if ($run)
            {
                ?>
                    <script>
                        if (!alert('Add item export success!')) {
                        document.location = "../DeliveryDetail.php?ID=<?php echo $id_ex?>";
                        }
                    </script>
                <?php            
            }
            else
            {
                ?>
                    <script>
                        if (!alert('Some thing went wrong!\nPlease try again!')) {
                        document.location = "../DeliveryDetail.php?ID=$id_ex";
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