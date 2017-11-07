<?php 
/*******

Interface "Generica"

Descrição: É um molde para definir os métodos especiais __call() e __ toString() que deverão
ser implementados nas demais classes do sistema.

******/

	interface Generica {
		
		// Método que retorna com uma versão humanamente legível dos atributos do objeto
		public function __toString();
		
		// Método disparado ao invocar métodos inacessíveis em um contexto de objeto
		public function __call($nome='', $argumentos=array());
	}

 ?>