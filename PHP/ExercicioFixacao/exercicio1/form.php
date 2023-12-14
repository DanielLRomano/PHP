<?php

$raio = $_POST['num'];

echo "Raio: $raio <br>";

echo "Perímetro: " . 2 * M_PI * $raio . "<br>";

echo "Área: " . M_PI * $raio * $raio . "<br>";  