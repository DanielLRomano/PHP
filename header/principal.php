<?php

$x = 6;

if ($x <= 5) {
    header('Location: suceso.php');
}else {
    header('Location: erro.php');
}

?>