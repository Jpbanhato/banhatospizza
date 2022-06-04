<?php

namespace App\Controllers;

use App\Core\App;
//use Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
class ContatoController
{
    public function show()
    {

        return view('site/contato');
    }
    public function sendEmail( )
    {
        $emailDestinatario = $_POST['email'];
        $assunto = $_POST['assunto'];
        $msg = $_POST['msg'];
        $nome = $_POST['nome'];

        $mail = new PHPMailer();
/*
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'throwaway20030128@gmail.com';
        $mail->Password = 'bernardo1234.';
        $mail->Port = 587;
        $mail->setFrom('throwaway20030128@gmail.com');
        $mail->addReplyTo('no-reply@email.com.br');
        $mail->addAddress($emailDestinatario, $nome);
        $mail->isHTML(true);
        $mail->Subject = $assunto;
        $mail->Body    = $msg;
        if(!$mail->send()) {
            echo 'Não foi possível enviar a mensagem.<br>';
            echo 'Erro: ' . $mail->ErrorInfo;
        } else {
            header('Location: /contato');
        }*/
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'throwaway20030128@gmail.com';                     //SMTP username
            $mail->Password   = 'bernardo1234.';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('throwaway20030128@gmail.com', 'banhatospizza');
            $mail->addAddress($emailDestinatario);     //Add a recipient
            $mail->addReplyTo('no-reply@gmail.com', 'No reply');
        
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $assunto;
            $mail->Body    = $msg;
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
