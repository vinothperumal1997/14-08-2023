<?php
$x=10;
echo $x**$x;
echo"<br>";
echo $x*$x;


echo"<br>";

function test(&$str4){
    $str4.="abcd";
    echo $str4 ."<br>";
  }
  $str3="vinoth ";
  test($str3);
  echo $str3;


?>