<?php

print "Digite a medida em centímetros \n\n";
$medida_centimetros = (int)fgets(STDIN);

$medida_metros = $medida_centimetros *100;

print "A conversão de $medida_centimetros cm para metros resultou em: $medida_metros.";

?>

