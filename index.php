<?php
  $obj = new main();
  class main {

  public function __construct() {
   $text = "welcome to my program<br>";
   echo "$text";
   $text = "<h1>THIS IS PRINT FUNCTION</h1><br>";
   stringFunctions::printThis($text);
   $text = "I am testing print<br>";
   stringFunctions::printThis($text);
   $text = "<hr><br>";
   stringFunctions::printThis($text);

   $text = "<h1>THIS IS STRTOLOWER FUNCTION</h1><br>";
   stringFunctions::printThis($text);
   stringFunctions::strtolowerF($text);
   $text = "<hr><br>";
   stringFunctions::printThis($text);

   $text = "<h1>THIS IS STRTOUPPER FUNCTION</h1><br>";
   stringFunctions::printThis($text);
   stringFunctions::strtoupperF($text);
   $text = "<hr><br>";
   stringFunctions::printThis($text);

   $text = "<h1>THIS IS UCFIRST FUNCTION</h1><br>";
   stringFunctions::printThis($text);
   stringFunctions::ucfirstF($text);
   $text = "<hr><br>";
   stringFunctions::printThis($text);

   $text = "<h1>THIS IS STRWORDCOUNT FUNCTION</h1><br>";
   stringFunctions::printThis($text);
   stringFunctions::str_word_countF($text);
   $text = "<hr><br>";
   stringFunctions::printThis($text);
   
   $text = "<h1>THIS IS STRLEN FUNCTION</h1><br>";
   stringFunctions::printThis($text);
   stringFunctions::strlenF($text);
   $text = "<hr><br>";
   stringFunctions::printThis($text);
   
   $text = "<h1>THIS IS STRREV FUNCTION</h1><br>";
   stringFunctions::printThis($text);
   stringFunctions::strrevF($text);
   $text = "<hr><br>";
   stringFunctions::printThis($text);

   $text = "<h1>THIS IS ORD FUNCTION</h1><br>";
   stringFunctions::printThis($text);
   stringFunctions::ordF($text);
   $text = "<hr><br>";
   stringFunctions::printThis($text);

   $text = "<h1>THIS IS STRSHUFFLE FUNCTION</h1><br>";
   stringFunctions::printThis($text);
   stringFunctions::str_shuffleF($text);
   $text = "<hr><br>";
   stringFunctions::printThis($text);
   
   $text = "<h1>THIS IS STRREPEAT FUNCTION</h1><br>";
   stringFunctions::printThis($text);
   stringFunctions::str_repeatF($text);
   $text = "<hr><br>";
   stringFunctions::printThis($text);

    $text = "<h1>ARRAY PRINT FUNCTION</h1><br>";
    stringFunctions::printThis($text);
    $myArray = array(1,2,3);
    arrayFunctions::printArray($myArray);
    $text = "<hr><br>";
    stringFunctions::printThis($text);

    $text = "<h1>ARRAY SUM FUNCTION</h1><br>";
    stringFunctions::printThis($text);
    arrayFunctions::sumArray($myArray);
    $text = "<hr><br>";
    stringFunctions::printThis($text);

    $text = "<h1>ARRAY KEY FUNCTION</h1><br>";
    stringFunctions::printThis($text);
    arrayFunctions::keyArray($myArray);
    $text = "<hr><br>";
    stringFunctions::printThis($text);

    $text = "<h1>ARRAY REVERSE FUNCTION</h1><br>";
    stringFunctions::printThis($text);
    arrayFunctions::reverseArray($myArray);
    $text = "<hr><br>";
    stringFunctions::printThis($text);

    $text = "<h1>ARRAY MERGE FUNCTION</h1><br>";
    stringFunctions::printThis($text);
    $myArray1 = array(6,8,7);
    arrayFunctions::mergeArray($myArray, $myArray1);
    $text = "<hr><br>";
    stringFunctions::printThis($text);

    $text = "<h1>ARRAY POP FUNCTION</h1><br>";
    stringFunctions::printThis($text);
    arrayFunctions::popArray($myArray);
    $text = "<hr><br>";
    stringFunctions::printThis($text);	
    
    $text = "<h1>ARRAY COUNT VALUES FUNCTION</h1><br>";
    stringFunctions::printThis($text);
    $myArray2 = array(1,1,2,1,3,3);
    arrayFunctions::acvArray($myArray2);
    $text = "<hr><br>";
    stringFunctions::printThis($text);

     $text = "<h1>ARSORT FUNCTION</h1><br>";
     stringFunctions::printThis($text);
     arrayFunctions::arsortArray($myArray1);
     $text = "<hr><br>";
     stringFunctions::printThis($text);
	
     $text = "<h1>KRSORT FUNCTION</h1><br>";
     stringFunctions::printThis($text);
     arrayFunctions::krsortArray($myArray1);
     arrayFunctions::flipArray($myArray1);
     $text = "<hr><br>";
     stringFunctions::printThis($text);

     $text = "<h1>ARRAY FLIP FUNCTION</h1><br>";
     stringFunctions::printThis($text);
     arrayFunctions::flipArray($myArray1);
     $text = "<hr><br>";
     stringFunctions::printThis($text);
}

  public function __destruct() {
   $text = "end of my program<br>";
    echo "$text";
   }
 }


  class stringFunctions {
     static public function printThis($text) {
     print($text);
     }
     static public function strtolowerF($text) {
     $text = "THIS LINE WAS IN UPPER<br>";
     print($text);
     print(strtolower($text));
     }
     static public function strtoupperF($text) {
     $text = "this line is in lower<br>";
     print($text);
     print(strtoupper($text));
     }
     static public function ucfirstF($text) {
     $text = "first character will become uppercase";
     print($text);
     echo "<br>";
     print(ucfirst($text));
     }
     static public function str_word_countF($text) {
     $text = "count words in this line";
     print($text);
     echo "<br>";
     print(str_word_count($text));
     }
     static public function strlenF($text) {
     $text = "finding the length of this line<br>";
     print($text);
     print(strlen($text));
     }
     static public function strrevF($text) {
     $text = "reverse this line";
     print($text);
     echo "<br>";
     print(strrev($text));
     }
     static public function ordF($text) {
     $text = "b";
     print($text);
     echo "<br>";
     print(ord($text));
     }
     static public function str_shuffleF($text) {
     $text = "shuffling this";
     print($text);
     echo "<br>";
     print(str_shuffle($text));				    
     }
     static public function str_repeatF($text) {
     $text = "repeat this";
     print($text);
     echo "<br>";
     print(str_repeat($text,3));
     }
   }
   
   class arrayFunctions {
     static public function printArray($myArray) {
     print_r ($myArray);
     }
     static public function sumArray($myArray) {
     print_r ($myArray);
     echo "<br>";
     print_r (array_sum($myArray));
     }
     static public function keyArray($myArray) {
     print_r ($myArray);
     echo "<br>";
     print_r (array_keys($myArray));
     }
     static public function reverseArray($myArray) {
     print_r ($myArray);
     echo "<br>";
     print_r (array_reverse($myArray));
     }
     static public function mergeArray($myArray, $myArray1) {
     print_r ($myArray);
     echo "<br>";
     print_r ($myArray1);
     echo "<br>";
     print_r (array_merge($myArray, $myArray1));
     }
     static public function popArray($myArray) {
     print_r ($myArray);
     echo "<br>";
     print_r (array_pop($myArray));
     echo "<br>";
     print_r ($myArray);
     }
     static public function acvArray($myArray2) {
     print_r ($myArray2);
     echo "<br>";
     print_r (array_count_values($myArray2));
     }
     static public function arsortArray($myArray1) {
     print_r ($myArray1);
     echo"<br>";
     arsort($myArray1);
     print_r ($myArray1);
     }
     static public function krsortArray($myArray1) {
     print_r ($myArray1);
     echo"<br>";
     krsort($myArray1);
     print_r ($myArray1);
     }
     static public function flipArray($myArray1) {
     print_r ($myArray1);
     echo "<br>";
     print_r (array_flip($myArray1));
  
  }    
?> 
