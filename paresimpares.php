
<?php
$linhas = intval(fgets(STDIN));

 $numero = array();

 for($i = 0; $i < $linhas; $i++) {
   $numero[$i] = intval(fgets(STDIN));
 }

 $pares = array();
 $impares = array();

 foreach($numero as $num) {
   if($num % 2 == 0) {
     $pares[] = $num;
      
   } else {
       $impares[] = $num;
   }

 }
 sort($pares);
 rsort($impares);

 foreach($pares as $par) {
   echo $par . "\n";
 }

 foreach($impares as $impar) {
   echo $impar . "\n";
 }