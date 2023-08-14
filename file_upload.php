<?php
$conn=mysqli_connect("localhost","root","","school");

if(isset($_POST['submit']))

{

    $file = rand(1000,100000)."-".$_files['file']['name'];
    $file_loc=$_files['file']['tmp_name'];
    $file_size=$_files['file']['size'];
    $file_type=$_files['file']['type'];
    $folder="upload/";

    $new_size =$file_size/1024;
    $new_filename=strtolower($file);
    $final_file=str_replace(' ','-',$new_filename);
     if(move_uploaded_file($file_loc,$folder.$final_file))
     {
        $sql="insert into file (file_name,type,size)values('$final_file','$file_type','$new_size')";
        mysqli_query($conn,$sql);
        echo "file upload sucessfully";
     }
     else
     {
        echo"error";
     }


}
?>