<?php

    // Variable initialized with value of 3
  $var = 3;
    // Finding the value of variable by comparing it with multiple values using Switch statement 
 switch($var){
   case 1:          
     echo 1;        
     break;
    case 2:
      echo 2;
      break;
    case 3:
      echo 3;
      break;
    //   As the value of Variable was 3 so case 3 is true so switch statment will break here and 3 will be our output 
    case 4:
      echo 4;
      break;
    default:
      echo "404: You were unable to find the value"; 
 }
 
?>