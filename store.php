<!-- Jaspreet kaberwal Project1 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project 1</title>
</head>
<body>
    
<a href="index.php"><span style="color:blue">Home</span></a>
<a href="new.php"><span style="color:blue">PHP</span></a>

</body>
</html>
<?php

// connection
require('mysqli_connect.php');

// querry to select all items from table
$q1 = "select * from BookInventory";

$r1 = mysqli_query($xyz, $q1);

// displaying data from database
while($data = mysqli_fetch_array($r1)){
    
    echo '<br>Book_id:' .$data['Book_id'].'<br>';
    echo 'Book_Name:' .$data['Book_Name'].'<br>';
    echo 'Quantity:' .$data['Quantity'].'<br>';
}

?>

