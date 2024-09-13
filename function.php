<?php
function fullname($fname,$lname){
    return $fname . " " . $lname;
}

// echo fullname("John","Doe");


function add (float $a, float $b){
    return (int) ($a + $b);
}
// echo add (1.4,2.5);


function triangle(int $b, int $h){
    return 0.5 * $b * $h;
}

function rectangle(int $l, int $b){
    return $l * $b;
}

function circle(int $r){
    return 3.14 * $r * $r;
}

// $shape = readline("Enter shape: ");
// switch($shape){
//     case "triangle":
//         $b = readline("Enter base: ");
//         $h = readline("Enter height: ");
//         echo triangle($b,$h);
//         break;
//     case "rectangle":
//         $l = readline("Enter length: ");
//         $b = readline("Enter breadth: ");
//         echo rectangle($l,$b);
//         break;
//     case "circle":
//         $r = readline("Enter radius: ");
//         echo circle($r);
//         break;
//     default:
//         echo "Invalid shape";
// }





function calculateFine(int $d){
    if ($d <= 5){
        return 1 * $d;
    }else if ($d <= 10){
        return 2 * $d;
    }else{
        return 5 * $d;
    }
}

// $days = readline("Enter number of days: ");
// echo calculateFine($days);

// BMI calculator
function BMI(float $w, float $h){
    return $w / ($h * $h);
}
// echo BMI(70,1.7). "\n";

function billSpilt(int $bill, int $people){
    return round($bill / $people,2);
}
// echo billSpilt(1021,56);

// swap function using call by reference
function swap(&$a, &$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}
// $a = 10;
// $b = 20;
// echo $a . " " . $b . "\n"
// swap($a,$b);
// echo $a . " " . $b;


function addSuffix($name){
    $name .= " Doe";
}
$name = "John";
// echo $name . "\n";
// echo addSuffix($name);
// echo $name;




function convertToFahrenheit(float &$c){
    return ($c * 9/5) + 32;
}
$c = -37;
echo convertToFahrenheit($c) . "\n";