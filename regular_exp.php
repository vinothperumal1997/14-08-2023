<?php
$str = "this a this is vinoth.";
$pattern = "/is/";
echo preg_match_all($pattern, $str) ."<br>";

$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/";
echo preg_match($pattern, $str)."<br>";
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str);
?>