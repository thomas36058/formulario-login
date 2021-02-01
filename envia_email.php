<?php

// error_reporting(E_ALL);
// ini_set("display_errors", 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

try {

    $mail = new PHPMailer(true);
    
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'thomas.simoes@mktvirtual.com.br';      // SMTP username
    $mail->Password   = 'Thomas@36058';                         // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //From email address and name
    $mail->From = "thomas.simoes@mktvirtual.com.br";
    $mail->FromName = "Thomas De Grava";

    //To address and name
    $mail->addAddress("{$email}");

    //New password
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 10; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    $nova_senha = implode($pass); //turn the array into a string

    // Content
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'Formulario de Login - Esqueceu sua senha';
    $mail->Body    = "<html>
                        <p><strong>Nova senha: </strong>$nova_senha</p>
                        <a href='http://localhost/formulario-login/' target='_blank'>Acessar sua conta</a>
                      </html>";
    $mail->AltBody = '';
    
    $mail->send();
    exit();
    
} catch( Exception $e ) {
    exit();
    echo $e->getMessage();
}

?>