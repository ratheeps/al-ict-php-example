<?php

// 01
$a = array(0, 1, 2, 3, 4);
echo $a[3], "<br/>";


// 02

$a = array("zero" => 0, "one" => 1, "two" => 2, "three" => 3, "four" => 4);
echo $a['three'], "<br/>";


// 03
$a = [
    [0, 1],
    [2, [3]]
];

echo $a[1][1][0], "<br/>";

//04
$a = [
    'a' => ['b' => 0, 'c' => 1],
    'b' => ['e' => 2, 'o' => ['b' => 3]]
];

echo $a['b']['o']['b'], '<br/>';

// 05
$a = "a,b,c,d,e,f";
$b = explode(',', $a);
print_r($b);
echo "<br/>";

$c = ['a', 'b', 'c'];
$d = implode(',', $c);
echo $d;

echo "<br/>";

// 06

$a = "a,b,c,d,e,f";
$b = explode(',', $a);

$c = [];
foreach ($b as $el) {
    $c[$el] = $el;
}

print_r($c);
echo "<br/>";

// 07
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);
$values = array(
    "field1value" => "dinosaur", "field2value" => "pig", "field3value" => "platypus"
);

$output = [];

foreach ($keys as $index => $key) {
    $output[$key] = $values[$index . "value"];
}

print_r($output);
