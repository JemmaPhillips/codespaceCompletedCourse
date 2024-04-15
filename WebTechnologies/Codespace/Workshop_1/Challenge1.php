<?php
// task1 - variables, strings, and math
$width = 10;
$height = 5;
$area = $width * $height;
Echo "The rectangle has a width of " . $width .", a height of " . $height ." and an area of " . $area ." square meters <br><br>";

//task2 - Strings, Numbers and Maths
$number1 = 10;
$number2 = 5;

$add = $number1 + $number2;
$sub = $number1 - $number2;
$multi = $number1 * $number2;
$divide = $number1 / $number2;
$concat = $number1 . "" . $number2;

Echo "Addition of " . $number1 . " and " . $number2 . " is: " . $add . ".<br>";
Echo "Subtraction of " . $number1 . " and " . $number2 . " is: " . $sub . ".<br>";
Echo "Multiplication of " . $number1 . " and " . $number2 . " is: " . $multi . ".<br>";
Echo "Division of " . $number1 . " and " . $number2 . " is: " . $divide . ".<br>";
Echo "Concatenation of " . $number1 . " and " . $number2 . " is: " . $concat . ".<br><br>";

//task3 - Age Calculator
Echo "Welcome to the Age Calculator! <br><br>";

$age = 31;
$days = $age * 365;
$hours = $days * 24;
$mins = $hours * 60;

Echo "Your age: " . $age . "<br>";
Echo "You have been alive for: <br>" . $days . " days <br>" . $hours . " hours <br>" . $mins . " minutes <br>";



//task4 - Numeric Arrays
echo " <h1>Days of the week</h1> ";
$days = array( "Monday <br> <br>", "Tuesday <br> <br>", "Wednesday <br> <br>", "Thursday <br> <br>", "Friday <br> <br>", "Saturday <br> <br>", "Sunday <br> <br>" );
foreach( $days as $value ) { echo "
    • $value
    " ; } 

//task5 - Associative arrays


 $summer= "July-Aug";
 $winter= "Jan-Feb";
 $temperature = array("summer_low" =>11, "summer_high" =>19, "winter_low" =>1, "winter_high" =>7);
	   
echo "<table  class=\"table table-condensed\">
 <tr>
  <h1>Average Temperature in Edinburgh</h1>
 </tr>
 
 <tr>
  <th>Month</th>
  <th>High</th>
  <th>Low</th>
 </tr>

 <tr>
  <th>$summer</th>
  <th>" . $temperature['summer_high'] . " ℃</th>
  <th>" . $temperature['summer_low'] . " ℃</th>
 </tr>

 <tr>
  <th>"$winter"</th>
  <th>" . $temperature['winter_high'] . " ℃</th>
  <th>"" . $temperature['winter_low'] . " ℃</th>
 </tr>
</table>";

//task 6 Multi-dimensional arrays
echo"<h1>Student Results</h1>";
   $results = array( 
      "aarron" => array (
        "Physics" => '74%',
        "English" => '79%',	
        "Maths" => '70%'
            ),
            
            "jamie" => array (
               "Physics" => '64%',
               "English" => '79%',	
               "Maths" => '69%'
            ),
            
            "harry" => array (
               "Physics" =>'55%',
               "English "=> '52%',	
               "Maths" => '57%'
            )
         );
         
         /* Accessing multi-dimensional array values */
         echo "Result for Physics for Aarron : " ;
         echo $results['aarron']['Physics'] . "<br>"; 
         
         echo "Results for English for Jamie: ";
         echo $results['jamie']['English'] . <br >"; 
         
         echo "Results for Maths for Harry : " ;
         echo $results['harry']['Maths'] . <br>"; 

?>	