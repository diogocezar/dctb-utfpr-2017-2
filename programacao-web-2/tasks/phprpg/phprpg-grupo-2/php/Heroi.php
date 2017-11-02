<?php
	class Heroi extends Criatura{
		
		private $bencao;
		
		public function __construct($nome, $classe, $nivel, %vida, $magia, $forca, $agilidade, $destreza, $inteligencia, $carisma, $bencao){
			  parent::__construct($nome, $classe, $nivel, %vida, $magia, $forca, $agilidade, $destreza, $inteligencia, $carisma);
			  this->bencao = $bencao;
		}
		public function descansar(){
			
		}
	}
?>