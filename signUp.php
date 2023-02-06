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
            width:410px


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
        <a href="#">
            <img src="./jordans/icon3.png" alt="" >
        </a>
      
    </div>

    <?php
    include 'connection.php';
        if(isset($_POST['submit'])){
            $emailAdd = $_POST['email'];
            $password = $_POST['pass'];
            $fName = $_POST['fName'];
            $lName = $_POST['lName'];
            $country = $_POST['country'];
            $gender = $_POST['gender'];
            function validatePassword($password) {
                $minLength = 8;
                $maxLength = 64;
                // $minLowercase = 1;
                // $minUppercase = 1;
                // $minNumeric = 1;
                // $minSpecial = 1;
                
                // Check minimum and maximum length
                if (strlen($password) < $minLength || strlen($password) > $maxLength) {
                  return false;
                }else{
                    return true;
                }

            }
            if(validatePassword($password)){
                $finalPass = password_hash($password, PASSWORD_BCRYPT);

                $primaryKeyChecker = "select * from signup where email ='$emailAdd'";
                $checkQuery = mysqli_query($conn, $primaryKeyChecker);
                if((mysqli_num_rows($checkQuery))>0){
                    ?>
                    <script>
                        alert("This email already exists! Please try a new one!")
                    </script>
                    <?php
                }
                else{
                    $insertQuery = "insert into signup (email, password, firstname, lastname, country, gender) values ('$emailAdd','$finalPass','$fName','$lName','$country','$gender')";
                    $go = mysqli_query($conn, $insertQuery);
                    header("location:signIn.php");
     
                }
            }
            else{
                ?>
                <script>
                    alert("Password is not valid");
                </script>
                <?php
            }
            
           


          
        }
        
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-5">
                <img src="./jordans/icon1.png" alt="img-fluid" width=100% id="imgimg">
            </div>
            <div class="col-sm-7 text-center pt-2">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="myForm"  method="POST">
                    
                    <img src="./jordans/icon2.png" alt="img-fluid">
                    <p id="p1">BECOME A NIKE MEMBER</p>
                    <p class="p2">Create your Nike Member profile and get first <br> access to the very best of Nike products,
                    <br> inspiration and community.</p>

                    
                    <input type="email" placeholder= "Email Address" required id="email" autocomplete="off" size=50% name="email" aria-describedby="emailHelp" >
                    <!-- <br><br> -->
                    <input type="password" required placeholder= "Password"  id="pass" autocomplete="off" size=50% name="pass" aria-describedby="emailHelp" >
                    <!-- <br><br> -->
                    <input type="text"  required placeholder= "First Name"  id="fName" autocomplete="off" size=50% name="fName" aria-describedby="emailHelp" >
                    <!-- <br><br> -->
                    <input type="text" required placeholder= "Last Name"  id="lName" autocomplete="off"  size=50% name="lName" aria-describedby="emailHelp" >
                    <!-- <br><br> -->
                    <br>
                    
                    <select name="country" id="country" class="country" required autocomplete="off">
                        <option value="Pakistan">Pakistan</option>
                        <option value="Saudia Arabia">Saudia Arabia</option>
                        <option value="England">England</option>
                        <option value="Germany">Germany</option>
                        <option value="France">France</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Portugal">Portugal</option>

                    </select>
                    <br><br>

                    <input type="radio"  required id="male" autocomplete="off"  name="gender" value="Male">
                    <label for="male">Male</label>  
                    <input type="radio" id="female" required  autocomplete="off" name="gender" value="Female">
                    <label for="female">Female</label><br>
                    <br>
                    
                    <!-- <p class="p2">By creating an account,
                        <br> you agree to Nike's Privacy Policy</p> -->
                    <input class="but" name="submit" id="signBut" type="submit" value="JOIN US" >
                    <br>
                    <p class="special">Already a member? </p>
                    <a class="special" href="signIn.php">Sign in</a>
                

                </form>
                <br>
            </div>
        </div>
    </div>     



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="validations.js"></script>
  </body>
</html>