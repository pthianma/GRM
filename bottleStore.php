<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <?php include_once('insertCss.php'); ?>
</head>
<body>
    <?php
        include_once('connect.php');

        $sql = "SELECT * FROM `b_store` WHERE `st_id` LIKE 'now' ";
                                    
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                $n_sizeL=$row['sizeL'];
                $n_sizeM=$row['sizeM'];
                $n_sizeS=$row['sizeS'];
                $n_total=$row['total'];
                $n_limit=$row['limit'];
            }                      
            $result->free();
        }

        if(isset($_POST['submit'])){
           
            date_default_timezone_set("Asia/Bangkok");
            // echo(strftime("%d-%m-%y/%T"));
            $timeN=strftime("%d-%m-%y/%T");
            $qr = "INSERT INTO `b_store` (`st_id`, `sizeL`, `sizeM`, `sizeS`, `total`, `limit`) VALUES ('".$timeN."', '".$n_sizeL."', '".$n_sizeM."', '".$n_sizeS."', '".$n_total."', '".$n_limit."');";
            // // echo($qr);
            $conn->query($qr);

            $qy = "UPDATE `b_store` SET `sizeL` = '0', `sizeM` = '0', `sizeS` = '0', `total` = '0' WHERE `b_store`.`st_id` = 'now';";
            $conn->query($qy);
        }
        
        include_once('header.php');
    ?>

      <div class="container">
         <div class="row">
            <div class="col-md-8 mx-auto mt-5 ">
                <div class="card">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-header text-center">
                        <h1 class="display-4">BOTTLE STORE</h1>
                            
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr class="text-center">
                                    <th>Size L</th>
                                    <th>Size M</th>
                                    <th>Size S</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php   
                                    $sql = "SELECT * FROM `b_store` WHERE `st_id` LIKE 'now' ";                              
                                    if ($result = $conn->query($sql)) {
                                        while ($row = $result->fetch_assoc()) {
                                            $n_sizeL=$row['sizeL'];
                                            $n_sizeM=$row['sizeM'];
                                            $n_sizeS=$row['sizeS'];
                                            $n_total=$row['total'];
                                            $n_limit=$row['limit'];
                                            echo "<tr class='text-center'><td>";
                                            echo $row['sizeL'];
                                            echo "</td><td>";
                                            echo $row['sizeM'];
                                            echo "</td><td>";
                                            echo $row['sizeS'];
                                            echo "</td><td>";
                                            echo $row['total'];
                                            echo "</td><tr>";
                                            // echo "<a href='edituser.php?e_id=".$row['user_id']."'>Edit</a>";
                                            // echo "</td></tr>";
                                        }                      
                                        $result->free();
                                    }
                                ?>
                                   
                                </tbody>
                            </table>
                            <div class="text-center">
                                <input type="submit" name="submit" class="btn btn-success" value="POP Bottle">
                            </div>
                            <br />
                            <h1 class="display-5 text-center">BOTTLE STORE HISTORY</h1>
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr class="text-center">
                                    <th>Date and Time</th>
                                    <th>Size L</th>
                                    <th>Size M</th>
                                    <th>Size S</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php   
                                    $sql = "SELECT * FROM `b_store` WHERE st_id!='now'";                              
                                    if ($result = $conn->query($sql)) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr class='text-center'><td>";
                                            echo $row['st_id'];
                                            echo "</td><td>";
                                            echo $row['sizeL'];
                                            echo "</td><td>";
                                            echo $row['sizeM'];
                                            echo "</td><td>";
                                            echo $row['sizeS'];
                                            echo "</td><td>";
                                            echo $row['total'];
                                            echo "</td><tr>";
                                            // echo "<a href='edituser.php?e_id=".$row['user_id']."'>Edit</a>";
                                            // echo "</td></tr>";
                                        }                      
                                        $result->free();
                                    }
                                ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>  
         </div> 
      </div>
    <br>
    
     <script src="node_modules/jquery/dist/jquery.min.js"></script>
     <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
     <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>

</body>
</html>