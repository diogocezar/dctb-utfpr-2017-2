<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP Basico</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<?php
		//1. Abertura e fechamento das tags do PHP;
		echo "<p>Exemplo do uso das tags php</p>"
	?>

	<?php
		//2. Comando if;
		//3. Comando if com else;
		//4. Comando if aninhado com outro if;
		//5. Utilização do comando if em conjunto com HTML (Exemplo no Slide 31)
		$a = 10;
		if($a > 10){
	?>
	<p>A variavel a eh maior que 10</p>
	<?php
		} else{
	?>
	<p>A variavel a eh menor que 10</p>
	<?php
		}
	?>

	<?php
		//6. Utilização de variáveis;
		//7. Criação de funções;
		function multiplica($a, $b){
			global $total;
			return $total.($a * $b);
		}
		$total = "O total eh: ";
		echo multiplica(3,10);
	?>

	<?php
		//8. Utilização de sintaxe simples e complexa em strings;
		$linguagem = 'php';
		echo "Estamos aprendendo {$linguagem}";
	?>

	<?php
		//9. Concatenação de variáveis
		$var1 = "concatenando";
		$var2 = "variaveis";
		echo "$var1" . " " . "$var2";
	?>

	<?php
		//10. Utilização do operador cast e também o comando settype;
		$var = "18abc";
		settype($var, "integer");
		echo $var;
	?>

	<?php
		//11. Criação, e exibição de arrays;
		//12. Utilização do comando while para percorrer um array;
		//13. Utilização do comando for para percorrer um array;
		//14. Utilização do comando foreach para percorrer um array;

		$array = array('primeiro' => '1',
						'segundo' => '2',
						'terceiro' => '3',
						'quarto' => '4');

		$keys = array_keys($array);
		$size = count($array);

		$w = 0;
		echo "Usando o while: ";
		while($w < $size){
			$key = $keys[$w];
    		$value = $array[$key];
			echo $value;
			$w++;
		}

		echo "Usando o for: ";
		for($i = 0; $i < $size; $i++){
			$key = $keys[$i];
    		$value = $array[$key];
			echo $value;
		}

		echo "Usando o foreach: ";
		foreach($array as $key => $value){
			echo $value;
		}
	?>

	<?php
		//15. Criação e utilização de uma constante;
		//16. Utilização de operadores: aritméticos, de comparação, lógicos, de incremento e decremento;
		//17. Utilização do operador ternário;
		define("constante", "Esse foi o exemplo de constante");
		$var = 1;
		$res = 5;
		$res = ($var > 0) ? ($res = 10) : ($res = 0);
		echo $res;
		echo constante;
	?>

	<?php
		//18. Utilização das seguintes funções para arrays: sort(), count(), print_r(), unset(), shuffle(), in_array();
		$array = array('materia' => 'Web2',
						'professor' => 'Diogo',
						'curso' => 'Eng. de Software');

		$tamanho = count($array);
		print_r($array);
		shuffle($array);
		in_array("Web2", $array);
		unset($array);
	?>

	<?php
		//19. Utilização das seguintes funções para strings: substr(), strrpos(), strpos(), trim(), str_replace(), str_len(), strtolower(), strtoupper();
		$palavra = "Paralelepipedo";
		$subpalavra = "Para";
		$novo = "Teste";
		substr($palavra, 0, 3);
		strrpos($subpalavra, $palavra);
		strpos($subpalavra, $palavra);
		trim($palavra);
		str_replace($palavra, $subpalavra, $novo);
		//str_len($palavra);
		strtolower($palavra);
		strtoupper($palavra);
	?>

	<?php
		//20. Utilização das seguintes funções gerais: empty(), explode(), impode(), number_format(), rand(), date();
		$numero = 1000.56;
		$palavra = "www.facebook.com";
		empty($numero);
		explode('.', $palavra);
		number_format($numero, 2, '.', '');
		rand(150, 1000);
		date('d/m/Y - H:i:s');
	?>
</body>
</html>