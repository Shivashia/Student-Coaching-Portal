<?php
$conn = mysqli_connect("localhost", "root", "", "valorant");
if (!$conn) {
    die("Error connecting to database: " . mysqli_connect_error());
}
if(count($_POST)>0) {
    $sql1= "UPDATE student_table set first_name='" . $_POST['first_name'] . "', mid_name='" . $_POST['mid_name'] . "',last_name='" . $_POST['last_name'] . "', email='" . $_POST['email'] . "' ,address='" . $_POST['address'] . "', mob_no='" . $_POST['mob_no'] . "',tele_no='" . $_POST['tele_no'] . "', WHERE student_id='" . $_POST['student_id'] . "'";
    if ($conn->query($sql1) === TRUE) {
    $message = "Record Modified Successfully";}
    else {
        echo "Could not update: " . $conn->error;
      }
}

?>
<html>
<div><?php if(isset($message)) { echo $message; } ?>
</div>
</html>