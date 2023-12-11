<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Display</title>
</head>
<body>
    <h2>User Data</h2>


    <form   action="" method="post"         >
                <div class="inputBox">
                    <input type="text" placeholder="Username"  name="username"          >
                </div>
                <div class="inputBox">
                    <input type="password" placeholder="Password" name="pass"          >
                </div>
                <div class="inputBox">
                    <input type="submit"value="login"  name="sub"              >
                </div>

</form>



    
    <?php include 'fetch_data.php'; ?>
</body>
</html>
