<!DOCTYPE html>
<html>
<head>
  <title>Valorant</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
  <link rel="stylesheet"  href="Templates/Homestyle.css">
  <style>
    #con{
      background: #f8f4e5
      padding: 50px 100px
      border-top: 10px solid #f45702
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
      <li><a href="http://localhost/STUDENT-COACHING-PORTAL/User-registration/aboutus.htmln">About</a></li>
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
<div class="about">
  <div class="container">
    <h3>Student Details</h3>
    <hr><br>
    <form method="post" action="http://localhost/STUDENT-COACHING-PORTAL/User-registration/register.php" onsubmit="return validate()">
      <label class="studname">Student Name</label>
      <br>
      <div class="your-class">
        <input name="first_name" id="first_name" type="text" placeholder="FirstName" />
        <input name="middle_name" id="middle_name" type="text" placeholder="MiddleName"/>
        <input name="last_name" id="last_name" type="text" placeholder="LastName" /> 
      </div>
      <br><hr><br>
      <label class="studname">Password</label>
      <br>
      <input type="Password" id="password" name="password">
      <br><hr><br>
      <label class="studname">Confirm Password</label>
      <br>
      <input type="Password" id="confirm_password" name="confirm_password">
      <br><hr><br>
      <label class="studname">Birth Date</label>
      <br>
      <input type="date" id="birthday" name="birthday" max="2001-12-31">
      <br><hr><br>
      <label class="studname">Gender</label>
      <br>
      <select name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="others">Others</option>
      </select>
      <br><hr><br>
      <label class="studname">Address</label>
      <br>
      <textarea rows="5" name="address" id="address" placeholder="Enter The address here" cols="50"></textarea>
      <br><hr><br>
      <label class="studname">Student Email</label>
      <br>
      <input type="Email" name="email" id="email" placeholder="email@xyz.com/in">
      <br><hr><br>
      <label class="studname">Contact numbers</label>
      <br>
      <div>
        <label>Mobile Number</label>
        <input type="Number" name="mobno1" id="phnum1">
        <label>Telephone Number</label>
        <input type="Number" name="mobno2" id="phnum2">
      </div>
      <hr>
      <label class="studname">Programming Languages</label>
      <br>
      <div class="checkbox checkbox-inline">
        <label>
          <input name="val1[]" type="checkbox" value="Python" id="checkbox1" onclick="feesgenerate()">
            Python
        </label>
        <label>
          <input name="val1[]" type="checkbox" value="Java" id="checkbox2" onclick="feesgenerate()">
            Java
        </label>
        <label>
          <input name="val1[]" type="checkbox" value="R" id="checkbox3" onclick="feesgenerate()">
            R
        </label>
      </div>
      <div id="fees" style="font-weight: bold;"></div>
      <input id="fees2" value = '0' name="paisa" readonly></input>
      <br><hr><br>
      <input type="submit" id="register" name="submit2" value="Submit Form" onclick="validate()">
    </form>
  </div>
</div>  
</body>
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

function feesgenerate() {
    var chkbox_1 = document.getElementById('checkbox1');
    var chkbox_2 = document.getElementById('checkbox2');
    var chkbox_3 = document.getElementById('checkbox3');
    var sum = 0;
    var msg = "";
    if(chkbox_1.checked == true) {
      sum += 25000;
      msg += "25000";
    }
    if(chkbox_2.checked == true) {
      sum += 30000;
      if(chkbox_1.checked == true) {
        msg += " + ";
      }
      msg += "30000";
    }
    if(chkbox_3.checked == true) {
      sum += 15000;
      if(chkbox_1.checked == true || chkbox_2.checked == true) {
        msg += " + ";
      }
      msg += "15000"
    }
    if(chkbox_1.checked == false && chkbox_2.checked == false && chkbox_3.checked == false)
    	msg = "";
    else
    	msg += " = ";
    document.getElementById('fees').innerHTML = msg;
    document.getElementById('fees2').innerHTML = sum;
    document.getElementById('fees2').value = sum;
}
function validate(){
    var password_regex = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,20}$/;
    var fn = document.getElementById("first_name").value;
    var mn = document.getElementById("middle_name").value;
    var ln = document.getElementById("last_name").value;
    var pass = document.getElementById("password").value;
    var cpass = document.getElementById("confirm_password").value;
    var dob = document.getElementById("birthday").value;
    var gender= document.getElementById('gender').value;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;
    var phnum= document.getElementById("phnum1").value;
    var phnum2= document.getElementById("phnum2").value;
    var chkbox_1 = document.getElementById('checkbox1');
    var chkbox_2 = document.getElementById('checkbox2');
    var chkbox_3 = document.getElementById('checkbox3');
    var phnum_length = 0;
    var phnum_copy = phnum;
    while(phnum_copy>0) {
      phnum_length += 1;
      phnum_copy = Math.floor(phnum_copy/10);
    }
    if (fn==null || fn=="") {
      alert("First name can't be blank");
      return false;
    }
    if (ln==null || ln=="") {
      alert("Last name can't be blank");
      return false;
    }
    if(pass==null || pass=="") {
      alert("Password can't be blank");
      return false;
    }
    if(pass.match(password_regex) != pass) {
      alert("The password must conatin atleast one lowercase, one uppercase alphabet, one special character and should be between 6-20 characters");
      return false;
    } 
    if(pass.localeCompare(cpass) != 0) {
      alert("Both Passwords must match");
      return false;
    }
    if(gender==null || gender=="") {
      alert("Date of Birth can't be blank");
      return false;
    }
    if(address==null || address=="") {
      alert("Date of Birth can't be blank");
      return false;
    }
    if(email==null || email=="") {
      alert("Email can't be blank");
      return false;
    }
    if(phnum==null || phnum=="") {
      alert("Phone number can't be blank");
      return false;
    }
    if(phnum_length != 10) {
      alert("Phone number should be of 10 digits");
      return false;
    }
    if(chkbox_1.checked == false && chkbox_2.checked == false && chkbox_3.checked == false ) {
      alert("Please select ateast one subject!");
      return false;
    }
    console.log("Validated");
    return true;
}
</script>
</html>

<?php
if(isset($_POST['submit2'])){
  $f_nm = $_POST["first_name"];
  $m_nm = $_POST["middle_name"];
  $l_nm = $_POST["last_name"];
  $pass = $_POST["password"];
  $add = $_POST["address"];
  $m_no = $_POST["mobno1"];
  $t_no = $_POST["mobno2"];
  $dob = $_POST["birthday"];
  $lang = implode(",",$_POST['val1']);
  $gen= $_POST["gender"];
  $em= $_POST["email"];
  $fee=$_POST["paisa"];
  $conn = mysqli_connect("localhost", "root", "", "valorant");

  if (!$conn) {
    die("Error connecting to database: " . mysqli_connect_error());
    }
<<<<<<< Updated upstream
  echo "p2";
  $sql1="INSERT INTO student_table SET first_name='$f_nm', mid_name='$m_nm', last_name='$l_nm', password='$pass',
                  dob='$dob', gender='$gen', address='$add', email='$em', mob_no='$m_no', tele_no='$t_no', subjects='$lang',fee='$fee'";
  if($conn->query($sql1) === true){
     echo "Inserted into table successfully.";
  } 
  else{
     echo "ERROR: Could not able to execute $sql1. " . $conn->error;
  }
=======
    function function_alert() { 
      echo "<script>
        alert('Inserted Successfully');
        window.location.href='http://localhost/STUDENT-COACHING-PORTAL/User-registration/register.php';
        </script>"; 
      }
$sql1="INSERT INTO student_table SET first_name='$f_nm', mid_name='$m_nm', last_name='$l_nm', password='$pass',
                dob='$dob', gender='$gen', address='$add', email='$em', mob_no='$m_no', tele_no='$t_no', subjects='$lang',fee='$fee'";
if($conn->query($sql1) === true){
  function_alert();
} 
else{
   echo "ERROR: Could not able to execute $sql1. " . $conn->error;
}
>>>>>>> Stashed changes
}
?>