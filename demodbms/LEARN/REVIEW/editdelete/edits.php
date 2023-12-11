<?php
include 'connection.php';

$id_received = $_GET['id'];
$data = mysqli_query($con, "SELECT * FROM items WHERE item_id='$id_received'");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['sub'])) {
    $name1 = $_POST['food_id'];
    $email1 = $_POST['cat_id'];
    $uname1 = $_POST['food_name'];
    $password1 = $_POST['food_desc'];

    $sql = "UPDATE items SET item_id='$name1', category_id='$email1', itemname='$uname1', itemdesc='$password1' WHERE pk_id='$id_received'";
    mysqli_query($con, $sql);

    // Check if the update was successful
    if (mysqli_affected_rows($con) > 0) {
        echo "Update successful";
    } else {
        die(mysqli_error($con));
    }
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
    <form action="" method="post">
        <label for="food_id">Food ID</label>
        <input type="int" id="food_id" name="food_id" value="<?php echo $row['item_id']; ?>">
        
        <label for="cat_id">Category ID</label>
        <input type="int" id="cat_id" name="cat_id" value="<?php echo $row['category_id']; ?>">
        
        <label for="food_name">Food name</label>
        <input type="text" id="food_name" name="food_name" value="<?php echo $row['itemname']; ?>">
       
        <label for="food_desc">Food description</label>
        <textarea id="food_desc" name="food_desc"><?php echo $row['itemdesc']; ?></textarea>
        
        <input type="submit" value="Update Item" name="sub">
    </form>
</body>
</html>
