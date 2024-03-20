<?php
$input = fgets(STDIN);

$numbers = explode(" ", $input);


$a = intval($numbers[0]);
$b = intval($numbers[1]);
$s = intval($numbers[2]);

$maior = max($a, $b, $s);

echo "$maior eh maior";