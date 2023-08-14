<?php
/*include("item.php"); //output get 
echo "hello world";*/
/*Warning: include(item.php): Failed to open stream: No such file or directory in C:\xampp\htdocs\include_requie.php on line 2

Warning: include(): Failed opening 'item.php' for inclusion (include_path='C:\xampp\php\PEAR') in C:\xampp\htdocs\include_requie.php on line 2
hello world */
require("item.php");
echo"hello world";
/*Warning: require(item.php): Failed to open stream: No such file or directory in C:\xampp\htdocs\include_requie.php on line 8

Fatal error: Uncaught Error: Failed opening required 'item.php' (include_path='C:\xampp\php\PEAR') in C:\xampp\htdocs\include_requie.php:8
 Stack trace: #0 {main} thrown in C:\xampp\htdocs\include_requie.php on line 8*/
?>