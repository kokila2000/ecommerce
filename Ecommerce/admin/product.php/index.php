<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product-page</title>
    <!--bootstrap cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>

<body><nav class="navbar navbar-light bg-dark">
        <div class="container-fluid text-white">
        <div class="d-flex">
<a href="../mystore.php" class="text-white text-decoration-none pe-2 navbar-brand fw-bold "><i class="fas fa-home"></i>Home</a>
   </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">


                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Product Detail:</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Name:</label>
                        <input type="text" name="Pname" class="form-control" placeholder="Enter product name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price:</label>
                        <input type="text" name="Pprice" class="form-control" placeholder="Enter product price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Discount:</label>
                        <input type="text" name="Pdiscount" class="form-control" placeholder="Enter product discount">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Product Image:</label>
                        <input type="file" name="Pimage" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Page Category</label>
                        <select class="form-select" name="Pages">
                            <option value="Home">Home</option>
                            <option value="Wedding Lehenga">Wedding Lehenga</option>
                            <option value="Traditional Lehenga">Traditional Lehenga</option>
                            <option value="Floral Lehenga">Floral Lehenga</option>
                        </select>
                    </div>
                    <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
                </form>
            </div>
        </div>
    </div>
    <!--fetch data-->
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">


                <table class="table border border-warning table-hover border my-5">

                    <thead class="bg-dark text-white fs-5 font-monospace text-center">
                        <th>id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </thead>


                    <tbody class="text-center">
                        <?php
                       
                        include 'config.php';
                        $Record = mysqli_query($con, "SELECT * FROM `tblproduct` ");

                        while ($row = mysqli_fetch_array($Record))
                      
                            echo "
   <tr>
   <td>$row[id]</td>
   <td>$row[PName]</td>
   <td>$row[PPrice]</td>
   <td>$row[PDiscount]</td>
   <td><img src='$row[PImage]' height='100px' width='100px'></td>
   <td>$row[PCategory]</td>
   <td><a href='delete.php?  ID=$row[id]' class='btn btn-danger'>Delete</a></td>
   <td><a href='update.php? ID=$row[id]' class='btn btn-warning'>Update</a></td>
</tr>
   ";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
include 'footer.php';
  ?>
</body>

</html>