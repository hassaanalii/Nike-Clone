<?php

    session_start();
    if(!isset($_SESSION['myAdmin'])){
        header('location:adminLogin.php');
    }

?>

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Stock</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="showStock4.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
</head>
<body>
    <div class="nav">
        <a href="#" id="nikeIcon">
            <img src="./jordans/icon3.png" alt="" >
        </a>
        <a href="adminLogout.php" id="Logout">Logout</a>
        
      
    </div>

    <div class="container mt-3">
        <p class="glitch">
            <span aria-hidden="false"></span>
                STOCK
            <span aria-hidden="false"></span>
        </p>
    </div>
    <div class="container-fluid mt-5">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table bg-dark text-light table-bordered text-center">
                    <thead class="fs-12">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>
                    

                    <tbody>
                        <?php
                            // $price=0;
                            // $total = 0;
                            $i = 1;
                            include 'connection.php';
                                $myQuery = mysqli_query($conn,"select * from items");
                               while($row = mysqli_fetch_array($myQuery)){
                                echo "
                                <form action='showStock.php' name='form5' method='POST'>
                                <tr>
                                <td>$i</td>
                                
                                <input type='hidden' name='pName' id='pName' value='$row[pName]'>
                                
                                <td>$row[pName]</td>

                                <td><input type='text' name='quant' id='quant' value='$row[pQuantity]'></td>
                              
                                
                                <input type='hidden' name='pPrice' id='pPrice' value='$row[pPrice]'>

                                <td>$row[pPrice]</td>
                                <td><img src='$row[pImage]' height='70px'></td>
                                <td><a href='update.php? upName=$row[pName]' name='update' id='butee1'>Update</a>
                                </td>
                                <td><a href='delete.php? delName=$row[pName]' name='delete' id='butee2'>Delete</a>
                                </td>
                                </tr>
                                <input type='hidden' name='deletedItem' id='deletedItem' value='$row[pName]'>
                                </form>";
                                $i++;
                               }
                            

                            // if(isset($_SESSION['cart'])){
                            //     foreach ($_SESSION['cart'] as $index => $value){
                            //         // if(($value['proName']).empty()){
                            //         //     unset($_SESSION['cart'][$index]);
                            //         //     $_SESSION['cart'] = array_values($_SESSION['cart']); 
                            //         // }
                            //         $tempPrice = substr($value['proPrice'],1);
                            //         $total +=intval($value['proQuantity']) * intval($tempPrice);
                            //         $price = intval($value['proQuantity']) * intval($tempPrice);
                            //         $i = $index + 1;
                            //         echo "
                            //         <form action='viewCart.php' name='form4' method='POST'>
                            //         <tr>
                            //         <td>$i  </td>
                            //         <input type='hidden' name='pName' id='pName' value='$value[proName]'>

                            //         <td>$value[proName]</td>

                            //         <td><input type='text' name='quant' id='quant' value='$value[proQuantity]'></td>
                            //         <td>$value[proPrice]</td>
                                    
                            //         <input type='hidden' name='pPrice' id='pPrice' value='$value[proPrice]'>

                            //         <td>$price</td>
                            //         <td><button name='update' class='bute'>Update</button>
                            //         </td>
                            //         <td></button>
                            //         <button class='bute' name='delete'>Delete</button></td>
                            //         </tr>
                            //         <input type='text' name='deletedItem' id='deletedItem' value='$value[proName]'>
                            //         </form>";
                            //     }
                            // }
                           
                        ?>

                    </tbody>
                </table>
            </div>

    <!-- <div class="table table-hover">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Image</th>
            <th>Update</th>
            <th>Delete</th>
        </thead>

        <tbody>
       
        </tbody> 
    </div> -->
</body>
</html>