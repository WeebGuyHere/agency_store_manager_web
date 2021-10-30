<?php
session_start();
require_once('../../lib/connection.php');

$id = $_GET['id']; 
$qry = mysqli_query($conn,"SELECT * FROM cacdaily where MaDaiLy='$id'"); 
$data = mysqli_fetch_array($qry); 
if (isset ($_SESSION['username']) )
{
        $del_sql = mysqli_query($conn,"DELETE FROM cacdaily WHERE MaDaiLy = '$id'"); 
        mysqli_close($conn); 
        header("location:../ThemDaiLy.php"); 
        exit;	 
}
else
{
    header("location: ../../index.php");
}
?>