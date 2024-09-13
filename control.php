<?php

//  if else statement 
// $type = readline("Enter the type of customer: ");
// $amt = readline("Enter the amount: ");

// $discount = 0;

// if ($type == "regular" && $amt > 500){
//     $discount = 20;
// }elseif ($type == "regular" && $amt <= 500){
//     $discount = 10;
// }elseif ($type != "regular" && $amt > 500){   
//     $discount = 5;
// }else {}

// $finalAmt = $amt - ($amt * $discount / 100);
// echo "Final amount after discount: ", $finalAmt;

// validating date
// $date = readline("Enter the date: ");
// $month = readline("Enter the month: ");
// $year = readline("Enter the year: ");

// if ($year > 0){
//     if ($month > 0 && $month <=12){
//         if ($month = 2){
//             if ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0){
//                 if ($date > 0 && $date <= 29){
//                     echo "Valid date";
//                 }else{
//                     echo "Invalid date";
//                 }
//             }else{
//                 if ($date > 0 && $date <= 28){
//                     echo "Valid date";
//                 }else{
//                     echo "Invalid date";
//                 }
//             }    
//         }elseif ($month == 4 || $month == 6 || $month == 9 || $month == 11){
//             if ($date > 0 && $date <= 30){
//                 echo "Valid date";
//             }else {
//                 echo "Invalid date";
//             }
//         }else{
//             if ($date > 0 && $date <= 31){
//                 echo "Valid date";
//             }else {
//                 echo "Invalid date";
//             }
//         }

//     }
// }else {
//     echo "Invalid date";
// }


// income tax calculation

// $income = readline("Enter the income: ");
// $age = readline("Enter the age: ");
// $tax = 0;

// if ($income  < 10000){
//     $tax = 0;
// }elseif ($income >= 10000 && $income < 20000){
//     if ($age >= 65){
//         $tax = 5;
//     }else{
//         $tax = 10;
//     }
// } else{
//     if ($age >= 65){
//         $tax = 15;
//     }else{
//         $tax = 20;
//     }
// } 

// echo "Income tax: ", $income * $tax / 100;


// switch statement

// $meal = readline("Enter the meal type: ");

// switch ($meal){
//     case "breakfast":
//         echo " 1. Bread and butter\n 2. Dosa \n 3. Omelette\n 4. Pancakes\n";
//         $input = readline("Enter your choice: ");
//         switch ($input){
//             case 1:
//                 echo "Bread and butter is selected";
//                 break;
//             case 2:
//                 echo "Dosa is selected";
//                 break;
//             case 3:
//                 echo "Omelette is selected";
//                 break;
//             case 4:
//                 echo "Pancakes is selected";
//                 break;
//             default:
//                 echo "Invalid choice";
//                 break;
//         }
//         break;
    
//     case "lunch":
//         break;
    
//     case "dinner":
//         break; 
    
//     case "snacks":
//         break;
    
//     default:
//         echo "Invalid meal type";
//         break;

// }

$meter = readline("Enter the meter type: ");
$unit = readline("Enter the total unit consumed: ");
$rate = 0;
switch( $meter){
    case "residential":
        switch( $unit){
            case $unit <= 100;
                $rate = 0.5;
                break;
            case $unit > 100 && $unit <= 200 :
                $rate = 0.75;
                break;
            case $unit > 200:
                $rate = 1;
                break;
        }
        break;
    
    case "commercial":
        switch ($unit){
            case $unit <= 200:
                $rate = 1.5;
                break;
            case $unit > 200:
                $rate = 2;
                break;
        }
        break;

    case "industrial":
        $rate = 2.5;
        break;

    default:
        echo "Invalid meter type";
        break;
}
echo "Total bill: ",  $unit*$rate , " for the meter type: ", $meter;



