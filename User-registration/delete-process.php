<?php
$conn = mysqli_connect("localhost", "root", "", "valorant");
if (!$conn) {
    die("Error connecting to database: " . mysqli_connect_error());
}
$sql1 = "DELETE FROM student_table WHERE student_id='" . $_GET["student_id"] . "'";
function function_alert() { 
    echo "<script>
      alert('Deleted Successfully');
      window.location.href='http://localhost/STUDENT-COACHING-PORTAL/User-registration/update.php';
      </script>"; 
    }
if (mysqli_query($conn, $sql1)) {
    function_alert();
     
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>