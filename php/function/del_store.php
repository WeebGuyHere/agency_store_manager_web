<?php
session_start();
require_once('../../lib/connection.php');

$id = $_GET['id']; 
if (isset ($_SESSION['username']) )
{
        $del_sql = $conn->prepare("DELETE FROM cacdaily WHERE MaDaiLy = ?"); 
        $del_sql->bind_param("s", $id);
        $del_sql->execute();
        header("location:../AgencyStore.php"); 
        exit;	 
}
else
{
    header("location: ../../index.php");
}
?>