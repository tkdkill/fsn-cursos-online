<?php
	
	header('Content-Type: text/html; charset=utf-8');	
	
	$conexao = mysqli_connect("localhost", "root", "", "bd_registo");

	$nome 		= isset($_POST['txt_nome'])		 ? $_POST['txt_nome'] 		: "";
	$cidade 	= isset($_POST['select_cidade']) ? $_POST['select_cidade'] 	: "";
	$endereco 	= isset($_POST['txt_endereco'])	 ? $_POST['txt_endereco'] 	: "";
	$telefone 	= isset($_POST['txt_telefone'])	 ? $_POST['txt_telefone'] 	: "";


	// INSERINDO REGISTOS		


	if(!$conexao){
		die("Erro na ligação" . msql_error());
	}else{
		/*echo "Conexão com sucesso";*/
		$sql = "INSERT INTO tb_restaurantes (nome, cidade, endereco, telefone) VALUES ('$nome', '$cidade', '$endereco', '$telefone')";
		$gravar = mysqli_query($conexao, $sql);

		header("Location:admin.php");		

	}
	mysqli_close($conexao);

	/*echo $nome . "<br>";
	echo $cidade . "<br>";
	echo $endereco . "<br>";
	echo $telefone;*/


	
		/*INSERT INTO `tb_restaurantes` (`id`, `nome`, `cidade`, `endereco`, `telefone`) VALUES (NULL, 'teste', 'Porto', 'Rua do porto', '912536587');*/

			
?>