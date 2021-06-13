<?php

$n = 5;

while($n > 0){
    echo "$n <br>";
    $n--;
}

echo "<br>";

do{
    $n++;
    echo "$n <br>";
}while($n != 5);

echo "<br>";

for(;$n > 0;$n--){
    echo "$n <br>";
}

echo "<br>";
$color = array("red","green","blue","yellow");

foreach($color as $value){
    echo "$value <br>";
}

?>