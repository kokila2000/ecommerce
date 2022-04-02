<?php



$id = $_GET['ID'];
$con = mysqli_connect('localhost','root','','Ecommerce');
mysqli_query($con,"DELETE FROM `tblproduct` WHERE id= $id ");
header("location:index.php");
?>
