<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = 'infocomunicacioncientifica@gmail.com ';
$title = 'Mensaje de contacto desde Comunicación Cientifica Web';
$header = 'De: '.$email;
/*$body = "Nombre: $name\n Email: $email\n Telefono: $phone\n Asunto: $subject\n Mensaje: $message";*/

// Compose a simple HTML email message
$msg =$subject."\n";
$msg .=$email."\n";
$msg .=$message."\n";
$msg .=$phone;

	if(mail($to, $title, $header, $msg)){
		//Si el mensaje se envía muestra una confirmación
		echo '<div class="alert alert-success" role="alert">
  Su mensaje fue enviado correctamente. En breve nos pondremos en contacto con usted.
</div>';
	}else{
		//Si el mensaje no se envía muestra el mensaje de error
echo '<div class="alert alert-warning" role="alert">
  Algo salio mal. intente de nuevo mas tarde.
</div>';
	}



?>