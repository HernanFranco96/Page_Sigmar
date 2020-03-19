<?php 
	session_start();
	if($_SESSION["online"] == TRUE) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lista de miembros</title>
	<link rel="stylesheet" href="../assets/style.css">
	<style type="text/css" media="screen">
		h2{
			text-align: center;
		}
		table{
			width: 800px;
			color: white;
			margin: 30px auto;
		}
		table tr th{
			background-color: rgba(0,0,0,.9);
			padding: 10px;
			text-align: center;
			font-size: 25px;
		}
		table tr td{
			background-color: rgba(0,0,0,.7);
			padding: 10px;
			text-align: center;
		}
		input{
			display: block;
			margin: 10px auto;
			padding: 12px;
			border: none;
			border-radius: 4px;
		}
		form{
			margin: auto;
			text-align: center;
			margin-top: 20px;
		}
		form button{
			width: 12%;
			padding: 10px;
			font-size: 20px;
			margin: 10px 10px;
			background-color: rgba(0,0,0,.8);
			color: white;
			border: none;
			border-radius: 4px;
		}
		form button:hover{
			cursor: pointer;
			transition: 0.5s;
			background-color: rgba(0,0,0,.5);
		}
		.formulario_mod{
			display: block;
			margin: 10px auto;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Rango</th>
			<th>Consejo</th>
		</tr>
<?php
    require("conexion.php");

    $consulta = "SELECT * FROM miembros WHERE 1";

    foreach($conection->query($consulta) as $value){
?>
		<tr>
			<td><?php echo $value['id']; ?></td>
			<td><?php echo $value['nombre']; ?></td>
			<td><?php echo $value['rango']; ?></td>
			<td><?php echo $value['consejo']; ?></td>
		</tr>
<?php } ?>
	</table>
	<form action="#" method="post" accept-charset="utf-8">
		<input type="text" name="id" placeholder="Ingrese ID">
		<button type="submit" name="eliminar">Eliminar</button>
		<button type="submit" name="modificar">Modificar</button>
		<button type="button" onclick="location='/Page_Sigmar/php/admin.php'">Volver</button>
	</form>

<?php 
	if(isset($_POST['eliminar']))
	{
		if(!empty($_POST['id']))
		{
			$id = $_POST['id'];

			$delete = "DELETE FROM miembros WHERE id=$id";

			if($conection->query($delete))                                                                         
				echo "<h2>MIEMBRO ELIMINADO</h2>";
		}
		else
			echo "<h2>SELECCIONE ID DE UN MIEMBRO</h2>";
	}

	if(isset($_POST['modificar']))
	{
		if(!empty($_POST['id']))
		{
			$id = $_POST['id'];
			?>
				<form class="formulario_mod" action="#" method="post" accept-charset="utf-8">
					<span>Nombre nuevo</span>
					<input class="texto" type="text" name="nombre">
					<span>Rango nuevo</span>
					<input class="texto" type="text" name="rango">
					<span>Consejo nuevo</span>
					<input class="texto" type="text" name="consejo">

					<button class="btn" type="submit" name="aceptar">Aceptar</button>
				</form>
			<?php
			if(isset($_POST['aceptar']))
			{
				if(!empty($_POST['nombre']) && !empty($_POST['rango']) && !empty($_POST['consejo']))
				{

					$consulta = "SELECT * FROM miembros WHERE id = '$id'";

					foreach ($conection->query($consulta) as $value)
					{
						$userok = $value['id'];
					}
					if(isset($id))
					{
						if($id == $userok)
						{
							$insertar = "UPDATE miembros SET nombre = '$_POST[nombre]', rango = '$_POST[rango]', ,consejo = '$_POST[consejo]'";
							if($conection->query($insertar))
							{
								echo "<h1>MODIFICADO CON EXITO</h1>";
							}
						}
						else
						{
							echo "<h1>EL MIEMBRO NO EXISTE</h1>";
						}
					}
				}
			}
		}
		else
		{
			echo "<h2>SELECCIONE ID DE UN MIEMBRO</h2>";
		}
	}

	} else {
		header("Location: ../index.php");
	}
?>
</body>
</html>