<?php
       $egrade = "";

       if($englishTotalScore>=90)
       {
           $egrade="A+";
       }
       elseif($englishTotalScore>=80)
       {
           $egrade="A";
       }
       elseif($englishTotalScore>=70)
       {
           $egrade="B+";
       }
       elseif($englishTotalScore>=60)
       {
           $egrade="B";
       }
       elseif($englishTotalScore>=50)
       {
           $egrade="C";
       }
       elseif($englishTotalScore>=40)
       {
           $egrade="D";
       }
       else
       {
           $egrade="F";
       }
?>