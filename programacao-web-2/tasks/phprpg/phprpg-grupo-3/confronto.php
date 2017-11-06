<?php
include'Generica.php';
include'Criatura.php';
include'Monstro.php';
include'Heroi.php';

$monstroMontaro = new Monstro('Montaro','Elfo da Treva',((string)7),((string)100),((string)100),((string)10),((string)5),((string)10),((string)15),((string)10));
$monstroLordBlack = new Monstro('Lord Black','Humano',((string)10),((string)100),((string)20),((string)32),((string)12),((string)10),((string)15),((string)1));
$monstroMatilda = new Monstro('Matilda','Elfo',((string)10),((string)100),((string)80),((string)10),((string)8),((string)10),((string)18),((string)5));
$heroiDarkGlorysson = new Heroi('Dark Glorysson','Humano',((string)8),((string)100),((string)100),((string)10),((string)5),((string)10),((string)15),((string)2),((string)10));
$heroiMellayine = new Heroi('Mellayine','Humano',((string)5),((string)100),((string)80),((string)25),((string)10),((string)8),((string)2),((string)20),((string)10));

$heroiGryin = new Heroi('Gryin','Anão',((string)10),((string)100),((string)50),((string)30),((string)5),((string)10),((string)5),((string)1),((string)10));




	$flag = 1;


	while (($monstroMontaro->vivo() == true) && ($heroiDarkGlorysson->vivo() == true)) {

		if ($flag == 1) {		
			$flag = 2;

			if (($monstroMontaro->atacar()) > ($heroiDarkGlorysson->defender())) {
				echo $heroiDarkGlorysson->perdeVida();
				echo "Dark Glorysson perdeu vida";
				echo "  ";
			}
		}
		if($flag == 2){
			$flag = 1;
			if(($heroiDarkGlorysson->atacar())  >  ($monstroMontaro->defender())){
				echo $monstroMontaro->perdeVida();
				echo "Montaro perdeu vida";
				echo " ";
				
			}
		}

		
	}


?>