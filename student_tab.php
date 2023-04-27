<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "schooldb";

$data = mysqli_connect($host, $user, $password, $db);

$sql = "SELECT * from students";

$result = mysqli_query($data, $sql);

if($result === false) {
    echo "Something went wrong";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Tab</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
 
</head>
<body>
    <style>
        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        a {
            text-decoration: none;
        }

        .table {
            width: calc(100% - 300px);
            position: absolute;
            top: 70px;
            right: 40px;
            padding: 0 20px;
        }

        .table_header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            padding: 20px;
            background-color: rgb(240, 240, 240);
        }

        .table_header p {
            color: #000000;
        }

        button {
            outline: none;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            padding: 10px;
        }

        td a .update{
            background-color: #007fff;
        }

        td a .delete{
            background-color: #f80000;
        }

        .add_new {
            padding: 10px 20px;
            color: #ffffff;
            background-color: #007fff;
        }

        input {
            padding: 10px 20px;
            margin: 0 10px;
            outline: none;
            border: 1px solid #007fff;
            border-radius: 6px;
            color: #007fff;
        }

        .table_section {
            height: 650px;
            overflow: auto;
        }

        table {
            width: 100%;
            table-layout: fixed;
            /* min-width: 900px; */
            border-collapse: collapse;
            display: block;
            overflow-x: auto;
            overflow-y: auto;
            white-space: nowrap;
        }

        thead th {
            position: sticky;
            top: 0;
            background-color: #f6f9fc;
            color: #8493a5;
            font-size: 15px;
        }

        th, td {
            border-bottom: 1px solid #dddddd;
            padding: 10px 20px;
            word-break: break-all;
            text-align: center;
        }

        tr:hover td {
            color: #007fff;
            cursor: pointer;
            background-color: #f6f9fc;
        }

        ::placeholder {
            color: #007fff;
        }

        ::-webkit-scrollbar{
            height: 5px;
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }

        ::-webkit-scrollbar-thumb {
            box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }


    </style>

    <?php
        include ('sidebar.php')
    ?>
    <div class="table">
        <div class="table_header">
            <p>Student Details</p>

            <div>
                <input type="text" placeholder="Student Name"/>
                <a href="admission_form.php">
                    <button class="add_new">+ Add New</button>
                </a>
                
            </div>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Admission No.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                        <th>ID Type</th>
                        <th>ID No</th>
                        <th>Gender</th>
                        <th>Nationality</th>
                        <th>Home Town</th>
                        <th>Postal Address</th>
                        <th>Relation</th>
                        <th>Guardian</th>
                        <th>Guardian's No</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        while($info=$result->fetch_assoc())
                        {;
                    ?>
                    <tr>
                        <td><?php echo "{$info['admission_no']}"; ?></td>
                        <td><?php echo "{$info['first_name']}"; ?></td>
                        <td><?php echo "{$info['last_name']}"; ?></td>
                        <td><?php echo "{$info['dob']}"; ?></td>
                        <td><?php echo "{$info['id_type']}"; ?></td>
                        <td><?php echo "{$info['id_number']}"; ?></td>
                        <td><?php echo "{$info['gender']}"; ?></td>
                        <td><?php echo "{$info['nationality']}"; ?></td>
                        <td><?php echo "{$info['home_town']}"; ?></td>
                        <td><?php echo "{$info['post_address']}"; ?></td>
                        <td><?php echo "{$info['relation']}"; ?></td>
                        <td><?php echo "{$info['guardian_name']}"; ?></td>
                        <td><?php echo "{$info['guardian_number']}"; ?></td>
                        <td>
                            <?php
                            echo "
                            <a onClick=\" javascript:return confirm('Confirm whether you want to update entry') \" href='delete_student.php?admission_no={$info['admission_no']}'>
                                <button><i class='fa-solid fa-pen-to-square'></i></button>
                            </a>"; ?>
                            <?php
                            echo "
                            <a href='delete_student.php?admission_no={$info['admission_no']}'>
                                <button class='update'><i class='fa-solid fa-trash'></i></button>
                            </a>"; ?>  
                        </td>
                    </tr>

                    <?php
                        };
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
