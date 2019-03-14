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
            $b_id =  $_POST['b_id'];
            $b_name =  $_POST['b_name'];
            $size =  $_POST['size'];
            $chanal =  $_POST['chanal'];
            $price =  $_POST['price'];
            $sql = "INSERT INTO `bottle` (`b_id`,`b_name`,`size`,`chanal`, `price`) VALUES ('".$b_id."', '".$b_name."','".$size."','".$chanal."','".$price."')";
            $result = $conn->query($sql);
        }

        include_once('header.php');
    ?>

      <div class="container">
         <div class="row">
            <div class="col-md-5 mx-auto mt-5 ">
                <div class="card">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-header text-center ">
                            <h1 class="display-4">ADD New Bottle</h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group row container">
                                <label for="b_id" >New Bottle ID</label>
                                <input type="text" class="form-control " id="b_id" name="b_id">
                            </div>
                            <div class="form-group row container">
                                <label for="b_name" >New Bottle Name</label>
                                <input type="text" class="form-control" id="b_name" name="b_name">
                            </div>
                            <div class="form-group row container">
                                <label for="size" >New Bottle Size</label>
                                <input type="text" class="form-control" id="size" name="size">
                            </div>
                            <div class="form-group row container">
                                <label for="chanal" >New Bottle Chanal</label>
                                <input type="text" class="form-control" id="chanal" name="chanal">
                            </div>
                            <div class="form-group row container">
                                <label for="price" >New Bottle Price</label>
                                <input type="text" class="form-control" id="price" name="price">
                            </div>
                            <div class="text-center">
                                <input type="submit" name="submit" class="btn btn-success" value="Add">
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