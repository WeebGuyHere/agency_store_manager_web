<?php
$servername = "localhost";
$username = "root";
$password = "Venus@#$1411"; //change password match with your own mysql. If mysql not set password, change to ''
$database = "quanlydaily";

$conn = new mysqli($servername, $username, $password, $database) or die("Can't Connect to database: ");
mysqli_query($conn, "SET NAME 'UTF-8");
?>