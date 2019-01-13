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
            $e_id = $_GET['e_id'];

            $sql = "SELECT * FROM `user` WHERE `user_id` = '".$e_id."' ";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                $row = $result->fetch_assoc();

                $_SESSION['reward'] = $row['reward'];
                $_SESSION['user_id'] = $row['user_id'];
            }
            $e_reward =  $_SESSION['reward'];
        }
        
        if(isset($_POST['edit'])){
            $e_reward = $_POST['e_reward'];


            $sql = "UPDATE `user` SET `reward` = '".$e_reward."' WHERE `user`.`user_id` = '".$e_id."' ";
            $result = $conn->query($sql);
            header('Location: userlist.php');
        }
    ?>
    <div class="container">
        <div class="row ">
            <div class="col-md-5 mx-auto">
                <div class="card">
                    <div class="display-4 card-header text-center">
                        Edit User
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div>
                                <div class="form-group">
                                    <label for="e_user_id">User ID</label>
                                    <input type="text" class="form-control" id="e_user_id" name="e_user_id" value="<?php echo $_SESSION['e_id']; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="e_reward">Reward</label>
                                    <input type="text" class="form-control" id="e_reward" name="e_reward" value="<?php echo $e_reward; ?>">
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" name="edit" class="btn btn-success" value="Edit">
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