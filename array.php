<?php
#Two-dimensional Arrays
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
for($row=0;$row<4;$row++){
    for($col=0;$col<3;$col++){
        echo $cars[$row][$col]."  ";
    }
    echo"<br>";
}
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

#for loop Two-dimensional Arrays or  Multidimensional Arrays

for ($row = 0; $row < 4; $row++) 
{
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) 
    {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }

  echo"<br>";

/* syntax
$variable name = array("value1","value2","value3");
echo $variable name[0]*/

$size=array("big","small","large");
echo "size is: $size[0],$size[1],$size[2] <br>";
echo count($size)."<br>";
foreach($size as $s){
    echo"sizes is $s <br>";
}

// associate array
$sal=array("php"=>20000,"plsql"=>90000,"js"=>45000);
echo $sal["js"] ."<br>";
echo $sal["php"] ."<br>";


foreach($sal as $k=>$val){
    echo"key is $k valuse is  $val <br>";
}

?>