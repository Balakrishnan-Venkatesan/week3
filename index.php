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

?>  
