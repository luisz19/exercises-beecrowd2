<?php

while(true) {
   $input = fgets(STDIN);

   $numbers = explode(" ", $input);


   $x = intval($numbers[0]);
   $y = intval($numbers[1]);

   $min = min($x, $y);
   $max = max($x, $y);
   $cont = 0;

   if($min <= 0 || $max <= 0) {
     break;
   }

   for ($i = $min; $i <= $max; $i++) {
        echo "$i ";
        $cont += $i;
    
    }
    echo "Sum=$cont\n";
}