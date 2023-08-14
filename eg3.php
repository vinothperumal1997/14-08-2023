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
echo fgetc($myfile);
fclose($myfile);
echo"<br>";

$myfile=fopen("file.txt","r") or die("unable to open my file");
while(!(feof($myfile))){
    echo fgetc($myfile) ."<br>";
}
fclose($myfile);


$myfile=fopen("file.txt","w") or die("unable to open my file");
$text1="bmw";
echo fwrite($myfile,$text1) . "vinoth";
fclose($myfile);
echo"<br>";


$myfile = fopen("file.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
echo fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
echo fwrite($myfile, $txt);
fclose($myfile);
?>