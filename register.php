<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            echo $_POST['user_id'].'<br />';
        }
        else{
            echo 'd';
        }
    ?>

      <div class="container">
         <div class="row">
            <div class="col-md-8 mx-auto mt-5 ">
                <div class="card">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-header text-center">
                            LOGIN ON ACCOUNT
                        </div>
                        <div class="card-body">
                            <div class="form-group row container">
                                <label for="user_id" class="col-sm-3 col-form-label">Phone Regis</label>
                                <input type="text" class="form-control" id="user_id" name="user_id">
                            </div> 
                            <!-- <div class="form-group row">
                                <label for="lastname" class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="lastname" name="lastname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fileUpload" class="col-sm-3 col-form-label">Upload</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="fileUpload" name="fileUpload">
                                </div>
                            </div> -->
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