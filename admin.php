<?php
	$conexao = mysqli_connect("localhost", "root", "", "bd_registo");
?>

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

		<form method="post" action="processa_registo.php" accept-charset="utf-8">
			
			<td class="linha l200"><input type="text" name="txt_nome" required autofocus class="input-text"></td>
			<td class="linha l200">
				<select name="select_cidade" class="input-text">
					<option value="Lisboa">Lisboa</option>
					<option value="Porto">Porto</option>
					<option value="Coimbra">Coimbra</option>
					<option value="Beja">Beja</option>
				</select>
			</td>
			<td class="linha l400"><input type="text" name="txt_endereco" required class="input-text"></td>
			<td class="linha l100"><input type="text" name="txt_telefone" required class="input-text"></td>
			<td class="linha l100"><button type="submit" class="btn l100">Ok</td><tr>
		</form>

		<?php 
			$sql = "SELECT * FROM tb_restaurantes";
			$consulta = mysqli_query($conexao, $sql);

			while ($restaurantes = mysqli_fetch_array($consulta)) {
				$id 		= $restaurantes[0];
				$nome 		= $restaurantes[1];
				$cidade 	= $restaurantes[2];
				$endereco 	= $restaurantes[3];
				$telefone 	= $restaurantes[4];

				echo "<td class='linha l400'>$nome</td>";
				echo "<td class='linha l100'>$cidade</td>";
				echo "<td class='linha l200'>$endereco</td>";
				echo "<td class='linha l200' colspan='2'>$telefone</td></tr>";
				
			}
		?>

	</table>

	
</body>
</html>	