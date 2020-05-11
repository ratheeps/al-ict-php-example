<?php

$x = true;
$y = true;
$z = false;
$a = false;

var_dump($x and $y);

echo "<br/>";

var_dump($x && $y);

echo "<br/>";

var_dump($a and $z);

echo "<br/>";

var_dump($x and $z);

echo "<br/>";

var_dump($x or $y);

echo "<br/>";

var_dump($x || $y);

echo "<br/>";

var_dump($x or $z);

echo "<br/>";

var_dump($a or $z);

echo "<br/>";

var_dump($x xor $y);

echo "<br/>";

var_dump($x xor $z);

echo "<br/>";

var_dump(!$x);

echo "<br/>";

var_dump(!$a);
