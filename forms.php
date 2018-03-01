<?php
/*
Template Name: Forms
*/

if(count($_POST) > 0):
	$post = (object)$_POST;
	$to = array('felipe.ferreira.ads@gmail.com');
	$subject = 'Contato Via Site'; 
	$headers = array('Content-Type: text/html; charset=UTF-8');

	$message  = '<h1>Contato Via Site</h1>';
	$message .= '<p>Nome      : '.$post->nome.'</p>';
	$message .= '<p>E-mail    : '.$post->email.'</p>';
	$message .= '<p>Telefone  : '.$post->telefone.'</p>';
	$message .= '<p>Mensagem  : '.$post->mensagem.'</p>';

	if(wp_mail($to, $subject, $message, $headers)):
		echo json_encode(array('mensagem' => 'Mensagem enviada com sucesso.'));
	else:
		echo json_encode(array('mensagem' => 'Falha ao enviar. Tente novamente.'));
	endif;
else:
	echo 'Nada para mostrar aqui.';
endif;