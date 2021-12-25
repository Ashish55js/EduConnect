<?php
  // explode function()
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
echo'</br>';
  // implode function()
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);
echo'</br>';
  // strlen function()
echo strlen("Hello");
echo'</br>';
  // addcslashes function()
$str = addcslashes("Hello World!","W");
echo($str);
echo'</br>';
  // bin2hex function()
$str = bin2hex("Hello World!");
echo($str);
echo'</br>';
  // bin2hex function()
echo strstr("Hello world!","world");
echo'</br>';
  // str_replace function()
echo str_replace("world","Peter","Hello world!");
echo'</br>';
  // substr function()
echo substr("Hello world",6);
echo'</br>'; 
 // trim function()
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");
echo'</br>'; 
 // strpos function()
 // case-sensitive
echo strpos("I love  php, I love php too!","php");echo'</br>'; 
 // case-insensitive
echo stripos("I love php, I love php too!","PHP");echo'</br>';
 // case-insensitive 
echo strripos("I love php, I love php too!","PHP");
echo'</br>';
  // strtolowercase function()
echo strtoupper("Hello i am ashish");
echo'</br>';
  // is_string function()
$a = "Hello";
echo "a is " . is_string($a) . "<br>";
$b = 0;
echo "b is " . is_string($b) . "<br>";
$c = 32;
echo "c is " . is_string($c) . "<br>";
$d = "32";
echo "d is " . is_string($d) . "<br>";
$e = true;
echo "e is " . is_string($e) . "<br>";
$f = "null";
echo "f is " . is_string($f) . "<br>";
$g = "";
echo "g is " . is_string($g) . "<br>";
echo'</br>';

 // is_array function()
$a = "Hello";
echo "a is " . is_array($a) . "<br>";
$b = array("red", "green", "blue");
echo "b is " . is_array($b) . "<br>";
$c = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "c is " . is_array($c) . "<br>";
$d = "red, green, blue";
echo "d is " . is_array($d) . "<br>";

 // in_array function()
$people = array("Peter", "Joe", "Glenn", "Cleveland");
if (in_array("Glenn", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
  echo "</br>";
 // array function()
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
  echo "</br>";
  
// array_merge function() Merge two arrays into one array:
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
  echo "</br>";
  
 // array_push function()
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
  echo "</br>";
  
 // array_pop function()
$a=array("red","green","blue");
array_pop($a);
print_r($a);
 ?>