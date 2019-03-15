<?php
segundostotal= minuto/0.016667
segundostotal=segundostotal+(hora/0.00027778);
segundostotal=segundostotal+(dia*86400);
segundostotal=segundostotal+segundo
return segundostotal

dia=eval(input("Digite a quantidade de dias : "))
hora=eval(input("Digite a quantidade de horas : "))
minuto=eval(input("Digite a quantidade de minutos : "))
segundo=eval(input("Digite a quantidade de segundos : "))

print(" É igual a : ",conversaoparasegundos(dia,hora,minuto,segundo)," Segundos ")

