<?php 

require __DIR__ .'/vendor/autoload.php';

// echo "Teste DIP";

use src\Mensageiro;
use src\Whatsapp;
use src\Email;
use src\Sms;

// canal whatsapp
$msg1 = new Mensageiro(new Whatsapp());
$msg1->enviarToken();

echo '<br>';

// canal e-mail
$msg2 = new Mensageiro( new Email());
$msg2->enviarToken();

echo '<br>';

// canal sms
$msg3 = new Mensageiro(new Sms());
$msg3->enviarToken();

/*
// canal e-mail
$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();

echo '<br>';

// canal sms
$msg = new Mensageiro();
$msg->setCanal('sms');
$msg->enviarToken();
*/