<?php
session_start();
if($_SESSION["user"])
{
  $conn = mysqli_connect("localhost", "root", "", "valorant");

if (!$conn) {
    die("Error connecting to database: " . mysqli_connect_error());
}
$result = mysqli_query($conn,"SELECT * FROM student_table");
} 
else header("Location:Homepage.html");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Valorant</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
  <link rel="stylesheet"  href="Templates/Homestyle.css">
  <style type="text/css">

    #student-display {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      border: solid black 2px;
      width: 100%;
    }
    #student-display th {
      border: 1px solid #ddd;
      padding: 8px;
      font-weight: bold;
    }

    #student-display td{
      border: 1px solid #ddd;
      padding: 8px;
    }

    #student-display tr:nth-child(even){background-color: #f2f2f2;}

    #student-display tr:hover {background-color: #ddd;}

    #student-display th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #f45702;
      color: white;
    }
    .sidebar {
      position: fixed;
      left: 0;
      top: 120px;
      width: 20%;
      height: 100%;
      background: rgb(5, 15, 25);
      font-size: 12pt;
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
    #tables {
      margin-left: 20%;
      padding: 20px 20px 20px 20px;
    }
    #tables table {
      margin: auto;
      width: 60%;
      text-align: center;
    }

    #tables input {
      line-height: 28pt;
      padding: 0 20px;
      width: 150px;
      background: #f45702;
      color: white;
      letter-spacing: 0.3em;
      transition: .2s all ease-in-out;
      border: none;
    }

    #Python-table {
      display: none;
    }
    #Java-table {
      display: none;
    }
    #R-table {
      display: none;
    }
  </style>
</head>
<body >
<nav class="navbar">
    <div class="content">
      <div class="logo">
        <a href="#"><img src="Templates/Images/logo.png"  width="147"></a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li id="log"><a href="http://localhost/STUDENT-COACHING-PORTAL/adminlogout.php">Logout</a></li>
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
    <div class="sidebar">
      <nav class="sidenav">
        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="http://localhost/STUDENT-COACHING-PORTAL/update.php">Update Student</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
    <div id="tables">
      <table>
        <tr>
          <td ><input type="button" id="Python-button" value="Python" onclick="tableVisible('Python')"></td>
          <td><input type="button" id="Java-button" value="Java" onclick="tableVisible('Java')"></td>
          <td><input type="button" id="R-button" value="R" onclick="tableVisible('R')"></td>
        </tr>
      </table>
      <div id="Python-table">
        <table id="student-display">
          <tr>
          <th>Student Id</th>
          <th>Student Name</th>
          <th>Email id</th> 
          <th>Mobile number</th>
          <th>Telephone number</th>
          </tr>
          <?php
          $i=0;
          while($row = mysqli_fetch_array($result)) {
            if(strpos($row['subjects'], 'Python')!==false){
              echo "<tr><td>";echo $row['student_id']; echo"</td>";
              echo "<td>";echo $row['first_name']." ".$row['mid_name']." ".$row['last_name']; echo"</td>";
              echo "<td>";echo $row['email']; echo"</td>";
              echo "<td>";echo $row['mob_no']; echo"</td>";
              echo "<td>";echo $row['tele_no']; echo"</td></tr>"; 
              $i++; 
            }
          }
          echo "<h3 style='margin-left:70px;'>Total students : ". $i."</h3>";
          $result = mysqli_query($conn,"SELECT * FROM student_table");
          ?>
        </table>
      </div>
      <div id="Java-table">
        <table id="student-display">
          <tr>
          <th>Student Id</th>
          <th>Student Name</th>
          <th>Email id</th> 
          <th>Mobile number</th>
          <th>Telephone number</th>
          </tr>
          <?php
          $i=0;
          while($row = mysqli_fetch_array($result)) {
            if(strpos($row['subjects'], 'Java')!==false){
              echo "<tr><td>";echo $row['student_id']; echo"</td>";
              echo "<td>";echo $row['first_name']." ".$row['mid_name']." ".$row['last_name']; echo"</td>";
              echo "<td>";echo $row['email']; echo"</td>";
              echo "<td>";echo $row['mob_no']; echo"</td>";
              echo "<td>";echo $row['tele_no']; echo"</td></tr>"; 
              $i++;
            }
          }
          echo "<h3 style='margin-left:70px;'>Total students : ". $i."</h3>";
          $result = mysqli_query($conn,"SELECT * FROM student_table");
          ?>
        </table>
      </div>
      <div id="R-table">
        <table id="student-display">
          <tr>
          <th>Student Id</th>
          <th>Student Name</th>
          <th>Email id</th> 
          <th>Mobile number</th>
          <th>Telephone number</th>
          </tr>
          <?php
          $i=0;
          while($row = mysqli_fetch_array($result)) {
            if(strpos($row['subjects'], 'R')!==false){
              echo "<tr><td>";echo $row['student_id']; echo"</td>";
              echo "<td>";echo $row['first_name']." ".$row['mid_name']." ".$row['last_name']; echo"</td>";
              echo "<td>";echo $row['email']; echo"</td>";
              echo "<td>";echo $row['mob_no']; echo"</td>";
              echo "<td>";echo $row['tele_no']; echo"</td></tr>"; 
              $i++;
            }
          }
          echo "<h3 style='margin-left:70px;'>Total students : ". $i."</h3>";
          ?>
        </table>
      </div>
    </div>
<script type="text/javascript" >
const navbar = document.querySelector(".navbar");
window.onscroll = ()=>{
  this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
  }

function tableVisible(subject) {
  document.getElementById('Python-table').style.display='none';
  document.getElementById('Java-table').style.display='none';
  document.getElementById('R-table').style.display='none';
  document.getElementById('Python-button').style.background='#f45702';
  document.getElementById('Java-button').style.background='#f45702';
  document.getElementById('R-button').style.background='#f45702';
  document.getElementById(subject+"-table").style.display='block';
  document.getElementById(subject+"-button").style.background='rgb(5, 15, 25)';
}

</script>
</body>
</html>
