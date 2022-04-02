<?php
/*Returns:

This function returns true 
if a session was successfully started, otherwise false .*/
session_start();
//session_destroy();
error_reporting();
if(isset($_SESSION['user'])){


if (isset($_POST['addcart'])){
 $product_name = $_POST['PName'];
     $product_price = $_POST['PPrice'];
    $product_quantity = $_POST['PQuantity'];

    $_SESSION['cart'][] = array(
        'productName' => $product_name,
        'productPrice' => $product_price,
        'productQuantity' => $product_quantity);
        header("location:viewCart.php");
}
//remove product
if (isset($_POST['remove'])) {
    foreach ($_SESSION['cart'] as $key => $value) {

        if ($value['productName'] === $_POST['item']){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
        header('location:viewCart.php');
    }
}
}
			/*update product

            if (isset($_POST['update'])) {
                foreach ($_SESSION['cart'] as $key => $value) {
            
                    if ($value['productName'] === $_POST['item']) {
                        $_SESSION['cart'][$key] =   array(
                            'productName' => $product_name,
                            'productPrice' => $product_price,
                            'productQuantity' => $product_quantity);
                        // print_r($_SESSION['cart']);
            header("location:viewCart.php");
                    }
                }
            }
            */
        }
?>