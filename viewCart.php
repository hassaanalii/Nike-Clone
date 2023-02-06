
<?php
session_start();

if(!isset($_SESSION['firstname'])){
    header('location:signIn.php'); 
}
if(isset($_POST['delete'])){
    foreach($_SESSION['cart'] as $key => $value){
        if($value['proName'] === $_POST['deletedItem']){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']); 
        }
    }

}
include 'connection.php';

if(isset($_POST['update'])){
    $productName = $_POST['pName'];
    $productPrice = $_POST['pPrice'];
    $productQuantity = $_POST['quant'];

    $quantityChecker = "SELECT pQuantity FROM `items` WHERE pName='$productName'";
    $checkQuery = mysqli_query($conn, $quantityChecker);

    $row = mysqli_fetch_array($checkQuery);

    $q = intval($row[0]);

    if(intval($productQuantity)>$q){

        ?>
        <script>
            alert("There are not enough items in stock!");
        </script>
        <?php
    }else{
        foreach($_SESSION['cart'] as $key => $value){
            if($value['proName'] === $_POST['pName']){
                // The $_SESSION variable is a superglobal array in PHP that is used to store data in a session. The cart array is being accessed using the session variable and then an item is being added to the end of the array using the [] operator.
                //$key returns the index 0,1,2 etc
                // $value returns an associative array having three properties
                $_SESSION['cart'][$key] = array('proName'=> $productName,
                                            'proPrice'=> $productPrice,
                                            'proQuantity'=>$productQuantity);
            }
        }
    }


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style7.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MyCart</title>
</head>
<body>
    <div class="nav">
        <a href="#">
            <img src="./jordans/icon3.png" alt="" >
        </a>
      
    </div>
    <div class="container mt-3">
        <p class="glitch">
            <span aria-hidden="false"></span>
                My Cart
            <span aria-hidden="false"></span>
        </p>
    </div>
 

    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table bg-dark text-light table-bordered text-center">
                    <thead class="fs-12">
                        <th>Index No.</th>
                        <th>Product Name</th>
                        <th>Product Quantity</th>
                        <th>Product Price</th>
                        <th>Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>
                    

                    <tbody>
                        <?php
                            $price=0;
                            $total = 0;
                            $i = 0;
                            if(isset($_SESSION['cart'])){
                                foreach ($_SESSION['cart'] as $index => $value){
                                    // if(($value['proName']).empty()){
                                    //     unset($_SESSION['cart'][$index]);
                                    //     $_SESSION['cart'] = array_values($_SESSION['cart']); 
                                    // }
                                    $tempPrice = substr($value['proPrice'],1);
                                    $total +=intval($value['proQuantity']) * intval($tempPrice);
                                    $price = intval($value['proQuantity']) * intval($tempPrice);
                                    $i = $index + 1;
                                    echo "
                                    <form action='viewCart.php' name='form4' method='POST'>
                                    <tr>
                                    <td>$i  </td>
                                    <input type='hidden' name='pName' id='pName' value='$value[proName]'>

                                    <td>$value[proName]</td>

                                    <td><input type='text' name='quant' id='quant' value='$value[proQuantity]'></td>
                                    <td>$value[proPrice]</td>
                                    
                                    <input type='hidden' name='pPrice' id='pPrice' value='$value[proPrice]'>

                                    <td>$price</td>
                                    <td><button name='update' class='bute'>Update</button>
                                    </td>
                                    <td></button>
                                    <button class='bute' name='delete'>Delete</button></td>
                                    </tr>
                                    <input type='text' name='deletedItem' id='deletedItem' value='$value[proName]'>
                                    </form>";
                                }
                            }
                           
                        ?>

                    </tbody>
                </table>
            </div>
            <div class="col-lg-3 text-center">
                <?php
                $tax = intval($total) * 0.16;
                $final = intval($total) + intval($tax);

                ?>
                <h3 id="total">TOTAL</h3>
                
                <h6 class="totalP"><?php echo "SubTotal &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". "$ " . number_format($total,2) ?></h1>
                <h6 class="totalP"><?php echo "Taxes(16%)&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". "$ " . number_format($tax,2) ?></h1>
                <hr>
                
                <h6 class="totalP"><?php echo "<b>Total</b>&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". "$ " . number_format($final,2) ?></h1>
                <hr>
            <div class="closing">
            <p> <?php echo "Nike"; ?></p>
            <p> <?php echo "Sales Counter"; ?></p>  
            <p> <?php echo date("F j, Y H:i:s"); ?></p>
              
                
            </div>
               
            <div class="thankyou">
                <p>Thankyou for shopping with us!</p>
            </div>   
            <div class="tick">
                 <button id="tickBut">
                    <img src="./jordans/check.png" alt="">
                </button>
            </div>      

           
            </div>
             
            
        </div>
    </div>
    <script src="tick.js"></script>
</body>
</html>