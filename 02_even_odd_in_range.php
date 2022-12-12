<?php
//PHP Program to find Even of Odd Number in between range.

$num1 = 100;
$num2 = 150;

for($x=$num1;$x<=$num2;$x++){
	if($x%2 == 0){
		echo "$x - Even || ";
	}else{
		echo "$x - Odd</br>";
	}
}

?>