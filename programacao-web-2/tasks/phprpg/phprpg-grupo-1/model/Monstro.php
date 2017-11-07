<?php
/**
 * Created by PhpStorm.
 * User: Lucas Jacinto
 * Date: 7/11/2017
 * Time: 12:40 AM
 */

require_once "Criatura.php";

class Monstro extends Criatura
{
   
    public function descansar(){
        $coeficiente = (($this->vida + $this->nivel)/2) * $this->getRand();
        return $coeficiente;
    }

}