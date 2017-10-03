<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt">
<!-- Written by: Amilton F. C. Junior - Web Programming 2 - Software Engineering Homework - 2017 -->

<head>
	<title>Atividade 6 - Amilton Junior</title>
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
	return 'Programação Web 2';
}

echo "<p>Olá alunos da disciplina de ".disciplina()."!</p>";

// Utilização de sintaxe simples e complexa em strings
$professor = 'Diogo';
$prof = array('Diogo');

echo "<p>Olá professor {$professor}</p>";
echo "<p>Quantos {$professor}s temos aqui?</p>";
echo "<p>Acho que só tem um {$prof[0]} heim</p>";


// Concatenação de variáveis

$um = 'Programação ';
$dois = 'Web';

echo '<p>Disciplina de '.$um.$dois.' 2</p>';

// Utilização do operador cast e também o comando settype

$numero = '7';

echo '<p>O número escolhido é '.(int) $numero.'</p>';
settype($numero, 'int');
echo '<p>O número escolhido é mesmo '.$numero.'</p>';

// Criação, e exibição de arrays

$dias = array('segunda', 'terça', 'quarta', 'quinta', 'sexta');
$fds = array('sábado', 'domingo');

echo '<p>Hoje é '.$dias[1].', mas bem que já poderia ser '.$fds[0].'!</p>';

// Utilização do comando while para percorrer um array

$i = 0;

while ($dias[$i] != null) {
	echo '<p>'.$dias[$i].'</p>';
	$i++;
}

// Utilização do comando for para percorrer um array

$t = count($dias); // 5

for ($i=0; $i<$t; $i++) {
	echo '<p>'.$dias[$i].'</p>';
}

// Utilização do comando foreach para percorrer um array

foreach ($dias as $dia) {
	echo '<p>'.$dia.'</p>';
}

// Criação e utilização de uma constante

define('AMILTON', 'Comandante');

echo '<h2>Eu sou o '. AMILTON .'</h2>';

// Utilização de operadores: aritméticos, de comparação, lógicos, de incremento e decremento

$n1 = 2;
$n2 = 4;

$soma = $n1 + $n2; // 6
$subtracao = $n1 - $n2; // -2
$divisao = $n2 / $n1; // 2
$multiplicacao = $n1 * $soma; // 12

$ehmenor = ($n1 < $n2);
$ehigual = ($n1 == $n2); // false

$soma2 = $n1++ + $n2; // 6
$soma3 = ++$n1 + $n2; // 7

// Utilização do operador ternário

echo '<p>'. (($n1<$n2) ? 'n1 é menor que n2' : 'n1 é igual ou maior a n2') .'</p>';

// Utilização das seguintes funções para arrays: sort(), count(), print_r(), unset(), shuffle(), in_array()

$dias = array(2, 1, 6, 4, 7, 5, 3);

sort($dias); // 1, 2, 3, 4, 5, 6, 7

$total = count($sort); // 7

echo '<p>';
print_r($dias); // Imprime o array em forma legível
echo '</p>';

shuffle($dias); // Embaralha os valores no array

if (in_array(1, $dias)) { // Se tem 1 no array
	echo '<p>';
	print_r($dias); // Imprime o array em forma legível
	echo '</p>';
}

unset($dias); // Remove o array da memória


// Utilização das seguintes funções para strings: substr(), strrpos(), strpos(), trim(), str_replace(), str_len(), strtolower(), strtoupper()

$str = ' Amilton Junior';

$ultimaLetra = substr($str, -1); // r
$posicaoJ = strrpos($str, 'J'); // 9
$semEspacoInicio = trim($str); // Amilton Junior
$semJunior = str_replace('Junior', 'de Camargo', $str); // Amilton de Camargo
$comprimento = strlen($str); // 14
$minusculo = strtolower($str); // amilton junior
$maiusculo = strtoupper($str); // AMILTON JUNIOR

// Utilização das seguintes funções gerais: empty(), explode(), impode(), number_format(), rand(), date()

$var;
$temVar = !empty($var);

$nome = 'Amilton,Junior';
$partes = explode(',', $nome);
$primeiroNome = $partes[0]; // Amilton
$ultimoNome = $partes[1]; // Junior

$nomeSeparadoTraco = implode('-', $partes); // Amilton-Junior

$num = 1234.56;
$numFormatado = number_format($number, 2, ',', ' '); // 1 234,56

$aleatorio = rand(1, 999); // Qualquer número entre 1 e 999

$hoje = date('d/m/Y'); // 03/10/2017 ou o dia de hoje

?>
</body>

</html>
