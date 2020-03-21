<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$email = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls/ssl)", "port (587)", "from@email.com", "From Name");

$email->sendMail("Testing the library", "<p>If you are seeing this <b> Email </b> it is because everything is set up correctly!</p>", "reply@email.com", "Replay Name", "address@email.com", "Address Name");

var_dump($email);
