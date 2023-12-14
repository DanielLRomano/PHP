<?php

	$nome = "Matheus";
	$idade = 23;

	echo "Eu sou " . $nome . " e tenho " . $idade . " anos. <br><br>";

	$str1 = strtoupper("Programação em php");
	echo "$str1 <br>";

	$str2 = strtolower("Programação em php");
	echo "$str2 <br><br>";	

	$str3 = "O PHP foi criado em mil novecentos e noventa e cinco ";
	$str3 = str_replace("o", "0", "$str3");
	$str3 = str_replace("O", "0", "$str3");
	$str3 = str_replace("a", "4", "$str3");
	$str3 = str_replace("i", "1", "$str3");

	echo "$str3 <br>";

?>