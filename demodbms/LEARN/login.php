<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <form action=""  method="post"               >
        <!-- <label for="name">NAME</label>
        <input type="text" name="fullname" id="name"     required  >
        <label for="email">EMAIL</label>
        <input type="email"name="email" id="email"                    > -->

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
    // echo $password1;
    // // 
    
    $sql = "select username ,password from register where username='$uname1' and password='$password1' ";
    $result = mysqli_query($con,$sql);
    if($result){
        $num = mysqli_num_rows($result);
        if($num>0){
            echo "Login successful";
            session_start();
            $_SESSION['username']=$uname1;
            header('location:home.php');
        }
        else{
            echo "Invalid data";
           
        }
    }

}






?>