<?php 
    echo "<h1> Hello World </h1>" ; 

    echo "<h2> This is my first PHP program </h2>" ;

    echo "welcome"," ",  "to LPU";

    print("<h3> This is a print statement </h3>");
    
    $greeting = "Hello";
    $name = "Rahul";

    echo "(\"", $greeting, ", ", $name ,"!\")";

    $num = (10 * 2) - 5 + 3;
    $num2 = ($num * 2) -5 +3;
    echo "<br>";
    echo($num);


    $varName = "color";
    $color = "blue";
    $$varname = "red";
    echo "<br>";

    echo "the color is ", $$varName;


    define("PI", 3.14159);

    $circleArea = PI * 5 * 5;
    echo "<br>", $circleArea,"";  
    
    var_dump($circleArea); // to get the data type of the variable

    // ternary operator
    $num = 10;
    $result = ($num % 2 == 0) ? "Even" : "Odd";
    echo "<br>", $result;

    // null coalescing operator
    // $name = "Rahul";
    $result = $namea ?? "Guest";
    echo "<br>", $result;


    // swapping the values of two variables
  


