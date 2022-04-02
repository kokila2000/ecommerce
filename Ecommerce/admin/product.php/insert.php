<?php


if (isset($_POST['submit'])) {
    include 'config.php';
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_discount = $_POST['Pdiscount'];
    $product_image = $_FILES['Pimage'];
    //print_r( $product_image);
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $img_des = "Uploadimage/" . $image_name;
    move_uploaded_file($image_loc, "Uploadimage/" . $image_name);
    $product_category = $_POST['Pages'];

    //insert product
   $result= mysqli_query($con, "INSERT INTO `tblproduct`( `PName`, `PPrice`, `PDiscount`, `PImage`, `PCategory`)
    VALUES ('$product_name','$product_price','$product_discount','$img_des','$product_category')");
if($result){
    header("location:index.php")  ;  
}
}
?>
