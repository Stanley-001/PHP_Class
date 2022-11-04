<?php
echo "I AM learning php" . '<br>';

// Variables in php

$name = "Daniel <br>";
echo $name;

$price1 = 30;
$price2 = 30;
$total = $price1 + $price2;

// echo($price1 + $price2)\

echo($total);

// data types
/*
String
integer
booloan
array
object
undefined
null

*/
$names = "John Doe";
$age = 33;
$address = "London";

echo($names . $age . $address);


$details = "  Learning how to code is worthwhile";
// strlen is use to check the lenth ie how many words including the space
echo "<pre>";
echo "<h1 style='color: red'>$details</h1>";
echo "</pre>";


echo '<pre>';
echo strlen($details);

echo '</pre>';

//  trim method is use to remove spces b/w and after.

$strimFuncton = trim($details);

echo '<pre>';
echo strlen($strimFuncton);

echo '</pre>';

//  NOTE: 'Sring' will count all words WHILE 
// 'String word count' will count the words by numbers

// string word count

echo '<pre>';
echo str_word_count($details);
echo '</pre>';

// replacing a string
$replaceString = str_replace('worthwhile', 'diffcult', $details);

echo '<pre>';
echo $replaceString;
echo '</pre>';

// string to uppercase


echo '<pre>';
echo strtoupper($details);
echo '</pre>';

//  String concatination means joining to strings together

$firstName = "Daniel ";
$lastName = "Ezeali ";
$Address = "Owerri ";
$age = 22;

$allDetails = $firstName .$lastName .$Address .$age;

echo '<pre>';
echo $allDetails;
echo '</pre>';

//  This is what is called string concatination
echo '<pre>';
echo "My name is $firstName $lastName, I stay in $Address and i am $age years old"; 
echo '</pre>';

// You can also use this method

echo '<pre>';
echo "My name is ${firstName} ${lastName}, I stay in ${Address} and i am ${age} years old"; 
echo '</pre>';


// Integer

$stringType = false;

echo '<pre>';
echo gettype($stringType); 
echo '</pre>';

// booloan datatype 

//  echo print_r var_dump
// print_r only show the word while var_r display both the numbers and words

var_dump($details)


?> 