<?php 

function squareArea($side) {
    $result = $side * $side;
    return $result;
}


function triangleArea($base, $height) {
    $result = 0.5 * $base * $height;
    return $result;
}

$side = 5;  
$base = 6;  
$height = 7;  
$choice = "T";  

switch($choice){
    case 'S': echo "Area of a square <br>"."The area is " . squareArea($side); break;
    case 'T': echo "Area of a triangle <br>"."The area is " . triangleArea($base, $height); break;
    default: echo "Invalid Entry";
}
?>



