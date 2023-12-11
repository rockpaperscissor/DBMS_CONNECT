<?php
include 'connection.php';
$id_recieved = $_GET['user'];
mysqli_query($con,"delete from register where pk_id='$id_recieved' ");
header("location:display.php");












?>