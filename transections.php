<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <!-- InsertCss -->
    <?php include_once('insertCss.php'); ?>
</head>
<body class="Ebody">
    <?php
        include_once('connect.php');
        include_once('header.php');

        if(isset($_GET['e_id'])){
            echo $_GET['e_id'];
        }
    ?>
    
    <div class="container">
        <div class="row ">
            <div class="col-md-8 mx-auto mt-5">
                <div class="card">
                    <div class="card-header text-center">
                    <h1 class="display-4">Bottle List </h1>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr class="text-center">
                                    <th>User ID</th>
                                    <th>Add Reward</th>
                                    <th>Time</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php                                 
                                    $sql = "SELECT * FROM `transections` ";
                                    
                                    if ($result = $conn->query($sql)) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr class='text-center'><td>";
                                            echo $row['id_user'];
                                            echo "</td><td>";
                                            echo $row['new_reward'];                        
                                            echo "</td><td>";
                                            echo $row['date_time'];
                                            echo "</td>";
                                            // echo "<a href='edituser.php?e_id=".$row['user_id']."'>Edit</a>";
                                            // echo "</td></tr>";
                                        }                      
                                        $result->free();
                                    }
                                ?>                                 
                                </tbody>                                
                            </table>
                            <div class="text-center">
                                <a class="btn btn-success btn-lg" href="barcode.php" role="button"> Add Bottle </a>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html> 