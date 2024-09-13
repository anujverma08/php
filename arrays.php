<?php

// indexed array
// $colors = array("red","green","blue","yellow","white");
// echo $colors[0]; 
// $length = count($colors);
// for ($i = 0; $i < $length; $i++){
//     echo $colors[$i], " ";
// }
// echo "\n";
// foreach ($colors as $value){
//     echo $value," ";
// }


// $colors = array("c1"=>"red","c2"=>"green","c3"=>"blue","c4"=>"yellow","c5"=>"white");
// // foreach($colors as $key => $value){
// //     echo $key, " => ", $value,"\n";
// // }

// for ($i = 0; $i < count($colors); $i++){
//     $key = array_keys($colors)[$i];
//     echo $key, " => ", $colors[$key],"\n";
// }
// $colors["c5"] = "black";
// $colors["c6"] = "purple";
// $color = array('white', 'green', 'red', 'blue', 'black');

// echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
// echo "<ul>";
// foreach ($color as $value){
//     echo "<li>$value</li>";
// }

// $array = array("Alice"=>"85","Charlie"=>92,"Eve"=>88,"Bob"=>60);
// $sum = 0;
// foreach($array as $key => $value){
//     $sum += $value;
// }
// $average = $sum / count($array);
// echo "Average score: ", $average,"\n";
// echo "Student scoring above average: \n";
// foreach($array as $key => $value){
//     if ($value > $average){
//         echo $key, " scored ", $value,"\n";
//     }
// }

// $arr = array(3,7,2,8,1,4,10,5);
// $odd = array();
// foreach($arr as $i){
//     if ($i % 2 != 0){
//         $odd[] = $i*$i;
//     }
// }
// rsort($odd);
// $sum = 0;
// foreach($odd as $i){
//     echo $i, " ";
//     $sum += $i;

// }
// echo "\n";
// // print_r($odd);
// echo "Sum ",$sum;
// 

// $result = array(
//     array("Manoj", 7.8, "pass"),
//     array("Aditya", 8.5, "pass"),
//     array("Rahul", 6.5, "fail")
// );


// echo "<table border='2px'>";
// echo "<tr> <th> Name </th> <th> CGPA </th> <th> Status </th> </tr>";
// foreach($result as $i){
//     echo "<tr>";
//     foreach($i as $j){
//         echo "<td>",$j,"</td>";
//     }
//     echo "</tr>";
//     echo "\n";
// }
// echo "</table>";


$students = [
    "John" => [
        "Maths" => 85,
        "Science" => 78,
        "English" => 91
    ],
    "Alice" => [
        "Maths" => 75,
        "Science" => 80,
        "English" => 85
    ],
    "Jane" => [
        "Maths" => 90,
        "Science" => 88,
        "English" => 82
    ]
    ];
echo "<table border='2px'>";
echo "<tr> <th> Name </th> <th> Maths </th> <th> Science </th> <th> English </th> <th> Average Grade </th> </tr>";
foreach($students as $key => $value){
    $sum = 0;
    echo "<tr>";
    echo "<td>",$key,"</td>";
    foreach($value as $key1 => $value1){
        echo "<td>",$value1,"</td>";
        $sum += $value1;
    }
    echo "<td>", round($sum / count($value),2),"</td>";
    echo "</tr>";

}
echo "</table>";





