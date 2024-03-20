<?php

function decifrar($texto, $deslocamento) {
     $decifrado = '';
     $tamanho = strlen($texto);
     for ($i = 0; $i < $tamanho; $i++) {
         if (ctype_upper($texto[$i])) {
             $codigo = ord($texto[$i]) - $deslocamento;
             if ($codigo < ord('A')) {
                 $codigo += 26;
             }
             $decifrado .= chr($codigo);
         } else {
             $decifrado .= $texto[$i];
         }
     }
     return $decifrado;
 }
    
 $casos = intval(fgets(STDIN));
    
 for ($i = 0; $i < $casos; $i++) {
     $texto_codificado = rtrim(fgets(STDIN));
     $deslocamento = intval(fgets(STDIN));
    
     echo decifrar($texto_codificado, $deslocamento) . PHP_EOL;
 }