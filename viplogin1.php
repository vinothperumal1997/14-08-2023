<?php
if(!isset($_POST['submit']))
{
    $u =$_POST['email'];
    $p =$_POST['pass'];
    $con=mysqli_connect("localhost","root","","vip");
    $s_sql="select * from companysigup where email='$u' and password='$p'";
    $r=mysqli_query($con,$s_sql);
    $rc=mysqli_num_rows($r);
    if ($rc>0)
{
    echo"login successfull";
}
else 
{
    echo"username or password incorrect";
} 
}
?>