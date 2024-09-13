
<?php
// $name = readline("Enter your name: ");
// echo "Welcome, ", $name;

// $a = readline("Enter first number: ");
// $b = readline("Enter second number: ");
// $c = readline("Enter third number: ");
// $d = readline("Enter fourth number: ");
// $e = readline("Enter fifth number: ");

// $result = ($a + $b) * $c / $d - $e;
// echo "Result: ", $result,"\n";


// $a += $b; 
// echo "After += operation, a = $a\n"; 

// $b -= $c; 
// echo "After -= operation, b = $b\n"; 


// $c *= $d; 
// echo "After *= operation, c = $c\n"; 


// $d /= $e; 
// echo "After /= operation, d = $d\n"; 


// $e %= $a; 
// echo "After %= operation, e = $e\n"; 


// ++$a;
// echo "After pre-increment, a = $a\n"; 


// $a++;
// echo "After post-increment, a = $a\n"; 

// --$b;
// echo "After pre-decrement, b = $b\n"; 

// $b--;
// echo "After post-decrement, b = $b\n"; 


// $f = $g = $h = 10;
// echo "f = $f, g = $g, h = $h\n";


// $username = "John";
// $result = $username ?? "Guest";
// echo "Welcome," , $result , "\n";

// $username = "John";
// $result = ($username !== "") ? $username : "Guest";
// echo "Welcome," , $result , "\n";

// $readline = readline("Enter your name: ");
// echo "Welcome, ", ($readline !== "") ? $readline : "Guest User";

// $nation = readline("Enter your nationality: ");
// $age = readline("Enter your age: ");

// $result = ($nation == "Indian" && $age >= 18) ? "Eligible to vote" : "Not eligible to vote";
// echo $result;

// echo ($nation == "Indian" && $age >= 18) ? "Eligible to vote" : "Not eligible to vote";

$grade = readline("Enter your grade: ");
$result = ($grade >= 90) ? "A" : (($grade >= 80) ? "B" : (($grade >= 70) ? "C" : (($grade >= 60) ? "D" : "F")));
echo "Your grade is: ", $result;


?>

