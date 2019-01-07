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
    ?>
    
    <div class="container">
        <div class="row ">
            <div class="col-md-8 mx-auto mt-5">
                <div class="card">
                    <div class="card-header text-center">
                    <h1 class="display-4">User List </h1>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr class="text-center">
                                    <th>User ID</th>
                                    <th>Reward</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- <tr>
                                    <td while="500"> User ID </td><td> Reward</td>
                                </tr> -->
                                <?php                                 
                                    $sql = "SELECT * FROM `user` ";
                                    
                                    if ($result = $conn->query($sql)) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr class='text-center'><td>";
                                            echo $row['user_id'];
                                            echo "</td><td>";
                                            echo $row['reward'];
                                            echo ".-";
                                            echo "</td><td>";
                                            echo "<a href='#'>Edit</a>";
                                            echo "</td></tr>";
                                            // $_SESSION['user_id'] = $row['user_id'];
                                            // $_SESSION['reward'] = $row['reward'];
                                        }                      
                                        $result->free();
                                    }
                                ?>
                                </tbody>
                            </table>
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