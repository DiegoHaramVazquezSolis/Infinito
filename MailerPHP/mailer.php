<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$direccion = $_POST['email'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['message'];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'Correo';
$mail->Password = 'Contraseña';
$mail->SetFrom('diegoharamvazquezsolis@gmail.com');
$mail->Subject = 'Mensaje de: '.$nombre;
$mail->Body = $mensaje."<br/> <h1>Contacto :".$direccion."</h1>";
$mail->AddAddress('diegoharamvazquezsolis@gmail.com');
$mail->Send();
header("location: ../thanks.html");
?>
