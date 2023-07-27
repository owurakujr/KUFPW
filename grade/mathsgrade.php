<?php
       $mgrade = "";

       if($mathsTotalScore>=90)
       {
           $mgrade="A+";
       }
       elseif($mathsTotalScore>=80 )
       {
           $mgrade="A";
       }
       elseif($mathsTotalScore>=70 )
       {
           $mgrade="B+";
       }
       elseif($mathsTotalScore>=60 )
       {
           $mgrade="B";
       }
       elseif($mathsTotalScore>=50 )
       {
           $mgrade="C";
       }
       elseif($mathsTotalScore>=40 )
       {
           $mgrade="D";
       }
       else
       {
           $mgrade="F";
       }
?>