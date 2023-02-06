<?php

session_start();
if(!isset($_SESSION['myAdmin'])){
    header('location:adminLogin.php');
}else{


    include 'connection.php';    
    $name=$_GET['delName'];
    $q = mysqli_query($conn,"DELETE FROM `items` WHERE pName='$name'");
    header('location:showStock.php');
}    
?>