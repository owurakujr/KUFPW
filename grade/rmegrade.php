<?php
       $rgrade = "";

       if($rmeTotalScore>=90)
       {
           $rgrade="A+";
       }
       elseif($rmeTotalScore>=80 )
       {
           $rgrade="A";
       }
       elseif($rmeTotalScore>=70 )
       {
           $rgrade="B+";
       }
       elseif($rmeTotalScore>=60 )
       {
           $rgrade="B";
       }
       elseif($rmeTotalScore>=50 )
       {
           $rgrade="C";
       }
       elseif($rmeTotalScore>=40 )
       {
           $rgrade="D";
       }
       else
       {
           $rgrade="F";
       }
?>