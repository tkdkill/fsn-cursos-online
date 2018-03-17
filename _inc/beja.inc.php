<p class="titulo">Restaurantes em Beja</p>
<p class="left-align">
<?php
	$sql = "SELECT * FROM tb_restaurantes WHERE cidade = 'Beja'";
	$consulta = mysqli_query($conexao, $sql);

	while ($restaurantes = mysqli_fetch_array($consulta)) {
				$id 		= $restaurantes[0];
				$nome 		= $restaurantes[1];
				$cidade 	= $restaurantes[2];
				$endereco 	= $restaurantes[3];
				$telefone 	= $restaurantes[4];

				echo "$nome<br>";
				echo "$cidade<br>";
				echo "$endereco<br>";
				echo "$telefone<br><br>";		
	}

?>

</p>	
