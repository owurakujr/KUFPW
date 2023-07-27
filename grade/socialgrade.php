<?php
   $ograde = "";

   if($socialTotalScore>=90)
   {
       $ograde="A+";
   }
   elseif($socialTotalScore>=80 )
   {
       $ograde="A";
   }
   elseif($socialTotalScore>=70 )
   {
       $ograde="B+";
   }
   elseif($socialTotalScore>=60 )
   {
       $ograde="B";
   }
   elseif($socialTotalScore>=50 )
   {
       $ograde="C";
   }
   elseif($socialTotalScore>=40 )
   {
       $ograde="D";
   }
   else
   {
       $ograde="F";
   }
?>