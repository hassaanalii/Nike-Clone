<?php
session_start();    

if(!isset($_SESSION['firstname'])){
    header('location:signIn.php');
}else{
   
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
    <?php

    include 'header.php';

    ?>
    <section class="home" id="home">
        <div class="slide-container active">
            <div class="slide">
                <div class="content">
                    <p class="p1">Jordans</p>
                    <p class="p2">Nike Air Jordan 1</p>
                    <p class="p3">Lock in your style with this AJ1. We kept everything you love about the classic design—premium leather, Air cushioning, iconic Wings logo—while adding the Nike FlyEase closure system to make on and off a breeze. Getting out the door is now quicker than ever: just strap and zip.</p>
                </div>
                <div class="image">
                    <img src="./jordans/jordan1.png" alt="">
                </div>
            </div>
        </div>
        <div class="slide-container">
            <div class="slide">
                <div class="content">
                    <p class="p1">Jordans</p>
                    <p class="p2">Air Jordan 5 Fresh Prince Of Bel-air</p>
                    <p class="p3">The Fresh Prince Of Bel-Air still holds a special place in many of our hearts. And alongside making us laugh and cry, the series helped define the fashion of an entire generation, as Will Smith donned clean looks and, most notably, a few pairs Air Jordan 5s.</p>
                </div>
                <div class="image">
                    <img src="./jordans/j1.png" alt="">
                </div>
            </div>
        </div>
        <div class="slide-container">
            <div class="slide">
                <div class="content">
                    <p class="p1">Jordans</p>
                    <p class="p2">Air Jordan 1 Digi-Cam0</p>
                    <p class="p3">This one-of-a-kind Air Jordan 1 Digi-Camo is definitely one of the wildest Air Jordan Samples we’ve seen that completely goes in an unexpected direction. Staying away from the traditional Michael Jordan/Chicago Bulls theme, this Air Jordan 1 has a high-top style with digital camouflage graphic.</p>
                </div>
                <div class="image">
                    <img src="./jordans/j3.png" alt="">
                </div>
            </div>
        </div>
        <div class="slide-container">
            <div class="slide">
                <div class="content">
                    <p class="p1">Jordans</p>
                    <p class="p2">Jordan 1 Retro High x Paris Saint Germain</p>
                    <p class="p3">This Retro Air Jordan 1 sneaker pays homage to the French Football Team, Paris Saint Germain. The upper of this shoe is made from black leather material and also features a black nubuck. The midsole has a white hue that is accented with two red strips. The midsole also features black and white labels and has Air technology.</p>
                </div>
                <div class="image">
                    <img src="./jordans/j4.png" alt="">
                </div>
            </div>
        </div>
        <!-- <div class="slide-container">
            <div class="slide">
                <div class="content">
                    <p class="p1">Jordans</p>
                    <p class="p2">Dior x Air Jordan 1</p>
                    <p class="p3">Jordan Brand connected with Parisian fashion house Dior to create history with the Jordan 1 Retro High Dior, now available on StockX. This is the first time that Jordan has collaborated with a legacy fashion label like Dior, making this release one for the books. This release was limited to only 8,500 pairs, each pair individually numbered.</p>
                </div>
                <div class="image">
                    <img src="./jordans/j5.png" alt="">
                </div>
            </div>
        </div> -->

        <div class="slide-container">
            <div class="slide">
                <div class="content">
                    <p class="p1">Jordans</p>
                    <p class="p2">Jordan 1 Retro High Og Gym Red</p>
                    <p class="p3">The Jordan 1 Retro High Black Gym Red borrows a design and color scheme from the original Air Jordan 1. However, this sneaker boasts a shorter silhouette and red accents instead of a black-and-red upper. Nike released the Jordan 1 Retro High Black Gym Red in 2019 after launching sixty Air Jordan 1 colorways in 2018, then several more colorways in the following year.</p>
                </div>
                <div class="image">
                    <img src="./jordans/j6.png" alt="">
                </div>
            </div>
        </div> 

        <div class="slide-container">
            <div class="slide">
                <div class="content">
                    <p class="p1">Jordans</p>
                    <p class="p2">Nike X Melody Ehsani Jordan 1</p>
                    <p class="p3">The Jordan 1 Retro High Black Gym Red borrows a design and color scheme from the original Air Jordan 1. However, this sneaker boasts a shorter silhouette and red accents instead of a black-and-red upper. Nike released the Jordan 1 Retro High Black Gym Red in 2019 after launching sixty Air Jordan 1 colorways in 2018, then several more colorways in the following year.</p>
                </div>
                <div class="image">
                    <img src="./jordans/j8.png" alt="">
                </div>
            </div>
        </div> 

        <!-- <div class="slide-container">
            <div class="slide">
                <div class="content">
                    <p class="p1">Jordans</p>
                    <p class="p2">Air Jordan 4 Retro Fiba</p>
                    <p class="p3">The Air Jordan 4 Retro Fiba 2019 takes on one of the icons from the ´89 catalog. They are dressed in Gym Red, White, Metallic Gold and Obsidian colorway.
This 2019 Air Jordan 4 features a tumbled leather upper that displays elements of the competing country's flags in place of the original AJ 4's mesh. Other highlights include prominent Jumpman branding on the tongue and heel, and a 'For The Love of The Game' tag on the inner tongue.</p>
                </div>
                <div class="image">
                    <img src="./jordans/j9.png" alt="">
                </div>
            </div>
        </div>  -->
      
        <div class="fa fa-angle-left" id="prev"></div>
        <div class="fa fa-angle-right" id="next"></div>
        
    </section>
    

    <section class="products" id="products">
       <div class="heading2">Latest Products</div>
         <div class="box-container">
                <?php
                include 'connection.php';
                $data= mysqli_query($conn, "select * from items");
                while($row=mysqli_fetch_array($data)){
                    echo "
                    
                    <div class='box'>
                    <div class='icons'>
                        <a href='#' class='fa fa-heart'></a>
                        <a href='#' class='fa fa-share'></a>
                        <a href='#' class='fa fa-eye'></a>
                    </div>
                    <form action='addToCart.php' name='myForm3' method='POST'>

                    <div class='mainIcon'>
                        <input type='submit' name='submit' >

                        
                    </div>
                         <div class='quan'>
                            <input type='number' name='quant' min='1' max='20' value='1'>
                         </div>

                         <div class='innerData'>
                        <div class='image2'>
                            <img src='$row[pImage]' alt=''>
                        </div>
                        <div class='name'>
                        <input type='hidden' name='pName' value='$row[pName]'>
                            $row[pName]
                        </div>
                        <div class='price'>
                        <input type='hidden' name='pPrice' value='$row[pPrice]'>
                            $row[pPrice]
                        </div>
                        <div class='stars'>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            
                        </div>
                    </div>
                    </form>

                </div>
                    ";
                }
                ?>
               
         </div>
    </section>
    
    <script src="main3.js"></script>
</body> 
</html>