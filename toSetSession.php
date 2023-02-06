<?php

session_start();
$_SESSION['myAdmin'] = "Admin here";
header('location:selections.php');
?>