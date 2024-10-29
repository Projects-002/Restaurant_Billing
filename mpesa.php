<?php
   
   include('database/db.php');




    

    // echo'
    
    // <script>
    
    // alert("Meal = '.$meal_name.'  \n Amount =  + '.$amount.'/= \n  Payment = + '.$p_method.'")
    
    // </script>
    
    // ';







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    .pay{
        border-radius: 2rem;
        padding:1rem;
    }

    .main{
        display: flex;
        align-items:center;
        justify-content:center;
        flex-direction:column;
    }
</style>

<body>
    
    <div class="container main">
            <div class="container bg-light mt-5 border border-primary pay">
                <h1>Paybill: <span class="text-primary">522533</span></h1>
                <?php
                 $user = $_GET['uid'];
                 $sql = "SELECT * FROM users where SN = $user";

                 $result = mysqli_query($conn,$sql);
                 $row = mysqli_fetch_assoc($result);
                 $reg = $row['Reg_No'];
                 echo'
                  <h1>Account Number: <span class="text-primary text-uppercase">'.$reg.'</span></h1>
                ';

                ?>


                 
        </div>


        
        <?php
        echo'
        <a class="btn btn-warning mt-5 ms-5" name="" href="dash.php?uid='.$user.'">Back Home</a>
          ';
        ?>
 
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>