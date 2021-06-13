<?php

$num = 2;

function add_number(&$value){
    $value += 5;
}

add_number($num);
echo $num;

?>