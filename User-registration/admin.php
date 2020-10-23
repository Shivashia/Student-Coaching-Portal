<!DOCTYPE html>
<html>
<head>
  <title>Valorant</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
  <link rel="stylesheet"  href="Templates/Homestyle.css">
  <style type="text/css">
    #adminform{
      height: 60%;
      width: 50%;
      border: 1px solid white;
      border-radius: 5px;
      margin:auto;
      background-color: white;
      transform: translateY(200px);
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
        <li><a href="http://localhost/STUDENT-COACHING-PORTAL/User-registration/aboutus.html">About</a></li>
        <!-- <li><a href="#">Services</a></li> -->
        <li><a href="http://localhost/STUDENT-COACHING-PORTAL/User-registration/register.php">Register</a></li>
        <!-- <li><a href="#">Contact</a></li> -->
        <li id="log"><a href="http://localhost/STUDENT-COACHING-PORTAL/User-registration/Homepage.html">Logout</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
<div class="bg">
</div>

<div class="about">
    <div class="content">
      <div class="title">Administrator</div>
    <div id="adminform">
      <form action="http://localhost/STUDENT-COACHING-PORTAL/User-registration/admin.php" method= "POST">
        <input type = "submit" name = "register" id="register" value="New Student"/>
        <input type = "submit" name = "update" id="update" value="View Student"/>
    </form>
    </div>
  </div>
</div>
<script type="text/javascript">
const body = document.querySelector("body");
const navbar = document.querySelector(".navbar");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");
menuBtn.onclick = ()=>{
  navbar.classList.add("show");
  menuBtn.classList.add("hide");
  body.classList.add("disabled");
}
cancelBtn.onclick = ()=>{
  body.classList.remove("disabled");
  navbar.classList.remove("show");
  menuBtn.classList.remove("hide");
}
window.onscroll = ()=>{
  this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
  }
</script>
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