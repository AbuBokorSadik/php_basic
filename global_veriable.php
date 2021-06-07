<?php

$x = 5;
$y = 6;

function additional(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

additional();
echo $z;