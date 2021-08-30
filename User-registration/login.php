<!DOCTYPE html>
<html>
<head>
	<title>Valorant</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
	<link rel="stylesheet"  href="Templates/Homestyle.css">
  <style type="text/css">
    h2{
      text-align: center;
    }
    body{
       color: black;
       background-image:url("Templates/Images/background.png");
       background-repeat: no-repeat;
       background-size: cover; 
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <div class="content">
      <div class="logo">
        <a href="Homepage.html"><img src="Templates/Images/logo.png"  width="147"></a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="Homepage.html">Home</a></li>
        </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <div class="login-container">
    <div id="rightside" class=side>
      <div id="student_login">
        <br>
          <h2>Login</h2>
          <br>
          <hr>
          <br>
          <div id="login_table">
            <form method="post" action="http://localhost/STUDENT-COACHING-PORTAL/User-registration/login.php">
              <label>Email</label>
              <br>
              <input type="Email" name="email_login" id="name1">
              <br>
              <br>
              <label>Password</label>
              <br>
              <input type="Password" name="password_login" id="pass1">
              <br>
              <br> 
              <input type="submit" name="submit" id="student-login" value="Login">
              <br>
              <br>
              Dont have an Account?....<a href="http://localhost/STUDENT-COACHING-PORTAL/User-registration/register.php">Register</a>
              <br>
              <br>
              <br>
              <br>
              Forgot Password?<a href=https://docs.google.com/forms/d/e/1FAIpQLSeb4Wv3JRLRx_XZ4iBv5InMgQYkuMfQwebpPMyOYGYy9vRyPg/viewform?usp=sf_link>Click Here</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<?php
session_start();
if (isset($_POST['submit']))
 {
	$conn = mysqli_connect("localhost", "root", "", "valorant");
	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
$email=$_POST['email_login'];
$pass=$_POST['password_login'];
$sql3 = "SELECT * FROM student_table where email='$email' ";  
$result = $conn->query($sql3);
function function_alert($message) { 
	echo "<script>
	    alert('$message');
	    window.location.href='http://localhost/STUDENT-COACHING-PORTAL/User-registration/login.php';
	    </script>"; 
	}
	if ($result->num_rows> 0) {
	  while($row = $result->fetch_assoc()) {
      $first_name=$row["first_name"];
      $subs=$row["subjects"];
	    if($row["password"]==$pass){
        $_SESSION["first"]=$first_name;
        $_SESSION["subs"]=$subs;
		    header("location:student-login.php");
	    }
	    else{
	    	function_alert("Invalid password!!");
	    }
	  }
	}
	else{
  		function_alert("Invalid email!!");
	}
}
?>