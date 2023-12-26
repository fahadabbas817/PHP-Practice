<?php
// Solving the question of printing the table of 2 using for loop
$table =2;

// For loop started from 1 which would run till 10
for ($var=1;$var<=10 ; $var++ ){
    // For every iteration the $table will be multiplied by the iteration value ($var) and its value will be assigned to answer variable
  $answer = $var*$table;

  echo"$table x  $var  = $answer\n";
//   The value of $table will remain the same and of $var will be changing with the number of iterations. $answer will be calculated according to that $variable value and the table of 2 will be printed;
}      
    
  
    
 
?>