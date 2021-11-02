<?php
    session_start();
    require_once ('../../lib/connection.php');
    if (isset ($_SESSION['username']) && $_SESSION['level'] == 1 && ($_SESSION['security_code'])) 
    {
        if(isset($_POST['Add'])) 
        { 
            $idgoods = $_POST['idgoods'];
            $name = $_POST['name'];
            $price = $_POST['price'];

            $sql0="select * from mathang where TenMatHang= '$name' "; 
            $query=mysqli_query($conn,$sql0); 
            if(mysqli_num_rows($query) != "" ) //checking name goods input to make sure it does NOT exists from DATABASE
            {
                ?>
                    <script>
                        if (!alert('This name of items already exists!')) {
                            document.location = "../AgencyStore.php";
                        }
                    </script>
                    <?php
            }
            else
            {
                $query = "INSERT INTO `mathang`(`MaMatHang`, `TenMatHang`, `DonGia`) 
                VALUES ('$idgoods','$name','$price')";
                $run = mysqli_query($conn,$query);
                if ($run)
                {
                ?>
                        <script>
                            if (!alert('Add store success!')) {
                                document.location = "../addgoods.php";
                            }
                        </script>
                        <?php
                }
                else
                {
                ?>
                <script>
                    if (!alert('Something wrong in here!\nPlease try again!')) {
                        document.location = "../addgoods.php";
                    }
                </script>
                <?php
                }
            }
        }
    }
    else 
    {
        header('Location: ../../index.php');
    }
?>