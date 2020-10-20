<?php
if (isset($_POST['submit'])) {
	$user=$_POST['username1'];
$pass=$_POST['password1'];
$sql3 = "SELECT * FROM login where user='$user' ";  
$result = $conn->query($sql3);

 

if ($result->num_rows> 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["password"]==$pass){
    	echo "Login Sussss";
    }
    else{
    	echo "ERROR: Could not able to execute $sql3. " . $conn->error;
    }
  }
}
}

?>