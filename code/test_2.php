<!DOCTYPE html>  
<html>  
<head>  
</head>  
Enter a number: <input id = "num">  
<br><br>  
<button onclick = "fact($n)"> Factorial </button>  
<p id = "res"></p>  
<script>  
<?php  
function fact ($n)  
{  
    if($n <= 1)   
    {  
        return 1;  
    }  
    else   
    {  
        return $n * fact($n - 1);  
    }  
}  
  
echo "Factorial of 6 is " .fact(6);  
?>  
</script>  
</body>  
</html>  
