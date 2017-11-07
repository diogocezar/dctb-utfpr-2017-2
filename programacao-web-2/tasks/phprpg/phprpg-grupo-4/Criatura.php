<?php 

// Importa as classes a serem utilizadas
require_once('Generica.php');
require_once('RandomFloat.php');

/*******

Classe abstrata "Criatura"

Descrição: Define os atributos das criaturas que irão atuar em nosso jogo, deve-se implementar
os métodos especiais descritos por sua interface. Cria as ações para as criatuas do jogo e
define um método abstrato que será implementado em suas classes herdeiras.

******/

	abstract class Criatura implements Generica {
		
		// Atributos da classe
		protected $nome; // Nome da criatura
		protected $classe; // Classe da criatura
		protected $nivel; // Nível de evolução da criatura (1 - 10)
		protected $vida; // Escala que indica o quanto a criatura está machucada (1 - 100)
		protected $magia; // Escala que indica o quanto a criatura pode usar magia em combate (1 - 100)
		protected $forca; // Força da criatura (1 - 32)
		protected $agilidade; // O quanto a criatura é ágil (1 - 12)
		protected $destreza; // Destreza da criatura (1 - 16)
		protected $inteligencia; // Inteligência da criatura (1 - 20)
		protected $carisma; // O quão carismática é a criatura (1 - 12)
		private $debug = FALSE;
	
		// Método construtor, que salva os valores dos atributos da classe
		function __construct($nome='', $classe='', $nivel=0, $vida=100, $magia=0, $forca=0, $agilidade=0, $destreza=0, $inteligencia=0, $carisma=0) {
			
			// Valida os dados entrados
			if ($nome == '' || $classe == '' || $nivel == 0 || $magia == 0 || $forca == 0 || $agilidade == 0 || $destreza == 0 || $inteligencia == 0 || $carisma == 0)
				exit('Chamada inválida para new Criatura()');
			
			// Salva os valores nos atributos
			$this->nome = $nome;
			$this->classe = $classe;
			$this->nivel = $nivel;
			$this->vida = $vida;
			$this->magia = $magia;
			$this->forca = $forca;
			$this->agilidade = $agilidade;
			$this->destreza = $destreza;
			$this->inteligencia = $inteligencia;
			$this->carisma = $carisma;
			
		}

		// Método que gera um coeficiente (0 - 100) que será comparado com a defesa de seu oponente. Caso
		// o coeficiente de ataque seja maior do que o de defesa de seu oponente, o ataque é efetuado.
		public function atacar() {
			
			// Calcula e retorna o valor de ataque
			$coeficiente = ($this->nivel + $this->forca + $this->agilidade + ($this->magia * 0.1)) * rand_float(1.1, 1.6, 2);
			
			if ($this->debug) {
				echo '<br/>atacar() $coeficiente = ('.$this->nivel.' + '.$this->forca.' + '.$this->agilidade.' + ('.$this->magia.' * 0.1)) * rand() '.rand_float(1.1, 1.6, 2).'<br/>';
			}
			
			// Previne o valor de ser maior que o máximo permitido
			if ($coeficiente > 100)
				$coeficiente = 100;
			
			// Retorna o coeficiente gerado
			return $coeficiente;
		}
		
		// Método que gera um coeficiente (0 - 100) que será comparado com o ataque de seu oponente. Caso
		// o coeficiente de defesa seja maior que o de ataque de seu oponente, a defesa é efetuada.
		public function defender() {
			// Calcula o coeficiente
			$coeficiente = ($this->agilidade + ($this->destreza * 1.8) + $this->inteligencia) * rand_float(1.1, 1.6, 2) + 10;
			
			if ($this->debug) {
				echo '<br/>defender() $coeficiente = ('.$this->agilidade.' + ('.$this->destreza.' * 1.8) + '.$this->inteligencia.') * rand() '.rand_float(1.1, 1.6, 2).' + 10<br/>';
			}
			
			// Previne o valor de ser maior que o máximo permitido
			if ($coeficiente > 100)
				$coeficiente = 100;
			
			// Retorna o coeficiente gerado
			return $coeficiente;
		}

		// Método que retorna se a criatura está viva
		public function vivo() {
			return ($this->vida > 0);
		}

		// Método que remove parte da vida da criatura
		public function perdeVida() {
			// Remove 8 pontos de vida
			$this->vida -= 8;
			
			if ($this->debug) {
				echo '<br/>perdeVida() $this->vida = '.$this->vida.'<br/>';
			}
			
			// Previne a vida de ser menor que zero
			if ($this->vida < 0)
				$this->vida = 0;
		}

		// Adiciona as propriedades oferecidas pelo descanso, caso aconteça
		public function revitalizar() {
			// Adiciona 50 pontos de vida
			$this->vida += 50;
			// Adiciona 30 pontos de magia
			$this->magia += 30;
			
			if ($this->debug) {
				echo '<br/>revitalizar() $this->vida = '.$this->vida.' - $this->magia = '.$this->magia.'<br/>';
			}
			
			// Previne os valores de ultrapassarem o limite
			if ($this->vida > 100)
				$this->vida = 100;
			
			if ($this->magia > 100)
				$this->magia;
		}

		// Método que retorna com o nome da criatura
		public function getNome() {
			return $this->nome;
		}

		// Método que retorna com a quantidade de vida da criatura
		public function getVida() {
			return $this->vida;
		}

		// Método abstrato que gera um coeficiente (0 - 100) que, se maior que 20, revitaliza parte
		// da vida e da magia da criatura
		public abstract function descansar();
		
		// Método que retorna com uma versão humanamente legível dos atributos do objeto
		public function __toString() {
			return "<b>Nome:</b> $this->nome
					<br/><b>Classe:</b> $this->classe
					<br/><b>Nivel:</b> $this->nivel
					<br/><b>Vida:</b> $this->vida
					<br/><b>Magia:</b> $this->magia
					<br/><b>Força:</b> $this->forca
					<br/><b>Agilidade:</b> $this->agilidade
					<br/><b>Destreza:</b> $this->destreza
					<br/><b>Inteligência:</b> $this->inteligencia
					<br/><b>Carisma:</b> $this->carisma";
		}

		// Método disparado ao invocar métodos inacessíveis em um contexto de objeto
		public function __call($nome='', $argumentos=array()){
			// Retorna com uma mensagem qualquer
			return 'Chamada não permitida do método '.$nome.'!';
		}
	}

 ?>