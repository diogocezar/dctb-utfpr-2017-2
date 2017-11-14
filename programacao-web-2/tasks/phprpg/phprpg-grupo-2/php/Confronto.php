!DOCTYPE html>
<html lang="pt-br">

<?php
	class Confronto{
		public function __construct(){
		}
		public static function iniciar($monstro, $heroi){
			
			$round = 1;
			
			echo '<hr/>';
			//echo 'Round: '.$round."<br><br>";
			$flag = 1;
			while ($monstro->vivo() && $heroi->vivo()) {
				if ($flag == 1 ) {
					$flag = 2;
					echo 'Round '.$round.'<br>';
					$round++; 
					$valorataq = $monstro->atacar();
					$valordef = $heroi->defender();

					// mostro x heroie

					echo $monstro->__toString().' atacou ('.number_format($valorataq, 2, '.', ','). ' x '.number_format($valordef, 2, '.', ',').') '.$heroi->__toString().'<br>';
					echo $heroi->__toString(). ' perdeu 8 pontos de vida ';


					if ( $valorataq > $valordef) {
							$heroi->perdeVida();
						}

						echo '<br>Vida do ' .$heroi->__toString() .' '.number_format($heroi->__toStringV(), 2, '.', ',');


						
						echo '<br>Vida do ' .$monstro->__toString(). ' '. number_format($monstro->__toStringV(), 2, '.', ',').'<br><br>' ;
						echo '<hr/>';

				} else {
					$flag = 1;
					echo 'Round '.$round.'<br>';
					$round++;
					$valorataq = $heroi->atacar();
					$valordef = $monstro->defender();

					//echo 'Round: '.$round.'<br><br>';
			
					// heroi x mostro
					echo $heroi->__toString().' atacou ('.number_format($valorataq, 2, '.', ','). ' x '.number_format($valordef, 2, '.', ',').') '.$monstro->__toString().'<br>';
					echo $monstro->__toString(). ' perdeu 8 pontos de vida ';

					if ($valorataq > $valordef) {
						$monstro->perdeVida();
					}

					echo '<br>Vida do '.$heroi->__toString() .' '.number_format($heroi->__toStringV(), 2, '.', ',');				
					echo '<br>Vida do '.$monstro->__toString().' '. number_format($monstro->__toStringV(), 2, '.', ',').'<br><br>' ;
					echo '<hr/>';
				}
			}
			if ($monstro->vivo()) {
				if ($monstro->descansar()) {
					$monstro->revitalizar();
					
				}

				echo 'Vencedor: '.$monstro->__toString().'<br>';
				return $monstro;
			}else{
				if ($heroi->descansar()) {
					$heroi->revitalizar();
				}
				echo 'Vencedor: '.$heroi->__toString().'<br>';
				return $heroi;
			}
		}
	}
?>

</html>