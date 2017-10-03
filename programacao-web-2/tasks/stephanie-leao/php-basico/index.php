<html>
    <head>
        <meta charset="utf-8">
        <title>PHP-Básico</title>
    </head>
    <body>
        <?php 
            //Abertura e fechamento das tags do PHP
            echo "<h1> Atividade de PHP </h1>"; 
        ?>
        
        <?php
        	$a = rand(1, 100);
        	$b = 50;
        	$c = true;
        	date_default_timezone_set('America/Sao_Paulo');
            
            //Comando if;
        	if($a == 100){
        		echo "</br>A variável '$a' possui o valor de $a";
        	}	
        
        	//Comando if com else;
        	if($a > $b){
        		echo "</br>A variável '$a' é maior que $b. Seu valor exato é $a";
        	} else{
        		echo "</br>A variável '$a' é menor que $b. Seu valor exato é $a";
        	}
        
        	//Comando if aninhado com outro if;
        	if(is_numeric($a)){
        		echo "</br>A variável '$a' é um número";
        		if($a % 2 == 0){
        			echo "</br>A variável '$a' é par. Seu valor exato é $a";
        		}else{
        			echo "</br>A variável '$a' é ímpar. Seu valor exato é $a";
        		}
        	}
        
        	//Utilização do comando if em conjunto com HTML (Exemplo no Slide 31)
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
        	//Utilização de variáveis;
        	$date = date('d/m/Y - H:i:s');
        	echo $date;
        
        	//Criação de funções;
        	function mensagem($msg){
        		return $msg;
        	}
        	$msg = "Olá";
        	echo "</br>". mensagem($msg);
        
        	//Utilização de sintaxe simples e complexa em strings;
        	//Criação, e exibição de arrays;
        	$frutas = array("abacaxi", "uva", "morango");
        	echo "</br>${msg}, como está?";
        	//Concatenação de variáveis;
        	echo "</br>A fruta que está armazenada no array é " . $frutas[1];
        	
        	//Utilização do operador cast e também o comando settype;
        	$ano= "a2017";
        	$nome= "A1na";
        	(int) $ano;
        	echo "</br>" . $ano;
        	settype($nome, "string");
        	echo "</br>" . $nome;
        	
        	//Utilização do comando while para percorrer um array;
            while ($fruit_name = current($frutas)) {
                if ($fruit_name == 'morango') {
                    echo "</br>" . key($frutas);
                }
                next($frutas);
            }

            //Utilização do comando for para percorrer um array;
            $keys = array_keys($frutas);
            for ($i = 0; $i < count($frutas); $i++) {
                echo "</br>" . $frutas[$i];
            }

            //Utilização do comando foreach para percorrer um array;
            foreach($frutas as $key){
                echo "</br>" . $key;
            }
            
            //Criação e utilização de uma constante;
            define("PI", "3.14159265359");
            
            //Utilização de operadores: aritméticos, de comparação, lógicos, de incremento e decremento;
            if(PI > $b && PI < $a){
                echo "</br>" . PI;
            } else{
                echo "</br>" . ($b++)/($a--);
            }
            
            //Utilização do operador ternário;
            $terop = ($a % 2 == 0) ? ($b++) : ($b--);
            echo "</br>" . $terop;
            
            //Utilização das seguintes funções para arrays: sort(), count(), print_r(), unset(), shuffle(), in_array();
            $numeros = array(2, 8, 6, 9, 5, 1);
            sort($numeros);
            echo " " . count($numeros);
            
            print_r($numeros);
            
            unset($numeros[2]);
            echo("O elemento da posição 2 foi excluido");
            
            shuffle($numeros);
            print_r($numeros);
             
            if (in_array("1", $numeros)){
                echo "</br>O numero 1 pertence ao array";
            }else{
                echo "</br>O numero 1 não pertence ao array";
            }
            
            //Utilização das seguintes funções para strings: substr(), strrpos(), strpos(), trim(), str_replace(), str_len(), strtolower(), strtoupper();
            $str = "</br>Frutas a mais";
            $caracter = "s";
            $alter = "x";
            echo " " . substr($str, 2, 4);
            echo "<p>Ocorrencias do caracter $caracter</p>";
            echo "</br> Ultima ocorrência: " . strrpos($caracter, $str);
            echo "</br> Primeira ocorrência: " . strpos($caracter, $str);
            echo "</br> String sem espaços: " . trim($str);
            echo "</br> Replace na string: " . str_replace($str, $caracter, $alter);
            echo "</br> Contagem total de caracteres: " . strlen($str);
            echo "</br> String em minúsculo: " . strtolower($str);
            echo "</br> String em maiúsculo: " . strtoupper($str);
            
            //Utilização das seguintes funções gerais: empty(), explode(), impode(), number_format(), rand(), date();
            if(empty($str)){
                echo "</br>A String está vazia";
            } else{
                echo "</br>A String não está vazia";
            }
            $strc = "Muitas frutas";
            $array = explode(" ", $strc);
            $strc = implode(" ", $array);
            echo "</br>".$strc;
            echo "</br> " . number_format(PI, 5);
        ?>
    </body>
</html>
