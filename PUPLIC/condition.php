<!-- 
When we talk about condition we have...

if statement
else statement
elseif statement
ternary operator

(=) equal-to stand for assignment operator

== : equal to
===: strictly equal to
!-- : nor equal to
> : greater than
< : less than 
>= : greater than or equal to
<= : less than or equal to

We also have
Local Operator are
&& : AND operator
|| : OR perator
 --> 

 <?php
 

// Difference b/w == and ===
// 40 stand for indeger WHILE '40' stand for string
// double == runs when the two numbers are equals WHILE 
// tripple === check whether all are equal

 $age1 = 40;
 $age2 = '40';

 if($age1 === $age2){
    echo "Both of them are equal";
 }else{
    echo "They are not equal";
 };

//  Ternary operator help to reduce the if statement. 
// This Statement is thesame as the IF Statement

$age3 = 60;

echo '<pre>';
echo $age3 == 65 ? 'You are an old staff' : 'You are a new staff';
echo '</pre>';
 


?>