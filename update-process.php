<?php
$conn = mysqli_connect("localhost", "root", "", "valorant");
if (!$conn) {
    die("Error connecting to database: " . mysqli_connect_error());
}
function function_alert() { 
    echo "<script>
      alert('Updated Successfully');
      window.location.href='http://localhost/STUDENT-COACHING-PORTAL/update.php';
      </script>"; 
    }
if(count($_POST)>0) {
    $sql1= "UPDATE student_table set first_name='" . $_POST['first_name'] . "', mid_name='" . $_POST['mid_name'] . "',last_name='" . $_POST['last_name'] . "', email='" . $_POST['email'] . "' ,address='" . $_POST['address'] . "', mob_no='" . $_POST['mob_no'] . "',tele_no='" . $_POST['tele_no'] . "' WHERE student_id='" . $_POST['student_id'] . "'";
    if ($conn->query($sql1) === TRUE) {
        function_alert();}
    else {
        echo "Could not update: " . $conn->error;
      }
}
 
$result = mysqli_query($conn,"SELECT * FROM student_table WHERE student_id='" . $_GET['student_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Student Data</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
  <link rel="stylesheet"  href="Templates/Homestyle.css">
</head>
<body>
<nav class="navbar">
    <div class="content">
      <div class="logo">
        <a href="Homepage.html"><img src="Templates/Images/logo2.png"></a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li id="log"><a href="http://localhost/STUDENT-COACHING-PORTAL/admin.php">Dashboard</a></li>
        <li id="log"><a href="http://localhost/STUDENT-COACHING-PORTAL/Homepage.html">Logout</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <div class="bg">
    
  </div>
<div class="updatedisplay">
<form method="post" action="" id="dis">
  Student ID: <br>
  <input type="hidden" name="student_id" class="txtField" value="<?php echo $row['student_id']; ?>">
  <input type="text" name="student_id" disabled value="<?php echo $row['student_id']; ?>">
  <br>
  First Name: <br>
  <input type="text" name="first_name" class="txtField" value="<?php echo $row['first_name']; ?>">
  <br>
  Middle Name: <br>
  <input type="text" name="mid_name" class="txtField" value="<?php echo $row['mid_name']; ?>">
  <br>
  Last Name :<br>
  <input type="text" name="last_name" class="txtField" value="<?php echo $row['last_name']; ?>">
  <br>
  Email:<br>
  <input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
  <br>
  Address:<br>
  <textarea rows="5" name="address" cols="50" placeholder="<?php echo $row['address']; ?>"></textarea>
  <br>
  Mobile:<br>
  <input type="number" name="mob_no" class="txtField" value="<?php echo $row['mob_no']; ?>">
  <br>
  Telephone:<br>
  <input type="number" name="tele_no" class="txtField" value="<?php echo $row['tele_no']; ?>">
  <br>
  <input type="submit" name="submit" id="update-student" value="Submit">
</form>
</div>
</body>
<script type="text/javascript">
const navbar = document.querySelector(".navbar");
window.onscroll = ()=>{
  this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
  }

</script>
</html>
