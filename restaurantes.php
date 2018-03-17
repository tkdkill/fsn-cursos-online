<?php $conexao = mysqli_connect("localhost", "root", "", "bd_registo"); ?>
<DOCTYPE <!DOCTYPE html>
<html lang="pt-pt">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Restaurentes</title>
	<link rel="stylesheet" href="_css/style.css">
</head>
<body>
	<!-- /header -->
	<header id="header" class="">
		<img src="_img/banner-topo-restaurantes.jpg" alt="Restaurantes">
		
	</header>

	<!-- Barra de navegação -->
	<nav>
		<?php
			$menu = ["Home", "Restaurante", "Bares", "Buffets", "Faça a sua reserva"];
			$links = ["index.php", "restaurante.php", "bares.php", "buffets.php", "reserva.php"];

			for($c = 0; $c <= 4; $c++ ){
				echo "<li><a href='$links[$c]'>$menu[$c]</a></li>";
			}
		?>
	</nav>
	<!-- secção 1 -->
	<section>
		<!-- article -->
		<article class="mini center-align border-bottom">
			<img src="_img/restaurante-small-1.jpg" class="circular" alt="Restaurante-1"><br>
			<span class="titulo">Lorem Impsum</span>
			<p class="center-align">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ut, voluptatibus explicabo.
			</p>	
		</article>
		<article class="mini center-align border-bottom">
			<img src="_img/restaurante-small-2.jpg" class="circular" alt="Restaurante-1"><br>
			<span class="titulo">Lorem Impsum</span>
			<p class="center-align">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ut, voluptatibus explicabo.
			</p>	
		</article>
		</article>
		<article class="mini center-align border-bottom">
			<img src="_img/restaurante-small-3.jpg" class="circular" alt="Restaurante-1"><br>
			<span class="titulo">Lorem Impsum</span>
			<p class="center-align">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ut, voluptatibus explicabo.
			</p>	
		</article>		
	</section>
	<!-- secção 2 -->
	<section>
		<p class="titulo">Pesquisar Restaurantes</p><br>
		<form action="" method="post" accept-charset="utf-8">
			<select name="opcao" class="campo">
				<option value="1">Lisboa</option>
				<option value="2">Porto</option>
				<option value="3">Coimbra</option>
				<option value="4">Beja</option>			
			</select>
			<button type="submit" class="btn">ok</button>
		</form>
		
	

	<!-- incluir ficheiros php -->
	<?php

		$opcao = isset($_POST['opcao']) ? ($_POST['opcao']) :"";

		if($opcao == 1){
			include "_inc/lisboa.inc.php";
		}elseif ($opcao == 2) {
			include "_inc/porto.inc.php";
		}elseif ($opcao == 3) {
			include "_inc/coimbra.inc.php";
		}elseif ($opcao == 4) {
			include "_inc/beja.inc.php";
		}
	?>
</section>
	<footer id="rodape">
		<h5>Cueso de HTML 5 com PHP e MySQL</h5>
	</footer>
	
</body>
</html>