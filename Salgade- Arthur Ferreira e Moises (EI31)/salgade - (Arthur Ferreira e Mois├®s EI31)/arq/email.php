<?php

// Opção B - envio de e-mail com PHPMailer (SMTP do Gmail, porta 587 + STARTTLS)
// Requer: composer require phpmailer/phpmailer (na pasta do projeto)
// Credenciais: C:\xampp\config\smtp.php (fora do htdocs)

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

function enviar_email($destinatario, $assunto, $mensagem_html, $mensagem_texto = '') {

    $config = require 'C:/xampp/config/smtp.php';

    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $config['usuario'];
        $mail->Password   = $config['senha'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->CharSet    = 'UTF-8';

        $mail->setFrom($config['usuario'], 'Salgadê');
        $mail->addAddress($destinatario);

        $mail->isHTML(true);
        $mail->Subject = $assunto;
        $mail->Body    = $mensagem_html;
        $mail->AltBody = $mensagem_texto;

        $mail->send();
        return true;

    } catch (Exception $e) {

        error_log('Erro PHPMailer: ' . $mail->ErrorInfo);
        return false;

    }

}

?>
