<?php
session_start();
unset($_SESSION["first"]);
header("Location:login.php");
?>