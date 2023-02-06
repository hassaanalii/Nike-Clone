
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
    <link rel="stylesheet" href="signIn.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
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
            
            if (filter_var($emailAdd, FILTER_VALIDATE_EMAIL)) {
                 
            $primaryKeyChecker = "select * from signup where email ='$emailAdd'";
            $checkQuery = mysqli_query($conn, $primaryKeyChecker);
            if((mysqli_num_rows($checkQuery))>0){
                
                $passwordChecker = "select password from signup where email ='$emailAdd'";
                $checkQuery2 = mysqli_query($conn, $passwordChecker);
                $row = mysqli_fetch_array($checkQuery2);

                $firstNameGetter = "select firstname from signup where email ='$emailAdd'";
                $checkQuery3 = mysqli_query($conn, $firstNameGetter);
                $row2 = mysqli_fetch_array($checkQuery3);
                $_SESSION['firstname'] = $row2[0];

                $verify = password_verify($password, $row[0]);
                if($verify){
                    ?>
                    <script>
                        location.replace("main.php");
                    </script>
                    <?php 
                }else{
                    ?>
                    <script>
                        alert("Password Incorrect!");
                    </script>
                    <?php
                }}
            }
            else{
                ?>
                <script>
                    alert("This email doesnot exist! Please try a new one!")
                </script>
                <?php
 
            }

               
           
        }
        
    ?>

    <div class="nav">
        <a href="#">
            <img src="./jordans/icon3.png" alt="" >
        </a>
      
    </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-5">
                <img src="./jordans/icon4.png" alt="img-fluid" width=100% id="imgimg">
            </div>
            <div class="col-sm-7 text-center pt-5">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="myForm" method="POST">
                    <img src="./jordans/icon2.png" alt="img-fluid">
                    <p id="p1">YOUR ACCOUNT FOR EVERYTHING NIKE</p>

                    <br>
                    <input type="email" placeholder= "Email Address" required autocomplete="off" name="email" id="emaill" size=50%  aria-describedby="emailHelp" >
                    <br><br>
                    <input type="password" placeholder= "Password" required id="passs" name="pass" autocomplete="off" size=50% aria-describedby="emailHelp" >
                    <br><br>
                    
                    <a class="special" href="">Forgot your password?</a>
                    <br><br>    
                    <input class="but" name="submit" type="submit" value="SIGN IN" id="signBut" >
                </form>
                <br>
                <p class="p2">By logging in, you agree to Nike's Privacy Policy and Terms of Use.</p>
               
               
               
                <p class="special">Not a member? </p>
                <a class="special" href="signUp.php">Sign Up</a>
                
                

            </div>
        </div>
    </div>   
   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>