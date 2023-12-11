<?php
include 'connection.php';
$id_recieved = $_GET['id'];
$data = mysqli_query($con,"select * from register where pk_id='$id_recieved' ");

$row = mysqli_fetch_assoc($data);
// print_r($row);


if (isset($_POST['sub'])){
    $name1 = $_POST['fullname'];
    echo $name1;
    $email1 = $_POST['email'];
    $uname1 = $_POST['username'];
    $password1 = $_POST['password'];
    echo $password1;
    $sql = "update register set name='$name1',email='$email1',username='$uname1',name='$name1',password='$password1' where pk_id='$id_recieved' ";
    mysqli_query($con,$sql);

    //         if($result){
    //             echo "update successful";
    //         }
    //         else{
    //             die(mysqli_error($con));
    //         }
}

    







?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit details</title>
</head>
<body>
<form action=""  method="post"               >
        <label for="name">NAME</label>
        <input type="text" name="fullname" id="name" value="<?php echo $row['name'];?>"    required  >
        <label for="email">EMAIL</label>
        <input type="email"name="email" id="email"  value="<?php echo $row['email'];?>"                    >

        <label for="uname">USERNAME</label>
        <input type="text" name = "username" id="uname"  value="<?php echo $row['username'];?>"     >
        <label for="pass1">PASSWORD</label>
        <input type="password" name = "password" id="pass1"value="<?php echo $row['password'];?>"   required    >

        <input type="submit"  value="submit" id="sub"    name="sub"         >









    </form>
    
</body>
</html>





















