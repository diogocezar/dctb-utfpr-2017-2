<?php
	class Confronto{
		
		public static function iniciar($monstro, $heroi){
			echo $monstro->nome. 'X'. $heroi->nome
			/*falta imprimir as informações de quem esta batalhando antes da batalha*/
			$round = 1;
			$flag = 1;
			while ($monstro->vivo() && $heroi->vivo()) {
				if ($flag == 1 ) {
					$flag = 2;
					/*falta imprimir round*/
					echo 'Round: '.$flag;
					$round++;
					$valorataq = $monstro->ataque();
					$valordef = $heroi->defender();
					/*falta imprimir o nome dos personagens e valor do ataque e da defesa*/
					echo 'Nome do mostro: '. $monstro->nome.'Valor do ataque: '.$valorataq;
						echo 'Nome do heroi: '. $heroi->nome.'Valor da defesa: '.$valordef;
					if ( $valorataq > $valordef) {
						$heroi->perdeVida();
					}
					/*falta imprimir a vida do heroi e do monstro após perder a vida*/
					echo 'Vida do heroi: '. $heroi->vida;
					echo 'Vida do mostro: '. $mostro->vida;
				} else {
					$flag = 1;
					/*falta imprimir round*/
					echo 'Round: '.$flag;
					$round++;
					$valorataq = $heroi->ataque();
					$valordef = $monstro->defender();

					/*falta imprimir o nome dos personagens e valor do ataque e da defesa*/
					if ($valorataq > $valordef) {
						$monstro->perdeVida();
						echo 'Nome do heroi: '. $heroi->nome().'Valor do ataque: '.$valorataq;
						echo 'Nome do mostro: '. $monstro->nome().'Valor da defesa: '.$valordef;
						
					}
					/*falta imprimir a vida do heroi e do monstro após perder a vida*/
					echo 'Vida do heroi: '. $heroi->vida;
					echo 'Vida do mostro: '. $mostro->vida;
				}
				
			}
			if ($monstro->vivo()) {
				if ($monstro->descancar() > 20) {
					$monstro->revitalizar();
					
				}
				/*falta imprimir o nome se acaso o monstro for vencedor*/
				echo $monstro->nome;
				return $monstro->nome;
			}else{
				if ($heroi->descancar() > 20) {
					$heroi->revitalizar();
					
				}
				/*falta imprimir o nome se acaso o heroi for vencedor*/
				echo $heroi->nome;
				return $heroi->nome;
			}
		}
	}
?>