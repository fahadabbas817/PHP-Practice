<?php
// Variable intialized to 3
$var = 3;
   
    // Checking by if else statement that value of $var matches with which number
if($var==1){
  echo 1;
//   Condition not true so skipped
}
else if($var==2){
  echo 2;
  //   Condition not true so skipped
}
else if($var==3){
  echo 3;
  //   Condition  true so we will get 3 as an output and if statement will break here without checking next elseif and else statement
}
else if($var==4){
  echo 4;
}
else {
  echo "You were unable to find value";
}
    
  
    
 
?>