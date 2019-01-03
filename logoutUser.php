<?php
    // session_start();
    // // session_unregister("user_id");
    // session_unregister('user_id');
    // header('location:loginUser.php');
    session_start();
    session_destroy();
    header('location:loginUser.php');
?>