<?php
$servername = "localhost";
$username = "root";
$password = "Venus@#$1411";
$database = "quanlydaily";

$conn = new mysqli($servername, $username, $password, $database) or die("Can't Connect to database: ");
mysqli_query($conn, "SET NAME 'UTF-8");
?>