<form action="parexercicio.php" method="post">
	Numero 1: <input type="text" name="num1"><br>
	Numero 2 <input type="text" name="num2"><br>
	operação:
	<select name="operador">
		<option value='+'>+
		<option value='-'>-
		<option value='*'>*
		<option value='/'>/	
		<option value='%'>%	

	</select>
	<input type="submit" value="calcular">
</form>

<?php
#print_r($_POST);

// if(isset($_post{'num1'])){
//          $num1= $_post('num1'];
//

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
echo $num1;
echo "<br>";
echo $num2;
echo "<br>";
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
elseif ($operacao == '%'){
 	$resultado=$num1%$num2;
}
$nun2 =2;
if ($resultado==0){
	$numero = 'par';

}
else{$numero="impar";}

?>

<h1>Resultado operacao <?=$operacao?>: <?=$numero?></h1>>
