<!DOCTYPE html>
<html>
<head>
    <title> Change password Form </title>
</head>
<body>
<?php
 $ercurrenetpassword = $ernewpassword  =$erRetypenewpassword = "";

 $currenetpassword  =$newpassword =$Retypenewpassword = "";

  if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    	 if (empty($_POST["currentpassword"]))
        {
            $ercurrentpassword = "PASSWORD is required";
        } 
        else 
        {
            $currentpassword = validate($_POST["currentpassword"]);

            if (strlen($_POST["password"]) <= '8') 
          {
            $ercurrentpassword = "Your Password Must Contain At Least 8 Characters!";
          }
	   }

	    if (empty($_POST["newpassword"]))
        {
            $ernewpassword = "PASSWORD is required";
        } 
        else 
        {
            $newpassword = validate($_POST["newpassword"]);

            if (strlen($_POST["newpassword"]) <= '8') 
          {
            $ernewpassword = "Your Password Must Contain At Least 8 Characters!";
          }
	   }
 if (empty($_POST["Retypenewpassword"]))
        {
            $erRetypenewpassword = "PASSWORD is required";
        } 
        else 
        {
            $Retypenewpassword = validate($_POST["Retypenewpassword"]);

            if (strlen($_POST["Retypenewpassword"]) <= '8') 
          {
            $erRetypenewpassword = "Your Password Must Contain At Least 8 Characters!";
          }
	   }


   }
 function validate($data)
        { 
              $data= trim($data);
              $data = stripcslashes($data);
              $data = htmlspecialchars($data);
              return $data;
        } 

?>

 <h1 style="text-align:center"> CHANGE PASSWORD FORM  </h1>
  
  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
    <fieldset>
    
   <table cellpadding="5" width="80%" bgcolor="F0FFFF" align="center"cellspacing="5">
    <tr>
      <td>Current Password</td>
      <td><input type="text" name="currenetpassword" size="40" required="1"><?php echo $ercurrenetpassword; ?></td>
    </tr>
     <tr>
      <td>New Password</td>
      <td><input type="text" name="newpassword" size="40" required="1"><?php echo $ernewpassword; ?></td>
    </tr>
     <td>Retype new Password</td>
      <td><input type="text" name="Retypenewpassword" size="40" required="1"><?php echo $erRetypenewpassword; ?></td>
    </tr>
     <tr>
          <td></td>
          <td><input type="Submit" name="submit" value="Submit"</td>

     </tr>
  </table>
       
</fieldset>
</form>	   
<?php
         echo "<h2> Input:</h2>";
         echo "Current Password : ".$currenetpassword."<br>";
         echo "New Password : ".$newpassword."<br>";
         echo "Retype New Password : ".$Retypenewpassword."<br>";
?>
</body>
</html>
