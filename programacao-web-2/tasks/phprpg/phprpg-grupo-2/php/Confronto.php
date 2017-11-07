<?php
	class Confronto{
		
		public static function iniciar($monstro, $heroi){
			/*falta imprimir as informações de quem esta batalhando antes da batalha*/
			$round = 1;
			$flag = 1;
			while ($monstro->vivo() && $heroi->vivo()) {
				if ($flag == 1 ) {
					$flag = 2;
					/*falta imprimir round*/
					$round++;
					$valorataq = $monstro->ataque();
					$valordef = $heroi->defender();
					/*falta imprimir o nome dos personagens e valor do ataque e da defesa*/
					if ( $valorataq > $valordef) {
						$heroi->perdeVida();
					}
					/*falta imprimir a vida do heroi e do monstro após perder a vida*/
				} else {
					$flag = 1;
					/*falta imprimir round*/
					$round++;
					$valorataq = $heroi->ataque();
					$valordef = $monstro->defender();
					/*falta imprimir o nome dos personagens e valor do ataque e da defesa*/
					if ($valorataq > $valordef) {
						$monstro->perdeVida();
					}
					/*falta imprimir a vida do heroi e do monstro após perder a vida*/
				}
				
			}
			if ($monstro->vivo()) {
				if ($monstro->descancar() > 20) {
					$monstro->revitalizar()
					
				}
				/*falta imprimir o nome se acaso o monstro for vencedor*/
				return $monstro->nome;
			}else{
				if ($heroi->descancar() > 20) {
					$heroi->revitalizar()
					
				}
				/*falta imprimir o nome se acaso o heroi for vencedor*/
				return $heroi->nome;
			}
		}
	}
?>