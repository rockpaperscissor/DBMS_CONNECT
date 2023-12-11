<?php

$con = mysqli_connect("localhost","root","","REGISTRATION");
if(!$con){
    die(mysqli_error($con));
}
else{
    echo "CONNECTED TO REGISTRATION DBASE SUCCESS";
}









?>