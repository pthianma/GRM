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
<style> 
input[type=text] {
  width: 80%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 80%;
}
</style>
</head>
<body class="Ebody">
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
                $_SESSION['reward'] = '(invalid) 0';
                $_SESSION['user_id'] = 'invalid';

            }      
        }
        if(isset($_POST['Retrench'])){
            $user_id = $_SESSION['user_id'];
            $cut_reward = $_POST['cut_reward'];
            $reward = $_SESSION['reward'];
            $update_reward = $reward-$cut_reward;

            $sql = "UPDATE `user` SET `reward` = '".$update_reward."' WHERE `user`.`user_id` = '".$user_id."' ";
            $result = $conn->query($sql);

            $_SESSION['reward'] = $update_reward;
        }
        

        include_once('header.php');
    ?>
    
    <div class="container">
        <div class="row ">
            <div class="col-md-9 mx-auto mt-5">
                <div class="card">
                    <div class="card-header text-center">
                    <h1 class="display-4">Withdraw Money</h1>
                    </div>
                    <div class="card-body">
                        <div class="container text-center">
                            <form action="" method="POST">
                                <div class="text-center">
                                <input type="text" id="user_id" name="user_id" placeholder="Search..">
                                <input type="submit" name="submit" class="btn btn-success " value="Search"> 
                                </div>
                            </form>
                            <?php  if(isset($_SESSION['user_id'])) { ?>                                
                                <h4><b>Phone Number</b> : <?php  echo $_SESSION['user_id']; ?></h4>
                                <h1 class="display-4 text-center"><?php  echo $_SESSION['reward']; ?> Bath</h1>
                            </div>                           
                            <?php }?>
                            <form action="" method="POST">
                                <div class="text-center">
                                <input style="width:40%; font-size: 24px;" type="text" id="cut_reward" name="cut_reward" placeholder="WithDraw Reward..">
                                <input type="submit" name="Retrench" class="btn btn-success " value="Retrench"> 
                                </div>
                            </form>
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