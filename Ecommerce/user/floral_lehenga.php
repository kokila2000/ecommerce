<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script"rel="stylesheet">
    <?php
    include 'header.php';
    ?>

</head>
<body>
    <div class="container-fluid">
       <div class="col-md-12">
       <div class="row">

      

<h1 class="text-warning font-monospace text-center my-3">FLORAL LEHENGA</h1>

<?php

$con = mysqli_connect('localhost','root','','Ecommerce');

?> 
<?php
$Record = mysqli_query($con,"SELECT * FROM tblproduct");
while( $row=mysqli_fetch_array($Record)){
$check_page =$row['PCategory'];
if($check_page ==='Floral Lehenga'){

echo "
<div class='col-md-6 col-lg-4 m-auto mb-18'>
<form action='Insertcart.php'method='POST'>
<div class='card m-auto' style='width: 23rem;'>
  <img src='../admin/product.php/$row[PImage]' class='card-img-top m-auto'style='width : 260px;'>
  <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>'$row[PName]'</h5>
    <p class='card-text text-dark fs-4 fw-bold'>&#8377; $row[PPrice]</p>
    <h6 class='badge badge-success'> 4.4 <i class='fa fa-star  '></i></h6>
    <p class='card-text text-dark fs-4 fw-bold'>($row[PDiscount]% off)</p>
    <input type='hidden' name='PName' value = '$row[PName]' >
    <input type='hidden' name='PPrice' value = '$row[PPrice]' >
    
    <input type='number' name ='PQuantity' value=' min='1' max='20'' placeholder='Quantity'><br><br>
    <input type='submit'name='addcart' class='btn btn-warning text-white w-100' value='Add To Cart'>
   <p></p>
   </div>
  </div>
  </form>
</div>
";
}
}
?>
      </div>
        </div>

    </div>
    <?php
include 'footer.php';
  ?>
</body>
</html>