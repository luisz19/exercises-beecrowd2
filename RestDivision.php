<?php
$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));

$min = min($x, $y);
$max = max($x, $y);
for ($i = $min + 1; $i < $max; $i++) {
    if ($i % 5 == 2 || $i % 5 == 3) {
        echo "$i\n";
    }
}