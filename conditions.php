<?php

$number = 4;

if ( $number > 5) {
    echo 'число больше 5';
    echo '<br>';
    echo '!';
}

echo'<br>';
echo 'Это сторка выводится всегда';

if ($number > 5) {
     echo '<br>';
     echo 'число больше 5';
    } else {
     echo '<br>';
     echo 'число меньше или равно 5';
    }

    if ($number > 5) {
        echo '<br>';
        echo 'число больше 5';
       } else if ($number > 3) {
        echo '<br>';
        echo 'число меньше или равно 5, но больше 3';
       } else if ($number > 0) {
        echo '<br>';
        echo 'либо 1, либо 2, либо 3';
       } else {
        echo '<br>';
        echo '0 либо отрецательное';
       }


$second_number = 1 ;

echo '<hr>';

if ($number > 0 and $second_number == 0 ) {
      echo '$number > 0 и $second_numbe равно 0';
}
if ($number > 0 or $second_number == 0 ) {
    echo '$number > 0 и $second_numbe равно 0';
}
if ($number > 0 ) {

    if ($number > 2 ){
        echo 'число больше 2';
    }
}

if ($number != 0){
    echo 'число не 0';
}
# вывести одно из 3 сообщений
# если возраст меньше 7 : Вы дошкольник 
# если старше 6 и младше 19 : Вы в школе
# если старше 18: Закончили школу
echo '<hr>';

$age = 51 ;
if ($age < 6) {
    echo '<br>';
    echo 'Вы дошкольник ';
   } else if ($age > 7 and $age <19 ) {
    echo '<br>';
    echo 'Вы в школе';
   } 
 else if ($age > 18) {
    echo '<br>';
    echo 'Закончили школу';
   } 