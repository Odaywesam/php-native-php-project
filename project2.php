<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>shope </title>
</head>
<body>
<?php
 $host='localhost';
 $user='root';
 $pass='';
 $db='ecom';
 $conecction=mysqli_connect($host,$user,$pass,$db);
?>
    

    <center>
        <div class="main">
            <form action="insert.php" method="POST">
                <h2> shoping saite</h2>
                <img src="" width="450px" alt="brand">
                <input type="text" name="name">
                <br>
                <input type="text" name="price">
                <br>
                <input type="file" id="file" name="image" style="display: none;">
                <label for="file"></label>
                <button name="upload">ensert product</button>
                <br>
                <a href="products.php"> show products</a>
                

            </form>

        </div>
    </center>
</body>
</html>