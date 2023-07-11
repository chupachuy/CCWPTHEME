<?php

include $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/comunicacioncientifica/conn.php';


if(isset($_POST['submit'])){
	mysqli_query($conn, ("INSERT INTO suscribe_mail (nombre, mail, ocupacion, institucion) VALUES ('$_POST[nombre]', '$_POST[mail]', '$_POST[ocupacion]', '$_POST[institucion]')"));

}else{
	/*echo "ERROR AL INSERTAR DATOS 2";*/
}

?>