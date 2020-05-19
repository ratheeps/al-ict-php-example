<?php
// Indexed arrays
$cars = array("Volvo", "BMW", "Toyota");
//$cars = ["Volvo", "BMW", "Toyota"];

echo $cars[1];
echo "<br/>";


// // Associative arrays
$person = [
    "name" => "Raja",
    "age" => 25,
    "mobile" => "0777123456"
];


echo $person['name'];


// Multidimensional Arrays (Indexed arrays)

$cars = [
    ["Volvo", 22, 18],
    ["BMW", 15, 13],
    ["Saab", 5, 2],
    ["Land Rover", 17, 15]
];

echo $cars[1][0];

// Multidimensional Arrays (Associative arrays)

$persons = [
    "person1" => ["name" => "Raja", "age" => 25, "mobile" => "0777123456"],
    "person2" => ["name" => "Vimal", "age" => 30, "mobile" => "0777123457"],
    "person3" => ["name" => "Kumar", "age" => 18, "mobile" => "0777123437"]
];

echo ($persons['person1']['name']);


for ($i = 0; $i < count($cars); $i++) {
    echo $cars[$i], "<br/>";
}


foreach ($cars as $index => $car) {
    echo $index,  $car, "<br/>";
}


foreach ($person as $key => $value) {
    echo $key, $value, "<br/>";
}


foreach ($persons as $person) {
    foreach ($person as $key => $value) {
        echo $key, $value, "<br/>";
    }
    echo "<br/>";
}
