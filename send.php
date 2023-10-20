<?php

date_default_timezone_set('Africa/Maputo');

require_once('phpmailer/PHPMailer.php');
require_once('phpmailer/SMTP.php');
require_once('phpmailer/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['message']) && !empty(trim($_POST['message'])))) {

	$name = !empty($_POST['name']) ? $_POST['name'] : 'Não informado';
	$email = $_POST['email'];
	$subject = !empty($_POST['subject']) ? utf8_decode($_POST['subject']) : 'Não informado';
	$message = $_POST['message'];
	$data = date('d/m/Y H:i:s');


	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = '';
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPAuth = true;
	$mail->Username = '';
	$mail->Password = '';
	$mail->Port = 465;

	$mail->setFrom('');
	$mail->addAddress('');

	$mail->isHTML(true);
	$mail->Subject = $subject;
	$mail->Body = "Nome: {$name}<br>
				   Email: {$email}<br>
				   Telefone: {$phone}<br>
				   Mensagem: {$message}<br>
				   Data/hora: {$data}";

	if ($mail->send()) {
		echo "<script language='javascript'>alert('Enviado com sucesso');
		window.location='index.php';</script>";
	} else {
		echo "<script language='javascript'>alert('Erro ao tentar enviar a mensagem, tente de novo.');
				window.location='index.php';</script>";
	}
} else {
	// $email['msg_erro'] = "Erro, preenche os campos obrigatorios";
	echo "<script language='javascript'>alert('Erro, preenche os campos obrigatorios');</script>";
}
