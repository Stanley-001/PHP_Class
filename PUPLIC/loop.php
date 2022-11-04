<!-- 
Under the root, we will be discussing...

for loop
while loop
do while loop
foreach
 -->

 <?php
//   First for loop. The loop accepts three parameters i.e...
// initailization; condition; increment or decrement
// initailization means were you asign a song to start from
//  while condition is where it will end

for($i = 0; $i <= 10; $i++){
    echo '<pre>';
    echo $i;
    echo '</pre>';
};

$numbers = [10,30,50,15,2,4,9,66];
for($i = 0; $i < count($numbers); $i++){
    echo '<pre>';
    echo $numbers[$i];
    echo '</pre>';
}

// Modulus brings out the remaider of a numbers
// initailization condition increment

$numbers = [10,30,50,2,4,9,66];
for($i = 0; $i <= count($numbers); $i++){

    if($numbers[$i] % 2 == 0){
        echo '<pre>';
        echo $numbers[$i];
        echo '</pre>';
    }else{
        echo '<pre>';
        echo $numbers[$i];
        echo '</pre>';
    }
}

// while loop is same as for loop

$num = 0;
while($num <= 10){
    echo '<pre>';
    echo $num;
    echo '</pre>';
    $num++;
};

$isEven = 10;

while($isEven <= 20){
    echo '<pre>';
    echo $isEven;
    echo '</pre>';

    $isEven += 2;
}
// Do While Loop

$age = 5;

do{
    echo '<pre>';
    echo $age;
    echo '</pre>';
    $age++;
} while($age <= 10);

// Foreach loop is just the same with for loop but the only diff is that 
//  it uses  key to access individual element of an array  

// foreach loop

$boysname = ['rex', 'victor', 'deo', 'josh', 'benson'];

foreach($boysname as $name){
    
    if($name == 'josh'){
        echo "Your name is ${name}";
    }
}

// Using a forEach loop through an ass array

$person = [
    'name' => 'Daniel',
    'address' => 'Owerri',
    'age' => 25,
    'friend' => ['Victor', 'Vex']

];
print_r($person['friend'][0]);

$person['name'] = 'Victor';

foreach($person as $key => $all){
    if(is_array($all)){
    echo '<pre>';
    echo $key . ' '. implode(',', $all);
    echo '</pre>';
    }else{
    echo '<pre>';
    echo $key . ' '. $all;
    echo '</pre>';
    }
}



 ?>