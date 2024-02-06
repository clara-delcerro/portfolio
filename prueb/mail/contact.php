<?php
if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = "claradelcerrolopez@gmail.com"; 
$subject = "$m_subject:  $name";
$body = "Has recibido un nuevo mensaje de tu portfolio.\n\n"."Detalles:\n\nName: $name\n\n\nEmail: $email\n\Asunto: $m_subject\n\nMensaje: $message";
$header = "De: $email";
$header .= "Contestar: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
