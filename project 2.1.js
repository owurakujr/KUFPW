function calculateGrade() {
	// Get the values of the inputs
	var subject1 = parseInt(document.getElementById("subject1").value);
	var subject2 = parseInt(document.getElementById("subject2").value);
	var subject3 = parseInt(document.getElementById("subject3").value);
	var subject4 = parseInt(document.getElementById("subject4").value);
	var subject5 = parseInt(document.getElementById("subject5").value);
	var subject6 = parseInt(document.getElementById("subject6").value);
	var subject7 = parseInt(document.getElementById("subject7").value);
	var subject8 = parseInt(document.getElementById("subject8").value);
	var subject9 = parseInt(document.getElementById("subject9").value);
	
	var class1 = parseInt(document.getElementById("class1").value);
	var class2 = parseInt(document.getElementById("class2").value);
	var class3 = parseInt(document.getElementById("class3").value);
	
	// Calculate the average of the subjects and classes
	var englishAverage = (subject1 + class1 + class2 + class3 + midterm ) / 5;
	var mathematicsAverage = (subject2 + class12 + class22 + class32 + midterm2 ) / 5;
	var frenchAverage = (subject3 + class13 + class23 + class33 + midterm3 ) / 5;
	var twiAverage = (subject4 + class14 + class24 + class34 + midterm4) / 5;
	var scienceAverage = (subject5 + class15 + class25 + class35 + midterm5 ) / 5;
	var rmeAverage = (subject6 + class16 + class26 + class36 + midterm6 ) / 5;
	var socialAverage = (subject7 + class17 + class27 + class37 + midterm7 ) / 5;
	var artsAverage = (subject8 + class18 + class28 + class38 + midterm8 ) / 5;
	var peAverage = (subject9 + class19 + class29 + class39 + midterm9 ) / 5;
	var ictAverage = (subject10 + class110 + class210 + class310 + midterm10 ) / 5;

	// Calculate the final grade
	var grade = "";
	
	if (englishAverage, mathematicsAverage, frenchAverage, twiAverage, scienceAverage, rmeAverage, socialAverage, artsAverage, peAverage, ictAverage >= 90) {
		grade = "A+";
	} else if (englishAverage, mathematicsAverage, frenchAverage, twiAverage, scienceAverage, rmeAverage, socialAverage, artsAverage, peAverage, ictAverage >= 80) {
		grade = "A";
	} else if (englishAverage, mathematicsAverage, frenchAverage, twiAverage, scienceAverage, rmeAverage, socialAverage, artsAverage, peAverage, ictAverage >= 70) {
		grade = "B+";
	} else if (englishAverage, mathematicsAverage, frenchAverage, twiAverage, scienceAverage, rmeAverage, socialAverage, artsAverage, peAverage, ictAverage >= 60) {
		grade = "B";
	} else if (englishAverage, mathematicsAverage, frenchAverage, twiAverage, scienceAverage, rmeAverage, socialAverage, artsAverage, peAverage, ictAverage >= 50) {
		grade = "C";
	} else if (englishAverage, mathematicsAverage, frenchAverage, twiAverage, scienceAverage, rmeAverage, socialAverage, artsAverage, peAverage, ictAverage >= 40) {
		grade = "D";
	} else {
		grade = "F";
	}
	
	// Display the grade
	alert("The grade of the student is: " + grade);
}
