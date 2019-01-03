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
            
            $user_id =  $_POST['user_id'];

            $sql = "SELECT * FROM `user` WHERE `user_id` = '".$user_id."' ";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                // echo print_r($result);
                $row = $result->fetch_assoc();

                $_SESSION['reward'] = $row['reward'];
                $_SESSION['user_id'] = $row['user_id'];
                // echo $row['reward'];
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
                        Check Reward !!
                    </div>
                    <div class="card-body">
                        <div class="container">
                        <?php  if(isset($_SESSION['user_id'])) { ?>
                            <div class="text-center">
                                <h1 class="display-4"><?php  echo $_SESSION['reward']; ?>.-</h1>
                            </div>
                            <h4><b>Phone Number</b> : <?php  echo $_SESSION['user_id']; ?></h4>
                            <br />
                            <div class="text-center"><a class="btn btn-success" href="logoutUser.php">logout</a></div>
                        </div>
                        <?php }else { ?>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="user_id">Phone Number</label>
                                <input type="text" class="form-control" id="user_id" name="user_id">
                            </div>
                            <div class="text-center">
                                <input type="submit" name="submit" class="btn btn-success" value="Login">
                            </div>
                        </form>
                        <?php }?>
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