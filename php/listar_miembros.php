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
			margin: 100px auto;
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
			margin-top: -50px;
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
		?>
		
		<?php
	}
?>
</body>
</html>