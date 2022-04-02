<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
    <!-- bootstrap CND -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-light bg-dark">
        <div class="container-fluid text-white">
        <div class="d-flex">
<a href="index.php" class="text-white text-decoration-none pe-2 navbar-brand ">Product Details</a>
   </div>
        </div>
    </nav>

<?php
    error_reporting(0);
$id=$_GET['ID'];
$con = mysqli_connect('localhost','root','','Ecommerce');
$Record =mysqli_query($con,"SELECT * FROM `tblproduct` WHERE id='$id'");
$data =mysqli_fetch_array($Record);
?>

   <div class="container">
   <div class="row">
       <div class="col-md-6 m-auto border border-primary mt-3">

               <form action="update.php" method="POST" enctype="multipart/form-data">

               <div class="mb-3">

                    <p class="text-center fw-bold fs-3 text-warning">Product Update:</p>

                    <div class="mb-3">
                    <label  class="form-label">Product Name:</label>
                    <input type="text" value=" <?php echo $data['PName']?>" name="Pname" class="form-control"  placeholder="Enter product name">
                        </div>
                    <div class="mb-3">
                    <label  class="form-label">Product Price:</label>
                    <input type="text" value=" <?php echo $data['PPrice']?>" name="Pprice" class="form-control"  placeholder="Enter product price">
                    </div>
                    <div class="mb-3">
                    <label  class="form-label">Product Discunt:</label>
                    <input type="text" value=" <?php echo $data['PDiscount']?>" name="Pdiscount" class="form-control"  placeholder="Enter product discount">
                        </div>
                    <div class="mb-3">
                    <label  class="form-label">Add Product Image:</label>
                    <input type="file" name="Pimage" class="form-control"><br>
                    <img src="<?php echo $data['PImage']?>" alt="" style="height: 100px;">
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Select Page Categroy</label>
                        <select class="form-select" name="Pages" >
                        <option valu="Home">Home</option>
                        <option value="Wedding Lehenga">Wedding Lehenga</option>
                        <option value="Traditional Lehenga">Traditional Lehenga</option>
                        <option value="Floral Lehenga">Floral Lehenga</option>
                        </select>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $data['id']?>">
                     <button name="update" class="bg-danger fs-4 fw-bold my-3 form-control">Update</button>
                 </form>
             </div>
           </div>
        </div>

  <!-- php update -->

  <?php
  if(isset($_POST['update'])){
       $id = $_POST['id'];
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_discount = $_POST['Pdiscount'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'] ; 
    $image_name = $_FILES['Pimage']['name'] ;
      $img_des = "uploadimage/" .$image_name;
    move_uploaded_file($image_loc,"uploadimage/" .$image_name);

    $product_category = $_POST['Pages'];
    mysqli_query ($con, "UPDATE `tblproduct` SET `PName`='$product_name',`PPrice`='$product_price',`PDiscount`='$product_discount',
  `PImage`='$img_des',`PCategory`='$product_category' WHERE id = $id");
    header("location:index.php");

  }
?>

<?php
include 'footer.php';
?>
</body>
</html>