<?php
function lettres($string){
     $i=0;
     while(isset($string[$i]))
     {
        $i++;
     }
     echo $i;}  // Here $i has length of string and the answer will be for this string is 5.

lettres("tomberas")
?>