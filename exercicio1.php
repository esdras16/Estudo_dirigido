<?php 
 
 print "Digite o valor em metros:\n";
 $valor_metros = (float)fgets(STDIN);

$valor_milimetros = $valor_metros/1000;
print "a conversão em metros do valor: $valor_metros foi: $valor_milimetros milímetros.";

?>