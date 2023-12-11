<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
<div class="REGISTER">
    <div class="container">
        <div class="drop">
            <div class="contentBox">
                <h2>Sign up</h2>
            <form id="forms" action="">
                <div class="inputBox">
                    <input type="text" placeholder="Fullname" name="Fullname" id="fname">
                </div>
                <!-- pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" -->
                <div class="inputBox">
                    <input type="tel" id="phone" name="Phone"  placeholder="phone"    />
                    
                </div>
                <div class="inputBox">
                    <input type="email" placeholder="email" name="Email" id="email1">
                </div>
                <div class="inputBox">
                    <input type="text" placeholder="Username" name="Username" id="user1">
                </div>
                <div class="inputBox">
                    <input type="password" placeholder="Password" name="Password" id="pass1">
                </div>
                <div class="inputBox">
                    <input type="password" placeholder="ConfirmPassword" name="Confirm_password" id="pass2">
                </div>

                <div class="inputBox">
                    <input type="submit"value="Signup"  name='SignUp'          >
                </div>

            </form></div>
        </div>
        <button    class="sign" id="goto-login">SIGN IN</button>

    </div>
</div>

</body>
</html>




<?php


include 'connection.php';
if(isset($_POST['SignUp'])){
$uname1 = $_POST['Username'];
var_dump($name1);
$password = $_POST['Password'];
var_dump($password);
//NAME and column name in underscore small letters
mysqli_query($con,"INSERT INTO register(vchr_user_name,vchr_pass) VALUES('$uname1','$password')");
}
















?>