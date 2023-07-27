<?php
       $pgrade = "";

       if($peTotalScore>=90)
       {
           $pgrade="A+";
       }
       elseif($peTotalScore>=80 )
       {
           $pgrade="A";
       }
       elseif($peTotalScore>=70 )
       {
           $pgrade="B+";
       }
       elseif($peTotalScore>=60 )
       {
           $pgrade="B";
       }
       elseif($peTotalScore>=50 )
       {
           $pgrade="C";
       }
       elseif($peTotalScore>=40 )
       {
           $pgrade="D";
       }
       else
       {
           $pgrade="F";
       }
?>