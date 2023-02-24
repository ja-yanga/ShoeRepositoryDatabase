<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Shoe Repository Database</title>

    <!-- Bootstrap CSS and CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
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

    <div class="container-flex">
        <button class="btn btn-primary my-3" id="btnAdd"><a href="user.php" class="text-light">Add Shoes</a>
    </button>
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Product #</th>
      <th scope="col">Product Name</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Serial</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

<?php

    $sql="Select * from `crud`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $prodnum=$row['ProductNumber'];
            $prodname=$row['ProductName'];
            $description=$row['Description'];
            $category=$row['Category'];
            $serial=$row['ProductSerialNum'];
            $quantity=$row['ProductQuantity'];
            $price=$row['Price'];
            echo'<tr>
            <th scope="row">'.$prodnum.'</th>
            <td>'.$prodname.'</td>
            <td>'.$description.'</td>
            <td>'.$category.'</td>
            <td>'.$serial.'</td>
            <td>'.$quantity.'</td>
            <td>'.$price.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php? updateid='.$prodnum.'" class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php? deleteid='.$prodnum.'" class="text-light">Delete</a></button> 
            </td>
          </tr>';
        }
    }

?>

  </tbody>
</table>
    </div>

</body>
</html>