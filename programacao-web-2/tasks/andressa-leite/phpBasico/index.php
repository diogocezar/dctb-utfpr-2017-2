<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php //Abertura e fechamento das tags do PHP
        
        $a = 3; 
        $b = 5 ;
        $name = 'Andressa';
        $sobrenome = 'Leite';
        //Comando if 
        echo 'Comando if:   ';
        if ($a < $b) { 
           echo "A - B: ";
           echo $a - $b ."<br><br>";
        }
        
      
        //Comando if com else
        echo 'Comando if com else:   ';
        if ($a > $b) {
            echo "A - B: ";
            echo $a - $b ."<br><br>";
                
        } else {
            echo "A + B: ";
            echo $a + $b ."<br><br>";
        }
        
        //comando if aninhado com outro if
        echo 'Comando if aninhado com outro if:    ';
        if ($a < $b) { 
           echo "A / B: ";
           echo $a / $b ."<br><br>";
        } if ($a == $b){
            echo "A + B: ";
            echo $a +$b ."<br><br>";
        } else{
            echo "A * B: ";
            echo $a * $b ."<br><br>";
        }

        
        
        // comando if junto com html
        echo 'Comando if junto com html:   ';
        if ($a > $b) { 
            ?>
            <h4>A - B: </h4>
            <?php        
            } else {
                ?>
            <h4>A + B: </h4>
            <?php   
        } 
        
        //Comando if 
        echo 'Utilizando váriaveis:   ';
        echo $a - $b ."<br><br>";   
           
           
        //Funções
        echo 'Função:   ';
        function multiplicacao($a, $b){
            return ($a * $b);
        } 
        echo 'Resultado:  ';
        echo multiplicacao(10, 4);
        
        
        
        // Sintaxe simples em Strings
        echo '<br><br>Sintaxe simples em Strings:   ';
                
        echo "O nome é: $name<br>";
         
        // Sintaxe complexa em Strings
        echo '<br><br>Sintaxe simples em Strings:   ';
        $name = 'Andressa';
        echo "Meu nome é $name e tenho $a provas.<br>";
        
        // Concatenação de variáveis
        echo '<br><br>Concatenação de variáveis:   ';
        echo "$name" . "" . $sobrenome;
        
        // Utilização do operador cast e também o comando settype
        echo '<br><br>Utilização do operador cast e também o comando settype:   ';
        $street = "444XVdeNovembro";        
        $c = false;
        
        settype($street, "integer");
        (int) $c;
        echo "settype: ".$street. "<br>";
        echo "cast: ".$c;

        // Criação, e exibição de arrays
        echo '<br><br>Criação, e exibição de arrays<br>';
        $items = array(1 => "Andressa",
                       2 => "Lua");
        echo "Primeiro array: ".$items[1]. "<br>";
        echo "Segundo array: ".$items[2]. "<br>";
        
        // Utilização do comando while para percorrer um array
        echo '<br><br>Utilização do comando while para percorrer um array<br>';
        $items = array( 'Lua' ,'Andressa');
        $i = 0;
        do {
             echo $items[$i]. "<br>";

             $i++;
        } while(!empty($items[$i]));
        
        // Utilização do comando for para percorrer um array
        echo '<br><br>Utilização do comando for para percorrer um array<br>';
       
        $items = array( 'Lua' ,'Andressa');
        for($i = 0; $i < count($items); $i++) {
            echo $items[$i]."<br>";
        }
        
        // Utilização do comando foreach para percorrer um array
        echo '<br><br>Utilização do comando foreach para percorrer um array<br>';
        
        $items = array( 'Lua' ,'Andressa');
        foreach ($items as $items) {
            echo $items."<br>";
        }
        
        // Criação e utilização de uma constante;
        echo '<br><br>Criação e utilização de uma constante<br>';
       
        define("NOME", "Andressa");
        echo NOME;

        
         // Utilização de operadores: aritméticos, de comparação, lógicos, de incremento e decremento
        echo '<br><br>Utilização de operadores: aritméticos, de comparação, lógicos, de incremento e decremento<br>';
        $c = 5;
        $d = 5;
        $f = 0;
        $g = 10;
        $h = 5;
        echo $a * $b."<br>";
        
        
        if ($c === $d){
            echo 'Eles são identicos<br>';
        }
        
        if ($a == 3 and $c == 5){
            echo '<br>Eles são iguais (Usando and)<br>';
        }
        
        echo '<br>Incremento: '.++$f;
       
        
        echo '<br>Decremento: '.--$g;
        
        // Utilização do operador ternário
        echo '<br><br>Utilização do operador ternário<br>';
        
        ($c < 10) ? ($h++) : ($h--);
        echo "Operador ternário: ".$h;
        
        
        // Utilização das seguintes funções para arrays: sort(), count(), print_r(), unset(), shuffle(), in_array()
        echo '<br><br>Utilização das seguintes funções para arrays: sort(), count(), print_r(), unset(), shuffle(), in_array()<br>';
        
        $numeros = array( 1 ,5, 3, 10 );
        $letras = array ('a', 'b', 'c', 'd');
        

        sort($numeros); 
       // echo 'Ordenar: '.$numeros.'<br>';
        print_r($numeros);
        echo '<br>';
        $quant = count($numeros);
        echo 'Quantidade :'. $quant;
        echo '<br>';
        unset($numeros);

        shuffle($letras);
        print_r($letras);
        echo '<br>';
        
        in_array("a", $letras);
        echo "<br>Tem a!!<br>";
        
        // Utilização das seguintes funções para strings: substr(), strrpos(), strpos(), trim(), str_replace(), str_len(), strtolower(), strtoupper()
        echo '<br><br>Utilização das seguintes funções para strings: substr(), strrpos(), strpos(), trim(), str_replace(), str_len(), strtolower(), strtoupper()<br>';
        
        echo '<br>';
        echo substr($items, 0, -1);
        echo '<br><br>';
        
        $cidade = 'Santostos';
        $palavra   = 'to';
        $palavra1   = 'ola';

        
        $con      = strrpos($cidade, $palavra);
        $con1      = strpos($cidade, $palavra);
        
        echo 'Strrpos: ';
        if ($con === false) {
            echo "Nada encontrado ($palavra) em ($cidade)<br>";
        } else {
            echo "Achou!\n";
            echo "Última ocorrência encontrada ($palavra) em ($cidade) na posição ($con)<br><br>";
        }
        
        echo 'Strpos: ';
        if ($con1 === false) {
            echo "Nada encontrado ($palavra) em ($cidade)";
        } else {
            echo "Achou!\n";
            echo "Primeira ocorrência encontrada ($palavra) em ($cidade) na posição ($con1)<br>";
        }
        echo '<br>Trim:   ';
        echo  trim($cidade);echo '<br><br>';
        
        echo 'Str_replace:  ';
        echo  str_replace("to", "", "Eu morava em Santos!<br>");
        echo '<br>strtolower:  ';
        echo strtolower("ANDRESSA<br>"); // transforma em minúscula
        echo '<br>Strtoupper: ';
        echo strtoupper("andressa<br>");// transforma em mauúsculos
        
        
        // Utilização das seguintes funções gerais: empty(), explode(), impode(), number_format(), rand(), date()
        echo '<br><br>Utilização das seguintes funções gerais: empty(), explode(), impode(), number_format(), rand(), date()<br>';
        
        echo '<br>Empty: ';
        if (empty($teste)){
            echo 'String vazia<br>';
        }
        
        echo '<br>Explode: <br> ';
        $teste2 = "Andressa Lua Alan";
        $nomes =  explode(" " , $teste2);
        echo $nomes[0]."<br>";
        echo $nomes[1]."<br>";
        echo $nomes[2]."<br>";
        
        echo '<br>Implode:   ';
        echo implode('.', $letras);
        
        $number = 654.68;
        echo '<br>Number_format:   ';
        echo number_format($number);
        
        echo '<br>Rand:   ';
        echo rand(2, 50);
        
        echo '<br>Date:   ';
        echo date("l");
        echo '<br>';
        echo date('l jS \of F Y h:i:s A');
          ?>  
       
        
            
       
    </body>
</html>
