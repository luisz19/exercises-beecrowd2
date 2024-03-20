<?php

 $x = intval(fgets(STDIN));
 $y = intval(fgets(STDIN));

 $min = min($x, $y);
 $max = max($x, $y);

 $soma = 0;

   for ($i = $min; $i < $max; $i++) {
        if ($i % 2 == 1 && $i > 0) {
           $soma += $i;
        }

   }
echo $soma;