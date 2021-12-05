<?php

$array = range(0, 100);
foreach ($array as &$v) {
    $v = rand();
}
var_dump($array);
echo max($array);