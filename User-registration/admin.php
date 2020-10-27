<!DOCTYPE html>
<html>
<head>
  <title>Valorant</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
  <link rel="stylesheet"  href="Templates/Homestyle.css">
  <style type="text/css">
    #piechart{
      margin: auto;
      /* */
    }
    .side {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100%;
    }
    .sidebar {
      position: absolute;
      left: 0;
      top: 150px;
      width: 20%;
      height: 100%;
      background: #f8f4e5;
      font-size: 12pt ;
} 

    .sidenav {
      position: relative;
      margin: 0 15%;
      text-align: center;
      top: 35%;
      transform: translateY(-50%);
      font-weight: bold;
    }

    .sidenav ul {
      list-style: none;
    }  
    .sidenav li {
      position: relative;
      margin: 3.2em 0;
    }    
    .sidenav a {
      line-height: 5em;
      text-transform: uppercase;
      text-decoration: none;
      letter-spacing: 0.4em;
      color: #f45702;
      display: block;
      transition: all ease-out 300ms;
    }
    .sidenav a:hover{
      color: red;
      transform: scale(1.3);
    }    
  </style>
</head>
<body style="background-color: white">
<nav class="navbar">
    <div class="content">
      <div class="logo">
        <a href="#"><img src="Templates/Images/logo.png"  width="147"></a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="Homepage.html">Home</a></li>
        <li><a href="http://localhost/STUDENT-COACHING-PORTAL/User-registration/aboutus.html">About</a></li>
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
    <aside class="sidebar">
      <nav class="sidenav">
        <ul>
          <li><a href="#">Dashboard</a></li>
          <!-- <li><a href="http://localhost/STUDENT-COACHING-PORTAL/User-registration/register.php">New Student</a></li> -->
          <li><a href="http://localhost/STUDENT-COACHING-PORTAL/User-registration/update.php">Update Student</a></li> 
        </ul>
      </nav>
    </aside>
    <section class="side">
      <!-- <div class="title">Administrator</div> -->
      <div id="piechart"></div>
    </section>
  </div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" >
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

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Work', 8],
  ['Eat', 2],
  ['TV', 4],
  ['Gym', 2],
  ['Sleep', 8]

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':700, 'height':500};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</body>
</html>
