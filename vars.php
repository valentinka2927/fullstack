<?php

$name = "Valentina";
$age = 32;

/**
 * многострочный 
 * коментарий
 */
echo $name;
echo "<br>";
echo $age;
 
$name2 = 'Anna';
echo '<br>';

echo $name2;
$lastName = 'Karpelyanskaya';
$last_name = 'Karpelyanskaya';

$fullName = $name . ' ' .  $lastName;

echo "<br>";
echo $fullName;

$word = 'Iower_case';
$word = strtoupper($word);
echo"<br>";
echo $word;

$upperCase = 'UPPER_CASE';
$upperCase = strtolower($upperCase);

echo"<br>";
echo $upperCase;

echo "<br>";
$password = '  qwerty';
echo '!' . $password . '!';
echo "<br>";
echo trim($password) . '!';

echo "<br>";

/**
 * 2 гамбургера по 4.95
 * 1 коктейль за 1.95
 * 1 кока-кола за 0.85
 * чаевые 16%
 * ндс 7,5%
 */
echo "<br>";
$gamburger = 4.95 ;
$coctel = 1.95 ;
$cocacola = 0.85 ;
$tips = 0.16 ;
$nds = 0.075;
$price = 2 * $gamburger + $coctel + $cocacola ;

echo $result = $price * $tips + $price * $nds + $price;

