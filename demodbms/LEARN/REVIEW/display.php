<?php
include 'connection.php';
$sql = "SELECT * FROM register";
$data = mysqli_query($con, $sql);

if ($data === FALSE) {
    die("Error in SQL query: " . mysqli_error($con));
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>email</th>
        <th>username</th>
        <th>password</th>
    </tr>

    
<!-- <?php
$arr = [
    'key1'=>'value1',
    'key2'=>'value2'
];
echo $arr['key1'];

?> -->
    
    
    
    
    
    
    
    
    
    
    
    <?php
    while($row = mysqli_fetch_assoc($data)){
    ?>
        <tr>
            <td><?php echo $row['pk_id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['password'];?></td>
            <td><a href="dlt.php?user=<?php echo $row['pk_id'];?>">Delete</a></td>
            <td><a href="edit.php?id=<?php echo $row['pk_id'];?>">Edit</a></td>
        </tr>
    <?php
    }
    ?>

</table>
</body>
</html>
