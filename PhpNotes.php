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
#==========================================================================
//Increment and Decriment operator
$first=0;
echo $first;
echo '<br>';
echo $first++ ;
echo '<br>';
echo $first;
echo '<br>';
echo ++$first; 
echo '<br>';
echo $first;
echo '<br>';
echo '<br>';
#==========================================================================
/*
Operators
- Used To Perform Operations On Values.

Logical Operators
- Compare Conditions

and => And => Two Are True
&&  => And => Two Are True ["&&" Has A Greater Precedence Than "and"]
or  => Or  => One Or Both Is True
||  => Or  => One Or Both Is True ["||" Has A Greater Precedence Than "or"]
xor => Xor => One Is True But Not Both
!   => Not => Not True
*/
#===========================================================================
  /*
    Operators
    - Used To Perform Operations On Values.

    String Operators
    - Concatenate Strings

    .   => concatenate variables with text 
    .=  => concatenates the variable's value with the value after operator
  */

  #==========================================================================
//array operators 
/*
  Operators
  - Used To Perform Operations On Values.

  Array Operators
  - Deal With Arrays

  +     => Union
  ==    => Equal => Same Key And Value
  !=    => Not Equal
  <>    => Not Equal
  ===   => Identical => Same Key And Value, Same Order, Same Type
  !==   => Not Identical
*/
$arr1 = ["a" => 1, "b" => 2];
$arr3 = ["a" => '1', "b" => '2'];
$arr4 = ["a" => 1, "b" => 2];
$arr2 = ["c" => 3, "d" => 4];
echo '<pre>';
print_r($arr1 + $arr2);
echo '</pre>';
var_dump($arr1 == $arr3); //althow 1 is int and '1' is string
echo '<br>';
var_dump($arr1 === $arr4);
echo '<br>';
var_dump($arr1 != $arr2);
echo '<br>';
echo '<br>';
#==========================================================================
//Error control operator
/*
  Operators
  - Used To Perform Operations On Values.

  Error Control Operator
  - Control The Errors

  @
  - Variable
  - File
  - Include
*/

// Variable 
$a = 10;
$b = @$a or die("Variable Not Found"); //it's prevent showing the error and
// die => give the ability to write 
//a masage instead of the error 
echo "Test $b";
echo '<br>';

// File
$f = @file("osama.txt") or die("File Not Found");
echo '<pre>';
print_r($f);
echo '</pre>';
echo '<br>';

// Include
//(@include("osama_elzero.php")) or die("Include File Not Found"); //i commented it because it neglect the script after it
echo '<br>';
echo '<br>';
#===========================================================================
//Operator Precedence
/*
  Operators
  - Used To Perform Operations On Values.

  Operator Precedence
  - "||" Has A Greater Precedence Than "or"
  - "&&" Has A Greater Precedence Than "and"
*/
$a = 10 || false; // $a = (10 || false) => $a = 1
echo $a; // 1

echo '<br>';

$b = 10 or false; // ($b = 10) or false
echo $b; // 10
echo '<br>';
echo '<br>';
#===========================================================================
//if and elseif 
if (10 < 5) {
  echo 10 > 5 || "hello\n";
} elseif (11 > 12) {
  echo "the second condition is true\n";
} else {
  echo nl2br("nothing\n");
}
if (10 < 5):
  echo 10 > 5 || "hello\n";
elseif (11 > 12):
  echo "the second condition is true\n";
else:
  echo "nothing";
endif;
echo '<br>';
echo '<br>';
/*
  Control Structure
  - Ternary Operator => Short If
  (condition ? whileTrue : whileFalse) and it can be used with concatenate
*/
$c = 11;
$d = 12;
echo "I love PHP because it is a " . ($c <> $d ? "good" : "bad") . " Language";
echo '<br>';
$result = ($c <> $d ? "good" : "bad");
echo '<br>';
echo "I love PHP because it is a " . $result . " Language";
echo '<br>';
echo '<br>';
#=======================================================================================
//Switch
/*
  Control Structure
  - Switch

  Syntax
  switch (expression) {
    Case 1:
      // Code Block 1
      break;
    Case 2:
      // Code Block 2
      break;
    Case 3:
      // Code Block 3
      break;
    Default:
      // Default Code Block
  }
*/
#==============================================================================================
//While loop
/*
$i=0; => first we declare and initialise the counter

while(condition){
  block of code ; 
  increment or decrement i++ || i-- ; "the counter"
} 

while ($a <= 3) :

    echo "$a<br>";

    $a++;

  endwhile;
*/

//Do While loop
/*
do{
block of code ;
increment or decrement i++ || i-- ; "the counter"
}while(condition)

The only difference between them that dowhile will execute the first iteration then check the condetion
*/

#==============================================================
//For loop
for($i=0 ; $i<5 ; $i++ ):
  for($j=0;$j<$i;$j++):
    echo '* ';
  endfor;
  echo '<br>';
endfor;
echo '<br>';
echo '<br>';
#==============================================================
//Foreach loop
/*
  if i have an array i can use foreach 

  1-  foreach(element as values){
        echo valuese . "<br>";
  }

  2-  foreach(element as key => value) :       
        echo key value ;
        endforeach;

*/
$countries = ["EG", "SA", "QA", "SY"];

echo '<pre>';
print_r($countries);
echo '</pre>';

foreach ($countries as $country) {

  echo $country . "<br>";

}

$countries_with_discount = ["EG" => 50, "SA" => 30, "QA" => 50, "SY" => 70];

echo '<pre>';
print_r($countries_with_discount);
echo '</pre>';

foreach ($countries_with_discount as $country => $discount) :

  echo "Country Name Is $country And Discount Is $discount <br>";

endforeach;
echo '<br>';
echo '<br>';
#=======================================================================
/*
The difference between break and continue that
break => left the loop
continue => skips the current iteration
*/
#=========================================================================
// Include, Require
/*
    Control Structure
    - Including Files

    Include 
    Require
  */
  $f = 20;
  # require("test.text"); // gives me Fatal error and skip all other script because the file is required

  include_once("test.php"); // $a = 10;  gives me warning but continue the script 
                            // include_once => chick that if i includes this file befor it dosen't inclede it again 

  echo $f . '<br>';

  echo "Continue";
echo '<br>';
echo '<br>';
#===============================================================  
//Function Default Parameter Value

/*
  Function
  - Default Parameter Value
  --- Using
  --- Test Data
  --- Skip Arguments


  1-  function function_name($arg1, $arg2 = "default"){
        // code block
  }
****you can't skip initializing the first parameter value
***you can skip any parameter value if you gave it a default value
**you con chose the parameter you want to initialize by type the parameter name and 
put " : " and then type the value 

*/

function get_data($country = "Private Country", $name = "Private", $age = "Private", $address = "Private Address")
{
  // if ($address === "") {
  //   $address = "Private Address";
  // }
  $line_one = "Your Country Is $country And Your Name Is $name <br>";
  $line_two = "Your Age Is $age And You Live In $address";
  return $line_one . $line_two;
}

echo get_data(address: "Cairo");
echo '<br>';
echo '<br>';
#======================================
//Function Variable Arguments List
/*
  Function
  - Variable Arguments List
  --- func_num_args() => get number of arguments passed to function
  --- func_get_arg(index) => get the argument by index
  --- func_get_args() => showing the arguments passed as array

  Spread Syntax In JS => (...$arg)  
    it enables the user to pass any number of arguments to the function
    --then i can use "...$arg" as the array of arguments 

  --I can also use spreed syntax on an array to spreed its elements 
    meaning that i can pass any array of arguments to the function
    has many arguments  
*/

function calculate(...$nums)
{
  // echo "Number Of Arguments: " . func_num_args() . "<br>";
  // echo "Argument Index Number 3 Is " . func_get_arg(3) . "<br>";
  // print_r(func_get_args());
  // $result = 0;
  // foreach (func_get_args() as $arg) :
  //   $result += $arg;
  // endforeach;
  // echo $result;
  echo "Argument Index Number 3 Is " . $nums[3] . "<br>";
  print_r($nums);
  $result = 0;
  foreach ($nums as $num):
    $result += $num;
  endforeach;
  echo $result;
}

calculate(10, 20, 50, 30, 40, 50, 100);
echo '<br>';
echo '<br>';
#==========================================================
//Function Training And Unpacking Arguments
/*
  Function
  - Function Advanced Training
  -- Unpacking In Arguments

  Search
  - PHP Variadic Functions
  - Splat Operator
*/
$group_of_skills = ["HTML", "CSS", "JS", "PHP"];

function get_data2($name, $country = "Private", ...$skills)
{
  echo "Hello $name Your Country Is $country <br>";
  foreach ($skills as $skill):
    echo "-- $skill <br>";
  endforeach;
}

// get_data("Osama", "Egypt", ...$group_of_skills);
get_data2("Osama", "Egypt", ...["HTML", "CSS", "JS", "PHP"]);
echo '<br>';
echo '<br>';
#================================================================================================
//Variable Function And Function Exists
/*
  Function
  - Variable Function
  --- PHP Allow To Use Variable Like Function
  --- When You Append Parentheses () To Variable PHP Will Look For Function With That Name
  - Function Exists
  --- function_exists("Func Name")
*/

function someThing($name = "mohsen")
{
  return "thats good $name";
}
$var_func = "someThing";
echo $var_func;
echo '<br>';
echo $var_func();
echo '<br>';
echo someThing("abaas");
echo '<br>';
function test()
{
  echo "test";
}
if (function_exists("test")):
  test();
else:
  echo "function not found";
endif;
echo '<br>';
$func3 = "strlen";
echo $func3("monasr");
echo '<br>';
echo '<br>';
#================================================================================================
//Passing Arguments By Reference
/*
    Function
    - Passing Arguments by Reference
    --- By Default, Function Arguments Are Passed By Value
    --- If The Value Of The Argument Inside The Function Changed It Will Not Change Outside
    --- To Change It Outside Pass The Argument By Reference

    - Return Type Declarations

    Search
    - PHP Strict Mode
  */
$num = 15.5;
function add_5(&$numb): int
{
  $numb = $numb + 5;
  return $numb;
}
add_5($num);
echo $num;
echo '<br>';
var_dump(add_5($num)); //integer
echo '<br>';
var_dump($num); //Double
echo '<br>';
echo '<br>';
#================================================================================================
//Anonymous Function
/*
  Function
  - Anonymous Function
  --- When We Create A Function We Give It A Name So We Can Call It Later With That Name
  --- Sometimes We Need To Create A Function For Specific Task <= This Is Not Against DRY

  - Variable Inherit From Parent Scope
  - Variable Inherit By Reference From Parent Scope
  - Anonymous Function Can Be Passed To A Function
  - Anonymous Function Can Be Return From A Function

  Search
  - Closure
*/


// Anonymous Function With Parameter In Variable

$say_good_bay = function ($name = '7msolu7') {
  return "sayounara $name";
};
echo $say_good_bay("Medhat");
echo '<br>';

// Inherit Variable From Parent Scope

$Hi = "HI";
$say_Hi = function ($name = '7msolu7') use ($Hi) {
  return "$Hi $name";
};

echo $say_Hi("Medhat");
echo '<br>';


// Pass Anonymous Function To Function => array_map

$nums = [10, 20, 30, 40, 50];

function add_five($item)
{
  return $item + 5;
}

$nums_after_adding_five = array_map("add_five", $nums);

echo '<pre>';
print_r($nums_after_adding_five);
echo '</pre>';

$nums_after_adding_ten = array_map(function ($item) {return $item + 10; }, $nums);

echo '<pre>';
print_r($nums_after_adding_ten);
echo '</pre>';
echo '<br>';
echo '<br>';
#================================================================================================
//Arrow Function
  /*
    Function
    - Arrow Function
    --- Short Syntax For Anonymous Function
    --- Automatic Use Variables From Parent Scope

    - Syntax
    --- Function Replaces With fn
    --- No Need For Curly Braces
    --- Return Is Omitted
  */

  // Arrow Function With Parameter In Variable

  $say_good_bay2 = fn ($name = '7msolu7') => "sayounara $name";
echo $say_good_bay2("Medhat");
echo '<br>';


  // Arrow Inherit Variable From Parent Scope Is Automatic


  $Hi2 = "HI";
$say_Hi2 = fn ($name = '7msolu7') =>"$Hi $name";

echo $say_Hi2("Medhat");
echo '<br>';


  // Pass Arrow Function To Function => array_map

  
$nums2 = [10, 20, 30, 40, 50];


$nums_after_adding_five2 = array_map(fn ($item)=> $item + 5, $nums2);

echo '<pre>';
print_r($nums_after_adding_five2);
echo '</pre>';

$nums_after_adding_ten2 = array_map(fn ($item) => $item + 10, $nums2);

echo '<pre>';
print_r($nums_after_adding_ten2);
echo '</pre>';
echo '<br>';

?>