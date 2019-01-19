<form action="calculadora.php" method="post">
	Numero 1: <input type="text" name="num1"><br>
	Numero 2 <input type="text" name="num2"><br>
	operação:
	<select name="operador">
		<option value='+'>+
		<option value='-'>-
		<option value='*'>*
		<option value='/'>/	
	</select>
	<input type="submit" value="calcular">
</form>
<?php
#print_r($_POST);
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacao = $_POST['operador']; 
if ($operacao == '+'){
 	$resultado=$num1+$num2;
}
elseif ($operacao == '-'){
 	$resultado=$num1-$num2;
}
elseif ($operacao == '*'){
 	$resultado=$num1*$num2;
}
elseif ($operacao == '/'){
 	$resultado=$num1/$num2;
}
?>

<h1>Resultado operacao <?=$operacao?>: <?=$resultado?></h1>>