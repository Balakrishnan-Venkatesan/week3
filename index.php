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
  }

?>  
