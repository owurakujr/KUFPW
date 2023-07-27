<?php
   $tgrade = "";

   if($twiTotalScore>=90)
   {
       $tgrade="A+";
   }
   elseif($twiTotalScore>=80 )
   {
       $tgrade="A";
   }
   elseif($twiTotalScore>=70 )
   {
       $tgrade="B+";
   }
   elseif($twiTotalScore>=60 )
   {
       $tgrade="B";
   }
   elseif($twiTotalScore>=50 )
   {
       $tgrade="C";
   }
   elseif($twiTotalScore>=40 )
   {
       $tgrade="D";
   }
   else
   {
       $tgrade="F";
   }
?>