<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "schooldb";

$data = mysqli_connect($host, $user, $pass, $db);

if($data===false) {
    echo "Connection failed. Check your code";
}

if(isset($_POST['submit'])) {
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $dob = $_POST['dob'];
    $id_type = $_POST['idtype'];
    $id_number = $_POST['idno'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $home_town = $_POST['htown'];
    $post_address = $_POST['address'];
    $relation = $_POST['relation'];
    $guardian_name = $_POST['gname'];
    $guardian_number = $_POST['gtel'];

    $query = "INSERT INTO students(first_name, last_name, dob, id_type, id_number, gender, nationality, home_town, post_address, relation, guardian_name, guardian_number) 
    VALUES ('$first_name','$last_name','$dob','$id_type','$id_number','$gender','$nationality','$home_town','$post_address','$relation','$guardian_name','$guardian_number')";

    $result = mysqli_query($data, $query);

    if($result) {
        header("location: student_tab.php");
    }else {
        echo "Student Admission Failed";
    }
} 

?>