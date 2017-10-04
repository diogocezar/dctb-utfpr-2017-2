<<!DOCTYPE html>
<html lang="pt-br">
<head>

        <meta charset="utf-8">


	<title>PHP-Básico</title>
</head>
<body>
	 <?php

            echo "<h1> PHP </h1>";
        ?>
        <?php
	 	$condicao = 1;
	 	if ($condicao > 0) {
	 		$condicao = 2;
	 	}
	  ?>
	  <?php
	  	$condicao = 1;
	 	if ($condicao > 0) {
	 		$condicao = 2;
	 	}else{
	 		$condicao = 3;
	 	}
	  ?>

	  <?php
	  	if (condition) {
	  		if (condition) {
	  			# code...
	  		}
	  	}

	  if($c){
        ?>
                <p>A variável $c contém true</p>
        <?php
        	    } else{
        ?>
        		<p>A variável $c contém false</p>
        <?php
        	}
        ?>
        <?php
	     	$a = 1;
	     	$b = 1;
	     	echo {$a} e {$b};
	      ?>

	   <?php
	   		function($resposta){
	   			return $resposta;
	   		}
	   ?>


	   <?php
	   		 echo "O nome é: $age<br>";
	   ?>

	   <?php
	   	 $age = '22';
	   	 $name = 'Alan';
        echo "Meu nome é $name e tenho $age anos.";
	   ?>
	 <?php
		$var1 = “Hello”;
		$var2 = World;
		echo “$var1”;
		echo ‘$var1’;
		echo “$var1” . “ ” . $var2;
	?>

	<?php
		$intei= "123";
        $strin= "abc";
        (int) $intei;
        echo "</br>" . $intei;
        settype($strin, "string");
        echo "</br>" . $strin;
	?>
	<?php
		$item = array(1 => "Item 1", 2 => "Item 2");
		echo "Primeiro array: ".$item[1]. "<br>";
        echo "Segundo array: ".$item[2]. "<br>";

        while (!empty($items[$i])){
        	echo $items[$i]. "<br>";

            $i++;
        }

        for($i = 0; $i < count($items); $i++) {
            echo $items[$i]."<br>";
        }

        foreach ($items as $items) {
            echo $items."<br>";
        }
	?>

	<?php
		define("MAXSIZE", 100);
		echo MAXSIZE;
	?>

	<?php
		$a = 1;
		$b = 2;
		$c = 3;

		echo $a * $b + $c;

		if ($a === $c) {
				# code...
		}

		if ($a == 1 and $b == 3) {
			# code...
		}


		++$a;

		--$b;
	?>

	<?php
		$idade = 18;
		echo ($idade >= 18) ? "Maior de idade !<br>" : "Menor de idade>";
	?>
	<?php
		$arr = array(1, 3, 2, 4, 7, 8);
		print_r($arr);

		sort($arr);


		echo count($arr);


		unset($arr[2]);
		print_r($arr);


		unset($arr);

		$arr = array(1, 9, 8, 5, 6, 96);
		shuffle($arr);
		print_r($arr);


		echo in_array("96", $arr);

	?>

	<?php
			$str = 'Alan Nicolas';
			substr($str, 0, 1);
			strrpos("a", $str);
			strpos("a", $str);
			trim($str);
			str_replace($str, "n", "s");
			str_len($str);
			strtolower($str);
			strtoupper($str);
	?>


	<?php
		$test = 0;
		$str = 'Alan Nicolas';
		if(!empty($test)){
			#code
		}
		explode("s", $str);
      	implode("a", $str);

      	rand(0, 100);
      	date('d/m/Y - H:i:s');
	?>


</body>
</html>