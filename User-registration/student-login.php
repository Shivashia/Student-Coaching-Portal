

<!DOCTYPE html>
<html>
<head>
	<title>Valorant</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
	<link rel="stylesheet"  href="Templates/Homestyle.css">
</head>
<body>
<nav class="navbar">
    <div class="content">
      <div class="logo">
        <a href="Homepage.html"><img src="Templates/Images/logo.png" width="147"></a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="Homepage.html">Home</a></li>
        <li><a href="http://localhost/STUDENT-COACHING-PORTAL/User-registration/aboutus.html">About</a></li>
        <!-- <li><a href="#">Services</a></li> -->
        <!-- <li><a href="http://localhost/STUDENT-COACHING-PORTAL/User-registration/register.php">Register</a></li> -->
        <!-- <li><a href="#">Contact</a></li> -->
        <!-- <li id="log"><a href="#">Hello, <?php echo $row["first_name"]; ?></a></li> -->
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
      <div class="title">Welcome to Valorant Coaching</div>
      
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


// var slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("dot");
//   if (n > slides.length) {slideIndex = 1}    
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";  
//   }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";  
//   dots[slideIndex-1].className += " active";
// }
</script>
<div class="footer"> 
  <br><hr><br>
  &copy 2020 Valorant Coaching Classes. ALL RIGHTS RESERVED.
  <ul>
    <li><a href=""><img src="Templates/Images/facebook.png"></a></li>
    <li><a href=""><img src="Templates/Images/linkedin.png"></a></li>
    <li><a href=""><img src="Templates/Images/twitter.png"></a></li>
    <li><a href=""><img src="Templates/Images/youtube.png"></a></li>
    <li><a href=""><img src="Templates/Images/instagram.png"></a></li>
  </ul>
  <br><br>
</div>
</body>
</html>