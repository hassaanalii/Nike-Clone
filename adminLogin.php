
<?php

session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="adminstyle2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin Login</title>
  </head>
  <style>
        .but{
            background-color: black;
            color: white;
            font-family: 'PT Sans Narrow', sans-serif ;
            height: 40px;
            border-radius: 5px;
            font-weight: 900;
            font-size: 18px;
            width:410px


        }
        .but:hover{
            border: 2px solid black;
            background-color: white;
            color: black;
            font-weight: 900;
        }
        
      
    </style>
  <body>
  <?php
    include 'connection.php';
        if(isset($_POST['submit'])){
            $emailAdd = $_POST['email'];
            $password = $_POST['pass'];
           
            
            $primaryKeyChecker = "select * from adminlogin where email ='$emailAdd'";
            $checkQuery = mysqli_query($conn, $primaryKeyChecker);
            if((mysqli_num_rows($checkQuery))>0){
                
                $passwordChecker = "select password from adminlogin where email ='$emailAdd'";
                $checkQuery2 = mysqli_query($conn, $passwordChecker);
                
                $row = mysqli_fetch_array($checkQuery2);
                
                // $firstNameGetter = "select firstname from signup where email ='$emailAdd'";
                // $checkQuery3 = mysqli_query($conn, $firstNameGetter);
                // $row2 = mysqli_fetch_array($checkQuery3);
                // $_SESSION['firstname'] = $row2[0];

                
                if($password == $row[0]){
                    ?>
                    <script>
                        location.replace("toSetSession.php");
                    </script>
                    <?php 
                }else{
                    ?>
                    <script>
                        alert("Incorrect Password. Please try again!")
                    </script>
                    <?php
                }
            }
            else{
                ?>
                <script>
                    alert("Username doesnot match. Please try again!")
                </script>
                <?php
 
            }
        }
        
    ?>
     

    <nav id="navBar">
        <ul>
            <li><a href="#"><img src="./jordans/icon3.png" alt=""></a></li>
    
        </ul>
  
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-5">
                <img src="./jordans/icon4.png" alt="img-fluid" width=100% id="myImg">
            </div>
            <div class="col-sm-7 text-center pt-5" id="inner">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="myForm" method="POST">
                    <img src="./jordans/icon2.png" alt="img-fluid">
                    <p id="p1">YOUR ACCOUNT FOR EVERYTHING NIKE</p>
                    <p id="p5">Admin Login</p>

                    
                    <input type="text" placeholder= "Username" required autocomplete="off" name="email" id="email" size=50%  aria-describedby="emailHelp" >
                    <br><br>
                    <input type="password" placeholder= "Password" required id="pass" name="pass" autocomplete="off" size=50% aria-describedby="emailHelp" >
                    <br><br>
                    
                    <a class="special" href="">Forgot your password?</a>
                    <br><br>    
                    <input class="but" name="submit" type="submit" value="SIGN IN" >
                </form>
                <br>
                <p class="p2">By logging in, you agree to Nike's Privacy Policy and Terms of Use.</p>
               
               <br>
               <br>
               
               
                
                

            </div>
        </div>
    </div>   
   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>