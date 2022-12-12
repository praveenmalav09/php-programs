<?php 

$n = 5; 
$factorial = 1;

for($x = $n; $x>=1; $x--)
{
	$factorial = $factorial * $x;
}	

echo "Factorial of $n = $factorial";

?>

<hr>

<?php
//Recursion

function fact($n){
	if($n<=1)
		return 1;
	else{
		return $n * fact($n-1);
	}
}

$result = fact(5);

echo "Factorial is: $result";

?>