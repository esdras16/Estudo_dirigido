<?php
$qtd_galoes = ceil (value $area / $galao_rendimento);
$galao_custo= $qtd_galoes * $galao_peco;

print "serão necessárias {$qtd_galoes} galao(oes) no valor de {$galao_custo} reais";