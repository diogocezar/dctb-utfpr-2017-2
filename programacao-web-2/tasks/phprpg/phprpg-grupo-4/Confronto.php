<?php

// Intervalo, em segundos, entre os confrontos
define('INTERVALO', 1);
// Número máximo de rounds
define('MAXROUNDS', 100);

// Envia o buffer para o navegador
while (@ob_end_flush());

// Desativa o output buffering
ini_set('output_buffering', 'off');
// Desativa o PHP output compression
ini_set('zlib.output_compression', false);

// Implicitly flush
ini_set('implicit_flush', true);
ob_implicit_flush(true);
 
// Previne cachear a p/agina
header('Content-type: text/html');
header('Cache-Control: no-cache');

/*******

Classe "Confronto"

Descrição: Representa a luta entre dois personagens do jogo. Possui apenas um método
estático que recebe 2 objetos do tipo Criatura como parâmetro, e desenvolve todo o
confronto.

******/

	class Confronto {
		
		// Método que transforma uma string em slug para imagem
		private function slugfy($str='') {
			return strtolower(str_replace(array(' ', ',', '.'), '', $str));
		}
		
		// Método que iniciará a batalha
		public function iniciar($criatura1=NULL, $criatura2=NULL) {
				
				// Valida os objetos de entrada
				if (!is_object($criatura1) || !is_object($criatura2)) {
					echo '<b>Objetos "criatura1" e "criatura2" devem ser informados!</b>';
					return; // Encerra a execução
				}
				
				// Valida se ambas as criaturas estão vivas
				if (!$criatura1->vivo() || !$criatura2->vivo()) {
					echo '<b>Ambas as criaturas devem estar vivas para que haja um confronto!</b>';
					return; // Encerra a execução
				}
				
				// Variáveis
				$flag = 1;
				$round = 0;

				// Imprime os dados das criaturas
				echo '<h1 align="center">- CONFRONTO -</h1><br/>';
				echo '<table border="0" align="center"><tr>';
				echo '<td width="190"><p align="right">'.$criatura1.((get_class($criatura1)=='Heroi') ? '<br/><b>Bênção:</b> '.$criatura1->getBencao() : '').'</p></td>';
				echo '<td width="150"><p><img src="images/' . $this->slugfy($criatura1->getNome()) . '.jpg" width="150" height="200" border="0" /></p></td>';
				echo '<td width="100"><h3 align="center"><i>Versus</i></h3></td>';
				echo '<td width="150"><img src="images/' . $this->slugfy($criatura2->getNome()) . '.jpg" width="150" height="200" border="0" /></p></td>';
				echo '<td width="190"><p align="left">'.$criatura2.((get_class($criatura2)=='Heroi') ? '<br/><b>Bênção:</b> '.$criatura2->getBencao() : '').'</p></td>';
				echo '</tr></table><br/><hr/>';

				/***
							CONFRONTO
				***/
				
				// Loop enquanto as criaturas estiverem vivas, respeitando o limite de rounds
				while (($criatura1->vivo() && $criatura2->vivo()) && ++$round <= MAXROUNDS) {
					
					ob_flush();
					flush();
					
					// Imprime o cabeçalho da rodada
					echo '<b>ROUND #' . $round . '</b><br/>';
					
					// Se for a vez da criatura 1
					if ($flag == 1) {
						$flag = 2; // Altera a flag para a próxima criatura na próxima rodada

						// Efetua o confronto
						$ataque = (float)$criatura1->atacar();
						$defesa = (float)$criatura2->defender();
						
						// Se o ataque da criatura 1 é mais forte que a defesa da criatura 2
						if ($ataque > $defesa) {
							$criatura2->perdeVida(); // Criatura 2 perde ponto de vida
							
							echo '<br/><img src="images/attack.png" width="60" height="60" border="0" style="float:left;" /><b>' . $criatura1->getNome() . '</b> atacou (' . $ataque . ' <i>vs</i> ' . $defesa . ')';
							echo '<br/><b>' . $criatura2->getNome() . '</b> perdeu 8 pontos de vida';
							
						// Se a defesa da criatura 2 é mais forte que o ataque da criatura 1
						} else
							echo '<br/><img src="images/defense.png" width="60" height="60" border="0" style="float:left;" /><b>' . $criatura1->getNome() . '</b> atacou mas <b>' . $criatura2->getNome() . '</b> defendeu (' . $ataque . ' <i>vs</i> ' . $defesa . ')';

						echo '<br/> Vida de <b>' . $criatura1->getNome() . '</b>: ' . $criatura1->getVida();
						echo '<br/> Vida de <b>' . $criatura2->getNome() . '</b>: ' . $criatura2->getVida();
						echo '<hr/>';

					// Se for a vez da criatura 2
					} else {
						$flag = 1; // Altera a flag para a próxima criatura na próxima rodada

						// Efetua o confronto
						$ataque = (float)$criatura2->atacar();
						$defesa = (float)$criatura1->defender();
						
						// Se o ataque da criatura 2 é mais forte que a defesa da criatura 1
						if ($ataque > $defesa) {
							$criatura1->perdeVida(); // Criatura 1 perde ponto de vida
							
							echo '<br/><img src="images/attack.png" width="60" height="60" border="0" style="float:left;" /><b>' . $criatura2->getNome() . '</b> atacou (' . $ataque . ' <i>vs</i> ' . $defesa . ')';
							echo '<br/><b>' . $criatura1->getNome() . '</b> perdeu 8 pontos de vida';
							
						// Se a defesa da criatura 1 é mais forte que o ataque da criatura 2
						} else
							echo '<br/><img src="images/defense.png" width="60" height="60" border="0" style="float:left;" /><b>' . $criatura2->getNome() . '</b> atacou mas <b>' . $criatura1->getNome() . '</b> defendeu (' . $ataque . ' <i>vs</i> ' . $defesa . ')';

						echo '<br/> Vida de <b>' . $criatura1->getNome() . '</b>: ' . $criatura1->getVida();
						echo '<br/> Vida de <b>' . $criatura2->getNome() . '</b>: ' . $criatura2->getVida();
						echo '<hr/>';
					}
					
					ob_flush();
					flush();
					
					// Aguarda um tempo antes do próximo confronto
					sleep(INTERVALO);
					
				}
				
				/***
							FIM DO CONFRONTO
				***/

				// Se a criatura 1 permanece viva
				if ($criatura1->vivo() && !$criatura2->vivo()) {
					echo '<img src="images/winner.png" width="100" height="100" border="0" /><img src="images/' . $this->slugfy($criatura1->getNome()) . '.jpg" width="50" height="100" border="0" /><br />' . $criatura1->getNome() . ' venceu o confronto!';
					
					// Verifica se a criatura pode descansar
					if ($criatura1->descansar() > 20) {
						echo '<br/>' . $criatura1->getNome() . ' descansando...';
						
						// Revitaliza a criatura 1
						$criatura1->revitalizar();
					} else
						echo '<br/>' . $criatura1->getNome() . ' não descansará.';
				
				// Se a criatura 2 permanece viva
				} else if($criatura2->vivo() && !$criatura1->vivo()) {
					echo '<img src="images/winner.png" width="100" height="100" border="0" /><img src="images/' . $this->slugfy($criatura2->getNome()) . '.jpg" width="50" height="100" border="0" /><br />' . $criatura2->getNome() . ' venceu o confronto!';
					
					// Verifica se a criatura pode descansar
					if ($criatura2->descansar() > 20) {
						echo '<br/><b><i>' . $criatura2->getNome() . ' descansando...</i></b>';
						
						// Revitaliza a criatura 2
						$criatura2->revitalizar();
					} else
						echo '<br/><b><i>' . $criatura2->getNome() . ' não descansará.</i></b>';
				// Se ambas as criaturas permanecem vivas
				} else
					echo '<img src="images/sad-smiley.jpg" width="150" height="80" border="0" /><br />Ops, ninguém venceu...';
			
			echo '<br /><br /><form action"index.php" method="get"><input type="submit" value="< Nova Disputa" style="width:180px;font-weight:bold;background-color:#000;color:#FFF;" /></form><br />';
			
			}
	}
	
 ?>