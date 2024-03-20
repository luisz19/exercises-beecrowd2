<?php
function ledsParaDigito($digito) {
  switch ($digito) {
      case 0:
          return 6;
      case 1:
          return 2;
      case 2:
      case 3:
      case 5:
          return 5;
      case 4:
          return 4;
      case 6:
      case 9:
          return 6;
      case 7:
          return 3;
      case 8:
          return 7;
      default:
          return 0;
  }
 }    
 function ledsParaNumero($numero) {
    $leds = 0;
    $digitos = str_split($numero);
    foreach ($digitos as $digito) {
      $leds += ledsParaDigito(intval($digito));
    }
    return $leds;
 }    
    
$casos = intval(fgets(STDIN));
    
for ($i = 0; $i < $casos; $i++) {
    $valor = trim(fgets(STDIN));
    
    $num_leds = ledsParaNumero($valor);
    
    echo $num_leds . " leds\n";
}