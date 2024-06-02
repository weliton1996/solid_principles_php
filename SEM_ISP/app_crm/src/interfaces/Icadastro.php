<?php

namespace src\interfaces;

use src\componentes\Log;
use src\componentes\Notificacao;

interface Icadastro 
{
    public function salvar();
    public function registrar(Log $log);
    public function enviarNotificacao(Notificacao $notificacao);
}