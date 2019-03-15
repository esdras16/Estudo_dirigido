<?php
#lata
$lata_rendimento=108; #18*6
$lata_preco = 80;

#galao
$galao_rendimento = 21.6;#18*6
$galao_preco = 25;

#a. comprar apenas latas de 18 litros

$qtd_latas = ceil( value $area / $lata_rendimento);
$latas_custo=$qtd_latas * $lata_preco;
print "serão necessárias {} lata(s) no valor {$latas_custo} reais";
