<?php
include 'connection.php';

if (isset($_POST['add_item'])) {
    $food1 = $_POST['food_id'];
    $catid = $_POST['cat_id'];
    $name1 = $_POST['food_name'];
    $desc1 = $_POST['food_desc'];

    $sql = "INSERT INTO items (item_id, category_id, itemname, itemdesc) VALUES ('$food1', '$catid', '$name1', '$desc1')";
    $data = mysqli_query($con, $sql);

    if (!$data) {
        die(mysqli_error($con));
    } else {
        echo "Successful insertion";
    }
}

$sql_select = "SELECT * FROM items";
$data_select = mysqli_query($con, $sql_select);
if (!$data_select) {
    die(mysqli_error($con));
} else {
    echo "Successful selection";
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
        <input type="int" id="food_id" name="food_id">
        
        <label for="cat_id">Category ID</label>
        <input type="int" id="cat_id" name="cat_id">
        
        <label for="food_name">Food name</label>
        <input type="text" id="food_name" name="food_name">
       
        <label for="food_desc">Food description</label>
        <textarea id="food_desc" name="food_desc"></textarea>
        
        <input type="submit" value="Add Item" name="add_item">
    </form>

    <table>
        <tr>
            <th>Food ID</th>
            <th>Category ID</th>
            <th>Food Name</th>
            <th>Food Description</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($data_select)) {
            echo "<tr>
                    <td>{$row['item_id']}</td>
                    <td>{$row['category_id']}</td>
                    <td>{$row['itemname']}</td>
                    <td>{$row['itemdesc']}</td>
                    <td><a href='delete.php?id={$row['item_id']}'>Delete</a></td>
                    <td><a href='edits.php?id={$row['item_id']}'>Edit</a></td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
