<?php
session_start();
{
  $first_name= $_SESSION["first"];
  $subs = $_SESSION["subs"];
  $subjects= explode(",",$subs);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Valorant</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
	<link rel="stylesheet"  href="Templates/Homestyle.css">
  <style type="text/css">
    .details{
      width: 100%;
      margin: auto;
      padding: 15px 15px 15px 15px;
      border-radius: 10px;
      border-style: solid;
      border-width: 5px;
      background-image: linear-gradient(#F3C6A8, #F4EDE9);
    }
    #pydetails{
      border-color: #F7623D;
      display: none;
    }
    /* #pydetails.video{
      float: left;
    }
    #pydetails.texts{
      float: right;
    }*/
    #javadetails{
      border-color: #14D085;
      display: none;
    }
    #rdetails{
      border-color: #0BCCD2;
      display: none;
    }
    section {
      border-radius: 5px;
      padding-top: 10px;
      padding-left: 4px;
      font-size: 20px;
    }
    aside {
      background:inherit;
      float: right;
      padding-left: 10px;
    }
    
  </style>
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
        <li><a>Hello, <?php echo $first_name; ?></a></li>
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
    <div  style=" padding: 30px 0; text-align:center; font-size: 38px; font-weight: 700;">Dashboard</div>
      <div id="pydetails" class="details">
        <section>
        <h1 style=" text-align:center; color:#F7623D; font-size: 38px; font-weight: 700;">Python</h1><br>
          <hr>
          <br>
          <aside>
            <video src="Resources/py_tutorial.mp4" controls width="500" >
              <p>If you are reading this, it is because your browser does not support the HTML5 video element.</p>
            </video>
          </aside>
          <article>
         
            <h2>Syllabus</h2><br>
            <h4>1. Python Fundamentals</h4>
            <h4>2. Object Oriented Programming with Python</h4>
            <h4>3. Regular Expressions and Date & Time in Python</h4>
            <h4>4. GUI Development using Python</h4>
            <h4>5. Database Connectivity and Python</h4>
            <h4>6. Data Science using Python</h4>
          </article>
          <article>
            <br><h2>Course Outcome</h2><br>
            After completion of the course, students will be able to -<br>
            <ol style="padding-left: 35px">
              <li>Implement the use of basic Python syntax</li>
              <li>Implement Object oriented programming in Python</li>
              <li>Create GUI in Python</li>
              <li>Implementat database connectivity in Python</li>
            </ol>
          </article>
          <br>
          <hr>
          <br>
          <a href="Resources/python_tutorial.pdf" download>Download resource pdf</a>
        </section>
      </div>
      <br>
      <div id="javadetails" class="details">
        <section>
        <h1 style=" text-align:center; color:#14D085; font-size: 38px; font-weight: 700;">Java</h1><br>
          <hr>
          <br>
          <aside>
            <video src="Resources/Java_tut.mp4" controls width="500">
              <p>If you are reading this, it is because your browser does not support the HTML5 video element.</p>
            </video>
          </aside>
          <article>
            <h2>Syllabus</h2><br>
            <h4>1. Programming Languages</h4>
            <h4>2. Object Oriented Programming</h4>
            <h4>3. Classes & Objects</h4>
            <h4>4. Pillars Of Object Oriented Programming</h4>
            <h4>5. OOPS concepts and terminology</h4>
            <h4>6. Encapsulation & Examples</h4>
            <h4>7. Abstraction & Examples</h4>
            <h4>8. Inheritance</h4>
          </article>
          <article>
            <br><h2>Course Outcome</h2><br>
            After completion of the course, students will be able to -<br>
            <ol style="padding-left: 35px">
              <li>Use an integrated development environment to write, compile, run, and test simple object-oriented Java programs.</li>
              <li>Read and make elementary modifications to Java programs that solve real-world problems.</li>
              <li>Validate input in a Java program.</li>
              <li>Identify and fix defects and common security issues in code.</li>
            </ol>
          </article>
          <br>
          <hr>
          <br>
          <a href="Resources/java_tutorial.pdf" download>Download resource pdf</a>
        </section>
      </div>
      <br>
      <div id="rdetails" class="details">
        <section>
        <h1 style=" text-align:center; color:#0BCCD2; font-size: 38px; font-weight: 700;">R</h1><br>
          <hr>
          <br>
          <aside>
            <video src="Resources/R_tut.mp4" controls width="500">
              <p>If you are reading this, it is because your browser does not support the HTML5 video element.</p>
            </video>
          </aside>
          <article>
            <h2>Syllabus</h2><br>
            <h4>1. General Introduction into the R Ecosystem</h4>
            <h4>2. Demonstration of a Data Analysis Project in R</h4>
            <h4>3. Brief Overview on R Coding Tools</h4>
            <h4>4. R Syntax Basics</h4>
            <h4>5. The Power of R</h4>
            <h4>6. A Systematic Introduction into Data Types</h4>
          </article>
          <article>
            <br><h2>Course Outcome</h2><br>
            Students will be familiar to the R ecosystem and learn how to use R for the most common data analysis tasks, including loading, cleaning, transforming, summarizing and visualizing data.<br>
            <!-- <ol style="padding-left: 35px">
              <li>Implement the use of basic Python syntax</li>
              <li>Implement Object oriented programming in Python</li>
              <li>Create GUI in Python</li>
              <li>Implementat database connectivity in Python</li>
            </ol> -->
          </article>
          <br>
          <hr>
          <br>
          <a href="Resources/R-tutorial.pdf" download>Download resource pdf</a>
        </section>
      </div>
      <br>
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
<div class="footer"> 
  <br><hr><br>
  <img src="Templates/Images/logo.png" width="75">
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
<?php
if (in_array('Python', $subjects)){
  echo "<script>
        document.getElementById('pydetails').style.display='block'; 
        </script>";
}
if (in_array('Java', $subjects)){
  echo "<script>
        document.getElementById('javadetails').style.display='block'; 
        </script>";
}
if (in_array('R', $subjects)){
  echo "<script>
        document.getElementById('rdetails').style.display='block'; 
        </script>";
}
?>