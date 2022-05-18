<?php
// PHP code to check if given
// number is power of 4 or not
 
// Function to check if
// x is power of 4
function isPowerOfFour($n)
{
     
    if($n == 0)
        return 0;
    while($n != 1)
    {
        if($n % 4 != 0)
            return 0;
            $n = $n / 4;    
    }
    return 1;
}
 
// Driver Code
$test_no = 64;
 
if(isPowerOfFour($test_no))
    echo $test_no," is a power of 4";
else
    echo $test_no," is not a power of 4";
 
// This code is contributed by Rajesh
?>