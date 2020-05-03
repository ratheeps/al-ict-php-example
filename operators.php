<?php

$num1 = 10;
$num2 = 20;
$num7 = 3;

$num3 = $num1 + $num2;
echo $num3;

echo "<br/>";

$num4 = $num2 - $num1;
echo $num4;

echo "<br/>";

$num5 = $num2 * $num1;
echo $num5;


echo "<br/>";

$num6 = $num2 / $num1;
echo $num6;

echo "<br/>";

$num8 = $num1 % $num7;
echo $num8;

echo "<br/>";

$num9 = $num1 ** $num7;
echo $num9;

echo "<br/>";

$num1 -= $num2; // $num1 = $num1 + $num2
echo $num1;

echo "<br/>";
echo "<br/>";

// Comparison Operators

$var1 = 1; //int
$var2 = 2; //int
$var3 = 1; //int
$var4 = "1"; //string
$var5 = "2"; //string

var_dump($var1 == $var2); //false
echo "<br/>";
var_dump($var1 == $var3); //true
echo "<br/>";
var_dump($var1 == $var4); //true
echo "<br/>";
var_dump($var1 === $var3); //true
echo "<br/>";
var_dump($var1 === $var4); //false
echo "<br/>";
var_dump($var1 === $var2); //false (and)

echo "<br/>";
var_dump($var1 != $var3); //false
echo "<br/>";
var_dump($var1 != $var2); //true
echo "<br/>";
var_dump($var1 != $var4); //false
echo "<br/>";
var_dump($var1 <> $var5); //false

echo "<br/>";
var_dump($var1 !== $var3); //false
echo "<br/>";
var_dump($var1 !== $var2); //false
echo "<br/>";
var_dump($var1 !== $var4); //true (or)

echo "<br/>";
var_dump($var2 > $var1); //true
echo "<br/>";
var_dump($var1 > $var3); //false
echo "<br/>";
var_dump($var5 > $var1); //false
echo "<br/>";

var_dump($var2 < $var1); //false
echo "<br/>";
var_dump($var1 < $var2); //true
echo "<br/>";
var_dump($var1 < $var3); //false

echo "<br/>";
var_dump($var2 >= $var1); //true
echo "<br/>";
var_dump($var1 >= $var3); //true

echo "<br/>";
var_dump($var1 <= $var2); //true
echo "<br/>";
var_dump($var1 <= $var3); //true
