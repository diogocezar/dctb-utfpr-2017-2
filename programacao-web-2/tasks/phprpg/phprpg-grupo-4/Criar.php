<?php 

// Importa as classes a serem utilizadas
require_once('Heroi.php');
require_once('Monstro.php');

/*******

Biblioteca "Criar"

Descrição: Cria um objeto do tipo "Heroi" ou "Monstro" de acordo com o que o usuário solicitou.

******/

// Vetor com todas as criaturas possíveis
$criaturas = array(
		
	// Heróis
			
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
	
	// Monstros
	
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
	
// Função que retorna com a criatura desejada
function Criar($nome='') {
	
	// Acessa o vetor global
	global $criaturas;
	
	// Obtém o vetor com a criatura
	$criatura = $criaturas[$nome];
	
	// Valida a entrada
	if ($nome == '' || !is_array($criatura)) {
		echo '<b>Criatura "'.$nome.'" não encontrada!</b><br>';
		return; // Encerra a função
	}
			
	// Se a criatura é do tipo herói
	if ($criatura['tipo'] == 'heroi') {
		
		// Retorna com um objeto do tipo Heroi
		return new Heroi($nome, $criatura['classe'], $criatura['nivel'], $criatura['vida'], $criatura['magia'], $criatura['forca'], $criatura['agilidade'], $criatura['destreza'], $criatura['inteligencia'], $criatura['carisma'], $criatura['bencao']);
			
	// Se a criatura é do tipo monstro
	} else if ($criatura['tipo'] == 'monstro') {
		
		// Retorna com um objeto do tipo Monstro
		return new Monstro($nome, $criatura['classe'], $criatura['nivel'], $criatura['vida'], $criatura['magia'], $criatura['forca'], $criatura['agilidade'], $criatura['destreza'], $criatura['inteligencia'], $criatura['carisma']);
				
	// Se o tipo da criatura for inválido
	} else
		echo '<b>Tipo da criatura não identificado!</b><br>';		
	
}