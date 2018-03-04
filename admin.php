<DOCTYPE <!DOCTYPE html>
<html lang="pt-pt">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Curso de HTML5 com PHP e MySQL</title>
	<link rel="stylesheet" href="_css/style.css">
</head>
<body>
	
	<!-- FORMULÁRIO DE REGISTO DE RESTAURANTES -->
	<table class="tabela">
		<th colspan="5">REGISTO DE CLIENTES</th><tr>
		<td colspan="5">&nbsp;</td><tr>
		<td class="linha l200">Nome</td>
		<td class="linha l200">Cidade</td>
		<td class="linha l400">Endereço</td>
		<td class="linha l100">Telefone</td>
		<td class="linha l100">Registar</td><tr>

		<form method="post" action="" accept-charset="utf-8">
			
			<td class="linha l200"><input type="text" name="txt_nome" required autofocus class="input-text"></td>
			<td class="linha l200"><input type="text" name="txt_cidade" required class="input-text"></td>
			<td class="linha l400"><input type="text" name="txt_endereco" required class="input-text"></td>
			<td class="linha l100"><input type="text" name="txt_telefone" required class="input-text"></td>
			<td class="linha l100"><button type="submit" class="btn l100">Ok</td>
		</form>

		<?php

			$nome 		= isset($_POST['txt_nome'])? $_POST['txt_nome'] : "";
			$cidade 	= isset($_POST['txt_cidade'])? $_POST['txt_cidade'] : "";
			$endereco 	= isset($_POST['txt_endereco'])? $_POST['txt_endereco'] : "";
			$telefone 	= isset($_POST['txt_telefone'])? $_POST['txt_telefone'] : "";



			echo($nome);
		?>

	</table>

	
</body>
</html>	