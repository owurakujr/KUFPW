<?php
    include 'db.php';

    $studentName = $_POST['name'];
    $studentId = $_POST['id'];
    $englishExamScore = $_POST['subject1'];
    $englishClassScore1 = $_POST['class1'];
    $englishClassScore2 = $_POST['class2'];
    $englishClassScore3 = $_POST['class3'];
    $englishMidterm = $_POST['midterm1'];

    $mathsExamScore = $_POST['subject2'];
    $mathsClassScore1 = $_POST['mclass1'];
    $mathsClassScore2 = $_POST['mclass2'];
    $mathsClassScore3 = $_POST['mclass3'];
    $mathsMidterm = $_POST['midterm2'];

    $frenchExamScore = $_POST['subject3'];
    $frenchClassScore1 = $_POST['fclass1'];
    $frenchClassScore2 = $_POST['fclass2'];
    $frenchClassScore3 = $_POST['fclass3'];
    $frenchMidterm = $_POST['midterm3'];

    $twiExamScore = $_POST['subject4'];
    $twiClassScore1 = $_POST['tclass1'];
    $twiClassScore2 = $_POST['tclass2'];
    $twiClassScore3 = $_POST['tclass3'];
    $twiMidterm = $_POST['midterm4'];

    $scienceExamScore = $_POST['subject5'];
    $scienceClassScore1 = $_POST['sclass1'];
    $scienceClassScore2 = $_POST['sclass2'];
    $scienceClassScore3 = $_POST['sclass3'];
    $scienceMidterm = $_POST['midterm5'];

    $rmeExamScore = $_POST['subject6'];
    $rmeClassScore1 = $_POST['rclass1'];
    $rmeClassScore2 = $_POST['rclass2'];
    $rmeClassScore3 = $_POST['rclass3'];
    $rmeMidterm = $_POST['midterm6'];

    $socialExamScore = $_POST['subject7'];
    $socialClassScore1 = $_POST['oclass1'];
    $socialClassScore2 = $_POST['oclass2'];
    $socialClassScore3 = $_POST['oclass3'];
    $socialMidterm = $_POST['midterm7'];

    $artsExamScore = $_POST['subject8'];
    $artsClassScore1 = $_POST['aclass1'];
    $artsClassScore2 = $_POST['aclass2'];
    $artsClassScore3 = $_POST['aclass3'];
    $artsMidterm = $_POST['midterm8'];

    $peExamScore = $_POST['subject9'];
    $peClassScore1 = $_POST['pclass1'];
    $peClassScore2 = $_POST['pclass2'];
    $peClassScore3 = $_POST['pclass3'];
    $peMidterm = $_POST['midterm9'];

    $ictExamScore = $_POST['subject10'];
    $ictClassScore1 = $_POST['iclass1'];
    $ictClassScore2 = $_POST['iclass2'];
    $ictClassScore3 = $_POST['iclass3'];
    $ictMidterm = $_POST['midterm10'];  

    $englishTotalScore = (($englishExamScore + $englishClassScore1 + $englishClassScore2 + $englishClassScore3 + $englishMidterm)/160)*100;
    $mathsTotalScore = (($mathsExamScore + $mathsClassScore1 + $mathsClassScore2 + $mathsClassScore3 + $mathsMidterm)/160)*100;
    $frenchTotalScore = (($frenchExamScore + $frenchClassScore1 + $frenchClassScore2 + $frenchClassScore3 + $frenchMidterm)/160)*100;
    $twiTotalScore = (($twiExamScore + $twiClassScore1 + $twiClassScore2 + $twiClassScore3 + $twiMidterm)/160)*100;
    $scienceTotalScore = (($scienceExamScore + $scienceClassScore1 + $scienceClassScore2 + $scienceClassScore3 + $scienceMidterm)/160)*100;
    $rmeTotalScore = (($rmeExamScore + $rmeClassScore1 + $rmeClassScore2 + $rmeClassScore3 + $rmeMidterm)/160)*100;
    $socialTotalScore = (($socialExamScore + $socialClassScore1 + $socialClassScore2 + $socialClassScore3 + $socialMidterm)/160)*100;
    $artsTotalScore = (($artsExamScore + $artsClassScore1 + $artsClassScore2 + $artsClassScore3 + $artsMidterm)/160)*100;
    $peTotalScore = (($peExamScore + $peClassScore1 + $peClassScore2 + $peClassScore3 + $peMidterm)/160)*100;
    $ictTotalScore = (($ictExamScore + $ictClassScore1 + $ictClassScore2 + $ictClassScore3 + $ictMidterm)/160)*100;

    include '../grade/artgrade.php';
    include '../grade/englishgrade.php';
    include '../grade/frenchgrade.php';
    include '../grade/ictgrade.php';
    include '../grade/mathsgrade.php';
    include '../grade/pegrade.php';
    include '../grade/rmegrade.php';
    include '../grade/sciencegrade.php';
    include '../grade/socialgrade.php';
    include '../grade/twigrade.php';


    $sql = "INSERT INTO tbl_students (Student_Name, English, Mathematics, French, Twi, Science, RME, Social, Creative_Arts, Physical_Education,
ICT) VALUES ('$studentName', '$egrade', '$mgrade', '$fgrade', '$tgrade', '$sgrade', '$rgrade', '$ograde', '$agrade', '$pgrade', '$igrade');";

    mysqli_query($conn, $sql);

    header("location: rms.php?page=project%202.1&id=2&prog=JHS%201");
?>