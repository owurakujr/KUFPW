<?php
   $sgrade = "";

   if($scienceTotalScore>=90)
   {
       $sgrade="A+";
   }
   elseif($scienceTotalScore>=80 )
   {
       $sgrade="A";
   }
   elseif($scienceTotalScore>=70 )
   {
       $sgrade="B+";
   }
   elseif($scienceTotalScore>=60 )
   {
       $sgrade="B";
   }
   elseif($scienceTotalScore>=50 )
   {
       $sgrade="C";
   }
   elseif($scienceTotalScore>=40 )
   {
       $sgrade="D";
   }
   else
   {
       $sgrade="F";
   }
?>