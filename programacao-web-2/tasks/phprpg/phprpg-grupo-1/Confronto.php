<?php
/**
 * Created by PhpStorm.
 * User: Lucas Jacinto
 * Date: 7/11/2017
 * Time: 1:27 PM
 */

require_once "model/Heroi.php";
require_once "model/Monstro.php";


class Confronto{
    
    /**
     *
     * @var Monstro
     */
    private $monstro;
    
    /**
     *
     * @var Heroi
     */
    private $heroi;
    private $flag = 1;
    private $ganhador = null;
    
    /**
     * 
     * @param Monstro $monstro
     * @param Heroi $heroi
     * @return Criatura
     */
    public static function guerra($jogador1, $jogador2){
         $confronto = new Confronto();
         if($jogador1 instanceof Monstro){
             $monstro = $jogador1;
             $heroi = $jogador2;
         }else{
             $monstro = $jogador2;
             $heroi = $jogador1;
         }
         $confronto->heroi = $heroi;
         $confronto->monstro = $monstro;
         $confronto->init();
         return $confronto->ganhador;
    }
    
    private function init(){
        $round = 1;
        do{
            if($this->flag == 1){
                $this->flag = 2;
                $atacador = $this->monstro;
                $defendedor = $this->heroi;
            }else{
                $this->flag = 1;
                $atacador = $this->heroi;
                $defendedor = $this->monstro;
            }
            echo "Round {$round}\n\n";
            $ataque = $atacador->atacar();
            $defesa = $defendedor->defender();
            echo "{$atacador->getNome()} atacou ({$ataque}, {$defesa}) {$defendedor->getNome()}\n";
            if($ataque > $defesa){
                $defendedor->perdeVida();
                echo "{$defendedor->getNome()} perdeu 8 pontos de vida\n";
            }
            echo "Vida do heroi {$this->heroi->getVida()}\n";
            echo "Vida do monstro {$this->monstro->getVida()}\n";
            echo "-------------------------------------------------\n";
            $round++;
        }while($this->monstro->vivo() && $this->heroi->vivo());
        
        if($this->monstro->vivo()){
            $ganhador = $this->monstro;
        }else{
            $ganhador = $this->heroi;
        }
     
        if($ganhador->descansar() > 20){
            $ganhador->revitalizar();
            echo "{$ganhador->getNome()} pode descansar\n";
        }
        
        $this->ganhador = $ganhador;
        
        echo "\033[31m*** Vencedor: {$ganhador->getNome()} \033[0m\n\n";
    }
}