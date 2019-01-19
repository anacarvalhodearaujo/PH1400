<?php
$a = 1;
$b = '1';
echo "<h1>Comparacao com == </h1>";
var_dump($a, $b, $a == $b);
echo "<h1>Comparacao com == </h1>";
var_dump($a, $b, $a === $b);

$texto = "php" ;
echo "<br>";
if(strpos($texto,"p") === false){
	echo "não encontrei";
	}else{
		echo "encontrei";
	}
	




