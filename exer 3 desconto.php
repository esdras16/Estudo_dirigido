<?php

print("Informe o preço do produto:\n");
$preco = (float) fgets(STDIN);

print("Informe o percentual de desconto:\n");
$desconto = (float) fgets(STDIN);

$aumento = ($preco * $desconto)/100;

$precofinal = $preco - $desconto;

print("Você recebeu um desconto de R$$desconto.\n");
print("Preço a pagar R$$precofinal\n");
