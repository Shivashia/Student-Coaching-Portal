<!DOCTYPE html>
<html>
<head>
  <title>Register Page</title>
  <meta charset="utf-8">
  <style type="text/css">
    body{
      background-color:  #EBEDED;

    }
    .container{
      width: 1000px;
      margin: auto;
      background-color:#A7BDBE;
    }
    .studname{
      float: left;
    }
    #mobile{
      float: right; 
    }
  </style>
  </head>
<body>
  <div class="container">
    <h3>
      Welcome Admin
    </h3>
    <form action="http://localhost/User-registration/admin.php" method= "POST">
        <input type = "submit" name = "register" id="register" value="New Student"/>
        <input type = "submit" name = "update" id="update" value="View Student"/>
    </form>
</body>
</html>

<?php
if(isset($_POST['register'])){
    header("location:register.php");
}
if(isset($_POST['update'])){
    header("location:update.php");
}
?>