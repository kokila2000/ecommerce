<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
     <!--bootstrap cdn-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--fontawesome cdn-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>
<body>
<?php
session_start();
$count=0;
if(isset($_SESSION['cart'])){
  $count = count(($_SESSION['cart']));
}


?>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid font-monospace">
    <a class="navbar-brand pb-2 text-dark fs-4 px-5  fw-bold"><i class="fas fa-apple-alt"></i>ONLINE LEHENGA SHOPPING CART</a>
  
  <div class="d-flex"> 
    <a href="index.php" class="text-warning text-decoration-none pe-2"><i class="fas fa-home"></i>Home</a>
    <a href="viewCart.php" class="text-warning text-decoration-none pe-2"><i class="fas fa-shopping-cart"></i>Cart(<?php echo $count ?>) |</a>
    <span class="text-warning pe-2">
    <i class="fas fa-user-shield"></i>Hello,|
    <?php
   error_reporting(0);
   if(isset($_SESSION['user'])){
    echo $_SESSION['user'];
    echo"
    <a href='form/logout.php'class='text-warning text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i>Logout</a>
   ";}
   else{
  echo"

    <a href='form/login.php'class='text-warning text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i>Login</a>
   ";}

?>
    
    <a href="../admin/mystore.php"class="text-warning text-decoration-none pe-2">Admin</a>
    </span>

    
  
</nav>
</div>
</div>
<div class="bg-danger sticky-top font-monospace">
    <ul class="list-unstyled d-flex justify-content-center">
        <li><a href="wedding_lehenga.php"class="text-decoration-none text-white fw-bold fs-4 px-5">WEDDING LEHENGA</a>
        <li><a href="traditional_lehenga.php"class="text-decoration-none text-white fw-bold fs-4 px-5">TRADITIONAL LEHENGA</a>
        <li><a href="floral_lehenga.php"class="text-decoration-none text-white fw-bold fs-4 px-5">FLORAL LEHENGA</a>
    </ul>
</div>
</body>
</html>