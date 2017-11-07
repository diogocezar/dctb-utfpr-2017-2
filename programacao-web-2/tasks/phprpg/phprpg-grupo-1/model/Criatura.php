<?php
/**
 * Created by PhpStorm.
 * User: Lucas Jacinto
 * Date: 7/11/2017
 * Time: 12:25 AM
 */
require_once "Generica.php";

abstract class Criatura implements Generica
{
    protected $nome;
    protected $classe;
    protected $nivel;
    protected $vida;
    protected $magia;
    protected $forca;
    protected $agilidade;
    protected $destreza;
    protected $inteligencia;
    protected $carisma;

    /**
     * Criatura constructor.
     * @param $nome
     * @param $classe
     * @param $nivel
     * @param $vida
     * @param $magia
     * @param $forca
     * @param $agilidade
     * @param $destreza
     * @param $inteligencia
     * @param $carisma
     */
    public function __construct($nome, $classe, $nivel, $vida, $magia, $forca, $agilidade, $destreza, $inteligencia, $carisma){
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
    protected function getRand(){
        return (rand(11, 16) / 10);
    } 
    public function atacar(){
        $coeficiente = (($this->nivel + $this->forca + $this->agilidade + ($this->magia * 0.5))/3) * $this->getRand();
        return $coeficiente;
    }

    public function defender(){
        $coeficiente = (($this->agilidade + ($this->destreza * 1.8) + $this->inteligencia)/3) * $this->getRand()+10;
        return $coeficiente;
    }

    public function vivo(){
        return ($this->vida > 0);
    }

    public function perdeVida(){
        $this->vida -= 8;
        if($this->vida < 0){
            $this->vida = 0;
        }
    }

    public function revitalizar(){
        $this->vida = $this->vida + 50;
        $this->magia = $this->magia + 30;
        if ($this->vida > 100){
            $this->vida = 100;
        }
        if ($this->magia > 100){
            $this->magia = 100;
        }
    }

    public abstract function descansar();

    public function __toString(){
        // TODO: Implement __toString() method.
    }

    /**
     * @return mixed
     */
    public function getNome(){
        return $this->nome;
    }

    public function getVida(){
        return $this->vida;
    }

/*    public function __call(){
        // TODO: Implement __call() method.
      }
*/



}