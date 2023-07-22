<?php
//testing that php is working

#phpinfo(); 

/*there is two ways to print text on php  "echo" and "print" */

echo "hellow world";

echo "<h1>hellow world</h1>";

//this language is non case sinsitive 

//Type Juggling And Automatic Type Conversion

echo 1 + '2';

echo '<br>'; #3

echo gettype(1 + '2'); #integer

echo '<br>';

echo true + 1; #2

echo '<br>';

echo gettype(true + 2); #integer

echo '<br>';

echo 1 + '2 yakharaby'; #3 but there is a warning necause of the non numerical value

echo '<br>';

echo 1 + 1.5; # 2.5

echo '<br>';

echo gettype(1 + 1.5); # Double

echo '<br>';
echo '<br>';

# notce that this conversion converts the result type only not the main types at all 

//====================================================================================================

//Type Casting

echo 5 + (int) "5 Lessons";

echo '<br>';

echo 5 + (integer) "5 Lessons";

echo '<br>';

echo 5 + (integer) "5 Lessons";

echo '<br>';

echo gettype(5 + (int) "5 Lessons");

echo '<br>';

echo 10 + 15.5;

echo '<br>';

echo 10 + (int) 15.5;

echo '<br>';

echo gettype(10 + (int) 15.5);

echo '<br>';

echo 10.5 + 10.5;

echo '<br>';

echo gettype(10.5 + 10.5);

echo '<br>';

echo (int) 10.5 + (int) 10.5; // 20

echo '<br>';

echo gettype((int) 10.5 + (int) 10.5);

echo '<br>';

echo (int) (10.5 + 10.5); // 21

echo '<br>';

echo '<br>';

//====================================================================================================

#Boolean and converting to boolean

var_dump((bool) ''); //bool(false)

echo '<br>';

var_dump((bool) '0'); //bool(false)

echo '<br>';

var_dump((bool) 0); //bool(false)

echo '<br>';

var_dump((bool) []); //bool(false)

echo '<br>';

var_dump((bool) array()); //bool(false)

echo '<br>';

var_dump((bool) -100); //bool(true)

echo '<br>';

var_dump((bool) array(100)); //bool(true)

echo '<br>';

echo '<br>';

//====================================================================================================

echo 'hello "php"';

echo '<br>';

echo "hello 'php'";

echo '<br>';

echo 'hello \'php\'';

echo '<br>';

echo "hello \"php\"";

echo '<br>';

echo 'hellow 
  php 
  on multible 
  lines';

echo '<br>';

# nl2br() can print the text on multible lines by butting <br> on every new line 

echo nl2br('hellow   
  php 
  on multible 
  lines');

echo '<br>';
echo '<br>';
//====================================================================================================
#String Escaping 
/* 1- Heredoc => escaping but processing the variables and special carachters
   2- Nowdoc => escaping all the text */
//1- Heredoc
$name = "monasr";
echo <<<"here"
hellow evry body
i'm php used by $name 
with some special carachters *** ''' """ //////
here;
echo "<br>";
echo <<<'Now'
hellow evry body
i'm php used by $name 
with some special carachters *** ''' """ //////
Now;
echo "<br>";
echo $name;
echo "<br>";
echo <<<"Navlinks"
<ul>
  <li>$name</li>
  <li>$name</li>
  <li>$name</li>
</ul>
Navlinks;
echo "<br>";
echo "<br>";
#====================================================================================================
# array with key ,without and value override 

echo "<pre>";
print_r(
  array(
    0 => "nader",
    "a" => "ahmed",
    "b" => "mohsen"
    ,
    "showkat",
    "sawsan",
    8 => "e3temad",
    11 => "mervat",
    "kawthar",
    9 => "shawaha"
    ,
    "shabah",
    false => "override",
    "schoolFrinds" => [
      "saed" => [
        "badawy",
        "3omda",
        "ghaly"
      ],
      "said" => [
        "mahmoud",
        "mohamed"
      ],
      "saad" => [
        "elghalban",
        "elmoftary"
      ]
    ]
  )
);
echo "</pre>";
echo "<br>";
echo "<br>";
#==========================================================================================================
//Variables
$username = "Mohamed";
$Username = "Nasr";
echo $username;
echo "<br>";
echo $Username;
echo "<br>";
echo 'i\'m $username';
echo "<br>";
echo "and my dad called $Username";
echo "<br>";
echo "<br>"; ?>
<? #===================================================?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    PHP Page|
    <?php echo $username . " ";
    echo $Username ?>
  </title>
</head>

<body>
  <div>
    Welcom
    <?php echo $username . " ";
    echo $Username ?>
  </div>
  <div>
    <?php echo $username . " ";
    echo $Username ?>! You scored 1000 point
  </div>
  <div>
    <?= include("Score.php") ?>
  </div>
</body>

</html>
<?php echo $username . $Username ?>
<?php
echo "<br>";
#Variable variable
$name = "Mohamed";
$$name = "Nasr"; //this makes the variable $Mohamed named whith the value of the main variable $name and so on
$$$name = "Mansour";
$$$$name = "Elkhoreby";
echo "<br>";
echo $name . " " . $$name . " " . $$$name . " " . $$$$name;
echo "<br>";
echo $name . " " . $Mohamed . " " . $Nasr . " " . $Mansour;
echo "<br>";
echo "hello $name";
echo "<br>";
echo "hello $name ${$name}";
echo "<br>";
echo "hello $name ${$name} ${$$name} ${$$$name} ";
echo "<br>";
echo "<br>";
#==============================================================  
//assign variable bt reference 
$nown = "Monasr";
$bronown = "Domonasr";
echo $nown . " " . $bronown;
echo "<br>";
$bronown = &$nown;
echo "<br>";
echo $nown . " " . $bronown;
echo "<br>";
$bronown = "الجديد كله";
echo "<br>";
echo $nown . " " . $bronown;
echo "<br>";
$nown = "اجدد من الجديد كله";
echo "<br>";
echo $nown . " " . $bronown;
echo "<br>";
echo "<br>";
#===============================================================

/*
  Pre-Defined Variables

  Search
  - PHP Pre-Defined Variables
*/

// echo '<pre>';
// print_r($_SERVER);
// echo $_SERVER["HTTP_CONNECTION"];
// echo '</pre>';

echo $_GET["username"];

?>

<form action="" method="get">
  <input type="text" name="username">
  <input type="submit" value="Send">
</form>
<?php
echo "<br>";
echo "<br>";
#================================================================
//Constants => it's value can't be changed during 
//excution and it is always UPPERCASE
define("DB_NAME", "ELzero");
define("MAIN_NUMBER", 5);
echo DB_NAME;
echo "<br>";
echo MAIN_NUMBER * 50;
echo "<br>";
echo "<br>";
#================================================================
/*
   Pre-Defined Constants [Case Sensitive]
   - PHP_VERSION
   - PHP_OS_FAMILY
   - PHP_INT_MAX
   - DEFAULT_INCLUDE_PATH

   Magic Constants [Case Insensitive]
   - __LINE__
   - __FILE__
   - __DIR__

   Reserved Keywords
   - break
   - clone

   Search
   - PHP Predefined Constants
   - Compile Time vs Runtime
   - List of Reserved Words
 */

define("BREAKS", "AA");

echo php_uname();
echo '<br>';
echo PHP_VERSION;
echo '<br>';
echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __DIR__;
echo '<br>';
echo BREAKS;

// No Problem Here
function hello()
{
  return "Hello";
}

echo hello();

// Syntax Error => Reserved Word
// function clone() {
//   return "Clone";
// }

// echo clone();
echo "<br>";
echo "<br>";
#============================================================================================
//Operators 
/*Identity => +$a ==> convert thre srtring +"100" to integer
  Negation => -$a ==> convert thre srtring -"100" to integer but oboses the bolarity of it to -100 */
echo "100";
echo "<br>";
echo gettype("100");
echo "<br>";
echo +"100";
echo "<br>";
echo gettype(+"100");
echo "<br>";
echo "-100";
echo "<br>";
echo gettype("-100");
echo "<br>";
echo -"-100";
echo "<br>";
echo gettype(-"-100");
echo "<br>";
echo 2 ** 3; //exponintiation
echo "<br>";
echo "<br>";
#=====================================================
//Comparison operators 
/*  - ==    => Equal  --comparese only the value
    - !=    => Not Equal
    - <>    => Not Equal
    - ===   => Identical  --comparese the value and the type 
    - !==   => Not Identical */
// Test Equal
var_dump(100 == 100);
echo '<br>';
var_dump(100 == "100");
echo '<br>';
var_dump(100.0 == "100");
echo '<br>';
var_dump(100.0 != "100");
echo '<br>';
var_dump(100.0 <> "100");

echo '<br>';
echo '##############';
echo '<br>';

// Test Identical
var_dump(100 === 100);
echo '<br>';
var_dump(100 === "100");
echo '<br>';
var_dump(100.0 === "100");
echo '<br>';
var_dump(100.0 === 100);
echo '<br>';
var_dump(100.0 !== "100");
echo '<br>';
var_dump(100.0 !== 100);
echo "<br>";
echo "<br>";
#========================================
//Comparison operators 
// <=>  => Spaceship [is less returns (-1) , if greeter returns (+1) , if equal returns (0)]
var_dump(100<=>200);
echo "<br>";
var_dump(100<=>50);
echo "<br>";
var_dump(100<=>100);
echo "<br>";
echo "<br>";
#======================================================================

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>