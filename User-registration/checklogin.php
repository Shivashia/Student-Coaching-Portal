
<?php
if (isset($_POST['submit']))
 {

	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "valorant");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
	$user=$_POST['username1'];
$pass=$_POST['password1'];
$sql3 = "SELECT * FROM login where username='$user' ";  
$result = $conn->query($sql3);

 

if ($result->num_rows> 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["password"]==$pass){
    	header("location:admin.php");
    }
    else{
    	header("location:login.html");
    }
  }
}
}


?>