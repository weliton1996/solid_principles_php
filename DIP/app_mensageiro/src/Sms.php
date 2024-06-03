<?php

namespace src;

use src\interfaces\IMensagemToken;

class Sms implements IMensagemToken
{
    public function enviar(): void 
    {
        echo "Sms: Seu token é 555-333";
    }
}