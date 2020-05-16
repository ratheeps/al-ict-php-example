<?php

$str = "HELLO";

$b = strtolower($str);

echo $b;


function sayHello()
{
    echo "Hello";
    echo "<br/>";
}

sayHello();


function sayHelloTo1($userName)
{
    echo "Hello ", $userName;
    echo "<br/>";
}
sayHelloTo1("Raja");
sayHelloTo1("Vimal");


function sayHelloTo($userName = "There")
{
    echo "Hello ", $userName;
    echo "<br/>";
}
sayHelloTo();
sayHelloTo("Vimal");


function sumTwoNumbers(int $num1, int $num2)
{
    return $num1 + $num2;
}

$x = sumTwoNumbers("A", 3);
echo $x;

$y = sumTwoNumbers(2, 10);
echo $y;


function sumNumbers(...$numbers)
{
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}

$a = sumNumbers(2, 3, 3, 4, 5, 200);
echo $a;
