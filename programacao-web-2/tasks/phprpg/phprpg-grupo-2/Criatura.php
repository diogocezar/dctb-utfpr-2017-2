<?php
	abstract class Criatura implements Generica{
		
		protected $nome;
		protected $classe;
		protected $nivel;
		protected $vida;
		protected $magia;
		protected $forca;
		protected $agilidade;
		protected $destreza;
		protected $inteligencia;
		protected $carisma;
		
		public function __construct($nome, $classe, $nivel, %vida, $magia, $forca, $agilidade, $destreza, $inteligencia, $carisma){
			this->nome = $nome;
			this->classe = $classe;
			this->nivel = $nivel;
			this->vida = $vida;
			this->magia = $magia;
			this->forca = $forca;
			this->agilidade = $agilidade;
			this->destreza = $destreza;
			this->inteligencia = $inteligencia;
			this->carisma = $carisma;
		}
		
		public function atacar(){
			
		}
		
		public function defender(){
			
		}
		
		public function vivo(){
			
		}
		
		public function perdeVida(){
			
		}
		
		public function revitalizar(){
			
		}
		
		abstract public function descansar(){
			
		}
		
		public function __toString(){
			
		}
		
		public function __call(){
			
		}
	}
?>