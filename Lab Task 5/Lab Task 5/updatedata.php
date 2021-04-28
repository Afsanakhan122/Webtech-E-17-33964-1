<?php 
 $product_id=$_POST['id'];
 $product_name= $_POST['name'];
 $product_buyingPrice= $_POST['buyingPrice'];
 $product_sellingPrice= $_POST['sellingPrice'];

 
   $conn=mysqli_connect("localhost","root","","product") or die("failed");
    $sql="UPDATE `products` SET `Name`='$product_name',`Buying Price`='$product_buyingPrice',`Selling Price`='$product_sellingPrice' WHERE `ID` ={$product_id}";     

   $result=mysqli_query($conn, $sql) or die("query failed");
   header('Location: index.php');
  mysqli_close($conn);

?>