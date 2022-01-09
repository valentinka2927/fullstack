<?php

$number = 6;
while ($number < 10) {
    echo $number . '<br>';
   // $number = $number + 1;
   // $number +=1;
    $number++;
}
echo '<select>';
echo '<option selected disabled>-- Bыберите значение --</option>';
 for ($i = 1; $i < 10; $i++) {
     echo "<option>$i</option>";
 }
echo '</select>';
echo '<br>';

$faringate = - 50;
//$celsius = ($faringate - 32)*5/9;

while ($faringate <= 50) {
   $celsius = round(($faringate-32)*5/9, 2) ;
    echo "$faringate : $celsius <br>";
       $faringate++;
}

