<?php
include 'connection.php';
$id_recieved = $_GET['id'];
mysqli_query($con,"delete from items  where item_id='$id_recieved' ");
header("location:additem.php");












?>