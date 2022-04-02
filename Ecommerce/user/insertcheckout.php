
<?php


if (isset($_POST['submit'])) {
    $con = mysqli_connect('localhost', 'root', '', 'Ecommerce');
    $Delviery_name = $_POST['Dname'];
    $Delviery_address = $_POST['Daddress'];
    $Delviery_number = $_POST['Dnumber'];
    $Delviery_pincode = $_POST['Dpincode'];
    $Delviery_state = $_POST['Dstate'];
    $Delviery_countries = $_POST['Dcontries'];
    $Delviery_type = $_POST['typedel'];

    //insert product
    mysqli_query($con, "INSERT INTO `userdel`(`person_name`,`delivery_address`,`delivery_number`, `pincode`, `state`,
     `countries`, `delivery_type`) 
    VALUES ('$Delviery_name','$Delviery_address','$Delviery_number',' $Delviery_pincode','$Delviery_state','$Delviery_countries','$Delviery_type')");
    header("location:purchase.php");
}

?>