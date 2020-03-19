<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registrar Miembro</title>
	<link rel="stylesheet" href="../assets/style.css">
	<style type="text/css" media="screen">
		h1{
			text-align: center;
			margin-bottom: 40px;
		}
		form{
			width: 700px;
			height: 500px;
			margin: 40px auto;
		}
		form span{
			width: 100%;
			display: block;
			font-size: 24px;
			margin: 20px auto;
			text-align: center;
		}
		form .texto{
			width: 40%;
			display: block;
			padding: 10px;
			margin: 0 auto;
			border: 0;
			border-radius: 4px;
			background-color: rgba(0,0,0,.8);
			color: white;
			font-size: 15px;
		}
		form .btn{
			width: 25%;
			padding: 10px;
			font-size: 20px;
			margin: 20px 85px;
			background-color: rgba(0,0,0,.8);
			color: white;
			border: none;
			border-radius: 4px;
		}
		form .btn:hover{
			cursor: pointer;
			transition: 0.5s;
			background-color: rgba(0,0,0,.5);
		}
	</style>
</head>
<body>
	<form action="#" method="post" accept-charset="utf-8">
		<span>Nombre</span>
		<input class="texto" type="text" name="nombre">
		<span>Rango</span>
		<input class="texto" type="text" name="rango">
		<span>Consejo</span>
		<input class="texto" type="text" name="consejo">

		<button class="btn" type="submit" name="aceptar">Aceptar</button>
		<button class="btn" type="button" name="volver" onclick="location='/Page_Sigmar/php/admin.php'">Volver</button>
	</form>
	<?php 
		if(isset($_POST['aceptar']))
		{
			$userok = "";
			require("conexion.php");

			if(!empty($_POST['nombre']) && !empty($_POST['rango']) && !empty($_POST['consejo']))
			{
				$name = $_POST['nombre'];

				$consulta = "SELECT * FROM miembros WHERE nombre = '$name'";

				foreach ($conection->query($consulta) as $value)
				{
					$userok = $value['nombre'];
				}
				if(isset($name))
				{
					if($name != $userok)
					{
						$insertar = "INSERT INTO miembros (nombre,rango,consejo) VALUES ('$_POST[nombre]',
																					'$_POST[rango]',
																					'$_POST[consejo]')";
						if($conection->query($insertar))
						{
							echo "<h1>REGISTRADO CON EXITO</h1>";
						}
					}
					else 
					{
						echo "<h1>MIEMBRO YA EXISTENTE</h1>";	
					}
				}
			}
		}
	?>
</body>
</html>