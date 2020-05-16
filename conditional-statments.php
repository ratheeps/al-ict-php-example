<?php

$t = date("H");

if ($t < 20) {
    echo "Have a good day!";
}

echo "<br/>";

$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

echo "<br/>";

$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

echo "<br/>";

$t = date("H");

$z = $t < "20" ? "Have a good day!" : "Have a good night!";
echo $z;

echo "<br/>";

$t = date("H");

if ($t >= 0 and $t < 10) {
    echo "Have a good morning!";
} elseif ($t >= 10 and $t < 20) {
    echo "Have a good day!";
} elseif ($t >= 20 and $t <= 23) {
    echo "Have a good night!";
} else {
    echo "Invaid Time";
}
