<?php

$count = 0;

if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike</title>
    <link rel="stylesheet" href="main10.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

</head>
<body>
    <nav style="z-index:1000">
        <div id="menu-bar" class="fa fa-bars" style="font-size:15px; margin-left:10px"></div>
        <img src="./jordans/icon2.png" alt="">
        <div class="text">
            Welcome, <?php echo $_SESSION['firstname'] ?>!
        </div>
        <div class="links">
            <a href="viewCart.php" class="text-warning text-decoration-none pe-2"><i class="fa fa-shopping-cart"></i> Cart(<?php echo $count ?>) </a>
            <a href="About.html">About us</a>
            <a href="#">Services</a>
            <a href="userLogout.php">Logout</a>
            
        </div>
    </nav>

    <script src="main.js"></script>
    
</body>
</html>