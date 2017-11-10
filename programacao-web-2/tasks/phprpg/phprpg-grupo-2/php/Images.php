<?php
	class Images{
		public function selectImage($personagem){
			if($personagem == "Montaro"){
				?>
				<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
					<div class="col-lg-4 col-md-4 col-sm-12 flipper">
						<div class="front">
							<img src=".\assets\images\montaro.jpg"/> 
							<p class="legend">Montaro</p>
						</div>
						<div class="back">
							<p class="legend"> Nome: Montaro <br/> Classe: Elfo das Trevas <br/> Nível: 7 <br/>
									Vida: <?php echo $personagem->__toStringV(); ?> <br/> Magia: 100 <br/> Força: 10 <br/> Agilidade: 5 <br/>
									Destreza: 10 <br/> Inteligência: 15 <br/> Carisma: 10
							</p>
						</div>
					</div>	
				</div>
				<?php

			} else if($personagem == "Lord Black"){
				?>
				<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
					<div class="col-lg-4 col-md-4 col-sm-12 flipper">
						<div class="front">
							<img src=".\assets\images\lord_black.jpg"/>
							<p class="legend">Lord Black</p>
						</div>
						<div class="back">
							<p class="legend"> Nome: Lord Black <br/> Classe: Humano <br/> Nível: 10 <br/>
									Vida: <?php echo $personagem->__toStringV(); ?> <br/> Magia: 20 <br/> Força: 32 <br/> Agilidade: 12 <br/>
									Destreza: 10 <br/> Inteligência: 10 <br/> Carisma: 1
							</p>
						</div>
					</div>
				</div>
				<?php
			} else if($personagem == "Matilda"){
				?>
				<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
					<div class="col-lg-4 col-md-4 col-sm-12 flipper">
						<div class="front">
							<img src=".\assets\images\matilda.jpg"/> 
							<p class="legend">Matilda</p>
						</div>
						<div class="back">
							<p class="legend"> Nome: Matilda <br/> Classe: Elfo das Trevas <br/> Nível: 10 <br/>
										Vida: <?php echo $personagem->__toStringV(); ?> <br/> Magia: 80 <br/> Força: 10 <br/> Agilidade: 8 <br/>
										Destreza: 10 <br/> Inteligência: 18 <br/> Carisma: 5
							</p>
						</div>
					</div>
				</div>
				<?php
			} else if($personagem == "Dark Glorysson"){
				?>
				<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
					<div class="col-lg-4 col-md-4 col-sm-12 flipper">
						<div class="front">
							<img src=".\assets\images\dark_glorysson.jpg"/> 
							<p class="legend">Dark Glorysson</p>
						</div>
						<div class="back">
							<p class="legend"> Nome: Dark Glorysson <br/> Classe: Humano <br/> Nível: 8 <br/>
										Vida: <?php echo $personagem->__toStringV(); ?> <br/> Magia: 100 <br/> Força: 10 <br/> Agilidade: 5 <br/>
										Destreza: 10 <br/> Inteligência: 15 <br/> Carisma: 2 <br/> Benção: 10
							</p>
						</div>
					</div>
				</div>
				<?php
			} else if($personagem == "Mellayine"){
				?>
				<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
					<div class="col-lg-4 col-md-4 col-sm-12 flipper">
						<div class="front">
							<img src=".\assets\images\mellayine.jpg"/>
							<p class="legend">Mellayine</p>
						</div>
						<div class="back">
							<p class="legend"> Nome: Mellayine <br/> Classe: Humano <br/> Nível: 5 <br/>
										Vida: <?php echo $personagem->__toStringV(); ?> <br/> Magia: 80 <br/> Força: 25 <br/> Agilidade: 10 <br/>
										Destreza: 8 <br/> Inteligência: 2 <br/> Carisma: 20 <br/> Benção: 10
							</p>
						</div>
					</div>
				</div>
				<?php
			} else if($personagem == "Cryin"){
				?>
				<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
					<div class="col-lg-4 col-md-4 col-sm-12 flipper">
						<div class="front">
							<img src=".\assets\images\gryin.jpg"/> 
							<p class="legend">Cryin</p>
						</div>
						<div class="back">
							<p class="legend"> Nome: Cryin <br/> Classe: Anão <br/> Nível: 10 <br/>
										Vida: <?php echo $personagem->__toStringV(); ?> <br/> Magia: 50 <br/> Força: 30 <br/> Agilidade: 5 <br/>
										Destreza: 10 <br/> Inteligência: 5 <br/> Carisma: 1 <br/> Benção: 10
							</p>
						</div>
					</div>
				</div>
				<?php
			}
		}
	}
?>