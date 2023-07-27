<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_2.1";
$name = "name";
$id = "id";
$subject1 = "subject1";
$subject2 = "subject2";
$subject3 = "subject3";
$subject4 = "subject4";
$subject5 = "subject5";
$subject6 = "subject6";
$subject7 = "subject7";
$subject8 = "subject8";
$subject9 = "subject9";
$subject10 = "subject10";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_error()); 
$db_select=mysqli_select_db($conn, $dbname) or die(mysqli_error());
?>