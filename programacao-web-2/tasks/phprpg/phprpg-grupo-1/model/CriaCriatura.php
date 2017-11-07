<?php
/**
 * Created by PhpStorm.
 * User: Lucas Jacinto
 * Date: 7/11/2017
 * Time: 6:14 PM
 */
require_once 'Heroi.php';
require_once 'Monstro.php';


$criaturas = array(

    'Dark Glorysson' => array(
        'tipo' => 'heroi',
        'classe' => 'Humano',
        'nivel' => 8,
        'vida' => 100,
        'magia' => 100,
        'forca' => 10,
        'agilidade' => 5,
        'destreza' => 10,
        'inteligencia' => 15,
        'carisma' => 2,
        'bencao' => 10
    ),

    'Mellayine' => array(
        'tipo' => 'heroi',
        'classe' => 'Humano',
        'nivel' => 5,
        'vida' => 100,
        'magia' => 80,
        'forca' => 25,
        'agilidade' => 10,
        'destreza' => 8,
        'inteligencia' => 2,
        'carisma' => 20,
        'bencao' => 10
    ),

    'Gryin' => array(
        'tipo' => 'heroi',
        'classe' => 'Anão',
        'nivel' => 10,
        'vida' => 100,
        'magia' => 50,
        'forca' => 30,
        'agilidade' => 5,
        'destreza' => 10,
        'inteligencia' => 5,
        'carisma' => 1,
        'bencao' => 10
    ),

    'Montaro' => array(
        'tipo' => 'monstro',
        'classe' => 'Elfo das Trevas',
        'nivel' => 7,
        'vida' => 100,
        'magia' => 100,
        'forca' => 10,
        'agilidade' => 5,
        'destreza' => 10,
        'inteligencia' => 15,
        'carisma' => 10
    ),

    'Lord Black' => array(
        'tipo' => 'monstro',
        'classe' => 'Humano',
        'nivel' => 10,
        'vida' => 100,
        'magia' => 20,
        'forca' => 32,
        'agilidade' => 12,
        'destreza' => 10,
        'inteligencia' => 10,
        'carisma' => 1
    ),

    'Matilda' => array(
        'tipo' => 'monstro',
        'classe' => 'Elfo',
        'nivel' => 10,
        'vida' => 100,
        'magia' => 80,
        'forca' => 10,
        'agilidade' => 8,
        'destreza' => 10,
        'inteligencia' => 18,
        'carisma' => 5
    )
);

function criar($nome){
    global $criaturas;

    $criatura = $criaturas[$nome];
    if ($nome == ''){
        echo "<br> Criatura não encontrada";
        return;
    }

    if ($criatura['tipo'] == 'heroi'){
        return new Heroi($nome, $criatura['classe'], $criatura['nivel'], $criatura['vida'], $criatura['magia'], $criatura['forca'], $criatura['agilidade'], $criatura['destreza'], $criatura['inteligencia'], $criatura['carisma'], $criatura['bencao']);
    }elseif ($criatura['tipo'] == 'monstro'){
        return new Monstro($nome, $criatura['classe'], $criatura['nivel'], $criatura['vida'], $criatura['magia'], $criatura['forca'], $criatura['agilidade'], $criatura['destreza'], $criatura['inteligencia'], $criatura['carisma']);
    }else{
        echo "<br>Criatura não encontrada";
    }
}