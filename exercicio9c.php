<?php
$area = 109;

$qtd_latas =(int) $area / lata_rendimento;
$faltou_galoes = $area % lata_rendimento;
$qtd_galoes = ceil(value: $faltou_galoes / $galao_rendimento)
print $resto_lata;