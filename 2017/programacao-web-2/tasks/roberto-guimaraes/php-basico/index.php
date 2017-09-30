
<?php    // Exercicio 1


// Nome: Roberto Guimarães Junior 
// RA: 1647270          
// Curso: Engenharia de Software     
// Período: 7°         
// Arquivo: PHP


define("TESTE1", "primeira constante");    // Exercício 15
define("TESTE2", "segunda constante");
define("TESTE3", "terceira constante");

$i = 10;


if ($i < 10) { // Exercicio 2
    echo("O numero e menor que 10");
}

if ($i % 2 == 0) {
    echo("Par");
} else { // Exercicio 3
    echo("Impar");
}

if ($i < 10) { // Exercicio 4
    if ($i > 0) {
        echo("O numero esta entre 10 e o 0");
    }
}

function mostrarSoma($a, $b) {
    $total;
    return $total = $a + $b;   // Exercício 7
}

$pedido = 'pedido_01';                  // Exercício 8: Exemplo simples
echo "Ele pediu o pedido ${$pedido}s";

echo "Imprimindo elementos do array  de pedidos : {$arrayTest[0][0]}";      // Exercício 8: Exemplo complexo


$varG1 = 'isso e um'; // Exercício 9
$varG2 = 'teste';
echo $varG1 . ' ' . $varG2;


$teste1 = 'valor1';    // Exercício 10
$teste2 = true;
settype($teste1, "integer");
(int) $teste2 = true;

$array = array(// Exercício 11
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d",
);

$array = array("1", "2", "3", "4");  // Exercício 11
var_dump($array);


while ($i <= 5) {    // Exercício 12
    $j = 1;
    while ($j <= $i) {
        echo"teste1";
        $j++;
    }
    echo"<br>";
    $i++;
}

for ($i = 1;; $i++) {    // Exercício 13
    if ($i > 10) {
        break;
    }
    echo $i;
}

$a = array();       // Exercício 14
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}

if ($i > 5) {        // Exercício 16
    echo ($i + 1) * 3 + 7;
} elseif ($i == 3 && $i == 9) {
    echo "acima da media";
} elseif ($i == 89 || $i == 99) {
    echo "abaixo da media";
} else {
    $i++;
}


$nota = 5;      // Exercício 17
echo ($nota > 7) ? "voce passou" : "não passou";


//Utilização de funções com array:
// Exercício 18

$frutas = array("limao", "laranja", "banana", "uva");
sort($frutas);
foreach ($frutas as $chave => $valor) {
    echo "frutas[" . $chave . "] = " . $valor . "\n";
}

$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
$res = count($a);

$a = array('a' => 'arte', 'b' => 'banana', 'c' => array('x', 'y', 'z'));
print_r($a);

function destruindoTudo() {

    unset($GLOBALS['bar']);
}

$bar = "destroi";
destruindoTudo();


$numeros = range(1, 20);
srand((float) microtime() * 1000000);
shuffle($numeros);
foreach ($numeros as $numero) {
    echo "$numero";
}

$sistemas = array("mac", "NT", "Win", "Linux");
if (in_array("mac", $sistemas)) {
    echo "Tem mac";
}


//Utilização de funções específicas de STRING:
// Exercício 19

echo substr('abcdef', 1);

echo strpos("php e muito bom", "php");


echo trim('     Removendo Espaços     ');

$testSearch = str_replace("%body%", "black", "<body text='%body%'>");


$strings = 'abcdef';
echo strlen($strings);

$strings2 = "minusculo e maiusculo";
$strings2 = strtolower($strings2);
$strings2 = strtoupper($strings2);

//fim de funções de strings



//Utilização de funções gerais:
// Exercício 20

if (empty($var)) {
    echo 'esta vazia';
}

$pizza = "preco1 preco2 preco3 preco4 preco5 preco6";
$precos = explode(" ", $pizza);
echo $precos[0];
echo $precos[1];

$arrayTest = array('nome', 'email', 'fone');
$juntatudo = implode(",", $arrayTest);
print $juntatudo;


$num = 1999.9;
$exemploFormat = number_format($num) . "<br>";
echo $exemploFormat;


echo rand() . "\n";
echo rand() . "\n";
echo rand(5, 15);

echo date('l jS \of F Y h:i:s A');

?>
<html>
    <head>ph
        <title>Exercício básico de PHP</title>
    </head>
    <body>
        <?php
        $i = 10; // Exercicio 6

        if ($i % 2 == 0) {
            echo("<h1>Par</h1>"); // Exercicio 5
        } else {
            echo("<h1>Impar</h1>");
        }
        ?>
    </body>
</html>