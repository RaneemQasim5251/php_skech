<?php
//string:
    $name = "Raneem Qasim";
    $food = "pizza";
    $email = "fake123@gmail.com";

//integers:
    $age = 21;
    $users = 2;
    $quantity = 4;

//float:
    $gpa = 3.99;
    $price = 5.99;
    $tax_rate = 5.1;

//boolean (T or F):
// غالبًا مانستخدمهم كذا، نستخدمهم داخل اللوب 
    $employed = true;
    $online = false;
    $for_sale = true;

//initilize total 
    $total = null;

    echo "Hello {$name} <br>";
    echo "you like {$food} <br>";
    echo "your email is {$email} <br>";

    echo "you are {$age} years old <br>";
    echo "there are {$users} users online <br>";
    echo "you woulds like to buy {$quantity} items <br>";

    echo "your GPA is {$gpa} <br>";
    echo "your pizza is \${$price} <br>";
    echo "the sales tax rate is: {$tax_rate} <br>";

    echo "employed: {$employed} <br>";

    //print two variables
    echo "You have ordered {$quantity} x {$food} <br>";
    $total = $quantity * $price;
    echo "your total is \${$total}";


?>
