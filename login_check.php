<html>
    <head>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    </head>
    <body>
    <?php

    error_reporting(0);
    session_start();

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "schooldb"; 

    $data = mysqli_connect($host, $user, $password, $db);

    if($data===false){
        die("Connection Error!!");
    }

    if(isset($_POST['submit'])){
        $name = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "SELECT * from users where username='".$name."' AND password='".$pass."' ";

        $result = mysqli_query($data, $sql);

        $row = mysqli_fetch_array($result);

        if($row["usertype"]=="student"){

            $_SESSION['username']=$name;
            $_SESSION['usertype']="student";
            header("location:student_home.php");
            

        }elseif($row["usertype"]=="teacher"){

            $_SESSION['username']=$name;
            $_SESSION['usertype']="teacher";
            header("location:teacher_home.php");
            

        } elseif($row["usertype"]=="admin") {
            
            $_SESSION['username']=$name;
            $_SESSION['usertype']="admin";
            header("location:admin.php");
            
        } else {
            
            $message = "Invalid username or password";
            $_SESSION['loginMessage']=$message;

            header("location:login.php");
        }
    }



?>
    </body>
</html>


