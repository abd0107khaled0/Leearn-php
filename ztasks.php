<?php
/* 
========= 6:12 =========

echo (int)(15.2 + 14.7) + (int)(10.5 + 10.5) ."<BR />";
echo gettype((int)((15.2 + 14.7) + (10.5 + 10.5)));

echo (int)100 ."<br>";
print (double)100 ."<br>";
printf("%d",100);

echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"$\$PHP\"";

echo nl2br("
We 
 Love 
 Elzero 
 Web 
 School");

 echo <<< 'NowD'
 Hello Elzero
 We Love $Programming$
 Languages Specially PHP
 NowD;

 $something = "Programming";
 echo <<< "HereD"
 Hello \PHP\
 We Love $something
 HereD;
 
 echo (bool)"Hello PHP";
 echo '<br>';
 echo gettype((int)(bool)"Hello PHP");

 echo "<pre>";
 print_r(array("FrontEnd" =>
 [
     "HTML",
     "CSS",
     "js" => [
         "vuejs" => [
             2 => "v2",
             3 => "v3"
         ],
         2 => "ReactJs",
         3 => "Svelte"
     ]
 ]));
 echo "</pre>";
*/

//===========================================================================

/*
======== 13:19 ========

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <title>Welcome To <?php echo $_POST['name']?></title>
  </head>
  <body>
    <h1>Elzero Courses</h1>
    <p>Here In Elzero Courses We Provide Front-End And Back-End Courses</p>
    <hr>
    <div>Elzero Courses Is The What You Need.</div>
    <footer>All Right Reserved To Elzero Courses</footer>
    <form action="" method="post">
        <input type="text" name="name" />
        <input type="submit" value="submit">
    </form>
  </body>
</html>

$name = "elzero";
$$name = "Web";
echo $$name;
echo "<br />";
echo $elzero;
echo "<br />";
echo "${$name}";
echo "<br />";
echo "${elzero}";
echo "<br />";
echo "{$$name}";

$a = 200;
$b = &$a;
$a = 100;
echo $b; // 100

print_r($_SERVER['DOCUMENT_ROOT']);
echo "<br />";
print_r($_SERVER['HTTP_HOST']);
echo "<br />";
print_r($_SERVER['SystemRoot']);
echo "<br />";
echo __FILE__;
echo "<br />";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

//recived name
function
echo
array
int
bool
string
number
float
else
while
for
public
private
protected

echo __LINE__;
echo "<br />";
echo __FILE__;
echo "<br />";
echo __Dir__;
echo "<br />";
*/

//===========================================================================

/*
======== 20:29 ========

// Replace ? With Arithmetic Operators
echo 10 * 20 + 15 % 3 + 190 + 10 - 400; // 0

$a = "10";
// Needed Ouput
echo (int)$a;//10
echo "<br />";
echo gettype((int)$a);//"integer"
echo "<br />";
echo +$a;//10
echo "<br />";
echo gettype(+$a);//"integer"
echo "<br />";
echo (integer)$a;//10
echo "<br />";
echo gettype((integer)$a);//"integer"
echo "<br />";
echo intval($a);//
echo "<br />";
echo gettype(intval($a));//// For The People Who Love Searching
echo "<br />";
echo settype($a,'integer');//10
echo "<br />";
echo gettype(settype($a,'integer'));//"integer"

$a = 10;
$b = 20;
echo ($a <=> $b);

$a = 10;
$b = 20;
$c = 15;
var_dump($a < $b); // True
echo "<br />";
var_dump($c > $a); // True
echo "<br />";
var_dump($a != $b); // True
echo "<br />";
var_dump($a !== $b); // True
echo "<br />";
var_dump($a <= $c); // True
echo "<br />";
var_dump($a <> $c); // True
echo "<br />";
var_dump(gettype($a) || gettype($b)); // True
echo "<br />";
var_dump(gettype($a) or gettype($b)); // True
echo "<br />";
var_dump(gettype((float) $a) && gettype($b)); // True
echo "<br />";

$points = 10;
$points++;
$points++;
$points++;
echo $points; // 13
echo "<br />";
$points--;
$points--;
$points--;
$points--;
$points--;
echo $points; // 8;

$a = "Elzero";
$b = "Web";
$c = "School";
// Method One
// $d = $a ." ";
// // Method Two
// $d .= $b;
// // Method Three
// $d .= " ";
// // Method Four
// $d .= $c;
// Method Three: استخدام sprintf() لتنسيق النص
$d = sprintf("%s %s %s", $a, $b, $c);
// Method Four: استخدام implode() مع Array
// $d = implode(" ", [$a, $b, $c]);
echo $d; // Elzero Web School

$a = 10;
$b = 20;
echo ($a + $b) * ($a + $b + $a )* $a * $a; // 12000
echo "<br />";
echo 10 + 200 + 1000 + 20

$a = @$b;
$f = @file("file.txt");
@include("file.txt");
print_r($f);
*/

//===========================================================================

/*
======== 30:42 ========
$a = 100;
$b = 200;
$c = 100;
if ($b > $a && $a == $c && $a + $c == $b) {
    echo "Yes";
}

if ($_SERVER['REQUEST_METHOD'] == "POST") { ?>
  The Request Method Is Post And Username Is <?php echo $_POST['user'] ?>
  <br />This Username <?php echo $_POST['user'] ?> Is Admin
<?php }>

$admins = ["Osama", "Ahmed", "Sayed"];
foreach ($admins as $key=>$adminV) {
  if($_POST['user'] == $adminV){
    echo "This Username ${adminV} Is Admin";
  }
}

$a = 30;
$b = 20;
$c = 10;
echo ($a + $b === $c) ? "A + B = C" :
  (($a + $c === $b) ? "A + C = B" :
    (($b + $c === $a) ? "B + C = A" : "The End"));

    $name = "Osama";
    $age = 40;
    $country = "Egypt";
    echo ($age > 18)
      ? ((gettype($name) === "string")
        ? (($country === "Egypt")
          ? "The Country Is Good To Go<br>"
          : "The Country Is Not Valid<br>")
        : "The Name Is Not Valid<br>")
      : "The Age Is Not Valid<br>";

      $genre = "Hack And Slash";
      switch ($genre) :
        case $genre === "RPG":
          echo "I Recommend Ys Games";
          break;
        case $genre === "Hack And Slash":
          echo "I Recommend Castlevania Games";
          break;
        case $genre === "FPS":
          echo "I Recommend Uncharted Games";
          break;
        case $genre === "Platform":
          echo "I Recommend Megaman Games";
          break;
        case $genre === "Puzzle":
          echo "I Recommend Megam an Games";
          break;
        default:
          echo "I Recommend Shadow Of Mordor And Shadow Of War";
          break;
        endswitch;

        $num_one = 23;
        $num_two = 5;
        $op = "/";
        switch ($op) {
          case "+":
            echo 23 + 5;
            break;
          case "-":
            echo 23 - 5;
            break;
          case "*":
            echo 23 * 5;
            break;
          case "/":
            echo (int)(23 / 5);
            break;
          default:
            echo "none";
            break;
        }

        $day = "Sat";
        if ($day == "Sat" || $day == "Sun" || $day == "Mon") {
          echo "We Are Open All The Day";
        } else if ($day == "Tue" || $day == "Wed") {
          echo "We Are Open From 08:12";
        } else if ($day == "Thu" || $day == "Fri") {
          echo "We Are Closed";
        } else {
          echo "Unknown Day";
        }

        for( $i = 10; $i >0; $i-- )
        echo $i ."<br/>";

        for ($i = 1; $i <= 10; $i++)
          echo $i*2 . "<br/>";

          $num = 2;
          while ($num < 520) {
            if ($num == 2) {
              $num--;
            }
            echo $num . "<br>";
            $num = $num * 2 + 2;
          }

          $start = 10;
          $end = 0;
          $stop = 3;
          for ($i = $start; $i >= 3; $i--) {
            if ($i == 10) {
              echo $i . "<br/>";
            } else
              echo "0" . $i . "<br />";
          }

          $mix = [1, 2, 3, "A", "B", "C", 4];
          foreach ($mix as $k => $v):
            if (gettype($v) == "integer" && $v != 1):
              echo $v . "<br/>" ;
            endif;
          endforeach;

          $money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
          foreach ($money as $key => $value):
          echo  "The Name Is ${key} And I Need ${value} Pound From Him"."<br/>";
          endforeach;

          $mix = [1, 2, "A", "B", "C", 3, 4];
          $num_count = 0;
          $letter_count = 0;
          foreach ($mix as $item) {
            if (is_numeric($item)) {
              // if (gettype($item) == "integer") {
              echo $item . "<br>";
              $num_count++;
            } else {
              $letter_count++;
            }
          }
          echo "\"$num_count Numbers Printed\"<br>";
          echo "\"$letter_count Letters Ignored\"<br>";

          $nums = [1, 13, 12, 20, 51, 17, 30];
          foreach ($nums as $num) {
            if ($num % 2 == 0)
              echo $num / 2 . "<br/>";
          }

          // echo "Start<br>";
          // goto skip; // سينتقل التنفيذ مباشرةً إلى وسم "skip"
          // echo "This will be skipped."; // لن يتم تنفيذ هذا السطر
          // skip:
          // echo "This is the skipped part.<br>";
          // echo "End<br>";
        */




// Output


//===========================================================================

/*
======== 30:42 ========
function say_Hello($name, $type)  : string 
{
  if ($type)
    return $type == 'Male' ? 'Hello Mr ' . $name . '<br />' : 'Hello Miss ' . $name . '<br />';
  else
    return 'hello ' . $name . '<br />';

}
echo say_Hello("Osama", "Male"); // Hello Mr Osama
echo say_Hello("Eman", "Female"); // Hello Miss Eman
echo say_Hello("Sameh", null); // Hello Sameh

function unknownArg(... $args) {
$result ="";
foreach ($args as $arg) {
  $result .= $arg ." " ;
}
return $result . "<br />";
}
echo unknownArg("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School

function unknownArg2():string {
  $result = "";
  foreach (func_get_args() as $arg):
    $result .=$arg." ";
  endforeach;
  return $result;
}
echo (unknownArg2("I", "Love", "PHP")); // I Love PHP

function sum_all(...$args): string
{
  $resut = 0;
  foreach ($args as $arg):
    if ($arg != 5):
      if ($arg == 10):
        $arg = 20;
      endif;
      $resut += $arg;
    endif;
  endforeach;
  return $resut . "<br />  ";
}
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40

function multiply():string
{
  $result = 1;
  foreach (func_get_args() as $arg):
    if (gettype($arg) == 'integer' || gettype($arg) == 'double')
      $result *= (int)$arg;
  endforeach;
  return $result."<br />";
};
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000

function check_status($a, $b, $c) {
  $name = '';
    $age = 0;
    $available = false;
    foreach ([$a, $b, $c] as $param) {
        if (is_string($param)) {
            $name = $param;
        } elseif (is_int($param)) {
            $age = $param;
        } elseif (is_bool($param)) {
            $available = $param;
        }
    }
    echo "Hello $name, Your Age Is $age, And You Are " . ($available ? "Available" : "Not Available") . " For Work.<br>";
}
 check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
 check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
 check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
 check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"


 function calculate()
 {
   if (func_num_args() == 3) {
 
     $type = func_get_arg(2);
   } else {
     $type = 'a';
   }
   switch ($type) {
     case 's':
       return func_get_arg(0) - func_get_arg(1) . "<br />";
       break;
     case 'subtract':
       return func_get_arg(0) - func_get_arg(1) . "<br />";
       break;
     case 'multiply':
       return func_get_arg(0) * func_get_arg(1) . "<br />";
       break;
     case 'm':
       return func_get_arg(0) * func_get_arg(1) . "<br />";
       break;
     default:
       return func_get_arg(0) + func_get_arg(1) . "<br />";
       break;
   }
 }
 echo calculate(10, 20); // 30
 echo calculate(10, 20, "a"); // 30
 echo calculate(10, 20, "s"); // -10
 echo calculate(10, 20, "subtract"); // -10
 echo calculate(10, 20, "multiply"); // 200
 echo calculate(10, 20, "m"); // 200

 function calculate(int $num_one, int $num_two) {
   return (float)($num_one + $num_two) . "<br />";
 }
 echo calculate(20, 10); // 30
 echo gettype(calculate(20, 10)); // Double
 
 $message = "Hello";
 $Hello = function ($name) use ($message): string {
   return $name . " " . $message;
 };
 echo $Hello("Osama"); // Hello Osama
 
 $greet = function ($p) {
   return "Hello $p";
 };
 $greet = fn($e)=> "Hello $e";
 echo $greet("Osama"); // Greetings
*/





  ?>


<!-- <form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form> -->