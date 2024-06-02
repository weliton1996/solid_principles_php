<?php

namespace src\dao;

use src\BD;
use src\interfaces\Icadastro;
use src\interfaces\INotificacao;
use src\componentes\Notificacao;

class LeadModel extends BD implements Icadastro, INotificacao
{
    public function salvar()
    {
        //logica
    }
    public function enviarNotificacao(Notificacao $notificacao)
    {
        //logica
    }
}