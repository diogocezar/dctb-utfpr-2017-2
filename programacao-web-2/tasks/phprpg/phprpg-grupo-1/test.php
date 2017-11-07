<?php
/**
 * Created by PhpStorm.
 * User: Lucas Jacinto
 * Date: 7/11/2017
 * Time: 1:13 PM
 */
require_once "./model/CriaCriatura.php";
require_once "Confronto.php";



$rounds[] = [
    criar("Montaro"),
    criar("Dark Glorysson"),
];
$rounds[] = [
    criar("Matilda"),
    criar("Mellayine"),
];

$rounds[] = [
    criar("Lord Black"),
    criar("Gryin"),
];
$ganhadores = [];

echo "***********   Primeira rodada de batalhas: ************* \n";
foreach($rounds as $round){
    $ganhadores[] = Confronto::guerra($round[0], $round[1]);
}
echo "\n\n\n***********   Segunda rodada de batalhas: ************* \n";
$semifinal = Confronto::guerra($ganhadores[0], $ganhadores[1]);

echo "\n\n\n***********   Terceira rodada de batalhas: ************* \n";
$ganhadorFinal = Confronto::guerra($semifinal, $ganhadores[2]);


