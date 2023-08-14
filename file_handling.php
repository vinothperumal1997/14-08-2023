<?php
$myfile=fopen("file.txt","r") or die("unable to open my file");
echo fread($myfile,filesize("file.txt"));
fclose($myfile);
echo"<br>";

$myfile=fopen("file.txt","r") or die("unable to open my file");
echo fgets($myfile);
fclose($myfile);
echo"<br>";


$myfile=fopen("file.txt","r") or die("unable to open my file");
while(!(feof($myfile))){
    echo fgets($myfile) ."<br>";
}
fclose($myfile);
echo"<br><BR>";

$myfile=fopen("file.txt","r") or die("unable to open my file");
echo fgetc($myfile);
fclose($myfile);
echo"<br>";

$myfile=fopen("file.txt","r") or die("unable to open my file");
while(!(feof($myfile))){
    echo fgetc($myfile) ."<br>";
}
fclose($myfile);

echo"<br><BR>";
echo"<br><BR>";

$myfile=fopen("file.txt","w") or die("unable to open my file");
$text1="bmw\n";
echo fwrite($myfile,$text1);
fclose($myfile);
echo"<br>";





?>
