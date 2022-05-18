<?php
// PHP Program to Enter the Temperature in Celsius and Convert it into Fahrenheit

$c = $_GET[""]; // value of the celsius
$f = NULL; // value of the fahrenheit

// It will convert celsius to fahrenheit
$f = (float)(($c * 9 / 5) + 32);

// It will print the final output
printf($c . " Celsius = " . $f . " Fahrenheit");

?>