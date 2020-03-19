<?php 
    $host = "localhost";
    $db = "baseSigmar";
    $user = "root";
    $pass = "";

    try
    {
        $conection = new PDO("mysql:host=$host; dbname=$db", $user, $pass);  
    }
    catch(PDOException $e)
    {
        echo "<h1 class='mensajeServer'>Error no puedo conectarme con la base de datos: ".$e->getMessage()."</h1";
    }
?>