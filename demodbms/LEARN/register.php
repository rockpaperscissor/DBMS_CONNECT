<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""  method="post"               >
        <label for="name">NAME</label>
        <input type="text" name="fullname" id="name"     required  >
        <label for="email">EMAIL</label>
        <input type="email"name="email" id="email"                    >

        <label for="uname">USERNAME</label>
        <input type="text" name = "username" id="uname"     >
        <label for="pass1">PASSWORD</label>
        <input type="password" name = "password" id="pass1" required    >

        <input type="submit"  value="submit" id="sub"    name="sub"         >









    </form>
</body>
</html>
<?php
include 'connection.php';
if (isset($_POST['sub'])){
    $name1 = $_POST['fullname'];
    echo $name1;
    $email1 = $_POST['email'];
    $uname1 = $_POST['username'];
    $password1 = $_POST['password'];
    echo $password1;
    // 
    
    $sql = "select * from register where username='$uname1'";
    $result = mysqli_query($con,$sql);
    if($result){
        $num = mysqli_num_rows($result);
        if($num>0){
            echo "User already exist";
        }
        else{
            $sql = "insert into register (name,email,username,password) values('$name1',  '$email1', '$uname1', '$password1' )";
            $result = mysqli_query($con,$sql);
            if($result){
                echo "Sign up successful";
            }
            else{
                die(mysqli_error($con));
            }
        }
    }

}






?>