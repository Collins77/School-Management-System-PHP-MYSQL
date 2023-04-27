<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}elseif($_SESSION['usertype']=='admin'){
    header("location:login.php");
}elseif($_SESSION['usertype']=='teacher'){
    header("location:login.php");
}

?>

<html>
    <head></head>
    <body>
        
       <?php
        include 'sidebar.php';
       ?>
        <!-- <h1>Student panel</h1> -->
    </body>
</html>