<?php
echo  date_default_timezone_get()."<br>";

$cdate=date('d-m-y h:i:s A');
echo $cdate."<br><br>";

echo date_default_timezone_set('Asia/kolkata');
echo  date_default_timezone_get()."<br>";

$cdate=date('d-m-y h:i:s A');
echo $cdate."<br><br>";
echo date('d-m-y H:i:s ')."<br><br>";

echo"<br><br>";

$str="13-08-2023";

// small letter L
 $r=date('l',strtotime($str));

 echo"$str ,  $r<br>";


$monthname =date('F',strtotime($str));
echo $str ,$monthname ."<br>";


$monthname =date('M',strtotime($str));
echo $str ,$monthname ."<br>";


$monthname =date('d F',strtotime($str));
echo $str ,$monthname ."<br>";

$monthname =date('dS F',strtotime($str));
echo $str ,$monthname ."<br>";

$monthname =date('z',strtotime($str))+1;
echo $monthname ."<br>";

$monthname =date('z',strtotime("02-01-2023"))+1;
echo $monthname ."<br>";

$result =date('L',strtotime("02-01-2022"));
echo $result ." leapyear <br>"; // leapyear-->print 2  non leapyear--> print 1



 $s="vinoth";
 $r=strtoupper($s);
 echo $r. "<br>";
 $s="VINOTH";
 $r=strtolower($s);
 echo $r ;

 echo "<br>";
 
 echo strtotime ('13-08-2021 09:19:58 pm');

 echo "<br>";


 //echo "strtotime ('04-11-2021 02:30:45 pm').<br>";
echo (date ('d-m-Y h:i:s a')) ."<br>";



?>