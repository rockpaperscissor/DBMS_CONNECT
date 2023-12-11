<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""   method="post"            >
        <label for="name">name</label>
        <input type="text" name="fname"  id="name"         >
        <label for="">email</label>
        <input type="email"   name="email" id="email"              >
        <label for="uname">username</label>
        <input type="text"  name="uname" id="uname"             >
        <label for="pass">password</label>
        <input type="password" name="pass" id="pass"               >
        <input type="submit" name="sub" value="submit"        >












    </form>
</body>
</html>

<?php

include 'connection.php';
if(isset($_POST['sub'])){


    $name1 = $_POST['fname'];
    $email1 = $_POST['email'];
    $username1 = $_POST['uname'];
    $password1 = $_POST['pass'];
   $sql = "INSERT INTO learn (vchr_users_name,	vchr_email 	,vchr_username 	,vchr_pass 	) VALUES (' $name1', '$email1', '$username1', '$password1' )";
    $result =  mysqli_query($con,$sql);
    if($result){
        echo "Registered successfully";
    }
    else{
        die(mysqli_error($con));
    }
}






?>