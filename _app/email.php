<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email {

    private $mail = \stdClass::class;

    public function __construct($smtpDebug, $host, $user, $pass, $smtpSecure, $port, $setFromEmail, $setFromName) 
    {
        $this->mail = new PHPMailer(true);
        //dados de envio
        $this->mail->SMTPDebug = $smtpDebug;                      //o numero 2 significa que esta em modo debug, Enable verbose debug output
        $this->mail->isSMTP();                                            // Send using SMTP
        $this->mail->Host = $host;                    // Set the SMTP server to send through
        $this->mail->SMTPAuth = true;                                   // Enable SMTP authentication
        $this->mail->Username = $user;                     // SMTP username
        $this->mail->Password = $pass;                               // SMTP password
        $this->mail->SMTPSecure = $smtpSecure;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mail->Port = $port;
        //configuração para lingua portuguesa
        $this->mail->CharSet = 'UTF-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(TRUE);
        //configuração de quem vai receber
        $this->mail->setFrom($setFromEmail, $setFromName);
    }

    public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName) {
        $this->mail->Subject = (string) $subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail, $addressName);

        try {
            $this->mail->send();
        } catch (Exception $ex) {
            echo "Erro ao enviar o e-mail: {$this->mail->ErrorInfo} {$ex->getMessage()}";
        }
    }

}


