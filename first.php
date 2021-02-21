<?php
$fib = [0, 1];

for($i = 1; $i < 64; $i++)
    $fib[] = $fib[$i] + $fib[$i-1];
 
$numbers = implode(",", $fib);
echo $numbers;
?>