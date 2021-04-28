<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
   
</head>
<body>
<?php include 'header.php'; ?>

<div id="main-content" class="main">
    <br><h2>EDIT PRODUCT </h2> <hr>
    <?php 
  $conn=mysqli_connect("localhost","root","","product") or die("failed");
  $product_id=$_GET['id'];
    $sql="SELECT * FROM products WHERE ID={$product_id}";
    $result=mysqli_query($conn, $sql) or die("query failed");

    if (mysqli_num_rows($result)>0) {
      while ($row=mysqli_fetch_assoc($result)) {
    
    ?>
    <div class="main">
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label class="col-sm-2 col-form-label">Name</label>
          <input type="hidden" name="id" value="<?php echo $row['ID'];?>"/>
          <input type="text" name="name" value="<?php echo $row['Name'];?>"/>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-form-label">Buying Price</label>
          <input type="text" name="buyingPrice" value="<?php echo $row['Buying Price'];?>"/>
      </div>
      
      <div class="form-group">
          <label class="col-sm-2 col-form-label">Selling Price</label>
          <input type="text" name="sellingPrice" value="<?php echo $row['Selling Price']?>"/>
      </div>
      <input class="btn btn-outline-primary" type="submit" value="Update"/>
    </form>
    <?php } 
      }
    ?>
    </div>
</div>
</div>
<br>
<footer>
  <p>Copyright <span>&#169;</span> Afsana Khan</p>
</footer>
</body>
</html>

