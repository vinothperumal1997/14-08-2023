<?php

$n=$_POST['sname'];
$e=$_POST['email'];
$p=$_POST['pass'];
$m=$_POST['mobile'];
include("con_vipdb.php");

$s_sql="insert into companysigup(name,email,password,mobileno) values ('$n','$e','$p','$m')";
$r=mysqli_query($con,$s_sql);
if ($r)
{
    echo"success create can login ";
}
else 
{
    echo"error";
}

?>