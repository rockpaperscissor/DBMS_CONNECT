<?php
include 'connection.php';
if(isset($_POST['sub'])){
$name1 = $_POST['nm'];
var_dump($name1);
$email1 = $_POST['em'];
var_dump($email1);
//NAME and column name in underscore small letters
mysqli_query($con,"INSERT INTO _registered_users(vchr_users_name,vchr_email) VALUES('$name1','$email1')");
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="" method="post">
       Name:<input type="text" name="nm" id=""         >
       Email:<input type="text" name="em" id=""         >
       
       <button name="sub"        >Submit</button>

    </form>
</body>
</html>