<?php
       $fgrade = "";

       if($frenchTotalScore>=90)
       {
           $fgrade="A+";
       }
       elseif($frenchTotalScore>=80)
       {
           $fgrade="A";
       }
       elseif($frenchTotalScore>=70)
       {
           $fgrade="B+";
       }
       elseif($frenchTotalScore>=60)
       {
           $fgrade="B";
       }
       elseif($frenchTotalScore>=50)
       {
           $fgrade="C";
       }
       elseif($frenchTotalScore>=40)
       {
           $fgrade="D";
       }
       else
       {
           $fgrade="F";
       }
?>