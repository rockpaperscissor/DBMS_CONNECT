<?php


$con = mysqli_connect("localhost","root","","thisdatabase");
if(!con){
    die(mysqli_error($con));
}
else{
    echo "Connected successfully";
}

$sql = "select name,phone from thistable";
$result = mysqli_query($con,$sql);
if($result){
    echo "query success";
}
else{
    echo(mysqli_error);
}
$data = mysqli_fetch_assoc($result);
echo $data;



?>
