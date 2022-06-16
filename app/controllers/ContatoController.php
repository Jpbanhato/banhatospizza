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
        try {
            //Server settings
            $mail->isSMTP();  //Send using SMTP
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug outp
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;            
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                       //Enable SMTP authentication
            $mail->Username   = 'throwaway20030128@gmail.com';                     //SMTP username
            $mail->Password   = 'ssetrreuylyxzdrz';                               //SMTP password
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom($emailDestinatario,$nome);
            $mail->addAddress('throwaway20030128@gmail.com', 'banhatospizza');     //Add a recipient
            $mail->addReplyTo($emailDestinatario);
        
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $assunto;
            $mail->Body    = $msg;
            if(!$mail->send()) {
                echo 'Não foi possível enviar a mensagem. ';
                echo 'Erro: ' . $mail->ErrorInfo;
            } else {
                header('Location: /contato');
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}