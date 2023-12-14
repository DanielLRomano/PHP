<?php

$sexo = 'M';
$tempoServico = 30;

if ($sexo == 'M' && $tempoServico >= 35) {
    echo "Você pode Aposentar";
} else if ($sexo == 'M' && $tempoServico < 35) {
    echo "Você não pode Aposentar";
}

echo "<hr>";

$sexo2 = 'F';
$tempoServico2 = 35;

if ($sexo2 == 'F' && $tempoServico >= 30) {
    echo "Você pode Aposentar";
} else if ($sexo == 'F' && $tempoServico < 30) {
    echo "Você não pode Aposentar";
}
