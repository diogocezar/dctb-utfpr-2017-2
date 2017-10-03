<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php echo "<p>Olá mundo</p>";?>
	<?php
		$a= 15;
		if ($a > 10) {
			echo "o valor de a é  $a";
		}
	?>
	<?php
		$b = 20;
		$c = 10;
		if ($b < $c){
			echo "b é menor que c";
		}else{
			echo "<p>b é maior que c</p>";
		}
	?>
	<?php
		$d =10;
		if ($d > 0){
			if ($d % 2 == 0) {
				echo "d é par";
			}
		}
	 ?>
	<?php
		$e = 20;
		if ($e == 20) {
	?>
	<h1> E  é igual a 20</h1>
	<?php
		}
	 ?>
	<?php
		$nome = 'carlos';
		$sobrenome = 'henrique';
		echo "<p>{$nome} {$sobrenome}</p>";
	 ?>
	<?php 
		$salario = 1580.00;
		$despesa = 1500.00;

		function dinheiroParaSair($salario, $despesa){
			return ( $salario - $despesa);
		}
		echo "Sobrou de salario :";
		echo dinheiroParaSair($salario, $despesa) ;
	?>
	<?php
		$nome = 'carlos';
		$endereco  = array("Rua" =>  " leonardo vila boas", "Cidade" =>  "Andirá", "Estado" =>  "Paraná");
		echo "<p>Seu nome é {$nome}</p>";
	 ?>
	<?php
		$nome = 'carlos';
		$sobrenome = 'henrique';
		echo "$nome" . " " . $sobrenome;

	 ?>
	 <p></p>
	<?php
		$a = "1ada";
		$b = false;
		echo settype($a,"integer");
		echo (int) $b;
	 ?>
	 <p></p>
	<?php
		$endereco  = array('Rua' =>  " leonardo vila boas", 'Cidade' =>  "Andirá", 'Estado' =>  "Paraná");
		echo $endereco['Rua'];
	 ?>
	 <p></p>
	 <?php
	 	$a=1;
	 	$endereco  = array(1 =>  " leonardo vila boas", 2 =>  "Andirá", 3 =>  "Paraná");
	 	while ( $a<4) {
	 		echo $endereco[$a];
	 		echo " ";
	 		$a++;
	 	}
	 ?>
	 <p></p>
	 <?php
	 	
	 	$endereco  = array(1 =>  " leonardo vila boas", 2 =>  "Andirá", 3 =>  "Paraná");
	 	for ($i=1; $i < 4; $i++) { 
	 		echo $endereco[$i];
	 		echo " ";
	 	}
	 ?>
	 <p></p>
	 <?php
	 	$endereco  = array(1 =>  " leonardo vila boas", 2 =>  "Andirá", 3 =>  "Paraná");
	 	foreach ($endereco as $key => $value ) {
	 		echo " {$key} => {$value}";
	 	}
	 ?>
	 <p></p>
	 <?php
	 	define("NOME", "Carlos Henrique dos Santos");
	 	echo NOME;
	 ?>
	 <p></p>
	 <?php
	 	$d = 15;
	 	define("A", "10");
	 	define("B","30");
	 	define("C", "10");
	 	echo A+B;
	 	echo " ";
	 	echo A-B;
	 	echo " ";
	 	echo B/A;
	 	echo " ";
	 	echo A*B;
	 	echo " ";
	 	echo -A;
	 	echo " ";
	 	echo B%A;
	 	echo " ";
	 	echo A==C;
	 	echo " ";
	 	echo A===C;
	 	echo " ";
	 	echo A!=B;
	 	echo " ";
	 	echo A<>B;
	 	echo " ";
	 	echo A!==B;
	 	echo " ";
	 	echo A<B;
	 	echo " ";
	 	echo B>A;
	 	echo " ";
	 	echo A<=C;
	 	echo " ";
	 	echo A>=C;
	 	echo " ";
	 	echo true and true;
	 	echo " ";
	 	echo true or false;
	 	echo " ";
	 	echo true xor false;
	 	echo " ";
	 	echo --$d;
	 	echo " ";
	 	echo ++$d;
	 ?>
	 <p></p>
	 <?php
	 	$a = 10;
	 	$b = ($a <=10) ? (++$a) : (--$a);
	 	echo $b;
	 ?>
	 <p></p>
	 <?php
	 	$a = array(1,3,8,5 );
	 	 sort($a);
	 	 print_r(count($a));
	 	 print_r($a);
	 	 echo " ";
	 	 unset($a[1]);
	 	 shuffle($a);
	 	 in_array(3, $a); 

	 ?>
	 <p></p>
	 <?php
	 	$x = " ola mundo";
	 	$a= "bye mundo";
	 	$b= "mundo cabou";

	 	echo (substr($x, 1, 4));
	 	echo " ";
	 	echo(strrpos( $x, "l"));
	 	echo " ";
	 	echo(strpos( $x, "o"));
	 	echo " ";
	 	echo (trim($x));
	 	echo " ";
	 	echo(str_replace($x, $a, $b));
	 	echo " ";
	 	echo(strlen("abacate"));
	 	echo " ";
	 	echo (strtolower("ABA"));
	 	echo " ";
	 	echo (strtoupper("aba"));
	 	echo " ";
	 	echo " ";
	 	?>
	 	<p></p>

	
	 <?php
	 	echo (empty(""));
	 	echo " ";
	 	$d = explode(" ", "aba cadabra");
	 	echo $d[1];
	 	echo $d[0];
	 	echo " ";
	 	$e = array("nome", "endereço", "telefone" );
	 	echo ($ee =  implode(",", $e));
	 	echo " ";
	 	$n = 1458.18;
	 	$nformat = number_format($n);
	 	echo ($nformat);
	 	echo " ";
	 	echo( rand(1,1000));
	 	echo " ";
	 	echo(date('l'));
	 	echo " ";
	 	echo " ";
	 ?>

</body>
</html>