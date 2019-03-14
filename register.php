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

        if(isset($_POST['submit'])){
            $user_id =  $_POST['user_id'];
            $sql = "INSERT INTO `user` (`user_id`, `reward`) VALUES ('".$user_id."', '0')";
            $result = $conn->query($sql);
        }

        include_once('header.php');
    ?>

      <div class="container">
         <div class="row">
            <div class="col-md-8 mx-auto mt-5 ">
                <div class="card">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-header text-center">
                        <h1 class="display-4">CREAT  ACCOUNT</h1>
                            
                        </div>
                        <div class="card-body">
                            <div class="form-group row container">
                                <label for="user_id" >Phone Regis</label>
                                <input type="text" class="form-control" id="user_id" name="user_id">
                            </div> 
                            <div class="text-center">
                                <input type="submit" name="submit" class="btn btn-success" value="Register">
                            </div>
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