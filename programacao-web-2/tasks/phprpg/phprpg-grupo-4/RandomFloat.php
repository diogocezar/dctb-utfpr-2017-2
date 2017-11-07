
<?php
/*******

Biblioteca "RandomFloat"

Descrição: Gera um número aleatório do tipo float em um intervalo.

******/

// Função que gera um número aleatório float em intervalo
function rand_float($min=0.0, $max=0.0, $casasdecimais=1) {
	// Valida as entradas
	if ($min == $max) return $min;
	
	// Inverte a ordem caso necessário
	if ($min > $max) {
		$t = $min;
		$min = $max;
		$max = $t;
	}
	
	// Separa os números e casas decimais
	$n1 = explode('.', (string)$min);
	$n2 = explode('.', (string)$max);
	
	$min_abs = $n1[0];
	$min_dec = $n1[1];
	
	$max_abs = $n2[0];
	$max_dec = $n2[1];
	
	// Gera um número inteiro aleatório
	$abs = mt_rand($min_abs, $max_abs);
	// Gera um número decimal aleatório
	$dec = ''; // Inicializa a variável
	// Percorre as casas decimais
	for ($i=0; $i<$casasdecimais; $i++) {
		// Gera um número que esteja dentro do intervalo
		do {
			$n = mt_rand(0, 9);
		} while ((float)($abs.'.'.$dec.$n) < $min || (float)($abs.'.'.$dec.$n > $max));
		// Insere o número no final
		$dec .= $n;
	}
	
	// Se não foi informado o número de casas decimais, insere zero no fim
	if ($casasdecimais < 1)
		$dec = 0;
	
	// Retorna com o número gerado
	return (float)($abs.'.'.$dec);
}

?>