<?php
include 'connection.php';

// Select data from the database
$sql = "SELECT * FROM REGISTRATION_DETAILS";
$data = mysqli_query($con, $sql);

// Display error if query fails
if (!$data) {
    die(mysqli_error($con));
}

// Form processing logic
if (isset($_POST['confirm'])) {
    $name1 = $_POST['insert'];
    $desc1 = $_POST['desc'];

    $sql = "INSERT INTO REGISTRATION_DETAILS(name, `desc`) VALUES ('$name1', '$desc1')";
    $result = mysqli_query($con, $sql);

    // Display result of the insert query
    if ($result) {
        echo "insert successful";
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
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <script>
        $(document).ready(function(){
            $('#addCategory').on('click',function(){
                $('.addcategorymanualdiv').toggle();
                })
            //  $('.btn #add').on('click',function(){
            //     $('.showadditem ').load('additem.php').toggle();
            //     })
            })
           
        

        
    </script>
<div class="addcategoryAll">
        <div class="addcategorydiv">
            <div class="addcategoryheaddiv">
                <h3>Add Category </h3>
                <div class="buttondiv">
<button  id="addCategory"     >Add new Category</button>
<button  id="delCategory"     >Delete Category</button>
<button  id="delCategory"     >Edit Category</button>
</div>


            </div>
            
            <!-- ... Your previous HTML code ... -->

<div class="addcategorypagediv">

<?php
while($row = mysqli_fetch_assoc($data)){
?>
    <div class="category">
        <div class="cover">
            <div class="images">
                <p><?php echo  $row['name']?></p>
                <img class='newimage' src="./images/veg/PaneerM.jpeg" alt="">
                <div class="btn">
                    <input type="button" value="+" id="add">
                    <input type="button" value="-" id="delete"       >
                    <input type="button" value="👁️‍🗨️"id="view"          >
                </div>
            </div>
        </div>
    </div>
   
    
<?php

}
?>

<div class="addcategorymanualdiv">
    <form action="" method="post"         >
    <label for="insert">new category </label>
        <input type="text"   id="insert"   name="insert"      >
   
        <label for="desc">Description:</label>
<textarea id="desc" name="desc"></textarea>

    
    <input type="submit" value="confirm"   name="confirm"         >

  
    </form>
</div>


</div>

            
              
    
                        
</div>
    

     
    
</body>
</html>
