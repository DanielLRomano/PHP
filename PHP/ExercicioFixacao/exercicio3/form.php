<?php

$salarioHora = $_POST['salarioHora'];
$horaTrabalhada = $_POST['horaTrabalhada'];

$salarioBruto = $salarioHora * $horaTrabalhada;

$IR = $salarioBruto * 0.11;
$INSS = $salarioBruto * 0.08;
$sindicato = $salarioBruto * 0.05;

$descontos = $IR + $INSS + $sindicato;

$salarioLiquido = $salarioBruto - $descontos;

echo "Salário Bruto: $salarioBruto <br>";
echo "Imposto Renda: $IR <br>";
echo "INSS: $INSS <br>";
echo "Sindicato: $sindicato <br>";
echo "Salário Liquido: $salarioLiquido <br>";