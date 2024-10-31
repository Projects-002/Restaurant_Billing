<?php

 include("database/db.php");


    $sql = "SELECT Sales_Date FROM Sales";
    $result = mysqli_query($conn, $sql);

   $row = mysqli_fetch_assoc($result);
    

   $date = $row['Sales_Date'];




 


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     


    <script>

    </script>
    
</body>
</html>