<?php
$num =$_POST['num'];
$factorial = 1;

for ($x=$num; $x>=1; $x--)
{
    $factorial = $factorial * $x;
}

echo "Answer: The factorial of $num is $factorial";
?>