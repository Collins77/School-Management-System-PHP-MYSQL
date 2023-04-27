<?php

// error_reporting(0);
// session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "schooldb";

$data = mysqli_connect($host, $user, $password, $db);

if($_GET['admission_no']){
    $admission_no = $_GET['admission_no'];
    
    $sql = "DELETE FROM students WHERE admission_no='$admission_no'";

    $result = mysqli_query($data, $sql);

    if($result){
        header("location:student_tab.php");
    }
}

?>