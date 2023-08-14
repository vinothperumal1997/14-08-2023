
<?php
$q=2;//this is aglobal variable this variable to access to function in inside 
function local(){ #local function 
    $a =20;
    $X=30;
    global$q;
    echo "global variables :$q <br>";
    echo "local variable:$a<br>";
    echo "local variable:$X<br>";

    
}

local();#function call 
$MSG ="vinoth";
 /*A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)*/
$x= "string";
$X=10;
$z=10.5;
$w=$X+$z; 
$cars = array("Volvo","BMW","Toyota");
$o = "Hello world!";
$o = null;
$P = true;


/* php support data type 

----scalar----
String
Integer
Float (floating point numbers - also called double)
Boolean

---compound----
Array
Object

--special--
NULL
Resource
*/

$cars = array("Volvo", "BMW", "Toyota");
echo "car count ".count($cars) ."<br>";

var_dump($x) ;
var_dump($X);
var_dump($z);
var_dump($cars);
var_dump($o);
var_dump($P);



echo "outside variable:$X";
echo "my value".$w."<br>";

ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!\"escape\"my statement<br>";
print "hai\"escape\"my statement <br>";


echo "hello :$MSG<br>";
print "hi  :$MSG <br>";

function local1(){
    $y=10;
    $y++;
    echo "local variable : $y <br>";
}
local1();
local1();
function local2(){ /*statics */
   static$y=10;
    $y++;
    echo "local variable : $y <br>";
}
local2();
local2();
/*three type variable scope 
*lacal variable
*global variable
*static variable  */

$X ="ABC";
$$X=200; # references  variable 
echo $X."<br>";
echo $$X."<br>";

echo $ABC."<br>";

/*syntax with define 
define (name ( this is variable not put $ symbol eg a vaiable ),value (200), case-insensitive( defulat is false ))
X x => case sensitive this 2 variable is defferent variable 
constant syntax
const variable name  = value */


/*magic constant 
syntax __magicconstantname__
eg
<?php
echo __file__;
?>
to refered the in.php
 */

define ("msg","this is vinoth" ); #1 METHOD DECLARED
echo msg."<br>";#1 method printing
echo constant("msg")."<br>";# 2 method printing
const vi="vinoth"; #1 METHOD DECLARED
echo "constant  :". vi."<br>"; #3 method printing 

define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo "constant array is 1 value   :". cars[0] ."<br>";
  echo "constant array is 1 value   :". cars[2] ."<br>";

  define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo "this using with  function ".GREETING ."<br>";
}
 
myTest();


  
/*
define ("msg","this is vinoth" , true );
echo msg;
echo Msg;
echo MSG;*/
/*string*/
echo strrev("Hello world!"). "<br>";#reveres in string to printing 
echo str_word_count("Hello world!") . "<br>"; # count of word not letter to calculate space 
echo str_word_count("He llo wor ld!") . "<br>";
echo strlen("Hello world!"). "<br>";# count letter by letter include space also calculate 
echo strpos("Hello world!", "wo"). "<br>"; #If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
echo strpos("Hello world!", "l"). "<br>";
echo str_replace("world", "Dolly", "Hello world!"). "<br>";# replace function 


/*math and number eg1.php refered  */
/*if and ifelse , else to refered by contreo_statement.php */

/*
single quote */
$str='here im there to train you';
$str1 ='here we traiin
coures related to
"software" engg'."<br>"; 
$str2='here  \n \t \'checking\' in  php'."<br>";
echo$str1;
echo$str2;

/*double quote */
$str="here im there to train you"."<br>";
#$str1 ="here we train coures related to "software" engg"."<br>";  this not run
$str2="here  \n \t 'checking' in  php"."<br>";
#echo$str1;
echo$str2 ."<br>";
#heredoc
$str=<<<demo
write a new sentence $str2
demo;
echo$str."<br>";


#now doc
$str=<<<'demo'
now dicussing new doc $str2
demo;
echo$str;

/*include 
syntax
include 'filename';
or
include ('filename');
eg 
include("form.html");

refer to include_requie.php 
*/

?>
