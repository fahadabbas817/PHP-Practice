

                                        <!-- Table printed using for loop -->

<?php
// For loop started from 1 which would run till 10
for ($var=1;$var<=10 ; $var++ ){
  // For every iteration the $table will be multiplied by the iteration value ($var) and its value will be assigned to answer variable
$answer = $var*$table;

echo"$table x  $var  = $answer\n";
//   The value of $table will remain the same and of $var will be changing with the number of iterations. $answer will be calculated according to that $variable value and the table of 2 will be printed;
}   
?>


                                      <!-- Question solved using switch statement -->
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

                                    <!-- Question solved using if else if statements -->
        
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