<?php
session_start();

$productName = $_POST['pName'];
$productPrice = $_POST['pPrice'];
$productQuantity = $_POST['quant'];

if(isset($_POST['submit'])){
    // $_SESSION['cart'][] = array();    
    // print_r(var_dump($_SESSION['cart']));

 
    // $nameColumn = array_column($_SESSION['cart'],'proName');
    // foreach($_SESSION['cart'] as $key => $value){
    //     if($value['proName'] === ""){
    //         unset($_SESSION['cart'][$key]);
    //         $_SESSION['cart'] = array_values($_SESSION['cart']); 
    //     }
    // }   
    // if(in_array($productName,$nameColumn)){
    //     echo "
    //         <script>
    //         alert('Item already added');
    //         window.location.href = 'main.php';
    //         </script>
           
    //     ";

    
     
    // }else{

    //     $_SESSION['cart'][] = array('proName'=> $productName,
    //                                 'proPrice'=> $productPrice,
    //                                 'proQuantity'=>$productQuantity);

    //                                 echo "
    //         <script>
    //         alert('done');
    //         window.location.href = 'main.php';
    //         </script>
           
    //     ";
    // }
    //else{
    //     echo "
    //     <script>
    //     alert('Item alreadyaaaaa added');
    //     </script>
    //     window.location.href = 'main.php';
    // ";
    // }


        $_SESSION['cart'][] = array('proName'=> $productName,
                                    'proPrice'=> $productPrice,
                                    'proQuantity'=>$productQuantity);

            //                         echo "
            // <script>
            // alert('done');
            // window.location.href = 'main.php';
            // </script>
           
        // ";

        header('location:viewCart.php');
}

?>


