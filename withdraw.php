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
            <div class="col-md-9 mx-auto mt-5">
                <div class="card">
                    <div class="card-header text-center">
                    <h1 class="display-4">Withdraw Money</h1>
                    </div>
                    <div class="card-body">
                        <div class="container">
                           
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