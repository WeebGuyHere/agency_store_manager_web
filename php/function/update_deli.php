<?php
//update price to DeliveryNote.php
session_start();
require_once('../../lib/connection.php');
if (isset ($_SESSION['username']) && $_SESSION['level'] == 1 && ($_SESSION['security_code'])) 
{
    $id = $_GET['ID']; 
    //sum total price from chitietxuathang table
    $qry = "SELECT SUM(ThanhTien) AS Final FROM chitietxuathang WHERE MaPhieuXuat = '$id'";
    $excute = mysqli_query($conn,$qry);
    $data = mysqli_fetch_object($excute);
    $final = $data->Final;
    
    $del_sql = mysqli_query($conn,"UPDATE phieuxuathang SET TongTien = '$final' WHERE MaPhieuXuat = '$id'"); 
    if($del_sql)
    {
    mysqli_close($conn); 
    header("location:../DeliveryNote.php"); 
    exit;	 
    }
    
}
else
    {
        header("location: ../../index.php");
    }
?>