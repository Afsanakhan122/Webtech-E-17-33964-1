<?php
 $product_name= $_POST['name'];
 $product_buyingPrice= $_POST['buyingPrice'];
 $product_sellingPrice= $_POST['sellingPrice'];

 
   $conn=mysqli_connect("localhost","root","","product") or die("failed");
    $sql="INSERT INTO `products`(`Name`,`Buying Price`,`Selling Price`) VALUES ('$product_name','$product_buyingPrice',
    '$product_sellingPrice')";

   $result=mysqli_query($conn, $sql) or die("query failed");
   header('Location: index.php');
  mysqli_close($conn);
?>