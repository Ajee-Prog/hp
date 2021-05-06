<?php 
  //require_once('execute.php');
  require_once('./PHP/connection.php');
require_once('./PHP/component.php');
require_once('CreateDb.php');
//create instance of dataBase class
 $database = new CreateDb("newdb", "productdb", "localhost", "root", "");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
 





<div class="container">
    <div class="row text-center py-5">
        <?php

        $database = new CreateDb("newdb", "productdb", "localhost", "root", "");


        $result = $database->getData();
        if (mysqli_num_rows($result) ) {
          
            while($row = mysqli_fetch_assoc($result)){
                component($row['product_name'], $row['product_price'], $row['product_image']);
            }
        }else{ echo "No record detected";}
        // /*component("Product1", 599, "./upload/headset_1.jpg");
        //small codes here
        component("Product2", 555, "./upload/Dell111.jpg");
        component("Product3", 529, "./upload/lapi_101.jpg");
        component("Product4", 299, "./upload/Desktop2.jpg");
        component("Product5", 335, "./upload/Laptop7.jpg");
        component("Product6", 799, "./upload/lapi22222.jpg");
        component("Product7", 1199, "./upload/Dell111.jpg");
        component("Product8", 3007, "./upload/laptop 1.jpg");
        
        
        ?>
        
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>