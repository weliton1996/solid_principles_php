<?php

namespace src\dao;

use src\BD;
use src\interfaces\Icadastro;
use src\componentes\Log;
use src\componentes\Notificacao;

class LeadModel extends BD implements Icadastro
{
    public function salvar()
    {
        //logica
    }
    public function registrar(Log $log)
    {
        //logica
    }
    public function enviarNotificacao(Notificacao $notificacao)
    {
        //logica
    }
}