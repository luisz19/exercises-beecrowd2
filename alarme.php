<?php

while(true) {
       $input = fgets(STDIN);
       $numbers = explode(" ", $input);
    
       $horas1 = intval($numbers[0]);
       $min1 = intval($numbers[1]);
       $horas2 = intval($numbers[2]);
       $min2 = intval($numbers[3]);
    
        if ($horas1 == 0 && $min1 == 0 && $horas2 == 0 && $min2 == 0) {
          break;
        }
    
       $minutos1 = $horas1 * 60 + $min1;
       $minutos2 = $horas2 * 60 + $min2;
    
       $tempo = ($minutos2 => $minutos1) ? $minutos2 - $minutos1 : (24 * 60 - $minutos1) + $minutos2;
      
       echo "$tempo\n";
    
     }