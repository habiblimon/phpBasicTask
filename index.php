<?php

# i. Electric bill calculation (For first 50 units – 3.50 tk/unit For next 100 units – 4.00 tk/unit For next 100zunits – 5.20 tk/unit For units above 250 – 6.50 tk/unit)

$unit = 287;

if ($unit <= 50) {
    echo $unit * 3.50;
}elseif($unit > 50 && $unit <= 100) {
    echo 50*3.50 + ($unit - 50) * 4.00;
}elseif($unit > 100 && $unit <= 250) {
    echo 50*3.50 + 100*4.00 + ($unit-150) * 5.20;
}elseif($unit > 250) {
    echo 50*3.50 + 100*4.00 + 250*5.20 + ($unit-250) * 6.50;
}

echo "<br>";

#ii. A PHP calculator using switch case (Addition, Subtraction, Multiplication, Division)

$num1 = 10;
$num2 = 20;

$operation = "+";

switch ($operation) {
    case "+":
        echo $num1 + $num2;
        break;
    case "-":
        echo $num1 - $num2;
        break;
    case "*":
        echo $num1 * $num2;
        break;
    case "/":
        echo $num1 / $num2;
        break;
    default:
        echo "Invalid operation";
        break;
}

echo "<br>";

#iii. Check if a person is eligible to vote by age

$age = 18;

if ($age >= 18) {
    echo "Eligible to vote";
}else{
    echo "Not eligible to vote";
}

echo "<br>";


#iv. Check if a person is eligible for marriage in BD by gender.

$gender = "male";
$age = 21;

if ($gender == "female"){
    if ($age >= 18) {
        echo "Eligible for marriage";
    }else{
        echo "Not eligible for marriage";
    }
}elseif($gender == "male"){
    if ($age >= 21) {
        echo "Eligible for marriage";
    }else{
        echo "Not eligible for marriage";
    }
}else{
    echo "Invalid gender";
}

echo "<br>";


#v. Check if number is positive or negetive

$num = 0;

if ($num >= 1) {
    echo "Positive";
}else{
    echo "Negative";
}

echo "<br>";

#vi. Check if number is odd or even vii. Check if data is integer or string

$num = 11;

if ($num % 2 == 0) {
    echo "Even";
}else{
    echo "Odd";
}



?>