<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="LOGIN">
    <div class="container">
        <div class="drop">
            <div class="contentBox">
                <h2>Sign in</h2>
            <form   action="" method="post"         >
                <div class="inputBox">
                    <input type="text" placeholder="Username"  name="username"          >
                </div>
                <div class="inputBox">
                    <input type="password" placeholder="Password" name="pass"          >
                </div>
                <div class="inputBox">
                    <input type="submit"value="login"  name="sub"              >
                </div>

            </form></div>
            
        </div>
        <button class="sign"       id="goto-register">SIGN UP</button>
        <button class="forgot"       id="goto-forgot">FORGOT PASSWORD</button>

    </div>
</div>

</body>
</html>

<?php

include 'connection.php';
if(isset($_POST['sub'])){
$uname1 = $_POST['username'];
var_dump($name1);
$password = $_POST['pass'];
var_dump($password);
//NAME and column name in underscore small letters
mysqli_query($con,"INSERT INTO login_details(vchr_user_name,vchr_pass) VALUES('$uname1','$password')");
}



?>