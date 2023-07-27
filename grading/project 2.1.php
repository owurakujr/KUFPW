<?php
session_start ();

include 'db.php';

?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<link href="project 2.1.css" rel="stylesheet" type="text/css" /> 
<body>
	<form method="POST" action="submit.php">

		<h1>Student Grading System</h1>
		<label for="name">Student Name:</label>
		<input type="text" id="studentname" name="name"><br><br>
		
		<label for="id">Student ID:</label>
		<input type="text" id="StudentId" name="id"><br><br>
		
		<label for="subject1">English:</label>
		<input type="number" id="subject1" name="subject1"placeholder="Exam Score">
	    <input type="number" id="class1" name="class1" placeholder="Class Score 1">
		<input type="number" id="class2" name="class2"placeholder="Class Score 2">
		<input type="number" id="class3" name="class3"placeholder="Class Score 3"><input type="number" id="midterm1" name="midterm1"placeholder="Midterm Score"><br><br>

		<label for="subject2">Mathematics:</label>
		<input type="number" id="subject2" name="subject2"placeholder="Exam Score">
		<input type="number" id="class11" name="mclass1" placeholder="Class Score 1">
		<input type="number" id="class12" name="mclass2"placeholder="Class Score 2">
		<input type="number" id="class13" name="mclass3"placeholder="Class Score 3"><input type="number" id="midterm2" name="midterm2"placeholder="Midterm Score"><br><br>

		<label for="subject3">French:</label>
		<input type="number" id="subject3" name="subject3"placeholder="Exam Score">
		<input type="number" id="class21" name="fclass1" placeholder="Class Score 1">
		<input type="number" id="class22" name="fclass2"placeholder="Class Score 2">
		<input type="number" id="class23" name="fclass3"placeholder="Class Score 3"><input type="number" id="midterm3" name="midterm3"placeholder="Midterm Score"><br><br>

		<label for="subject4">Twi:</label>
		<input type="number" id="subject4" name="subject4"placeholder="Exam Score">
		<input type="number" id="class31" name="tclass1" placeholder="Class Score 1">
		<input type="number" id="class32" name="tclass2"placeholder="Class Score 2">
		<input type="number" id="class33" name="tclass3"placeholder="Class Score 3"><input type="number" id="midterm4" name="midterm4"placeholder="Midterm Score"><br><br>

		<label for="subject5">Science:</label>
		<input type="number" id="subject5" name="subject5"placeholder="Exam Score">
		<input type="number" id="class41" name="sclass1" placeholder="Class Score 1">
		<input type="number" id="class42" name="sclass2"placeholder="Class Score 2">
		<input type="number" id="class43" name="sclass3"placeholder="Class Score 3"><input type="number" id="midterm5" name="midterm5"placeholder="Midterm Score"><br><br>

		<label for="subject6">CRS/RME:</label>
		<input type="number" id="subject6" name="subject6"placeholder="Exam Score">
		<input type="number" id="class51" name="rclass1" placeholder="Class Score 1">
		<input type="number" id="class52" name="rclass2"placeholder="Class Score 2">
		<input type="number" id="class53" name="rclass3"placeholder="Class Score 3"><input type="number" id="midterm6" name="midterm6"placeholder="Midterm Score"><br><br>

		<label for="subject7">Social Studies:</label>
		<input type="number" id="subject7" name="subject7"placeholder="Exam Score">
		<input type="number" id="class61" name="oclass1" placeholder="Class Score 1">
		<input type="number" id="class62" name="oclass2"placeholder="Class Score 2">
		<input type="number" id="class63" name="oclass3"placeholder="Class Score 3"><input type="number" id="midterm7" name="midterm7"placeholder="Midterm Score"><br><br>

		<label for="subject8">Creative Arts:</label>
		<input type="number" id="subject8" name="subject8"placeholder="Exam Score">
		<input type="number" id="class71" name="aclass1" placeholder="Class Score 1">
		<input type="number" id="class72" name="aclass2"placeholder="Class Score 2">
		<input type="number" id="class73" name="aclass3"placeholder="Class Score 3"><input type="number" id="midterm8" name="midterm8"placeholder="Midterm Score"><br><br>

		<label for="subject9">Physical Education:</label>
		<input type="number" id="subject9" name="subject9"placeholder="Exam Score">
		<input type="number" id="class81" name="pclass1" placeholder="Class Score 1">
		<input type="number" id="class82" name="pclass2"placeholder="Class Score 2">
		<input type="number" id="class83" name="pclass3"placeholder="Class Score 3"><input type="number" id="midterm9" name="midterm9"placeholder="Midterm Score"><br><br>
		
		<label for="subject10">ICT:</label>
		<input type="number" id="subject10" name="subject10"placeholder="Exam Score">
		<input type="number" id="class91" name="iclass1" placeholder="Class Score 1">
		<input type="number" id="class92" name="iclass2"placeholder="Class Score 2">
		<input type="number" id="class93" name="iclass3"placeholder="Class Score 3"><input type="number" id="midterm10" name="midterm10"placeholder="Midterm Score"><br><br>
		
		<button type="submit" name="submit">Submit</button>
	</form>
    

</body>
</html>







