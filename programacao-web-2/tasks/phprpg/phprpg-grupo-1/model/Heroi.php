<?php
require_once "Criatura.php";
class Heroi extends Criatura
{
    protected $bencao;

    public function __construct($nome, $classe, $nivel, $vida, $magia, $forca, $agilidade, $destreza, $inteligencia, $carisma, $bencao){
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
        $this->bencao = $bencao;
    }


    public function getBencao(){
        return $this->bencao;
    }

    public function setBencao($bencao){
        $this->bencao = $bencao;
    }


    public function descansar(){
        $coeficiente = (($this->vida + $this->nivel + $this->bencao)/3) * $this->getRand();
     
        return $coeficiente;
    }

}