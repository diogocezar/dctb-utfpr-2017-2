<br>

<head>
    <title>Teste PHP</title>
</head>

<br>

<?php echo "Olá Mundo"; ?></br>

<?php


 $a = 40;
 $b = 20;
if ($a > $b)
    echo "b e menor";
?></br>

<?php


$c = 40;
$d = 50;
if ($c > $d){
    echo "c e maior";
}else{
    echo "d e maior";

}


?></br>

<?php
$c = 40;
$d = 40;
$f= 100;
if ($c = $d){

    if($f>$d){

        echo "voce conseguiu chegar";

    }


}


?></br>


<?php
$var = 10;
$char = 10;

if($var = $char){

    ?>
    <p>As variaveis sao iguais</p>
    <?php
} else {
    ?>
    <p>A variável é menor que 10</p>
    <?php
}
?></br>


<?php
function calcula_dobro($numero) {

    $resultado = $numero * 2;
    return $resultado;
}
echo "O dobro de 3 é: " . calcula_dobro(3);


?></br>


<?php
$rua= "Rua Desembargadora";
$numero = "167";
$endereco = $rua. " - " .$numero;

echo "$endereco";

?></br>


<?php
$gg = "g0dgame";
$wp = true;

settype($gg, "integer");
settype($wp, "string");

echo "$gg ---- $wp";

?></br>



<?php

$lista = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sabado"];
for($x=0; $x<count($lista); $x++){
    echo $lista[$x] . "\n";
}

?></br>

<?php

$lista = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sabado"];

$x=0;

while( $x< count($lista)){
    echo $lista[$x] . "\n";
    $x=$x+1;
}

?></br>

<?php

$lista = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sabado"];



foreach ( $lista as $seu_valor ) {
    echo $seu_valor . ',';
}

?></br>


<?php

$cargo = 'dono';
$nome = 'Vitor';

define($cargo, $nome);
echo "O " . $cargo . " e o  " . constant($cargo) . "!";



?></br>


<?php
$b=0;
$a=true;
if($a == true)
$b++;
echo $b;
?>


<?php
$b= 9 ;
$a = false;
if($a == true) {
    $b++;
    echo $b;
}else{
    $b-- ;
    echo $b;



}

?></br>

<?php
$n = rand(0,100);

echo 'O número é ' . (($n > 50) ? 'maior' : 'menor') . ' que 50!';



?></br>


<?php

$cor = array("verde", "azul", "amarelo", "laranja");
sort($cor);
foreach ($cor as $key ) {
    echo "$key ,";
}

?></br>

<?php

$cor = array("verde", "azul", "amarelo", "laranja");

echo count($cor);

?></br>


<?php

$cor = array("verde", "azul", "amarelo", "laranja");

print_r($cor);

?></br>


<?php

$cor = array("verde", "azul", "amarelo", "laranja");

unset($cor);

?></br>



<?php
$numero = range(1,20);
srand((float)microtime()*1000000);
shuffle($numero);
foreach ($numero as $numero) {
    echo "$numero ";
}
?></br>


<?php

$cor = array("verde", "azul", "amarelo", "laranja");

if (in_array ("azul", $cor)) {
    echo "Tem azul";
}

?></br>


<?php
$resultado = substr("abcdef", -1);

echo "$resultado";

?></br>



<?php

$mystring ="naruto";
$pos = strrpos($mystring, "t");
echo "$pos";




?></br>

<?php

$mystring ="naruto";
$pos = strpos($mystring, "u");
echo "$pos";




?>


<?php
function trim_value(&$value)
{
    $value = trim($value);
}

$cor = array('apple','banana ', ' cranberry ');
var_dump($cor);

array_walk($cor, 'trim_value');
var_dump($cor);

?></br>

<?php
$letras = array('a', 'p');
$frutas   = array('maca', 'pera');
$texto    = 'a p';
$output  = str_replace($letras, $frutas, $texto);
echo $output;
?></br>

<?php
$str = 'abcdef';
echo strlen($str);


?></br>


<?php
$str = "ONE PIECE é MELHOR QUE NARUTO";
$str = strtolower($str);
print $str; // Prints mary had a little lamb and she loved it so
?></br>


<?php
$str = "one piece e muito melhor que naruto";
$str = strtoupper($str);
print $str;
?></br>



<?php
$v = 0;


if (empty($v)) {
    echo "vazia";
}

?></br>



<?php

$pizza  = "parte1 parte2 parte3 parte4 parte5 parte6";
$parte = explode(" ", $pizza);
echo $parte[0];
echo $parte[1];

?></br>


<?php

$numero = 1234.56;

$formatoIngles = number_format($numero);

echo "$formatoIngles";

?></br>








<?php
echo rand() . "\n";
echo rand() . "\n";

echo rand(5, 15);
?></br>




<?php

echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
?></br>


</body>

</html>