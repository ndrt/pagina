
<?php
$correo = "jhon30g@gmail.com";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$contenido = "Email: ".$email."\n mensaje: ".$mensaje;

if($nombre == "" || $email == "" || $mensaje == ""){
	echo "A OCURRIDO UN ERROR AL ENVIAR";
}else{
mail($correo,$nombre,$contenido);
header("location:gracias.htm");

}


?>

