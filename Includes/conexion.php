<?php

function conectar($usuario, $contrasena){
		$servidor = "localhost";
		$puerto = "5432";
		$dbname = "congresos";

		$conexion = pg_connect( "host=" .$servidor. " port=" .$puerto. " dbname=" .$dbname. " user=" .$usuario. " password=" .$contrasena )
			or die ("No se ha podido conectar con la base de datos" . pg_last_error());
}

?>