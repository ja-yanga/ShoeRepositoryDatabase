<?php

include 'connect.php';
if (isset($_POST['submit'])){
    $prodname=$_POST['prodname'];
    $description=$_POST['description'];
    $category=$_POST['category'];
    $serial=$_POST['serial'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];

    $sql="insert into `crud` (ProductName,Description,Category,ProductSerialNum,ProductQuantity,Price)
    values('$prodname','$description','$category','$serial','$quantity','$price')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS and CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>The Shoe Repository Database</title>
  </head>
  <body>
    <!--Nav Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="display.php" id="brandname">The Shoe Repository Database Manager</a>
        
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="display.php" style="color:white; font-weight: bold">Home<span class="sr-only"></span></a>
                </li>  
          </div>
        </nav>
    <center><h2 class="text-light my-3">Add Shoes</h2></center>
    <div class="container my-4">
        <form method="post">
  <div class="form-group">
    <label>Product Name</label>
    <input type="text" class="form-control" placeholder="Enter Product Name" name="prodname" autocomplete="off">
    </div>
    <div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control" placeholder="Enter Product Description" name="description" autocomplete="off">
    </div>
    <div class="form-group">
    <label>Category</label>
    <input type="text" class="form-control" placeholder="Enter Category" name="category" autocomplete="off">
    </div>
    <div class="form-group">
    <label>Serial</label>
    <input type="text" class="form-control" placeholder="Enter Serial Number" name="serial" autocomplete="off">
    </div>
    <div class="form-group">
    <label>Quantity</label>
    <input type="text" class="form-control" placeholder="Enter Quantity" name="quantity" autocomplete="off">
    </div>
    <div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control" placeholder="Enter Price" name="price" autocomplete="off">
    </div>

</br>
<center>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <button type="submit" class="btn btn-danger" name="submit"><a href="display.php" class="text-light">Cancel</a></button>
</center>
</form>  
    </div>

  </body>
</html>