<?php
session_start();
require_once('../../lib/connection.php');
if (isset ($_SESSION['username']) && $_SESSION['level'] == 1 && ($_SESSION['security_code'])) 
{
    $id = $_GET['ID']; 
    $del_sql = mysqli_query($conn,"DELETE FROM mathang WHERE MaMatHang = '$id'"); 
    if($del_sql)
    {
    mysqli_close($conn); 
    header("location:../addgoods.php"); 
    exit;	 
    }
   
}
else
{
    header("location: ../../index.php");
}
?>