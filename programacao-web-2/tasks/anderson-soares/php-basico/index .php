<!DOCTYPE html>

<html lang="pt-br">

<head>
	
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>A05 - PHP Básico</title>

</head>

<body>

	<?php //Abrindo e fechando tags PHP 
	echo "<p>Atividade 05 - PHP Básico</p>"
	;?>

	<?php 

		$i = 1;
		
		if ($i > 0) { 
			echo "Testando IF<br>" 
		;}
	
		if ($i > 1){
			echo "Testando IF<br>";
		}
		else{
			echo "Testando ELSE<br>";
		}
		
		if ($i > 0){
			if ($i == 1) {
				echo "If aninhado<br>";
			}
		}

		if ($i == 1) {
	?>
			<p> IF com HTML</p>
	<?php
		}

		//Utilizando variaveis
		echo "<br>Variavel i = $i<br>";

	 	echo "<br>Criando uma função <br>";
		$a = 1;
		$b = 2;
		function soma($c, $d){
			return ( $d + $c);
		}
		echo "  --  Soma de a ($a) + b ($b) = ".soma($a, $b)."<br>";
	
		echo "<br>Sintaxe simples em string: <br>";
		echo "  --  Variavel i = $i <br>";

		$array = ['um', 'um string complexo','simples','azul'];
		echo "<br>Posição 2 do array é $array[1]<br>";
	 	
		echo "<br>Concatenando a posição 1 com 3 do array: <br>";
		echo "  --  $array[0] "."$array[3]<br>";

		echo "<br>Utilziando cast e settype: <br>";
        $x1245 = "xix1245";        
        $cas = true;
        settype($x1245,"integer");
        (int) $cas;
        echo "  -- settype: ".$x1245."<br>";
        echo "  -- cast: ".$cas."<br>";
	 	
	 	$array2 = ['dois','marca','peixe'];
	
		echo "<br>Selecionando a posição 2 do array: <br>";
		echo "  --  ".$array2[1]."<br>";
		 
		$con = 0;
		echo "<br>Array com While <br>  --  ";
	 	while ($con<=2) {
	 		echo "Posição $con: ".$array2[$con]." --- ";
	 		$con++;
	 	}
	 	echo "<br>";

		echo "<br>Array com FOR <br>  --  ";
	 	for ($con=0; $con <= 2; $con++) { 
	 		echo "Posição $con: ".$array2[$con]."    ";
	 	}
	 	echo "<br>";

	 	echo "<br>Array com FOREACH <br>  --  ";
	 	foreach ($array2 as $a => $v ) {
	 		echo "{$v} ";
	 	}
	 	echo "<br>";
	 
	 	define("NOME", "Anderson");
	 	echo "<br>Constante <br>  --  NOME: ";
	 	echo NOME.".<br>";


	 	echo "<br>*********Utilização de operadores: aritméticos, de comparação, lógicos, de incremento e decremento.<br>";
	 	$h = 1;
	 	$k = 2;
	 	$s = 3;
	 	$m = 1;
	 	echo "<br>Se s = $s e k = $k, então s * k = ".$s * $k."<br>";
	 	echo "Se s = $s e k = $k, então s / k = ".$s / $k."<br>";
	 	if($h == $m){
	 		echo "h = $h e m = $m, então h == m<br>";
	 	}
	 	if($h < $k){
	 		echo "h = $h e k = $k, então h < k<br>";
	 	}
	 	if($s > $k){
	 		echo "s = $s e k = $k, então s > k<br>";
	 	}

	 	if($s == 3 and $m == 1){
	 		echo "Se s == $s AND(operador lógico) m == $m, então echo!!<br>";
	 	}

	 	echo "m = $m então ++m = ".++$m."<br>";
		echo "s = $s então --s = ".--$s."<br>";
	 	
	 	echo "<br>Utilização do operador ternário<br>";
	 	$n = ($h <=2) ? (++$h) : (--$h);
	 	echo "n = ".$n."<br>";
	 
	 
	 	echo "<br>*********Utilização das seguintes funções para arrays: sort(), count(), print_r(), unset(), shuffle(), in_array();<br>";

	 	$array3 = array(30,20,10,40);
	 	echo"<br>Array original<br>  --  ";
	 	print_r($array3);
	 	sort($array3);
	 	echo "<br>Array com sort<br>  -- ";
	 	print_r($array3);
	 	echo "<br>Array com count<br>  -- ";
	 	count($array3);
	 	print_r($array3);
	 	echo "<br>Array com unset posição 2<br>  -- ";
	 	unset($array3[2]);
	 	print_r($array3);
	 	echo "<br>Array com shuffle<br>  -- ";
	 	shuffle($array3);
	 	print_r($array3);
	 	echo "<br>Array com in array procurando 20<br>  -- ";
	 	if(in_array("20", $array3)){
	 		echo "Encontrou 20 no array!<br>";
	 	}
	 	echo "Array com in array procurando 130<br>  -- ";
	 	if(!in_array("130", $array3)){
	 		echo "Não encontrou 130 no array!<br>";
	 	}
	
		echo "<br>*********Utilização das seguintes funções para strings: substr(), strrpos(), strpos(), trim(), str_replace(), str_len(), strtolower(), strtoupper();<br>";

		$string = "Anderson";
		echo "<br>String original <br>  --  ";
		echo $string;
		echo "<br>Exemplo utilizando substr 1, 6<br>  -- ";
		echo (substr($string, 1, 6));
		echo "<br>Exemplo utilizando strrpos (d)<br>  -- ";
		echo (strrpos($string, "d"));
	 	echo "<br>Exemplo utilizando strpos (r)<br>  -- ";
		echo (strpos($string, "r"));
		$string2 = "        Anderson Marques       ";
		echo "<br>Exemplo utilizando trim<br>  -- ";
		echo trim($string2);
		echo "<br>Exemplo utilizando str_replace<br>  -- ";
		echo "Frase original: Bem oi usei str_replace<br> --";
		echo str_replace("oi", "AQUI", " Bem oi usei str_replace");
		echo "<br>Exemplo utilizando strlen<br>  -- ";
		echo "Frase: Mundo Azul<br> --";
		echo " Strlen :".strlen("Mundo Azul");
		echo "<br>Exemplo utilizando strtolower<br>  -- ";
		echo "Frase: MUNDO AZUL<br> --";
		echo " Strtolower :".strtolower("MUNDO AZUL");
		echo "<br>Exemplo utilizando strtoupper<br>  -- ";
		echo "Frase: mundo azul<br> --";
		echo " Strtoupper:".strtoupper("mundo azul")."<br>";

		echo "<br>*********Utilização das seguintes funções gerais: empty(), explode(), impode(), number_format(), rand(), date();<br>";

		echo '<br>Exemplo utilizando empty <br> -- ';
        if(empty("")){
            echo "Empty retornou true para string vazia";
        }
        echo '<br>Exemplo utilizando explode para / <br> -- ';
        $string3 = explode("/", "teste/azul/preto");
        echo "String original: teste/azul/preto <br> -- ";
        echo " Echo para posição 2 com explode: ".$string3[2];

        echo '<br>Exemplo utilizando implode <br> -- ';
        $array3 = ['www', 'google', 'com'];
        print_r($array3);
        $g = implode ('.', $array3);
        echo "<br> -- Array com implode ponto: ".$g;

        echo '<br>Exemplo utilizando number_format <br> -- ';
        $num = 124535.5452;
        echo "Numero: ".$num;
        echo "<br> -- Number format: ".number_format($num);
        echo '<br>Exemplo utilizando rand entre 49 e 101<br> -- ';
        echo(rand(50,100));
        echo '<br>Exemplo utilizando date para data atual<br> -- ';
        echo(date('l jS \of F Y h:i:s'));
	;?>

</body>
</html>