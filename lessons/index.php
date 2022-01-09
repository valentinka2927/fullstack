<?php

include_once 'scr/funcs.php';

echo "<select>";
for ($i = 0; $i < 5; $i++) {
    include "scr/option.php";
}
echo "</select><hr>";

$a = 10;
echo "$a<br>";
$a = plusOne ($a);
echo "$a<br>";
wrongPlusOne ();
echo "$a<br>";

function plusOne ($a){
    $a = $a + 1;
    return $a;
}
function wrongPlusOne (){
    global $a;
    $a = $a + 1;
}
$GLOBALS['a'];

