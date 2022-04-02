<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!--bootstrap cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--fontawesome cdn-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>

<body>

    <?php
include "mystore.php";
    $con = mysqli_connect('localhost', 'root', '', 'Ecommerce');
    $Record = mysqli_query($con, "SELECT userdel.id, userdel.person_name, userdel.delivery_address, userdel.delivery_number,userdel.pincode,userdel.state,userdel.countries,userdel.delivery_type,tbluser.Email  
    FROM userdel   
    INNER JOIN tbluser  
    ON userdel.delivery_number = tbluser.Number");
    $row_count = mysqli_num_rows($Record);

    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">


                <table class="table table-secondary table-bordered">
                    <thead class=" text-center">
                        <th>S.N</th>
                        <th>Person Name</th>
                        <th>Delivery Address</th>
                        <th>Delivery Contact Number</th>
                        <th>Pincode</th>
                        <th>State</th>
                        <th>Countries</th>
                        <th>Delviery Type</th>
                        <th>Email</th>
                        <th>Delete</th>


                    </thead>



                    <tbody class="text-center text-danger">

                        <?php
                        $i=0;
                        while ($row = mysqli_fetch_array($Record)) {
                            echo "
    <tr>
    <td>"?><?php echo ++$i; ?><?php echo "</td>
    <td>$row[person_name]</td>
    <td>$row[delivery_address]</td>
    <td>$row[delivery_number]</td>
    <td>$row[pincode]</td>
    <td>$row[state]</td>
    <td>$row[countries]</td>
    <td>$row[delivery_type]</td>
    <td>$row[Email]</td>
    <td><a href='deletepur.php? ID=$row[id]' class='btn btn-outline-danger'>Delete</a></td>
</tr>
";
                        }

                        ?>



                    </tbody>
                </table>
            </div>

            <div class="col-md-2 pr-5 text-center">
                <h3 class="text-danger">Total</h3>
                <h1 class="bg-danger text-white"><?php echo $row_count ?></h1>

            </div>
        </div>
    </div>
    <?php
include 'footer.php';
  ?>

</body>

</html>