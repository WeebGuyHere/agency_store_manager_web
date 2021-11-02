<?php
session_start();
require_once('../../lib/connection.php');
if (isset ($_SESSION['username']) && $_SESSION['level'] == 2 && ($_SESSION['security_code'])) 
{
    $month = $_GET['Mt'];
    $id = $_GET['ID']; 
    $del_sql = mysqli_query($conn,"DELETE FROM congno WHERE Thang = '$month' AND MaDaiLy = '$id'"); 
    if($del_sql)
    {
    mysqli_close($conn); 
    header("location:../DebtReport.php"); 
    exit;	 
    }
    
}
else
    {
        header("location: ../../index.php");
    }
?>