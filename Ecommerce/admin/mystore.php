<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home-page</title>
    <!--bootstrap cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--fontawesome cdn-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>
<?php
session_start();
if(!$_SESSION['admin']){
    header("location:form/login.php");
}
?>
<body>
    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid text-white">
            <a class="navbar-brand  text-white fs-4 px-3  fw-bold ">
                <h1>ADMIN-ONLINE LEHENGA SHOPPING CART</h1>
            </a>
            <span>
                <i class="fas fa-user-shield"></i>
                Hello,<?php echo $_SESSION['admin'];?>
                <i class="fas fa-sign-out-alt"></i>

                <a href="form/logout.php" class="text-decoration-none text-white">Logout

                </a>
                <a href="..\user" class="text-decoration-none text-white">Userpanel</a>

            </span>
        </div>
    </nav>
    <div>
        <h2 class="text-center">Dashboard</h2>
    </div>
    <div class="col-md-10 bg-danger text-center m-auto">
        <a href="product.php/index.php" class="text-decoration-none text-white fs-4 fw-bold px-5">Add Products</a>
        <a href="user.php" class="text-decoration-none text-white fs-4 fw-bold px-5">Users Login Detalis</a>
        <a href="purchasedel.php" class="text-decoration-none text-white fs-4 fw-bold px-5">Purchase Detalis</a>
    </div>
    
    <?php
include 'footer.php';
  ?>
</body>

</html>