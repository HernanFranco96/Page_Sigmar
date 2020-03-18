<?php 
	if(isset($_POST['enviar']))
	{
		
		require("conexion.php");

		if(!empty($_POST['name']) && !empty($_POST['password']))
		{

			$name = $_POST['name'];
			$contra = $_POST['password'];

			$consulta = "SELECT * FROM admin WHERE nombre = '$name' AND password = '$contra'";


			foreach ($conection->query($consulta) as $value)
			{
				$userok = $value['nombre'];
				$passok = $value['password'];
			}

			if(isset($name) && isset($contra)){
				if($name == $userok && $contra == $passok)
				{
					session_start();
					$_SESSION['online'] = true;
					header("location: admin.php");
				}
				else 
				{
					Header("Location: ../index.php?error=login");		
				}
			}
		}else 
		{
			header("Location: ../index.php");
		}
	}
?>