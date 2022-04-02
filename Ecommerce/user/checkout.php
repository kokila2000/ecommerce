<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check out</title>
    <!--bootstrap cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--fontawesome cdn-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>

<body>



<div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">


                <form action="insertcheckout.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Delivery Detalis:</p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Delivery person name:</label>
                        <input type="text" name="Dname" class="form-control" placeholder="Enter delivery person name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Delivery Address:</label>
                        <input type="text" name="Daddress" class="form-control" placeholder="Enter delivery address">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Delivery Contact Number:</label>
                        <input type="text" name="Dnumber" class="form-control" placeholder="Enter delivery number">
                    </div>
                   
                    <div class="mb-3">
                        <label class="form-label">Pincode:</label>
                        <input type="number" name="Dpincode" class="form-control" placeholder="Enter delviery pincode">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select state</label>
                        <select class="form-select" name="Dstate">
                            
                        <option value="select">select</option>
                        <option>Andhra Pradesh</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Bihar">Bihar</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option  value="Telangana">Telangana</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="West Bengal">West Bengal</option>
                            
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Countries</label>
                        <select class="form-select" name="Dcontries">
                            
                        <option value="select">select</option>
                            <option value="India">India</option>
                            
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Select Delivery Type</label>
                        <select class="form-select" name="typedel">
                            
                        <option value="select">select</option>
                            <option value="cash on delviery">cash on delviery</option>
                            
                        </select>
                    </div>
                    <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
                </form>
            </div>
        </div>
    </div>

      
</body>

</html>