<?php 
//PHP program to find if the given year is leap year or not.
 
$year = 2000;  
 
if(($year % 4 == 0) & ($year % 100 != 0) | ($year % 400 == 0))
{
	echo "$year is a Leap Year.";    
}
 
else  
{  
	echo "$year is not a Leap Year.";    
}
?>