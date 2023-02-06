<?php

    session_start();
    if(!isset($_SESSION['myAdmin'])){
        header('location:adminLogin.php');
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="addItems3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sign Up</title>
    <style>
        .but{
            background-color: black;
            color: white;
            font-family: 'PT Sans Narrow', sans-serif ;
            height: 40px;
            border-radius: 5px;
            font-weight: 900;
            font-size: 18px;
            width:410px;



        }
        .but:hover{
            border: 2px solid black;
            background-color: white;
            color: black;
            font-weight: 900;
        }
        
      
    </style>
  </head>
  <body>

  <div class="nav">
        <a href="#" id="nikeIcon">
            <img src="./jordans/icon3.png" alt="" >
        </a>
        <a href="adminLogout.php" id="Logout">Logout</a>
        
      
    </div>

    <?php
    include 'connection.php';
    
         $name=$_GET['upName'];
         $record=mysqli_query($conn, "select * from items where pName='$name'");
         $recordRow = mysqli_fetch_array($record);
        if(isset($_POST['submit'])){


            $productName = $_POST['nameee'];
            $price = $_POST['price'];
            $pImage = $_FILES['imagee'];
            $pQuantity = $_POST['quan'];
            $imgLoc = $_FILES['imagee']['tmp_name'];
            $imgName = $_FILES['imagee']['name'];

            $imgDes= "jordans/".$imgName;

            move_uploaded_file($imgLoc,"jordans/".$imgName);
            $insertQuery = "UPDATE `items` SET `pPrice`='$price',`pQuantity`='$pQuantity',`pImage`='$imgDes' WHERE pName='$productName'";
            $go = mysqli_query($conn, $insertQuery);

            header('location: showStock.php');
            
        
          
        }
        
    ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-5 mt-5">
                <img src="./jordans/j12.png" alt="img-fluid" width=100%>
            </div>
            <div class="col-sm-7 text-center pt-2">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="myForm2"  method="POST" enctype="multipart/form-data">
                    
                    <img src="./jordans/icon2.png" alt="img-fluid">
                    <p id="p1">ADD SNEAKERS TO YOUR NIKE LIBRARY</p>
                    <p class="p2">Sneaker Details</p>

                    
                    <label for="name">Product Name</label>
                    <br><hr>
                    <input type="hidden" required value="<?php echo $recordRow['pName']?>"  id="nameee" autocomplete="off" size=50% name="nameee" aria-describedby="emailHelp" >

                    <p id="defined"><?php echo $recordRow['pName']?></p>
                    <hr>
                    
                    <label for="price">Product Price</label>
                    <br>
                    <input type="text" required value="<?php echo $recordRow['pPrice']?>"  id="price" autocomplete="off" size=50% name="price" aria-describedby="emailHelp" >
                    <br><br>
                    <label for="quan">Product Quantity</label>
                    <br>
                    <input type="text" required value="<?php echo $recordRow['pQuantity']?>"  id="quan" autocomplete="off" size=50% name="quan" aria-describedby="emailHelp" >

                    <br><br>
                    <label for="imagee">Product Image</label>
                    <br>
                    <input type="file" required  id="imagee" autocomplete="off" size=50% name="imagee" aria-describedby="emailHelp" >
                    <br>
                    <img src="<?php echo $recordRow['pImage']?>" style="height:60px" alt="">

                    <br><br>   
                    
                    <input class="but" name="submit" type="submit" value="Update Product" >
                    <br>
                    
                

                </form>
                <br>
            </div>
        </div>
    </div>     



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="validations.js"></script>
  </body>
</html>
