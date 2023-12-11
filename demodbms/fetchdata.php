<?php
include 'db_connect.php';

$query = "SELECT * FROM fetchuser_data";
$result = mysqli_query($con, $query);

// Check if the query was successful
if ($result) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Username</th><th>Email</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Error: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>
