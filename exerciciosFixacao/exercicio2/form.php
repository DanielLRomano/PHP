<?php

$celsius = $_POST['celsius'];
$farenheit = $_POST['farenheit'];

echo "Farenheit: " . ($celsius * 9/5) + 32 . "<br>";
echo "Celsius: " . ($farenheit - 32) * 5/9 . "<br>";
?>