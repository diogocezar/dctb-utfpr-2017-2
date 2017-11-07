<?php

// Para debugar
//error_reporting(E_ALL);

// Inclui as classes necessárias
require_once('Confronto.php');
require_once('Criar.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Jogo RPG</title>
</head>
<body>
<!-- Rola a página para baixo automaticamente enquanto acontece o confronto -->
<script type="text/javascript">
	
	// Função que rola a página para baixo
	function rolar() {
		window.scrollTo(0, document.body.scrollHeight);
	}
	
	// Intervalo de repetição para rolar a página para baixo a cada 800 millisegundos
	var intervalID = window.setInterval(rolar, 800);
	
	// Evento disparado quando a página termina de carregar
	window.onload = function() {
		// Cancela o intervalo de repetição
		window.clearInterval(intervalID);
		// Aguarda 1 segundo e rola a página para o final mais uma vez
		window.setTimeout(function(){rolar();}, 1000);
	};
	
</script>
<?php
	/***
					INICIA O CONFRONTO
	***/

	if (isset($_GET['criatura1']) && isset($_GET['criatura2'])) {
		
		// Define os nomes das criaturas
		$criatura1 = $_GET['criatura1'];
		$criatura2 = $_GET['criatura2'];
		
		// Impede que seja o mesmo
		if ($criatura1 == $criatura2) {
			header("Refresh: 2; url=index.php");
			exit('As criaturas devem ser diferentes!<br /><br /><form action"index.php" method="get"><input type="submit" value="< Voltar" style="width:180px;font-weight:bold;background-color:#000;color:#FFF;" /></form>');
		}
	
		// Inicia o confronto
		$confronto = new Confronto();
		$confronto->iniciar(Criar($criatura1), Criar($criatura2));
		
} else {
?>
<h2 align="center">Batalha - Web 2</h2>
<br />
<form action"index.php" method="get">
<table align="center" border="0">
	<tr>
		<td colspan="3"><p align="center"><b>Escolha as criaturas que se confrontarão:</b></p></td>
	</tr>
	<tr>
		<td align="center"><select name="criatura1"><option disabled="disabled" selected="selected">- Selecione uma criatura -</option><option disabled="disabled">- Heróis -</option><option value="Dark Glorysson">Dark Glorysson</option><option value="Mellayine">Mellayine</option><option value="Gryin">Gryin</option><option disabled="disabled">- Monstros -</option><option value="Montaro">Montaro</option><option value="Lord Black">Lord Black</option><option value="Matilda">Matilda</option></select></td>
		<td align="center" width="100"><p><i>Versus</i></p></td>
		<td align="center"><select name="criatura2"><option disabled="disabled" selected="selected">- Selecione uma criatura -</option><option disabled="disabled">- Heróis -</option><option value="Dark Glorysson">Dark Glorysson</option><option value="Mellayine">Mellayine</option><option value="Gryin">Gryin</option><option disabled="disabled">- Monstros -</option><option value="Montaro">Montaro</option><option value="Lord Black">Lord Black</option><option value="Matilda">Matilda</option></select></td>
	</tr>
	<tr>
		<td colspan="3" align="center"><input type="submit" value="INICIAR CONFRONTO" style="width:180px;font-weight:bold;background-color:#F00;color:#FFF;" /></td>
	</tr>
</table>
</form>
<?php } ?>
</body>
</html>