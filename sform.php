<?php
$n=$_POST['sname'];
$c=$_POST['sclass'];
$con=mysqli_connect("localhost","root","","school");
$s_sql="insert into studentdetails(studentname,studentclass) values ('$n','$c')";
$r=mysqli_query($con,$s_sql);
if ($r)
{
    echo"student data add";
}
else 
{
    echo"student data not add";
}

?>