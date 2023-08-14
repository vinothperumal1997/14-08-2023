<?php
$x = 2 ;

if ($x < 12) {
  echo "x is larger";
}
 elseif($x < 5) {
  echo "x is smaller";
}
else {
    echo "valueness";
}

echo "<br>";
$x = 10;

if ($x < 12) {
    if($x < 12)
    echo "nexted if  ";
  }
  echo"<br>";


  /*switch*/
  $y=10;
  switch($y){
    case 1:
        echo("to 1");
        break;
    case 4:
        echo("to 4");
        break;
     case 10:
            echo("to 10");
            break;       
    default:
    echo("final option") ;
        }


        /* for loop 
        syntax 
        for (init;condition;increment) */
        for($i=1;$i<=10;$i++)

        {
            echo"vinoth $i <br>";
        }
/*for each-->array,object
int,float,string error growing
only array,object this datatype using*/


$s=array("php","plsql","java");
foreach($s as $element){
    echo"$element";
    echo"<br>";
}
$x = array("a" => "red", "b" => "green");  
foreach($x as $key => $element){
    echo $key . ":". $element;
    echo"<br>";
  
}
$a=1;
while ($a < 10)
{
    echo $a ."vinoth <br>";
    $a++;
}
$a=1;
while ($a < 3)
{
    $p=1;
    while ($p < 3){
    echo $a."nested vinoth ".$p;
    echo"<br>";
    $p++;
    }
    $a++;
}
$n=1;
do
{
    echo $n;
    echo"<br>";
    $n++;

}
while($n<10);

echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";



for($i=0;$i<5;$i++)
{

    for($j=0;$j<5;$j++)
    {
        if($i==$j)
        {
           continue;
        }
        echo   $i, $j;
        echo"<br>";
    
    }

}

echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

for($i=0;$i<5;$i++)
{

    for($j=0;$j<5;$j++)
    {
        if($i!=$j)
        {
           continue;
        }
        echo   $i, $j;
        echo"<br>";
    
    }

}


echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

$i=0;
while($i<10)
{
    if($i%2==0)
    {
        $i++;
        continue;

    }
    echo $i ."<br>";
    $i++;
}
?>