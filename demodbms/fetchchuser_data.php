












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="drop.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
        <script src="JqueryValid.js"></script>

    <script>
        $(document).ready(function(){

            $('#goto-register').on('click',function(){
                $('.REGISTER').show();
                $('.LOGIN').hide();
            })
            $('#goto-login').on('click',function(){
                $('.REGISTER').hide();
                $('.LOGIN').show();
            })
            //changes
            /*$('#fname').on('change',function(){
                let a = $(this).val();
                console.log(a);
                let b = (a + "@123");
                $('#pass1').val(b);
                $('#pass2').val(a + "@123");
                $('#email1').val(a+"@gmail.com");
                $('#user1').val(a);
                


            })*/
            // $.ajax({
            //     url:'',
            //     type:'post',
            //     data:'Fullname=&abc',
            //     dataType:'json',
            //     success:function(response){
            //         $('').html(json.stringify(response))
            //     },
            //     error:function(xhr,status,error){
            //         $('').html('error is:'+ status+error)
            //     }

            // })



        })
    </script>
</head>
<body>
    <div class="LOGIN">
    <div class="container">
        <div class="drop">
            <div class="contentBox">
                <h2>Sign in</h2>
            <form   action="">
                <div class="inputBox">
                    <input type="text" placeholder="Username">
                </div>
                <div class="inputBox">
                    <input type="password" placeholder="Password" >
                </div>
                <div class="inputBox">
                    <input type="submit"value="login">
                </div>

            </form></div>
            
        </div>
        <button class="sign"       id="goto-register">SIGN UP</button>
    </div>
</div>

<form action=""  method="post"             >
<div class="REGISTER">
    <div class="container">
        <div class="drop">
            <div class="contentBox">
                <h2>Sign up</h2>
            <form id="forms" action="" method="post"   >
                <div class="inputBox">
                    <input type="text" placeholder="Fullname" name="Fullname" id="fname"      >
                </div> 
                <!-- pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" -->
                <div class="inputBox">
                    <input type="tel" id="phone" name="Phone"  placeholder="phone"   required />
                    
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
                    <input type="password" placeholder="ConfirmPassword" name="Confirm-password" id="pass2">
                </div>

                <div class="inputBox">
                    <input        type="submit"  name = "sub"           value="Signup">
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

if(isset($_POST['sub'])){
    $strname1 = $_POST['Fullname'];
    var_dump($strname1);

    $stremail1 = $_POST['Email'];
    var_dump($stremail1);

    $strphone1 = $_POST['Phone'];
    $strusername1 = $_POST['Username'];
    $strpass1 = $_POST['Password'];
    $strpass2 = $_POST['Confirm-password'];

    // Fix the syntax error in the INSERT query
    mysqli_query($con,"INSERT INTO fetchuser_data(vchr_users_name, vchr_email, vchr_phone, vchr_user_name, vchr_password, vchr_confirm_password) VALUES('$strname1','$stremail1','$strphone1','$strusername1','$strpass1','$strpass2')");
}
?>
