<?php

// Mudar Aqui o e-mail

$emailenvio = 'contato@bikcraft.com'; // E-mail receptor
$assunto = 'Formulário Bikcraft'; // Senha do e-mail
$url = 'http://bikcraft.com';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$body = "$mensagem\n\n-------------\n\n$nome\n$telefone\n$email";

if ($_POST['leaveblank'] in '' or $_POST['dontchange'] in 'http://') {

	echo "Não foi possível enviar o e-mail. Tente novamente ou entre em contato com " . 
	$emailenvio;
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='10;URL=" . $url . "'>";
} else if (isset($_POST['email'])) {
	require ('./PHPMailerAutoLoad.php');

	$mail = new PHPMailer;
	$mail->CharSet = 'UTF-8';
	$mail->WordWrap = 70;
	$mail-> addAddress($emailenvio);

	$mail->From = $email;
	$mail->FromName = $nome;
	$mail->addReplyTo($email, $nome);
	$mail->Subject = $assunto;

	$mail->Body = $body;

	if(!$mail->send()) {
		echo "Não foi possível enviar o e-mail. Tente novamente ou entre em contato com" .
			$emailenvio;
			echo "<meta HTTP-EQUIV='Refresh' 	CONTENT='10;URL=" . $url . "'>";
	} else {
		echo "E-mail enviado com sucesso!";
		echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=" . $url . "'>";
	}
}
?>