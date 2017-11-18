<!DOCTYPE html>

<html>
	<head>
			<title>Atividade 6 João Paulo</title>
	</head>
	<body>
	
		<?php
			echo "<h2>Atividade 6 João Paulo</h2>";
			
			echo "<h4>1: Abertura e fechamento das tags do PHP</h4>";
	
	
		echo "<h4>2: Comando if</h4>";
		
			$t = 10;

			if ($t < "12") {
			echo "<p>Tenha um bom dia!</p>";
			}
		
	
		echo "<h4>3: Comando if com else</h4>";
	
			$dia = true;

			if ($dia) {
				echo "<p>Esta de dia!</p>";
			} else {
			echo "<p>Já é noite!</p>";
			}
	
	
		echo "<h4>4: Comando if aninhado com outro if</h4>";
	
			$dia = true;
			$manha = true;
			
			if ($dia) {
			
				echo "<p>Está de dia!</p>";
			
				if ($manha)
					echo "<p>Tenha um bom dia!</p>";
				else
					echo "<p><Tenha uma boa tarde!</p>";
			}
	
	
		echo "<h4>5: Utilização do comando if em conjunto com HTML (Exemplo no Slide 31)</h4>";
			
			$mostrar = true;

			if ($mostrar) {
				echo "<h3>Olá todo mundo!</h3>";
			}
	
	
		echo "<h4>6: Utilização de variáveis</h4>";
		
			$txt = "WEB2";
			echo "<p>I love $txt!</p>";
	
	
		echo "<h4>7: Criação de funções</h4>";
	
	
			function escreverMsg() {
				
				echo "<p>Eu sou uma função!</p>";
			}
			escreverMsg();
	
	
		echo "<h4>8: Utilização de sintaxe simples e complexa em strings</h4>";
		
			$n = 'Universidade';
			$g = array('Universidade Tecnologica Federal do Paraná');
			
			echo "<p>Olá {$n} .!</p>";
			echo "<p>qual o seu nome? {$g[0]} </p>";
	
		echo "<h4>9: Concatenação de variáveis</h4>";
			
			$u = 'Universidade ';
			$t = 'Tecnológica ';
			$f = 'Federal';
			$p = 'do Paraná';
			echo "<p>" . $u ." ". $t ." ".$f . " " . $p . "</p>";
	
		echo "<h4>10: Utilização do operador cast e também o comando settype</h4>";
		
			$nome = 'João';
			echo '<p>O nome escolhido é '.(String) $nome.'</p>';
			settype($nome, 'String');
			echo '<p>O nome escolhido é: '.$nome.'</p>';
	
		echo "<h4>11: Criação, e exibição de arrays</h4>";	
	
			$cars = array("Volvo", "BMW", "Toyota");
			echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
	
	
		echo "<h4>12: Utilização do comando while para percorrer um array</h4>";	
	
			$x = 1; 

			while($x <= 5) {
				echo "O número é: $x <br>";
				$x++;
			} 
	
		echo "<h4>13: Utilização do comando for para percorrer um array</h4>";
	
			$cars = array("Volvo", "BMW", "Toyota");
			$arrlength = count($cars);

			for($i = 0; $i < $arrlength; $i++) {
				echo $cars[$i];
				echo "<br>";
				}
	
		echo "<h4>14: Utilização do comando foreach para percorrer um array</h4>";
	
			$cores = array("Vermelhor", "Verde", "Azul", "Amarelo"); 

			foreach ($cores as $cor) {
				echo "$cor <br>";
			}
		
	
		echo "<h4>15: Criação e utilização de uma constante</h4>";
	
			define("JOAO", "Bobao!");

			function test() {
				echo JOAO;
			}
			 
			test();
	
	
		echo "<h4>16: Utilização de operadores: aritméticos, de comparação, lógicos, de incremento e decremento</h4>";
	
			$n1 = 1;
			$n2 = 1;
			
			$soma = $n1 + $n2;
			echo "<p>Soma: $soma </p>";
			
			$subtracao = $n1 - $n2;
			echo "<p>Subtração: $subtracao </p>";
			
			$divisao = $n2 / $n1;
			echo "<p>Divisão: $divisao </p>";
			
			$multiplicacao = $n1 * $soma;
			echo "<p>Multiplicação: $multiplicacao </p>";

			$menor = ($n1 < $n2);
			echo "<p>Menor: $menor </p>";
			
			$igualdade = ($n1 == $n2);
			echo "<p>Igualdade: $igualdade </p>";
			
			$soma2 = $n1++ + $n2;
			echo "<p>Incremento: $soma2 </p>";
			
			$soma3 = ++$n1 + $n2;
			echo "<p>Decremento: $soma3 </p>";
	
	
		echo "<h4>17: Utilização do operador ternário</h4>";	
	
			$nota = 4;
			echo ($nota >= 6) ? "<p>Você passou!" : "Você não passou!</p>";
	
	
		echo "<h4>18: Utilização das seguintes funções para arrays: sort(), count(), print_r(), unset(), shuffle(), in_array()</h4>";
	
			$numeros = array(4, 3, 2, 5, 1);
			
			sort($numeros);
			foreach ($numeros as $key => $val) {
				echo "Sort(): Número [" . $key . "] = " . $val . "<br>";
			}
			
			$a[0] = 1;
			$a[1] = 3;
			$a[2] = 5;
			echo  "<p>Count(): " . count($a) . "</p>";
					
			
			echo "<p>print_r():</p>";
			print_r ($numeros);
			
			
			 shuffle($numeros);
			
			if (in_array(1, $numeros)) { 
				echo "<p>shuffle():</p>";
					print_r($numeros);
			}
			
			echo "<p>unset() destrói a variável especificada.</p>";
			
			function destroy_foo()
			{
				global $foo;
				unset($foo);
			}

				$foo = 'bar';
				destroy_foo();
				echo $foo;
		
		echo "<h4>19: Utilização das seguintes funções para strings: substr(), strrpos(), strpos(), trim(), str_replace(), str_len(), strtolower(), strtoupper()</h4>";
		
			$rest = substr("abcdef", 0, -1);
			echo "<p>substr(): " . $rest . "</p>";
			
			echo "<p>strrpos(): " . strrpos("I love php, I love php too!","php") . "</p>";
		
			echo "<p>strpos(): " . strpos("I love php, I love php too!","php") . "</p>";
			
			
			$str = "Olá Mundo!";
			echo $str . "<br>";
			echo "<p>trim(): " . trim($str,"Olá") . "</p>";
			
			echo "<p>str_replace(): " . str_replace("mundo","Joao","Olá mundo!") . "</p>";
		
			echo "<p>strtolower(): " . strtolower("BEM VINDO!") . "</p>";
		
			echo "<p>strtoupper(): " . strtoupper("Bem vindo!") . "</p>";
			
		
		echo "<h4>20: Utilização das seguintes funções gerais: empty(), explode(), implode(), number_format(), rand(), date()</h4>";
	
			$var = 0;

			//verdadeiro porque $ var está vazio
			if (empty($var)) {
				echo "<p>Empty():" . $var . " é 0, vazio ou nao definido. </p>";
			}
		
			
			$nome = 'Joao Paulo Maciel';
			$partes = explode(' , ', $nome);
			echo "<p>explode: " . $partes[0] = 'Joao' . "</p>";
			echo "<p>explode: " . $partes[1] = 'Paulo' . "</p>";
			
			$primeiroNome = $partes[0];
			$segundoNome = $partes[1];
			echo "<p>Implode: " . $nomeSeparadoTraco = implode('-', $partes) . "</p>";
			
			$number = 1234.56;
			echo "<p>Notação em english: " . $english_format_number = number_format($number) . "</p>";
					
			echo "<p>Notação em French: " . $nombre_format_francais = number_format($number, 2, ',', ' ') . "</p>";
		
				
			echo "<p>Aleatório: " . $aleatorio = rand(1, 999) . "</p>";
		
			echo "<p>Data de Hoje: " . $hoje = date('d/m/Y'). "</p>";
	?>

	</body>
</html>