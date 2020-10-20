<!DOCTYPE html>
<html>
<head>
  <title>Student Display Page</title>
  <meta charset="utf-8">
  <style type="text/css">
  /* #dis{
      width: 100px;
      height: 100px;
      background-color:  red;
  } */
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
      Find Student  
    </h3>
    <form action="http://localhost/User-registration/display.php" method = "POST">
        Enter Student id : <input type="text" name="student_id" id ="student_id"/>
        <input type="Submit" name="generate" id ="generate"/>
    </form>
</body>
</html>

<?php
if (isset($_POST['generate']))
{
$conn = mysqli_connect("localhost", "root", "", "valorant");
if (!$conn) {
    die("Error connecting to database: " . mysqli_connect_error());
}
$student_id=$_POST['student_id'];

$sql1 = "SELECT * FROM student_table where student_id='$student_id'";  
$result = $conn->query($sql1);
if ($result->num_rows> 0) {
 while($row = $result->fetch_assoc()) {
    //echo "Username: " . $row["username"]. " Email Id: " . $row["email"]. " Phone Number: " . $row["phnumber"]. "Date of Birth: " . $row["dob"]. "Companies: " . $row["companies"]. " Job description: " . $row["job"]. " Office: " . $row["ofi"]. " Work Experience: ". $row["ex"]."<br>";
    echo "<p>Full name: " .$row["first_name"]. " ".$row["mid_name"]." ".$row["last_name"];
}
}
}
?>