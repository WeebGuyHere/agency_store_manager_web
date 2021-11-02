<?php
session_start();
require_once('../../lib/connection.php');
if (isset ($_SESSION['username']) && $_SESSION['level'] == 2 && ($_SESSION['security_code'])) 
{
    $id_ex = $_SESSION['id_ex'];
    $id = $_GET['ID']; 
    $del_sql = mysqli_query($conn,"DELETE FROM chitietxuathang WHERE MaPhieuXuat = '$id_ex' AND MaMatHang = '$id'"); 
    if($del_sql)
    {
    mysqli_close($conn); 
    header("location:../DeliveryDetail.php?ID=$id_ex"); 
    exit;	 
    }
    
}
else
    {
        header("location: ../../index.php");
    }
?>