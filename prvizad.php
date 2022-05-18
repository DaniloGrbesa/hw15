<?php

$hwArray = array("Pera","Uros","Pera","Sonja","Danilo","Zika","Bojan","Sonja","Vanja","Dragan"); 

print_r($hwArray);
echo "<br>";

if (array_search("Pera", $hwArray) == false) {
    array_push($hwArray, "Sonja");
    print_r($hwArray);
    echo "<br>";
}

if (array_search("Marko", $hwArray) == false) {
    array_splice($hwArray, 2, 0, "Pera");
    print_r($hwArray);
    echo "<br>";
}

echo count($hwArray);
echo "<br>";

if (array_search("Zika", $hwArray) == false) {
    array_unshift($hwArray, "Bojan");
    print_r($hwArray);
    echo "<br>";
}


if (($key = array_search("Danilo", $hwArray)) !== false) {
    unset($hwArray[$key]);
}

print_r($hwArray);
echo "<br>";


if (array_search("Danilo", $hwArray) == false) {
    array_splice($hwArray, 5, 0, "Danilo");
    print_r($hwArray);
    echo "<br>";
}


if (($key = array_search("Danilo", $hwArray)) !== false) {
    array_splice($hwArray, $key, 1);
}

print_r($hwArray);
echo "<br>";

$hwArray = array_unique($hwArray);
print_r($hwArray);
echo "<br>";