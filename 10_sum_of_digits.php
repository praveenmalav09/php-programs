<?php  
$num = 14597;  
$sum=0; 
$rem=0; 

for ($i =0; $i<=strlen($num);$i++)  
{  
  $rem=$num%10;  
  $sum = $sum + $rem;  
  $num=$num/10;  
}  
echo "Sum of digits 14597 is $sum";  

echo "<hr>";

$num = 14597; 
$total = 0;
while($num!=0)  
{  
  $rem=$num%10;  
  $total=$total+$rem;  
  $num=$num/10;  
} 

echo "Sum of digits 14597 is $total";  
?>  