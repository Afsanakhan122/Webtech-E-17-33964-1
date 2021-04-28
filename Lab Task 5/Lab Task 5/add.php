
<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
   
</head>
<body>

<?php include 'header.php'; ?>
<div id="main-content" class="main">
    <br><h2> ADD PRODUCT </h2> <hr>
    <div class="form-group">
    
   <form class="post-form" action="savedata.php" method="post">
        
            
        <div class="form-group" class="form-group col-md-6" >
            <label class="col-sm-2 col-form-label">Name    </label>
            <input type="text" name="name" />
        </div>
        <div class="form-group"  >
            <label class="col-sm-2 col-form-label">Buying Price</label>
            <input type="text" name="buyingPrice" />
        </div>
        <div class="form-group">
            <label class="col-sm-2 col-form-label">Selling Price</label>
            <input type="text" name="sellingPrice" />
        </div>
        
        <input class="btn btn-outline-success" type="submit" value="Save"/>
        
    </form>
       

</div>
</div>
</div>

<br>
<footer>
  <p>Copyright <span>&#169;</span> Afsana Khan </p>
</footer>
</body>
</html>
