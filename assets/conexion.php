<?php
	$aux_sin_us="propietario dynamite";
    $dbhost="us-cdbr-east-02.cleardb.com";
    $dbuser="bd14eb2f543610";
    $dbpass="231fc2aa";
    $dbname="heroku_2b5ce0a236f4ba4";
    $conn=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(!$conn)
    {
        die("No hay conexion: ".mysqli_connect_error());
    }
?>