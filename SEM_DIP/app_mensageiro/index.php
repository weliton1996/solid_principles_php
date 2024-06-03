<?php 

require __DIR__ .'/vendor/autoload.php';

// echo "Teste DIP";

use src\Mensageiro;

// canal e-mail
$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();

echo '<br>';

// canal sms
$msg = new Mensageiro();
$msg->setCanal('sms');
$msg->enviarToken();