<?php
$con = mysqli_connect("localhost","root","","Newdatabase");
if(!$con){
    die(mysqli_error($con));
}
else{
    echo "Connected successfully!";
}









?>