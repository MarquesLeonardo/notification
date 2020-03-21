<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$email = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls/ssl)", "port (587)", "from@email.com", "From Name");

$email->sendMail("Testando a biblioteca", "<p>Se você estiver vendo esse <b>E-mail</b> é porque esta tudo configurado corretamente!</p>", "leonardomarquesdasilva1@gmail.com", "reply@email.com", "Replay Name", "address@email.com", "Address Name");

var_dump($email);
