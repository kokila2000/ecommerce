<?php

$id = $_GET['ID'];
$con = mysqli_connect('localhost','root','','Ecommerce');
mysqli_query($con, "DELETE FROM `userdel` WHERE id=$id");
header("location:purchasedel.php");



?>