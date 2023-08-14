<?php
function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");

//call by value 
 function test($str2){
    $str2.="abcd";
    echo $str2 ."<br>";
  }
  $str1="vinoth ";
  test($str1);
  echo $str1 ."<br>";
  // call by reference
  
  function tests(&$str4){
    $str4.="abcd";
    echo $str4 ."<br>";
  }
  $str3="vinoth ";
  tests($str3);
  echo $str3."<br>";
//default arugment 
function testss($str2="vip"){
    $str2.="abcd";
    echo $str2 ."<br>";
  }
  $str1="vinoth ";
  testss();

  function testsss($str2="vip"){
    $str2.="abcd";
    echo $str2 ."<br>";
  }
  $str1="vinoth ";
  testsss($str1);

  // recursive

  function disp($number){
    if($number<=10)
    {
        echo $number."<br>";
        disp($number+1);
    }
  }
  disp(1);

  echo"<br>";
  echo"<br>";
  echo"<br>";
  // add number 
  function add(...$num)
  {
   $sum=0;
   foreach($num as $n)
   {
    $sum=$sum+$n;
    echo "$n  $sum" ."<br>";
   }
  # return $sum;
  echo $sum;
  }
echo add(1,32,12,14,15,15,1,41,9);
  
  ?>