<!DOCTYPE html>
<html>
<head>
    <title> Login Form </title>
</head>
<body>
<?php

 $eruser_name = $erpassword ="";

 $user_name  =$password= "";

 if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if (empty($_POST["user_name"])) 
        {
          $eruser_name="USER NAME is required";   
        }
        else
        {
            $user_name = validate($_POST["user_name"]);
           if (!preg_match("/^[a-zA-Z-' ]*$/",$user_name)) 
           {
              $eruser_name = "Only letters and white space allowed";
           }
          elseif (strlen($_POST["user_name"]) <= '2') 
          {
            $eruser_name = "USER NAME  Must Contain At Least 2 Characters!";
          }

        }

        if (empty($_POST["password"]))
        {
            $erpassword = "PASSWORD is required";
        } 
        else 
        {
            $password = validate($_POST["password"]);

            if (strlen($_POST["password"]) <= '8') 
          {
            $erpassword = "Your Password Must  Contain  At Least 8 Characters!";
          }
        elseif (!preg_match('/[\'^£$%&*()}{@#~?>,|=_+¬-]/', $_POST["password"])) 
          {
            $erpassword= "Your Password Must Contain At Least 1 Special Character !";
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
<h1 style="text-align:center">LOGIN FORM </h1>
  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
    <fieldset>
    
   <table cellpadding="5" width="80%" bgcolor="F0FFFF" align="center"cellspacing="5">
    <tr>
      <td>USER NAME </td>
      <td><input type="text" name="user_name" size="40" required="1"><?php echo $eruser_name; ?></td>
    </tr>
     <tr>
      <td>PASSWORD</td>
      <td><input type="text" name="password" size="40" required="1"><?php echo $erpassword; ?></td>
    </tr>
     <tr>
          <td> <input type="checkbox" name="rm">Remember Me </td> 
       
     </tr>
     <tr>
              <td><input type="submit" name="submit" value="Submit"</td>  <a href=""> Forgot Password?</a>
     </tr>
  </table>
       
</fieldset>
</form>
<?php
         echo "<h2> Input:</h2>";
         echo "USER NAME : ".$user_name."<br>";
         echo "PASSWORD : ".$password."<br>";
?>
</body>
</html>
