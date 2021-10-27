<?php
    require_once('../lib/connection.php');
    session_start();
    if (isset($_GET['logout']))
    {
        session_destroy();
        mysqli_close($conn);
        header("location: ../index.php");
    }
?>