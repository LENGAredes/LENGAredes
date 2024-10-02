<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Envia mail</title>
</head>

<body>
<?php
if($_POST['edo']){
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['correo'];
	$comentario = $_POST['comentario'];
	if($nombre==""){
		print "El nombre es obligatorio<br>";
	} else if($apellido == ""){
		print "El apellido es obligatorio<br>";
	} else if($correo == ""){
		print "El correo es obligatorio<br>"; 
	}  else if($comentario == ""){
		print "El comentario es obligatorio<br>";
	} else {
		$mail = "fj_arce@yahoo.com.mx";
		$mensaje = "$nombre $apellido ha enviado un mail.<br>";
		$mensaje .= "Su mail es $correo y su mensaje es:<br>";
		$mensaje .= $comentario;
		
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type:text/html; charset=UTF-8\r\n"; 
		$headers .= "From: ".$_POST['correo']."\r\n"; 
		$headers .= "Repaly-to: $correo\r\n";
		
		$asunto = "$nombre $apellido ha enviado un mail";
		
		if(mail($mail, $asunto, $mensaje,$headers)){
			print "Su comentario ha sido enviado exitosamente<br>";
		} else {
			print "Error en el envío de su correo, intentarlo más tarde<br>";
		}
		
	}
	
} else {
?>
<form method="post" action="enviaMail.php">
Nombre: <input type="text" name="nombre"/><br />
Apellido:<input type="text" name="apellido"/><br />
Correo: <input type="text" name="correo"/><br />
Comentario: <br />
<textarea name="comentario" cols="50" rows="6" wrap="off"></textarea>
<br />
<input type="submit" value="Enviar" />
<input type="hidden" value="1" name="edo" />
</form>
<?php } ?>
</body>
</html>