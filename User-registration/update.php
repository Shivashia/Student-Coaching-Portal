<?php
$conn = mysqli_connect("localhost", "root", "", "valorant");

if (!$conn) {
    die("Error connecting to database: " . mysqli_connect_error());
}
$result = mysqli_query($conn,"SELECT * FROM student_table");
?>
<!DOCTYPE html>
<html>
<head>
<title>Student data</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
  <link rel="stylesheet"  href="Templates/Homestyle.css">
  <style type="text/css">
    #updatecontainer{
  width: 100%;
  background-color:inherit; 
  margin-top: 10px;
}

#student-display {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
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

 .imagehov {
  /*box-shadow: 0 0 0 4px red;*/
  /*transition: background 0.2s, color 0.2s;*/
  position: relative;
  display: inline-block;
  border-bottom: 1px;  
}

.imagehov:hover {
  /*background: yellow;*/
  animation: spinAround 1s linear infinite;
  /*visibility: visible;*/
  /*color: red;*/
}




@keyframes spinAround {
  from {
    transform: rotate(0deg)
  }
  to {
    transform: rotate(360deg);
  }
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
  <div id="updatecontainer">
    <table id="student-display">
    <tr>
    <th>Student Id</th>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Last Name</th>
    <th>Date of birth</th>
    <th>Gender</th>
    <th>Address</th>
    <th>Email id</th>
    <th>Mobile number</th>
    <th>Telephone number</th>
    <th>Subjects</th>
    <th>Fee</th>
    <th colspan="2" style="text-align: center;">Action</th>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    if($i%2==0)
    $classname="even";
    else
    $classname="odd";
    ?>
    <tr class="<?php if(isset($classname)) echo $classname;?>">
    <td><?php echo $row["student_id"]; ?></td>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["mid_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td><?php echo $row["dob"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["mob_no"]; ?></td>
    <td><?php echo $row["tele_no"]; ?></td>
    <td><?php echo $row["subjects"]; ?></td>
    <td><?php echo $row["fee"]; ?></td>
    <td><a href="update-process.php?student_id=<?php echo $row["student_id"]; ?>"><img src="Templates/Images/updatelogo.png" class="imagehov"></a></td>
    <td><a href="delete-process.php?student_id=<?php echo $row["student_id"]; ?>"><img src="Templates/Images/delete.png" class="imagehov"></a></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>
  </div>
  <footer class="footer"> 
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
</footer>
</body>
</html>

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