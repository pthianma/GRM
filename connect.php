<?php
    $servername = "167.99.78.250";
    $user = "DemoAdmin";
    $pass = "DemoAdmin";
    $databasename = "basic";
    $conn = new mysqli($servername, $user, $pass,$databasename);
    // $conn = new mysqli('localhost', 'root', '','basicd');
     echo $conn->connect_error;
    if($conn->connect_errno){
        die("connection failed". $conn->connect_error);
    }
    else{
        //  echo 'connect database complet';
    }

?>