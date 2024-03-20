<?php

function mdc($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

$casos = intval(fgets(STDIN));

for ($i = 0; $i < $casos; $i++) {
   list($f1, $f2) = explode(" ", trim(fgets(STDIN)));

    $max_pilha = mdc($f1, $f2);

    echo $max_pilha . "\n";
}