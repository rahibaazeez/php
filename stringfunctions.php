<?php
$a="Rahiba";
$b=strlen($a);
echo "length of the string is $b <br>";
$c=strpos($a,"rahi");
echo "the occurance of $a is after $c <br>";
$d=str_replace("lab","labs","Futura lab");
echo" String after replace is $d <br>";
$e=strtoupper($a);
echo "The uppercase form is $e <br>";
$f=strtolower($a);
echo "The lowercase form is $f <br>";
$d=substr("Futura labs",5,8);
echo"Substring is $d <br>"; 
?>