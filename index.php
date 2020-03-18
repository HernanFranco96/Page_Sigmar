<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inicio</title>
	<link rel="stylesheet" href="assets/style.css">
	<style type="text/css" media="screen">
		form{
			width: 600px;
			height: 100px;
			margin: 200px auto;
		}
		form .texto{
			width: 40%;
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
			width: 40%;
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
	<form action="#" method="post" accept-charset="utf-8">
		<input class="texto" type="text" name="email" placeholder="Ingrese su e-mail">
        <input class="texto" type="password" name="password" placeholder="Ingrese tu contraseña">
        <input class="btn" type="submit" value="Aceptar">
	</form>
</body>
</html>