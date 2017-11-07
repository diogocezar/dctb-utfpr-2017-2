<?php 

// Importa as classes a serem utilizadas
require_once('Criatura.php');
require_once('RandomFloat.php');

/*******

Classe "Monstro"

Descrição: Representa um monstro no jogo. Implementa o método abstrato da classe pai "Criatura".

******/

	class Monstro extends Criatura {
		
		private $debug = FALSE;

		// Método construtor, que salva os valores dos atributos da classe
		function __construct($nome='', $classe='', $nivel=0, $vida=100, $magia=0, $forca=0, $agilidade=0, $destreza=0, $inteligencia=0, $carisma=0) {
			// Valida os dados entrados
			if ($nome == '' || $classe == '' || $nivel == 0 || $magia == 0 || $forca == 0 || $agilidade == 0 || $destreza == 0 || $inteligencia == 0 || $carisma == 0)
				exit('Chamada inválida para new Monstro()');
			
			// Salva os valores nos atributos
			parent::__construct($nome, $classe, $nivel, $vida, $magia, $forca, $agilidade, $destreza, $inteligencia, $carisma);
		}
		
		// Método abstrato que gera um coeficiente (0 - 100) que, se maior que 20, revitaliza parte
		// da vida e da magia da criatura
		public function descansar() {
			// Gera um coeficiente
			$coeficiente = ($this->vida + $this->nivel) * rand_float(1.1, 1.6, 2);
			
			if ($this->debug) {
				echo '<br/>descansar() $coeficiente = ('.$this->vida.' + '.$this->nivel.' + '.$this->bencao.') * rand() '.rand_float(1.1, 1.6, 2).'<br/>';	
			}
			
			// Previne o valor de ser maior que o máximo permitido
			if ($coeficiente > 100)
				$coeficiente = 100;
			
			// Retorna o coeficiente gerado
			return $coeficiente;
		}
	}

 ?>