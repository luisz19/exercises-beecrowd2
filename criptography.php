<?php
function criptografar($linha) {
     $cripto = '';
     $metade = strlen($linha) / 2; 
    
     for ($i = 0; $i < strlen($linha); $i++) {
         $char = $linha[$i];
         if (ctype_alpha($char)) { 
             $char = chr(ord($char) + 3); 
             if (!ctype_alpha($char)) { 
                 $char = chr(ord($char) - 26);
             }
         }
         $cripto .= $char;
     }
    
     $cripto = strrev($cripto);
    
     for ($i = $metade; $i < strlen($cripto); $i++) {
         $char = $cripto[$i];
         if (ctype_alpha($char)) {
             $char = chr(ord($char) - 1);
             if (!ctype_alpha($char)) { 
                 $char = chr(ord($char) + 26);
             }
         }
         $cripto[$i] = $char;
     }
    
     return $cripto;
 }
 $casos = intval(fgets(STDIN));
    
 for ($i = 0; $i < $casos; $i++) {
     $quantidade_linhas = intval(fgets(STDIN));
    
     for ($j = 0; $j < $quantidade_linhas; $j++) {
         $linha = rtrim(fgets(STDIN));
    
         echo criptografar($linha) . "\n";
     }
 }