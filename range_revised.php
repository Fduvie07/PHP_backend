<?php
/*  SideHustle Task 1 (Revised):
    Write a Range function that takes two(2) arguments, start and end, and returns
    an array containing all the numbers from start up to (and including) end.
*/

    $start = 1;
    $end = 13;
    $step = 3;

    $rangeOfNumbers = range($start, $end, $step);
    echo 'The range of number in the array is : ';
    print_r($rangeOfNumbers);
    echo "<br />The number of items in the array is: ";
    print_r(count($rangeOfNumbers));
    echo "<br />";

    /* Write a sum function that takes an array of numbers 
        and returns the sum of these numbers    */

    $sumOfArray = 0;
    for($n = 0; $n < count($rangeOfNumbers); $n++){
            
            $sumOfArray += $rangeOfNumbers[$n];
            
        }
    echo "The Sum Of Items In The Array Is: $sumOfArray <br />";


?>