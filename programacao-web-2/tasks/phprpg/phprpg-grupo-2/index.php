<?php 
	include("php/Generica.php");
	include("php/Criatura.php");
	include("php/Heroi.php");
	include("php/Monstro.php");
	include("php/Confronto.php");
	include("php/Images.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Desafio RPG</title>
		<link rel="stylesheet" href=".\assets\css\style.css">
		<meta name="keywords"            content="Desafio, RPG, Confronto">
		<meta name="viewport"            content="width=device-width, initial-scale=1, user-scalable=no">
		<meta name="description"         content="Desafio RPG">
		<meta name="publisher"           content="Alunos da UTFPR-CP">
		<meta name="author"              content="Andressa, Luã e Stephanie">
		<meta name="robots"              content="index, follow">

		<link rel="icon" type="image/png" href=".\assets\images\icon.png"/>
		<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link href="assets/css/style.css" rel="stylesheet"/>

		<script type="text/javascript">
			function Mudarestado(el) {
	        var display = document.getElementById(el).style.display;
	        if(display == "none")
	            document.getElementById(el).style.display = 'block';
	        else
	            document.getElementById(el).style.display = 'none';
	    	}
		</script>

	</head>

	<body>
		<section id="initial">
			<img src=".\assets\images\fundo.jpg"/>
			<div id="name"> RPG COMBATE </div>
			<a href="#combat" class="go-menu"> <button type="button" id="btnInitial" onclick="Mudarestado('minhaDiv')">Iniciar</button></a>
<!-- 			<a href="#combat" class="go-menu"> <button type="submit" id="btnInitial"> INICIAR </button></a>
 -->			
			<div id="gradientInitial"></div>
		</section>
		
		<section id="components">
			<h1> PERSONAGENS </h1>
			<div class="container">
				<div class="row">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="col-lg-4 col-md-4 col-sm-12 flipper">
							<div class="front">
								<img src=".\assets\images\dark_glorysson.jpg"/> 
								<p class="legend">Dark Glorysson</p>
							</div>
							<div class="back">
								<p class="legend"> Nome: Dark Glorysson <br/> Classe: Humano <br/> Nível: 8 <br/>
											Vida: 100 <br/> Magia: 100 <br/> Força: 10 <br/> Agilidade: 5 <br/>
											Destreza: 10 <br/> Inteligência: 15 <br/> Carisma: 2 <br/> Benção: 10
								</p>
							</div>
						</div>
					</div>
					
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="col-lg-4 col-md-4 col-sm-12 flipper">
							<div class="front">
								<img src=".\assets\images\mellayine.jpg"/>
								<p class="legend">Mellayine</p>
							</div>
							<div class="back">
								<p class="legend"> Nome: Mellayine <br/> Classe: Humano <br/> Nível: 5 <br/>
											Vida: 100 <br/> Magia: 80 <br/> Força: 25 <br/> Agilidade: 10 <br/>
											Destreza: 8 <br/> Inteligência: 2 <br/> Carisma: 20 <br/> Benção: 10
								</p>
							</div>
						</div>
					</div>
										
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="col-lg-4 col-md-4 col-sm-12 flipper">
							<div class="front">
								<img src=".\assets\images\gryin.jpg"/> 
								<p class="legend">Cryin</p>
							</div>
							<div class="back">
								<p class="legend"> Nome: Cryin <br/> Classe: Anão <br/> Nível: 10 <br/>
											Vida: 100 <br/> Magia: 50 <br/> Força: 30 <br/> Agilidade: 5 <br/>
											Destreza: 10 <br/> Inteligência: 5 <br/> Carisma: 1 <br/> Benção: 10
								</p>
							</div>
						</div>
					</div>
				</div>	
				
				<div class="row">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="col-lg-4 col-md-4 col-sm-12 flipper">
							<div class="front">
								<img src=".\assets\images\montaro.jpg"/> 
								<p class="legend">Montaro</p>
							</div>
							<div class="back">
								<p class="legend"> Nome: Montaro <br/> Classe: Elfo das Trevas <br/> Nível: 7 <br/>
											Vida: 100 <br/> Magia: 100 <br/> Força: 10 <br/> Agilidade: 5 <br/>
											Destreza: 10 <br/> Inteligência: 15 <br/> Carisma: 10
								</p>
							</div>
						</div>	
					</div>
						
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="col-lg-4 col-md-4 col-sm-12 flipper">
							<div class="front">
								<img src=".\assets\images\lord_black.jpg"/>
								<p class="legend">Lord Black</p>
							</div>
							<div class="back">
								<p class="legend"> Nome: Lord Black <br/> Classe: Humano <br/> Nível: 10 <br/>
											Vida: 100 <br/> Magia: 20 <br/> Força: 32 <br/> Agilidade: 12 <br/>
											Destreza: 10 <br/> Inteligência: 10 <br/> Carisma: 1
								</p>
							</div>
						</div>
					</div>
					
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="col-lg-4 col-md-4 col-sm-12 flipper">
							<div class="front">
								<img src=".\assets\images\matilda.jpg"/> 
								<p class="legend">Matilda</p>
							</div>
							<div class="back">
								<p class="legend"> Nome: Matilda <br/> Classe: Elfo das Trevas <br/> Nível: 10 <br/>
											Vida: 100 <br/> Magia: 80 <br/> Força: 10 <br/> Agilidade: 8 <br/>
											Destreza: 10 <br/> Inteligência: 18 <br/> Carisma: 5
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<div id="minhaDiv" style="display: none;">
			<section id="combat"> 
				<div id="gradientCombat"></div>
				<p id="combp"> COMBATE </p>	
					<?php 
					$darkGlorysson = new Heroi("Dark Glorysson", "Humano", 8, 100, 100, 10, 5, 10, 15, 2, 10);
					$mellayine = new Heroi("Mellayine", "Humano", 5, 100, 80, 25, 10, 8, 2, 20, 10);
					$cryin = new Heroi("Cryin", "Anão", 10, 100, 50, 30, 5, 10, 5, 1, 10);
					$montaro = new Monstro("Montaro", "Elfo das Estrelas", 7, 100, 100, 10, 5, 10, 15, 10);
					$lordBlack = new Monstro("Lord Black", "Humano", 10, 100, 20, 32, 12, 10, 10, 1);
					$matilda = new Monstro("Matilda", "Elfo das Trevas", 10, 100, 80, 10, 8, 10, 18, 5);
					
			
					$confronto = new Confronto();
					$images = new Images();
	 
	 				?>
	 				
					<div class="row">
	 				 <?php
						$images->selectImage($montaro);
						echo "X";
						$images->selectImage($darkGlorysson);
						echo '<br>'; 
					?>
					</div>

					<?php
						echo '<br>'; 
						$luta1 = $confronto->iniciar($montaro, $darkGlorysson);
						echo '<hr/>';
					?>

						
					<div class="row">
 					<?php				
						$images->selectImage($matilda);
						echo "X";
						$images->selectImage($mellayine);
						echo '<br>';
					?>
					</div>

					<?php
						echo '<br>'; 
						$luta2 = $confronto->iniciar($matilda, $mellayine);
						echo '<hr/>';
					?>

						
					<div class="row">
 					<?php
						$images->selectImage($cryin);
						echo "X";
						$images->selectImage($lordBlack);
						echo '<br>'; 
					?>
					</div>

					<?php
						echo '<br>'; 
						$luta3 = $confronto->iniciar($cryin, $lordBlack);
						echo '<hr/>';
					?>

						
					<div class="row">
 					<?php
						$images->selectImage($luta1);
						echo "X";
						$images->selectImage($luta2);
						echo '<br>'; 
					?>
					</div>

					<?php
						echo '<br>'; 
						$luta4 = $confronto->iniciar($luta1, $luta2);
						echo '<hr/>';
					?>
						
						<div class="row">
	 					<?php
							$images->selectImage($luta3);
							echo "X";
							$images->selectImage($luta4);
							echo '<br>'; 
						?>
						</div>

					<?php
						echo '<br><br><br>';  
						$vencedor = $confronto->iniciar($luta3, $luta4);
						?>
						<div class="row">
							<?php
							$images->selectImage($vencedor);
							?>
						</div>
						<?php 
						echo '<br><br><br>'; 
						echo $vencedor.' VENCEU O CONFRONTO<br>';
						echo $vencedor.' pode <b>descansar';
						echo '<br><br><br>'; 
					?>
					
						<button onClick="window.location.reload();">Jogar novamente</button>

						<?php
						echo '<br><br><br>'; 
						?>
			</section>
		</div>
		

	</body>
</html>