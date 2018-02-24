<DOCTYPE <!DOCTYPE html>
<html lang="pt-pt">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Curso de HTML5 com PHP e MySQL</title>
	<link rel="stylesheet" href="_css/style.css">
</head>
<body>
	<header id="header" class="">
		<img src="_img/banner-topo.jpg" alt="Prato Carne">
		
	</header><!-- /header -->
	<nav>
		<?php
			$menu = ["Home", "Restaurante", "Bares", "Buffets", "Faça a sua reserva"];
			$links = ["index.php", "restaurante.php", "bares.php", "buffets.php", "reserva.php"];

			for($c = 0; $c <= 4; $c++ ){
				echo "<li><a href='$links[$c]'>$menu[$c]</a></li>";

			}

		?>
	</nav>

	<section>
		<h1>Lorem Impsum</h1><br>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor minima natus doloribus amet accusamus, asperiores sunt dolores eum veniam odit illum minus rerum. Atque dolore possimus nulla debitis repellendus reprehenderit.
		</p><br>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repudiandae asperiores, vero illo quis sint molestiae quia adipisci non voluptatibus dolores atque modi ipsam praesentium labore nostrum quidem laboriosam quam.
		</p><br>

		<?php
			for($cont = 1; $cont <= 4; $cont++){
				echo "<article class='galeria'>
				<figure>
					<img src='_img/food-$cont.jpg' alt='emagem 1'>
				</figure>	
				</article>";
			}
		?>

	</section>
	<section>
		<h2>Lorem Impsum</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p><br>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p><br>

		
		<form action="" method="post" accept-charset="utf-8">
			<select name="opcao" id="">
				<option value="1">Pratos finos</option>
				<option value="2">Sobremesas</option>
				<option value="3">Sucos</option>
			</select>
			<!-- <button type="submit"><a href="#rodape"></a>Visualizar</button> -->
			<input type="submit" name="" value="Visualizar" class="botao" data-target="#seccao_imagens">
		</form>
		<?php
			$opcao = isset($_POST['opcao']) ? $_POST['opcao'] : "";

			switch ($opcao) {
			 		case 1:
			 			# code...
			 			for($pratos = 1; $pratos <= 8; $pratos++){
			 				echo "<article class='galeria'>
			 					  	<figure>
			 					  		<img src='_img/pratos-finos-$pratos.jpg' alt='Imagens de pratos'>
			 					  	</figure>
			 				      </article>";
			 			}
			 			break;
			 		case 2:
			 			for($sobremesas = 1; $sobremesas <= 8; $sobremesas++){
			 				echo "<article class='galeria'>
									<figure>
										<img src='_img/sobremesa-$sobremesas.jpg' alt='Imagens de sobremesas'>
									</figure>
			 				     </article>";
			 			}
			 		break;
			 		case 3:
			 			for($sucos = 1; $sucos <= 8; $sucos++){
			 				echo "<article class='galeria'>
									<figure>
										<img src='_img/sucos-$sucos.jpg' alt='Images de Sucos'>
									</figure>
			 				      </article>";
			 			}
			 		break;	
			 		
			 		default:
			 			# code...
			 			echo "Opão selecionada não existe!";
			 			break;
			 	} 	
		?>
	</section>

	<footer id="rodape">
		<h5>Cueso de HTML 5 com PHP e MySQL</h5>
	</footer>
	
</body>
</html>