<!---program to calculate square root of input number using form -->
<html>
<head>
<title>Square root of a number using form</title>
</head>
<body>
<!--- input form with text box --->
<form method="post" action="">
<label>Enter a number</label>
<input type="number" name="input" value="" />
<input type="submit" name="submit" value="Submit" />
</form>
<?php
if(isset($_POST['submit'])) {
//storing the number in a variable $input
$input = $_POST['input'];
//storing the square root of the number in a variable $ans
$ans = sqrt($input);
//printing the result
echo 'The square root of '.$input.'='.$ans;
}
?>
</body>
</html>