<?php
 
	if(isset($_GET["error"]) && $_GET["error"] != "login") {
		header("Location: index.php");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inicio</title>
	<link rel="stylesheet" href="assets/style.css">
	<style type="text/css" media="screen">
		h1, p{
			text-align: center;
			margin: 100px auto;
			color: black;
		}
		form{
			width: 600px;
			height: 100px;
			margin: 200px auto;
		}
		form .texto{
			width: 40%;
			height: 20px;
			padding: 12px;
			margin: 10px 15px;
			text-align: center;
			border: none;
			border-radius: 5px;
			background-color: rgba(0,0,0,.8);
			color: white;
		}
		form .texto:hover{
			transition: 0.5s;
			background-color: rgba(0,0,0,.5);
		}
		form .btn{
			width: 30%;
			height: 50px;
			padding: 10px;
			margin: 10px auto;
			display: block;
			border: none;
			border-radius: 5px;
			background-color: #1B1F50;
			color: white;
			font-size: 18px;
		}
		form .btn:hover{
			cursor: pointer;
			transition: 0.5s;
			background-color: #39409B;
		}
	</style>
</head>
<body>
	<div class="login">
		<h1>Login</h1>
		<?php
 
			if(isset($_GET["error"])) {
				echo "<p class='error'>Usuario y / o Contrasea erroneos. Intentelo de nuevo.</p>";
			}
 
		 ?>
		<form action="php/login.php" method="post">
			<input class="texto" type="text" name="name" placeholder="Usuario">
			<input class="texto" type="password" name="password" placeholder="Password">
			<button type="submit" name="enviar" class="btn btn-default">Entrar</button>
		</form>
	</div>
</body>
</html>