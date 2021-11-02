<?php
    session_start();
    require_once ('../../lib/connection.php');
    if (isset ($_SESSION['username']) && $_SESSION['level'] == 1 && ($_SESSION['security_code'])) 
    {
        if(isset($_POST['Add'])) 
        { 
            $type = $_POST['type'];
            $name = $_POST['name'];
            $debt = $_POST['debt'];

            $sql0="select * from loaidaily where TenLoai = '$name' ";
            $sql1="SELECT COUNT(*) AS vail FROM loaidaily"; //count type available
            $policy="select * from tochucdaily";  
            $query0=mysqli_query($conn,$sql0);
            $query1=mysqli_query($conn,$policy);
            $query_vail=mysqli_query($conn,$sql1);
            $get_policy = mysqli_fetch_object($query1);
            $get_vail=mysqli_fetch_object($query_vail); //get vail
            if (mysqli_num_rows($query0) != "" ) //checking name store-type input to make sure it does NOT exists from DATABASE
            {
                ?>
                    <script>
                        if (!alert('This name of store-type already exists!')) {
                            document.location = "../TypeStore.php";
                        }
                    </script>
                    <?php
            }
            else
            {
                if ($get_vail->vail < $get_policy->SoLoaiDaiLy)
                {
                    $query = "INSERT INTO `loaidaily`(`Loai`, `TenLoai`, `NoToiDa`) 
                    VALUES ('$type','$name','$debt')";
                    $run = mysqli_query($conn,$query);
                    if ($run)
                    {
                    ?>
                            <script>
                                if (!alert('Add type-store success!')) {
                                    document.location = "../TypeStore.php";
                                }
                            </script>
                            <?php
                    }
                }
                else
                {
                ?>
                <script>
                    if (!alert('Maximum number of type-store!')) {
                        document.location = "../TypeStore.php";
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