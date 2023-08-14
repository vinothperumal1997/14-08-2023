<?php
include("eg2.php");
$x = acos(8);
var_dump($x) ."<br>";
echo "<br>";


$x = 5985;
var_dump(is_numeric($x));
echo "<br>";

$x = "5985";
var_dump(is_numeric($x));
echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<br>";

$x = "Hello";
var_dump(is_numeric($x)) ;
echo "<br>";


$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast ."<br>";

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast ."<br>";


echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";


#math function

echo(pi()) ."<br>";
echo(min(0, 150, 30, 20, -8, -200)) ."<br>";  // returns -200
echo(max(0, 150, 30, 20, -8, -200)) ."<br>";  // returns 150
echo(abs(-6.7)) ."<br>";  // returns 6.7
echo(sqrt(64)) ."<br>";  // returns 8
echo(round(0.60)) ."<br>";  // returns 1
echo(round(0.49)) ."<br>";  // returns 0
echo(rand()) ."<br>";# random int value number any number to print
echo(rand(10, 100)) ."<br>";# random 10 -100 any number to print 

?>
