
<?php
/*  SideHustle Task 1:
    Write a Range function that takes two(2) arguments, start and end, and returns
    an array containing all the numbers from start up to (and including) end.
*/

    $start = 1;
    $end = 5;

    $myRange = range($start, $end); 

    echo "The numbers in the array is: ";
    print_r ($myRange);
    echo "<br/><br/>";

    // Write a sum function that takes an array of numbers 
    //  and returns the sum of these numbers
    $sumOfArray = array_sum($myRange);
    echo "The sum of the numbers in the array is: $sumOfArray";

    
?>