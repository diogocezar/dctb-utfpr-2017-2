<?php
	class Monstro extends Criatura{
		
		public function __construct($nome, $classe, $nivel, %vida, $magia, $forca, $agilidade, $destreza, $inteligencia, $carisma){
			parent::__construct($nome, $classe, $nivel, %vida, $magia, $forca, $agilidade, $destreza, $inteligencia, $carisma);
		}
		public function descansar(){
			
		}
	}
?>