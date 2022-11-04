<?php
$days_Of_The_Week = ['Monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];

print_r("Today is $days_Of_The_Week[1] <br>");
var_dump("Today is $days_Of_The_Week[6]");

// Printing of array

echo '<pre>';
var_dump($days_Of_The_Week[0]);
echo '</pre>';

// replacing element in our array

$days_Of_The_Week[0] = 'Daniel';
echo '<pre>';
var_dump($days_Of_The_Week);
echo '</pre>';

// counting element in an array... geting the length of array

$countarray = count($days_Of_The_Week);
echo $countarray;

// array methods
/*
push
pop
shift
unshift 
*/
// push means adding to the last indxex

$Cars =array('volvo', 'honda', 'ford',);
echo '<pre>';
var_dump($Cars);
echo '</pre>';

$addElement = array_push($Cars, 'BMW');
echo '<pre>';
var_dump($Cars);
echo '</pre>';
// unshift  means adding from the first index

$addElementToFirstIndex = array_unshift($Cars, 'jeep');
echo '<pre>';
var_dump($addElementToFirstIndex);
echo '</pre>';

echo '<pre>';
var_dump($Cars);
echo '</pre>';

// pop means deleting from the last index

echo '<pre>';
var_dump(array_pop($Cars));
echo '</pre>';

echo '<pre>';
var_dump($Cars);
echo '</pre>';


// shift means delecting from the first index

echo '<pre>';
var_dump(array_shift($Cars));
echo '</pre>';

echo '<pre>';
var_dump($Cars);
echo '</pre>';

// Array sort either in Ascending or Descending

$number = [10, 1, 2, 100, 200, 6, 20, 60];
print_r(sort($number));
$sortedArray = sort($number);
echo '<pre>';
var_dump($sortedArray);
echo '</pre>';
// This array is Descending method sort

sort($number);

echo '<pre>';
var_dump($number);
echo '</pre>';

//  This method is Ascending  i.e rsort

$number = [10, 1, 2, 100, 200, 6, 20, 60];

rsort($number);

echo '<pre>';
var_dump($number);
echo '</pre>';

// Array merge concatination  is to join string
//  WHILE Array merge is to join arrays

$boysName = ['Kachi', 'Victor', 'Rex', 'Daniel'];
$girlsName = ['Joy', 'Vivian', 'Favour'];

echo '<pre>';
var_dump($boysName);
echo '</pre>';

echo '<pre>';
var_dump($girlsName);
echo '</pre>';

echo '<pre>';
var_dump(array_merge($boysName, $girlsName));
echo '</pre>';

// If you don't want the first method u can use this

// echo '<pre>';
// var_dump(...$boysName, ...$girlsName);
// echo '</pre>';

//  Associative array means arrays that have a key and varius  key(name)
//  bvarius(Daniel)
$person = [
    'name' => 'Daniel',
    'age' => '22',
    'address' => 'Owerri',
    'Account No.' => '0000000000'
];
print_r($person['name']);

$person['name'] = 'John Doe';

echo '<pre>';
var_dump($person);
echo '</pre>';

// Explode and Implode

// First Explode is used to convert a string to an array

require('index.php');
echo $details;

$toArray = explode(",", $details);

echo '<pre>';
var_dump($toArray);
echo '</pre>';

// Second Implode is use to covert array to a string

$toString = implode("-", $number);
echo '<pre>';
var_dump($toString);
echo '</pre>';


?>