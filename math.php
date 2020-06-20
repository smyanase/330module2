<?php

$numOne = (double) $_GET["num1"];
$numTwo = (double) $_GET["num2"];
$operation = $_GET["operation"];

if (!is_numeric($_GET["num1"])||!is_numeric($_GET["num2"])) {
    echo "Please input an actual number";

} elseif (!isset($operation)) {
    echo "No operation";
} 
else {

if ($operation == "plus") {
    echo $numOne+$numTwo;
} elseif ($operation == "minus") {
    echo $numOne - $numTwo;
} elseif ($operation == "multiply") {
    echo $numOne * $numTwo;
} elseif ($operation == "divide") {
    echo $numOne / $numTwo;
}
}
?>