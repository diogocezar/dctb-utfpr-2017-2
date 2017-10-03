<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Atividade 06 - PHP básico</title>

    <meta name="keywords"            content="atividade6, phpbasico">
	<meta name="viewport"            content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description"         content="Atividade 06">
	<meta name="publisher"           content="Disciplina de WEB 2">
	<meta name="author"              content="Tiago Pagotto">
	<meta name="robots"              content="index,follow">
</head>

<body>

	<?php echo 'Exemplo de abertura (< ? php) e fechamento (? >) das tags do PHP <br>'; ?>
	<?php echo '================================================================ <br>'; ?>
	<?php echo 'Exemplo de comando if: <br>'; ?>
	<?php
		$x = 2;
		if ($x%2==0)
			echo 'O número da variável $x é par. <br>';
	?>
	<?php echo '================================================================ <br>'; ?>
	<?php echo 'Exemplo de comando if com else: <br>'; ?>
	<?php
		$x = 1;
		if ($x%2==0)
			echo 'O número da variável $x é par. <br>';
		else
			echo 'O número da variável $x não é par. <br>';
	?>
	<?php echo '================================================================ <br>'; ?>
	<?php echo 'Exemplo de comando if aninhado com outro if: <br>'; ?>
	<?php
	$x = 2;
		if ($x%2==0){
			echo 'O número da variável $x é par';
			if($x>0)
				echo ' e positivo. <br>';
		}
	?>
	<?php echo '================================================================ <br>'; ?>
	<?php echo 'Exemplo de comando if em conjunto com HTML: <br>'; ?>
	<?php
		$x = 2;
		if ($x%2==0){
	?>
	<p>O número da variável $x é par.</p>
	<?php
		} else{
	?>
	<p>O número da variável $x não é par.</p>
	<?php
		}
	?>
	<?php echo '================================================================ <br>'; ?>
	<?php echo 'Exemplo da utilização de variáveis: <br>'; ?>
	<?php
		$x = 1;
		$y = 2;
		$z = $x + $y;
		echo "A soma das variáveis x e y é: $x + $y = $z. <br>";
	?>
	<?php echo '================================================================ <br>'; ?>
	<?php echo 'Exemplo da criação de funções: <br>'; ?>
	<?php
		function ehPar($x){
			global $resposta1;
			global $resposta2;
			if ($x%2==0)
				return $resposta1;
			else
				return $resposta2;
		}
		$resposta1 = "O número passado para a função é par. <br>";
		$resposta2 = "O número passado para a função é ímpar. <br>";
		echo ehPar(2);
	?>
	<?php echo '================================================================ <br>'; ?>

	<?php echo 'Exemplos de utilização das sintaxes simples e complexa em strings respectivamente: <br>'; ?>
	<?php
		$string = 'laranja';
		echo "Você gosta de ${string}s???<br>";

		$array = ['primeiro', 'segundo', 'terceiro'];
		echo "O terceiro elemento do array é: {$array[2]}. <br>";
	?>
	<?php echo '================================================================ <br>'; ?>

	<?php echo 'Exemplo de concatenação de variáveis: <br>'; ?>
	<?php
		$nome = "Tiago";
		$sobrenome = "Pagotto";
		echo 'Meu nome completo é: ';
		echo "$nome"." "."$sobrenome";
		echo '.<br>';
	?>
	<?php echo '================================================================ <br>'; ?>

	<?php echo 'Exemplo de utilização do operador cast e do comando settype: <br>'; ?>
	<?php
		$x = "5kg";
		settype($x, "integer");
		echo 'O valor da variável $x é ';
		echo "$x";
		echo '.<br>';

		$bool = true;
		(int)$bool;
		echo 'Executando o cast para inteiro a variável $bool se torna ';
		echo "$bool";
		echo '.<br>';
	?>
	<?php echo '================================================================ <br>'; ?>

	<?php echo 'Exemplo de criação e exibição de arrays: <br>'; ?>
	<?php
		$array = array('primeiro', 'segundo', 'terceiro');
		echo "O segundo elemento do array é: $array[1]. <br>";
	?>
	<?php echo '================================================================ <br>'; ?>

	<?php echo 'Exemplo de utilização do comando while para percorrer um array: <br>'; ?>
	<?php
		$array = array('primeiro', 'segundo', 'terceiro');
		while (list ($key, $val) = each ($array) ) echo $val." ";
	?>
	<?php echo '<br>================================================================ <br>'; ?>

	<?php echo 'Exemplo de utilização do comando for para percorrer um array: <br>'; ?>
	<?php
		$array = array('primeiro', 'segundo', 'terceiro');
		for($i = 0; $i < count($array); ++$i) {
    		echo $array[$i]." ";
		}
	?>
	<?php echo '<br>================================================================ <br>'; ?>

	<?php echo 'Exemplo de utilização do comando foreach para percorrer um array: <br>'; ?>
	<?php
		$array = array('primeiro', 'segundo', 'terceiro');
		foreach($array as &$val) {
    		echo $val." ";
		}
	?>
	<?php echo '<br>================================================================ <br>'; ?>

	<?php echo 'Exemplo de criação e utilização de uma constante: <br>'; ?>
	<?php
		define("CONSTANTE", "Esta é uma constante.");
		echo CONSTANTE;
	?>
	<?php echo '<br>================================================================ <br>'; ?>

	<?php echo 'Exemplos de utilização dos operadores: aritméticos, de comparação, lógicos, de incremento e decremento: <br>'; ?>
	<?php
		$x = 10; $y = 2;
		$z = $x + $y;
		echo "O oposto da variável x é: -$x.<br>";
		echo "O resultado da soma das variáveis x e y é: $z.<br>";
		$z = $x - $y;
		echo "O resultado da subtração da variável x pela variável y é: $z.<br>";
		$z = $x * $y;
		echo "O resultado da multiplicação entre as variáveis x e y é: $z.<br>";
		$z = $x / $y;
		echo "O resultado da divisão da variável x pela variável y é: $z.<br>";
		$z = $x % $y;
		echo "O resto da divisão da variável x pela variável y é: $z.<br>";

		$x = 10; $y = 10;
		if($x==$y)
			echo "Os valores das variáveis x e y são iguais.<br>";
		if($x===$y)
			echo "Os valores das variáveis x e y são idênticos (iguais e do mesmo tipo).<br>";
		$x = 10; $y = 2;
		if($x!=$y)
			echo "Os valores das variáveis x e y são diferentes.<br>";
		if($x<>$y)
			echo "Os valores das variáveis x e y são diferentes.<br>";
		if($x!==$y)
			echo "Os valores das variáveis x e y não são idênticos.<br>";
		$x = 10; $y = 20;
		if($x<$y)
			echo "Os valores da variável x é menor que o da variável y.<br>";
		$x = 10; $y = 2;
		if($x>$y)
			echo "Os valores da variável x é maior que o da variável y.<br>";
		$x = 10; $y = 10;
		if($x<=$y)
			echo "Os valores da variável x é menor ou igual que o da variável y.<br>";
		if($x>=$y)
			echo "Os valores da variável x é maior ou igual que o da variável y.<br>";

		$z = 10;
		if($x==$y and $y==$z)
			echo "Os valores das variáveis x, y e z são iguais (utilizando and).<br>";
		if($x==$y or $y==$z)
			echo "Os valores das variáveis x, y ou os valores das variáveis y e z são iguais (utilizando or).<br>";
		$z = 20;
		if($x==$y xor $y==$z)
			echo "Os valores das variáveis x, y ou os valores das variáveis y e z são, mas não ambos (utilizando xor - ou exclusivo).<br>";
		if(!($x==$z))
			echo "Os valores da variável x é diferente do da variável y (utilizando negação).<br>";
		$z = 10;
		if($x==$y && $y==$z)
			echo "Os valores das variáveis x, y e z são iguais (utilizando &&).<br>";
		if($x==$y || $y==$z)
			echo "Os valores das variáveis x, y ou os valores das variáveis y e z são iguais (utilizando ||).<br>";

		$x = 10;
		++$x;
		echo "O resultado do pré-incremento em um da variável x é: $x.<br>";
		$x = 10;
		$x++;
		echo "O resultado do pós-incremento em um da variável x é: $x.<br>";
		$x = 10;
		--$x;
		echo "O resultado do pré-decremento em um da variável x é: $x.<br>";
		$x = 10;
		$x--;
		echo "O resultado do pós-decremento em um da variável x é: $x.<br>";
		echo "Obs.: a diferença destes 4 últimos casos é notada quando se faz uso destes em laços para percorrer arrays, por exemplo.<br>";
	?>
	<?php echo '================================================================ <br>'; ?>

	<?php echo 'Exemplo de utilização do operador ternário: <br>'; ?>
	<?php
		$nota = 10;
		echo ($nota >= 6) ? "Você passou!<br>" : "Você não passou!<br>";
	?>
	<?php echo '================================================================ <br>'; ?>

	<?php echo 'Exemplos de utilização das funções para arrays: sort(), count(), print_r(), unset(), shuffle(), in_array(): <br>'; ?>
	<?php
		$array = array(1, 3, 2);
		print_r($array);

		sort($array);
		echo '<br>';

		echo count($array);
		echo '<br>';

		unset($array[0]);
		print_r($array);

		echo '<br>';
		unset($array);

		$array = array(1, 3, 2);
		shuffle($array);
		print_r($array);
		echo '<br>';

		echo in_array("2", $array);
		echo '<br>';
	?>
	<?php echo '================================================================ <br>'; ?>

	<?php echo 'Exemplos de utilização das funções para strings: substr(), strrpos(), strpos(), trim(), str_replace(), str_len(), strtolower(), strtoupper(): <br>'; ?>
	<?php
		$string = "Tiago Pagotto";
		$procurado = "a";
		$alterar = "o";
		echo substr($string, 6);
		echo '<br>';

		//strpos($procurado, $string);

		//strrpos($procurado, $string);

		$string2 = "                 João da Nica                   ";
		echo trim($string2);
		echo '<br>';

		//str_replace($string, $procurado, $alterar);
		echo strlen($string);
		echo '<br>';

		echo strtolower($string);
		echo '<br>';

		echo strtoupper($string);
		echo '<br>';
	?>
	<?php echo '================================================================ <br>'; ?>

	<?php echo 'Exemplos de utilização das funções gerais: empty(), explode(), impode(), number_format(), rand(), date(): <br>'; ?>
	<?php
		$x = 10;
		if(!empty($x))
			echo "A variável x não está vazia.<br>";

		$nome_arquivo = "teste.txt";
		$arquivo = explode('.', $nome_arquivo);
		echo ("O nome do arquivo é: " . $arquivo[0]);
		echo '.<br>';

		echo ("A extensão do arquivo é: " . $arquivo[1]);
		echo '.<br>';

		$array = array ("www", "8balls", "com", "br");
		$site = implode ('.', $array);
		echo ($site);
		echo '<br>';

		//number_format($valor, $numCasasDecimais, $ponto, $virgula);
		echo rand(0, 100);
		echo '<br>';

		echo date("d/m/Y - H:i:s");
		echo '<br>';
	?>
	<?php echo '================================================================ <br>'; ?>
	<p>FIM! ALELUIA!</p>
</body>

</html>