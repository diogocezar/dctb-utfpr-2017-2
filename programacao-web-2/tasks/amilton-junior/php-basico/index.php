<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt">
<!-- Written by: Amilton F. C. Junior - Web Programming 2 - Software Engineering Homework - 2017 -->

<head>
	<title>Atividade 1 - Amilton Junior</title>
</head>

<body>

<?php

// Abertura e fechamento das tags do PHP

?>
<p>Fechando e abrindo as tags do PHP...</p>
<?php

// Comando if

$numero = 10;
if ($numero==10)
	echo "<p>O número é dez!</p>";

// Comando if com else

if ($numero!=10)
	echo "<p>É, acho que o número não é dez :/</p>";
else
	echo "<p>Sim, o número é dez! :)</p>";

// Comando if aninhado com outro if

$carro = true;
$cor = "branco";

if ($carro) {
	
	echo "<p>Olha, um carro...</p>";
	
	if ($cor == "branco")
		echo "<p>Ele é branco!</p>";
	else
		echo "<p>Ele não é branco!</p>";
}

// Utilização do comando if em conjunto com HTML (Exemplo no Slide 31)

$mostrar = false;

if ($mostrar) {
?>
<h3 align="center">Olá mundo!</h3>
<?php
}

// Utilização de variáveis

$nome = "Amilton";

echo "<p>Olá, meu nome é $nome</p>";

// Criação de funções

function disciplina() {
	return "Programação Web 2";
}

echo "<p>Olá alunos da disciplina de ".disciplina()."!</p>";

// Utilização de sintaxe simples e complexa em strings


// Concatenação de variáveis


// Utilização do operador cast e também o comando settype


// Criação, e exibição de arrays


// Utilização do comando while para percorrer um array


// Utilização do comando for para percorrer um array


// Utilização do comando foreach para percorrer um array


// Criação e utilização de uma constante


// Utilização de operadores: aritméticos, de comparação, lógicos, de incremento e decremento


// Utilização do operador ternário


// Utilização das seguintes funções para arrays: sort(), count(), print_r(), unset(), shuffle(), in_array()


// Utilização das seguintes funções para strings: substr(), strrpos(), strpos(), trim(), str_replace(), str_len(), strtolower(), strtoupper()


// Utilização das seguintes funções gerais: empty(), explode(), impode(), number_format(), rand(), date()


?>
</body>

</html>
