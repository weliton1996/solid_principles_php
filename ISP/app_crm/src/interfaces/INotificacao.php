<?php

namespace src\interfaces;

use src\componentes\Notificacao;

//Segregando as interfaces
interface INotificacao 
{
    public function enviarNotificacao(Notificacao $notificacao);
}