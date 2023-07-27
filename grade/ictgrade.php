<?php
       $igrade = "";

       if($ictTotalScore>=90)
       {
           $igrade="A+";
       }
       elseif($ictTotalScore>=80 )
       {
           $igrade="A";
       }
       elseif($ictTotalScore>=70 )
       {
           $igrade="B+";
       }
       elseif($ictTotalScore>=60 )
       {
           $igrade="B";
       }
       elseif($ictTotalScore>=50 )
       {
           $igrade="C";
       }
       elseif($ictTotalScore>=40 )
       {
           $igrade="D";
       }
       else
       {
           $igrade="F";
       }
?>