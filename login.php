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
<body>
    <?php
        include_once('connect.php');

        if(isset($_POST['submit'])){
            $username =  $_POST['username'];
            $password = $conn->real_escape_string( $_POST['password']);

            $sql = "SELECT * FROM `meber` WHERE `username` = '".$username."' AND `password` = '".$password."'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                 echo print_r($result);
                $row = $result->fetch_assoc();

                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                echo'<br />';
                echo $row['name'];
                  header('location:index.php');
            }
            else{
                echo 'username and pass is invalid';
            }
            
        }
        

    ?>

    <!-- navbar --><?php include_once('header.php'); ?>
    <br />
    <div class="container">
        <div class="row ">
            <div class="col-md-5 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        login here!!
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" name="submit" class="btn btn-success" value="Login">
                            </div>
                        </form>
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