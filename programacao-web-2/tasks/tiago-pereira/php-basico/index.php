<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Atividade PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	 <?php  ?>
	 <?php
	 	$a = 1;
	 	if ($a > 0) {
	 		$a = 2;
	 	}
	  ?>
	  <?php
	  	$a = 1;
	  	if ($a == 0) {
	  		$a = 1;
	  	} else {
	  		$a = 0;
	  	}
	   ?>
	   <?php
	   	$a = 1;
	   	$b = 0;
	   	if ($a == $b) {
	   		if ($a > 0) {
	   			$b = $b +1;
	   		}
	   	}
	    ?>
	    <?php
	    	$a = 1;
	    	if ($a == 1) {
	    		<p>a vale 1 unidade</p>
	    	}
	     ?>
	     <?php
	     	$a = 10;
	     	$b = 20;
	     	echo {$a} e {$b};
	      ?>
	      <?php
	      		function teste($a) {
	      			return $a;
	      		}
	       ?>
	       <?php
	       		$refri = 'Coca';
	       		echo "O refri é da {$refri}";
	       		$refris = array ( 1 => coca,
	       						  2 => fanta);
	       		echo "O refri é da {$refris[1]}";
	        ?>
	        <?php
	        	$refri = 'Coca';
	        	$biscoito = 'e trakinas';
	        	echo "$refri" . "" . "$biscoito";
	         ?>
	         <?php
	         	$boo = true;
	         	settype(boo, "integer");
	         	(int) $boo;
	          ?>
	          <?php
	          		$refris = array(0 => 'coca',
	          						1 => 'kuat',
	          						2 => 'sprite');
	          		$echo $refris[1];
	           ?>
	           <?php
	           		$a = 0;
	          		$refris = array(0 => 'coca',
	          						1 => 'kuat',
	          						2 => 'sprite');
	          		while ($a <= 2) {
	          			$echo {$refris[a]};
	          			$a++;
	          		}
	            ?>
	           <?php
	           		$a = 0;
	          		$refris = array(0 => 'coca',
	          						1 => 'kuat',
	          						2 => 'sprite');
	          		for ($a=0; $a < 3; $a++) {
	          			$echo {$refris[a]};
	          		}
	            ?>
	           <?php
	           		$a = 0;
	          		$refris = array(0 => 'coca',
	          						1 => 'kuat',
	          						2 => 'sprite');
	          		for ($a=0; $a < 3; $a++) {
	          			$echo {$refris[a]};
	          		}
	            ?>
	            <?php
	            	$arr = array(1, 2, 3, 4);
	            	foreach ($arr as $valor) {
	            		$valor = $valor * 2;
	            	}
	             ?>
	             <?php
	             	define("Nome", "Tiago");
	             	echo Nome;
	              ?>
	              <?php
	              	$a = 10;
	              	$b = 20;
	              	$a + $b;
	              	$a = $b;
	              	$a++;
	              	$a--;
	               ?>
	               <?php
	               		$a = 10;
	               		$valor = ($a >= 10) ? ($a++) : ($a--);
	                ?>
	                <?php
						$arr = array(1, 2, 3, 4);
						sort($arr);
						count($arr);
						print_r($arr);
						unset($arr[3]);
						shuffle($arr);
						in_array("1", $arr);
						unset($arr);
	                 ?>
	                 <?php
	                 	$str = "Tiago";
	                 	substr("abcd", 0, -1);
	                 	strrpos($str, "i");
	                 	strpos($str, "a");
	                 	trim($str);
	                 	str_replace($str, "i", "a");
	                 	str_len($str);
	                 	strtolower($str);
	                 	strtoupper($str);
	                  ?>
	                  <?php
	                  	$a = 10;
	                  	$b = 2;
	                  	$str = "Tiago";
	                  	empty($a);
	                  	explode("i", $str);
	                  	implode("i", $str);
	                  	number_format($a, $b);
	                  	rand($a, $b);
	                  	date('d/m/Y - H:i:s');
	                   ?>

</body>
</html>