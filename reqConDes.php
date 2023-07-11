<?php

$varphp_idContDes = $_POST['varjs_idContDes'];

$host = "localhost";
$user = "comuni64_ConTeO12";
$pass = '_]PGR&6!dGiw';
$database = "comuni64_contPost";
$con = mysqli_connect($host, $user, $pass, $database);

$varQuery = 'SELECT * FROM contDescLib WHERE id_post = "'.$varphp_idContDes.'"';
$varEjecuta = mysqli_query($con,$varQuery);
$num_rows = mysqli_num_rows($varEjecuta);

if ( $num_rows ) {
	// echo 'Existe registro sumar 1';
	$varUso = mysqli_fetch_array($varEjecuta);
	$varSumCont = $varUso['cont'] + 1;
	$varQueryUpd = 'UPDATE contDescLib SET cont = "'.$varSumCont.'" WHERE id_post = "'.$varphp_idContDes.'"';
	$varEjec = mysqli_query($con, $varQueryUpd);
}else{
	// echo 'No existe registro crearlo';
	$varQueryInsert = "INSERT INTO contDescLib (id_post, cont) VALUES ('".$varphp_idContDes."','1')";
	$varEjec = mysqli_query($con, $varQueryInsert);
}

$varQuery = 'SELECT * FROM contDescLib WHERE id_post = "'.$varphp_idContDes.'"';
$varEjecuta = mysqli_query($con,$varQuery);
$varUso = mysqli_fetch_array($varEjecuta);

echo $varUso['cont'];

?>