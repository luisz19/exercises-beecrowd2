<?php

$num = intval(fgets(STDIN));

$notas = array(100, 50, 20, 10, 5, 2, 1);
$cont = 0;

echo "$num\n";

foreach ($notas as $nota) {
  $qtd_notas = intval($num / $nota);
  $num %= $nota;

  echo "$qtd_notas = nota(s) de R$ $nota\n";
}