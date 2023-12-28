<?php
//   function defined that takes $table as an argument
  function table_function($table){
    $iterator = 1;                                  //$Iterator value set to 1 
    while($iterator<=10){
      $answer = $table * $iterator;                 //value will be calculated accoring to each iteration    
      echo "$table X $iterator = $answer \n   ";    //The values will be displayed on the screen with echo
      $iterator++;
    }
  }
//   functino call with 5 as a parameter this 5 will be assigned to the $table in the function argument
  table_function(5)
  

?>