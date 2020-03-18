<?php 
	session_start();
	if($_SESSION["online"] == TRUE) {
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panel de administracion</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<style type="text/css" media="screen">
		h1, p{
			text-align: center;
			margin: 50px auto;
			color: black;
		}
		.container{
			display: flex;
			flex-direction: column;
			flex-wrap: nowrap;
		}
		header{
			width: 100%;
			height: auto;
			
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
		}
		header nav{
			width: 100%;

			display: flex;
			justify-content: center;
		}
		header nav ul{
			width: 100%;
			height: auto;

			display: flex;
			flex-wrap: wrap;
			flex-direction: row;
		}
		header nav ul li{
			list-style-type: none;

			display: flex;
			flex-wrap: wrap;
			flex-grow: 1; 
		}
		header nav ul li a{
			height: 100%;
			color: #fff;
			text-decoration: none;
			font-size: 20px;
			padding: 6px;
			background-color: rgba(0,0,0,0.8);

			display: flex;
			flex-grow: 1; 
			justify-content: center;
			align-items: center;
		}
		header nav ul li a:hover{
			transition: 0.5s;
			background-color: rgba(0,0,0,0.5);
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="container">
		<header>
			<nav>
				<ul>
					<li><a href="registrar_miembro.php">Registrar Miembro</a></li>
					<li><a href="#">OPCION #2</a></li>
					<li><a href="#">OPCION #3</a></li>
					<li><a href="#">OPCION #4</a></li>
					<li><a href="salir.php">Salir</a></li>
				</ul>
			</nav>
		</header>
		<h1>Página de administrador</h1>
	</div>
	
</body>
</html>
 
<?php
	} else {
		header("Location: ../index.php");
	}

?>