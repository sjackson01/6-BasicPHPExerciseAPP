<?php
/* !Basic PHP Exercise APP! */

/* Store each exercise in a string variable */
$exercise1 = 'Display "Hello World"';
$exercise2 = 'Convert Pounds to Kilograms';
$exercise3 = 'Convert Kilograms to Pounds';
$exercise4 = 'Convert Miles to Kilometers';
$exercise5 = 'Convert Kilometers to Miles';
$exercise6 = 'Month long string of the day';
$exercise7 = 'String of the day with levels';

/* Create a variable containing the day of the week */
$day = date("N");
$day = 5;

/* Use if statement to test for the day of the week */
/* Display the corresponding exercise string */
if($day == 1){
    echo $exercise1;
}
elseif($day == 2){
    echo $exercise2;
}
elseif($day == 3){
    echo $exercise3;
}
elseif($day == 4){
    echo $exercise4;
}
elseif($day == 5){
    echo $exercise5;
}
elseif($day == 6){
    echo $exercise6;
}
elseif($day == 7){
    echo $exercise7;
}

// Display the corresponding exercise string 

?>