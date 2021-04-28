<!DOCTYPE html>
<html>
<head>
    <title>Product Index</title>
   
</head>
<body>
<?php
include 'header.php';
?>
<div id="main-content" class="main">
    <br><h2>All Products</h2><br>
    <?php
    $conn=mysqli_connect("localhost","root","","product") or die("failed");
    $sql="SELECT * FROM products";
    $result=mysqli_query($conn, $sql) or die("query failed");

    if (mysqli_num_rows($result)>0) {
    ?>
    <table cellpadding="7px" class="table table-striped">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Profit</th>
      
       
        </thead>
        <tbody>
        	<?php
        	while($row=mysqli_fetch_assoc($result)){
       	    ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Selling Price'] - $row['Buying Price'] ; ?></td>
                
                
                <td>
                    <a class="btn btn-info" href='edit-inline.php?id=<?php echo $row['ID']; ?>'>Edit</a>
                    <a class="btn btn-danger" href='delete-inline.php?id=<?php echo $row['ID']; ?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
      <?php }else{
            	echo "<h2>No Product Found </h2>";
                 }
               mysqli_close($conn);
            ?>
</div>
</div>
<br>
<footer>
  <p>Copyright <span>&#169;</span> Afsana Khan</p>
</footer>
</body>
</html>
