<!-- Function is a block of code that will execute when the 
function name is being called  function helps to code reuseability and 
it help not to re write a code-->

<!-- 
    Structure of a function...
    function functioname(parameter){
        code block
    }
    function calling
    functionName(argument)
 -->

 <?php
function myFunction(){
    echo "Hello World";
}

myFunction();
myFunction();

// Function with parameter

function functionWithParams($name, $age){
    echo '<pre>';
    echo "My name is ${name}, I am ${age} year old";
    echo '</pre>';
}
functionWithParams('Daniel', 45);
functionWithParams('Daniel', 34);

function sumNumber($num1, $num2){
    echo '<pre>';
    echo $num1 + $num2;
    echo '</pre>';
}
sumNumber(4,10);

//  Function with spreed operator

// function spreedFunction(...$numbers){
//     print_r($numbers);
//     }

//     spreedFunction(1,2,3,4,5,6,7,8,9,10);

// The return statement

function functionWithReturn($num3, $num4){
    return $num3 + $num4;
};
echo functionWithReturn(5,10); 



?>
