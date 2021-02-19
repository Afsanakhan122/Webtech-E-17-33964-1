<!DOCTYPE html>
<html>
<head>
    <title> labtask2 </title>
</head>
<body>
<?php
 $ername=  $eremail= $erdateofbirth = $ergender= $erdegree= $erblood_group= "";

 $name=  $email= $dateofbirth = $gender= $degree= $blood_group= "";

      


    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if (empty($_POST["name"])) 
        {
          $ername="NAME is required";   
        }
        else
        {
            $name = validate($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $ername = "Only letters and white space allowed";
    }
  }
         if (empty($_POST["email"]))
        {
            $eremail = "Email is required";
        } 
       else 
       {
           $email = validate($_POST["email"]);
       }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            $eremail = "Invalid Email format";
        }
        }
    
        


        if (empty($_POST["dateofbirth"])) 
        {
          $erdateofbirth="";   
        }
        else
        {
            
        $dateofbirth= validate($_POST["dateofbirth"]);
        }
        if (empty($_POST["gender"])) 
        {
          $ergender="";   
        }
        else
        {
            $gender = validate ($_POST["gender"]);
        }
         
    


        if (empty($_POST["degree"])) 
        {
          $erdegree="";   
        }
        else
        {
            
        $degree = validate($_POST["degree"]);
        }

        

        if (empty($_POST["blood_group"])) 
        {
          $erblood_group=" "; 
        }
        
      else
        {
            
        $blood_group = validate($_POST["blood_group"]);
        }
        
  

        function validate($data)
        { 
              $data= trim($data);
              $data = stripcslashes($data);
              $data = htmlspecialchars($data);
              return $data;
        }


 
?>
 <h1 style="text-align:center">PHP Form Validation</h1>
  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
    <fieldset>
    
   <table cellpadding="5" width="80%" bgcolor="F0FFFF" align="center"cellspacing="5">
    <tr>
      <td>NAME</td>
      <td><input type="text" name="name" size="40" required="1"><?php echo $ername; ?></td>
    </tr>

    <tr>
      <td>EMAIL</td>
      <td><input type="text" name="email" size="40" required="1"><?php echo $eremail; ?></td>
    </tr>

    <tr>
      <td>DATE OF BIRTH</td>
      <td><input type="Date" name="dateofbirth" size="40" min="1971-01-01" max="2021-01-01" required="1"><?php echo $erdateofbirth; ?></td>
    </tr>
      <tr>
      <td>GENDER</td>
      <td><input type="radio" name="gender" value="Male" size="40" >Male
      <input type="radio" name="gender" value="Female" size="40" >Female
      <input type="radio" name="gender" value="Other" size="40" >Other
       <?php echo $ergender;?>
    </td>
    </tr>

    
    <tr>
       <td>DEGREE</td>

       
           <td><input type="checkbox" name="degree" value="SSC" >SSC
               <input type="checkbox" name="degree" value="HSC" >HSC
               <input type="checkbox" name="degree" value="BSc" >BSc
               <input type="checkbox" name="degree" value="MSc" >MSc
               <?php echo $erdegree; ?>
            </td>
        </tr>

        <tr>
         <td>BLOOD GROUP</td>
        <td><select name="blood_group">
        <option value="1" selected>Select a blood group</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        </select></td>
        <?php echo $erblood_group; ?>
        </tr>
        <tr></tr>
        <tr>
          <td></td>
          <td><input type="Submit" name="submit" value="Submit"</td>
        </tr>
  </table>
       
    
</fieldset>
</form>

<?php    
         echo "<h2> Input:</h2>";
         echo "NAME : ".$name."<br>";
         echo "EMAIL : ".$email."<br>";
         echo "DATE OF BIRTH : ".$dateofbirth."<br>";
         echo "GENDER : ".$gender."<br>";
         echo "DEGREE: ".$degree."<br>";
         echo "BLOOD GROUP : ".$blood_group."<br>";

?>
</body>
</html>
