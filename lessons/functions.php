<?php

function sayhello(){
    echo 'Hello!!!<br>';
}

function plusOne($a){
    echo ++$a . '<br>';
}

function multiply (int $a, int $b) {
echo 'Результат: ' . $a * $b . '<br>';
}

function sumNumbers ($a, $b, $c=0) {
 echo $a + $b + $c . '<br>';
}
function returnPlusOne ($a){
    return [
        'oldValue' => $a,
        'newValue' => ++$a
    ];
}
sayhello();

echo 'Hi!<br>';

sayhello();

sayhello();

plusOne(55);
echo ' . Какой то текс';


$number = 18;
plusOne($number);

$number = 9;
$result = returnPlusOne($number);
echo"Старое число:{$result['oldValue']}, новое число :{$result['newValue']} <br>";

multiply(10, 5);

sumNumbers(1, 2, 3);

$res = sumNumbers(1, 2);

echo '<pre>';
var_dump($res);
$numbers = [1, 5, 3, 7, 2,4];

function maxNumber (array $numbers) {
    $max = $numbers [0];
    foreach ($numbers as $number) {
      if ($number > $max){
         $max = $number;
      }
     }
     return $max;
 }

 function sumArray (array $numbers) {
     $res = 0;
     foreach ($numbers as $number) {
         $rs += $number;
     }
     return $res;
 }


echo maxNumber($numbers) . '<br>';
echo max($numbers) . '<br>';
