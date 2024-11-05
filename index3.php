<?php

// variable
// $userName = "Abdelrahman";
// echo "hello"." `". $userName;
// echo "<br/>";
// assign by referance

// $a = "Abdelrahman";
// $b = &$a;
// $b = "Khaled";
// echo $a . $b;
// server
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

// $_POST
// echo $_GET['username']; 

// constants
// define("DB_NAME",50);
// echo DB_NAME * 10;

//php_uname()
// echo php_uname() ."";
// echo "<br/>";
// echo __LINE__;
// echo "<br/>";
// echo __FILE__;
// echo "<br/>";
// echo __DIR__;


// var_dump("String" === "String")

// concancat
// $e = "elzero";
// $w = "web";
// $s = "school";
// echo $e. " " . $w . " " .$s;
// $t = "total";
// $t .= " all";
// $t .=" price";
// echo "<br  />";
// echo $t;

// control error
// $b = "any type";
// $a = @$b or die("variable not found "); 
// echo $a;

// echo "<pre>";
// print_r(file("file.txt"));
// echo"</pre>";
// echo 0 || 5;


// $lang = "en";

// switch ($lang):
//     case "ar";
//         echo "arabic";
//         break;
//     case "en";
//         echo "english";
//         break;
//     case "fr";
//         echo "franch";
//         break;
//     default:
//         echo "this lang not exist";
//         break;
// endswitch;
// echo "<br />";

// while(){}
// do{}while()
// for(){}

// $dis = ['ar','en','fr'];
// foreach ($dis as $value) {
// echo "$value <br />";
// }

// $lang_dis = ['ar'=>10,'en'=>20,'fr'=>30];
// foreach ($lang_dis as $key=>$value) {
// echo "$key => .......... $value <br />";
// }


// include("test.php");
// echo $varA;

// function


// function returnTex($text) {
//     return $text . "<br />";
// };
// echo returnTex("hello");
// echo returnTex("hello");
// echo returnTex("hello");
// echo returnTex("hello");

// function calc()
// {
//     echo func_num_args() . "<br />";
//     echo func_get_arg(2) . "<br />";
//     echo "<pre>";
//     // print_r(func_get_args());
//     echo "</pre>";
// }
// calc(1, 2, 3, 5, 4)

// ;
// if (function_exists('calc')) {
//     echo "yes function";
// }

// declare(strict_types= 1);
// function referFun (&$num2):int{
//     $num2 += 5;
//     return  $num2;
// }

// $num = 15;
// echo referFun ($num) ."<br />";
// echo $num;

// $hi = "Hi";
// $say_hi = function($name) use ($hi) {
//     return $hi ." ". $name;
// };
// echo $say_hi("Abdelrahman");

// $arr = [10, 20, 50, 30];
// print_r(array_map(fn($i) => $i + 5, $arr));
// echo "<br/>";
//  function mapFn($i) {
//     return $i + 5;
// };
// print_r(array_map("mapFn", $arr));

// string
// $name = "Abdelrahman khaled mohamed";

// echo "Number of length =>" . strlen($name) . "<br />";
// echo "$name". strlen($name) . "<br />";

// echo lcfirst($name). "<br />";
// echo ucfirst($name). "<br />";
// echo strtolower($name). "<br />";
// echo strtoupper($name). "<br />";
// echo ucwords($name). "<br />";
// echo str_repeat($name, 5). "<br />";
// echo str_replace("mohamed","issa",$name). "<br />";

// echo stripos($name,"a");

// parse_str("name=Abdelrahman&email=abdo@gm.com&pass=lo",$informationData);

// echo "<pre>";
// echo $informationData['email'] . "<br />";
// print_r($informationData);
// echo"</pre>"

// ;echo quotemeta("title 5$ E $() {}[]");

// echo "<br/>";
// echo "<br/>";

// echo str_pad("Abdo",25,"0", STR_PAD_BOTH);

// $name = "Abdelrahman k m";
// $replaceName = str_replace([" k"," m"],[" Khaled", " mohamed"], $name,$n);
// echo $replaceName ."<br/>" . $n;
// echo substr_replace("normal","@",2,3)

// $lorem = "lorem_Lorem Ipsum has_been the industry's standard dummy textever since th";
// echo wordwrap($lorem,8,"<br />",)

// echo ord('z') . "<br />";
// echo chr(122) . "<br />";
// echo similar_text("lrahman kad","Abdelrahman khaled");

// echo strstr("Abdelrahman" , "rahman",true) . "<br />";
// echo strstr("Abdelrahman" , "rahman") . "<br />";





;


/*
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
*/
?>

<!-- <form action="" method="get">
    <input type="text" name="username" />
    <input type="submit" value="send name">
</form> -->