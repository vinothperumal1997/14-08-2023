<?php
include("con_vipdb.php");
session_start();

if(isset($_POST['name'])) && isset($_POST['pass'])
{
    $n=($_POST['name']);
    $p=($_POST['pass']);

    if(empty($name))
    {
        header("location:viplogin.php?error=username is required");
        exit();
    } elseif(empty($pass))
    {
        header("location:viplogin.php?error=password is required");
        exit();
    }else
     {
        $s_sql="select * from companysigup where email='$n' and password='$p'";
        $r=mysqli_query($con,$s_sql);
        if ($r)
        {
            echo"success  login ";
        }
        else                                             //-19.00
        
        {
            echo"error";
        }        
     }
}
?>