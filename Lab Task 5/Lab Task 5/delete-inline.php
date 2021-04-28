<?php
 $product_id=$_GET['id'];

 $conn=mysqli_connect("localhost","root","","product") or die("failed");
    $sql="DELETE FROM `products` WHERE `ID`={$product_id} ";
    $result=mysqli_query($conn, $sql) or die("query failed");
    header('Location: index.php');
    mysqli_close($conn);
?>
