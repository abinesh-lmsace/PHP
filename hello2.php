<html>
<body>
   <!--action="<?php //echo $_SERVER['PHP_SELF'];?> is used for adding the html and php in same file so the output will shown in the same page-->
   <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <h1>Field 1 : POST method</h1>
      <p>First Name: <input type="text" name="first_name"/> </p> <br />
      <p>Last Name: <input type="text" name="last_name" /></p>
      <input type="submit" value="Submit" />
   </form>
   <?php
      if(!empty($_POST['first_name']) && !empty($_POST['last_name'])){
         echo "<h3>First Name: " . $_POST['first_name'] . "<br /> " .  "Last Name: " . $_POST['last_name'] . "</h3>";
      }else{
         echo "Add name";
      }
   ?>

   <!--Send data to another file using GET method to pass the values in URL-->
   <form action="hello3.php" method="get">
      <h1>Field 2 : GET method</h1>
      <p>First Name: <input type="text" name="first_name"/> </p> <br />
      <p>Last Name: <input type="text" name="last_name" /></p>
      <input type="submit" value="Submit" />
   </form>
   <?php
      
   ?>

   <!--action="<?php //echo $_SERVER['PHP_SELF'];?> is used for adding the html and php in same file so the output will shown in the same page-->
   <form action="<?php echo $_SERVER['PHP_SELF'];?>">
      <h1>Field 3 : POST method not added the method in FORM</h1>
      <p>First Name: <input type="text" name="first_name"/> </p> <br />
      <p>Last Name: <input type="text" name="last_name" /></p>
      <input type="submit" value="Submit" />
   </form>
   <?php
      if(!empty($_POST['first_name']) && !empty($_POST['last_name'])){
         echo "<h2>Form data shown in URL</h2>";
         echo "<h3>First Name: " . $_POST['first_name'] . "<br /> " .  "Last Name: " . $_POST['last_name'] . "</h3>";
      }else{
         echo "Add name";
      }
   ?>

   <!--action="<?php //echo $_SERVER['PHP_SELF'];?> is used for adding the html and php in same file so the output will shown in the same page-->
   <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
      <h1>Field 4 : GET method using FORM field</h1>
      <p>First Name: <input type="text" name="first_name"/> </p> <br />
      <p>Last Name: <input type="text" name="last_name" /></p>
      <input type="submit" value="Submit" />
   </form>
   <?php
      if(!empty($_GET['first_name']) && !empty($_GET['last_name'])){
         echo "<h3>First Name: " . $_GET['first_name'] . "<br /> " .  "Last Name: " . $_GET['last_name'] . "</h3>";
      }else{
         echo "Add name";
      }
   ?>
<br>
   <a href='hello3.php?firstname=Abi&lastname=nesh'>Welcome</a>
</body>
</html>
   <?php   
      #setcookie(name, value, expire, path, domain, secure, httponly);

      $name="Name1";
      $value="Value of second cookie";
      setcookie("cookiename","Value of cookie",0,"/");
      setcookie($name,$value,0,"");


   ?>


