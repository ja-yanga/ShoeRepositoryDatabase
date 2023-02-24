<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $prodnum=$_GET['deleteid'];
    
    $sql="delete from `crud` where ProductNumber=$prodnum";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>