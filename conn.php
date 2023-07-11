<?php
$db_host = "localhost";
$db_user = "comuni64_SusbCtiOnUsEr";
$db_pass = "Xw6a)GLSK5k_";
$db_name = "comuni64_SusCpTiOn#12";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()){
	echo 'Error, no se pudo conectar a la base de datos: '.mysqli_connect_error();
}else{
	/*echo "conectado ";*/
}
?>