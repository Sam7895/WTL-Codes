<!DOCTYPE html>
<html>
<body>

<h1>Factorial</h1>

<p>Click the button to ask for your favorite drink.</p>

<button onclick="myFunction()">Enter Value</button>

<p id="fact"></p>

<script>
function myFunction() {
  let fac;
  let input = prompt("Enter Number");
  document.getElementById("fact").innerHTML = number;
}
</script>
<?php
// PHP code to get the factorial of a number
// function to get factorial in iterative way
function Factorial($number){
    if($number <= 1){  
        return 1;  
    }  
    else{  
        return $number * Factorial($number - 1);  
    }  
}
  
// Driver Code
$number = $_POST['fact'];
$fact = Factorial($number);
echo "Factorial = $fact";
?>
</body>
</html>

