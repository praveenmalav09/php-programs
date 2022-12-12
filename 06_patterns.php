<!-- https://www.w3schools.in/php/examples/print-pyramid-patterns -->

<?php
function pypart($n)
{
    for ($i = 0; $i < $n; $i++)
    {
        for($j = 0; $j <= $i; $j++ )
        {  
           // Printing stars
           echo "* ";
        }
        echo "<br>";
    }
}
$n = 6;
pypart($n);
?>


<br>
<br>


<?php
for($i=0;$i<=5;$i++)
{
    for($j=5-$i;$j>=0;$j--){
    echo "* ";
    }
echo "<br>";
}
?>


<br>
<br>


<?php
//Star Pyramid Size
$size = 5;
for($i=1;$i<=$size;$i++){
    for($j=1;$j<=$size-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
                echo "*&nbsp;&nbsp;";
    }
echo "<br/>";
}
?>


<br>
<br>


<?php
for ($i = 0; $i < 5; $i++){
    for($j=1;$j<5;$j++){
        echo "* ";
    }
    echo "<br/>";
}
?>


<br>
<br>


<?php
$n = 1; /*Initializing starting number*/
for ($i = 0; $i < 5; $i++)
{
    for ($j = 0; $j <= $i; $j++ )
    {
        echo $n." ";
    }
    $n = $n + 1;
    echo "<br/>";
}
?>


<br>
<br>


<?php
$n = 1; /*Initializing starting number*/
for ($i = 0; $i < 5; $i++)
{
    for ($j = 0; $j <= $i; $j++ )
    {
        echo $n." ";
        $n = $n + 1;
    }
    echo "<br/>";
}
?>


<br>
<br>


<?php
$n = 65; /*Initializing ASCII value of (A) */
for ($i = 0; $i < 5; $i++)
{
    for ($j = 0; $j <= $i; $j++ )
    {
        echo chr($n)." ";
    }
    $n = $n + 1;
    echo "<br/>";
}
?>


<br>
<br>


<?php
function print_pattern($num)
{
// Outer loop handles number of rows
for ($i = 0; $i < $num; $i++)
{
// inner loop handles indentation
    for($k = $num; $k > $i+1; $k-- )
    {
    // Print stars
    echo "&nbsp&nbsp&nbsp";
    }
    // inner loop handles number of stars
    for($j = 0; $j <= $i; $j++ )
    {
    // Print stars
    echo "* ";
    }
    // go to new line after each row pattern is printed
    echo "<br/>";
}
}
//Call function and send number of lines as parameter
$num = 5;
print_pattern($num);
?>


<br>
<br>


<?php
function print_pattern1($num)
{
    // Outer loop handles number of rows
    for ($i = $num; $i > 0; $i--)
    {
        // inner loop handles indentation
        for($k = $i; $k < $num; $k++ )
        {
        // Print stars
        echo "&nbsp&nbsp&nbsp";
        }
        // inner loop handles number of stars
        for($j = 0; $j < $i; $j++ )
        {
        // Print stars
        echo "* ";
        }
        // go to new line after each row pattern is printed
        echo "<br/>";
    }
}
//Call function and send number of lines as parameter
$num = 5;
print_pattern1($num);
?>


<br>
<br>


<?php
function print_pattern2($num)
{
    // The Upper Half Pattern
    // Outer loop handles number of rows
    for ($i = 0; $i < $num; $i++)
    {
        // inner loop handles number of stars
        for($j = 0; $j <= $i; $j++ )
        {
        // Print stars
        echo "* ";
        }
        // go to new line after each row pattern is printed
        echo "<br/>";
    }
    // The Lower Half Pattern
    // Outer loop handles number of rows
    for ($i = $num-1; $i > 0; $i--)
    {
        // inner loop handles number of stars
        for($j = 0; $j < $i; $j++ )
        {
        // Print stars
        echo "* ";
        }
        // go to new line after each row pattern is printed
        echo "<br>";
    }
}
//Call function and send number of lines as parameter
$num = 5;
print_pattern2($num);
?>


<br>
<br>


<?php
function print_pattern3($num)
{
    // The Upper Half Pattern
    // Outer loop handles number of rows
    for ($i = 0; $i < $num; $i++)
    {
        // inner loop handles indentation
        for($k = $num; $k > $i+1; $k-- )
        {
        // Print spaces
        echo "&nbsp&nbsp";
        }
        // inner loop handles number of stars
        for($j = 0; $j <= $i; $j++ )
        {
        // Print stars
        echo "* ";
        }
        // go to new line after each row pattern is printed
        echo "<br/>";
    }
    // The Lower Half Pattern
    // Outer loop handles number of rows
    for ($i = $num-1; $i > 0; $i--)
    {
        // inner loop handles indentation
        for($k = $num-1; $k >= $i; $k-- )
        {
        // Print spaces
        echo "&nbsp";
        }
        // inner loop handles number of stars
        for($j = 0; $j < $i; $j++ )
        {
        // Print stars
        echo "* ";
        }
        // go to new line after each row pattern is printed
        echo "<br>";
    }
}
//Call function and send number of lines as parameter
$num = 5;
print_pattern3($num);
?>


<br>
<br>


<?php
function print_pattern4($num)
{
    // Outer loop handles number of rows
    for ($i = 1; $i <= $num; $i++)
    {
        // inner loop handles indentation
        for($k = $num; $k > $i; $k-- )
        {
            // Print spaces
            echo "&nbsp&nbsp";
        }
            // inner loop handles number of stars
            for($j = 1; $j <= $i; $j++ )
        {
            // Print numbers
            echo $i."&nbsp&nbsp";
        }
        // go to new line after each row pattern is printed
        echo "<br/>";
    }
    }
//Call function and send number of lines as parameter
$num = 5;
print_pattern4($num);
?>


<br>
<br>


<?php
function print_pattern5($num)
{
// Outer loop handles number of rows
    for ($i = 1; $i <= $num; $i++)
    {
    // inner loop handles indentation
        for($k = $num; $k > $i; $k-- )
        {
            // Print spaces
            echo "&nbsp&nbsp&nbsp&nbsp";
        }
        // inner loop handles number of stars
        for($j = 1; $j <= $i; $j++ )
        {
            // Print characters
            echo chr(64+$j)." ";
        }
        for($j = $i-1; $j >= 1; $j-- )
        {
            // Print characters
            echo chr(64+$j)."&nbsp";
        }
        // go to new line after each row pattern is printed
        echo "<br/>";
        }
    }
//Call function and send number of lines as parameter
$num = 5;
print_pattern5($num);
?>